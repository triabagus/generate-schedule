<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lecturer;
use App\Models\Teach;
use App\Models\Room;
use Illuminate\Http\Request;

class TeachController extends Controller
{

    public function index(Request $request)
    {
        $searchlecturers = $request->input('searchlecturers');
        $searchcourse    = $request->input('searchcourse');
        $searchroom    = $request->input('searchclass');
        $teachs          = Teach::whereHas('lecturer', function ($query) use ($searchlecturers)
        {

            if (!empty($searchlecturers))
            {
                $query = $query->where('lecturers.name', 'LIKE', '%' . $searchlecturers . '%');
            }
        })->whereHas('course', function ($query) use ($searchcourse)
        {
            if (!empty($searchcourse))
            {
                $query = $query->where('courses.name', 'LIKE', '%' . $searchcourse . '%');
            }
        })->whereHas('room', function ($query) use ($searchroom)
        {
            if (!empty($searchroom))
            {
                $query = $query->where('rooms.name', 'LIKE', '%' . $searchroom . '%');
            }
        });

        // if (!empty($request->searchclass))
        // {
        //     $teachs = $teachs->where('rooms.name', 'LIKE', '%' . $request->searchclass . '%');
        // }

        // if (!empty($request->searchclass))
        // {
        //     $teachs = $teachs->where('rooms.name', 'LIKE', '%' . $request->searchclass . '%');
        // }

        $teachs = $teachs->orderBy('id', 'desc')->paginate(10);

        // dd($teachs);
        return view('admin-news.teach.index', compact('teachs'));
    }

    public function create(Request $request)
    {
        $lecturers = Lecturer::orderBy('name', 'asc')->pluck('name', 'id');
        $courses   = Course::orderBy('name', 'asc')->pluck('name', 'id');
        $room      = Room::orderBy('name', 'asc')->pluck('name', 'id');

        return view('admin-news.teach.create', compact('lecturers', 'courses','room'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'roomclass' => 'required',
            'lecturers' => 'required',
            'courses'   => 'required',
        ]);

        $params = [
            'class_room'   => $request->input('roomclass'),
            'lecturers_id' => $request->input('lecturers'),
            'courses_id'   => $request->input('courses'),
        ];

        $teachs = Teach::create($params);

        return redirect()->route('admin.teachs');
    }

    public function edit($id)
    {
        $teachs    = Teach::find($id);
        $lecturers = Lecturer::orderBy('name', 'asc')->pluck('name', 'id');
        $courses   = Course::orderBy('name', 'asc')->pluck('name', 'id');
        $room      = Room::orderBy('name', 'asc')->pluck('name', 'id');

        if ($teachs == null)
        {
            return view('admin-news.layouts.404');
        }

        return view('admin-news.teach.edit', compact('teachs', 'lecturers', 'courses','room'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'roomclass' => 'required',
            'lecturers' => 'required',
            'courses'   => 'required',
        ]);

        $teachs               = Teach::find($id);
        $teachs->class_room   = $request->input('roomclass');
        $teachs->lecturers_id = $request->input('lecturers');
        $teachs->courses_id   = $request->input('courses');
        $teachs->save();

        return redirect()->route('admin.teachs');
    }

    public function destroy($id)
    {
        Teach::find($id)->delete();

        return redirect()->route('admin.teachs')->with('success', 'Pengampu berhasil dihapus');
    }
}

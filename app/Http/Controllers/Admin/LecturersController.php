<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturersController extends Controller
{

    public function index(Request $request)
    {
        $lecturers = Lecturer::orderBy('id', 'desc');

        if (!empty($request->searchname))
        {
            $lecturers = $lecturers->where('name', 'LIKE', '%' . $request->searchname . '%');
        }

        

        $lecturers = $lecturers->paginate(10);

        return view('admin-news.lecturer.index', compact('lecturers'));
    }
    public function create(Request $request)
    {
        return view('admin-news.lecturer.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
<<<<<<< HEAD
            // 'nidnlecturer'   => 'required',
            'name'           => 'required',
=======
            'nidnlecturer'   => 'required',
            'name'           => 'required|unique:lecturers,name',
>>>>>>> ec2e2c0373ce816dbe849ae0bbee95ba0340da85

        ]);

        $params = [
            // 'nidn'           => $request->input('nidnlecturer'),
            'name'           => $request->input('name'),
        ];

        $lecturers = Lecturer::create($params);

        return redirect()->route('admin.lecturers');
    }

    public function edit($id)
    {
        $lecturers = Lecturer::find($id);

        if ($lecturers == null)
        {
            return view('admin-news.layouts.404');
        }

        return view('admin-news.lecturer.edit', compact('lecturers'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
<<<<<<< HEAD
            'name'           => 'required',
=======
            'nidnlecturer'   => 'required',
            'name'           => 'required|unique:lecturers,name',
>>>>>>> ec2e2c0373ce816dbe849ae0bbee95ba0340da85

        ]);

        $lecturers                 = Lecturer::find($id);
        // $lecturers->nidn           = $request->input('nidnlecturer');
        $lecturers->name           = $request->input('name');
        $lecturers->save();

        return redirect()->route('admin.lecturers');
    }

    public function destroy($id)
    {
        Lecturer::find($id)->delete();

        return redirect()->route('admin.lecturers')->with('success', 'Data guru berhasil dihapus');
    }

}

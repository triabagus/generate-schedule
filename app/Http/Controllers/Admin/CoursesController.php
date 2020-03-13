<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teach;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(Request $request)
    {

        $courses = Course::orderBy('id', 'desc');

        if (!empty($request->searchname))
        {
            $courses = $courses->where('name', 'LIKE', '%' . $request->searchname . '%');
        }

        $courses = $courses->paginate(10);

        return view('admin-news.courses.index', compact('courses'));
    }

    public function create(Request $request)
    {

        return view('admin-news.courses.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'namecourses'  => 'required|unique:courses,name'
        ]);

        $params = [
            'name'         => $request->input('namecourses')
        ];

        $courses = Course::create($params);

        return redirect()->route('admin.courses');
    }

    public function edit($id)
    {
        $courses = Course::find($id);

        if ($courses == null)
        {
            return view('admin-news.layouts.404');
        }

        return view('admin-news.courses.edit', compact('courses'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'namecourses'  => 'required|unique:courses,name'

        ]);

        $courses               = Course::find($id);
        $courses->name         = $request->input('namecourses');
        $courses->save();

        return redirect()->route('admin.courses');
    }

    public function destroy($id)
    {
        $teachs = Teach::where('courses_id', $id)->first();

        if (!empty($teachs))
        {
            return redirect()->route('admin.courses')->with('danger', 'Anda Harus Menghapus Data Pengampu yang Berhubungan Dengan Mata Pelajaran Ini Terlebih Dahulu');
        }
        else
        {
            Course::find($id)->delete();
        }

        return redirect()->route('admin.courses')->with('success', 'Mata Pelajaran Berhasil Dihapus');
    }
}

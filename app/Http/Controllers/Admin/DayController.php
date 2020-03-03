<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Models\Timenotavailable;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function index(Request $request)
    {
        $days = Day::orderBy('id', 'desc')->paginate(10);

        return view('admin-news.day.index', compact('days'));
    }

    public function create(Request $request)
    {
        $days  = Day::orderBy('name_day', 'desc')->pluck('name_day', 'id');

        return view('admin-news.day.create', compact('days'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name_day'  => 'unique:days,name_day|required',

        ]);

        $params = [
            'name_day'  => $request->input('name_day', 'id'),
        ];

        $days = Day::create($params);

        return redirect()->route('admin.days');
    }

    public function edit($id)
    {
        $days = Day::find($id);

        if ($days == null)
        {
            return view('admin-news.layouts.404');
        }

        return view('admin-news.day.edit', compact('days'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_day'  => 'required|unique:days,name_day',
        ]);

        $days            = Day::find($id);
        $days->name_day  = $request->input('name_day');
        $days->save();

        return redirect()->route('admin.days');
    }

    public function destroy($id)
    {
        $timenotavailables = Timenotavailable::where('days_id', $id)->first();

        if (!empty($timenotavailables))
        {
            return redirect()->route('admin.times')->with('danger', 'Anda Harus Menghapus Data Waktu Yang Berhalangan yang Berhubungan Dengan Hari Ini Terlebih Dahulu');
        }
        else
        {
            Day::find($id)->delete();
        }

        return redirect()->route('admin.days')->with('success', 'Hari berhasil dihapus');
    }
}

<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Models\Time;
use App\Models\Timeday;
use Illuminate\Http\Request;

class TimedayController extends Controller
{

    public function index(Request $request)
    {
        $timedays = Timeday::orderBy('id', 'desc')->paginate(10);
        // $timedays = Timeday::with('time')->with('day')->paginate(10);

        return view('admin-news.timeday.index', compact('timedays'));
    }

    public function create(Request $request)
    {

        $days  = Day::orderBy('name_day', 'desc')->pluck('name_day', 'id');
        $times = Time::orderBy('range', 'asc')->pluck('range', 'id');

        return view('admin-news.timeday.create', compact('days', 'times'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'days'          => 'required|unique:timedays,days_id,NULL,NULL,times_id,'.$request['times'],
            'times'         => 'required|unique:timedays,times_id,NULL,NULL,days_id,'.$request['days'],
        ]);

        $params = [
            'days_id'       => $request->input('days'),
            'times_id'      => $request->input('times'),
        ];

        $timedays = Timeday::create($params);

        return redirect()->route('admin.timedays');
    }

    public function edit($id)
    {
        $timedays = Timeday::find($id);
        $days     = Day::orderBy('name_day', 'desc')->pluck('name_day', 'id');
        $times    = Time::orderBy('range', 'asc')->pluck('range', 'id');

        if ($timedays == null)
        {
            return view('admin-news.layouts.404');
        }

        return view('admin-news.timeday.edit', compact('timedays', 'days', 'times'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'days'          => 'required|unique:timedays,days_id,NULL,NULL,times_id,'.$request['times'],
            'times'         => 'required|unique:timedays,times_id,NULL,NULL,days_id,'.$request['days'],
        ]);

        $timedays                = Timeday::find($id);
        $timedays->days_id       = $request->input('days');
        $timedays->times_id      = $request->input('times');
        $timedays->save();

        return redirect()->route('admin.timedays');
    }

    public function destroy($id)
    {
        Timeday::find($id)->delete();

        return redirect()->route('admin.timedays')->with('success', 'Data management waktu berhasil dihapus');
    }

}

<?php namespace App\Http\Controllers\Admin;

use App\Algoritma\GenerateAlgoritma;
use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Schedule;
use App\Models\Room;
use App\Models\Day;
use App\Models\Time;
use App\Models\Setting;
use App\Models\Teach;
use Excel;
use Illuminate\Http\Request;

class GenetikController extends Controller
{
    public function index(Request $request)
    {
        // $years = Teach::select('year')->groupBy('year')->pluck('year', 'year');

        // return view('admin.genetik.index', compact('years'));
        return view('admin.genetik.index');
    }

    public function submit(Request $request)
    {
        // $years            = Teach::select('year')->groupBy('year')->pluck('year', 'year');
        $input_kromosom   = $request->input('kromosom');
        // $input_year       = $request->input('year');
        // $input_semester   = $request->input('semester');
        $input_generasi   = $request->input('generasi');
        $input_crossover  = $request->input('crossover');
        $input_mutasi     = $request->input('mutasi');
        $count_lecturers  = Lecturer::count();
        $count_teachs     = Teach::count();
        $kromosom         = $input_kromosom * $input_generasi;
        $crossover        = $input_kromosom * $input_crossover;
        $generate         = new GenerateAlgoritma;
        // $data_kromosoms   = $generate->randKromosom($kromosom, $count_teachs, $input_year, $input_semester);
        // $testing = $generate->randomingProcess(0);
        // dd($testing);
        $data_kromosoms   = $generate->randKromosom($kromosom, $count_teachs);
        $result_schedules = $generate->checkPinalty();

        $total_gen        = Setting::firstOrNew(['key' => 'total_gen']);
        $total_gen->name  = 'Total Gen';
        $total_gen->value = $crossover;
        $total_gen->save();

        $mutasi        = Setting::firstOrNew(['key' => 'mutasi']);
        $mutasi->name  = 'Mutasi';
        $mutasi->value = (3 * $count_teachs) * $input_kromosom * $input_mutasi;
        $mutasi->save();

        return redirect()->route('admin.generates.result', 1);
    }

    public function result($id)
    {
        // $years       = Teach::select('year')->groupBy('year')->pluck('year', 'year');
        $kromosom       = Schedule::select('type')->groupBy('type')->get()->count();
        $crossover      = Setting::where('key', Setting::CROSSOVER)->first();
        $mutasi         = Setting::where('key', Setting::MUTASI)->first();
        $value_schedule = Schedule::where('type', $id)->first();
        $schedules      = Schedule::join('teachs', 'teachs.id', '=', 'schedules.teachs_id')
            ->join('lecturers', 'lecturers.id', '=', 'teachs.lecturers_id')
            ->orderBy('lecturers_id', 'desc')
            ->orderBy('times_id', 'desc')
            ->where('type', $id)
            ->paginate();

        if (empty($value_schedule))
        {
            abort(404);
        }

        for ($i = 1; $i <= $kromosom; $i++)
        {
            $value_schedules = Schedule::where('type', $i)->first();
            $data_kromosom[] = [
                'value_schedules' => $value_schedules->value,
            ];
        }

        // dd($schedules); //cek crossover & mutasi
        // return view('admin.genetik.result', compact('schedules', 'years', 'data_kromosom', 'id', 'value_schedule', 'crossover', 'mutasi'));
        return view('admin.genetik.result', compact('schedules',  'data_kromosom', 'id', 'value_schedule', 'crossover', 'mutasi'));
    }

    public function excel($id)
    {
        $schedules = Schedule::orderBy('days_id', 'desc')
            ->orderBy('times_id', 'desc')
            ->where('type', $id)
            ->get();

        return Excel::create('Algoritma Genetika', function ($excel) use ($schedules)
        {
            $excel->sheet('Genetika', function ($sheet) use ($schedules)
            {
                $sheet->loadView('admin.genetik.export')->with('schedules', $schedules);
            });
        })->export('xlsx');

        return redirect()->back();
    }

    public function showClasses($id)
    {
        // $years          = Teach::select('year')->groupBy('year')->pluck('year', 'year');
        $classes        = Teach::select('class_room')->groupBy('class_room')->havingRaw('COUNT(*) > 1')->get();
        $kromosom       = Schedule::select('type')->groupBy('type')->get()->count();
        $crossover      = Setting::where('key', Setting::CROSSOVER)->first();
        $mutasi         = Setting::where('key', Setting::MUTASI)->first();
        $value_schedule = Schedule::where('type', $id)->first();

        $lecturer       = Lecturer::select('id', 'name')->get();
        $rooms          = Room::select('id', 'name')->get();

        $schedule      = Schedule::orderBy('days_id', 'desc')
            ->orderBy('times_id', 'desc')
            ->where('type', $id)
            ->select(
                'schedules.id',
                'schedules.type',
                'schedules.teachs_id',
                'schedules.days_id',
                'schedules.times_id',
                'schedules.rooms_id',
                'schedules.value',
                'schedules.value_process'
                )
            ->get();

        if (empty($value_schedule))
        {
            abort(404);
        }

        for ($i = 1; $i <= $kromosom; $i++)
        {
            $value_schedules = Schedule::where('type', $i)->first();
            $data_kromosom[] = [
                'value_schedules' => $value_schedules->value,
            ];
        }

        $days       = Day::select('name_day')->get();
        $times      = Time::select('range')->get();

        $schedules  = [];

        foreach ($schedule as $s) {
            // $schedules[] = $s->time->range;
            foreach ($times as $t) {
                // $schedules[] = $s->time->range;
                if($s->time->range == $t->range){
                    // $schedules[] = $t->range;

                    $schedules["{$t->range}"][$s->day->name_day][] = $s->teach->course->name  .' - '. $s->teach->lecturer->name .' - '.$s->teach->room->name; // pelajaran guru kelas
                    
                }
            }
        }

        // dd($schedules); //cek crossover & mutasi
        return view('admin.genetik.classes', compact('schedules', 'data_kromosom', 'id', 'value_schedule', 'crossover', 'mutasi', 'classes','lecturer', 'rooms', 'times', 'days'));
        // return view('admin.genetik.classes', compact('schedules', 'years', 'data_kromosom', 'id', 'value_schedule', 'crossover', 'mutasi', 'classes','lecturer'));
    }

    public function showTeacherSearch(int $id, Request $request)
    {
        $teachName        = $request->teachName;
        $crossover      = Setting::where('key', Setting::CROSSOVER)->first();
        $mutasi         = Setting::where('key', Setting::MUTASI)->first();
        $lecturer       = Lecturer::select('id', 'name')->get();
        $rooms          = Room::select('id', 'name')->get();        
        $days           = Day::select('name_day')->get();
        $times          = Time::select('range')->get();

        $schedule      = Schedule::orderBy('days_id', 'desc')
            ->orderBy('times_id', 'desc')
            ->where('type', $id)
            ->select(
                'schedules.id',
                'schedules.type',
                'schedules.teachs_id',
                'schedules.days_id',
                'schedules.times_id',
                'schedules.rooms_id',
                'schedules.value',
                'schedules.value_process'
                )
            ->get();

        $schedules  = [];

        foreach ($schedule as $s) {
            // $schedules[] = $s->time->range;
            foreach ($times as $t) {
                // $schedules[] = $s->time->range;
                if($s->time->range == $t->range && $s->teach->lecturer->name == $teachName){
                    // $schedules[] = $t->range;

                    $schedules["{$t->range}"][$s->day->name_day][] = $s->teach->course->name  .' - '. $s->teach->lecturer->name .' - '.$s->teach->room->name; // pelajaran guru kelas
                    
                }
            }
        }

        return view('admin.genetik.filter', compact('lecturer','schedules','rooms','times','days','teachs')); 
    }

    public function showClassesSearch(int $id, Request $request)
    {
        $className      = $request->className;
        $crossover      = Setting::where('key', Setting::CROSSOVER)->first();
        $mutasi         = Setting::where('key', Setting::MUTASI)->first();
        
        $lecturer       = Lecturer::select('id', 'name')->get();
        $rooms          = Room::select('id', 'name')->get();
        $days           = Day::select('name_day')->get();
        $times          = Time::select('range')->get();
        
        $schedule      = Schedule::orderBy('days_id', 'desc')
            ->orderBy('times_id', 'desc')
            ->where('type', $id)
            ->select(
                'schedules.id',
                'schedules.type',
                'schedules.teachs_id',
                'schedules.days_id',
                'schedules.times_id',
                'schedules.rooms_id',
                'schedules.value',
                'schedules.value_process'
                )
            ->get();

        $schedules  = [];

        foreach ($schedule as $s) {
            // $schedules[] = $s->time->range;
            foreach ($times as $t) {
                // $schedules[] = $s->time->range;
                if($s->time->range == $t->range && $s->teach->room->name == $className){
                    // $schedules[] = $t->range;

                    $schedules["{$t->range}"][$s->day->name_day][] = $s->teach->course->name  .' - '. $s->teach->lecturer->name .' - '.$s->teach->room->name; // pelajaran guru kelas
                    
                }
            }
        }

        return view('admin.genetik.filterClass', compact('lecturer','schedules','rooms','times','days','teachs')); 
    }
}

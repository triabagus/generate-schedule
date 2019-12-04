<?php namespace App\Http\Controllers\Admin;

use App\Algoritma\GenerateAlgoritma;
use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Schedule;
use App\Models\Room;
use App\Models\Setting;
use App\Models\Teach;
use Excel;
use Illuminate\Http\Request;

class GenetikController extends Controller
{
    public function index(Request $request)
    {
        $years = Teach::select('year')->groupBy('year')->pluck('year', 'year');

        return view('admin.genetik.index', compact('years'));
    }

    public function submit(Request $request)
    {
        $years            = Teach::select('year')->groupBy('year')->pluck('year', 'year');
        $input_kromosom   = $request->input('kromosom');
        $input_year       = $request->input('year');
        $input_semester   = $request->input('semester');
        $input_generasi   = $request->input('generasi');
        $input_crossover  = $request->input('crossover');
        $input_mutasi     = $request->input('mutasi');
        $count_lecturers  = Lecturer::count();
        $count_teachs     = Teach::count();
        $kromosom         = $input_kromosom * $input_generasi;
        $crossover        = $input_kromosom * $input_crossover;
        $generate         = new GenerateAlgoritma;
        $data_kromosoms   = $generate->randKromosom($kromosom, $count_teachs, $input_year, $input_semester);
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
        $years          = Teach::select('year')->groupBy('year')->pluck('year', 'year');
        $kromosom       = Schedule::select('type')->groupBy('type')->get()->count();
        $crossover      = Setting::where('key', Setting::CROSSOVER)->first();
        $mutasi         = Setting::where('key', Setting::MUTASI)->first();
        $value_schedule = Schedule::where('type', $id)->first();
        $schedules      = Schedule::orderBy('days_id', 'desc')
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
        return view('admin.genetik.result', compact('schedules', 'years', 'data_kromosom', 'id', 'value_schedule', 'crossover', 'mutasi'));
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
        $years          = Teach::select('year')->groupBy('year')->pluck('year', 'year');
        $classes        = Teach::select('class_room')->groupBy('class_room')->havingRaw('COUNT(*) > 1')->get();
        $kromosom       = Schedule::select('type')->groupBy('type')->get()->count();
        $crossover      = Setting::where('key', Setting::CROSSOVER)->first();
        $mutasi         = Setting::where('key', Setting::MUTASI)->first();
        $value_schedule = Schedule::where('type', $id)->first();
        $lecturer       = Lecturer::select('id', 'name')->get();

        $schedules      = Schedule::orderBy('days_id', 'desc')
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

        // dd($kromosom); //cek crossover & mutasi
        return view('admin.genetik.classes', compact('schedules', 'years', 'data_kromosom', 'id', 'value_schedule', 'crossover', 'mutasi', 'classes','lecturer'));
    }

    public function showTeacherSearch(int $id, Request $request)
    {
        $teachId        = $request->teachName;
        $crossover      = Setting::where('key', Setting::CROSSOVER)->first();
        $mutasi         = Setting::where('key', Setting::MUTASI)->first();
        $teachs         = Teach::select('id','lecturers_id')->where('lecturers_id', $teachId)->get();
        $teachsCount    = Teach::select('id','lecturers_id')->where('lecturers_id', $teachId)->get()->count();
        
        $lecturer       = Lecturer::select('id', 'name')->get();
        $rooms          = Room::select('id', 'name')->get();

        for ($i = 0; $i < $teachsCount; $i++)
        {
            $schedulesx      = Schedule::orderBy('days_id', 'desc')
            ->orderBy('times_id', 'desc')
            ->where('type', $id)
            ->where('teachs_id', $teachs[$i]->id)
            ->paginate();

            // dd($teachs[$i]->id);
        }
        
        // dd($schedulesx[0][0]['teachs_id']);

        return view('admin.genetik.filter', compact('lecturer','schedulesx','rooms')); 
    }

    public function showClassesSearch(int $id, Request $request)
    {
        $classId        = $request->classId;
        $crossover      = Setting::where('key', Setting::CROSSOVER)->first();
        $mutasi         = Setting::where('key', Setting::MUTASI)->first();
        // $rooms          = Room::select('id','lecturers_id')->where('lecturers_id', $teachId)->get();
        // $roomsCount     = Room::select('id','lecturers_id')->where('lecturers_id', $teachId)->get()->count();
        
        $lecturer       = Lecturer::select('id', 'name')->get();
        $rooms          = Room::select('id', 'name')->get();
        
            $schedulesx      = Schedule::orderBy('days_id', 'desc')
            ->orderBy('times_id', 'desc')
            ->where('type', $id)
            ->where('rooms_id', $classId)
            ->paginate();

            // dd($teachs[$i]->id);
        
        
        // dd($schedulesx[0][0]['teachs_id']);

        return view('admin.genetik.filterClass', compact('lecturer','schedulesx', 'rooms')); 
    }
}
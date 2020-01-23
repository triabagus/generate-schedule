<?php namespace app\Algoritma;

use App\Models\Day;
use App\Models\Room;
use App\Models\Schedule;
use App\Models\Teach;
use App\Models\Time;
use App\Models\Timenotavailable;
use DB;

class GenerateAlgoritma
{
    public function randomingProcess($i)
    {
        $teach = Teach::inRandomOrder()->first();
        $day = Day::inRandomOrder()->first();
        $time = Time::inRandomOrder()->first();
        $type = $i + 1;

        $params = [
            'teachs_id' => $teach->id,
            'days_id' => $day->id,
            'times_id' => $time->id,
            'rooms_id' => $teach->class_room,
            'type' => $type
        ];
        
        // filter agar teach_id tidak terulang
        $check_teach_id = Schedule::where('teachs_id', '=', $teach->id)
            ->where('type', '=', $type) 
            ->first();

        // filter agar satu guru tidak memiliki hari dan waktu mengajar yang sama 2 kali
        $check_lecturers_id = Schedule::join('teachs', 'teachs.id', '=', 'schedules.teachs_id')
            ->join('lecturers', 'lecturers.id', '=', 'teachs.lecturers_id')
            ->where('lecturers_id', '=', $teach->lecturers_id)
            ->where('days_id', '=', $day->id)
            ->where('times_id', '=', $time->id)
            ->where('type', '=', $type)
            ->first();

        // filter agar satu kelas tidak memiliki hari dan waktu pelajaran yang sama 2 kali
        $check_class_id = Schedule::where('rooms_id', '=', $teach->class_room)
            ->where('days_id', '=', $day->id)
            ->where('times_id', '=', $time->id)
            ->where('type', '=', $type)
            ->first();
            
        // filter guru tidak bisa mengajar pada waktu tertentu
        $check_timenotavailable = Timenotavailable::where('lecturers_id', '=', $teach->lecturers_id)
            ->where('days_id', '=', $day->id)
            ->where('times_id', '=', $time->id)
            ->first();

        if($check_teach_id)
        {
            return $this->randomingProcess($i); 
        } else if($check_timenotavailable)
        {
            return $this->randomingProcess($i);
        } else if($check_lecturers_id)
        {
            return $this->randomingProcess($i);
        } else if($check_class_id)
        {
            return $this->randomingProcess($i);
        } else 
        {
            $insert = Schedule::create($params);
            return $insert;
        }
    }

    // public function randKromosom($kromosom, $count_teachs, $input_year, $input_semester)
    public function randKromosom($kromosom, $count_teachs)
    {
        Schedule::truncate(); // query builder laravel-> memotong seluruh tabel yang akan menghapus semua baris & mengatur ulang ID penambahan otomatis ke nol.

        for ($i = 0; $i < $kromosom; $i++)
        {
            $values = [];
            for ($j = 0; $j < $count_teachs; $j++)
            {
                // $teach = Teach::whereHas('course', function ($query) use ($input_semester)
                // {
                //     $query->where('courses.semester', $input_semester);
                // }); // random guru berdasarkan semester

                $this->randomingProcess($i);

                // $day   = Day::inRandomOrder()->first(); // random semua hari
                // $teach = Teach::inRandomOrder()->first(); // random semua guru
                // $time  = Time::inRandomOrder()->first(); // random semua waktu

                // $params = [
                //     'teachs_id' => $teach->id,
                //     'days_id'   => $day->id,
                //     'times_id'  => $time->id,
                //     'rooms_id'  => $teach->class_room,
                //     'type'      => $i + 1,
                // ];

                // $schedule = Schedule::create($params);
            }
            
            $data[] = $values;
        }
        // dd($schedule);
        return $data;
    }

    public function checkPinalty()
    {

        //Join (kegiatan.kegiatan_id = schedule.kegiatan_id) & Join (pelajaran.pelajaran_id = kegiatan.kegiatan_id) Group pelajaran, hari, waktu dan type 
        $schedules = Schedule::join('teachs', 'teachs.id', '=', 'schedules.teachs_id')
            ->join('lecturers', 'lecturers.id', '=', 'teachs.lecturers_id')
            ->select(DB::raw('lecturers_id, days_id, times_id, type, count(*) as `jumlah`'))
            ->groupBy('lecturers_id')
            ->groupBy('days_id')
            ->groupBy('times_id')
            ->groupBy('type')
            ->having('jumlah', '>', 1)
            ->get();

        $result_schedules = $this->increaseProccess($schedules);
        // dd($result_schedules);
        // End

        // Group kegiatan, hari, waktu dan type
        $schedules = Schedule::select(DB::raw('teachs_id, days_id, times_id, type, count(*) as `jumlah`'))
            ->groupBy('teachs_id')
            ->groupBy('days_id')
            ->groupBy('times_id')
            ->groupBy('type')
            ->having('jumlah', '>', 1)
            ->get();

        $result_schedules = $this->increaseProccess($schedules);
        // End

        // Group kegiatan, hari, kelas dan type
        $schedules = Schedule::select(DB::raw('teachs_id, days_id, rooms_id, type, count(*) as `jumlah`'))
            ->groupBy('teachs_id')
            ->groupBy('days_id')
            ->groupBy('rooms_id')
            ->groupBy('type')
            ->having('jumlah', '>', 1)
            ->get();

        $result_schedules = $this->increaseProccess($schedules);
        // dd($result_schedules);
        // End

        // Group waktu, hari, kelas dan type 
        $schedules = Schedule::select(DB::raw('times_id, days_id, rooms_id, type, count(*) as `jumlah`'))
            ->groupBy('times_id')
            ->groupBy('days_id')
            ->groupBy('rooms_id')
            ->groupBy('type')
            ->having('jumlah', '>', 1)
            ->get();

        // $result_schedules = $this->increaseProccess($schedules);
        // End

        


        // $schedules = Schedule::where('days_id', Schedule::FRIDAY)->whereIn('times_id', [12, 19, 24])->get();

        // if (!empty($schedules))
        // {
        //     foreach ($schedules as $key => $schedule)
        //     {
        //         $schedule->value         = $schedule->value + 1;
        //         $schedule->value_process = $schedule->value_process . "+ 1 ";
        //         $schedule->save();
        //     }
        // }

        $time_not_availables = Timenotavailable::get();

        if (!empty($time_not_availables))
        {
            foreach ($time_not_availables as $k => $time_not_available)
            {
                $schedules = Schedule::whereHas('teach', function ($query) use ($time_not_available)
                {
                    $query = $query->whereHas('lecturer', function ($q) use ($time_not_available)
                    {
                        $q->where('lecturers.id', $time_not_available->lecturers_id);
                    });
                });

                $schedules = $schedules->where('days_id', $time_not_available->days_id)->where('times_id', $time_not_available->times_id)->get();

                if (!empty($schedules))
                {
                    foreach ($schedules as $key => $schedule)
                    {
                        $schedule->value         = $schedule->value + 1;
                        $schedule->value_process = $schedule->value_process . "+ 1 ";
                        $schedule->save();
                    }
                }

            }
        }

        $schedules = Schedule::get();

        foreach ($schedules as $key => $schedule)
        {
            $schedule->value = 1 / (1 + $schedule->value);
            $schedule->save();
        }

        return $schedules;
    }

    // Meningkatkan Proses
    public function increaseProccess($schedules = '')
    {
        if (!empty($schedules))
        {
            foreach ($schedules as $key => $schedule)
            {
                if ($schedule->jumlah > 1)
                {
                    $schedule_wheres = Schedule::where('type', $schedule->type)->get();
                    foreach ($schedule_wheres as $key => $schedule_where)
                    {
                        $schedule_where->value         = $schedule_where->value + ($schedule->jumlah - 1);
                        $schedule_where->value_process = $schedule_where->value_process . " + " . ($schedule->jumlah - 1);
                        // dd($schedule_wheres);
                        $schedule_where->save();

                    }
                }
            }
        }
        return $schedules;
    }
    //End Meningkatkan Proses

}

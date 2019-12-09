<?php namespace App\Models;

use App\Models\Course;
use App\Models\Lecturer;
// use App\Models\Room;
use Illuminate\Database\Eloquent\Model;

class Teach extends Model
{
    protected $table   = 'teachs';
    protected $guarded = [];

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class, 'lecturers_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'courses_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'class_room');
    }
}

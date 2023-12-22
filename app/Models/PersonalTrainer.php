<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalTrainer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'certification'];
    protected $table = 'personaltrainer';

    public function timetableEntries()
    {
        return $this->hasMany(Timetable::class, 'personaltrainer_id');
    }
}
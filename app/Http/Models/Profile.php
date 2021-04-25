<?php


namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $fillable = ['name', 'surname', 'user_id', 'birthday', 'study_place', 'avatar'];
    public $table='profile';
}
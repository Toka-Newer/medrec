<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    protected $table = 'doctor';
    protected $casts = ['skill' => 'array','serviceTitle' => 'array','serviceBody' => 'array'];
    protected $fillable = [
        'user_id',
        // 'name',
        // 'email',
        'info',
        'phone',
        // 'birthDate',
        // 'gender',
        // 'cardID',
        // 'nationalID',
        'department_id',
        // 'department',
        // 'specialty',
        'price',
        'workFrom',
        'workTo',
        'address',
        'skill',
        'serviceTitle',
        'serviceBody',
        'photo',
    ];

    public function getPhotoAttribute($value)
    {
        $actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        return ($value == null ? '' : $actual_link . 'images/doctors/' . $value);
    }

    public function diagnosis()
    {
        return $this->hasMany(diagnosis::class, 'doctor_id', 'id');
    }

    public function surgeries()
    {
        return $this->hasMany(surgeries::class, 'doctor_id', 'id');
    }

    public function favourite()
    {
        return $this->hasMany(favourite::class, 'doctor_id', 'id');
    }

    public function department(){
        return $this->belongsTo(department::class,'department_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    // public function getSkillAttribute($value)
    // {
    //     return json_decode($value);
    // }
    // public function setSkillAttribute($value)
    // {
    //     return json_encode($value);
    // }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surgeries extends Model
{
    use HasFactory;
    protected $table = 'surgeries';


    protected $fillable = [
        'doctor_id',
        'patient_id',
        'surgeryTitle',
        // 'surgeryDate',
        'preOperation',
        'postOperation',
        'risks',
    ];

    public function patient(){
        return $this->belongsTo(patient::class,'patient_id','id');
    }

    public function doctor(){
        return $this->belongsTo(doctor::class,'doctor_id','id');
    }

}

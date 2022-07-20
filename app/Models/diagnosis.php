<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diagnosis extends Model
{
    use HasFactory;
    protected $table = 'diagnosis';


    protected $fillable = [
        'patient_id',
        'doctor_id',
        'disease_title',
        'diagnosis',
        'doctor_notes',
        'patient_notes',
    ];

    public function patient(){
        return $this->belongsTo(patient::class,'patient_id','id');
    }

    public function doctor(){
        return $this->belongsTo(doctor::class,'doctor_id','id');
    }

    public function medicines()
    {
        return $this->hasMany(medicines::class, 'diagnosis_id', 'id');
    }

}

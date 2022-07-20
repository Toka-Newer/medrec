<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favourite extends Model
{
    use HasFactory;
    protected $table = 'favourites';


    protected $fillable = [
        'doctor_id',
        'patient_id',
    ];

    public function doctor(){
        return $this->belongsTo(doctor::class,'doctor_id','id');
    }

}

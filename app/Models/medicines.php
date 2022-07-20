<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicines extends Model
{
    use HasFactory;
    protected $table = 'medicines';


    protected $fillable = [
        'diagnosis_id',
        'patient_id',
        'brandName',
        'companyName',
        'strength',
        'discription',
        'period',
    ];

    public function diagnosis(){
        return $this->belongsTo(diagnosis::class,'diagnosis_id','id');
    }

}

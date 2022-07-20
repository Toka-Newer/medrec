<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;
    protected $table = 'departments';


    protected $fillable = [
        'department',
        'specialty',
    ];

    public function doctor()
    {
        return $this->hasMany(doctor::class, 'department_id', 'id');
    }

}

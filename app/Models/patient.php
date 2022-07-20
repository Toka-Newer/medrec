<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $table = 'patient';
    protected $casts = [
        'allergicList' => 'array',
        'chronicDiseases' => 'array',
        'possibleGeneticD' => 'array',
        'habbits' => 'array',
        'relativesName' => 'array',
        'relativesPhone' => 'array',
    ];
    protected $fillable = [
        // 'name',
        // 'email',
        'user_id',
        'phone',
        // 'birthDate',
        // 'gender',
        // 'nationalID',
        'address',
        'bloodType',
        'height',
        'weight',
        'job',
        'socialStatus',
        'allergicList',
        'bloodPressure',
        'bloodOxygen',
        'bodyTemperature',
        'bloodGlucose',
        'chronicDiseases',
        'possibleGeneticD',
        'habbits',
        'relativesName',
        'relativesPhone',
        'photo',
    ];

    public function getPhotoAttribute($value){
        $actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        return ($value == null ? '' : $actual_link . 'images/users/' . $value );
    }

    public function diagnosis()
    {
        return $this->hasMany(diagnosis::class, 'patient_id','id'); // first: id elly byrobt mabenhom, second: l id l primary bta3y hna
    }

    public function surgeries()
    {
        return $this->hasMany(surgeries::class, 'patient_id','id'); // first: id elly byrobt mabenhom, second: l id l primary bta3y hna
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

// chaining delete
    // public static function boot(){
    //     parent::boot();
    //     self::deleting(function ($user){
    //         $user->diagnosis()->each(function ($diagnosis){
    //             $diagnosis->delete();
    //         });
    //     });
    // }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\favourite;
use App\Traits\GeneralTraits;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    use GeneralTraits;

    public function insertFavourite(Request $request)
    {
        try {
            favourite::create([
                'doctor_id' => $request->doctor_id,
                'patient_id' => $request->patient_id,
            ]);
            return $this->returnSuccessMessage('inserted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function index()
    {
        try {
            $favourite = favourite::get();
            return $this->returnData('data', $favourite);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getFavourite($favouriteId)
    {
        try {
            $favourite = favourite::with('doctor')->find($favouriteId);
            if (!$favourite) {
                return $this->returnError('202', 'favourite not found!');
            }
            return $this->returnData('favourite', $favourite, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getFavouriteByUser($userId)
    {
        try {
            $favourite = favourite::where('doctor_id','=', $userId)->get();
            if (!$favourite) {
                return $this->returnError('202', 'doctor not found!');
            }
            return $this->returnData('favourite', $favourite, "success");
            // return response()->json($doctor);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getFavouriteByPatient($userId)
    {
        try {
            $favourite = favourite::where('patient_id','=', $userId)->get();
            if (!$favourite) {
                return $this->returnError('202', 'doctor not found!');
            }
            return $this->returnData('favourite', $favourite, "success");
            // return response()->json($doctor);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // update favourite
    // public function updatefavourite($surgeriesId, Request $request)
    // {
    //     try {
    //         $surgeries = favourite::find($surgeriesId);
    //         if (!$surgeries) {
    //             return $this->returnError('202', 'User not found!');
    //         }
    //         $surgeries->update([
    //             'doctor_id' => $request->doctor_id,
    //             'patient_id' => $request->patient_id,
    //         ]);
    //         return $this->returnSuccessMessage('updated successfully');
    //     } catch (\Exception $e) {
    //         return $this->returnError(201, $e->getMessage());
    //     }
    // }

    // delete favourite
    public function deleteFavourite($favouriteId)
    {
        try {
            $favourite = favourite::find($favouriteId);
            if (!$favourite) {
                return $this->returnError('202', 'User not found!');
            }
            $favourite->delete();
            return $this->returnSuccessMessage('deleted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function deleteFavouriteByPatient($patientId,$doctorId)
    {
        try {
            $favourite = favourite::where('patient_id','=', $patientId , 'doctor_id', '=', $doctorId)->first();
            if (!$favourite) {
                return $this->returnError('202', 'User not found!');
            }
            $favourite->delete();
            return $this->returnSuccessMessage('deleted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\patient;
use App\Traits\GeneralTraits;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    use GeneralTraits;

    // all data by id
    public function getUserById(Request $request)
    {
        $user = patient::find($request->id);
        if (!$user) {
            return $this->returnError('001', 'User not found!');
        } else {
            return $this->returnData('user', $user, "success");
        }
        // return response()->json($user);
    }

    // update user
    public function changeUserName(Request $request)
    {
        patient::where('id', $request->id)->update(['name' => $request->name]);
        return $this->returnSuccessMessage('updated successfully');
    }

    // -----------------------------------------------------

    public function index()
    {
        $users = patient::get();  //all data
        // $user = patient::select('id','name')->get(); //want to get specific data
        return response()->json($users);
    }

    public function insert(Request $request)
    {
        try {
            // if (type == 'patient')
            $user_photo = '';
            if ($request->hasFile('photo')) {
                $user_photo = $this->saveImage($request->photo, 'users');
            }
            patient::create([
                'user_id' => $request->user_id,
                'phone' => $request->phone,
                'address' => $request->address,
                'bloodType' => $request->bloodType,
                'height' => $request->height,
                'weight' => $request->weight,
                'job' => $request->job,
                'socialStatus' => $request->socialStatus,
                'allergicList' => $request->allergicList,
                'bloodPressure' => $request->bloodPressure,
                'bloodOxygen' => $request->bloodOxygen,
                'bodyTemperature' => $request->bodyTemperature,
                'bloodGlucose' => $request->bloodGlucose,
                'chronicDiseases' => $request->chronicDiseases,
                'possibleGeneticD' => $request->possibleGeneticD,
                'habbits' => $request->habbits,
                'relativesName' => $request->relativesName,
                'relativesPhone' => $request->relativesPhone,
                'photo' => $user_photo,
            ]);
            return $this->returnSuccessMessage('inserted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getUser($userId)
    {
        try {
            $user = patient::with('user','diagnosis','surgeries')->find($userId);
            if (!$user) {
                return $this->returnError('202', 'User not found!');
            }
            return $this->returnData('user', $user, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getPatientByUserId($userId)
    {
        try {
            $user = patient::with('user','diagnosis','surgeries')->where('user_id','=', $userId)->first();
            if (!$user) {
                return $this->returnError('202', 'User not found!');
            }
            return $this->returnData('user', $user, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // update user
    public function updateUser($userId, Request $request)
    {
        try {
            $user = patient::find($userId);
            if (!$user) {
                return $this->returnError('202', 'User not found!');
            }
            $user->update([
                'phone' => $request->phone,
                'address' => $request->address,
                'bloodType' => $request->bloodType,
                'height' => $request->height,
                'weight' => $request->weight,
                'job' => $request->job,
                'socialStatus' => $request->socialStatus,
                'allergicList' => $request->allergicList,
                'bloodPressure' => $request->bloodPressure,
                'bloodOxygen' => $request->bloodOxygen,
                'bodyTemperature' => $request->bodyTemperature,
                'bloodGlucose' => $request->bloodGlucose,
                'chronicDiseases' => $request->chronicDiseases,
                'possibleGeneticD' => $request->possibleGeneticD,
                'habbits' => $request->habbits,
                'relativesName' => $request->relativesName,
                'relativesPhone' => $request->relativesPhone,
            ]);
            return $this->returnSuccessMessage('updated successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function updateUserProfile1($userId, Request $request)
    {
        try {
            $user = patient::find($userId);
            if (!$user) {
                return $this->returnError('202', 'User not found!');
            }
            $user->update([
                'phone' => $request->phone,
                'address' => $request->address,
                'bloodType' => $request->bloodType,
                'height' => $request->height,
                'weight' => $request->weight,
                'job' => $request->job,
            ]);
            return $this->returnSuccessMessage('updated successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }


    // delete user
    public function deleteUser($userId)
    {
        try {
            $user = patient::find($userId);
            if (!$user) {
                return $this->returnError('202', 'User not found!');
            }
            // $user->diagnosis()->delete(); //delete all diagnosis tat related to this user.
            $user->delete();
            return $this->returnSuccessMessage('deleted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }








    // function newuser(Request $request){
    //     $user = new User;
    //     $user->email = $request->email;
    //     $user->name = $request->name;
    //     $user->password=$request->password;
    //     $user->save();
    //     return "test success";
    //   }
}

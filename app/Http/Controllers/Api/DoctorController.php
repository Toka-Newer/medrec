<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\doctor;
use App\Traits\GeneralTraits;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DoctorController extends Controller
{
    use GeneralTraits;

    public function insertDoctor(Request $request)
    {
        // $validatedData = $request->validate([
        //     'user_id' => 'required',
        //     'department_id' => 'required',
        //     'password' => 'required|min:5',
        //     'email' => 'required|email|unique:doctor'
        // ]);

        try {
            $doctor_photo = '';
            if ($request->hasFile('photo')) {
                $doctor_photo = $this->saveImage($request->photo, 'doctors');
            }
            doctor::create([
                // 'name' => $request->name,
                // 'email' => $request->email,
                'info' => $request->info,
                'phone' => $request->phone,
                // 'birthDate' => $request->birthDate,
                // 'gender' => $request->gender,
                // 'cardID' => $request->cardID,
                // 'nationalID' => $request->nationalID,
                'department_id' => $request->department_id,
                // 'department' => $request->department,
                // 'specialty' => $request->specialty,
                'price' => $request->price,
                'workFrom' => $request->workFrom,
                'workTo' => $request->workTo,
                'address' => $request->address,
                'skill' =>   $request->skill ,
                'serviceTitle' => $request->serviceTitle,
                'serviceBody' => $request->serviceBody,
                'photo' => $doctor_photo,
            ]);
            return $this->returnSuccessMessage('inserted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function index()
    {
        try {
            $doctor = doctor::with('user','department')->get();
// if you want to get specific columns from the table that you have a relation with.
            // $doctor = doctor::with(['department' => function($doc){
            //     $doc->select('id','department');
            // }])->get();
// you can make it with where to
            // $doc->select('id','department')->where('department','=','brain');
            // return $this->returnData('data', $doctor);
            // return response()->json($doctor);
            return response()->json([
                $doctor
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getDoctor($doctorId)
    {
        try {
            $doctor = doctor::with('user','department','diagnosis','surgeries')->find($doctorId);
            if (!$doctor) {
                return $this->returnError('202', 'doctor not found!');
            }
            // return $this->returnData('doctor', $doctor, "success");
            return response()->json($doctor);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }
    public function getDoctorByUserID($userId)
    {
        try {
            $doctor = doctor::with('user','department','diagnosis','surgeries')->where('user_id','=', $userId)->first();
            if (!$doctor) {
                return $this->returnError('202', 'doctor not found!');
            }
            return $this->returnData('doctor', $doctor, "success");
            // return response()->json($doctor);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // update user
    public function updateDoctor($doctorId, Request $request)
    {
        try {
            $doctor = doctor::find($doctorId);
            if (!$doctor) {
                return $this->returnError('202', 'User not found!');
            }
            $doctor->update([
                'info' => $request->info,
                'phone' => $request->phone,
                'department_id' => $request->department_id,
                'price' => $request->price,
                'workFrom' => $request->workFrom,
                'workTo' => $request->workTo,
                'address' => $request->address,
                'skill' => $request->skill,
                'serviceTitle' => $request->serviceTitle,
                'serviceBody' => $request->serviceBody,
            ]);
            return $this->returnSuccessMessage('updated successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // delete doctor
    public function deleteDoctor($doctorId)
    {
        try {
            $doctor = doctor::find($doctorId);
            if (!$doctor) {
                return $this->returnError('202', 'User not found!');
            }
            $doctor->delete();
            return $this->returnSuccessMessage('deleted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

}

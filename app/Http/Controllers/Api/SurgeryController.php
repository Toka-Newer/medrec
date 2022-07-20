<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\surgeries;
use App\Traits\GeneralTraits;
use Illuminate\Http\Request;

class SurgeryController extends Controller
{
    use GeneralTraits;

    public function insertSurgery(Request $request)
    {
        try {
            surgeries::create([
                'doctor_id' => $request->doctor_id,
                'patient_id' => $request->patient_id,
                'surgeryTitle' => $request->surgeryTitle,
                // 'surgeryDate' => $request->surgeryDate,
                'preOperation' => $request->preOperation,
                'postOperation' => $request->postOperation,
                'risks' => $request->risks,
            ]);
            return $this->returnSuccessMessage('inserted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function index()
    {
        try {
            $surgeries = surgeries::get();
            return $this->returnData('data', $surgeries);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }
    
    public function getSurgeryByPatient($patientId)
    {
        try {
            $diagnosis = surgeries::get()->where('patient_id','=', $patientId);
            return $this->returnData('data', $diagnosis);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getSurgeryByDoctor($doctorId)
    {
        try {
            $diagnosis = surgeries::get()->where('doctor_id','=', $doctorId);
            return $this->returnData('data', $diagnosis);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getSurgery($surgeryId)
    {
        try {
            $surgeries = surgeries::with('patient','doctor')->find($surgeryId);
            if (!$surgeries) {
                return $this->returnError('202', 'surgery not found!');
            }
            return $this->returnData('surgery', $surgeries, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // update Surgeries
    public function updateSurgery($surgeryId, Request $request)
    {
        try {
            $surgeries = surgeries::find($surgeryId);
            if (!$surgeries) {
                return $this->returnError('202', 'User not found!');
            }
            $surgeries->update([
                'surgeryTitle' => $request->surgeryTitle,
                'preOperation' => $request->preOperation,
                'postOperation' => $request->postOperation,
                'risks' => $request->risks,
            ]);
            return $this->returnSuccessMessage('updated successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // delete Surgeries
    public function deleteSurgery($surgeryId)
    {
        try {
            $surgeries = surgeries::find($surgeryId);
            if (!$surgeries) {
                return $this->returnError('202', 'User not found!');
            }
            $surgeries->delete();
            return $this->returnSuccessMessage('deleted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

}

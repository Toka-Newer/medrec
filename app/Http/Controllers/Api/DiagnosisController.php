<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\diagnosis;
use App\Traits\GeneralTraits;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    use GeneralTraits;

    public function insertDiagnosis(Request $request)
    {
        try {
            // $validatedData = $request->validate([
            //     'patient_id' => 'required',
            //     'doctor_id' => 'required',
            //     'disease_title' => 'required',
            //     'diagnosis' => 'required',
            //     'doctor_notes' => '',
            // ]);

            diagnosis::create([
                'patient_id'=> $request->patient_id,
                'doctor_id'=> $request->doctor_id,
                'disease_title' => $request->disease_title,
                'diagnosis' => $request->diagnosis,
                'doctor_notes' => $request->doctor_notes,
                // 'patient_notes' => $request->patient_notes,
            ]);
            return $this->returnSuccessMessage('inserted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getLastRecord()
    {
        $lastRecord = diagnosis::latest()->first();

        return response()->json($lastRecord);
    }

    // public function index()
    // {
    //     $diagnosis = diagnosis::get();  //all data
    //     // $user = patient::select('id','name')->get(); //want to get specific data
    //     return response()->json($diagnosis);
    // }

    public function index()
    {
        try {
            $diagnosis = diagnosis::with('patient','doctor','medicines')->get();
            return $this->returnData('data', $diagnosis);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getDiagnosisByPatient($patientId)
    {
        try {
            $diagnosis = diagnosis::with('patient','doctor','medicines')->where('patient_id','=', $patientId)->get();
            return $this->returnData('data', $diagnosis);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getDiagnosisByDoctor($doctorId)
    {
        try {
            $diagnosis = diagnosis::with('patient','doctor','medicines')->where('doctor_id','=', $doctorId)->get();
            return $this->returnData('data', $diagnosis);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getDiagnosis($diagnosisId)
    {
        try {
            $diagnosis = diagnosis::with('patient','doctor','medicines')->find($diagnosisId);
            if (!$diagnosis) {
                return $this->returnError('202', 'diagnosis not found!');
            }
            return $this->returnData('diagnosis', $diagnosis, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // diagnosis user
    public function updateDiagnosis($diagnosisId, Request $request)
    {
        try {
            $diagnosis = diagnosis::find($diagnosisId);
            if (!$diagnosis) {
                return $this->returnError('202', 'User not found!');
            }
            $diagnosis->update([
                'disease_title' => $request->disease_title,
                'diagnosis' => $request->diagnosis,
                'doctor_notes' => $request->doctor_notes,
            ]);
            return $this->returnSuccessMessage('updated successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function updateDiagnosisPatient($diagnosisId, Request $request)
    {
        try {
            $diagnosis = diagnosis::find($diagnosisId);
            if (!$diagnosis) {
                return $this->returnError('202', 'User not found!');
            }
            $diagnosis->update([
                // 'disease_title' => $request->disease_title,
                // 'diagnosis' => $request->diagnosis,
                // 'doctor_notes' => $request->doctor_notes,
                'patient_notes' => $request->patient_notes,
            ]);
            return $this->returnSuccessMessage('updated successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // diagnosis user
    public function deleteDiagnosis($diagnosisId)
    {
        try {
            $diagnosis = diagnosis::find($diagnosisId);
            if (!$diagnosis) {
                return $this->returnError('202', 'User not found!');
            }
            $diagnosis->delete();
            return $this->returnSuccessMessage('deleted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

}

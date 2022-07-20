<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\medicines;
use App\Traits\GeneralTraits;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    use GeneralTraits;

    public function insertMedicine(Request $request)
    {
        try {
            medicines::create([
                'diagnosis_id' => $request->diagnosis_id,
                'patient_id' => $request->patient_id,
                'brandName' => $request->brandName,
                // 'companyName' => $request->companyName,
                'strength' => $request->strength,
                'discription' => $request->discription,
                'period' => $request->period,
            ]);
            return $this->returnSuccessMessage('inserted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function index()
    {
        try {
            $medicines = medicines::get();
            return $this->returnData('data', $medicines);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getMedicine($medicineId)
    {
        try {
            $medicines = medicines::find($medicineId);
            // $medicines = medicines::get()->where('patient_id','=','brain');
            if (!$medicines) {
                return $this->returnError('202', 'medicine not found!');
            }
            return $this->returnData('medicine', $medicines, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getMedicineByPatient($patientId)
    {
        try {
            // $medicines = medicines::find($medicineId);
            $medicines = medicines::get()->where('patient_id', '=', $patientId);
            if (!$medicines) {
                return $this->returnError('202', 'medicine not found!');
            }
            return $this->returnData('medicine', $medicines, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getMedicineDiagnosis($diagnosisId)
    {
        try {
            $medicines = medicines::where('diagnosis_id', '=', $diagnosisId)->get();
            if (!$medicines) {
                return $this->returnError('202', 'medicine not found!');
            }
            return $this->returnData('medicine', $medicines, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }



    // update medicines
    public function updateMedicine($medicineId, Request $request)
    {
        try {
            $medicines = medicines::find($medicineId);
            if (!$medicines) {
                return $this->returnError('202', 'User not found!');
            }
            $medicines->update([
                'brandName' => $request->brandName,
                'strength' => $request->strength,
                'discription' => $request->discription,
                'period' => $request->period,
            ]);
            return $this->returnSuccessMessage('updated successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // delete medicines
    public function deleteMedicine($medicineId)
    {
        try {
            $medicines = medicines::find($medicineId);
            if (!$medicines) {
                return $this->returnError('202', 'User not found!');
            }
            $medicines->delete();
            return $this->returnSuccessMessage('deleted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }
}

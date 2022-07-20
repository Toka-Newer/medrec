<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\department;
use App\Traits\GeneralTraits;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use GeneralTraits;

    public function insertDepartment(Request $request)
    {
        try {
            department::create([
                'department' => $request->department,
                'specialty' => $request->specialty,
            ]);
            return $this->returnSuccessMessage('inserted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function index()
    {
        try {
            $department = department::get();
            return $this->returnData('data', $department);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getDepartment($departmentId)
    {
        try {
            $department = department::with('doctor')->find($departmentId);
            if (!$department) {
                return $this->returnError('202', 'department not found!');
            }
            return $this->returnData('department', $department, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // update department
    public function updateDepartment($departmentId, Request $request)
    {
        try {
            $department = department::find($departmentId);
            if (!$department) {
                return $this->returnError('202', 'User not found!');
            }
            $department->update([
                'department' => $request->department,
                'specialty' => $request->specialty,
            ]);
            return $this->returnSuccessMessage('updated successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // delete department
    public function deleteDepartment($departmentId)
    {
        try {
            $department = department::find($departmentId);
            if (!$department) {
                return $this->returnError('202', 'User not found!');
            }
            $department->delete();
            return $this->returnSuccessMessage('deleted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

}

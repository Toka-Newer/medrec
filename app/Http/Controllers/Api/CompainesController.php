<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\companies;
use App\Traits\GeneralTraits;
use Illuminate\Http\Request;

class CompainesController extends Controller
{
    use GeneralTraits;

    public function insertCompany(Request $request)
    {
        try {
            companies::create([
                'brandName' => $request->brandName,
                'companyName' => $request->companyName,
                'strength' => $request->strength,
            ]);
            return $this->returnSuccessMessage('inserted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function index()
    {
        try {
            $companies = companies::get();
            return $this->returnData('data', $companies);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getCompany($companyId)
    {
        try {
            $companies = companies::find($companyId);
            if (!$companies) {
                return $this->returnError('202', 'company not found!');
            }
            return $this->returnData('company', $companies, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // update companies
    public function updateCompany($companyId, Request $request)
    {
        try {
            $companies = companies::find($companyId);
            if (!$companies) {
                return $this->returnError('202', 'User not found!');
            }
            $companies->update([
                'brandName' => $request->brandName,
                'companyName' => $request->companyName,
                'strength' => $request->strength,
            ]);
            return $this->returnSuccessMessage('updated successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // delete companies
    public function deleteCompany($companyId)
    {
        try {
            $companies = companies::find($companyId);
            if (!$companies) {
                return $this->returnError('202', 'User not found!');
            }
            $companies->delete();
            return $this->returnSuccessMessage('deleted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

}

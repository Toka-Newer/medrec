<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Traits\GeneralTraits;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    use GeneralTraits;

    public function insertContact(Request $request)
    {
        try {
            contact::create([
                'name'=> $request->name,
                'email' => $request->email,
                'sub' => $request->sub,
                'message' => $request->message,
            ]);
            return $this->returnSuccessMessage('inserted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function index()
    {
        try {
            $contact = contact::get();
            return $this->returnData('data', $contact);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getContact($contactId)
    {
        try {
            $contact = contact::find($contactId);
            if (!$contact) {
                return $this->returnError('202', 'contact not found!');
            }
            return $this->returnData('contact', $contact, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // update Contact
    public function updateContact($contactId, Request $request)
    {
        try {
            $contact = contact::find($contactId);
            if (!$contact) {
                return $this->returnError('202', 'User not found!');
            }
            $contact->update([
                'name'=> $request->name,
                'email' => $request->email,
                'sub' => $request->sub,
                'message' => $request->message,
            ]);
            return $this->returnSuccessMessage('updated successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    // delete Contact
    public function deleteContact($contactId)
    {
        try {
            $contact = contact::find($contactId);
            if (!$contact) {
                return $this->returnError('202', 'User not found!');
            }
            $contact->delete();
            return $this->returnSuccessMessage('deleted successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

}

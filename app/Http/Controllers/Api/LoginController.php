<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\GeneralTraits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class LoginController extends Controller
{
    use GeneralTraits;

    // public function register(Request $request)
    // {
    //     try {
    //         $checkUser = User::where('email', '=', $request->email)->first(); // could delete = as it's by defult knows as equal
    //         if ($checkUser) {
    //             return $this->returnError(201, 'this account is already registered');
    //         }
    //         User::create([
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' => Hash::make($request->password),
    //             'type' => $request->type,
    //         ]);
    //         return $this->returnSuccessMessage('success');
    //     } catch (\Exception $e) {
    //         return $this->returnError(201, $e->getMessage());
    //     }
    // }

    public function Login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        // print_r($data);
        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->returnError(202, 'this user does not exist');
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $data = [
            'user' => $user,
            'token' => $token
        ];

        return $this->returnData('data', $data);
    }

    public function index()
    {
        try {
            $user = User::get();
            return $this->returnData('data', $user);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getUser($userId)
    {
        try {
            $user = User::find($userId);
            if (!$user) {
                return $this->returnError('202', 'user not found!');
            }
            // return $this->returnData('doctor', $doctor, "success");
            return response()->json($user);
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

    public function getUserNationalID($nationalId)
    {
        try {
            $user = User::where('nationalID','=', $nationalId)->first();
            if (!$user) {
                return $this->returnError('202', 'User not found!');
            }
            return  response()->json($user);
            // return $this->returnData('user', $user, "success");
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }

public function updateUserProfile1($userId, Request $request)
    {
        try {
            $user = User::find($userId);
            if (!$user) {
                return $this->returnError('202', 'User not found!');
            }
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'birthDate' => $request->birthDate,
                'gender' => $request->gender,
                'nationalID' => $request->nationalID,
            ]);
            return $this->returnSuccessMessage('updated successfully');
        } catch (\Exception $e) {
            return $this->returnError(201, $e->getMessage());
        }
    }
}

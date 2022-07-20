<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        if (auth()->user()->type == 'Doctor') {
            return '/CompleteRegister';
        }
        return '/EditPatientHome';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'birthDate' => ['required', 'date'],
            'gender' => ['required', 'string', Rule::in(['male', 'female'])],
            'nationalID' => ['required', 'numeric', 'digits:14'],
            'type' => ['required', 'string', Rule::in(['Patient', 'Doctor'])]
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => strtolower($data['name']),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'birthDate' => $data['birthDate'],
            'gender' => $data['gender'],
            'nationalID' => $data['nationalID'],
            'type' => $data['type']
        ]);
        $type = User::latest('id')->limit(1)->get()->pluck('type');
        if ($type[0] == 'Patient') {
            $lastID = User::latest('id')->limit(1)->get()->pluck('id');
            $lastID = array_map('intval', json_decode($lastID));
            $lastID = $lastID[0];
            // $userInfo = DB::table('patient')->select("SHOW TABLE STATUS LIKE 'users'");
            // $nextID = $userInfo[0]->Auto_increment;
            DB::table('patient')->insert([
                'user_id' => $lastID,
                'photo' => '41572783.jpg'
            ]);
        }else{
            $lastID = User::latest('id')->limit(1)->get()->pluck('id');
            $lastID = array_map('intval', json_decode($lastID));
            $lastID = $lastID[0];
            // $userInfo = DB::table('patient')->select("SHOW TABLE STATUS LIKE 'users'");
            // $nextID = $userInfo[0]->Auto_increment;
            DB::table('doctor')->insert([
                'user_id' => $lastID,
                'photo' => '41572783.jpg'
            ]);
        }
        return $user;
    }
    protected function insertIntoPatient()
    {
    }
}

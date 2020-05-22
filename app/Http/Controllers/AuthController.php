<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        
        $v = Validator::make($request->all(), [
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password'  => 'required|min:3',
            'contry_subdivision_code' => 'nullable',
            'city' => 'nullable',
            'postalCode' => 'nullable',
            'role' => 'required',
            'address' => 'nullable',
            'phone' => 'nullable',
            'nature' => 'required',
            'account_number' => 'nullable',
            'tax_number' => 'nullable',
            'contact_person' => 'nullable',
            'description' => 'nullable'
        ]);
        if ($v->fails())
        {
            return response()->json([
                'status' => 'error',
                'errors' => $v->errors()
            ], 422);
        }


        $role = 3;
        $U = new User();
        $c = new Client();
        $userArray = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $role,
            'country_subdivision_code' => $request->country_subdivision_code,
            'city' => $request->city,
            'postalCode'=> $request->postalCode,
            'address' => $request->address,
            'phone' => $request->phone
        );
        
        $clientArray = array(
            'nature' => $request->nature,
            'account_number' => $request->account_number,
            'tax_number' => $request->tax_number,
            'contact_person' => $request->contact_person,
            'description' => $request->description
        );

        $u = User::create($userArray);
        $c = $u->clients()->create($clientArray);
        
        return response()->json(['status' => 'success'], 200);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($token = $this->guard()->attempt($credentials)) {
            return response()->json(['status' => 'success'], 200)->header('Authorization', $token);
        }

        return response()->json(['error' => 'login_error'], 401);
    }

    public function logout()
    {
        $this->guard()->logout();

        return response()->json([
            'status' => 'success',
            'msg' => 'Logged out Successfully.'
        ], 200);
    }

    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);

        return response()->json([
            'status' => 'success',
            'data' => $user
        ]);
    }

    public function refresh()
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['status' => 'successs'], 200)
                ->header('Authorization', $token);
        }

        return response()->json(['error' => 'refresh_token_error'], 401);
    }

    private function guard()
    {
        return Auth::guard();
    }
}
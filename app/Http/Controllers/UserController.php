<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Student;
use App\Professor;
use App\Administration;
use JWTAuth;
use JWTAuthException;
use Response;
class UserController extends Controller
{
    private function getToken($email, $password)
    {
        $token = null;
        //$credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt( ['email'=>$email, 'password'=>$password])) 
            {
                return response()->json([
                'response' => 'error',
                'message' => 'Password or email is invalid',
                'token'=>$token
                ]);
            }
        } catch (JWTAuthException $e) 
        {
            return response()->json([
            'response' => 'error',
            'message' => 'Token creation failed',
            ]);
        }
        return $token;
    }
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->get()->first();
        if ($user && \Hash::check($request->password, $user->password)) // The passwords match...
        {
            $token = self::getToken($request->email, $request->password);
            $user->remember_token = $token;
            $user->save();
            $data = null;
             
            if($user->type == 'student') $data = Student::all()->where('id_student',$user->id)->first();
            else if( $user->type == 'admin' )$data =  Administrations::all()->where('id_administration',$user->id)->first();
            else $data = Professor::all()->where('id_professor',$user->id)->first();
            $response = ['success'=>true, 'data'=>['id'=>$user->id,'remember_token'=>$user->remember_token,'type'=>$user->type, 'email'=>$user->email,'data'=> $data]];           
        }
        else 
          $response = ['success'=>false, 'data'=>'Record doesnt exists'];
          return response()->json($response, 201);
    }
    public function register(Request $request)
    { 
        $payload = [
            'password'=>\Hash::make($request->password),
            'email'=>$request->email,
            'type'=>$request->type,
            'remember_token'=> ''
        ];
                  
        $user = new  User($payload);
        if ($user->save())
        {
            
            $token = self::getToken($request->email, $request->password); // generate user token
            
            if (!is_string($token))  return response()->json(['success'=>false,'data'=>'Token generation failed'], 201);
            
            $user =  User::where('email', $request->email)->get()->first();
            
            $user->remember_token = $token; // update user token
            
            $user->save();
            
            $response = ['success'=>true, 'data'=>['type'=>$user->type,'id'=>$user->id,'email'=>$request->email,'remember_token'=>$token]];        
        }
        else
            $response = ['success'=>false, 'data'=>'Couldnt register user'];
        
        
        return response()->json($response, 201);
    }

}

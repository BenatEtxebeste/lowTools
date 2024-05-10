<?php
     
namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
     
class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
     
        if($validator->fails()){
            return response()->json([
                'message' => 'Validation Error.',
                'errors' => $validator->errors()
            ]);
        }
     
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
   
        return response()->json([
            'success' => $success,
            'message' => 'Usuario registrado correctamente.'
        ], 401);
    }
     
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request): JsonResponse
    {
        if(Auth::attempt(['name' => $request->name, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['name'] =  $user->name;
   
            return response()->json([
                'success' => $success,
                'message' => 'Usuario logeado correctamente.'
            ]);        } 
        else{ 
            return response()->json([
                'error' => 'Unauthorised'
            ], 401);
        } 
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
    }
}
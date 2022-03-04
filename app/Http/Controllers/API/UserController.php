<?php

namespace App\Http\Controllers\API;

use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        try {
            
            /// ສ່ວນທີ່ຂຽນເພີ່ມໄດ້

            $userCheck = User::where('email',$request->email); // ເຊັກ Email

                if($userCheck->count()){
                    
                    $success = false;
                    $message = 'ອີເມວລ໌ນີ້ ໄດ້ຖຶກລົງທະບຽນແລ້ວ!';

                } else{

                    $user = new User();
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->password = Hash::make($request->password);
                    $user->save();
        
                    $success = true;
                    $message = 'ລົງທະບຽນສຳເລັດ!';
                }
        /// ປິດສ່ວນທີ່ຂຽນເພີ່ມ
               
  
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response ສົ່ງຂໍ້ມູນກັບໄປ
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email_login,
            'password' => $request->password_login,
        ];

        if (Auth::attempt($credentials)) {
            $success = true;
            $message = 'ການເຂົ້າສູ່ ລະບົບສຳເລັດ!';
        } else {
            $success = false;
            $message = 'ເຂົ້າສູ່ລະບົບ ບໍ່ສຳເລັດ!';
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }

    public function logout()
    {
        try {
            Session::flush();
            $success = true;
            $message = 'Successfully logged out';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }
}

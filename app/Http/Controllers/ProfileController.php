<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index(Request $request, $id)
    {
        $name = "Donald Trump";
        $age = "75";

        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;  
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];  
        $cookieSecure = false;  
        $cookieHttpOnly = true;

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // $cookieValue = $request->cookie($cookieName);


        // if (!$cookieValue) {
            // $cookieValue = '123-XYZ';  
            
            $cookie = cookie(
                $cookieName,
                $cookieValue,
                $cookieMinutes,
                $cookiePath,
                $cookieDomain,
                $cookieSecure,
                $cookieHttpOnly
            );


        //     return redirect()->route('profile', ['id' => $id])->cookie($cookie);        
        // }
        return response()->json($data, 200)->cookie($cookie);

        // Return the response with the existing cookie value
        // return response()->json($data, 200);
    }
}

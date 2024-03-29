<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){
    $user=User::all();
    return response()->json([
        "user"=>$user,
    ],200);
   }

   public function show($id){
    $user=User::find($id);
    return response()->json([
        "user"=>$user,
    ],200);
   }

   public function store(Request $request){
    $user=User::create([
        "name"=>$request->name,
        "email"=>$request->email,
        "password"=>$request->password
    ]);
    return response()->json([
        "user"=>$user
    ]);
   }

   public function destroy($id){
     $user=User::find($id);

     $user->delete();
     return response()->json([
        "message"=>"The user is deleted successfuly",
     ]);
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use Image;

class ProfileController extends Controller
{
   public function profile()
   {
   return view('profile',array('user'=>Auth::user()));
   }
   public function update_avatar(Request $request)
   {
   	if($request ->hasFile('avatar'))
   	{
   		$avatar=$request->file('avatar');
   		$filename = time() .'.'.$avatar->getClientOriginalExtension();
   		Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' . $filename));
   		$user = Auth::user();
   		$user->avatar = $filename;
   		$user->save();
   	}
   	return view('profile',array('user'=>Auth::user()));
   }
   public function update($id){
     $user=User::find($id);
     
      return view('updateinfo',['user'=>$user]);

   } 
   public function edit(Request $request,$id){
      $data = array(
          'name'=>$request->input('name'),
          'lname'=>$request->input('lname'),
          'email'=>$request->input('email'),
          'dob'=>$request->input('dob'),
          'school'=>$request->input('school'),
          'phone'=>$request->input('phone'),


         );
      User::where('id',$id)->update($data);
  
            return redirect('/')->with('success','your info updated successfully!');
   }
}

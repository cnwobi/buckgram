<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
   public function index(User $user)   
   {
   

    return view('profiles.index',compact('user'));
    
   } 
   public function edit(User $user){

      return view('profiles.edit',compact('user'));
   }

   public function update(User $user){
      $this->authorize('update',$user->profile);
     
auth()->user()->profile->update($this->validateAndSave());

      

     return redirect("/profile/{$user->id}");
   }

   public function validateAndSave(){
      if(request('image')){
         $array1 = request()->validate([
            'title'=> 'required',
            'description'=> 'required',
            'url'=>'url',
            'image'=>'image',
         
           ]);
           $imagePath= request('image')->store('profile','public');
           $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
           $image->save();        
           
           return array_merge($array1,['image'=>$imagePath]);
      } 
           $array2 =  request()->validate([
            'title'=> 'required',
            'description'=> 'required',
            'url'=>'url',
            'image'=>'',
           ]);
           return $array2;
       }
      }


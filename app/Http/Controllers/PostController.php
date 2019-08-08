<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller

{
    public function __construct() {
        $this->middleware('auth');
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
$data =  request()->validate([
    'image'=>['required','image'],
    'caption' => ['required'],
]);
$imagePath = request('image')->store('uploads','public');

auth()->user()->posts()->create(
   [ 'caption'=>$data['caption'],
   'image'=>$imagePath,
   ]);

return redirect('/profile/'.auth()->user()->id);
    }
}

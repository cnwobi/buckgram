@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{$user->profile->image}} " class="rounded-circle img-fluid w-100">
        </div>
        <div class="col-9 pt-5">
          <div class="d-flex justify-content-between align-items-baseline">
              <h1>{{$user->username}}</h1>
              @can('update', $user->profile)
              <a href="/p/create">Add New Post</a>    
              @endcan
              
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            
          <div class = "d-flex">
              <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
              <div class="pr-5"><strong>23k</strong> followers</div>
              <div class="pr-5"><strong>212</strong> following</div>
          </div>
          <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
          <div>{{$user->profile->description}}</div>
              <div><a href="http://" target="_blank" rel="noopener noreferrer">{{$user->profile->url?? 'www.instagram.com'}}</a></div>
        </div>
       
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}"> <img src="/storage/{{$post->image}}" alt="" class="w-100 pt-4">
            </a>
               </div>
            
        @endforeach
       
        {{-- <div class="col-4">
            <img src="https://instagram.fmel4-1.fna.fbcdn.net/vp/bfe4f59457987d607445a9405fe9942f/5DED6C12/t51.2885-15/sh0.08/e35/c0.81.887.887/s640x640/66420383_162375928225341_762635906960426989_n.jpg?_nc_ht=instagram.fmel4-1.fna.fbcdn.net" alt="" class="w-100 pt-4">
        </div>
         <div class="col-4">
            <img src="https://instagram.fmel4-1.fna.fbcdn.net/vp/bfe4f59457987d607445a9405fe9942f/5DED6C12/t51.2885-15/sh0.08/e35/c0.81.887.887/s640x640/66420383_162375928225341_762635906960426989_n.jpg?_nc_ht=instagram.fmel4-1.fna.fbcdn.net" alt="" class="w-100 pt-4">
        </div>  --}}
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="data:image/png;base64,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" class="rounded-circle img-fluid">
        </div>
        <div class="col-9 pt-5">
          <div><h1>{{$user->username}}</h1></div>
          <div class = "d-flex">
              <div class="pr-5"><strong>153</strong> posts</div>
              <div class="pr-5"><strong>23k</strong> followers</div>
              <div class="pr-5"><strong>212</strong> following</div>
          </div>
          <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
          <div>{{$user->profile->description}}</div>
              <div><a href="http://" target="_blank" rel="noopener noreferrer">{{$user->profile->url?? 'www.instagram.com'}}</a></div>
        </div>
       
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fmel4-1.fna.fbcdn.net/vp/bfe4f59457987d607445a9405fe9942f/5DED6C12/t51.2885-15/sh0.08/e35/c0.81.887.887/s640x640/66420383_162375928225341_762635906960426989_n.jpg?_nc_ht=instagram.fmel4-1.fna.fbcdn.net" alt="" class="w-100 pt-4">
        </div>
        <div class="col-4">
            <img src="https://instagram.fmel4-1.fna.fbcdn.net/vp/bfe4f59457987d607445a9405fe9942f/5DED6C12/t51.2885-15/sh0.08/e35/c0.81.887.887/s640x640/66420383_162375928225341_762635906960426989_n.jpg?_nc_ht=instagram.fmel4-1.fna.fbcdn.net" alt="" class="w-100 pt-4">
        </div>
         <div class="col-4">
            <img src="https://instagram.fmel4-1.fna.fbcdn.net/vp/bfe4f59457987d607445a9405fe9942f/5DED6C12/t51.2885-15/sh0.08/e35/c0.81.887.887/s640x640/66420383_162375928225341_762635906960426989_n.jpg?_nc_ht=instagram.fmel4-1.fna.fbcdn.net" alt="" class="w-100 pt-4">
        </div> 
    </div>
</div>
@endsection

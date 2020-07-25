@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fcgp8-1.fna.fbcdn.net/v/t51.2885-19/s150x150/24125185_1957310201259482_1738255371580997632_n.jpg?_nc_ht=instagram.fcgp8-1.fna.fbcdn.net&_nc_ohc=LkqLQNULdYwAX9ENIJk&oh=f507675219fca14a72b0a09b16a77d3a&oe=5F4652B5" alt="" class="rounded-circle img-fluid">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between ">
                <h1>{{ $user->userName }}</h1>
                <a href="">Add post</a>
            </div>

            <div class="container">
                <div class="row">
                <div class="cl-4 pr-2"><strong>0</strong> Posts</div>
                <div class="cl-4 px-2"><strong>48</strong> Followers</div>
                <div class="cl-4 pl-2"><strong>123</strong> Following</div>
                </div>
                
            </div>
            <div>{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div>{{$user->profile->url ?? N/A}}</div>
            <div class="mt-3"><h5><strong>{{ $user->name }}</strong></h5></div>
        </div>
    </div>

    <div class="row pt-3">
        <div class="col-4"><img src="/photo/taylor.jpg" class="img-fluid" alt=""></div>
        <div class="col-4"><img src="/photo/taylor.jpg" class="img-fluid" alt=""></div>
        <div class="col-4"><img src="/photo/taylor.jpg" class="img-fluid" alt=""></div>
    </div>
    <h1>jcsdnn</h1>
</div>
@endsection

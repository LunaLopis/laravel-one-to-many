@extends('layouts.admin')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-12">
           <h1 class=""> {{ $post->title}}</h1>
       </div>
       <div>
           <p> {{$post->content}}</p>
       </div>
       <div>
            <img src="{{ asset('storage/' .$post->cover_image)}}" width="500px">
       </div>
   </div>
</div>
@endsection
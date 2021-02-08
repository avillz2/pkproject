@extends('layouts.app')

@section('content')

    @if (count($posts)> 0)
    <div class="card">
        <ul class="list-group list-group-flush">
@foreach ($posts as $post)
<div class="row">
    <div class="col-md-4">
        <img style="width:100%"src="/storage/cover_image/{{$post->cover_image}}" alt="">
    </div>
    <div class="col-md-8">
        <h2> <a href="/posts/{{$post->id}}">{{$post->title}}</a> </h2>
    <small>input on {{$post->created_at}}</small>

    </div>

</div>





@endforeach



    @else

@endif
</ul>
</div>
@endsection


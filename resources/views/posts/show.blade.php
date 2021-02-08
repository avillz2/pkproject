@extends('layouts.app')


@section('content')
<a href="/posts">Go Back</a>
<h3>{{$post->title}}</h3>
<div class="row">
    <div class="col-md-12">
        <img style="width:100%"src="/storage/cover_image/{{$post->cover_image}}" alt="">
    </div>
</div>
<p>{{$post->body}}</p>
<hr>
<small>input on {{$post->created_at}}</small>
<hr>
@if(!Auth::guest())
@if(Auth::user() ->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'POST','class' => 'pull right'])!!}

{{Form::hidden('_method','DELETE')}}
{{Form::submit('DELETE', ['class'=>'btn btn-danger'])}}


{!!Form::close()!!}
@endif
@endif
@endsection


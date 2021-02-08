@extends('layouts.app')


@section('content')
<h1>Edit Post</h1>
{!!Form::open(['action'=>['App\Http\Controllers\PostsController@update',$post->id],'method'=>'POST','enctype' => 'multipart/form-data'])!!}
<div class="form-group">
    {{Form::label('title', 'Title')}} <br>
    {{{Form::text('title',$post->title ,['class' => 'Form-control','placeholder' => 'Title'])}}}

</div>
<div class="form-group">
    {{Form::label('body', 'Body')}} <br>
    {{{Form::textarea('body',$post->body ,['class' => 'Form-control','placeholder' => 'Body'])}}}

</div>
<div class="form-group">
    {{Form::file('cover_image')}} <br>


</div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('UPDATE', ['class'=>'btn btn-primary'])}}


{!!Form::close()!!}

@endsection


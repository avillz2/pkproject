@extends('layouts.app')


@section('content')
<h1>Create Post</h1>
{!!Form::open(['action'=>'App\Http\Controllers\PostsController@store','method'=>'POST','enctype' => 'multipart/form-data' ])!!}
<div class="form-group">
    {{Form::label('title', 'Title')}} <br>
    {{{Form::text('title','' ,['class' => 'Form-control','placeholder' => 'Title'])}}}

</div>
<div class="form-group">
    {{Form::label('body', 'Body')}} <br>
    {{{Form::textarea('body','' ,['class' => 'Form-control','placeholder' => 'Body'])}}}

</div>

<div class="form-group">
    {{Form::file('cover_image')}} <br>


</div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}


{!!Form::close()!!}

@endsection


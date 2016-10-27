@extends('layouts.master')

@section('content')
<h1 class='content-head'>Frontend tools: {{ $desc }}</h1>
<div class='content-sheets'>
    <div class='user-sheet-container'>
        <h2>Generated Users:</h2>
        @foreach($generatedUsers as $generatedUser)
            @include('user.show', array('myUser'=>$generatedUser))
        @endforeach
        @include('layouts.generation.form', array('entity'=>'user'))
    </div>
</div>
@stop
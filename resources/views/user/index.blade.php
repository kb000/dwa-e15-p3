@extends('layouts.master')

@section('content')
<div class='content-sheets'>
    <h2>Generated Users:</h2>
    @foreach($generatedUsers as $generatedUser)
        <div class='user-sheet-container'>
        @include('user.show', array('myUser'=>$generatedUser))
        </div>
    @endforeach
</div>
@stop
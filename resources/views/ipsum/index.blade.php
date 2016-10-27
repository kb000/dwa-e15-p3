@extends('layouts.master')

@section('content')
<h1 class='content-head'>Frontend tools: {{ $desc }}</h1>
<div class='content-sheets'>
    <div class='user-sheet-container'>
        <h2>Generated Lorem Ipsum:</h2>
        @include('ipsum.show', array('myIpsum'=>$generatedIpsum))
        @include('layouts.generation.form', array('entity'=>'ipsum'))
    </div>
</div>
@stop
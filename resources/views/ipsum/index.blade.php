@extends('layouts.master')

@section('content')
<div class='content-sheets'>
    <h2>Generated Lorem Ipsum:</h2>
    @include('ipsum.show', array('myIpsum'=>$generatedIpsum))
</div>
@stop
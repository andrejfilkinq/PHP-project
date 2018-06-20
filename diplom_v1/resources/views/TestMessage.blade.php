@extends('layouts.form')


<form method="POST" action="{{ route('message') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="text" name='message'>
    <input type="submit">

</form>


@section('content')


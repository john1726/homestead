@extends('layouts.app')

@section('title', '- Programs')

@section('content')
    <h1>Programs</h1>
    <program-manager :initial-programs="{{ $programs }}"></program-manager>
@endsection
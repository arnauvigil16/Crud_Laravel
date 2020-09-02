@extends('Master.master')

@section('pageTitle','Coche')

@section('header')
<div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Coche amb identificador: {{ $coche->id }}</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')

<div class="container-fluid">
            <ul>
                <li>Make: {{ $coche->make }} </li>
                <li>Model: {{ $coche->model }} </li>
                <li>Produced on: {{ $coche->produced_on }} </li>
            </ul>
 </div>
@endsection
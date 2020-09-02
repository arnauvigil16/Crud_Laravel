@extends('Master.master')

@section('pageTitle','Formulari')

@section('header')
<div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Crud Coches</h1>
                <h1>Formulari d'inscripció d'un cotxe</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')

<div class="container-fluid">
        <form action="store" method="get">
            @csrf


            <div class="form-group">
                <h4>Introdueixi on s'ha creat el coche</h4>
                <input type="text" class="form-control" id="make" name="make">
            </div>

            <div class="form-group">
                <h4>Introdueixi el model del coche</h4>
                <input type="text" class="form-control" id="model" name="model">
            </div>

            <div class="form-group">
                <h4>Introdueixi la data de fabricació</h4>
                <input type="date" class="form-control" id="produced_on" name="produced_on">
            </div>
            </br>

            <button type="submit" class="btn btn-primary">Enviar!</button>
        </form>
 </div>
@endsection

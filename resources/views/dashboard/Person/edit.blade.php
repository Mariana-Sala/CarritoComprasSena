@extends('dashboard.master')
@section('titulo', 'Editar Persona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Modificar Persona</h1>
    <form action="{{ url('dashboard/person/'.$person->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="Firts_Name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Firts_Name" id="Firts_Name" value="{{$person->Firts_Name}}" placeholder="Ingresa el Nombre de la Persona">
            </div>
        </div>
        <div class="form-group row">
            <label for="Last_Name" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Last_Name" id="Last_Name" value="{{$person->Last_Name}}" placeholder="Ingresa el Apellido de la Persona">
            </div>
        </div>
        <div class="form-group row">
            <label for="type">Tipo de Persona</label>
            <div class="col-sm-10">
                <select class="form-select" name="type" id="type">
                    <option value=1 {{ $person->state == 1 ? 'selected' : '' }}>Persona Natural</option>
                    <option value=2 {{ $person->state == 2 ? 'selected' : '' }}>Empresa</option>>
                    <option value=3 {{ $person->state == 3 ? 'selected' : '' }}>Proveedor</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Type">Tipo de Documento</label>
            <div class="col-sm-10">
                <select class="form-select" name="Document_Type" id="Document_Type">
                    <option value=1 {{ $person->state == 1 ? 'selected' : '' }}>CC</option>
                    <option value=2 {{ $person->state == 2 ? 'selected' : '' }}>TI</option>
                    <option value=3 {{ $person->state == 3 ? 'selected' : '' }}>Pasaporte</option>
                    <option value=4 {{ $person->state == 4 ? 'selected' : '' }}>NIT</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Number" class="col-sm-2 col-form-label">Numero de Documento</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="Document_Number" id="Document_Number" value="{{$person->Document_Number}}" placeholder="Ingresa el numero de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="Adress" class="col-sm-2 col-form-label">Direccion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Adress" id="Adress" value="{{$person->Adress}}" placeholder="Ingresa la Direccion">
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone" class="col-sm-2 col-form-label">Numero de Telefonico</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="Phone" id="Phone" value="{{$person->Phone}}" placeholder="Ingresa el Numero Telefonico">
            </div>
        </div>
        <div class="form-group row">
            <label for="Email" class="col-sm-2 col-form-label">Correo Electronico</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="Email" id="Email" value="{{$person->Email}}" placeholder="Ingresa el Correo Electronico">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection
@extends('dashboard.master')
@section('titulo', 'Personas')
@include('layouts/navigation')
@section('contenido')
<main>
    <div class="container py-4">
        <h1>Listado de Personas</h1>
        <br>
        <a href="{{url('dashboard/person/create')}}" class="btn btn-primary btn-sm">Nueva Persona</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tipo Persona</th>
                    <th>Tipo de documento</th>
                    <th>Numero de Documento</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($person as $person)
                <tr>
                    <td scope="row">{{$person->Firts_Name}}</td>
                    <td>{{$person->Last_Name}}</td>
                    <td>{{$person->type}}</td>
                    <td>{{$person->Document_Type}}</td>
                    <td>{{$person->Document_Number}}</td>
                    <td>{{$person->Adress}}</td>
                    <td>{{$person->Phone}}</td>
                    <td>{{$person->Email}}</td>
                    <td><a href="{{url('dashboard/person/'.$person->id.'/edit')}}" class="bi bi-pencil"></a></td>
                    <td>
                        <form action="{{url('dashboard/person/'.$person->id)}}" method="post">
                            @method("DELETE")
                            @csrf 
                            <button class="bi bi-eraser-fill" type="submit"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
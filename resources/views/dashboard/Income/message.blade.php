@extends('dashboard.master')
@section('titulo', 'Mensaje')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Mensaje</h1>
    <h2>{{$msg}}</h2>
    <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
</div>
@endsection
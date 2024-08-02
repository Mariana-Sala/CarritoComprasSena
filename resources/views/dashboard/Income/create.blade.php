@extends('dashboard.master')
@section('titulo','Nuevo Ingreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
  <form action="{{ route('income.store') }}" method="post">
    @csrf
    <div class="form-group row">
        <label for="provider_id" class="col-sm-2 col-form-label">Proveedor</label>
        <div class="col-sm-10">
            <select name="provider_id" id="provider_id" class="form-select" required >
                <option value="">Seleccionar Proveedor</option>
                @foreach($providers as $provider)
                <option value="{{$provider->id}}">{{$provider->Firts_Name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="receipt_type" class="col-sm-2 col-form-label">Tipo de Recibo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="receipt_type" id="receipt_type" placeholder="Ingresa el Tipo de Recibo">
        </div>
    </div>
    <div class="form-group row">
        <label for="receipt_series" class="col-sm-2 col-form-label">Serie de Recibo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingresa la Serie del Recibo">
        </div>
    </div>
    <div class="form-group row">
        <label for="receipt_number" class="col-sm-2 col-form-label">Numero de Recibo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="receipt_number" id="receipt_number" placeholder="Ingresa el Numero del Recibo">
        </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="date" id="date" value="2024-03-14" min="2024-01-01" max="2025-12-31">
        </div>
    </div>
    <div class="form-group row">
        <label for="tax" class="col-sm-2 col-form-label">Impuestos</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="tax" id="tax" step="0.01" placeholder="Ingresa el valor del Impuesto">
        </div>
    </div>
    <div class="form-group row">
        <label for="total" class="col-sm-2 col-form-label">Total</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="total" id="total" step="0.0001" placeholder="Ingresa el valor Total">
        </div>
    </div>
    <div class="form-group row">
        <label for="status">Estado</label>
        <div class="col-sm-10">
            <select class="form-control" name="status" id="status">
                <option value="1">Cancelado</option>
                <option value="0">Pendiente</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Registrar</button>
           <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
  </form>  
</div>
@endsection
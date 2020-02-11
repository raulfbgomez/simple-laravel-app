@extends('layouts.app')

@section('content')
    <h1>Edit Report {{ $report->id }}</h1>
    <a href="/expense_reports" class="btn btn-info">Cancelar</a>
    <form action="/expense_reports/{{ $report->id }}" method="POST">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" id="title" name="title" placeholder="Ingrese titulo" value="{{ $report->title }}">
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
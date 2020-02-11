@extends('layouts.app')

@section('content')
    <h2>Delete Report: {{ $report->title }}</h2>
    <form action="/expense_reports/{{ $report->id }}" method="POST">
      @csrf
      @method('delete')
      <a href="/expense_reports" class="btn btn-danger">Cancel</a>
      <button class="btn btn-primary" type="submit">Confirmar</button>
    </form>

@endsection
@extends('layouts.base')

@section('content')
  <h1>New Expense</h1>
  <a href="/expense_reports/{{ $report->id }}">Regresar</a>
  @if($errors->any())
    @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  @endif
  <form action="/expense_reports/{{ $report->id }}/expenses" method="POST">
    @csrf
    <label for="description">Description</label><br>
    <textarea name="description" id="description" value="{{ old('description') }}" cols="30" rows="10" placeholder="Description"></textarea><br>
    <label for="amount">Amount</label><br>
    <input type="number" name="amount" id="amount" placeholder="Amount"><br>
    <button type="submit">Guardar</button>
  </form>
@endsection
@extends('layouts.app')

@section('content')
    <h2>Send Report {{ $report->title }}</h2>
    <a href="/expense_reports" class="btn btn-info">Cancel</a>
    <form action="/expense_reports/{{ $report->id }}/sendEmail" method="POST">
      @csrf
      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="Email">
      <button class="btn btn-primary" type="submit">Send email</button>
    </form>

@endsection
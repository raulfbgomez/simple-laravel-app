@extends('layouts.app')

@section('content')
    <h1>{{ $report->title }}</h1>
    <a href="/expense_reports" class="btn btn-info">Regresar</a>
    <br><br><br>
    <a href="/expense_reports/{{ $report->id }}/confirmSendEmail" class="btn btn-primary">Send Email</a>
    <hr>
    <table class="table">
        @foreach ($report->expenses as $expense)
            <tr>
                <td>{{ $expense->description }}</td>
                <td>{{ $expense->amount }}</td>
                <td>{{ $expense->created_at }}</td>
            </tr>
        @endforeach
    </table>
    <hr>
    <a href="/expense_reports/{{ $report->id }}/expenses/create" class="btn btn-primary">New expense</a>

@endsection
@extends('layouts.app')

@section('content')
    <h1>Reports</h1>
    <a href="/expense_reports/create" class="btn btn-primary">Create a new report</a>
    <hr>
    <table class="table">
        @foreach ($expenseReports as $expenseReport)
            <tr>
                <td><a href="/expense_reports/{{ $expenseReport->id }}">{{ $expenseReport->title }}</a></td>
                <td><a href="/expense_reports/{{ $expenseReport->id }}/edit" class="btn btn-warning">Edit</a></td>
                <td><a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection
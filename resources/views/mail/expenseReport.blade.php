<h1>Expense Report</h1>
<h2>{{ $report->title }}</h2>

<h3>Expenses</h3>

<table>
  @foreach ($report->expenses as $expense)
    <tr>
      <td>{{ $expense->description }}</td>
      <td>{{ $expense->Amount }}</td>
      <td>{{ $expense->created_at }}</td>
    </tr>
  @endforeach
</table>
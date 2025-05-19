@extends('layouts.app')

@section('title', 'Earnings Report')

@section('content')
<h2>Earnings Report</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Date</th>
            <th>Description</th>
            <th>Amount ($)</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($reports as $report)
        <tr>
            <td>{{ $report->date->format('Y-m-d') }}</td>
            <td>{{ $report->description }}</td>
            <td>{{ number_format($report->amount, 2) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $reports->links() }}
@endsection

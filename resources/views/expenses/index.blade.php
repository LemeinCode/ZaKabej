@extends('layouts.app')

@section('title', 'My Expenses')

@section('content')
    <h2>Expenses</h2>
    <a href="{{ route('expenses.create') }}" class="btn btn-success mb-3">Add Expense</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Category</th>
                <th>Amount</th>
                <th>Description</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($expenses as $expense)
                <tr>
                    <td>{{ $expense->category }}</td>
                    <td>Ksh. {{ number_format($expense->amount, 2) }}</td>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->date }}</td>
                    <td>
                        <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h2>Welcome to Your Dashboard</h2>
        <p>Manage your expenses and budgets efficiently.</p>
        
        <a href="{{ route('expenses.index') }}" class="btn btn-primary">View Expenses</a>
        <a href="{{ route('budgets.index') }}" class="btn btn-secondary">Manage Budgets</a>
    </div>
@endsection

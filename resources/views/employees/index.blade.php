@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mt-2 mb-5">
    <h1>Dashboard, {{ Auth::user()->name }}</h1>
    <a href="{{ route('logout') }}" class="btn btn-info text-dark">Logout</a>
</div>

<div class="d-flex justify-content-end mb-3">
    <form action="{{ route('employees.index') }}" method="GET" class="form-inline">
        <input type="text" name="search" value="{{ old('search', $search) }}" placeholder="Search employees..." class="form-control mr-2">
        <button type="submit" class="btn btn-primary mr-2">Search</button>
    </form>
</div>
<a href="{{ route('employees.create') }}" class="btn btn-success">Create Employee</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
            <td>
                <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $employees->appends(['search' => $search])->links('pagination::bootstrap-4') }}

@endsection

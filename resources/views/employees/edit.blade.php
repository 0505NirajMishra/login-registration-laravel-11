@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4">Edit Employee</h1>

<div class="d-flex justify-content-center">
    <form action="{{ route('employees.update', $employee) }}" method="POST" class="w-50">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $employee->name) }}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $employee->email) }}">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" id="position" value="{{ old('position', $employee->position) }}">
            @error('position')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" class="form-control" id="salary" value="{{ old('salary', $employee->salary) }}">
            @error('salary')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block">Update</button>
    </form>
</div>
@endsection

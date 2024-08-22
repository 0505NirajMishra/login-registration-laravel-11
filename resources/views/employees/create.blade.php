@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Employee</h1>

<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="position">Position</label>
        <input type="text" name="position" class="form-control" id="position" value="{{ old('position') }}">
        @error('position')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="salary">Salary</label>
        <input type="text" name="salary" class="form-control" id="salary" value="{{ old('salary') }}">
        @error('salary')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <br/>

    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection

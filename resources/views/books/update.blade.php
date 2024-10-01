
@extends('layout')

@section('content')

<a href="{{ route('employee.index') }}">Back</a>

<legend>Update Employee</legend>

<form method="post" action="{{ route('employee.update', $employee->id) }}">
    @csrf

    <div class="mb-2">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{ old('name', $employee->name) }}">
        <div class="text-danger">{{ $errors->first('name') }}</div>
    </div>

    <div class="mb-2">
        <label for="job_title" class="form-label">Job Title</label>
        <input type="text" class="form-control" name="job_title" value="{{ old('job_title', $employee->job_title) }}">
        <div class="text-danger">{{ $errors->first('job_title') }}</div>
    </div>

    <div class="mb-2">
        <label for="joining_date" class="form-label">Joining Date</label>
        <input type="date" class="form-control" name="joining_date" value="{{ old('joining_date', $employee->joining_date) }}">
        <div class="text-danger">{{ $errors->first('joining_date') }}</div>
    </div>

    <div class="mb-2">
        <label for="salary" class="form-label">Salary</label>
        <input type="text" class="form-control" name="salary" value="{{ old('salary', $employee->salary) }}">
        <div class="text-danger">{{ $errors->first('salary') }}</div>
    </div>

    <div class="mb-2">
        <label for="email" class="form-label">Email (Optional)</label>
        <input type="email" class="form-control" name="email" value="{{ old('email', $employee->email) }}">
        <div class="text-danger">{{ $errors->first('email') }}</div>
    </div>

    <div class="mb-2">
        <label for="mobile_no" class="form-label">Mobile No</label>
        <input type="text" class="form-control" name="mobile_no" value="{{ old('mobile_no', $employee->mobile_no) }}">
        <div class="text-danger">{{ $errors->first('mobile_no') }}</div>
    </div>

    <div class="mb-2">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" name="address">{{ old('address', $employee->address) }}</textarea>
        <div class="text-danger">{{ $errors->first('address') }}</div>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
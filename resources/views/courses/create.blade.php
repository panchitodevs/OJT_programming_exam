@extends('layouts.app')

@section('content')
<h2>Create Course</h2>

@if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('courses.store') }}">
    @csrf
    <label>Title:</label><br>
    <input type="text" name="title" value="{{ old('title') }}"><br>

    <label>Description:</label><br>
    <textarea name="description">{{ old('description') }}</textarea><br>

    <label>Instructor:</label><br>
    <input type="text" name="instructor" value="{{ old('instructor') }}"><br>

    <label>Duration (hours):</label><br>
    <input type="number" name="duration_hours" step="0.25" value="{{ old('duration_hours') }}"><br>

    <button type="submit">Save</button>
</form>
@endsection


@extends('layouts.app')

@section('content')
<h2>Courses Filtered by Duration</h2>

<form method="GET" action="{{ route('courses.duration') }}">
    <label>Filter by Duration:</label>
    <select name="duration">
        <option value="0.5">30 minutes</option>
        <option value="1">1 hour</option>
        <option value="1.5">1 hour 30 minutes</option>
        <option value="2">2 hours</option>
    </select>
    <button type="submit">Filter</button>
</form>

@if(isset($courses))
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Title</th>
            <th>Instructor</th>
            <th>Duration (hrs)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
        <tr>
            <td>{{ $course->title }}</td>
            <td>{{ $course->instructor }}</td>
            <td>{{ $course->duration_hours }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection

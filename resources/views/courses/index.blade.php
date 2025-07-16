@extends('layouts.app')

@section('content')
<h2>All Courses</h2>

<a href="{{ route('courses.create') }}">Create New Course</a>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Title</th>
            <th>Instructor</th>
            <th>Duration (hrs)</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
        <tr>
            <td>{{ $course->title }}</td>
            <td>{{ $course->instructor }}</td>
            <td>{{ $course->duration_hours }}</td>
            <td>
                <a href="{{ route('courses.edit', $course->id) }}">Edit</a>
                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

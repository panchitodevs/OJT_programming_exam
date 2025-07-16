<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor' => 'required|string|max:255',
            'duration_hours' => 'required|numeric|min:0.25',
        ]);

        Courses::create($request->only(['title', 'description', 'instructor', 'duration_hours']));

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function edit($id)
    {
        $course = Courses::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor' => 'required|string|max:255',
            'duration_hours' => 'required|integer|min:1',
        ]);

        $course = Courses::findOrFail($id);
        $course->update($request->only(['title', 'description', 'instructor', 'duration_hours']));

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $course = Courses::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }

    public function courseDuration(Request $request)
    {
        $request->validate([
            'duration' => 'required|numeric|min:0',
        ]);

        $courses = Courses::where('duration_hours', '<=', $request->duration)->get();
        return view('courses.duration', compact('courses'));
    }
}

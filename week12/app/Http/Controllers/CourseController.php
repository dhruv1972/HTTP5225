<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Professor;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        try {
            $courses = Course::with(['professor', 'users'])->get();
            return view('courses.index', compact('courses'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error loading courses: ' . $e->getMessage());
        }
    }

    public function create()
    {
        $professors = Professor::all();
        return view('courses.create', compact('professors'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'professor_id' => 'nullable|exists:professors,id'
            ]);

            Course::create([
                'name' => $request->name,
                'description' => $request->description,
                'professor_id' => $request->professor_id
            ]);

            return redirect()->route('courses.index')->with('success', 'Course added successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error creating course: ' . $e->getMessage())->withInput();
        }
    }

    public function show(Course $course)
    {
        try {
            $course->load(['professor', 'users']);
            return view('courses.show', compact('course'));
        } catch (\Exception $e) {
            return redirect()->route('courses.index')->with('error', 'Error loading course details.');
        }
    }

    public function edit(Course $course)
    {
        $professors = Professor::all();
        return view('courses.edit', compact('course', 'professors'));
    }

    public function update(Request $request, Course $course)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'professor_id' => 'nullable|exists:professors,id'
            ]);

            $course->update([
                'name' => $request->name,
                'description' => $request->description,
                'professor_id' => $request->professor_id
            ]);

            return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating course: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy(Course $course)
    {
        try {
            $course->delete();
            return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('courses.index')->with('error', 'Error deleting course: ' . $e->getMessage());
        }
    }
}

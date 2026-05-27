<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index()
    {
        // This route will handle displaying all courses (Read operation)
        //fetch all data from DB
        $courses = Course::all();
        //pass the variable to the view with compact() function 
        return view("course.index", compact('courses'));
    }
    public function create()
    {
        // Routing to page/view which will hold the create form (Create operation)
        return view("course.create");
    }
    public function store(Request $request)
    {
        // This would create the entry for the course (Create operation)

        $request->validate([
            'title' => 'required',
            'instructor' => 'required',
            'courseHead' => 'required',
        ]);
        Course::create($request->all());
        return redirect('/course')->with('success', "Course created successfully");

    }

    public function show($id)
    {
        // This route will handle displaying a single course (Read operation)
        $course = Course::findOrFail($id);
        return view("course.show", compact('course'));
    }

    public function edit($id)
    {
        // This route will handle displaying the form for editing a course (Update operation)
        $course = Course::findOrFail($id);
        return view("course.edit", compact('course'));
    }

    public function update(Request $request, $id)
    {
        // This would update the entry for the course (Update operation)
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return redirect('/course')->with('success', "Course updated successfully");
    }

    public function destroy($id)
    {
        // This would delete the entry for the course (Delete operation)
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect('/course')->with('success', "Course deleted successfully");
    }
}

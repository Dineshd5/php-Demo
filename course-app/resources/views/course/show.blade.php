@extends('layouts.app')

@section('content')
    <h1>
        Course Details
    </h1>
    <p><strong>Title:</strong> {{ $course->title }}</p>
    <p><strong>Instructor:</strong> {{ $course->instructor }}</p>
    <p><strong>Course Head:</strong> {{ $course->courseHead }}</p>
    <a href="{{ route('course.index') }}">Back</a>
@endsection
@extends ('layouts.app')

@section('content')
    <h1>
        Edit Course
    </h1>
    <form action="{{ route('course.update', $course->id) }}" method="post">
        <!-- this avoid CSRF attacks (Cross-site request forgery)  -->
        @csrf
        @method("PUT")
        <div>
            <label for="title">Course Title</label>
            <input type="text" name="title" id="title" value="{{ $course->title }}" required>
        </div>
        <div>
            <label for="instructor">Instructor</label>
            <input type="text" name="instructor" id="instructor" value="{{ $course->instructor }}" required>
        </div>
        <div>
            <label for="courseHead">Course Head</label>
            <input type="text" name="courseHead" id="courseHead" value="{{ $course->courseHead }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
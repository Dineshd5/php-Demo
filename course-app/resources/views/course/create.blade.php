@extends ('layouts.app')

@section('content')
    <h1>
        Create Course
    </h1>
    <form action="{{ route('course.store') }}" method="post">
        <!-- this avoid CSRF attacks (Cross-site request forgery)  -->
        @csrf
        <div>
            <label for="title">Course Title</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="instructor">Instructor</label>
            <input type="text" name="instructor" id="instructor" required>
        </div>
        <div>
            <label for="courseHead">Course Head</label>
            <input type="text" name="courseHead" id="courseHead">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
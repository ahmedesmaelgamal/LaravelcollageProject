@extends('app')

@section('content')
    <section class="section mb-3  col-md-6 mx-5 w-75 " style="display:flex; flex-direction:column;padding:0% 0% 0% 9%"
        id="section1">
        <legend class="fs-5 col-form-label col-sm-10 my-3">Select The Subject That You Want Register
        </legend>
        <small>pre-requisite must be satisfied</small>


        {!! Form::open(['action' => 'App\Http\Controllers\studentSubjects@store', 'method' => 'post']) !!}
        {{-- will go the store function to add departments --}}
        <div class="form-group">
            {{ Form::label('student_name', 'Student name') }}
            {{ Form::text('student_name', '', ['class' => 'form-control my-3']) }}
        </div>
        student_name
        <select name="subject" class="form-select" aria-label="Default select example">
            <option selected disabled>Select a Subject</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <div class="form-group">
            {{ Form::submit('Submit', ['class' => 'btn btn-primary my-3']) }}
        </div>
        {!! Form::close() !!}

    </section>
@endsection

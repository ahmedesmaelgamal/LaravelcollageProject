@extends('app')

@section('content')
    <section class="section mb-3  col-md-6 mx-5 w-75 " style="display:flex; flex-direction:column;padding:0% 0% 0% 9%"
        id="section1">
        {!! Form::open(['action' => 'App\Http\Controllers\PdfController@upload', 'method' => 'post']) !!}
        <legend class="fs-5 col-form-label col-sm-10 my-3">Select The Subject That You Want To Attach a File To
        </legend>
        <select name="subject" class="form-select" aria-label="Default select example">
            <option selected="" disabled>Select a Subject</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        {!! Form::file('pdf', ['id' => 'pdf']) !!}
        {!! Form::submit('Upload PDF') !!}
        {!! Form::close() !!}




{{-- 
        {!! Form::open(['url' => '/upload-pdf', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
        {!! csrf_field() !!}

        {!! Form::label('pdf', 'Select a PDF file:') !!}

        {!! Form::submit('Upload PDF') !!}
        {!! Form::close() !!} --}}
    </section>
@endsection

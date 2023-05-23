@extends('app')

@section('content')
    <main style="display:flex; flex-direction:row;padding:0% 0% 0% 6% ">

        <section class="section mb-5  col-md-6 mx-5 w-75" style="display:flex; flex-direction:row;" id="section1">
            <div class="mb-3  col-md-7 mx-5 w-75">
                <div>
                    <h3>Subjects You Added</h3>
                    <h4 class="bg-primary rounded-3 text-light text-center py-2">New Subject</h4>
                    <hr>
                </div>
                <div class="info-box card">
                    <h3 class="pb-5">Add Subjects</h3>
                    {{-- <form method="POST" action="{{ action('App\Http\Controllers\SubjectsController@store') }}" class="px-5"
                        style="display: flex; flex-direction:row; gap:20px;">
                        <div>
                            <div class="my-3">
                                <h4>Subject</h4>
                                <input name="subject" class="form-control form-control-lg my-2 rounded-3" type="text"
                                    placeholder="Enter new Department Name">
                            </div>
                            <div class="my-3">

                                <h4>Subject Department</h4>
                                <input name="subject_code" class="form-control form-control-lg my-2 rounded-3"
                                    type="text" placeholder="Enter new Department Code">
                            </div>
                        </div>
                        <div>
                            <div class="my-3">
                                <h4>Subject Code</h4>
                                <input name="department" class="form-control form-control-lg my-2 rounded-3" type="text"
                                    placeholder="Enter new Department ID">
                            </div>
                            <div class="my-3">
                                <h4>Pre-requisite</h4>
                                <input name="prerequisite" class="form-control form-control-lg my-2 rounded-3"
                                    type="text" placeholder="Enter new Department ID">

                            </div>
                        </div>
                        <div class="text-center p-1">
                            <button type="submit" class="btn btn-primary p-2 px-5"class="corner-radius:10px">add Subject</button>
                        </div>
                    </form> --}}
                    {!! Form::open(['action' => 'App\Http\Controllers\SubjectsController@store', 'method' => 'post']) !!}
                    {{-- will go the store function to add departments --}}
                    <div class="form-group">
                        {{ Form::label('subject', 'Department Name') }}
                        {{ Form::text('subject', ' ', ['class' => 'form-control my-3']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('subject_code', 'Subject Code') }}
                        {{ Form::text('subject_code', ' ', ['class' => 'form-control my-2']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('department', 'Department Name') }}
                        {{ Form::text('department', ' ', ['class' => 'form-control my-2']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('prerequisite', 'prerequisite') }}
                        {{ Form::text('prerequisite', ' ', ['class' => 'form-control my-2']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Submit', ['class' => 'btn btn-primary my-3']) }}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
            <div class="mb-3 w-100 my-5">
                <br><br>
                <img style="width:500px;border-radius: 50%;" src="images/img2.jpg">
            </div>
        </section>
    </main>
@endsection

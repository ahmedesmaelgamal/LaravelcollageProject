@extends('app')

@section('content')
    <section class="section mb-3  col-md-6 mx-5 w-75" style="display:flex; flex-direction:row;padding:0% 0% 0% 9%"
        id="section1">
        <div class="card-body">
            <h5 class="card-title">Create An Account<h5>
                    <!-- Bordered Tabs Justified -->
                    <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home"
                                aria-selected="true">Doctor</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-profile" type="button" role="tab"
                                aria-controls="profile" aria-selected="false" tabindex="-1">Student</button>
                        </li>
                    </ul>

                    <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                        <div class="tab-pane fade active show" id="bordered-justified-home" role="tabpanel"
                            aria-labelledby="home-tab">
                            {{-- <form action="">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <input type="text" class="form-control">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                                <input type="password" class="form-control">

                                <label for="inputEmail" class="col-sm-5 col-form-label">Subjects that the Doctor
                                    Teaches</label>

                                <select class="form-select" multiple="" aria-label="multiple select example">                                    <option selected="">zero</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <button class="px-4 center-text my-3 btn btn-primary"> Create Account</button>
                            </form> --}}




                            {!! Form::open(['action' => 'App\Http\Controllers\DoctorsController@store', 'method' => 'post']) !!}
                            {{-- will go the store function to add departments --}}
                            <div class="form-group">
                                {{ Form::label('username', 'User Name') }}
                                {{ Form::text('username','', ['class' => 'form-control my-3']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('email', 'email') }}
                                {{ Form::text('email','', ['class' => 'form-control my-2']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('password', 'password') }}
                                {{ Form::password('password', ['class' => 'form-control my-2']) }}
                            </div>

                            {{-- <div class="form-group">
                                {{ Form::label('subjects', 'Subjects') }}
                                <select name="subjects" class="form-select" multiple=""
                                    aria-label="multiple select example">
                                    <option selected="">zero</option>
                                    <option value="1">one</option>
                                    <option value="2">two</option>
                                    <option value="3">three</option>

                                    error
                                    @if (!is_null($subjects_1) && (is_array($subjects_2) || $subjects_1 instanceof Countable) && count($subjects_2) > 0)
                                        @foreach ($subjects_1 as $subject)
                                            <option value="">{{ $subject->subject }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div> --}}
                            <div class="form-group">
                                {{ Form::submit('Submit', ['class' => 'btn btn-primary my-3']) }}
                            </div>
                            {!! Form::close() !!}

                        </div>
                        <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            {{-- <form action="">
                                <label for="inputEmail" class="col-sm-2 col-form-label">username</label>
                                <input type="email" class="form-control">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                                <input type="password" class="form-control">
                                <label for="inputEmail" class="col-sm-5 col-form-label">Academic Number</label>
                                <input type="number" class="form-control">
                                <button class="px-4 center-text my-3 btn btn-primary"> Create Account</button>
                            </form> --}}

                            {!! Form::open(['action' => 'App\Http\Controllers\StudentsController@store', 'method' => 'post']) !!}
                            {{-- will go the store function to add departments --}}
                            <div class="form-group">
                                {{ Form::label('username', 'User Name') }}
                                {{ Form::text('username','', ['class' => 'form-control my-3']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('email', 'email') }}
                                {{ Form::text('email','', ['class' => 'form-control my-2']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('password', 'password') }}
                                {{ Form::password('password', ['class' => 'form-control my-2']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('academic_number', 'Academic Number') }}
                                {{ Form::text('academic_number','', ['class' => 'form-control my-2']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::submit('Submit', ['class' => 'btn btn-primary my-3']) }}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div><!-- End Bordered Tabs Justified -->
        </div>
    </section>
@endsection

@extends('app')

@section('content')
    <section class="section mb-3  col-md-6 mx-5 w-75" style="display:flex; flex-direction:row;padding:0% 0% 0% 6%"
        id="section1">
        <div class="mb-3  col-md-6 mx-5 w-75">
            <h1>Currnt Departments</h1>
            <div class="ml-5 my-3 w-100" style="display:flex; flex-direction:row;">
                <div class="w-75">
                    <h3 class="bg-secondary text-light rounded-3 text-light text-center">Section</h3>
                    @foreach ($departments as $department)
                        <h4 class="bg-primary rounded-3 text-light text-center">{{ $department->department }}</h4>
                    @endforeach

                </div>
                <div class="mb-3 mx-5 w-50">
                    <h4 class="bg-secondary text-light rounded-3 text-light text-center">Section Code</h4>
                    @foreach ($departments as $department)
                    <h4 class="bg-danger rounded-3 text-light text-center">{{ $department->department_code }}</h4>
                @endforeach
                </div>
            </div>

            <h3 class="no-sections " style="visibility: hidden;">there is no Departments</h3>
            <!-- when there are no sections set visibility of the h3 with the no-sections to visible , when there are sections set the visibility to hidden-->
            <hr>

            {{-- <h1>Add Department</h1>
      <form method="POST" action="{{ action('App\Http\Controllers\DepartmentsController@store') }}">
        <input name="name" class="form-control form-control-lg my-2 rounded-3" type="text"
          placeholder="Enter new Department Name">
        <input name="code" class="form-control form-control-lg my-2 rounded-3" type="text" placeholder="Enter new Department ID">
        <input class="btn btn-primary my-4 form-control-lg rounded-3 text-size-lg w-100" type="submin" style="font-weight: 800;"
          value="Add Department">
      </form> --}}



            {!! Form::open(['action' => 'App\Http\Controllers\DepartmentsController@store', 'method' => 'post']) !!}
            {{-- will go the store function to add departments --}}
            <div class="form-group">
                {{ Form::label('name', 'Department Name') }}
                {{ Form::text('name', ' ', ['class' => 'form-control my-3']) }}
            </div>
            <div class="form-group">
                {{ Form::label('code', 'Department Code') }}
                {{ Form::text('code', ' ', ['class' => 'form-control my-2']) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Submit', ['class' => 'btn btn-primary my-3']) }}
            </div>
            {!! Form::close() !!}
        </div>
        <div class=" mx-4 mb-3 w-50">
            <img style="width:400px;border-radius: 70%;" src="images/594.jpg">
            <img style="width:220px;border-radius: 60%;" src="images/back_to_school.jpg">
        </div>
    </section>
@endsection

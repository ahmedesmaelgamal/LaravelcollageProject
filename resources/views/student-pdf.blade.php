@extends('app')

@section('content')
    <section class="section mb-3 col-md-6 mx-5 w-75 " style="display:flex; flex-direction:column;padding:0% 0% 0% 9%"
        id="section1">
        <ul class="list-unstyled">
            {{-- @foreach ($subjects as $subject)
                <button type="button" class="btn btn-outline-dark">
                    <li>{{ $subject->subject }}</li>
                </button>
            @endforeach --}}
        </ul>
    </section>
@endsection

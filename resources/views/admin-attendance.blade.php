@extends('app')

@section('content')
    <section class="section mb-3  col-md-6 mx-5 w-75" style="display:flex; flex-direction:column;padding:0% 0% 0% 9%"
        id="section1">

        <div class="py-2 px-3 card-body">
            <h2>Subjects</h2>
            <div style="display:flex;flex-direction: row;gap: 20px;">
                <div style="display:flex;flex-direction: column;gap: 10px;">
                    {{-- @if (!is_null($subjects) && (is_array($subjects) || $subjects instanceof Countable) && count($subjects) > 0)
                        @foreach ($subjects as $subject)
                            <button type="button" class="btn btn-outline-dark">Dark</button>
                        @endforeach
                    @endif --}}


                    {{-- important --}}
                    <ul class="list-unstyled">
                        @foreach ($subjects as $subject)
                            <button type="button" onclick="showTable()" class="btn btn-outline-dark">
                                <li>{{ $subject->subject }}</li>
                            </button>
                        @endforeach
                    </ul>



                    {{-- <p>Column Data:</p>
                    <ul>
                        @foreach ($columnData as $data)
                            <li>{{ $data }}</li>
                        @endforeach
                    </ul> --}}

                </div>
            </div>
            <hr>


            {{-- <script>
                let isClicked = false;

                function showTable() {
                    isClicked = true;
                    document.getElementById('codeBlock').style.display = 'block';
                }
            </script> --}}

            {{-- @if ($isClicked)
                <button onclick="showTable()">Show Table</button>
                <div id="codeBlock" style="display:none;"> --}}
                    <div class="py-2 px-3 card-body">
                        <h2>attendance of subject</h2>
                        {{-- here we define the name of the subject --}}


                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Start Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                    <td>28</td>
                                    <td>2016-05-25</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                    <td>35</td>
                                    <td>2014-12-05</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                    <td>45</td>
                                    <td>2011-08-12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                    <td>34</td>
                                    <td>2012-06-11</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                    <td>47</td>
                                    <td>2011-04-19</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    {{-- </div>
                </div>
            @endif --}}








            {{-- the table will be at first empty then will be filled if there are students regestring this subject --}}

    </section>
@endsection

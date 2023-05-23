@extends('app')

@section('content')
    <section class="section mb-3  col-md-6 mx-5 w-75" style="padding:0% 0% 0% 9%" id="section1">
        <div style="display: flex;flex-direction: row">




            <div class="col-xxl-10 col-md-10">
                <h1>Dashboard</h1>

                <div class="card info-card sales-card">
                    <h5 class="card-title p-3"> what are the Features of the Doctors Section


                        <br><br>
                        <ul class="list-unstyled">

                            <li type="empty" class="bi-caret-right-fill"> Add Departments</li>
                            <br>
                            <li class="bi-caret-right-fill"> Add Subjects and define its prerequisite</li>
                            <br>

                            <li class="bi-caret-right-fill"> Generate attendance files for all subjects</li>
                            <br>

                            <li class="bi-caret-right-fill"> Create doctos accounts and provide the doctor with the
                                privilege
                                over the subject that he teaches</li>
                            <br>
                            <li class="bi-caret-right-fill"> Create Student accounts</li>
                        </ul>
                    </h5>
                </div>
            </div>
            <div class=" mx-4 mb-3 w-50">
                <img style="width:400px;border-radius: 70%;" src="images/vecteezy_male-teacher-teaching-on-the-blackboard_8258382.jpg">
                <img style="width:220px;border-radius: 60%;" src="images/vecteezy_illustration-of-professor-or-scientist-kawaii-chibi-cartoon_7802931.jpg">
            </div>
        </div>
    </section>
@endsection

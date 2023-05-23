<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    {{-- for bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/public/build/assets/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    @auth

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <i class="bi bi-list toggle-sidebar-btn"></i>

            <div class="px-3 d-flex w-100 align-items-center justify-content-between">
                @if (Auth::user()->privilege == 'admin')
                    <a href="/admin-home" class="logo d-flex align-items-center">
                    @elseif (Auth::user()->privilege == 'doctor')
                        <a href="/doctor-home" class="logo d-flex align-items-center">
                        @else
                            <a href="/student-home" class="logo d-flex align-items-center">
                @endif
                {{-- <img src="assets/img/logo.png" alt=""> --}}
                <span class="d-none d-lg-block">CMS</span>
                </a>
            </div><!-- End Logo -->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">



                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">


                            <li class="nav-item dropdown">

                            </li>
                            <li class="dropdown-header">
                                <h6>{{ Auth::user()->email }}</h6>
                                <span style="text-transform: capitalize;">{{ Auth::user()->privilege }}</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                @if (Auth::user()->privilege == 'admin')
                                    <a class="dropdown-item" href="/admin-home">
                                    @elseif (Auth::user()->privilege == 'doctor')
                                        <a class="dropdown-item" href="/doctor-home">
                                        @else
                                            <a class="dropdown-item" href="/student-home">
                                @endif
                                <i class="bi bi-grid"></i>

                                <span>Dashboard</span>
                                </a>
                            </li>


                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->
        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    @if (Auth::user()->privilege == 'admin')
                        <a class="nav-link " href="/admin-home">
                        @elseif (Auth::user()->privilege == 'doctor')
                            <a class="nav-link " href="/doctor-home">
                            @else
                                <a class="nav-link " href="/student-home">
                    @endif
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    @if (Auth::user()->privilege == 'admin')
                        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                            href="#">
                            <i class="bi bi-menu-button-wide"></i><span>Admin</span><i
                                class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                            <li>
                                <a href="/admin-department">
                                    <i class="bi bi-circle"></i><span>Create Department</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin-subjects">
                                    <i class="bi bi-circle"></i><span>Add Subjects</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin-attendance">
                                    <i class="bi bi-circle"></i><span>Attendance</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin-create-accounts">
                                    <i class="bi bi-circle"></i><span>Create Accounts</span>
                                </a>
                            </li>
                        </ul>
                    @elseif (Auth::user()->privilege == 'doctor')
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-menu-button-wide"></i><span>Doctor</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="/doctor-home">
                                            <i class="bi bi-circle"></i><span>Doctor Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/doctor-attendance">
                                            <i class="bi bi-circle"></i><span>Attendance</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/doctor-attach-pdf">
                                            <i class="bi bi-circle"></i><span>Attach A PDF</span>
                                        </a>
                                    </li>
                                </ul>

                            </li><!-- End Components Nav -->
                        </ul>
                    @elseif (Auth::user()->privilege == 'student')
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-menu-button-wide"></i><span>Student</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="/student-subject-register">
                                            <i class="bi bi-circle"></i><span>Subject Register</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/student-home">
                                            <i class="bi bi-circle"></i><span>Student Home</span>
                                        </a>
                                    </li>
                                </ul>

                            </li><!-- End Components Nav -->
                        </ul>
                    @endif
                </li>
            </ul>
        </aside><!-- End Sidebar-->


        <div class="container">
            <section class="section mb-3  col-md-6 mx-5 w-75 "
                style="display:flex; flex-direction:column;padding:0% 0% 0% 9%" id="section1">
                @include('include.messages')
            </section>




            @yield('content')
        </div>
    @else
        {{-- redirect to login page --}}
        <script>
            window.location = "/login";
        </script>
    @endauth

</body>


</html>

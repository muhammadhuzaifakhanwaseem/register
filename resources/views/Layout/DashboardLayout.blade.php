<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="icon" href="https://theproviderssolutions.com/public/assets/icons/Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .dashside {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 20%;
        }

        .dashside li {
            list-style: none;
            margin: 8px 0px
        }

        .dashside a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            margin-left: 10px;
        }

        .dashmain {
            margin-left: 300px;
            width: 80%;
        }

        .dashitem {
            border: 1px solid #ffffff54;
            border-radius: 10px;
            padding: 10px;
        }

        .dashitem:hover {
            background: #ffffff17
        }
    </style>
</head>

<body>
    <div class="container-fluid" >
        <div class="d-flex">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white dashside bg-dark" style="overflow: auto;">
                <a href="{{ url('/') }}"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="">TPS Course Dashboard</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link d-flex align-items-center active"
                            aria-current="page">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="white"
                                class="me-3 bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Course List
                        </a>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Course Add 
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Student List
                        </a>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Student Add 
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Qualification List
                        </a>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Qualification Add 
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Enrollment List
                        </a>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Enrollment Add 
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Announcment List
                        </a>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Announcment Add 
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/composeemail') }}" class="nav-link d-flex align-items-center text-white">  
                            Compose Email
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Youtube Course List
                        </a>
                        <a href="{{ url('/userslist') }}" class="nav-link d-flex align-items-center text-white">
                            
                            Youtube Course Add 
                        </a>
                    </li>
                </ul>
                
                <br><br>
                <hr>
                <div class="dropdown fixed-bottom py-3 bg-primary " style="width: 285px;">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://avatars.githubusercontent.com/u/107119176?v=4" alt="" width="32"
                            height="32" class="rounded-circle me-2">
                        <strong> {{ session()->get('name') }} </strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/admin/logout') }}">Sign out</a></li>
                    </ul>
                </div>
            </div>
            <div class="dashmain">
                @yield('dashboardContent')
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script>
      const easyMDE = new EasyMDE();
      </script>
</body>

</html>

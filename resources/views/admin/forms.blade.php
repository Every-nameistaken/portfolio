<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>


    @vite(['resources/css/adminCss.css','resources/js/adminMain.js','resources/sass/app.scss', 'resources/js/app.js','/resources/css/style.css',"/resources/css/bootstrap.min.css","/resources/css/font-awesome.min.css","/resources/css/nice-select.css","/resources/css/owl.carousel.min.css","/resources/css/magnific-popup.css","/resources/css/slicknav.min.css","/resources/js/jquery-3.3.1.min.js","/resources/js/bootstrap.min.js","/resources/js/jquery.magnific-popup.min.js","/resources/js/jquery.slicknav.js","/resources/js/owl.carousel.min.js","/resources/js/jquery.nice-select.min.js","/resources/js/mixitup.min.js","/resources/js/main.js" ])
</head>
<body>
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0 d-flex">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><a href="{{route('index')}}">&larr; Go home</a></h3>
                </a>

                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item dropdown py-3">
                            <span class=" my-3"><a href="{{route('logout')}}"><button class="btn btn-danger">Logout</button></a></span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            @session('success')
            @if (session('success'))
                <x-flashMsg msg="{{session('success')}}" bg='bg-success'/>
            @endif
            @endsession
            @session('update_success')
            @if (session('update_success'))
                <x-flashMsg msg="{{session('update_success')}}" bg='bg-success'/>
            @endif
            @endsession
            @session('edu_success')
            @if (session('edu_success'))
                <x-flashMsg msg="{{session('edu_success')}}" bg='bg-success'/>
            @endif
            @endsession

            @session('exp_success')
            @if (session('exp_success'))
                <x-flashMsg msg="{{session('exp_success')}}" bg='bg-success'/>
            @endif
            @endsession
            @session('login-success')
            @if (session('login-success'))
                <x-flashMsg msg="{{session('login-success')}}" bg='bg-success'/>
            @endif
            @endsession
            @session('index_img_success')
            @if (session('index_img_success'))
                <x-flashMsg msg="{{session('index_img_success')}}" bg='bg-success'/>
            @endif
            @endsession
            @error('err')
            <x-flashMsg msg="{{$message}}" bg='bg-success'/>
            @enderror
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">{{__('Education form')}}</h6>
                            <form action="{{route('education.store')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="course" class="form-label">{{__('Course')}}</label>
                                    <input type="text" name="course" class="form-control @error('course') border border-danger @enderror" id="course">
                                </div>
                                @error('course')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="years" class="form-label">{{__('Years')}}</label>
                                    <input type="text" name="years" class="form-control @error('years') border border-danger @enderror" id="years">
                                </div>
                                @error('years')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="institution" class="form-label">{{__('Institution')}}</label>
                                    <input type="text" name="institution" class="form-control @error('institution') border border-danger @enderror" id="institution">
                                </div>
                                @error('institution')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <button type="submit" class="btn btn-secondary">Create</button>
                            </form>
                        </div>
                    </div>


                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">{{__('Experience form')}}</h6>
                            <form action="{{route('experience.store')}}" method="post" >
                                @csrf
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <input type="text" name="rolee" class="form-control @error('rolee') border border-danger @enderror" id="role">
                                </div>
                                @error('rolee')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="years" class="form-label">Years</label>
                                    <input type="text" name="year" class="form-control @error('years') border border-danger @enderror" id="years">
                                </div>
                                @error('years')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control @error('address') border border-danger @enderror" id="address">
                                </div>
                                @error('address')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="ref_website" class="form-label">{{__('Ref_website')}}</label>
                                    <input type="text" name="ref_website" class="form-control @error('ref_website') border border-danger @enderror" id="ref_website">
                                </div>
                                @error('ref_website')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3" id="job_cont">
                                    <label for="job_description" class="form-label">{{__('Job description')}}</label>
                                    <input type="text" name="job_description[]" class="form-control @error('job_description') border border-danger @enderror" id="job_description">
                                    <p><i id="plus_icon" class="fa-solid fa-plus"></i></p>
                                </div>
                                @error('job_description')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror

                                <button type="submit" class="btn btn-secondary">Create</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">{{__('Services creation form')}}</h6>
                            <form action="{{route('service.store')}}" method="post" >
                                @csrf
                                <div class="mb-3">
                                    <label for="service" class="form-label">Service</label>
                                    <input type="text" name="service" class="form-control @error('service') border border-danger @enderror" id="service">
                                </div>
                                @error('service')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="intro" class="form-label">Intro</label>
                                    <input type="text" name="introduction" class="form-control @error('introduction') border border-danger @enderror" id="intro">
                                </div>
                                @error('introduction')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <button type="submit" class="btn btn-secondary">Create</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">{{__('Index image uploading form')}}</h6>
                            <form action="{{route('index.img')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="index_img" class="form-label"></label>
                                    <input type="file" name="index_img"  class="form-control @error('index_img') border border-danger @enderror">
                                </div>
                                @error('index_img')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <button type="submit" class="btn btn-secondary btn-sm">Upload</button>
                            </form>
                        </div>
                    </div>
                    @forelse ($profiles as $profile)
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Our Info Form</h6>
                            <form action="{{route('profile')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">{{__('First name')}}</label>
                                    <input type="text" value="{{$profile->first_name}}" name="first_name" class="form-control
                                    @error('first_name') border border-danger @enderror">
                                </div>
                                @error('first_name')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">{{__('Last name')}}</label>
                                    <input type="text" value="{{$profile->last_name}}" name="last_name" class="form-control
                                    @error('last_name') border border-danger @enderror">
                                </div>
                                @error('last_name')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="dob" class="form-label">{{__('Date Of Birth')}}</label>
                                    <input type="text" value="{{$profile->dob}}" name="dob" class="form-control @error('dob') border border-danger @enderror">
                                </div>
                                @error('dob')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="website" class="form-label">{{__('Website')}}</label>
                                    <input type="text" value="{{$profile->website}}" name="website" class="form-control @error('website') border border-danger @enderror">
                                </div>
                                @error('website')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="phone" class="form-label">{{__('Phone No.')}}</label>
                                    <input type="text" value="{{$profile->phone}}" name="phone" class="form-control @error('phone') border border-danger @enderror">
                                </div>
                                @error('phone')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="city" class="form-label">{{__('City')}}</label>
                                    <input type="text" value="{{$profile->city}}" name="city" class="form-control @error('city') border border-danger @enderror">
                                </div>
                                @error('city')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="age" class="form-label">{{__('Age')}}</label>
                                    <input type="text" value="{{$profile->age}}" name="age" class="form-control @error('age') border border-danger @enderror">
                                </div>
                                @error('age')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="degree" class="form-label">{{__('Degree')}}</label>
                                    <input type="text" name="degree" value="{{$profile->degree}}" class="form-control @error('degree') border border-danger @enderror">
                                </div>
                                @error('degree')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{__('Email')}}</label>
                                    <input type="email" name="email" value="{{$profile->email}}" class="form-control @error('email') border border-danger @enderror">
                                </div>
                                @error('email')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="freelance" class="form-label">{{__('Freelance')}}</label>
                                    <input type="text" value="{{$profile->freelance}}" name="freelance" class="form-control @error('freelance') border border-danger @enderror">
                                </div>
                                @error('freelance')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="intro" class="form-label">{{__('Intro')}}</label>
                                    <input type="text" name="intro" value="{{$profile->intro}}" class="form-control @error('intro') border border-danger @enderror">
                                </div>
                                @error('intro')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror

                                <div class="mb-3">
                                    <label for="role" class="form-label">{{__('Role')}}</label>
                                    <input type="text" name="role" value="{{$profile->role}}" class="form-control @error('role') border border-danger @enderror">
                                </div>
                                @error('role')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror



                                <div class="my-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-secondary col-6">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @empty
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Our Info Form</h6>
                            <form action="{{route('profile')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">{{__('First name')}}</label>
                                    <input type="text" name="first_name" class="form-control
                                    @error('first_name') border border-danger @enderror">
                                </div>
                                @error('first_name')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">{{__('Last name')}}</label>
                                    <input type="text" name="last_name" class="form-control
                                    @error('last_name') border border-danger @enderror">
                                </div>
                                @error('last_name')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="dob" class="form-label">{{__('Date Of Birth')}}</label>
                                    <input type="text"  name="dob" class="form-control @error('dob') border border-danger @enderror">
                                </div>
                                @error('dob')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="website" class="form-label">{{__('Website')}}</label>
                                    <input type="text"  name="website" class="form-control @error('website') border border-danger @enderror">
                                </div>
                                @error('website')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="phone" class="form-label">{{__('Phone No.')}}</label>
                                    <input type="text" name="phone" class="form-control @error('phone') border border-danger @enderror">
                                </div>
                                @error('phone')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="city" class="form-label">{{__('City')}}</label>
                                    <input type="text"  name="city" class="form-control @error('city') border border-danger @enderror">
                                </div>
                                @error('city')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="age" class="form-label">{{__('Age')}}</label>
                                    <input type="text"  name="age" class="form-control @error('age') border border-danger @enderror">
                                </div>
                                @error('age')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="degree" class="form-label">{{__('Degree')}}</label>
                                    <input type="text" name="degree" class="form-control @error('degree') border border-danger @enderror">
                                </div>
                                @error('degree')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{__('Email')}}</label>
                                    <input type="email" name="email" class="form-control @error('email') border border-danger @enderror">
                                </div>
                                @error('email')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="freelance" class="form-label">{{__('Freelance')}}</label>
                                    <input type="text"  name="freelance" class="form-control @error('freelance') border border-danger @enderror">
                                </div>
                                @error('freelance')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="intro" class="form-label">{{__('Intro')}}</label>
                                    <input type="text" name="intro"  class="form-control @error('intro') border border-danger @enderror">
                                </div>
                                @error('intro')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror

                                <div class="mb-3">
                                    <label for="role" class="form-label">{{__('Role')}}</label>
                                    <input type="text" name="role"  class="form-control @error('role') border border-danger @enderror">
                                </div>
                                @error('role')
                                    <p class="text-danger text-sm">{{$message}}</p>
                                @enderror

                                <div class="my-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-secondary col-6">Create</button>
                                </div>
                            </form>

                        </div>


                    </div>
                    @endforelse


            </div>
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">

                            &copy; <a href="#">{{env('APP_NAME')}}</a>, All Right Reserved.

                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script>

        </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>

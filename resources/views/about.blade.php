@extends('layouts.app')
@section('main')
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        @session('img_success')
            @if (session('img_success'))
                <x-flashMsg msg="{{session('img_success')}}" bg='bg-success'/>
            @endif
            @endsession
        @session('success')
            @if (session('success'))
                <x-flashMsg msg="{{session('success')}}" bg='bg-success'/>
            @endif
            @endsession
      <div class="container" data-aos="fade-up">
        @forelse ($profiles as $profile)
        <div class="section-title">
          <h2>About</h2>
          <p> {{$profile->intro}}</p>
        </div>

        <div class="row">
          <div style="height: 400px" class="col-lg-4">
            <img style="width: 100%; height:100%;border-radius:10px;"   src="{{asset('Storage/'. $profile->img)}}" class="img-fluid rounded-3" alt="">
            @auth
            <form style="position: relative;" action="{{route('about.img')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label id="img-upload"   for="img"><i class="fa-solid fa-camera"></i></label>
                <input type="file" name="img" id="img" hidden>
                <button id="img-upload-btn" type="submit" class="btn btn-sm btn-secondary">Upload</button>
            </form>
            @endauth
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">

            <h3> {{$profile->role}}</h3>
            <p class="fst-italic">

            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> {{$profile->dob}}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Website:</strong> {{$profile->website}}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> {{$profile->phone}}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> {{$profile->city}}</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> {{$profile->age}}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong> {{$profile->degree}}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>PhEmailone:</strong> {{$profile->email}}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong>{{$profile->freelance}}</li>
                </ul>
              </div>
            </div>


          </div>
        </div>
        @empty
            <p>No data entry</p>
        @endforelse
      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p></p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">React <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Lavavel <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
            <p>Jobs</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->
    <div><button class="btn btn-secondary text-white text-center border " id="leaveReview">Click to leave a review <i id="caret" class="fa-solid fa-caret-down"></i></button></div>

    <section id="review" style="display: none;">
      <div class="container h-44">
        <div class="row d-flex justify-content-center align-items-center h-44">
          <div class="col-xl-9">

            <h1 class=" mb-4 text-center">Leave a review</h1>
    <form action="{{route('testimony')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="card" style="border-radius: 15px;">
              <div class="card-body">

                <div class="row align-items-center">
                  <div class=" ">

                    <input name="fullname" value="{{old('fullname')}}" type="text" class="form-control form-control-sm @error('fullname') text-danger @enderror" placeholder="Fullname"/>
                    @error('fullname')
                    <small class="text-danger">{{$message}}</small>
                    @enderror

                  </div>
                </div>
                <div class="row align-items-center py-1">

                  <div class="">

                    <input name="role" type="text" value="{{old('role')}}" class="form-control form-control-sm @error('role') text-danger @enderror" placeholder="Role e.g CEO of Starlink" />
                    @error('role')
                    <small class="text-danger">{{$message}}</small>
                    @enderror

                  </div>
                </div>
                <div class="row align-items-center py-1">
                  <div class="">
                    <textarea name="comment" value="{{old('comment')}}" class="form-control  @error('comment') text-danger @enderror" class="resize-none" rows="3" cols="50" placeholder="Your review on our service"></textarea>
                    @error('comment')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <div class="row align-items-center py-1">
                  <div class="">
                    <input class="form-control form-control-sm value="{{old('img')}}" @error('img') text-danger @enderror" id="formFileLg" type="file" name="img"/>
                    <div class="small text-muted mt-2"></div>
                     @error('img')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                  </div>
                </div>


                <div class="px-5 py-4 text-center">
                  <button name="submit" type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-secondary btn-sm">Send review</button>
                </div>

              </div>
            </div>

          </div>
    </form>
        </div>
      </div>
    </section>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reviews</h2>
          <p>Here is what our customers have to say....</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @forelse ($testimonies as $testimony)
            <div class="swiper-slide">
                <div class="testimonial-item">
                  <img height="150px" src="{{asset('storage/'. $testimony->img)}}" class="testimonial-img" alt="">
                  <h3>{{$testimony->fullname}}</h3>
                  <h4>{{$testimony->role}}</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{$testimony->comment}}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
            @empty
              <p>No testimony yet</p>
            @endforelse





          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    <script>
        let showReview = document.getElementById("leaveReview");
        showReview.addEventListener("click",()=>{
          let review = document.getElementById("review");
          review.setAttribute("style" , review.style.display == "block" ?
            "display:none" : "display:block"
          );
          let caret = document.getElementById("caret");
        caret.setAttribute('class',
                caret.className == 'fa-solid fa-caret-up' ? 'fa-solid fa-caret-down':
                'fa-solid fa-caret-up'
            );

        })
       </script>
</main>
@endsection

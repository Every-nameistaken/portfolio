@extends('layouts.app')
@section('main')
<main id="main">

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row">
          <div class="col-lg-6">
            @forelse ($profiles as $profile)
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>{{$profile->last_name}} {{$profile->first_name}}</h4>
              <p><em>Innovative and deadline-driven fullstack web developer with 3+ years of experience in designing and developing websites.</em></p>
              <p>
              <ul>

                <li>{{$profile->city}}</li>
                <li>{{$profile->phone}}</li>
                <li>{{$profile->email}}</li>
                @empty
                    <p>Not found</p>
                @endforelse

              </ul>
              </p>
            </div>

            <h3 class="resume-title">Education</h3>
            @forelse ($edus as $education)
            <div class="resume-item">
                <h4>{{$education->course}}</h4>
                <h5>{{$education->years}}</h5>
                <p><em>{{$education->institution}}</em></p>
              </div>
            @empty
              <p>No education background</p>
            @endforelse

          </div>

          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            @forelse ($experiences as $experience)
            <div class="resume-item">
                <h4>{{$experience->role}}</h4>
                <h5>{{$experience->years}}</h5>
                <p><em>{{$experience->address}}</em></p>
                <p>
                <ul>
                    @php
                      $jobs =  json_decode($experience->job_description);
                    @endphp
              @forelse ($jobs as $job)
                    <li>{{$job}}</li>
              @empty
                    <p>No job descriptions</p>
              @endforelse
                </ul>
                </p>
              </div>
            @empty
              <p>No experience</p>
            @endforelse
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

  </main><!-- End #main -->

@endsection

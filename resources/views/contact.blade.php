@extends('layouts.app')
@section('main')
<main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        @session('success')
        @if (session('success'))
            <x-flashMsg msg="{{session('success')}}" bg='bg-success'/>
        @endif
        @endsession
        <div class="section-title">
          <h2>Contact</h2>
          <p>Got a question, proposal or just want to say hello? Leave a message</p>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.816792137604!2d4.935761096789551!3d8.017819900000019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1037e708108e8abf%3A0x378fbfcb90845763!2sFederal%20University%20of%20Health%20Sciences%20Ila-Orangun!5e0!3m2!1sen!2sng!4v1737478704400!5m2!1sen!2sng" width="100%" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
                @forelse ($profiles as $profile)
                <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>{{$profile->city}}</p>
                  </div>

                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>{{$profile->email}}</p>
                  </div>

                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>{{$profile->phone}}</p>
                  </div>
                @empty
                  <p>No info provided yet</p>
                @endforelse


            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route('feedback')}}" method="post">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" placeholder="Your Name">
                  @error('name')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Your Email">
                  @error('email')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" value="{{old('subject')}}" placeholder="Subject">
                @error('subject')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" value="{{old('message')}}"></textarea>
                @error('message')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
              </div>
              <div class="text-center my-3"><button type="submit" class="btn btn-secondary">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
</main>
@endsection

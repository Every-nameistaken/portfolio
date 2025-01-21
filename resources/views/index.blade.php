@extends('layouts.app')
@section('main')
 <!-- ======= Hero Section ======= -->
 @forelse ($profiles as $profile)
 <section id="hero" class="d-flex align-items-center" style="background-image:url( {{asset('storage/'.$profile->index_img) }})">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">

        <h1>{{$profile->last_name}} {{$profile->first_name}}</h1>
        <h2>{{$profile->role}} from {{$profile->city}}</h2>
      <a href="{{route('about')}}" class="btn-about">About Me</a>
    </div>
  </section>
@empty
        <p>No info to dispaly</p>
@endforelse
  <!-- End Hero -->
@endsection

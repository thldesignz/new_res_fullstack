@extends('layouts.landing')

@section('title')

{{$settings["general"]->site_title}} Americas number one soul food spot

@endsection



@section('content')

<section id="information">
  <div class="restauraunt-img">
    <img src="https://i.ibb.co/dfGyvYz/rest.png" alt="">
  </div>
  <div class="info">
    <h2>We started from the bottom in 1988</h2>
    <div class="para">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sint eum, excepturi qui doloribus quaerat quidem exercitationem vero voluptates esse pariatur placeat nihil quia ut. Autem nihil, praesentium itaque nostrum quasi cupiditate dolores! Unde et distinctio porro deserunt officia vero.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sint eum, excepturi qui doloribus quaerat quidem exercitationem vero voluptates esse pariatur placeat nihil quia ut. Autem nihil, praesentium itaque nostrum quasi cupiditate dolores! Unde et distinctio porro deserunt officia vero.</p>
  </div>
    <a href="#" class="about">
      <span>learn more about our restaurants </span>
      <div class="circle-button"><i class="fas fa-chevron-right"></i></div>
    </a>
  </div>

</section>

@include('include.food-categories-slider')

@endsection

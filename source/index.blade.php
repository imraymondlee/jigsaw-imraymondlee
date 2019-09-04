@extends('_layouts.master')

@section('content')
  <section class="landing">
    <div>
      <h1 class="landing__title">Hi, I'm Raymond Lee.</h1>
      <p class="landing__subtitle">A web developer based in Vancouver, Canada.</p>
    </div>
    <img src="/assets/images/landing-img.svg" alt="" class="landing__img">
  </section>
  <section id="projects">
    <h1 class="show-for-sr">Projects</h1>
    <div class="card-row">
      <div class="card-row__column">
        @include('_components.project-card', [
          'url'=>'/safe-software/',
          'category'=>'Web Accessibility',
          'title'=>'Safe Software Web Accessibility',
          'description'=>'Accessibility improvements for Safe Software\'s website',
          'image'=>'/assets/images/safe-software/thumbnail.png',
          'fillColor'=>'#f3d5b0'
        ])
      </div>
      <div class="card-row__column">
        @include('_components.project-card', [
          'url'=>'/kasa-alarm/',
          'category'=>'React App',
          'title'=>'Kasa Alarm',
          'description'=>'Wakeup light web app for Kasa Smart light bulbs',
          'image'=>'/assets/images/kasa-alarm/thumbnail.png',
          'fillColor'=>'#c3ebf1'
        ])
      </div>
    </div>
    <div class="card-row">
      <div class="card-row__column">
        @include('_components.project-card', [
          'url'=>'/next-task/',
          'category'=>'Web App',
          'title'=>'Next Task',
          'description'=>'Customer task scheduling system',
          'image'=>'/assets/images/next-task/thumbnail.png',
          'fillColor'=>'#f7e8c9'
        ])
      </div>
      <div class="card-row__column">
        @include('_components.project-card', [
          'url'=>'/beedie-engaged/',
          'category'=>'WordPress',
          'title'=>'Beedie Engaged',
          'description'=>'Media hub for Beedie School of Business',
          'image'=>'/assets/images/beedie-engaged/thumbnail.png',
          'fillColor'=>'#f7d4d8'
        ])
      </div>
    </div>
  </section>
@endsection

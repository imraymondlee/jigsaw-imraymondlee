@extends('_layouts.master', ['title'=>'About | Raymond Lee', 'underlineAbout'=>true])

@section('content')
  <section class="about">
    <img src="/assets/images/profile.jpg" class="about__img" alt="Self-portrait">
    <div class="about__text">
      <h1>Hello 👋</h1>
      <p>I'm a web developer based in Vancouver, Canada. Currently, I am finishing up my Bachelor of Science degree and Business Minor at Simon Fraser University. My experience includes working in <strong>web development</strong>, <strong>design</strong>, <strong>accessibility</strong>, and <strong>marketing</strong>. With my passion for both the web and digital accessibility, my goal is to make the web a more accessible place. In my free time, you can find me learning and playing with new technology.</p>
      <p>Feel free to reach out to me at <a href="mailto:hello@imraymondlee.com">hello@imraymondlee.com</a>.</p>
    </div>
  </section>
@endsection
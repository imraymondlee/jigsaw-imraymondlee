@extends('_layouts.master', ['title'=>'About | Raymond Lee', 'underlineAbout'=>true])

@section('content')
  <section class="about">
    <img src="/assets/images/profile.jpg" class="about__img" alt="Self-portrait">
    <div class="about__text">
      <h1>Hello 👋</h1>
      <p>I’m Raymond Lee, a web developer from Vancouver, Canada. Graduating from Simon Fraser University with my Bachelor of Science and Business Minor, I have a diverse skill set that I hope to use in projects. My experience includes working in <strong>web development</strong>, <strong>design</strong>, <strong>accessibility</strong>, and <strong>marketing</strong>. My goal and passion is to make the web a more accessible place through my work. In my free time, you can find me learning and playing with new technology.</p>
      <p>Feel free to reach out to me at <a href="mailto:hello@imraymondlee.com">hello@imraymondlee.com</a>.</p>
    </div>
  </section>
@endsection
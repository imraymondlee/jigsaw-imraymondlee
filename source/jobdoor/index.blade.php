@extends('_layouts.master', ['title'=>'Our Cookbook | Raymond Lee'])

@section('content')
  @include('_components.project-banner', [
    'title'=>'Jobdoor',
    'subtitle'=>'Intern and new grad job board'
  ])

  @include('_components.project-description', [
    'image'=>[
      'url'=>'/assets/images/jobdoor/homepage.png',
      'alt'=>'Jobdoor homepage'
    ],
    'context'=>'Personal Project',
    'technologies'=>['Angular', 'Node.js', 'MongoDB'],
    'links'=>[
      ['url'=>'https://jobdoor.raymondlee.dev/', 'text'=>'Demo'],
      ['url'=>'https://github.com/imraymondlee/jobdoor', 'text'=>'View Source']
    ]
  ])
  <hr class="divider">
  <section>
    <h2>Overview</h2>
    <p>Jobdoor is a job board website for interns and new grads. The inspiration for this project was from a GitHub repo that contained a list of new grad positions that many people have contributed to. This project was built using Angular, Node.js, and MongoDB.</p>
    <h2>Process</h2>
    <h3 class="u-h4">Back-end</h3>
    <p>The back-end was built with Node.js and data was stored with MongoDB. Endpoints were created to manage the postings and user accounts through different types of HTTP methods. The users are stored in one MongoDB collection and the postings are in another.</p>
    <h3 class="u-h4">Front-end</h3>
    <p>The front-end was built using Angular to provide quick loading between pages as it is a single-page application. Although most of the styles were custom made, I had an issue with creating a dialog, so I ended up using the dialog component from Angular Material UI. For the design, I went with a fun website personality through the use of bright colours, curves, and icons.</p>
    @include('_components.figure-caption', [
      'image'=>['url'=>'/assets/images/our-cookbook/recipe.png', 'alt'=>'Recipe page for Slow Cooker Beef Chili'],
      'caption'=>'The minimal interface of each recipe allows users to see essential information.'
    ])
    @include('_components.figure-caption', [
      'image'=>['url'=>'/assets/images/our-cookbook/new-recipe.png', 'alt'=>'Page to add a new recipe'],
      'caption'=>'New Recipe page.'
    ])
    @include('_components.figure-caption', [
      'image'=>['url'=>'/assets/images/our-cookbook/mobile-homepage.png', 'alt'=>'Homepage in mobile view'],
      'caption'=>'Responsive interface allows the web app to be accessed from different type of devices.',
      'useOriginalImgWidth'=>true
    ])
    <h2>Reflection</h2>
    <p>Creating this website, I succeeded in having a portal where job positions for interns and new grads could be centralized. A major challenge I encountered during the process was the pagination of job postings. I had to decide to perform it either through the client or server side and ultimately oped to go with server-side pagination. This allowed for a faster initial load time for users. A feature I would like to add to the website is to incorporate tags. This would allow users to filter postings and allow for more customized posting results.</p>
  </section>
@endsection
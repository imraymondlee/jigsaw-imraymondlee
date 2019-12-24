@extends('_layouts.master', ['title'=>'Our Cookbook | Raymond Lee'])

@section('content')
  @include('_components.project-banner', [
    'title'=>'Our Cookbook',
    'subtitle'=>'Collaborative cookbook web app'
  ])

  @include('_components.project-description', [
    'image'=>[
      'url'=>'/assets/images/safe-software/homepage.png',
      'alt'=>'Safe Software homepage'
    ],
    'context'=>'Personal Project',
    'technologies'=>['React', 'Node.js', 'MongoDB', 'GraphQL'],
    'links'=>[
      ['url'=>'https://ourcookbook.raymondlee.dev/', 'text'=>'Demo'],
      ['url'=>'https://github.com/imraymondlee/our-cookbook', 'text'=>'View Source']
    ]
  ])
  <hr class="divider">
  <section>
    <h2>Overview</h2>
    <p>Our Cookbook is a web app designed to allow users to contribute and add their favourite recipes to the online community. I created this project as a result of having too many bookmarked recipes that were not organized and in one central hub.  The front-end was built using React, and the back-end was built with Node.js along with MongoDB to store the data and GraphQL for querying data.</p>
    <h2>Process</h2>
    <h3 class="u-h4">Back-end</h3>
    <p>For this project, I wanted to incorporate GraphQL, a new technology I have been wanting to learn. Therefore, I built a GraphQL server with Node.js for the back-end. For the database, MongoDB was used because the recipes did not have many relationships and a simple approach was best. The images are stored on Cloudinary as they have a great API but as it was challenging to incorporate Cloudinary with GraphQL, I had to create a REST endpoint for sending the images to the back-end.</p>
    <h3 class="u-h4">Front-end</h3>
    <p>The front-end was built using React with custom-made styling. My goal for the interface was to be minimal and clutter-free, unlike many recipe websites. This would allow for quick navigation for users. Instead of building a user system to post recipes, I utilized Google Sign-in. This would allow for frustration-free signup, and allow the authentication process to be in the front-end.</p>
    <h2>Reflection</h2>
    <p>During the design process, I had many ideas but my ultimate goal was a hassle-free user experience. This meant keeping everything minimal while incorporating fun ideas such as the “Random Recipe” function that would give users a random recipe. For this project, Google sign-in was used but in the future, I would like to incorporation a user system include those who do not want to sign in through Google. Additionally, a search function will be necessary for the future as the number of recipes grows. Utilizing GraphQL for the first time allowed me to make cleaner API calls, something I would consider for my future projects.</p>
  </section>
@endsection
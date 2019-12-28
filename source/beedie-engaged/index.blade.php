@extends('_layouts.master', ['title'=>'Beedie Engaged | Raymond Lee'])

@section('content')
  @include('_components.project-banner', [
    'title'=>'Beedie Engaged',
    'subtitle'=>'Media hub for Beedie School of Business'
  ])

  @include('_components.project-description', [
    'image'=>[
      'url'=>'/assets/images/beedie-engaged/home.png',
      'alt'=>'Beedie Engaged homepage'
    ],
    'context'=>'Co-op Project',
    'technologies'=>['Wordpress', 'PHP', 'HTML', 'CSS', 'jQuery', 'Illustrator', 'Photoshop'],
    'links'=>[
      ['url'=>'https://beedie.sfu.ca/ideas/', 'text'=>'Demo']
    ]
  ])
  <hr class="divider">
  <div>
    <section class="project-section">
      <h2>Overview</h2>
      <p>The Beedie School of Business wanted a single website as a replacement for multiple websites that people use to get their latest news and other content from the school. By having a single website, articles and other content would not be scattered, and therefore would provide an increase in traffic and engagement. This new website would contain news, videos, and research from the school. I was responsible for the design and development in the creation of this website during my co-op term for the school. The site was named "Beedie Engaged," which was then renamed to "Ideas@Beedie" after I finished my co-op term.</p>
    </section>
    <section class="project-section">
      <h2>Process</h2>
      <h3 class="u-h4">Mockup & Wireframes</h3>
      <p>A mockup of the homepage provided a starting point as a guideline for all of the pages. This layout allows the website to feature different posts on the top of the homepage, provide information and quick links in the sidebar, as well as a list of the latest posts for each of the categories. All this is contained in the general layout of the school's website. Wireframes for the pages of the different types of categories and posts were then created. These layouts were based on the homepage.</p>
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/beedie-engaged/wireframes.png', 'alt'=>'Mockup of the homepage and sketched wireframes of the news category, news posts, speakers category, and speakers video pages.'],
        'caption'=>'Mockup and wireframes of each page template.'
      ])
      <h3 class="u-h4">Final Product</h3>
      <p>In the final website, the layout of the homepage was revised for it to show featured tags of posts along the top of the page. In addition, the featured post was shrunken down to allow space for school ads. We decided that the event category should not be as prominent and should be moved to the sidebar. An additional category for research articles was used to replace it.</p>
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/beedie-engaged/home.png', 'alt'=>'Homepage layout'],
        'caption'=>'Homepage provides quick access to each category, featured and latest posts, and featured tags.'
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/beedie-engaged/news.png', 'alt'=>'News category page layout'],
        'caption'=>'Both the "News" and "Research" category pages share the same layout. Similar to the homepage, there is a featured article displayed for each of the categories.'
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/beedie-engaged/speakers.png', 'alt'=>'Speakers category page layout'],
        'caption'=>'The "Speakers" category page contains all of the video interviews posted. It contains a featured video at the top and a grid layout for each of the videos.'
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/beedie-engaged/news-post.png', 'alt'=>'News post page layout'],
        'caption'=>'Just like the categories, both the "News" and "Research" articles share the same layout.'
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/beedie-engaged/speakers-video.png', 'alt'=>'Speakers video page layout'],
        'caption'=>'Each of the speaker videos posted has the videos hosted from an external source. Underneath that are related interviews that have been pre-selected for each individual video.'
      ])
    </section>
    <section class="project-section">
     <h2>Reflection</h2>
      <p>I created a website that replaced several existing websites that delivered content from the school. Before this, I have never worked with a content management system. Working on this allowed me to work with WordPress and to understand how it makes it easy for content creators to post content on the website. As the website had to follow the school's branding standards, it required creating a custom WordPress theme. I learned how to create themes using PHP, HTML, CSS, and jQuery.</p>
    </section>
  </div>
@endsection
@extends('_layouts.master', ['title'=>'Safe Software | Raymond Lee'])

@section('content')
  @include('_components.project-banner', [
    'title'=>'Safe Software Web Accessibility',
    'subtitle'=>'Accessibility improvements for Safe Software\'s website'
  ])

  @include('_components.project-description', [
    'image'=>[
      'url'=>'/assets/images/safe-software/homepage.png',
      'alt'=>'Safe Software homepage'
    ],
    'context'=>'Co-op Project',
    'technologies'=>['WCAG', 'HTML', 'Sass', 'jQuery', 'Laravel'],
    'links'=>[
      ['url'=>'https://www.safe.com/', 'text'=>'Safe Software Website'],
      ['url'=>'https://www.safe.com/liz/accessibility/', 'text'=>'Accessibility Guidelines']
    ]
  ])
  <hr class="divider">
  <section>
    <h2>Overview</h2>
    <p>As a front-end web developer at Safe Software, I was tasked with improving the website’s accessibility. During this project, I performed an audit of the site using the Web Content Accessibility Guidelines (WCAG) 2.1 level AA to see what changes needed to be made. I then implemented the changes and created documentation for future references.</p>
    <h2>Process</h2>
    <h3 class="u-h4">Audit</h3>
    <p>As the website contained a lot of pages, the audit would be too time consuming. Instead, I focused on the high traffic pages based on Google Analytics results. By focusing on high traffic pages, there will be more opportunities for users to benefit from the improvements. The audit included checking for things such as keyboard navigability, assistive technology compatibility, and visual issues. Findings from the audit included certain components on a page not being able to be accessed through a keyboard, screen readers not properly reading content, and insufficient colour contrast.</p>
    <h3 class="u-h4">Changes</h3>
    <p>The changes that I made to improve keyboard navigability was making sure all content can be accessed logically with the keyboard and adding a "Skip to Content" link to allow users to skip the header and access the main content directly. For assistive technology compatibility, I added Accessible Rich Internet Applications (ARIA) attributes so assistive technology such as screen readers can read things out properly. ARIA provides additional information for assistive technology to interpret. Visual changes, such as increasing colour contrast between the text and background, were also made. It was a challenge to have a compliant colour contrast between the company’s primary orange and white used in text and buttons. As we did not have much control, it was left as is.</p>
    @include('_components.figure-caption', [
      'image'=>['url'=>'/assets/images/safe-software/skip.png', 'alt'=>'Safe Software website with Skip to Content link'],
      'caption'=>'"Skip to Content" link allows keyboard users to skip the navigation menu.'
    ])
    <h3 class="u-h4">Documentation</h3>
    <p>To ensure that any new additions to the website would continue to follow accessibility standards, I created accessibility guidelines documentation for Safe Software to refer to. The accessibility guidelines include a checklist to go over when creating new pages and components. Each of the items in the checklist has examples of best practices and a reference to the WCAG for detailed information.</p>
    @include('_components.figure-caption', [
      'image'=>['url'=>'/assets/images/safe-software/liz.png', 'alt'=>'Accessibility Guidelines for Safe Software\'s design system'],
      'caption'=>'Safe Software\'s Accessibility Guidelines provide a quick reference on accessibility best practices.'
    ])
    <h2>Reflection</h2>
    <p>The result of this project led to an improvement in accessibility for Safe Software’s high traffic webpages as well as documentation consisting of a checklist and best practices for the team to follow for any future changes. Through this project, I have become more familiar with WCAG 2.1 and gained more experience with making websites accessible. One thing that I would have done differently is to spend more time on the documentation. The documentation is important as more web pages are being added and it is important that all team members are familiar with the best practices.</p>
  </section>
@endsection
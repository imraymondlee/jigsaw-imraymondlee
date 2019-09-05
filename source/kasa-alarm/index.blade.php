@extends('_layouts.master', ['title'=>'Kasa Alarm | Raymond Lee'])

@section('content')
  @include('_components.project-banner', [
    'title'=>'Kasa Alarm',
    'subtitle'=>'Wakeup light web app for Kasa Smart light bulbs'
  ])

  @include('_components.project-description', [
    'image'=>[
      'url'=>'/assets/images/kasa-alarm/ui.png',
      'alt'=>'Kasa Alarm user interface'
    ],
    'context'=>'Personal Project',
    'technologies'=>['React', 'Node.js', 'Express', 'Postman', 'Material-UI'],
    'links'=>[
      ['url'=>'https://github.com/imraymondlee/kasa-alarm', 'text'=>'View Source']
    ]
  ])
  <hr class="divider">
  <section>
    <h2>Overview</h2>
    <p>Kasa Alarm is a wakeup light web app designed for Kasa Smart's line of smart light bulbs. This personal project started when I wanted the ability for my smart light bulbs to gradually increase the brightness to wake me up for my alarm time, which Kasa Smart's mobile app did not offer. I built this with a React and Node.js so it can be accessed with just a web browser.</p>
    <h2>Process</h2>
    <h3 class="u-h4">Backend</h3>
    <p>A backend was needed to control the lights and keep track of the alarms. I used Node.js with Express on the backend. Since Kasa Smart did not have an available API to control the lights, I was able to find a third-party library for the connection. I created API endpoints for setting an alarm, deleting an alarm, getting current alarms, and controlling the lights. Postman was used during this process to ensure everything was working correctly.</p>
    @include('_components.figure-caption', [
      'image'=>['url'=>'/assets/images/kasa-alarm/postman.png', 'alt'=>'POST request on Postman to set alarm with JSON data'],
      'caption'=>'Postman was used before having the frontend set up.'
    ])
    <h3 class="u-h4">Frontend</h3>
    <p>After creating the backend, I created the frontend with React. I also used the Material-UI React UI framework for styling. Each of the requests is connected to the endpoints created. The main screen shows the current time and list of upcoming alarms. From the "New Alarm" screen, an alarm can be set with a date and time. The lights can also be turned on and off from any screen of the app.</p>
    <div class="project-screenshots">
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/kasa-alarm/main-screen.png', 'alt'=>'Screen with current time'],
        'caption'=>'Main screen displays the current time and a way to set a new alarm.',
        'isProjectScreenshotsItem'=>true
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/kasa-alarm/new-alarm.png', 'alt'=>'Screen to set new alarm with date and time fields'],
        'caption'=>'The date and time are required when setting an alarm.',
        'isProjectScreenshotsItem'=>true
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/kasa-alarm/alarm-set.png', 'alt'=>'Screen with current time and currently set alarms'],
        'caption'=>'Once an alarm is set, the main screen shows the upcoming alarm.',
        'isProjectScreenshotsItem'=>true
      ])
    </div>
    <div class="project-screenshots">
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/kasa-alarm/lights-off.png', 'alt'=>'Button to turn lights on'],
        'caption'=>'Button shows that the lights are currently off and can be turned on.',
        'isProjectScreenshotsItem'=>true
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/kasa-alarm/lights-on.png', 'alt'=>'Button to turn lights off'],
        'caption'=>'Button shows that the lights are currently on and can be turned off.',
        'isProjectScreenshotsItem'=>true
      ])
    </div>
    <h2>Reflection</h2>
    <p>In the end, I have a web app that allows my smart light bulbs to be used as a wakeup light. Due to the limitations of the library used to connect to the lights, the app can only be run in the same local network of the lights. I plan on expanding it to control other smart devices during the wake-up sequence. That way, a device such as a fan connected to a smart plug can also be turned on at a specific time. This was my first project where I worked with both Node.js and React.</p>
  </section>
@endsection
{{-- 
  Project Card on the home page
  [
    'url'=>'/kasa-alarm/',
    'category'=>'React App',
    'title'=>'Kasa Alarm',
    'description'=>'Wakeup light web app for Kasa Smart light bulbs',
    'image'=>'/assets/images/kasa-alarm/thumbnail.png',
    'fillColor'=>'#c3ebf1'
  ]
--}}

<a href="{{ $url }}" class="project-card">
  <div class="project-card__details">
    <div class="project-card__category"><span class="show-for-sr">Project Category: </span>{{ $category }}</div>
    <div class="project-card__title"><span class="show-for-sr">Project Title: </span>{{ $title }}</div>
    <p class="project-card__description"><span class="show-for-sr">Project Description: </span>{{ $description }}</p>
    <span class="project-card__view">
      View Project
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="-5 -5 24 24" class="project-card__arrow"><path d='M10.586 5.657l-3.95-3.95A1 1 0 0 1 8.05.293l5.657 5.657a.997.997 0 0 1 0 1.414L8.05 13.021a1 1 0 1 1-1.414-1.414l3.95-3.95H1a1 1 0 1 1 0-2h9.586z' fill='#007d99'/></svg>
    </span>
  </div>
  <div class="project-card__graphics">
    <img src="{{ $image }}" width="400" class="project-card__img" alt="">
    <svg viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg" class="project-card__blob">
      <g transform="translate(300,300)">
        <path d="M118.5,-181.9C155.2,-160.8,187.7,-130.7,203,-93.7C218.4,-56.7,216.6,-12.9,217.2,36.1C217.8,85.2,220.7,139.5,196.7,174.4C172.6,209.2,121.5,224.5,72.2,233.2C22.9,241.8,-24.6,243.7,-70.7,233.5C-116.9,223.3,-161.6,201.1,-192,166.2C-222.3,131.4,-238.4,84,-241.7,36.9C-245.1,-10.1,-235.8,-56.8,-217.2,-99.9C-198.6,-143,-170.7,-182.5,-132.9,-203.1C-95.2,-223.7,-47.6,-225.4,-3.3,-220.2C40.9,-215,81.8,-203,118.5,-181.9Z" fill="{{ $fillColor }}" />
      </g>
    </svg>
  </div>
</a>
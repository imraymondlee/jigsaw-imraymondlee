{{--
  Project Description section for the projects page
  [
    'image'=>[
      'url'=>'/assets/images/kasa-alarm/ui.png',
      'alt'=>'Kasa Alarm user interface'
    ],
    'context'=>'Personal Project',
    'technologies'=>['React', 'Node.js', 'Express', 'Postman', 'Material-UI'],
    'links'=>[
      ['url'=>'https://github.com/imraymondlee/kasa-alarm', 'text'=>'View Source']
    ]
  ]
--}}

<section class="description">
  <div class="description__first">
    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="project-img">
  </div>
  <div class="description__second">
    <div class="description__label u-margin-top-none">Context</div>
    <ul class="description__list">
      <li>{{ $context }}</li>
    </ul>
    <div class="description__label">Technology</div>
    <ul class="description__list description__list--inline">
      @foreach ($technologies as $technology)
        <li>{{ $technology }}</li>
      @endforeach
    </ul>
    <div class="description__label">Links</div>
    <ul class="description__list">
      @foreach ($links as $link)
        <li><a href="{{ $link['url'] }}" target="_blank">{{ $link['text'] }}</a></li>
      @endforeach
    </ul>
  </div>
</section>
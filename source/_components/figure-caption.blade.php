{{-- 
  Image with caption
  [
    'image'=>['url'=>'/assets/images/kasa-alarm/postman.png', 'alt'=>'POST request on Postman to set alarm with JSON data'],
    'caption'=>'Postman was used before having the frontend set up.'
  ]

  isProjectScreenshotsItem used to put image in a column grid
--}}
<figure class="project-figure {{ $isProjectScreenshotsItem ? 'project-screenshots__item' : '' }}">
  <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="project-figure__img">
  <figcaption class="project-figure__caption">{{ $caption }}</figcaption>
</figure>
{{-- 
  Image with caption
  [
    'image'=>['url'=>'/assets/images/kasa-alarm/postman.png', 'alt'=>'POST request on Postman to set alarm with JSON data'],
    'caption'=>'Postman was used before having the front-end set up.'
  ]

  isProjectScreenshotsItem used to put image in a column grid. Don't set false to not have it, just leave it out.
  useOriginalImgWidth used to set image to use its original width. Don't set false to not have it, just leave it out.
--}}

<figure class="project-figure {{ isset($isProjectScreenshotsItem) ? 'project-screenshots__item' : '' }}">
  <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="project-figure__img {{ isset($useOriginalImgWidth) ? 'project-figure__img--original' : '' }}">
  <figcaption class="project-figure__caption">{{ $caption }}</figcaption>
</figure>
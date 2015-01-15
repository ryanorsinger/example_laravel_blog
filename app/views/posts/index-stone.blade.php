@extends('layouts.stone')


@section('content')
  @foreach($posts as $post)
    <article class="post">
      <div class="backdrop">
        <div class="bar">
          <h1><a href="">{{{ $post->title }}}</a></h1>
        </div>

        <div class="body">
          {{{ $post->body }}}

          <p>
            <a href="/posts/319-clojure-from-the-ground-up-debugging">Continue reading (6305 words)</a>
          </p>
        <div class="clear"></div>
      </div>
    </div>
  </article>
  @endforeach


@stop

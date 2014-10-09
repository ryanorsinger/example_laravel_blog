@extends('layouts.master')

@section('title')
    Welcome Home
@stop

@section('topscript')
@stop

@section('content')

<div>
    <h4>Welcome Home!</h5>
    <div class="row bs">
    <div class="col-sm-4">
      <h3 id="download-bootstrap">Resources</h3>
      <p>Compiled and minified CSS, JavaScript, and fonts. No docs or original source files are included.</p>
      <p>
        <a href="https://github.com/twbs/bootstrap/releases/download/v3.2.0/bootstrap-3.2.0-dist.zip" class="btn btn-lg btn-outline" role="button" onclick="ga('send', 'event', 'Getting started', 'Download', 'Download compiled');">Download Bootstrap</a>
      </p>
    </div>
    <div class="col-sm-4">
      <h3 id="download-source">Source code</h3>
      <p>Source Less, JavaScript, and font files, along with our docs. <strong>Requires a Less compiler and <a href="#grunt">some setup.</a></strong></p>
      <p>
        <a href="https://github.com/twbs/bootstrap/archive/v3.2.0.zip" class="btn btn-lg btn-outline" role="button" onclick="ga('send', 'event', 'Getting started', 'Download', 'Download source');">Download source</a>
      </p>
    </div>
    <div class="col-sm-4">
      <h3 id="download-sass">Sass</h3>
      <p><a href="https://github.com/twbs/bootstrap-sass">Bootstrap ported from Less to Sass</a> for easy inclusion in Rails, Compass, or Sass-only projects.</p>
      <p>
        <a href="https://github.com/twbs/bootstrap-sass/archive/v3.2.0.tar.gz" class="btn btn-lg btn-outline" role="button" onclick="ga('send', 'event', 'Getting started', 'Download', 'Download Sass');">Download Sass</a>
      </p>
    </div>
  </div>

    <h4>{{ HTML::linkRoute('portfolio', 'Portfolio') }}</h4>
    <h4>{{ HTML::linkRoute('resume', 'Resume') }}</h4>
    <h4>{{ link_to_action('PostsController@index', 'Blog Roll') }}</h4>

</div>
    <div>
        <img src="/assets/images/elvis.jpg">
    </div>
</div>

<table>
<thead>
<tr>
<th>Verb</th>
<th>Path</th>
<th>Controller Method/Action</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>GET</code></td>
<td><code>/posts</code></td>
<td><code>index</code></td>
<td>Show a list of all posts</td>
</tr>
<tr>
<td><code>GET</code></td>
<td><code>/posts/create</code></td>
<td><code>create</code></td>
<td>Show a form for creating a post</td>
</tr>
<tr>
<td><code>POST</code></td>
<td><code>/posts</code></td>
<td><code>store</code></td>
<td>Store the new post</td>
</tr>
<tr>
<td><code>GET</code></td>
<td><code>/posts/{post}</code></td>
<td><code>show</code></td>
<td>Show a specific post</td>
</tr>
<tr>
<td><code>GET</code></td>
<td><code>/posts/{post}/edit</code></td>
<td><code>edit</code></td>
<td>Show a form for editing a specific post</td>
</tr>
<tr>
<td><code>PUT</code></td>
<td><code>/posts/{post}</code></td>
<td><code>update</code></td>
<td>Update a specific post</td>
</tr>
<tr>
<td><code>DELETE</code></td>
<td><code>/posts/{post}</code></td>
<td><code>destroy</code></td>
<td>Delete a specific post</td>
</tr>
</tbody>
</table>

@stop

@section('bottomscript')
@stop

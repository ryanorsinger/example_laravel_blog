@extends('layouts.master')

@section('title')
    Welcome Home
@stop

@section('topscript')
@stop

@section('content')
<div>
    <h5>Welcome Home!</h5>

    <h5>{{ HTML::linkRoute('portfolio', 'Portfolio') }}</h5>
    <h5>{{ HTML::linkRoute('resume', 'Resume') }}</h5>
    <h5>{{ HTML::link_to_action('posts', 'Blog Roll') }}</h5>
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
</div>
    <div>
        <img src="/assets/images/elvis.jpg">
    </div>
</div>
@stop

@section('bottomscript')
@stop

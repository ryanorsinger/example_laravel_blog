<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the all posts.
	 * [GET] /posts
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();

		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new post.
	 * [GET] /posts/create
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * [POST] /posts/
	 * @return Response
	 */
	public function store()
	{
	    //create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);

		//attempt validation
	    if ($validator->fails()) {
        	return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$post = new Post;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			$message = "Your post was successfully saved.";

			return Redirect::action('PostsController@index');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * [GET] /posts/{$id}
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * [GET] /posts/{$id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);

		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();

		$message = "Your post was successfully updated.";

		$params = ['post' => $post, 'message' => $message];

		return View::make('posts.show')->with('params', $params);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();

		$message = "Your post was succesfully deleted.";

		$params = ['post', $post, 'message' => $message];

		return View::make('posts.index')->with('params', $params);
	}


}

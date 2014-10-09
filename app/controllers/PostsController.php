<?php

class PostsController extends \BaseController
{

	/**
	 * Display a listing of the all posts.
	 * [GET] /posts
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		$query = Post::orderBy('created_at', 'desc');

		if (is_null($search)) {
			$posts = $query->paginate(3);
		} else {
			$posts = $query->where('title', 'LIKE', "%{$search}%")
						   ->orWhere('body', 'LIKE', "%{$search}%")
						   ->paginate(3);
		}

		$message = 'The $_SESSION PHP SuperGlobal is an associative array containing session variables available to the current script.';

		Session::put('message', $message);

	 	return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new post.
	 * [GET] /posts/create
	 * @return Response
	 */
	public function create()
	{
		Session::put('key', 'value');

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

			Session::flash('errorMessage', "Post must have a title and body.");

			Log::error('Post validator failed', Input::all());

        	return Redirect::back()->withInput();

	    } else {
			$post = new Post;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

		Log::info('Post was successfully saved.', Input::all());

		$message = 'Post created successfully';

	   	Session::flash('successMessage', $message);

		return Redirect::action('PostsController@index');

	   }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * [GET] /posts/{$id}
	 * http://blog.dev/posts/{$id}
	 * @return Response
	 */

	public function show($id)
	{
		$post = Post::find($id);

		if (!$post) {

			Log::error('Post was not found');
			return App::abort(404);
		}

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
		$post = Post::find($id);

		if(!$post) {

			Log::error('Post validator failed');
		}

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
		$post = Post::find($id);

		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();

		Session::flash('successMessage', 'Post updated successfully');

		return Redirect::action('PostsController@index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);

		if(!$post) {
			App::abort(404);
		}

		$post->delete();

		Log::info('Post deleted successfully');

		Session::flash('successMessage', 'Post deleted successfully');

		return Redirect::action('PostsController@index');
	}


	protected function savePost(Post $post)
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

			return Redirect::action('PostsController@index');
		}
	}

}

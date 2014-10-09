<?php

class PostsController extends \BaseController {

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
	    $post = new Post;

	    return $this->savePost($post);

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
		$post = Post::findOrFail($id);
		$post->delete();

		return Redirect::action('PostsController@index');
	}


}

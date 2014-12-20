<?php

class GatheringsController extends \BaseController {

	/**
	 * Display a listing of gatherings
	 *
	 * @return Response
	 */
	public function index()
	{
		$gatherings = Gathering::all();

		return View::make('gatherings.index', compact('gatherings'));
	}

	/**
	 * Show the form for creating a new gathering
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('gatherings.create');
	}

	/**
	 * Store a newly created gathering in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Gathering::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Gathering::create($data);

		return Redirect::route('gatherings.index');
	}

	/**
	 * Display the specified gathering.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$gathering = Gathering::findOrFail($id);

		return View::make('gatherings.show', compact('gathering'));
	}

	/**
	 * Show the form for editing the specified gathering.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$gathering = Gathering::find($id);

		return View::make('gatherings.edit', compact('gathering'));
	}

	/**
	 * Update the specified gathering in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$gathering = Gathering::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Gathering::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$gathering->update($data);

		return Redirect::route('gatherings.index');
	}

	/**
	 * Remove the specified gathering from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Gathering::destroy($id);

		return Redirect::route('gatherings.index');
	}

}

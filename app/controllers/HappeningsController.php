<?php

class HappeningsController extends \BaseController {

	/**
	 * Display a listing of happenings
	 *
	 * @return Response
	 */
	public function index()
	{
		$happenings = Happening::all();

		return View::make('happenings.index', compact('happenings'));
	}

	/**
	 * Show the form for creating a new happening
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('happenings.create');
	}

	/**
	 * Store a newly created happening in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Happening::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Happening::create($data);

		return Redirect::route('happenings.index');
	}

	/**
	 * Display the specified happening.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$happening = Happening::findOrFail($id);

		return View::make('happenings.show', compact('happening'));
	}

	/**
	 * Show the form for editing the specified happening.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$happening = Happening::find($id);

		return View::make('happenings.edit', compact('happening'));
	}

	/**
	 * Update the specified happening in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$happening = Happening::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Happening::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$happening->update($data);

		return Redirect::route('happenings.index');
	}

	/**
	 * Remove the specified happening from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Happening::destroy($id);

		return Redirect::route('happenings.index');
	}

}

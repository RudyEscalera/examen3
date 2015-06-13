<?php namespace App\Http\Controllers;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Controllers\Controller;
use App\Movie;

class MoviesController extends Controller {

	public function __construct()
	{
		$this->middleware('auth',['except' => 'index']);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$movies = Movie::all();
		return view('movies.index', compact('movies'));
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('movies.create');
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateMovieRequest $request)
	{
		Movie::create($request->all());
		return redirect('movies');
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$movie = Movie::find($id);

		return view('movies.show', compact('movie'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$movie = Movie::find($id);
		return view('movies.edit', compact('movie'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateMovieRequest $request)
	{
		$movie = Movie::find($id);
		$movie->update($request->all());
		return redirect('movies');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$movie =Movie::find($id);
		$movie->delete();
		return redirect('movies');
		//
	}

}

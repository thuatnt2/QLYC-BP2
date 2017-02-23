<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\PurposeRequest;
use App\Http\Controllers\Controller;

use App\Purpose;
use Illuminate\Http\Request;

class PurposeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$purposes = Purpose::all();

		return view('admin.purposes.index', compact('purposes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.purposes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(PurposeRequest $request)
	{
		$purpose = new Purpose();

		$purpose->symbol = $request->input("symbol");
        $purpose->comment = $request->input("comment");

		$purpose->save();

		return redirect()->action('Admin\PurposeController@index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$purpose = Purpose::findOrFail($id);

		return view('admin.purposes.show', compact('purpose'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$purpose = Purpose::findOrFail($id);

		return view('admin.purposes.edit', compact('purpose'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(PurposeRequest $request, $id)
	{
		$purpose = Purpose::findOrFail($id);

		$purpose->symbol = $request->input("symbol");
        $purpose->comment = $request->input("comment");

		$purpose->save();

		return redirect()->action('Admin\PurposeController@index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$purpose = Purpose::findOrFail($id);
		$purpose->delete();

		return redirect()->action('Admin\PurposeController@index')->with('message', 'Item deleted successfully.');
	}

}

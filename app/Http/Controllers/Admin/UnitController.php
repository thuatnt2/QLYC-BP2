<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests\UnitRequest;
use App\Http\Controllers\Controller;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$units = Unit::all();

		return view('admin.units.index', compact('units'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.units.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(UnitRequest $request)
	{
		$unit = new Unit();

		$unit->symbol = $request->input("symbol");
        $unit->description = $request->input("description");
        $unit->block = $request->input("block");

		$unit->save();

		return redirect()->action('Admin\UnitController@index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$unit = Unit::findOrFail($id);

		return view('admin.units.show', compact('unit'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$unit = Unit::findOrFail($id);

		return view('admin.units.edit', compact('unit'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(UnitRequest $request, $id)
	{
		$unit = Unit::findOrFail($id);

		$unit->symbol = $request->input("symbol");
        $unit->description = $request->input("description");
        $unit->block = $request->input("block");

		$unit->save();

		return redirect()->action('Admin\UnitController@index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$unit = Unit::findOrFail($id);
		$unit->delete();

		return redirect()->action('Admin\UnitController@index')->with('message', 'Item deleted successfully.');
	}

}

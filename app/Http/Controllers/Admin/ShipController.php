<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests\ShipRequest;
use App\Http\Controllers\Controller;

use App\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ships = Ship::all();

		return view('admin.ships.index', compact('ships'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.ships.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(ShipRequest $request)
	{
		$ship = new Ship();

		$ship->order_id = $request->input("order_id");
        $ship->order_id = $request->input("order_id");
        $ship->number_cv_pa71 = $request->input("number_cv_pa71");
        $ship->number_news = $request->input("number_news");
        $ship->number_page = $request->input("number_page");
        $ship->file_name = $request->input("file_name");
        $ship->receive_name = $request->input("receive_name");
        $ship->date_submit = $request->input("date_submit");

		$ship->save();

		return redirect()->action('Admin\ShipController@index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ship = Ship::findOrFail($id);

		return view('admin.ships.show', compact('ship'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ship = Ship::findOrFail($id);

		return view('admin.ships.edit', compact('ship'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(ShipRequest $request, $id)
	{
		$ship = Ship::findOrFail($id);

		$ship->order_id = $request->input("order_id");
        $ship->order_id = $request->input("order_id");
        $ship->number_cv_pa71 = $request->input("number_cv_pa71");
        $ship->number_news = $request->input("number_news");
        $ship->number_page = $request->input("number_page");
        $ship->file_name = $request->input("file_name");
        $ship->receive_name = $request->input("receive_name");
        $ship->date_submit = $request->input("date_submit");

		$ship->save();

		return redirect()->action('Admin\ShipController@index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ship = Ship::findOrFail($id);
		$ship->delete();

		return redirect()->action('Admin\ShipController@index')->with('message', 'Item deleted successfully.');
	}

}

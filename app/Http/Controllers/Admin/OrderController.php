<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$orders = Order::all();

		return view('admin.orders.index', compact('orders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.orders.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(OrderRequest $request)
	{
		$order = new Order();

		$order->user_id = $request->input("user_id");
        $order->number_cv = $request->input("number_cv");
        $order->number_cv_pa71 = $request->input("number_cv_pa71");
        $order->order_name = $request->input("order_name");
        $order->order_phone = $request->input("order_phone");
        $order->customer_name = $request->input("customer_name");
        $order->customer_phone = $request->input("customer_phone");

		$order->save();

		return redirect()->action('Admin\OrderController@index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$order = Order::findOrFail($id);

		return view('admin.orders.show', compact('order'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$order = Order::findOrFail($id);

		return view('admin.orders.edit', compact('order'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(OrderRequest $request, $id)
	{
		$order = Order::findOrFail($id);

		$order->user_id = $request->input("user_id");
        $order->number_cv = $request->input("number_cv");
        $order->number_cv_pa71 = $request->input("number_cv_pa71");
        $order->order_name = $request->input("order_name");
        $order->order_phone = $request->input("order_phone");
        $order->customer_name = $request->input("customer_name");
        $order->customer_phone = $request->input("customer_phone");

		$order->save();

		return redirect()->action('Admin\OrderController@index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$order = Order::findOrFail($id);
		$order->delete();

		return redirect()->action('Admin\OrderController@index')->with('message', 'Item deleted successfully.');
	}

}

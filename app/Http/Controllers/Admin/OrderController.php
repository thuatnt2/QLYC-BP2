<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;

use App\Order;
use Illuminate\Http\Request;
use App\Contracts\Repositories\OrderRepositoryInterface;

class OrderController extends Controller 
{
    protected $repository;
    protected $attributes = [
                        'date_order',
                        'number_cv',
                        'number_cv_pa71',
                        'user',
                        'kind',
                        'unit',
                        'category',
                        'purpose',
                        'order_name',
                        'order_phone',
                        'date_request',
                        'customer_name',
                        'customer_phone',
                        'comment'
                        ];
    public function __construct(OrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
        $perPage = request()->input('perPage', 10);
        $condition = request()->input('condition', '');

        $orders = $this->repository->orderPaginate($perPage);
         $orders->appends(['perPage' => $perPage, 'condition' => $condition]);
        if(request()->wantsJson()) {
            return response()->json(compact('orders', 'condition'));
        }

        return view('admin.orders.index', compact('orders', 'condition'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(OrderCreateRequest $request)
    {


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

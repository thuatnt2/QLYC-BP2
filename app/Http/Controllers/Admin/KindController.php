<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\KindRequest;
use App\Http\Controllers\Controller;

use App\Kind;
use Illuminate\Http\Request;
use App\Contracts\Repositories\KindRepositoryInterface;
use Illuminate\Support\Facades\Log;

class KindController extends Controller
{
    protected $repository;
    protected $attributes = ["symbol", "description"];

    public function __construct(KindRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Show the form for creating and Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
            $kinds = $this->repository->orderBy('created_at')->paginate();

            return view('admin.kinds.index', compact('kinds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(KindRequest $request)
    {
        try {
            $this->repository->create($request->only($this->attributes));
        } catch (\Exception $exc) {
            Log::error($exc);
            return redirect()->back()->withError('Store failed!');
        }
        
        return redirect()->action('Admin\KindController@index')->withSuccess('Item created successfully.');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
            $kind = $this->repository->find($id);
            return view('admin.kinds.edit', compact('kind'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param Request $request
     * @return Response
     */
    public function update(KindRequest $request, $id)
    {
        try {
            $this->repository->update($id, $request->only($this->attributes));
            
        } catch (Exception $exc) {
            Log::error($exc);
            
            return redirect()->back()->withError('Update Fail');
        }

        return redirect()->action('Admin\KindController@index')->withSuccess('Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $this->repository->delete($id);
            
        } catch (Exception $exc) {
            Log::error($exc);
            
            return redirect()->back()->withError("Delete fail");
        }

        return redirect()->action('Admin\KindController@index')->with('error', 'Item deleted successfully.');
    }

}

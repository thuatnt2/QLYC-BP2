<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\KindRequest;
use App\Http\Controllers\Controller;

use App\Kind;
use Illuminate\Http\Request;
use App\Contracts\Repositories\KindRepositoryInterface;

class KindController extends Controller
{
    protected $repository;
    
    public function __construct(KindRepositoryInterface $repository)
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
            $kinds = $this->repository->all();

            return view('admin.kinds.index', compact('kinds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
            return view('admin.kinds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(KindRequest $request)
    {
            $kind = new Kind();

            $kind->symbol = $request->input("symbol");
    $kind->comment = $request->input("comment");

            $kind->save();

            return redirect()->action('Admin\KindController@index')->with('message', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
            $kind = Kind::findOrFail($id);

            return view('admin.kinds.show', compact('kind'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
            $kind = Kind::findOrFail($id);

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
            $kind = Kind::findOrFail($id);

            $kind->symbol = $request->input("symbol");
    $kind->comment = $request->input("comment");

            $kind->save();

            return redirect()->action('Admin\KindController@index')->with('message', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
            $kind = Kind::findOrFail($id);
            $kind->delete();

            return redirect()->action('Admin\KindController@index')->with('message', 'Item deleted successfully.');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class ManageStoreController extends Controller
{
    private $obj;

    public function __construct(Store $object)
    {
        $this->obj = $object;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores=Store::latest()->get();
        return view('admin.stores.index',['stores'=>$stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->obj->findOrFail($id);
        $user->delete();
        Session::flash('success_message', 'User successfully deleted!');
        return redirect()->route('users.index');
    }

    public function DeleteSelectedLogs(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'logs' => 'required',

        ]);
        foreach ($input['logs'] as $index => $id) {
            $user = $this->obj->findOrFail($id);
            $user->delete();
        }
        Session::flash('success_message', 'Users successfully deleted!');
        return redirect()->back();

    }

    public function manageStoreDetail(Request $request)
    {
        $store = Store::findOrFail($request->input('id'));

        return view('admin.stores.single', ['title' => 'Store Detail', 'store' => $store]);
    }

    public function change_status($id, $status){
        $store = Store::find($id);
        $store->status = $status;
        $store->save();
        return redirect()->back();
    }
}

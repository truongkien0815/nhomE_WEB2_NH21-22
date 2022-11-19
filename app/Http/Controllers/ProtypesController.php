<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Protype;
use App\Models\Product;

class ProtypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function userCan($action, $option = NULL)
    {
        $user = Auth::user();
        return Gate::forUser($user)->allows($action, $option);
    }

    public function index()
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND!'));
        }
        $allmanus = Protype::all();
        $allproducts = Product::all();
        return view('admin.protypes', [
            'allmanus' => $allmanus,
            'allproducts' => $allproducts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('BNOT FOUND!'));
        }
        return view('admin.addprotype');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND!'));
        }
        $manu = new Protype;
        $manu->manu_name = $request->manu_name;
        $manu->save();
        return redirect()->action([ProtypesController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND!'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND!'));
        }
        $manu = Protype::where('manu_id', $id)->first();
        return view('admin.editprotype', [
            'manu' => $manu,
        ]);
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
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND!'));
        }
        $manu = Protype::find($id);
        $manu->manu_name = $request->manu_name;
        $manu->save();
        return redirect()->action([ProtypesController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND!'));
        }
        $manu = Protype::find($id);
        $manu->delete();
        return redirect()->action([ProtypesController::class, 'index']);
    }
}

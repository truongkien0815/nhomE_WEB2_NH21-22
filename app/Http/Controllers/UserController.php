<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class UserController extends Controller
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
            abort('404', __('NOT FOUND'));
        }
        $allusers = User::all();
        return view('admin.users', [
            'allusers' => $allusers,
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
        return view('admin.addmanufacturer');
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
        $name = new User;
        $name->name = $request->name;
        $name->save();
        return redirect()->action([UserController::class, 'index']);
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
        $manu = User::where('name', $id)->first();
        return view('admin.editmanufacturer', [
            'name' => $name,
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
        $name = User::find($id);
        $name->name = $request->name;
        $name->save();
        return redirect()->action([UserController::class, 'index']);
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
        $name = User::find($id);
        $name->delete();
        return redirect()->action([UserController::class, 'index']);
    }
}

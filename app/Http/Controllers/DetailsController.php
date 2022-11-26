<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Detail;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailsController extends Controller
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
<<<<<<< HEAD

=======
    public function index_all()
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
        $alldetails = Detail::paginate(5);
        $allproducts = Product::all();
        $allpayments = Payment::all();
        return view('admin.details_all', [
            'alldetails' => $alldetails,
            'allproducts' => $allproducts,
            'allpayments' => $allpayments,
        ]);
    }
    // don da giao
    public function index_hoanhthanh()
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
       
        $alldetails =  Detail::where('status','=',1)->paginate(5);
        $allproducts = Product::all();
        $allpayments = Payment::all();
        return view('admin.details_hoanthanh', [
            'alldetails' => $alldetails,
            'allproducts' => $allproducts,
            'allpayments' => $allpayments,
        ]);
    }
>>>>>>> kien_nhomE
    public function index()
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
<<<<<<< HEAD
        $alldetails = Detail::all();
=======
        $alldetails = Detail::where('status','=',0)->paginate(5);
>>>>>>> kien_nhomE
        $allproducts = Product::all();
        $allpayments = Payment::all();
        return view('admin.details', [
            'alldetails' => $alldetails,
            'allproducts' => $allproducts,
            'allpayments' => $allpayments,
        ]);
    }

<<<<<<< HEAD
=======

>>>>>>> kien_nhomE
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
        $allproducts = Product::all();
        $allpayments = Payment::all();
        return view('admin.adddetail', [
            'allproducts' => $allproducts,
            'allpayments' => $allpayments,
        ]);
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
            abort('404', __('NOT FOUND'));
        }
        $detail = new Detail;
        $detail->product_id = $request->product_id;
        $detail->payment_id = $request->payment_id;
        $detail->quantity = $request->quantity;
<<<<<<< HEAD
=======
        $detail->status = 0;
        $detail->address = 'quang binh';
        $detail->telephone = '082663364';



>>>>>>> kien_nhomE
        $detail->save();
        return redirect()->action([DetailsController::class, 'index']);
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
        $allproducts = Product::all();
        $allpayments = Payment::all();
        $detail = Detail::where('detail_id', $id)->first();
        return view('admin.editdetail', [
            'detail' => $detail,
            'allproducts' => $allproducts,
            'allpayments' => $allpayments,
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
            abort('404', __('NOT FOUND'));
        }
        $detail = Detail::find($id);
        $detail->product_id = $request->product_id;
        $detail->payment_id = $request->payment_id;
        $detail->quantity = $request->quantity;
        $detail->save();
<<<<<<< HEAD
=======
        // return redirect()->back();
>>>>>>> kien_nhomE
        return redirect()->action([DetailsController::class, 'index']);
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
            abort('404', __('NOT FOUND'));
        }
        $detail = Detail::find($id);
        $detail->delete();
<<<<<<< HEAD
        return redirect()->action([DetailsController::class, 'index']);
    }
}
=======
        return redirect()->back();
        // return redirect()->action([DetailsController::class, 'index']);
    }

    public function update_hoanthanh(Request $request, $id)
    {
        if (!$this->userCan('view-page-admin')) {
            abort('404', __('NOT FOUND'));
        }
        $detail = Detail::find($id);
       
        $detail->status = 1;
        $detail->save();
        return redirect()->back();
        // return redirect()->action([DetailsController::class, 'index']);
    }
}
>>>>>>> kien_nhomE

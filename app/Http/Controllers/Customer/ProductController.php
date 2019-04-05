<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\CustomerProducts;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('customer');
     }
    public function index()
    {
      $user = Auth::guard('customer')->user();
      $userID = $user->id;
      $products = CustomerProducts::where('created_by', $userID)->get();
      return view('customer.products.allproducts')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validate the data
      $user = Auth::guard('customer')->user();
      $userID = $user->id;
      $this->validate($request, array(
        'product_title' => 'required',
        'product_desc'  => 'required'
      ));
      //storing data to database
      $product = new CustomerProducts();

      $product->title = $request->product_title;
      $product->product_content = $request->product_desc;
      $product->created_by = $userID;


      if ($product->save()) {
        Session::flash('success', 'You have successfully save data to database!');
      }

      //redirect to another page
      return redirect()->route('customer.product.create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

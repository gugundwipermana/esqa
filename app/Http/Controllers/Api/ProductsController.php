<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::select('products.*', \DB::raw('SUM(vote) / (select count(*) from votes where product_id = products.id) as tot_vote'))
                    ->join('votes', 'products.id', '=', 'votes.product_id')
                    ->groupBy('products.id')
                    ->orderBy('id', 'desc')
                    ->get();

        return response()->json($products->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $product = Product::with('category', 'colors', 'subimages')->whereSlug($slug)->first();
        return response()->json($product);
    }

    public function vote($slug)
    {
        //
        $vote = Product::select(\DB::raw('SUM(vote) / (select count(*) from votes where product_id = products.id) as tot_vote'))
                    ->join('votes', 'products.id', '=', 'votes.product_id')
                    ->groupBy('products.id')
                    ->whereSlug($slug)
                    ->first();

        return response()->json($vote);
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

    public function relateds() {
        //$products = Product::with('category')->orderByRaw("RAND()")->take(4)->orderBy('id', 'desc')->get();

        $products = Product::select('products.*', \DB::raw('SUM(vote) / (select count(*) from votes where product_id = products.id) as tot_vote'))
                    ->join('votes', 'products.id', '=', 'votes.product_id')
                    ->groupBy('products.id')
                    ->orderByRaw("RAND()")->take(4)->orderBy('id', 'desc')
                    ->get();

        return response()->json($products->toArray());
    }
}

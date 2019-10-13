<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Costumer;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_customer');
        //
    }

    public function create_post(Request $request){
        $costumer = new Costumer;

        $costumer->name = $request["name"];
        $costumer->email = $request["email"];
        $costumer->occupation = $request["occupation"];
        $costumer->save();
        
        // echo $costumer;

        return view('view_customer', ['customer' => $costumer]);
    }

    public function get(){
        $all_customer = Costumer::all();

        return view('all_customer',['all_customer'=>$all_customer]);
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
        $customer = Costumer::find($id);
        return view('edit_customer', ['customer' => $customer]);
    }

    public function edit_post(Request $request, $id){
        $costumer = Costumer::find($id);

        $costumer->name = $request["name"];
        $costumer->email = $request["email"];
        $costumer->occupation = $request["occupation"];
        $costumer->save();
        
        // echo $costumer;

        return view('view_customer', ['customer' => $costumer]);
    }

    public function delete($id)
    {
        //
        $customer = Costumer::find($id);
        $customer->delete();
        return "Berhasil di Delete"; 
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

<?php

namespace App\Http\Controllers\shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\lang\langController;

class shopController extends Controller
{
    public function ConfigrationLanguageIndex(Request $req) {
		Cache::remember('Slider', 300, function (){
      return $carousels = DB::table('carousels')->get();
		});

    $lang = new langController();
    if($req->lang == 'ar'){
      $lang->ar($req);
    }else {
      $lang->en($req);
    }
    $Slider = Cache::get('Slider');
      return view('shopping.main')->with('sliders',$Slider);
    }
	
    public function index(Request $req)
    {
      Cache::remember('Slider', 300, function (){
			return $carousels = DB::table('carousels')->get();
		});
      $lang = new langController();
      if($req->lang == 'ar'){
        $lang->ar($req);
    }else {
      $lang->en($req);
    }
     $Slider = Cache::get('Slider');
      return view('shopping.main')->with('sliders',$Slider);
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
    public function show($id)
    {
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

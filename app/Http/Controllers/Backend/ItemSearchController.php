<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemSearchController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
     	if($request->has('search')){

     		$search = $request->input('search');
     		$items = Item::search($search)->toArray();

            dd($items);

     	}

     	// return view('frontend.ItemsSearch',compact('items'));
     	
     	return view('frontend.ItemsSearch');
     	// return view('frontend.ItemsSearch')->with([
     	// 	'items'=>$items,
     	// ]);

     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required',
    	]);

    	$item = Item::create($request->all());
    	$item->addToIndex();

    	return redirect()->back();
    }
}

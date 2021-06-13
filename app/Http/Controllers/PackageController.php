<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class PackageController extends Controller{
    public function index(Request $request){
        if ($request->search) {
            $searches = TravelPackage::where('title', 'LIKE', "%".$request->search."%")->take(4)->get();
        } else{
            $searches = "";
        }
        $populars = TravelPackage::where('categories_id', 1)->take(4)->get();
        $mountainBeaches = TravelPackage::where('categories_id', 2)->orWhere('categories_id', 3)->take(4)->get();
        return view('pages.package',[
            'searches' => $searches,
            'populars' => $populars,
            'mountainBeaches' => $mountainBeaches
        ]);
    }

    public function detail(Request $request, $id){
        $item = TravelPackage::with(['galleries'])->where('id', $id)->firstOrFail(); 
        return view('pages.detail', [
            'item' => $item,
        ]);
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Image;
use Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class AjaxController extends Controller
{
     public function delete_image($id){
       if(Request::ajax()){
            $idHinh = Request::get('idHinh');
            $image_detail = Image::find($idHinh);
            if(!empty($image_detail)){
                $img = '/storage/Product-images/Thumbnail/'.$image_detail->name;
                // $img = $image_detail->name;	
                if(Storage::disk('local')->exists($img)){
                    Storage::delete($img);
                }
                
                $image_detail->delete();
            }
            return "OK";
       }
    }

   
}

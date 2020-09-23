<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
class HomeController extends Controller
{
    public function index()
    {
        $items = Items::all();
     
        // $datas = json_encode($items);
        $content = [
            'items' =>  $items 
        ]; 
        return view('home',$content);
    }

    public function detail(Items $item)
    {
        if ($item->stock > 0) {
            $items = Items::find($item->iditems);
            // return $items; 
            $content = [
                'items' =>  $items 
            ]; 
            
            return view('detail',$content);     
        }else{
            return redirect()->back()->with('status_error', 'Out Of Stock '.$item->name.' ');
        }
       
    }

    public function detailsave(Request $request, Items $item)
    {
        $save_item = Items::find($item->iditems);
        $save_item->stock -= $request->order;
        $save_item->save(); 

        return redirect('/')->with('status_success', 'Successfully Buy Item');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ShirtDesign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function contact()
    {
        return view('contact');
    }
    public function design()
    {
        return view('design');
    }
    public function alert()
    {
        notyf()->addError('Login Required!');
        return back();
    }
    public function storeDesign(Request $request)
    {
        $store = new ShirtDesign();
        if ($request->hasFile('shirt_logo')) {
            $img = $request->file('shirt_logo');
            $new_img = time() . rand(00000, 99999) . str_replace(' ', '_', $img->getClientOriginalName());
            $img->move(public_path("shirt-logo"), $new_img);
            $store->shirt_logo  = $new_img;
        }
        $store->user_id = Auth::id();
        $store->name = $request->name;
        $store->phone = $request->phone;
        $store->address = $request->address;
        $store->shirt_text = $request->shirt_text;
        $store->text_font = $request->font_name;
        $store->text_color = $request->text_color;
        $store->shirt_color = $request->shirt_color;
        $store->shirt_size = $request->size;
        if ($request->has('finalDesign')) {
            $base64_image = $request->input('finalDesign');
            $extension = explode('/', explode(':', substr($base64_image, 0, strpos($base64_image, ';')))[1])[1];
            $new_img = time() . rand(00000, 99999) . '.' . $extension;
            $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64_image));
            file_put_contents(public_path("shirt-design/{$new_img}"), $image);
            $store->final_design = $new_img;
        }
        if ($store->save()) {
            notyf()->addSuccess('Order Placed');
            return back();
        } else {
            notyf()->addError('Something Went Wrong!');
        }
    }
    public function orders()
    {
        $orders = ShirtDesign::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('orders', compact('orders'));
    }
    public function catalog()
    {
        $mockups = File::allFiles(public_path('/mockups'));
        return view('catalog', get_defined_vars());
    }
    public function checkout(Request $request){
        $product = base64_decode( $request->product);
        return view('checkout',get_defined_vars());
    }
    public function checkoutSave(Request $request){
        $pos = strpos($request->finalDesign, 'catalog/');
            if ($pos !== false) {
                $trimmedUrl = substr($request->finalDesign, $pos);
            } 
        $shirtDesign = new ShirtDesign();
        $shirtDesign->user_id = Auth::id();
        $shirtDesign->name = $request->name;
        $shirtDesign->phone = $request->phone;
        $shirtDesign->address = $request->address;
        $shirtDesign->final_design = $trimmedUrl;
        $shirtDesign->save();
        try {
            notyf()->addSuccess('Order placed successfully');
            return redirect()->route('catalog.index');
        } catch (\Throwable $th) {
            notyf()->addError('Error proccessing order');
            return back();
        }
    }
    public function collections(){
        $catalogs = File::allFiles(public_path('/catalog'));
        return view('collections',get_defined_vars());
    }
}

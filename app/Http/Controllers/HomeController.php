<?php

namespace App\Http\Controllers;

use App\Models\ShirtDesign;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function contact(){
        return view('contact');
    }
    public function design(){
        return view('design');
    }
    public function alert()
    {
        notyf()->addError('Login Required!');
        return back();
    }
    public function storeDesign(Request $request){
        $store= new ShirtDesign();
        if($request->hasFile('shirt_logo')){
            $img = $request->file('shirt_logo');
            $new_img = time().rand(00000,99999).str_replace(' ', '_', $img->getClientOriginalName());
            $img->move(public_path("shirt-logo"), $new_img);
            $store->shirt_logo  = $new_img;
        }
        $store->shirt_text= $request->shirt_text;
        $store->text_font= $request->font_name;
        $store->text_color= $request->text_color;
        $store->shirt_color= $request->shirt_color;
        $store->shirt_size= $request->size;
        if ($request->has('finalDesign')) {
            // Get the base64 string from the request
            $base64_image = $request->input('finalDesign');
        
            // Extract the image extension from the base64 string
            $extension = explode('/', explode(':', substr($base64_image, 0, strpos($base64_image, ';')))[1])[1];
        
            // Generate a unique filename
            $new_img = time() . rand(00000, 99999) . '.' . $extension;
        
            // Decode the base64 string and save the image
            $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64_image));
            file_put_contents(public_path("shirt-design/{$new_img}"), $image);
        
            // Save the image filename in the database
            $store->final_design = $new_img;
        }



        if($store->save()){
            notyf()->addSuccess('Order Placed');
            return back();

        }
        else{
        notyf()->addError('Something Went Wrong!');
            
        }


    }
}

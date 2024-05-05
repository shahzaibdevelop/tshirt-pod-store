<?php

namespace App\Http\Controllers;

use App\Models\ShirtDesign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function loginPage()
    {
        if(Session::has('admin')){
            return redirect()->route('admin.index');
        }
        else{
            return view('admin.login');
        }
    }
    public function adminOrders(){
        $orders = ShirtDesign::with('User')->orderBy('created_at','desc')->get();
        return view('admin.index',get_defined_vars());
    }
    public function login(Request $request)
    {
        if ($request->has('password') && $request->password == "12345678") {
            Session::put('admin',true);
            return redirect()->route('admin.index');
        }
    }
    public function changeStatus(Request $request){
        $order = ShirtDesign::find($request->id);
        $order->status = $request->status;
        try {
            $order->save();
            notyf()->addSuccess('Status changed successfully');
            return back();
        } catch (\Throwable $th) {
            notyf()->addError('Error while updating status');
            return back();
        }
    }
    public function logout(){
        Session::forget('admin');
        return redirect()->route('index');
    }
}

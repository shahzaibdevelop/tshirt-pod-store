@extends('layout.app')
@section('content')
<section class="vh-100 container">
    <div class="row mt-5 pt-5">
        <div class="col-md-6 my-auto">
            <h2 class="title py-3">Checkout</h2>
            <form action="{{route('checkout.save')}}" method="POST" >
                @csrf
                <input type="text" value="{{$product}}" id="finalDesign" name="finalDesign" hidden>
                <div class="row my-3">
                    <div class="col-md-6">
                        <input type="text" required name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" required name="phone" class="form-control" placeholder="Enter Phone Number">
                    </div>
                </div>
                <div class="rownmt-3">
                    <div class="col-12">
                        <textarea name="address" required class="form-control" placeholder="Enter Address" cols="30" rows="4"></textarea>
                    </div>
                </div>
                <button class="my-3 btn btn-primary" type="submit" >Order</button>
            </form>
        </div>
        <div class="col-md-6">
            <img src="{{$product}}" class="img img-fluid">
        </div>
    </div>
</section>
@endsection
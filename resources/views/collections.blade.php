@extends('layout.app')
@section('style')

@endsection
@section('content')
    <section class="vh-100 py-5 my-5">
        <h2 class="title text-center">Collections</h2>
        <div class="d-flex my-3 py-5 flex-wrap">
            @foreach ($catalogs as $catalog)
                <img src="{{ asset('catalog') . '/' . $catalog->getFileName() }}" width="500" height="500"
                    class="img img-fluid stock-image">
            @endforeach
        </div>
    </section>
@endsection
@section('script')
    <script>
        let stockImages = document.getElementsByClassName('stock-image');
        Array.from(stockImages).forEach(element => {
            element.addEventListener('click', function() {
                window.location.href = "{{route('checkout.index')}}" + "?product=" + btoa(element.src); 
            })
        });
    </script>
@endsection

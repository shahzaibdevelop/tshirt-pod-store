@extends('layout.app')
@section('style')
@endsection
@section('content')
    <section class="vh-100 py-5 my-5">
        <h2 class="title text-center">Collections</h2>
        <div class="d-flex my-3 py-5 flex-wrap">
            @foreach ($catalogs as $index => $catalog)
                <div class="product-container d-flex flex-column gap-4 stock-image">
                    <img src="{{ asset('catalog') . '/' . $catalog->getFileName() }}" width="500" height="500"
                        class="img img-fluid">
                        @if ($index == 0)
                            <span class="mx-5 title fw-bold"><span class="fs-5">White plain shirt</span> <br> <span>Rs 3000</span></span>
                        @elseif ($index == 1)
                            <span class="mx-5 title fw-bold"><span class="fs-5">Half sleeve shirt with design</span> <br><span>Rs 5000</span></span>
                        @elseif ($index == 2)
                            <span class="mx-5 title fw-bold"><span class="fs-5">Red shirt with typography</span> <br><span>Rs 8000</span></span>
                        @endif
                </div>
            @endforeach
        </div>
    </section>
@endsection
@section('script')
    <script>
        let stockImages = document.getElementsByClassName('stock-image');
        Array.from(stockImages).forEach(element => {
            element.addEventListener('click', function() {
                let price = element.children[1].children[2].textContent;
                window.location.href = "{{ route('checkout.index') }}" + "?product=" + btoa(element.children[0].src) + "&title=" + btoa(element.children[1].children[0].textContent.trim()) + "&price=" + btoa(price);
            })
        });
    </script>
@endsection

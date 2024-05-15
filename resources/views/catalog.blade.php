@extends('layout.app')
@section('style')

@endsection
@section('content')
    <section class="vh-100 ">
        <div class="d-flex justify-content-center pt-5 mt-5">
            <h2 class="title">Catalog</h2>
        </div>
        <div class="d-flex mt-3 flex-wrap">
            @foreach ($mockups as $index => $mockup)
                <div class="product-container clickable-image d-flex flex-column gap-4">
                    <img src="{{ asset('mockups') . '/' . $mockup->getFileName() }}" width="500" height="500"
                        class="img img-fluid ">
                    @if ($index == 0)
                    <span class="mx-5 title fw-bold"><span class="fs-5">Hoodie</span> <br> <span>Rs 5000</span></span>
                    @elseif ($index == 1)
                    <span class="mx-5 title fw-bold"><span class="fs-5">Long sleeve shirt</span> <br> <span>Rs 3000</span></span>
                    @elseif ($index == 2)
                    <span class="mx-5 title fw-bold"><span class="fs-5">Half sleeve shirt</span> <br> <span>Rs 4000</span></span>
                    @endif
                    
                </div>
            @endforeach
        </div>
    </section>
@endsection
@section('script')
    <script>
        let images = document.getElementsByClassName('clickable-image');
        Array.from(images).forEach(element => {
            element.addEventListener('click', function() {
                let price = element.children[1].children[2].textContent;
                window.location.href = "{{route('design.index')}}" + "?mockup=" + btoa(element.children[0].src) + "&price=" + btoa(price); 
            })
        });
    </script>
@endsection

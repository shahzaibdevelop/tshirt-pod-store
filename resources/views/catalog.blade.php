@extends('layout.app')
@section('style')

@endsection
@section('content')
    <section class="vh-100 ">
        <div class="d-flex justify-content-center pt-5 mt-5">
            <h2 class="title">Catalog</h2>
        </div>
        <div class="d-flex mt-3 flex-wrap">
            @foreach ($mockups as $mockup)
                <img src="{{ asset('mockups') . '/' . $mockup->getFileName() }}" width="500" height="500"
                    class="img img-fluid clickable-image">
            @endforeach
        </div>
    </section>
@endsection
@section('script')
    <script>
        let images = document.getElementsByClassName('clickable-image');
        Array.from(images).forEach(element => {
            element.addEventListener('click', function() {
                window.location.href = "{{route('design.index')}}" + "?mockup=" + btoa(element.src); 
            })
        });
    </script>
@endsection

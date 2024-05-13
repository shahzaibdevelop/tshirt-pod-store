<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/style.css') }}">
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.bootstrap5.css">

    <link rel="stylesheet" href="{{asset('assets/style/app.css')}}">
    <link href="{{asset('assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    @include('layout.extras')
    @include('layout.navbar')
    <section class="design py-5 mx-5">
        <div class="content vh-100 ">
            <div class="d-flex justify-content-center py-5">
                <h3 class="title fw-bold">Your Orders </h3>
            </div>
            <div class="row w-100 px-5">
                <table id="example" class="table " style="width:100%">
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>Text</th>
                            <th>Logo</th>
                            <th>Final Design</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->shirt_size ?? 'Not Added'}}</td>
                                <td>{{ $order->shirt_text ?? 'Not Added' }}</td>
                                <td>
                                    @if ($order->shirt_logo)
                                        <a href="{{ asset('shirt-logo/') . '/' . $order->shirt_logo }}"
                                            target="_blank">
                                            <img width="50" height="50"
                                                src="{{ asset('shirt-logo/') . '/' . $order->shirt_logo }}"
                                                class="img img-fluid">
                                        </a>
                                    @else
                                        <span>Not Added</span>
                                    @endif
                                </td>
                                <td>
                                    @if (strpos($order->final_design,'catalog/') !== false)
                                    <a href="{{ \Illuminate\Support\Facades\Url::to('/') . '/'. $order->final_design }}"
                                        target="_blank">
                                        <img width="50" height="50"
                                            src="{{ \Illuminate\Support\Facades\Url::to('/') . '/'. $order->final_design }}"
                                            class="img img-fluid">
                                    </a>
                                    @else
                                    <a href="{{ asset('shirt-design/') . '/' . $order->final_design }}"
                                        target="_blank">
                                        <img width="50" height="50"
                                            src="{{ asset('shirt-design/') . '/' . $order->final_design }}"
                                            class="img img-fluid">
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    @if ($order->status == 0)
                                        <span class="text-primary badge">Pending</span>
                                    @elseif ($order->status == 1)
                                        <span class="text-warning badge">Shipping</span>
                                    @elseif ($order->status == 2)
                                        <span class="text-success badge">Delivered</span>
                                    @elseif ($order->status == 3)
                                        <span class="text-danger badge">Canceled</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/js/gumshoe.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather.js') }}"></script>
    <script src="{{ asset('assets/js/unicons.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('plugins/jquery/script.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.6/js/dataTables.bootstrap5.js"></script>
    <script>
        $("#example").DataTable({
            "ordering": false
        });
    </script>
</body>

</html>

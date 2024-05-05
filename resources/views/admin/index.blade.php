<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
</head>
<body>
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
    </head>
    
    <body>
        <nav class="d-flex justify-content-end w-100 p-3">
            <a href="{{route('admin.logout')}}" class="btn btn-primary">Logout</a>
        </nav>
        <section class="design py-5">
            <div class="content vh-100 ">
                <div class="d-flex justify-content-center py-5">
                    <h3>All Orders </h3>
                </div>
                <div class="row w-100 px-5">
                    <table id="example" class="table " style="width:100%">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>User Email</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Size</th>
                                <th>Text</th>
                                <th>Text Font</th>
                                <th>Text Color</th>
                                <th>Shirt Color</th>
                                <th>Logo</th>
                                <th>Final Design</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->user->email }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->address }}</td>
                                    <td>{{ $order->shirt_size }}</td>
                                    <td>{{ $order->shirt_text ?? "Not Added" }}</td>
                                    <td>{{ $order->text_font ?? "Not Added" }}</td>
                                    <td>{{ $order->text_color }}</td>
                                    <td>{{ $order->shirt_color }}</td>
                                    <td>
                                        @if ($order->shirt_logo)
                                        <a href="{{ asset('shirt-logo/') . '/' . $order->shirt_logo }}" target="_blank">
                                            <img width="50" height="50"
                                                src="{{ asset('shirt-logo/') . '/' . $order->shirt_logo }}"
                                                class="img img-fluid">
                                        </a>
                                        @else
                                        <span>Not Added</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ asset('shirt-design/') . '/' . $order->final_design }}" target="_blank">
                                            <img width="50" height="50"
                                                src="{{ asset('shirt-design/') . '/' . $order->final_design }}"
                                                class="img img-fluid">
                                        </a>
                                    </td>
                                    <td>
                                        <form id="changeStatusForm" action="{{route('admin.changeStatus')}}" method="POST">
                                            @csrf
                                            <input type="text" hidden name="id" value="{{$order->id}}">
                                            <select name="status" class="form-control">
                                                <option class="text-primary" {{$order->status == 0 ? "selected" : ""}} value="0">Pending</option>
                                                <option class="text-warning" {{$order->status == 1 ? "selected" : ""}} value="1">Shipping</option>
                                                <option class="text-success" {{$order->status == 2 ? "selected" : ""}} value="2">Delivered</option>
                                                <option class="text-danger" {{$order->status == 3 ? "selected" : ""}} value="3">Cancelled</option>
                                            </select>
                                        </form>
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
                "ordering":false
            });
            $("select[name=status]").on("change",function(){
                $("#changeStatusForm").submit();
            })
        </script>
    </body>
    
    </html>
    
    
</body>
</html>
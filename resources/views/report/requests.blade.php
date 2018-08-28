<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>SWIMS</title>
    {{--<link rel="stylesheet" href="{{asset("pdf/style.css")}}" media="all" />--}}
</head>
<body>
<h3>SWIMS RECYCLERS REQUEST
    <table border="1" cellspacing="0" width="100%" cellpadding="1">
        <thead>
        <tr>
            <th>User ID</th>
            <th>Email</th>
            <th>Waste Type</th>
            <th>Quantity</th>
            <th>Status</th>
        </tr>
        </thead>

        @foreach($requests as $_request)
            <tr>
                <td>{{$_request->id}}</td>
                <td>{{$_request->email}}</td>
                <td>{{$_request->waste_type}}</td>
                <td>{{$_request->quantity}}</td>
                <td>{{$_request->status}}</td>

            </tr>
        @endforeach
    </table>
</body>
</html>
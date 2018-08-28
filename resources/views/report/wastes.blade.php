<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>SWIMS</title>
    {{--<link rel="stylesheet" href="{{asset("pdf/style.css")}}" media="all" />--}}
</head>
<body>
<h3>SWIMS WASTE REPORT</h3>
    <table border="1" cellspacing="0" width="100%" cellpadding="1">
        <thead>
        <tr>
            <th>Zone</th>
            <th>Agent Collected</th>
            <th>Date</th>
            <th>Day</th>
            <th>Time</th>
            <th>Resident picked from</th>
            <th>Quantity</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $companywastes as $companywaste)
            <tr>
                <td>{{$companywaste->zone->name}}</td>
                <td>{{$companywaste->agent_id}}</td>
                <td>{{$companywaste->date}}</td>
                <td>{{$companywaste->day_name}}</td>
                <td>{{$companywaste->company_id}}</td>
                <td>{{$companywaste->created_at}}</td>
                <td>{{$companywaste->resident_id}}</td>
                <td>{{$companywaste->quantity}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
<br>
<br>
<br>
<br>
<br>
    <table border="1" cellspacing="0" width="100%" cellpadding="1">
        <thead>
        <tr>
            <th>Zone</th>
            <th>Agent ID Collected</th>
            <th>Date</th>
            <th>Day</th>
            <th>Time</th>
            <th>Resident  ID picked from</th>
            <th>Email</th>
            <th>Quantity</th>
        </tr>


        </thead>
        <tbody>
        @foreach( $residentwastes as $residentwaste)
            <tr>
                <td>{{$residentwaste->zone->name}}</td>
                <td>{{$residentwaste->agent_id}}</td>
                <td>{{$residentwaste->date}}</td>
                <td>{{$residentwaste->day_name}}</td>
                <td>{{$residentwaste->created_at}}</td>
                <td>{{$residentwaste->resident_id}}</td>
                <td>{{$residentwaste->user->email}}</td>
                <td>{{$residentwaste->quantity}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
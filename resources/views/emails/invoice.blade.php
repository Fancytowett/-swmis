<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Top Oil</title>
    <link rel="stylesheet" href="{{asset("pdf/style.css")}}" media="all" />
</head>
<body>
<div class=" header clearfix">
    <div id="logo">
        <img src="{{asset("pdf/logo.png")}}">
    </div>
    <div id="company">
        <h2 class="name">Top Oil</h2>
        <div>P. O. Box 3405 - 3400,Siaya</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:">company@example.com</a></div>
    </div>
</div>
<div id="details" class="clearfix">
    <div id="client">
        <div class="to">ENTRY By:</div>
        <h2 class="name">{{$wrequest->recycler->user->name}}</h2>
        <div class="address">796 Silver Harbour, TX 79273, US</div>
        <div class="email"><a href="mailto:">email</a></div>
    </div>
    <div id="invoice" class="clearfix">
        <h1>ENTRY #344</h1>
        <div class="date">Date of Report: </div>
        <div class="date">Print Date: {{\Carbon\Carbon::now()->toDateTimeString()}}</div>
    </div>
</div>

<table border="0" cellspacing="0" cellpadding="0">
    <thead>
    <tr>
        <th class="no">#</th>
        <th class="desc">DESCRIPTION</th>
        <th class="unit">UNIT PRICE</th>
        <th class="qty">QUANTITY</th>
        <th class="total">TOTAL</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="no">01</td>
        <td class="desc">
            <h3>{{$wrequest->type_name}}</h3>
            Recyclebale Products o
        </td>
        <td class="unit">KSh. 100.00</td>
        <td class="qty">{{$wrequest->quantity}} KGs</td>
        <td class="total">KSh. {{$wrequest->quantity * 100}}</td>
    </tr>


    </tbody>
    <tfoot>
    <tr>
        <td colspan="2"></td>
        <td colspan="2">SUBTOTAL</td>
        <td>KSh. {{$wrequest->quantity * 100}}</td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td colspan="2">TAX 0%</td>
        <td>0.00</td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td colspan="2">GRAND TOTAL</td>
        <td>KSh. {{$wrequest->quantity * 100}}</td>
    </tr>
    </tfoot>
</table>

<div id="thanks">Thank you!</div>

<div class="footer">
    Report was created on a computer and is valid without the signature and seal.
</div>
</body>
</html>
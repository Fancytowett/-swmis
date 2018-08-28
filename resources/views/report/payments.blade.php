<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>SWIMS</title>
    {{--<link rel="stylesheet" href="{{asset("pdf/style.css")}}" media="all" />--}}
</head>
<body>
<h3>SWIMS PAYMENT RECORDS
<table border="1" cellspacing="0" width="100%" cellpadding="1">
    <thead>
    <tr>
        {{--<th>USER_ID</th>--}}
        <th>Trans amount</th>
        <th>Bill_ref_no</th>
        {{--<th>TRANSACTION_TYPE</th>--}}
        {{--<th>TRANSACTION_ID</th>--}}
        <th>Transaction time</th>
        <th>Client no.</th>
        {{--<th>Invoice_no</th>--}}
        {{--<th>ORG_ACCOUNT_BALANCE</th>--}}
        {{--<th>THIRD PARTY TRANSACTION ID</th>--}}
        <th>Customer_no</th>
        <th>Customer_name</th>


    </tr>
    </thead>
    <tbody>

    @foreach($payments as $payment)
        <tr>
            {{--<td>{{$payment->user_id}}</td>--}}
            <td>{{$payment->trans_amount}}</td>
            <td>{{$payment->bill_ref_number}}</td>
            {{--<td>{{$payment->trans_type}}</td>--}}
            {{--<td>{{$payment->trans_id}}</td>--}}
            <td>{{$payment->created_at}}</td>
            <td>{{$payment->business_short_code}}</td>
            {{--<td>{{$payment->invoice_no}}</td>--}}
            {{--<td>{{$payment->org_account_bal}}</td>--}}
            {{--<td>{{$payment->third_party_trans_id}}</td>--}}
            <td>{{$payment->msisdn}}</td>
            <td>{{$payment->kyc_name}}</td>

        </tr>
    @endforeach

    </tbody>
</table>
</body>
</html>
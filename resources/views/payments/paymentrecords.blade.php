@extends('layouts.app')
@section ('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                       <h3> Payments</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-responsive table-hover table-striped">
                            <thead>
                            <tr>
                                {{--<th>USER_ID</th>--}}
                                <th>Trans amount</th>
                                <th>Bill_ref_no</th>
                                {{--<th>TRANSACTION_TYPE</th>--}}
                                {{--<th>TRANSACTION_ID</th>--}}
                                <th>Transaction time</th>
                                <th>Client no.</th>
                                <th>Invoice_no</th>
                                {{--<th>ORG_ACCOUNT_BALANCE</th>--}}
                                {{--<th>THIRD PARTY TRANSACTION ID</th>--}}
                                <th>Customer_no</th>
                                <th>Customer_name</th>
                                <th>STATUS</th>

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
                                   <td>{{$payment->invoice_no}}</td>
                                   {{--<td>{{$payment->org_account_bal}}</td>--}}
                                   {{--<td>{{$payment->third_party_trans_id}}</td>--}}
                                   <td>{{$payment->msisdn}}</td>
                                   <td>{{$payment->kyc_name}}</td>
                                   <td>{{$payment->status}}</td>
                                   </tr>
                               @endforeach

                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection

@section ('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('adminnav')
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="font-weight: bolder;"> Payments  <p style="float: right;font-weight:bolder">   TOTAL:Ksh {{\App\PaymentConfirmation::all()->sum('trans_amount')}}</p>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-responsive table-hover table-striped" id="datatable">
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
@section('after-scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();

        });
    </script>
@endsection
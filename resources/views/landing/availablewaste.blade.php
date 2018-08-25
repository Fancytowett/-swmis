@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 style="text-align: center;">Zones waste Available Report lists</h3>
        <a href="{{url('/recyclerrequestwaste')}}" class="btn btn-primary btn-xs">Request for Waste</a>
    </div>
    <div class="panel-body">
        <table class="table table-striped  table-responsive table-hover" id="datatable">
            <thead>
            <tr>
                <th>Date</th>
                <th>Day</th>
                <th>Time</th>
                <th>Zone</th>
                <th>Waste Type</th>
                <th>Quantity</th>

            </tr>
            </thead>
            @foreach($wastes as $waste)
            <tr>

                    <td>{{$waste->date}}</td>
                    <td>{{$waste->day_name}}</td>
                    <td>{{$waste->created_at}}</td>
                    <td>{{$waste->zone->name}}</td>
                    <td>{{$waste->waste_type_name}}</td>
                    <td>{{$waste->quantity}}</td>
            </tr>
            @endforeach

        </table>

    </div>
</div>
@section('after-scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();

        });
    </script>
@endsection
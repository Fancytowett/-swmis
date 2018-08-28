@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('landing.recyclernav')
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3>Request for Recyclable waste</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{url('/recyclerrequestwastesave')}}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="email">Email</label>
                                <select name="email" class="form-control">
                                    <option value="{{$recycler->user->email}}">{{$recycler->user->email}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="waste_type">Waste Type</label>
                                <select name="waste_type" class="form-control">
                                    <option value="1">metallic waste</option>
                                    <option value="2">Plastics</option>
                                    <option value="3">electronic-waste</option>
                                    <option value="4">other general recyclable waste</option>
                                    <option value="5">disposable waste</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" name="quantity" placeholder="Enter quantity of waste to request" required >
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Request" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection






@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include("adminnav")
            </div>
            <div class="col-md-7 col-md-offset-1">

                <a href="{{url('/home')}}"><button class="btn btn-primary btn-xs"style="float:left;"><span class="glyphicon-arrow-left">BACK</span></button></a><br>

               <div class="panel panel-default">
                   <form role="form" method="post" action="{{url('/zones/save')}}">
                       <div class="panel-body">
                           {!! csrf_field() !!}
                           <div class="form-group">
                               <label for="name">Name:</label>
                               <input type="text" class="form-control" name="zone_name" id="name" placeholder="Enter Zone name" required>
                           </div>
                           <input type="submit" class="btn btn-primary btn-xs pull-right" value="Register" name="submit">
                       </div>
                   </form>
               </div>
            </div>
        </div>
    </div>
    @endsection
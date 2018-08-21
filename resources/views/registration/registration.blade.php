@extends('layouts.app')
@section('content')

     <div class="container-fluid">
         <div class="row">
             <div class="col-md-6 col-md-offset-3">
                 <div class="card">
                     <div class="card-header">
                         REGISTER AS A:
                     </div>
                     <div class="card-body">
                         <ul class="nav nav-tabs">
                             <li class="active"><a href="{{url('/resident')}}" style="color: blue">Resident</a></li>
                             <li><a href="{{url('/company')}}" style="color:blue">Business</a></li>
                             <li><a href="{{url('/recycler')}}" style="color:blue">Recycler</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
@endsection
@section('after-scripts')

    @endsection

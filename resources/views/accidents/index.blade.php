@extends('layouts.app')

@section('title','Accidents - '.config('app.name'))
@section('header','Accidents Quotes')
@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{{ route('index') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
	  <li class="active"> Accidents </li>
	</ol>
@endsection
@section('content')
<!-- Main content -->
	<div class="content">
	  <!-- Info boxes -->
	 	<div class="row">
 			<div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{ count($accidents) }}</h3>
            <p>Accident Quotes</p>
          </div>
          <div class="icon">
            <i class="fa fa-wheelchair"></i>
          </div>
        </div>
      </div>
	 	</div>

		<div class="row">
			<div class="col-md-12">
		 		<div class="box box-warning">
		      <div class="box-header with-border">
		        <h3 class="box-title"><i class="fa fa-wheelchair"></i> Accidents</h3>
		      </div>
		      <div class="box-body">
						<table class="table table-bordered table-condensed table-hover data-table">
							<thead style="background-color: skyblue">
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Name</th>
									<th class="text-center">Vehicle registration</th>
									<th class="text-center">Birthdate</th>
									<th class="text-center">House number name</th>
									<th class="text-center">First line address</th>
									<th class="text-center">Postcode</th>
									<th class="text-center">Phone</th>
									<th class="text-center">Acción</th>
								</tr>
							</thead>
						@php $i = 1; @endphp
						@foreach($accidents as $a)
						<tbody>
							<tr>
							  <td class="text-center">{{$i}}</td>
								<td class="text-center">{{$a->title}} {{$a->first_name}} {{$a->sur_name}}</td>
								<td class="text-center">{{$a->vehicle_registration}}</td>
								<td class="text-center">{{$a->birthdate}}</td>
								<td class="text-center">{{$a->house_number_name}}</td>
								<td class="text-center">{{$a->first_line_address}}</td>
								<td class="text-center">{{$a->postcode}}</td>
								<td class="text-center">{{$a->phone}}</td>
								<td class="text-center">
									<a href="{{url('admin/accidents/'.$a->id_accidents_management.'')}}" class="btn btn-success btn-flat"><i class="fa fa-search "></i></a>
								</td>
							</tr>
						</tbody>
					@php
						$i++;
					@endphp
					@endforeach
				</table>
			</div>
		   </div>
		 	
		  </div>
		</div>
	</div>
</div>
@stop

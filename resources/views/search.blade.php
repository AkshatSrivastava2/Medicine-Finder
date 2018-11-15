@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Search Result
				</div>
				<div class="card-body">
					@if($count==0)
						<h4>No Data Available</h4>
					@endif
					@if($count>0)
						<table class="table table-hover">
							<thead>
                                <tr>
                                    <th>
                                        Name Of Medicine
                                    </th>
                                    <th>
                                        Quantity available 
                                    </th>
                                    <th>
                                        Price of Medicine
                                    </th>
                                    <th>
                                        Potency Of Medicine Available  
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
							@for ($i = 0; $i < $count; $i++)
							    <tr>
                                    <td>
                                        {{ $result[$i]->name }}
                                    </td>
                                    <td>
                                        {{ $result[$i]->quantity }}
                                    </td>
                                    <td>
                                        {{ $result[$i]->price }}
                                    </td>
                                    <td>
                                        {{ $result[$i]->potency }}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary">
                                        <a href="/show/{{ $result[$i]->id }}" style="color: white;">Edit Details</a>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                        <a href="/delete/{{ $result[$i]->id }}" style="color: white;">
                                        Delete Medicine 
                                        </a>    
                                        </button>
                                    </td>
                                </tr>
							@endfor
							</tbody>
						</table>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Medicines
                </div>

                <div class="card-body">
                	<form method="POST" class="form-group" action="/update/{{ $medicine->id }}">
                		@csrf
                        
                        <label for="medicine_quantity">Medicine Quantity :</label>
                        <input type="number" min="0" max="10000" class="form-control" name="medicine_quantity" value="{{ $medicine->quantity }}">
                        <label for="medicine_price">Medicine Price :</label>
                        <input type="text" class="form-control" name="medicine_price" value="{{ $medicine->price }}">
                        <br>
                        <button type="submit" class="btn btn-success">Update</button>
                	</form>
                    <br>
                	<span>
	                @if ($errors->any())
	                    <div class="alert alert-danger">
	                        <ul>
	                            @foreach ($errors->all() as $error)
	                                <li>{{ $error }}</li>
	                            @endforeach
	                        </ul>
	                    </div>
	                @endif
	                </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
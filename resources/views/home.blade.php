@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    List of Medicines
                    <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#addModal">
                        Add Medicine
                    </button>
                    
                    <form method="GET" action="/search">
                        @csrf
                        <input type="text" name="search">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>

                <div class="card-body">
                    @if($count==0)
                    <div class="card-text">
                        No Medicines available.
                    </div>
                    @endif
                    @if($count!=0)
                    <div class="card-text">
                        <table class="table">
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

                                @foreach($medicines as $medicine)
                                <tr>
                                    <td>
                                        {{ $medicine->name }}
                                    </td>
                                    <td>
                                        {{ $medicine->quantity }}
                                    </td>
                                    <td>
                                        {{ $medicine->price }}
                                    </td>
                                    <td>
                                        {{ $medicine->potency }}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary">
                                            <a href="/show/{{ $medicine->id }}" style="color: white;">Edit Details</a>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                        <a href="/delete/{{$medicine->id}}" style="color: white;">
                                        Delete Medicine 
                                        </a>    
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <!-- Add Modal -->
                    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModelLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="addModelLabel">Add Medicine</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form method="POST" class="form-group" action="/add">
                          <div class="modal-body">
                                @csrf
                                <label for="medicine_name">Medicine Name :</label>
                                <input type="text" class="form-control" name="medicine_name">
                                <label for="medicine_quantity">Medicine Quantity :</label>
                                <input type="number" min="0" max="10000" class="form-control" name="medicine_quantity">
                                <label for="medicine_price">Medicine Price :</label>
                                <input type="text" class="form-control" name="medicine_price">
                                <label for="medicine_potency">Medicine Potency :</label>
                                <input type="text" class="form-control" name="medicine_potency">
                        
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Add</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
                @if($count>=15)
                <div class="card-footer">
                    {{ $medicines->links() }}
                </div>
                @endif
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

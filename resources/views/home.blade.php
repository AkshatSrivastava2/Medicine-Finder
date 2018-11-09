@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Medicines</div>

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
                                            <button class="btn btn-primary">
                                                Edit Details
                                            </button>
                                            <button class="btn btn-danger">
                                                Delete Medicine
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

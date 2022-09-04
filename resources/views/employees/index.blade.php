@extends('employees.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 pt-5 mt-5">
            <div class="card">
           <div class="card-header">
            Image upload and display
       </div>

       <div class="card-body">
        <a href="{{ url('/employee/create')}}" class="btn btn-info" title="">Add New</a>
        <br/>   <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
               @foreach($employees as $item)
               <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->mobile}}</td>
                    <td>
                        <img src="{{ asset($item->photo) }}" width="50" height="50" class="img-responsive"/>
                    </td>
               </tr>
               @endforeach
                </tbody>

            </table>
        </div>
       </div>
            </div>
        </div>
    </div>
</div>

@endsection
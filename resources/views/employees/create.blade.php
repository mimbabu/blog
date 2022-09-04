@extends('employees.layout')
@section('content')

<div class="card"  style="margin:20px;">
<div class="card-header">Create New Employee</div>
<div class="card-body">
    <form action="{{ url('employee') }}" method="POST" enctype="multipart/form-data">
   @csrf
 <label>Name</label>
 <input type="text" name="name" class="form-control"><br/>

 <label>Address</label>
 <input type="text" name ="address" class="form-control"><br/>

 <label>Mobile</label>
 <input type="text"  name="mobile" class="form-control"><br/>

 <input type="file" name="photo" class="form-control"><br/>

 <input type="submit" value="Save" class="btn btn-danger"><br>
    </form>
</div>
</div>


@stop
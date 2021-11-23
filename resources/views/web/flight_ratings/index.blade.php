@extends('layouts.web')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h3 align="center">All FlightRatings</h3><br>
        @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif<br>
        <div align="right">
            <a href="{{route('flight_ratings-create')}}" class="btn btn-primary">Add New</a>
        </div><br>
        <table class="table table-bordered table-responsive">
            <tr>
                <th>User Id</th>
                <th>Flight Name</th>
                <th>Title</th>
                <th>Description</th>
                <th>Rate</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($flight_ratings as $row)
            <tr>
                <td>{{$row['user_id']}}</td>
                <td>{{$row['flight_name']}}</td>
                <td>{{$row['title']}}</td>
                <td>{{$row['description']}}</td>
                <td>{{$row['rate']}}</td>
                <td><a href="{{route('flight_ratings-edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form method="post" id="delete_form{{$row['id']}}" action="{{route('flight_ratings-delete',$row['id'])}}">
                        @csrf
                        <input type="hidden" name="_method" value="Delete" />
                        <input type="hidden" name="id" value="{{$row['id']}}" />
                    </form>
                    <a href="#" class="btn btn-danger" onclick="delete_fun({{$row['id']}})">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<script>
    function delete_fun(id) {
        if (confirm('Are you sure')) {
            document.getElementById("delete_form" + id).submit();
        }
    }
</script>
@endsection
@extends('includes.master')


@section('content')

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}

tr:hover {background-color: #D6EEEE;}
</style>
</head>
<body>

<div class="container">
<h2>Contacts Table</h2>
<table class="table">
  <thead>
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
       <tr>
         <td>{{$user->id}} </td>
         <td>{{$user->fname}} </td>
         <td>{{$user->lname}} </td>
         <td>{{$user->email}} </td>
         <td>{{$user->phonenumber}} </td>
         <td><a class="btn btn-info" href="{{route('viewuser', $user->id)}}">Edit/Delete</a>&nbsp;
        </tr>
        @endforeach
        </tbody> 
</table>
<a class="btn btn-info" href="{{route('createUser')}}">Add new User</a>
</div>
</body>
</html>

    {{$users->links()}}

@endsection
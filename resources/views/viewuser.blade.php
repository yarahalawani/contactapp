@extends('includes.master')
@include('includes.validation')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        .container {
  width: 500px;
  clear: both;
}

.container input {
  width: 100%;
  clear: both;
}
    </style>
</head>            
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <h2 class="mt-5">{{$user->fname}} 
                        {{$user->lname}}</h2>
                    <h2 class="mt-5">Update Information </h2>
                    <div class="container">
                        <form action="{{route('updateuser', $user->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" name="fname"  value="{{$user->fname}}" required >
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" name="lname"  value="{{$user->lname}}" required >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email"  value="{{$user->email}}"  required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phonenumber" value="{{$user->phonenumber}}" required >                          
                        </div>
                        <input type="submit" name="add" class="btn btn-primary" value="Save Change">
                    </form>  <br/>
</div>
                    <a class="btn btn-info" href="{{route('showusers')}}">See table</a>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>         

<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Delete User </h2>
                    <div class="container">
                           <form method="post" action="{{route('deleteuser', $user->id)}}">
                              @csrf
                              <div class="form-group">
                            <label>User Id </label>
                            <input type="text" name="userid"  placeholder="Enter User ID to delete" required >
                        </div>
                        <button type="submit" class="btn btn-primary" >Delete User</button>
                     </form> 
</div>
                  </div>
            </div>        
        </div>
    </div>        
@endsection

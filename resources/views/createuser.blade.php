@extends('includes.master')
@section('content')
@include('includes.validation')
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
                    <h2 class="mt-5">Contact Information </h2>
					     <p> Please fill in your information </p>
                         <div class="container">
                        <form action="{{route('createUser')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>First name  </label>
                            <input type="text" name="fname" placeholder="Enter First Name" required >
                        </div>
                        <br />
                        <div class="form-group">
                            <label>Last name  </label>
                            <input type="text" name="lname" placeholder="Enter Last Name" required >
                        </div>
                        <br />
                        <div class="form-group">
                            <label>Email      </label>
                            <input type="text" name="email" placeholder="Enter Email"   required>
                        </div>
                        <br />
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phonenumber" placeholder="Enter Phone NUmber" required >                          
                        </div>
                        <br />
                        <input type="submit" name="add" class="btn btn-primary" value="Create User">
                  </form>
</div>
                  <br/>
                  <a class="btn btn-info" href="{{route('showusers')}}">See table</a>
                </div>
            </div>        
        </div>
    </div>
                     
   

</body>
</html>
@endsection


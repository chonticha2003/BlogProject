<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('master')

    @section('title','Login Page');

    @section('content')
 <h1>Login</h1>
 <form action=" {{url('login')}} "method="post"
 @csrf

 <div class="mb-3">
    <label for ="exampleInputEmail1">Email address</label>
  <input type="text"class="form-control"id="email"value="{{old ('email')}}">
 </div>
 <div class="mb-3">
    <label for ="exampleInputPassword1">Password</label>
    <input type="password"class="form-control"id="password"name="password">
   </div>
   <button type="submit"class="btn btn-primary">Login</button>
   </form>
   @endsection
</body>
</html>

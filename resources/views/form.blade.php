<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form action="{{url('/')}}/register" method="post">
    @csrf
<div class="container mt-3">
  <h1 class="text-center">Registration</h1>
  <x-input type="text" name="name" label="Name"/>
  <x-input type="email" name="email" label="Email"/>
  <x-input type="password" name="password" label="Password"/>
  <x-input type="password_confirmed" name="" label="Confirm Password"/>
  
  <!-- <div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('name')}}"/>
    <span class="text-danger">
        @error('name')
            {{$message}}
        @enderror
    </span>
  </div> -->
  

  <!-- <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('email')}}"/>
   
    <span class="text-danger">
        @error('email')
            {{$message}}
        @enderror
    </span>
  </div> -->
<!-- 
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('password')}}"/>
    
    <span class="text-danger">
        @error('password')
            {{$message}}
        @enderror
    </span>
</div> -->

  <!-- <div class="form-group">
    <label for="">Confirm Password</label>
    <input type="password" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('confirm_password')}}"/>
    
    <span class="text-danger">
        @error('password_confirmation')
            {{$message}}
        @enderror
    </span>
</div> -->

  <button class="btn btn-primary mt-3">Submit</button>
</div>
</form>

</body>
</html>

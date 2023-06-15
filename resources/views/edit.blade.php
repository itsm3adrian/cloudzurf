<!doctype html>
<html lang="en">
  <head>
    <title>Register Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{url('/update/'.$user->id)}}" method="post">
      @csrf
    <div class="container">
        <h1 class="text-center">Update Page</h1>
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="Username" id="" class="form-control" placeholder="" value="{{$user->Username}}" aria-describedby="helpId" value= "{{old('Username')}}">
          <span class="text-danger">
            @error('Username')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" id="" class="form-control" placeholder="" value="{{$user->Password}}" aria-describedby="helpId" >
          <span class="text-danger">
            @error('password')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$user->Email}}">
          <span class="text-danger">
            @error('email')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">Mobile</label>
          <input type="text" name="mobile" id="" class="form-control" placeholder=""  value="{{$user->Mobile}}">
          <span class="text-danger">
            @error('mobile')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">Gender</label>
          <select name="gender" id="" class="form-control" value="{{$user->Gender}}">
            <option value="select">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          <span class="text-danger">
            @error('gender')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="">City</label>
          <input type="text" name="city" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$user->City}}">
          <span class="text-danger">
            @error('city')
                {{$message}}
            @enderror
          </span>
        </div>
        <button class="btn btn-primary">Update</button>
    </div>
    </form>
</body>
</html>
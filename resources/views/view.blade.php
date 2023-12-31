<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>Action</th>
                    <th><a href="{{route('register.load')}}"><button class="btn btn-primary">Add<button></a></th>
                </tr>
                
            </thead>
            
            <tbody>
            @foreach($user as $list)
              <tr>
                  <td>{{$list->Username}}</td>
                  <td>{{$list->Password}}</td>
                  <td>{{$list->Email}}</td>
                  <td>{{$list->Mobile}}</td>
                  <td>{{$list->Gender}}</td>
                  <td>{{$list->City}}</td>
                  <td>
                      <a href="{{url('/edit')}}/{{$list->id}}"><button class="btn btn-primary">Edit</button></a>
                      <a href="{{url('/delete')}}/{{$list->id}}"><button class="btn btn-danger delete-btn">Delete</button></a>
                  </td>
              </tr>
            @endforeach

            </tbody>
        </table>
      </div>
    

  </body>
</html>
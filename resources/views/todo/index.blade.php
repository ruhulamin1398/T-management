<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>



    <div class="container mt-5">
        <div class="row">


            <div class="card" > 
                <div class="card-body"> 
                    <form action="{{route('todos.store')}}" method="post">
                        @csrf


                        <div class="row g-3">
                            <div class="col-5">
                                <input type="text" class="form-control" name="title"  aria-label="First name">
                            </div>
                            <div class="col-6">
                                <input type="text" name="des" class="form-control"  aria-label="Last name">
                            </div>
                            <div class="col-1">
                            <button type="submit" class="btn btn-outline-success  ">submit</button>
                            </div>
                        </div>
                       


                    </form>
                </div>
            </div>






        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">


            <table class="table table-sm">
  <thead>
 
  </thead>
  <tbody>
    @php($i=1)
    @foreach($todos as $todo)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$todo->title}}</td>
      <td>{{$todo->des}}</td>
    </tr>
  @endforeach
  </tbody>
</table>


            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
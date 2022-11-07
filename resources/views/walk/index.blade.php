<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Walk Challenge!</title>


    <style>
        .console {
            font-family: Courier;
            color: #cccccc;
            background: #000000;
            border: 3px double #cccccc;
            padding: 10px;
            height: 80vh;
            font-size: 14px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    

@php 

$completed= 0;
foreach($walks as $walk){

$completed += $walk->km;
    }
@endphp

    <div class="container mt-5 p-2">
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <h5 class="card-header bg-dark text-light">Mission 100 KM</h5>

                    <div class="card-body p-4 m-2 ">



                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="{{$completed}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$completed}}%">{{$completed}}%({{$completed}}km/100km)</div>
                        </div>


                    </div>
                </div>





            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">


            <div class="card">
                <div class="card-body">
                    <form action="{{route('walks.store')}}" method="post">
                        @csrf


                        <div class="row g-3">
                            <div class="col-12 col-md-5">
                                <input type="date" class="form-control" name="date" aria-label="Date">
                            </div>
                            <div class=" col-10 col-md-5 ">
                                <input type="number" value="0" name="km" class="form-control" aria-label="km">
                            </div>
                            <div class="col-2">
                                KM
                            </div>
                            <div class="col-10 col-md-10">
                                <input type="text" class="form-control" name="comment" placeholder="comment" aria-label="Date">
                            </div>
                            <div class="col-2 col-md-1">
                                <button type="submit" class="btn btn-outline-success  ">+</button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>






        </div>
    </div>


    <div class="container console">
        <div class="row">





            @foreach($walks as $walk)
            <div class="col-1">
                #{{$walk->id}}
            </div>
            <div class="col-3">

                {{$walk->date}}

            </div>
            <div class="col-2">
                {{$walk->km}} KM
            </div>

            <div class="col-6">
                {{$walk->comment}}

            </div>




            @endforeach




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
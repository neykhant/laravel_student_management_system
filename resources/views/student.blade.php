<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Student Management System </title>
</head>

<body>

    @include('navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if($layout == 'index')
    <!-- @if(session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
    @endif -->
    <div class="container-fluid mt-4">
        <!-- <div class="container-fluid mt-4"> -->
            <div class="row ">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section class="col"></section>
            </div>
        <!-- </div> -->
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col">

                <!-- @if($errors->any)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error  }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif -->

                <div class="card mb-3">
                    <img src="https://www.unhcr.org/thumb1/5a1e75d74.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the information of the new student</h5>

                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">CNE</label>
                                <input type="text" name="cne" class="form-control" placeholder="Enter CNE">
                            </div>
                            <div class="form-group">
                                <label for="">first name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label for="">second name</label>
                                <input type="text" name="secondname" class="form-control" placeholder="Enter the last name">
                            </div>
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label for="">Speciality</label>
                                <input type="text" name="speciality" class="form-control" placeholder="Enter the speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>


            </section>
        </div>
    </div>
    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://www.unhcr.org/thumb1/5a1e75d74.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update information of student</h5>

                        <form action="{{ url('/update/'. $student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">CNE</label>
                                <input value="{{ $student->cne }}" type="text" name="cne" class="form-control" placeholder="Enter CNE">
                            </div>
                            <div class="form-group">
                                <label for="">first name</label>
                                <input value="{{ $student->firstName }}" type="text" name="firstname" class="form-control" placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label for="">second name</label>
                                <input value="{{ $student->secondName }}" type="text" name="secondname" class="form-control" placeholder="Enter the last name">
                            </div>
                            <div class="form-group">
                                <label for="">Age</label>
                                <input value="{{ $student->age }}" type="text" name="age" class="form-control" placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label for="">Speciality</label>
                                <input value="{{ $student->speciality }}" type="text" name="speciality" class="form-control" placeholder="Enter the speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>


            </section>
        </div>
    </div>
    @endif


    <footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
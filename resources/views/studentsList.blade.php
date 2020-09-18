<div class="card mb-3">
    <img src="https://kwiksurveys.com/wp-content/uploads/2019/04/education-surveys.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of Students</h5>
        <p class="card-text"> You can find here all the information about students in the system.</p>

        <div class="col">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col-1">CNE</th>
                        <th scope="col-1">First name</th>
                        <th scope="col">Second name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Speciality</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $students)
                    <tr>
                        <td>{{$students->cne }}</td>
                        <td>{{$students->firstName }}</td>
                        <td>{{$students->secondName }}</td>
                        <td>{{$students->age }}</td>
                        <td>{{$students->speciality }}</td>
                        <td>
                            <!-- <a href="" class="btn btn-sm btn-info">Show</a> -->
                            <a href="{{ url('/edit/'. $students->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form').submit();" class="btn btn-sm btn-danger">Delete</a>
                            <form id="delete-form" action="{{ url('/delete/'. $students->id ) }}" method="post" style="display: none;">
                                @csrf
                                @method('delete')
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
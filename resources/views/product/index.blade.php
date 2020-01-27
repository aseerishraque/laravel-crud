<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
{{--    <h1><a href="{{ route('employees.create')  }}">Add New Employee</a> </h1>--}}
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Category Name</th>
            <th scope="col">price</th>

            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data as $s)
            <tr>
                <th scope="row">{{ $s->id  }}</th>
                <td>{{ $s->title  }}</td>
                <td>{{ $s->name  }}</td>
                <td>{{ $s->price  }}</td>

                <td>
{{--                    <a href="{{ URL::to('employees/'.$s->id.'/edit')  }}" >Edit</a> |--}}
                <!-- <a onclick="confirm('Are you sure???')" href="{{ URL::to('/delete/'.$s->id)  }}" > Delete</a> -->
                    <!-- Button trigger modal -->
                    <a href="#{{ $s->id }}" data-toggle="modal" data-target="#exampleModal">
                        Delete
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Warning !!!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Delete The Student ?
                                </div>
                                <div class="modal-footer">

{{--                                    <form action="{{ URL::to('employees/'.$s->id)  }}" method="post">--}}
{{--                                        @method('DELETE')--}}
{{--                                        @csrf--}}
{{--                                        <button class="btn btn-danger" > Delete</button>--}}
{{--                                    </form>--}}
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                </div>
                            </div>
                        </div>
                    </div>



                </td>
            </tr>

        @endforeach



        </tbody>
    </table>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
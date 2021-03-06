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
    <h1>Add New Student </h1>
    <form method="post" action="{{ URL::to('employees/'.$data->id)  }}">
        @method('PUT')
        @csrf
        <div class="form-group row">
            <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input value="{{ $data->name  }}" name="name" type="text" class="form-control" id="inputName3" placeholder="Name">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input value="{{ $data->email  }}" name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Birth Date</label>
            <div class="col-sm-10">
                <input value="{{ $data->birth_date  }}" name="birth_date" type="date" class="form-control" id="inputDate3" >
            </div>
        </div>

        <div class="form-group row">
            <label for="inputSalary3" class="col-sm-2 col-form-label">Salary</label>
            <div class="col-sm-10">
                <input value="{{ $data->salary  }}" name="salary" type="number" class="form-control" id="inputSalary3" >
            </div>
        </div>

        <div class="form-group row">
            <label for="inputStatus3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input value="{{ $data->pass  }}" name="pass" type="text" class="form-control" id="inputPassword3" >
            </div>
        </div>



        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
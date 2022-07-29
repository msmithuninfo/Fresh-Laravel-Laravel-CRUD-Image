<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <td><a href="{{ url('students') }}">List</a></td>
        <form action="{{ url('update-student/'.$student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" value="{{ $student->name }}" required name="name" class="form-control" id="exampleInputEmail1">
            </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                <img src="{{ asset('uploads/students/'.$student->image) }}" width="70px" height="70px" alt="Image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>

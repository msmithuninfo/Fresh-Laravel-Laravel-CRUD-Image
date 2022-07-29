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
        <td><a href="{{ url('add-student') }}">Create</a></td>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $item)
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->address }}</td>
                
                <td>
                  <img src="{{ asset('uploads/students/'.$item->image) }}" with="50px" height="50px" alt="Image">
                </td>

                <td>
                  <a href="{{ url('edit-student/'.$item->id) }}">Edit</a>
                  <span>|</span>
                  <a href="{{ url('delete-student/'.$item->id) }}">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

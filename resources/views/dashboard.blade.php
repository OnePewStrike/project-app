<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4" style="margin-top: 20px;">
          <h4>Welcome to Dashboard</h4>
          <hr>
          <table class="table">
            <thead>
              <th>Name</th>
              <th>Username</th>
              <th>Action</th>
            </thead>
            <tbody>
              <tr>
                <td> {{ $data->name }}</td>
                <td> {{ $data->username }}</td>
                <td><a href="logout">logout</a></td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
</body>
</html>
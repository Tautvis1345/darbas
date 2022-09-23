<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
 </html>
 <table class="table">
  <thead class="thead-dark">
    <tr>
     
    </tr>
  </thead>
  
</table>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Best Airlines</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="">Airports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Countries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Airlines</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>




    <div class="container-fluid mt-3">
          <div class="text-center">
    <a href="https://nova.pixylt.com/airports/new" class="btn btn-danger">New airport</a><br>
    <form action="https://nova.pixylt.com/airports/search" method="get">
      <div class="mb-3">
        <select class="form-select" aria-label="Search by country" id="country" name="country">
          <option selected="">Search by country</option>
                    <option value="3">Italy</option>
                    <option value="4">Japan</option>
                    <option value="5">South Africa</option>
                    <option value="7">Russia</option>
                    <option value="8">Spain</option>
                    <option value="9">Norway</option>
                  </select>
        <button type="submit" class="btn btn-success">Search</button>
      </div>
    </form>
  </div>
  <hr>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Country</th>
        <th scope="col">Location</th>
        <th scope="col">Airlines</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
          <tr>
        <th><a href="https://nova.pixylt.com/airports/2">Fast Air</a></th>
        <td>Italy</td>
        <td>40.988416, 14.927189</td>
        <td>
          Italy Airline
          
        </td>
        <td>
          <a href="https://nova.pixylt.com/airports/2/newAirline" class="btn btn-success">Add airline</a>
          <a href="https://nova.pixylt.com/airports/2/removeAirline" class="btn btn-danger">Remove airline</a>
          <a href="https://nova.pixylt.com/airports/2/edit" class="btn btn-warning">Edit</a>
          <a href="https://nova.pixylt.com/airports/2/remove" class="btn btn-danger">Delete</a>
        </td>
      </tr>
          <tr>
        <th><a href="https://nova.pixylt.com/airports/4">Tokyo Air</a></th>
        <td>Japan</td>
        <td>35.651491, 139.607386</td>
        <td>
          Tokyo Airline
          
        </td>
        <td>
          <a href="https://nova.pixylt.com/airports/4/newAirline" class="btn btn-success">Add airline</a>
          <a href="https://nova.pixylt.com/airports/4/removeAirline" class="btn btn-danger">Remove airline</a>
          <a href="https://nova.pixylt.com/airports/4/edit" class="btn btn-warning">Edit</a>
          <a href="https://nova.pixylt.com/airports/4/remove" class="btn btn-danger">Delete</a>
        </td>
      </tr>
          <tr>
        <th><a href="https://nova.pixylt.com/airports/5">Yes Airport</a></th>
        <td>South Africa</td>
        <td>-32.901202, 23.649441</td>
        <td>
          Africa Airline
          
        </td>
        <td>
          <a href="https://nova.pixylt.com/airports/5/newAirline" class="btn btn-success">Add airline</a>
          <a href="https://nova.pixylt.com/airports/5/removeAirline" class="btn btn-danger">Remove airline</a>
          <a href="https://nova.pixylt.com/airports/5/edit" class="btn btn-warning">Edit</a>
          <a href="https://nova.pixylt.com/airports/5/remove" class="btn btn-danger">Delete</a>
        </td>
      </tr>
          <tr>
        <th><a href="https://nova.pixylt.com/airports/8">ONE Airport</a></th>
        <td>Russia</td>
        <td>55.995626, 55.714844</td>
        <td>
          Russia Airline
          
        </td>
        <td>
          <a href="https://nova.pixylt.com/airports/8/newAirline" class="btn btn-success">Add airline</a>
          <a href="https://nova.pixylt.com/airports/8/removeAirline" class="btn btn-danger">Remove airline</a>
          <a href="https://nova.pixylt.com/airports/8/edit" class="btn btn-warning">Edit</a>
          <a href="https://nova.pixylt.com/airports/8/remove" class="btn btn-danger">Delete</a>
        </td>
      </tr>
          <tr>
        <th><a href="https://nova.pixylt.com/airports/10">Spain Airport</a></th>
        <td>Spain</td>
        <td>40.626714, -5.492785</td>
        <td>
          Spain Airline
          
        </td>
        <td>
          <a href="https://nova.pixylt.com/airports/10/newAirline" class="btn btn-success">Add airline</a>
          <a href="https://nova.pixylt.com/airports/10/removeAirline" class="btn btn-danger">Remove airline</a>
          <a href="https://nova.pixylt.com/airports/10/edit" class="btn btn-warning">Edit</a>
          <a href="https://nova.pixylt.com/airports/10/remove" class="btn btn-danger">Delete</a>
        </td>
      </tr>
        </tbody>
  </table>
      </div>


</body>
</html>
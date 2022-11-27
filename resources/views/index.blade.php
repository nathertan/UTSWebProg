<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Giant Book Supplier</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <style>
    h1 {
      text-align: center;
    }

    .navbar {
      display: flex;
      justify-content: center;
      background: #F8F9FA;
    }
  </style>
</head>

<body>

  <h1>Giant Book Supplier</h1>
  <div class="navbar">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Romance</a></li>
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Comedy</a></li>
                <li><a class="dropdown-item" href="#">Adventure</a></li>
                <li><a class="dropdown-item" href="#">Fiction</a></li>
                <li><a class="dropdown-item" href="#">Magic</a></li>
                <li><a class="dropdown-item" href="#">Fantasy</a></li>
              </ul>
            <li class="nav-item">
              <a class="nav-link" href="/publisher">Publisher</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </div>






  <div class="row row-cols-1 row-cols-md-4 g-4 pt-5">
    @foreach ($book as $books)
    <div class="col">
      <div class="card text-center" style="width: 12rem;">
        <div display: flex; justify-content:center;>
          <img src="{{Storage::url('public/book_cover/'.$books->image)}}" alt="" width="100">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $books->title }}</h5>
          <p class="card-text">{{ $books->author }}</p>
          <a href="#" class="btn btn-primary">Details</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>



  <!-- @foreach ($book as $books)
    <tr>
      <td>{{ $books->title }}</td>
      <td>{{ $books->author }}</td>
      <td>{{ $books->year }}</td>
      <td>{{ $books->publisher->name }}</td>
      <td>{{ $books->synopsis }}</td>
      <td><img src="{{Storage::url('public/book_cover/'.$books->image)}}" alt="" width="100"></td>
    </tr>
    @endforeach -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
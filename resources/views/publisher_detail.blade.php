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
                            <a class="nav-link" aria-current="page" href="/#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($category as $category)
                                <li><a class="dropdown-item" href="/category/{{ $category->id }}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/publisher">Publisher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>

    </div>
    <div>
        <div>
            <h4>
                {{$publisher->name}}
            </h4>
        </div>
        <div>
            <img src="{{Storage::url('public/publisher_image/'.$publisher->image)}}" alt="" width="250">
        </div>
        <div>
            <div>Address: {{$publisher->address}}</div>
            <div>Phone: {{$publisher->phone}}</div>
            <div>Email: {{$publisher->email}}</div>
        </div>
    </div>

    <div>
        Books by {{$publisher->name}}:
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4 pt-5">
        @foreach ($publisher->book as $books)
        <div class="col">
            <div class="card text-center" style="width: 12rem;">
                <div display: flex; justify-content:center;>
                    <img src="{{Storage::url('public/book_cover/'.$books->image)}}" alt="" width="100">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $books->title }}</h5>
                    <p class="card-text">{{ $books->author }}</p>
                    <a href="books/{{ $books->id }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
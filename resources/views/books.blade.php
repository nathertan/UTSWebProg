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
                                @foreach($category as $category)
                                <li><a class="dropdown-item" href="/category/{{ $category->id }}">{{$category->name}}</a></li>
                                @endforeach
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

    </div>
    <div>
        <div>
            <h4>
                {{$book->title}}
            </h4>
        </div>
        <div>
            <img src="{{Storage::url('public/book_cover/'.$book->image)}}" alt="" width="250">
        </div>
        <div>
            <div>Category
                @for ($i = 0; $i < count($book->book_category); $i++)
                    {{ $book->book_category[$i]->category->name }}
                    @if($i < count($book->book_category) - 1)
                        ,
                        @endif
                        @endfor
            </div>
            <div>Author Name: {{$book->author}}</div>
            <div>Publisher: {{$book->publisher->name}}</div>
            <div>Release Year: {{$book->release_year}}</div>
            <div>synopsis: {{$book->synopsis}}</div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
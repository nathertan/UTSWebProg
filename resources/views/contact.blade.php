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
                            <a class="nav-link " href="/#">Home</a>
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
                            <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>

    <div>
        <h2>Store Address</h2>
        <div>2, Jl. Raya Kb. Jeruk No.27, RT.1/RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</div>
        <h3>Opening Hours</h3>
        <div>09.00 - 20.00</div>
        <h3>Contact Us!</h3>
        <div>Phone: 65461377</div>
        <div>Email:contact@giantbook.com</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>E-book page</title>
    <style>
    .local-font {
        font-family : serif,sans-serif;
      }
      @media(min-width: 768px){
        .news-input {
        width: 35%;
    }
}

    </style>
</head>
<body>
<section class="d-flex">
        <div>
            <img class="img-fluid" src="3fc40e3c1a39f8b31471a89547648c20.jpeg" alt="Haramaya University Library">
        </div>
    </section>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top border-bottom">
        <div class="container">
            <a href="#" class="navbar-brand"><img src="haremaya-log.png" alt="LOGO" id="theImage" width="30" height="30" class="bi" fill="currentColor" viewBox="0 0 16 16">
                <span class="text-warning"> HU </span>Library</a>
                <div class="text-light nav-item mx-3">
                <h4 class="m-2"><?php echo "welcome to" . "<span class='text-danger bg-light rounded pb-1 px-2 mx-2 text-center'> free e-book </span>". " "."page"; ?></h4>
                  </div>
                  <div class="input-group news-input m-2">
                             <input type="text" class="form-control"  placeholder="e-book...">
                             <button class="btn btn-primary" type="button">search</button>
                      </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a href="index.html">
                            <button type="button" class="btn btn-danger m-2 " >back to home</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 

    <!-- book shelf header -->
<section>
    <div class="text-larger local-font container bg-light text-center pt-5">
       <h2>
        <div class="text-primary">
        <i class="bi bi-book"></i>
        </div>
           E-Book Shelf
       </h2>
    </div>
</section>

<!-- shelf -->

<section>
  <div class="container p-2 bg-light">

        <div class="container">
          <div class="row border shadow-lg rounded bg-light mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>


        <div class="container">
          <div class="row border shadow-lg rounded bg-dark mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>


        <div class="container">
          <div class="row border shadow-lg rounded bg-light mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>


        <div class="container">
          <div class="row border shadow-lg rounded bg-dark mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="container">
          <div class="row border shadow-lg rounded bg-light mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>


        <div class="container">
          <div class="row border shadow-lg rounded bg-dark mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="container">
          <div class="row border shadow-lg rounded bg-light mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>


        <div class="container">
          <div class="row border shadow-lg rounded bg-dark mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="container">
          <div class="row border shadow-lg rounded bg-light mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>


        <div class="container">
          <div class="row border shadow-lg rounded bg-dark mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>

                <div class="container">
          <div class="row border shadow-lg rounded bg-light mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>


        <div class="container">
          <div class="row border shadow-lg rounded bg-dark mb-3">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 pt-5 p-3">
              <div class="card bg-light text-dark">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-book"></i>
                  </div>
                  <p class="card-text">
                    Book name :
                  </p>
                  <p class="card-text">
                    Author :  
                  </p>
                  <p class="card-text">
                    book number :
                  </p>
                  <a href="#" class="btn btn-primary">Read</a>
                  </div>
                  </div>
              </div>
          </div>
        </div>                     
    </div>     
</section>
<footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">
                Copyright &copy; 2022 Haramaya University students assignment.
            </p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="indicator bi bi-arrow-up-circle h1 text-warning"></i>
            </a>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"crossorigin="anonymous"></script>

</body>
</html>


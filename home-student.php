<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>student home page</title>
    <style>
    .local-font {
        font-family : serif,sans-serif;
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
                <div class="text-light nav-item mx-5 px-5">
                <h4 class="m-2"><?php echo "welcome to" . "<span class='text-danger bg-light rounded pb-1 px-2 mx-2 text-center'> Students' </span>". " "."page"; ?></h4>
                  </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary btn-md m-2" data-bs-toggle="modal" data-bs-target="#get-book-model">Get-book</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-danger m-2 " 
                        data-bs-toggle="modal" 
                        data-bs-target="#logout-model">logout</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 

<!-- log out model -->

<div class="modal fade" id="logout-model" aria-hidden="true" aria-labelledby="log out from student page" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="model-header">Log out</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <h5>Are you sure you want to log out?</h5>
        </div>
        <div class="modal-footer">
             
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">cancel</button>
            <a href="index.html">
               <button type="button" class="btn btn-primary">logout</button>
            </a>
        </div>
      </div>
    </div>
</div>

<!-- get book model -->

<div class="modal fade" id="get-book-model" aria-hidden="true" aria-labelledby="register-modalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
             <h5>choose <span class="text-primary">book</span>.</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="model-body container">
            <form p-5>
              <div class="mb-2">
                <label for="id-number" class="col-form-label">Enter book name:</label>
                <input type="text" class="form-control" id="book-name">
              </div>
              <div class="mb-2">
                <label for="password" class="col-form-label">Enter book number:</label>
                <input type="text" class="form-control" id="book-number">
              </div>
           </form>
          </div>
          <div class="modal-footer">
            <div>
                <button class="btn btn-primary">Get</button>
            </div>
          </div>             
      </div>
    </div>
</div>

<!-- book shelf -->

<section>
    <div class="text-larger local-font container bg-light text-center pt-5">
       <h2>
        <div class="text-primary">
        <i class="bi bi-book"></i>
        </div>
        Book Shelf
       </h2>
    </div>
</section>

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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                  <a href="#" class="btn btn-primary">Get</a>
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
                <i class="bi bi-arrow-up-circle h1 text-warning"></i>
            </a>
        </div>
    </footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"crossorigin="anonymous"></script>

</body>
</html>

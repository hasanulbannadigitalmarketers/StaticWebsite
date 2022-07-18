<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Hasanul Banna</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link me-5" href="{{url('/Home')}}" >Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5" href="{{url('/About')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5" href="{{url('/Contect_Us')}}">Contect_Us</a>
              </li>  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle me-5" href="#" role="button" data-bs-toggle="dropdown">Course</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{('/Web')}}">Web Devolopment</a></li>
                  <li><a class="dropdown-item" href="{{('/digital')}}">Digital Marketing</a></li>
                  <li><a class="dropdown-item" href="{{('/graphic')}}">Graphic Design</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>

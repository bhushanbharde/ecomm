<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(Session::has('user')){
    $total = ProductController::cartItem();
  }
?>

<nav class="navbar navbar-expand-lg navbar-light p-2" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Otders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cart({{$total}})</a>
        </li>

        @if (Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Session::get('user')['name']}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/logout">Logout</a>
            <a class="dropdown-item" href="#">My Profile</a>
          </div>
        </li>
        @else
        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        @endif

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-md-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
      
      
     
    </div>
  </nav>
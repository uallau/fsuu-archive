<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
<title>FSUU-Archive</title>
</head>
 
<body>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
body {
    font-family: 'Roboto', sans-serif;
}
.btn {
    padding: 14px 26px;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.btn-danger {
    background-color: #e34c43;
    border-color: #e34c43;
}
.banner-image{
    background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(100, 55, 0, 0.8)), url(img/banner-image-two.jpg);
    background-size: cover;
    background-position: center;
}
::placeholder {
font-size:14px;
font-weight:500;
}
.form-control {
    border-color: #ebebeb;
}
.form-control-lg {
    height: calc(1.6em + 1rem + 2px);
}
.aa{
line-height:28px;    
}
</style>
 
<div class="banner-image pb-5">
<nav class="navbar navbar-expand-lg navbar-dark py-3">
  <div class="container"> 
    <!--Logo Urios  -->
    <a class="navbar-brand font-weight-bold text-uppercase" href="{{ url('/') }}"><img style="width:30%;" src="https://storage.googleapis.com/www-static-academic-influence/school-logos/father-saturnino-urios-university" class="rounded float-left" alt="Responsive image"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto font-weight-bold">
            <!-- Authentication Links -->
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else  
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Log in</a>
                @endauth
                </div>
            @endif
        </ul>
    </div>

  </div>
</nav>


  <div class="container py-5">
    <div class="row py-5 align-items-center">
      <div class="col-12 text-center">
        <h5 class="display-4 mb-4 font-weight-bold text-white mt-5">A modular UI Kit for Bootstrap</h5>      
        <p class="h5 col-md-10 mx-auto pb-5 mb-5 text-white-50 aa">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nunc nisi, suscipit id dapibus sit amet, lacinia nec lorem. Aenean eget urna rutrumn.</p>       
        <div class="p-4 rounded shadow-lg border border-light" style="background-color:rgba(255,255,255,0.7)">
      <form>
  <div class="form-row">
    <div class="col-5">
      <input type="text" class="form-control form-control-lg shadow-sm" placeholder="Email">
    </div>
    <div class="col-5">
      <input type="text" class="form-control form-control-lg shadow-sm" placeholder="Password">
    </div>
    <div class="col-2">
       <button class="btn btn-danger btn-block shadow-sm" type="submit"><span class="d-md-inline-block d-none mr-2">Submit</span> <i class="lni lni-arrow-right"></i></button>
    </div>
  </div>
</form>
        </div>
      </div>      
    </div>
  </div>
</div>
 
<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
</body>
</html>
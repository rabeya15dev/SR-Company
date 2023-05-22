<!DOCTYPE html>
<html>
<head>
	<title>SR Company</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">SR Company</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="cc1.jpg" alt="Los Angeles" width="1550" height="600" >
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="cc4.jpg" alt="Chicago" width="1550" height="600">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="cc6.jpg" alt="New York" width="1550" height="600">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About us </h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="cc5.jpg" class="img-fluid aboutimg">
      </div>
<div class="col-lg-6 col-md-6 col-12" >
  <h2 class="display-5">This is all about SR Company</h2>
  <p class="py-9">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati unde ea necessitatibus est soluta, voluptatum blanditiis? Debitis nisi nesciunt distinctio mollitia rerum iste, ea, pariatur sint blanditiis iusto, eum facilis?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus qui id consectetur similique, pariatur, sequi quae, corrupti omnis et quidem iste praesentium possimus. Illum praesentium dolores officiis, consectetur error ipsam
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque tempore autem ab itaque omnis sed sapiente quia ratione tenetur doloremque perferendis libero aliquam modi, possimus laboriosam rerum aut aspernatur facere corrupti dolore repellendus ea atque obcaecati est. Corporis, provident doloru. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus corrupti necessitatibus reiciendis ducimus, obcaecati nulla nemo tempora incidunt temporibus earum? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi veritatis labore illo provident voluptas in, minima numquam consequuntur esse dolorem?
  </p>
  <a href="about.php" class="btn btn-primary">More details</a>
      </div>
   </div>
</div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"> Our Services </h2>
  </div>
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
  <img class="card-img-top" src="cc2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"> Beautiful Nature </h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
              </div>
           </div>
       </div> 

       <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
  <img class="card-img-top" src="cc2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"> Beautiful Nature </h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
              </div>
           </div>
       </div> 

       <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
  <img class="card-img-top" src="cc2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"> Beautiful Nature </h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
              </div>
           </div>
       </div> 
   </div>
 </div>

</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"> Our Gallery </h2>
  </div>
  <div class="container-fluid">
      <div class="row">
        
        <div class="col-lg-4 col-md-4 col-12"> 
           <img src="cc7.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12"> 
           <img src="cc7.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12"> 
           <img src="cc7.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12"> 
           <img src="cc7.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12"> 
           <img src="cc7.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12"> 
           <img src="cc7.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12"> 
           <img src="cc7.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12"> 
           <img src="cc7.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12"> 
           <img src="cc7.jpg" class="img-fluid pb-4">
        </div>

      </div>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/9wbNabuP6aM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/vp2yiZnjK0w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"> Any Massage For Us </h2>
  </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
       <div class="form-group">
         <label>Name</label>
         <input type="text" name="user" autocomplete="off" class="form-control">
       </div> 
        <div class="form-group">
         <label>Email </label>
         <input type="text" name="user" autocomplete="off" class="form-control">
       </div> 

       <div class="form-group">
         <label>Mobile</label>
         <input type="text" name="user" autocomplete="off" class="form-control">
       </div> 
       <div class="form-group">
         <label>Comment</label>
         <textarea class="form-control" name ="comment" >
         </textarea>
       </div> 
       <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   
    </div>

</section>


<footer>
  <p class="p-3 bg-dark text-white text-center">@SR Company 2023</p>


</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

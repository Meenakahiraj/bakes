<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  
  .navbar
  {
    background: #ffe6ff;
  }
  .navbar-toggler
  {
    border: none!important;
  }
  .nav-link
  {
    color: #e60000!important;
    font-weight:800;
    font-size: 20px;
  }

  .banner-img{
    width : 100%;
    height : 500px;
  }
  @media only screen and (max-width: 600px) {
    .bakes-hide{
      display:none;
    }
  }

  #slider 
  {
    width:100%;
  }
  .carousel-caption
  {
    top:50%;
    transform: translateY(-50%);
    bottom:initial!important;
  }
  .carousel-caption h2
  {
    color: #007bff;
    font-size:42px;
  }
  .d-block
  {
    width:1500px;
    height:600px;
  }

  .square{
    border: 1px solid black; // and all params
}
.square-blue {
    background-color: blue;
}
.square-green {
    background-color: green;
}
.square-purple {
    background-color: purple;
}
.square-red {
    background-color: red;
}


.box1 {
  background-color: lightblue;
  width: 300px;
  height: 350px;
  border: 15px solid pink;
  padding: 50px;
  margin: 20px;
}
.box2 {
  background-color: lightpink;
  width: 300px;
  height: 350px;
  border: 15px solid lightgreen;
  padding: 50px;
  margin: 20px;
}
.box3 {
  background-color: lightgreen;
  width: 300px;
  height: 350px;
  border: 15px solid lightblue;
  padding: 50px;
  margin: 20px;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("photographer.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


  </style>
</head>
<body style="background-color:#ffe6ff;">
  

  <div class="container">
  <div class="row">
  <nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxdtPhjfYWEloSA-yUZCdAEI_Udlt6W4GHsQ&usqp=CAU"  class="src" width=80px></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"><h2><p style="font-family:Showcard Gothic;color:#e60099"><b>EAT ME!</b></p></h2></a>
        </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"><p style="color:#ff66cc"><b>Home</b></p></a>
        </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/viewproducts"><p style="color:#ff66cc"><b>Products</b></p></a>
        </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/login"><p style="color:#ff66cc"><b>Login</b></p></a>
        </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/about"><p style="color:#ff66cc"><b>About us</b></p></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  </div>
  </div>

<div class="row">
<div class="col col-12 col-sm 6 col-md 6 col-lg 6 col-xl 12 col-xxl 12"><center style="width:100%">
<img src="https://images.unsplash.com/photo-1552689486-f6773047d19f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MjJ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Cinque Terre" class="banner-img"  height="500">
<div class="centered bakes-hide"><h1><b><p style="font-family:Bauhaus 93;color:#e600ac">Bakes 4 U</p></b></h1>
<h4><b><i><p style="font-family:Segoe Print;color:#e600ac">Order Eat Rpeat</p></i></b></h4>
<h6><b><i><p style="font-family:Segoe Print;color:#e600ac">Feel the Royal experience with Evry Bite</p></i></b></h6>
</div>
<center>
</div><div><br><br><br><br><br>
<div class="row"><div class="col col-12 col-sm-4 col-md-4">
<center>
<div class="box1"><h4><p style="font-family:Segoe Print;"><b>WE LOVE THE ART OF MAKING</b></p></h4>
<p>Bakers are very lucky. We have a profession that provides both pleasure and nourishment to a community</p>
</div>
</center>
</div>
<div class="col col-12 col-sm-4 col-md-4">
<center>
<div class="box2"><h4><p style="font-family:Segoe Print;"><b>WE STRIVE FOR BEST QUALITY</b></p></h4>
<p>We try our best to serve our customers with the highest quality products we can bake</p>
</div>
</center>
</div>
<div class="col col-12 col-sm-4 col-md-4">
<center>
<div class="box3"><h4><p style="font-family:Segoe Print;"><b>WE MAKE IT WORTH IT</b></p></h4>
<p>We value our customer’s efforts and we strive to ensure that our products are worth the price</p>
</div>
</center>
</div>
</div><br><br>
<div class="container">
<div class="row" style="background-color:lightblue;">
<hr style="height:5px;border-width:0;color:gray;background-color:blue">
<div class="col col-12 col-sm-4 col-md-4"><center>
<img src="https://images.unsplash.com/photo-1569289522127-c0452f372d46?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NzR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" width="100" height="150" alt=""></div>
</center>
<div class="col col-12 col-sm-4 col-md-4">

<h2><p style="font-family:Segoe Print;color:green"><b>Contact us</b></p></h2><br><vr>
<p><i>Bakes 4 U</i></p>
<p><i>21/239-A - Seaport Airport Road, Kalamassery,</i></p>
<p><i>Ernakulam, Kerala, India. 683503</i></p>
<p><i>bakes4u@gmail.com</i></p>
<p><i>9388874837, 9400173007</i></p>
</div>
<div class="col col-12 col-sm-4 col-md-4"></div>
</div><hr style="height:5px;border-width:0;color:gray;background-color:blue"></div>
<div class="container">
        <center>
        <div class="spinner-grow text-muted"></div>
        <div class="spinner-grow text-primary"></div>
        <div class="spinner-grow text-success"></div>
        <div class="spinner-grow text-info"></div>
        <div class="spinner-grow text-warning"></div>
        <div class="spinner-grow text-danger"></div>
        <div class="spinner-grow text-secondary"></div>
        <div class="spinner-grow text-dark"></div>
        <div class="spinner-grow text-light"></div>
        </center>
        </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
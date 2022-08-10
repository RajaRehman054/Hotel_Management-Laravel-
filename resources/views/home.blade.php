
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hotel Bliss</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/91905025ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <header>

        <nav class="navbar navbar-expand-lg bg-primary text-light">
            <div class="container-fluid">
              <a class="navbar-brand " href="#">Bliss</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link text-light active" aria-current="page" href="#Home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="#AboutUs">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/adminlogin')}}">Admin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/signup')}}">Sign Up</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="{{url('/login')}}">Login</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

    </header>


    <section class="home" id="home">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/1.jpg') }}"  class="d-block w-100 mh-70" alt="..." height="940px">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/room.jpg') }}"class="d-block w-100" alt="..." height="940px" >
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/pool.jpg') }}" class="d-block w-100" alt="..." height="940px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    </section>

    <div class="container" id="AboutUs">
        <div class="row">
            <div class="col" >
                <h1>OUR WORLD-RENOWNED SERVICES</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" id ="yoyo">

            <div class=" col-12 card col-md-3 " >
                <div class="alert alert-warning" role="alert">FOOD SERVICES</div>                  
                <img src="{{ asset('img/food.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">We have the some of the best chefs in the world that will cook delcious foods for our guests. All kinds of food Chinese,Italian,Indian are available.</p>
                </div>
            </div>
        
            <div class="col-12 card col-md-3 offset-md-1 " >
                <div class="alert alert-warning" role="alert">POOL SERVICES</div>
                <img src="{{ asset('img/pool.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">We have the best infinity pool in the city. Some jaw dropping views will be available to you while you swim to counter this scorching heat.</p>
                </div>
            </div>

            <div class="col card col-12 col-md-3 offset-md-1">
                <div class="alert alert-warning" role="alert">5* ROOM SERVICES</div>
                <img src="{{ asset('img/room.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">We provide you with the best lodging services that is easily affordable for you at the same time luxuroius as well.</p>
                </div>
            </div>

        </div>
    </div>

    <h2 id="printvalue"></h2>
    <header class="page-header">
        <div class="container flow">
          <h1 class="page-title" style = "text-align: center;">FEEDBACKS</h1>
        </div>
    </header>
    <div class="media-scroller snaps-inline">
        <div class="media-element">
          <img src="https://images.unsplash.com/photo-1641353989082-9b15fa661805?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODcyOA&ixlib=rb-1.2.1&q=80&w=400" alt="">
          <h1 style = "margin-bottom:0%; padding-bottom: 0%;">Alina</h1>
          <span class="fa fa-star checked"><span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></span>
          <p style = "font-size:small; margin-top:0%;">alinaahmed@gmail.com</p>
          <p class="title">Loved my stay here. would reccommend</p>
        </div>
        <div class="media-element">
          <img src="https://images.unsplash.com/photo-1642190672487-22bde32965f7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODcyOA&ixlib=rb-1.2.1&q=80&w=400" alt="">
          <h1 style = "margin-bottom:0%; padding-bottom: 0%;">Ahmed</h1>
          <span class="fa fa-star checked"><span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></span>
          <p style = "font-size:small; margin-top:0%;">ahmed@gmail.com</p>
          <p class="title">great experience</p>
        </div>
        <div class="media-element">
          <img src="https://images.unsplash.com/photo-1641841344411-49dbd02896f4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODcyOA&ixlib=rb-1.2.1&q=80&w=400" alt="">
          <h1 style = "margin-bottom:0%; padding-bottom: 0%;">Sam</h1>
          <span class="fa fa-star checked"><span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></span>
          <p style = "font-size:small; margin-top:0%;">samd@gmail.com</p>
          <p class="title">Loved it</p>
        </div>
        <div class="media-element">
          <img src="https://images.unsplash.com/photo-1643223723262-7ce785730cf6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODcyOA&ixlib=rb-1.2.1&q=80&w=400" alt="">
          <h1 style = "margin-bottom:0%; padding-bottom: 0%;">Xack</h1>
          <span class="fa fa-star checked"><span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></span>
          <p style = "font-size:small; margin-top:0%;">zackd@gmail.com</p>
          <p class="title">One of the best places to stay at</p>
        </div>
        <div class="media-element">
          <img src="https://images.unsplash.com/photo-1640938776314-4d303f8a1380?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc2Mw&ixlib=rb-1.2.1&q=80&w=400" alt="">
          <h1 style = "margin-bottom:0%; padding-bottom: 0%;">Rex</h1>
          <span class="fa fa-star checked"><span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></span>
          <p style = "font-size:small; margin-top:0%;">genrex@gmail.com</p>
          <p class="title">one word peaceful</p>
        </div>
        <?php
			 foreach ($customer as $cData) { 
            ?>
                <div class="media-element">
                      <img src="https://images.unsplash.com/photo-1511367461989-f85a21fda167?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1331&q=80">
                      <h1 style = "margin-bottom:0%; padding-bottom: 0%;"><?php echo $cData->name?></h1>
                      <span class="fa fa-star checked"><span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></span>
                      
                      <p style = "font-size:small; margin-top:0%;"><?php echo $cData->email?></p>
                      <p class = "title"><?php echo $cData->description?></p>
                </div>
            <?php 
        }
		    ?>
        
        
      </div>
	

    <div class="feedback alert alert-success" role="alert">
        <a href="{{ url('/feedback') }}" target="_blank">Click to Provide Feedback!</a>
    </div>
    
 <footer>
      <div class="flex-container2">
          <div class="flexitem">
              <h1>Copyright</h1>
              <p>© 2020 Copyright: <a href="">HotelBliss.com</a></p>
          </div>
          <div class="flexitem">
              <h1>Contact us</h1>
              <ul>
                  <li><i class="fa-solid fa-envelope"></i> mail@HotelBliss.org</li>
                  <li><i class="fa-solid fa-display"></i> http:br//www.HotelBliss.org</li>
                  <li><i class="fa-solid fa-location-pin"></i> Mariot Road, Islamabad G6/3  99HT</li>
                  <li><i class="fa-solid fa-phone"></i> +92 303 5396580</li>
              </ul> 
          </div>
          <div class="flexitemm">
              <h1>Follow us</h1>
              <p><i class="fa-brands fa-facebook fa-xl"></i><i class="fa-brands fa-whatsapp fa-xl"></i><i class="fa-brands fa-twitter fa-xl"></i><i class="fa-brands fa-linkedin-in fa-xl"></i><i class="fa-solid fa-envelope-circle-check fa-xl"></i></p>   
          </div>
      </div>
      <div class="flexitemmm">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5537.51732969525!2d73.08292327807882!3d33.73264339933511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbff8b29e34cd%3A0x7f48885ae1392638!2sIslamabad%20Marriott%20Hotel!5e0!3m2!1sen!2s!4v1654967242825!5m2!1sen!2s" width="100%" height="300" style="border:0; opacity: 0.5;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </footer>

  <script>

  </script>

        
</body>


</html>
   
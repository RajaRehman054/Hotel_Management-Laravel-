<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>customerpage</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/91905025ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            background-color: lightgray;
        }
        .first{
            width: 70%;
            background-color: lightgray;
            margin-left: auto;
            margin-right: auto;
            font-size: x-small;  
        }
        .first h1{
            font-size: 70px;
            color: #0d6efd;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 0%;
            margin-bottom: 0%;
        }
        .first p{
            margin-top: 0%;
        }
        nav{
            width: 70%;
            margin-left: auto;
            margin-right: auto;
        }
        ul{
            width: 100%;
            
        }
        ul li{   
            font-weight: bolder;
            margin-left:6%
        }
        ul li:hover{
            background-color: darkblue;
        } 
        .nav-link:hover{
            text-decoration: none;
        }
        .container{
            width: 70%;
        }
        .container .row{
            justify-content: space-between;
        }
        .icon {
            cursor: pointer;
            margin-right: 50px;
            line-height: 60px;
        }
        .icon span {
            background: #f00;
            padding: 7px;
            border-radius: 50%;
            color: #fff;
            vertical-align: top;
            margin-left: -25px;
        }
        .icon img {
            display: inline-block;
            width: 40px;
            margin-top: 20px;
        }
        .icon:hover {
            opacity: .7;
        }
        .notifi-box {
            z-index:100;
            width: 300px;
            height: 0px;
            opacity: 0;
            background-color: white;
            position: absolute;
            top: 130px;
            right: 15%;
            transition: 1s opacity, 250ms height;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
        .notifi-box h2 {
            font-size: 14px;
            padding: 10px;
            border-bottom: 1px solid #eee;
            color: #999;
            color: #f00;
        }
        
        #rest{
            background-color: #0d6efd;
            color: white;
            margin-top: 10px;
            margin-bottom: 10px;
            text-align: center;
            border-bottom: 4px solid whitesmoke;
        }
        #rest4{
            background-image: linear-gradient(to right, lightblue, #0d6efd );
            color: white;
            margin-top: 10px;
            margin-bottom: 10px;
            text-align: center;
            border-bottom: 4px solid #0d6efd;
        }
        #but{
            margin-top: 30px;
        }
        #buto{
            margin-top: 35px;
        }
        #roomspan{
            display: none;
        }
        #bookingspan{
            display: none;
        }
        #breakspan{
            display: none;
        }
        #lunchspan{
            display: none;
        }
        #dinnerspan{
            display: none;
        }
        #Laundaryspan{
            display: none;
        }
        .arrow {
            border: solid white;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 3px;
        }
        .right {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
        .down {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }
        footer{
            margin-top: 50px;
            background-color:rgb(22, 21, 21);
            border-top: 5px solid #0d6efd;
        }
        .flex-container2{
            display: flex;
            width: 80%;
            justify-content: space-between;
            margin-left: auto;
            margin-right: auto;
            padding-top: 2%; 
            padding-bottom: 2%;  
        }
        .flexitemmm{
            width: 80%;
            margin-left: auto;
            margin-right: auto; 
            padding-bottom: 5%; 
        }
        .flexitem{
            width: 31%;
        }
        .flexitem h1{
            color : white;
            font-family: Arial, Helvetica, sans-serif;
        }
        .flexitem p{
            font-size: small;
            color: white;
        }
        .flexitem a{
            color: #0d6efd;
            font-size: small; 
        }
        .flexitem ul{
            list-style-type:none;
        }
        .flexitem ul li {
            font-size: small; 
            padding: 5px;
            color:white;
        }
        .flexitem i{
            color: #0d6efd;
        }
        .flexitemm i{
            color: #0d6efd;
            width:50px;
            height: 20px;
        }
        .flexitemm {
            width: 31%;
        }
        .flexitemm h1{
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        } 
        #second{
            background-image: linear-gradient(to right, lightblue, #0d6efd );
            margin-top: 10px;
            color: white;
            
        }
        .carousel-item h1{
            text-align: center;
        }

        h2{
            color:blue;
        }
        .h2{
            background-color:grey;
            width:100%;
            text-align:center;
        }
     
        @media (max-width:800px){
            .flex-container2{
                display: flex;
                flex-direction: column;
            }
            .flexitem{
                width: 100%;
            }
            .flexitemm{
                width: 100%;  
            }
        }
  
    </style>

</head>
<body>
    
    <input type="hidden" value="{{$customer[0]->id}}" id="imp">
    <div class="h2">
        <h2>Welcome <b>{{session('data')['uname']}}</b></h2>
    </div>
    <div class = "first">
        <div class="row">
            <div class="col-10"><h1>HOTEL BLISS</h1></div>
            <div class="col">
                <div class="icon" onclick="toggleNotifi()">
                    <img src="img/bell.png" alt=""> <span>17</span>
                </div>
                <div class="notifi-box" id="box">
			        <h2>Notifications</h2>
                    <table border="1px" width="98%" style = "margin:auto;margin-bottom:5px;">
                    <tr>
                        <td><b>Type</b></td>
                        <td><b>Date</b></td>
                        <td><b>Description</b></td>
                    </tr>
                <?php
                    foreach ($notifications as $cData) {
                        print "<tr>";
                        print " <td> " .$cData->Type. " </td> ";
                        print " <td> " .$cData->date. " </td> ";
                        print " <td> " .$cData->description. " </td> ";
                        print "</tr>";
                    }
                ?>
            </table>
		        </div>
            </div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary text-light" >
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link text-light active" aria-current="page" href="#second">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="#room1">Room Info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="#rest1">Restaurant</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="#laud1">Laundary</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="javascript:checkOut()" >Checkout</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="{{ url('/logout') }}">Logout</a>
                </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <div class="container">
        <div class="row" id="second">
            <div class="col col-12">
                <h1>Hello There!!!</h1>
                <P>Hope you're having a good time with us. Don't feel shy to use our Restaurant, laundary services and you can even book more rooms so enjoy your peaceful stay here.</P>
            </div>
            <div class="col col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{url('img/1.jpg')}}" class="d-block w-100 mh-70" alt="..." height="500px">
                      </div>
                      <div class="carousel-item">
                          <h1>Rooms</h1>
                        <img src="{{url('img/room.jpg')}}" class="d-block w-100" alt="..."  height="500px">
                      </div>
                      <div class="carousel-item">
                          <h1>Restaurant</h1>
                        <img src="{{url('img/breakfast.jpg')}}" class="d-block w-100" alt="..." height="500px">
                      </div>
                      <div class="carousel-item">
                        <h1>Laundary</h1>
                      <img src="{{url('img/laundary.jpg')}}" class="d-block w-100" alt="..." height="500px">
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
            </div>
        </div>
    </div>
    <div class="container" id="room1">
        <div class="row" id = "rest">
            <div class="col col-12">
                <h1>Rooms</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 card col-md-5 " >
                <div class="alert alert-warning" style="background-color:#0d6efd;color:white" role="alert">Book room</div>
                <img src="{{url('img/room2.jpg')}}" class="card-img-top" alt="..." height="100%">
                <div class="card-body">
                  <p class="card-text">If you want to book more rooms click on the button below.</p>
                  <button type="button" id = "buto" class="btn btn-primary" onclick="showdiv(bookingspan,13,14)"><i class="arrow right" id = "13"></i><i class="arrow right" id = "14"></i></button>
                </div>
            </div>
            <div class="col-12 card col-md-5 " >
                <div class="alert alert-warning" style="background-color:#0d6efd;color:white" role="alert">Booked Room</div>                  
                <img src="{{url('img/room.jpg')}}" class="card-img-top" alt="..." height="50%">
                <div class="card-body">
                  <p class="card-text">To add more services to your room click on the button below.</p>
                  <button type="button" id = "but" class="btn btn-primary" onclick="showdiv(roomspan,11,12)"><i class="arrow right" id = "11"></i><i class="arrow right" id = "12"></i></button>
                </div>
            </div>
            
          
        </div>
    </div>
    <div class="container" id="roomspan">
        <div class="row" id ="rest4">
            <div class="col col-12">
                <h1>Add Room items</h1>
            </div>
            <div class="row">
                <div class="col card col-12 ">
                    <table class="table table-striped" style="border: 4px solid #0d6efd; margin-top: 10px;">
                        <thead>
                            <tr><th></th><th>Items</th><th>Prices</th></tr>
                        </thead>
                        <tbody>
                            <tr><th>1</th><th>Tv</th><td>1000rs</td></tr>
                            <tr><th>2</th><th>Wifi</th><td>1500rs</td></tr>
                            <tr><th>3</th><th>AC</th><td>2000rs</td></tr>
                            <tr><th>4</th><th>Music set</th><td>1500rs</td></tr>
                            <tr><td colspan="3" style="text-align: center;">choose your option from the menu</td></tr>
                        </tbody>
                    </table>
        
                    <div class="card-body">
                        <table  class="table table-striped" id="list">
                            <tr>
                                <td colspan="3">
                                    <form id="mlist" method="post" >
                                        @csrf
                                        <label for="items">Choose an item:</label>
                                        <select name="item" id="item">
                                          <option value="Tv">Tv</option><option value="Wifi">Wifi</option><option value="Ac">Ac</option><option value="Music set">Music set</option>
                                        </select>
                                </td> 
                            </tr>
                    </table>
                    <table  class="table table-striped">
                        <tr>
                            <td><input type="submit" class="btn btn-primary" onclick="cancel(roomspan,11,12)"></td>
                            <td><button type="button" class="btn btn-primary" onclick="cancel(roomspan,11,12)">Cancel</button></td>
                        </form>
                        </tr>
                    </table>
                    </div>
                </div>
               </div>
        </div>
       
    
    </div>
    <div class="container" id="bookingspan">
        <div class="row" id ="rest4">
            <div class="col col-12">
                <h1>Book more rooms</h1>
            </div>
            <div class="row">
                <div class="col card col-12 ">
                    <table class="table table-striped" style="border: 4px solid #0d6efd; margin-top: 10px;">
                        <thead>
                            <tr><th></th><th>Options</th><th>Prices</th></tr>
                        </thead>
                        <tbody>
                            <tr><th>1</th><th>Single</th><td>5000rs</td></tr>
                            <tr><th>2</th><th>Double</th><td>7000rs</td></tr>
                            <tr><th>3</th><th>King</th><td>10000rs</td></tr>
                            <tr><td colspan="3" style="text-align: center;">choose your option from the menu</td></tr>
                        </tbody>
                    </table>
        
                    <div class="card-body">
                        <table  class="table table-striped" id="list1">
                            <tr>
                                <td colspan="3">
                                    <form id="roomlist" method="post">
                                        @csrf
                                        <label for="rooms">Choose a room:</label>
                                        <select name="roomv" id="room">
                                          <option value="single">Single</option><option value="double">Double</option><option value="king">King</option>
                                        </select>
                                </td> 
                            </tr>
                    </table>
                    <table  class="table table-striped">
                        <tr>
                            <td><input type="submit" class="btn btn-primary" onclick="cancel(bookingspan,13,14)"></td>
                            <td><button type="button" class="btn btn-primary" onclick="cancel(bookingspan,13,14)">Cancel</button></td>
                        </form>
                        </tr>
                    </table>
                    </div>
                </div>
               </div>
        </div> 

    </div>
    <div class="container" id="rest1">
        <div class="row" id = "rest">
            <div class="col col-12">
                <h1>Restaurant</h1>
            </div>
        </div>
        <div class="row" >
            <div class="col-12 card col-md-3 " >
                <div class="alert alert-warning" style="background-color:#0d6efd;color:white" role="alert">BREAKFAST</div>                  
                <img src="{{url('img/breakfast.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Enjoy your Morning with the most pleasant breakfast to start your day please select from our menu.</p>
                  <button type="button" id = "but" class="btn btn-primary" onclick="showdiv(breakspan,15,16)"><i class="arrow right" id = "15"></i><i class="arrow right" id = "16"></i></button>
                </div>
            </div>
            <div class="col-12 card col-md-3 " >
                <div class="alert alert-warning" style="background-color:#0d6efd;color:white" role="alert">LUNCH</div>
                <img src="{{url('img/lunch.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Middle of the day huh! well check out our menu to get rid of your appetite with our tasty dishes.</p>
                  <button type="button" id = "buto" class="btn btn-primary" onclick="showdiv(lunchspan,17,18)"><i class="arrow right" id = "17"></i><i class="arrow right" id = "18"></i></button>
                </div>
            </div>
            <div class="col card col-12 col-md-3 ">
                <div class="alert alert-warning" style="background-color:#0d6efd;color:white" role="alert">DINNER</div>
                <img src="{{url('img/dinner.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Atlast! End of the day for you but it's not the end until you have enojoyed a nice meal look for options in our menu to get a proper goodbye to the day.</p>
                  <button type="button" class="btn btn-primary" onclick="showdiv(dinnerspan,19,20)"><i class="arrow right" id = "19"></i><i class="arrow right" id = "20"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="breakspan">
        <div class="row" id ="rest4">
            <div class="col col-12">
                <h1>Breakfast Menu</h1>
            </div>
            <div class="row">
                <div class="col card col-12 ">
                    <table class="table table-striped" style="border: 4px solid #0d6efd; margin-top: 10px;">
                        <thead>
                            <tr><th></th><th>Items</th><th>Prices</th></tr>
                        </thead>
                        <tbody>
                            <tr><th>1</th><th>egg,toast,juice</th><td>500rs</td></tr>
                            <tr><th>2</th><th>pancakes,butter,juice</th><td>600rs</td></tr>
                            <tr><th>3</th><th>egg,paratha,juice</th><td>700rs</td></tr>
                            <tr><td colspan="3" style="text-align: center;">choose your option from the menu</td></tr>
                        </tbody>
                    </table>
        
                    <div class="card-body">
                        <table  class="table table-striped" id="list2">
                            <tr>
                                <td colspan="3">
                                    <form id="breaklist" method="post">
                                        @csrf
                                        <label for="items">Choose an item:</label>
                                        <select name="type" id="item">
                                          <option value="egg,toast,juice">egg,toast,juice</option><option value="pancakes,butter,juice">pancakes,butter,juice</option><option value="egg,paratha,juice">egg,paratha,juice</option>
                                        </select>
                                </td> 
                            </tr>
                    </table>
                    <table  class="table table-striped">
                        <tr>
                            <td><input type="submit" class="btn btn-primary" onclick="cancel(breakspan,15,16)"></td>
                            <td><button type="button" class="btn btn-primary" onclick="cancel(breakspan,15,16)">Cancel</button></td>
                        </form>
                        </tr>
                    </table>
                    </div>
                </div>
               </div>
        </div>

    </div>
    <div class="container" id="lunchspan">
        <div class="row" id ="rest4">
            <div class="col col-12">
                <h1>Lunch Menu</h1>
            </div>
            <div class="row">
                <div class="col card col-12 ">
                    <table class="table table-striped" style="border: 4px solid #0d6efd; margin-top: 10px;">
                        <thead>
                            <tr><th></th><th>Items</th><th>Prices</th></tr>
                        </thead>
                        <tbody>
                            <tr><th>1</th><th>chicken tikka , Naan</th><td>900rs</td></tr>
                            <tr><th>2</th><th>Mutton palao</th><td>1000rs</td></tr>
                            <tr><th>3</th><th>Beef stake</th><td>2000rs</td></tr>
                            <tr><td colspan="3" style="text-align: center;">choose your option from the menu</td></tr>
                        </tbody>
                    </table>
        
                    <div class="card-body">
                        <table  class="table table-striped" id="list3">
                            <tr>
                                <td colspan="3">
                                    <form id="lunchlist" method="post">
                                        @csrf
                                        <label for="items">Choose an item:</label>
                                        <select name="type" id="item">
                                          <option value="chicken tikka , Naan">chicken tikka , Naan</option><option value="Mutton palao">Mutton palao</option><option value="Beef stake">Beef stake</option>
                                        </select>
                                </td> 
                            </tr>
                    </table>
                    <table  class="table table-striped">
                        <tr>
                            <td><input type="submit" class="btn btn-primary" onclick="cancel(lunchspan,17,18)" ></td>
                            <td><button type="button" class="btn btn-primary" onclick="cancel(lunchspan,17,18)">Cancel</button></td>
                        </form>
                        </tr>
                    </table>
                    </div>
                </div>
               </div>
        </div>

    </div>
    <div class="container" id="dinnerspan">
        <div class="row" id ="rest4">
            <div class="col col-12">
                <h1>Dinner Menu</h1>
            </div>
            <div class="row">
                <div class="col card col-12 ">
                    <table class="table table-striped" style="border: 4px solid #0d6efd; margin-top: 10px;">
                        <thead>
                            <tr><th></th><th>Items</th><th>Prices</th></tr>
                        </thead>
                        <tbody>
                            <tr><th>1</th><th>chicken biryani</th><td>500rs</td></tr>
                            <tr><th>2</th><th>Mutton karai</th><td>1500rs</td></tr>
                            <tr><th>3</th><th>Qorma</th><td>2000rs</td></tr>
                            <tr><td colspan="3" style="text-align: center;">choose your option from the menu</td></tr>
                        </tbody>
                    </table>
        
                    <div class="card-body">
                        <table  class="table table-striped" id="list4">
                            <tr>
                                <td colspan="3">
                                    <form id="dinnerlist" method="post" >
                                        @csrf
                                        <label for="items">Choose an item:</label>
                                        <select name="type" id="item">
                                          <option value="chicken biryani">chicken biryani</option><option value="Mutton karai">Mutton karai</option><option value="Qorma">Qorma</option>
                                        </select>
                                </td> 
                            </tr>
                    </table>
                    <table  class="table table-striped">
                        <tr>
                            <td><input type="submit" class="btn btn-primary" onclick="cancel(dinnerspan,19,20)" ></td>
                            <td><button type="button" class="btn btn-primary" onclick="cancel(dinnerspan,19,20)">Cancel</button></td>
                        </tr>
                    </form>
                    </table>
                    </div>
                </div>
               </div>
        </div>

    </div>
    <div class="container" id="laud1">
        <div class="row" id ="rest">
            <div class="col col-12">
                <h1>Laundary</h1>
            </div>
        </div>
       <div class="row">
        <div class="col card col-12 ">
            <img src="{{url('img/laundary.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Safety laundary hygiene is our priority, use our laundary service and get your clean clothes back on the same day.</p>
              <button type="button" class="btn btn-primary" onclick="showdiv(Laundaryspan,21,22)"><i class="arrow right" id = "21"></i><i class="arrow right" id = "22"></i></button>
            </div>
        </div>
       </div>
    </div>
    <div class="container" id="Laundaryspan">
        <div class="row" id ="rest4">
            <div class="col col-12">
                <h1>Laundary Menu</h1>
            </div>
            <div class="row">
                <div class="col card col-12 ">
                    <table class="table table-striped" style="border: 4px solid #0d6efd; margin-top: 10px;">
                        <thead>
                            <tr><th></th><th>Items</th><th>Prices</th></tr>
                        </thead>
                        <tbody>
                            <tr><th>1</th><th>shirt</th><td>100rs</td></tr>
                            <tr><th>2</th><th>pants</th><td>100rs</td></tr>
                            <tr><th>3</th><th>coat</th><td>200rs</td></tr>
                            <tr><th>4</th><th>others</th><td>250rs</td></tr>
                            <tr><td colspan="3" style="text-align: center;">choose your option from the menu</td></tr>
                        </tbody>
                    </table>
        
                    <div class="card-body">
                        <table  class="table table-striped" id="list5">
                            <tr>
                                <td colspan="3">
                                    <form id="itemlist" method="POST">
                                        @csrf
                                        <label for="items">Choose an item:</label>
                                        <select name="item" id="item">
                                            <option value="shirt">shirt</option><option value="pants">pants</option><option value="coat">coat</option><option value="others">others</option>
                                        </select>
                                </td>
                                <td><label for="Quantity">Quantity: </label><input type="text" name="quantity"></input></td> 
                            </tr>
                    </table>
                    <table  class="table table-striped">
                        <tr>
                            <td><input type="submit" class="btn btn-primary" onclick="cancel(Laundaryspan,21,22)"></td>
                            <td><button type="button" class="btn btn-primary" onclick="cancel(Laundaryspan,21,22)">Cancel</button></td>
                            </form>
                        </tr>
                    </table>
                    </div>
                </div>
               </div>
        </div>
        

    </div>

    <div class="d-grid gap-1">
        <div class="modal fade mod" id="data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header text-center">
                <h5><b>ROOM BOOKING</b></h5>
            </div>
            <div class="modal-body" id="bRoom">
                <input type='hidden' id='delete_user_id'>
              <h4>NOTICE</h4>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="close" data-dismiss="modal" id="close" class="btn btn-primary">Close</button>
            </div>
          </div>
        </div>
      </div>    

      <div class="d-grid gap-1">
        <div class="modal fade mod" id="data1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header text-center">
                <h5><b>ADD ITEMS</b></h5>
            </div>
            <div class="modal-body" id="misc">
                <input type='hidden' id='delete_user_id'>
              <h4>NOTICE</h4>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="close" data-dismiss="modal" id="close2" class="btn btn-primary">Close</button>
            </div>
          </div>
        </div>
      </div> 

      <div class="d-grid gap-1">
        <div class="modal fade mod" id="modalunique" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header text-center">
                <h5><b>Checkout</b></h5>
            </div>
            <div class="modal-body" id="checkoutBody">
                <table class="table table-bordered table-striped table-info">
                    <thead>
                      <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Laundary-Bill</th>
                        <th scope="col">Room-Bill</th>
                        <th scope="col">Food-Bill</th>
                        <th scope="col">Misc-Bill</th>
                        <th scope="col">Total-Bill</th>
                        <th scope="col">Pay</th>
                      </tr>
                    </thead>
                    <tbody id="tbd">
                    </tbody>
                  </table>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="close" data-dismiss="modal" id="btncheck" class="btn btn-primary">Close</button>
            </div>
          </div>
        </div>
      </div> 

    <footer>
        <div class="flex-container2">
            <div class="flexitem">
                <h1>Copyright</h1>
                <p>© 2020 Copyright: <a href="{{url('/')}}">HotelBliss.com</a></p>
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
        const id= $('#imp').val();
        var box  = document.getElementById('box');
        var down = false;
        function toggleNotifi(){
            if (down) {
                box.style.height  = '0px';
                box.style.opacity = 0;
                down = false;
            }else {
                box.style.height  = 'auto';
                box.style.opacity = 1;
                down = true;
            }
        }

        function showdiv(x,y,z){
            var b = document.getElementById(y);
            var c = document.getElementById(z);
            if (x.style.display == "none") {
                x.style.display = "block";
                b.className = "arrow down";
                c.className = "arrow down";
                reset(x,y,z);
            } 
            else {
                x.style.display = "none";
                b.className = "arrow right";
                c.className = "arrow right";
                resetitemtable(x);
            }
        }
        function additems(x){
            var row = x.insertRow();
            var cell1 = row.insertCell(0);
            var label = document.createElement("label");
            label.innerHTML = "Choose an item: ";
            var select = document.createElement("select");
            var items;
            if(x == list){
                items = ["Tv","Wifi","Ac","Music set"];
                select.setAttribute("id","item");
            }
            else if(x == list1){
                items = ["Single","Double","King"]
            }
            else if(x == list2){
                items = ["egg,toast,juice","pancakes,butter,juice","egg,paratha,juice"]
            }
            else if(x == list3){
                items = ["chicken tikka, Naan","Mutton palao","Beef stake"]
            }
            else if(x == list4){
                items = ["chicken biryani","Mutton karai","Qorma"]
            }
            else if(x == list5){
                items = ["shirt","pants","coat","others"]
            }
            items.forEach(function(item) {
                var option = document.createElement("option");
                option.text = item;
                select.add(option);
            });
            cell1.appendChild(label);
            cell1.appendChild(select);
            if(x != list5){
                var cell2 = row.insertCell(1);
                if(x == list){            
                    cell2.innerHTML = '<input type="button" value="Delete" onclick="deleteRow(this,list)"></input>';
                }
                else if(x == list1){
                    cell2.innerHTML = '<input type="button" value="Delete" onclick="deleteRow(this,list1)"></input>';
                }
                else if(x == list2){
                    cell2.innerHTML = '<input type="button" value="Delete" onclick="deleteRow(this,list2)"></input>';
                }
                else if(x == list3){
                    cell2.innerHTML = '<input type="button" value="Delete" onclick="deleteRow(this,list3)"></input>';
                }
                else if(x == list4){
                    cell2.innerHTML = '<input type="button" value="Delete" onclick="deleteRow(this,list4)"></input>';
                }
            }
            else{
                var cell2 = row.insertCell(1);
                cell2.innerHTML = '<label for="Quantity">Quantity: </label><input type="text"></input>';
                var cell3 = row.insertCell(2);
                cell3.innerHTML = '<input type="button" value="Delete" onclick="deleteRow(this,list5)"></input>';
            }
                      
        }
        function cancel(x,y,z){
            var b = document.getElementById(y);
            var c = document.getElementById(z);
            x.style.display = "none";
            b.className = "arrow right";
            c.className = "arrow right";
            resetitemtable(x);
        }
        function deleteRow(r,x) {
            if(x == null){
                var i = r.parentNode.parentNode.rowIndex;
                list.deleteRow(i);
            }else{
                var i = r.parentNode.parentNode.rowIndex;
                x.deleteRow(i);
            }   
        }
       
        function reset(x,y,z){
            var arr = [roomspan,bookingspan,breakspan,lunchspan,dinnerspan,Laundaryspan];
            var num = 12;
            for(var i = 0; i < arr.length;i++){
                if(x == arr[i]){
                    num = num + 2;
                    continue;
                }
                else if (arr[i].style.display == "block"){
                    arr[i].style.display = "none";
                    var b = document.getElementById(num - 1);
                    var c = document.getElementById(num);
                    b.className = "arrow right";
                    c.className = "arrow right";
                    resetitemtable(arr[i]);
                }
                num = num + 2;
            }  
        }

        function resetitemtable(x){
            var arr = [roomspan,bookingspan,breakspan,lunchspan,dinnerspan,Laundaryspan];
            var arr1 = [list,list1,list2,list3,list4,list5];
            for(var i = 0; i < arr.length;i++){
                if(x == arr[i]){
                    if(arr1[i].rows.length == 1){
                        break;
                    }
                    else{
                        for(var z = 1;z < arr1[i].rows.length;){
                            arr1[i].deleteRow(z);
                        }
                    }
                }
            }
        }

        $('#itemlist').submit(function(e){
        e.preventDefault();
        var data = new FormData(this);

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
        url:'/addLaundary/'+id,
        data: data,
        type: 'POST',
        cache:false,
        contentType:false,
        processData:false
        });

    });

        $('#dinnerlist').submit(function(e){
            e.preventDefault();
            var data = new FormData(this);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
            url:'/addDinner/'+id,
            data: data,
            type: 'POST',
            cache:false,
            contentType:false,
            processData:false
          });

        });

        $('#breaklist').submit(function(e){
            e.preventDefault();
            var data = new FormData(this);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
            url:'/addBreak/'+id,
            data: data,
            type: 'POST',
            cache:false,
            contentType:false,
            processData:false
          });

        });

        $('#lunchlist').submit(function(e){
            e.preventDefault();
            var data = new FormData(this);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
            url:'/addLunch/'+id,
            data: data,
            type: 'POST',
            cache:false,
            contentType:false,
            processData:false
          });

        });
 
        $('#roomlist').submit(function(e){
            e.preventDefault();
            var data = new FormData(this);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
            url:'/bookRoom/'+id,
            data: data,
            type: 'POST',
            cache:false,
            contentType:false,
            processData:false,
            success:function(response){
                    $('#data').modal('show');

                    if(response.user[0].id==undefined){
                        $('#bRoom').html("<p>No Rooms available in this category.Select an another.")
                    }
                    else{
                        $('#bRoom').html("<p><b>"+response.user[0].id+"</b> is your room ID on the <b>"+response.user[0].floor+"</b> floor.");
                    }
                }
          });
          $('#close').click(function(){
            $('#data').modal('hide');
          });

        });

        $('#mlist').submit(function(e){
            e.preventDefault();
            var data = new FormData(this);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
            url:'/addMisc/'+id,
            data: data,
            type: 'POST',
            cache:false,
            contentType:false,
            processData:false,
            success:function(response){
                if(response.user != undefined){
                        $('#misc').html("<p>"+response.user+".</p>")
                            $('#data1').modal('show');
                        }
                }
          });
          $('#close2').click(function(){
            $('#data1').modal('hide');
          });

        });
            

        function checkOut(){
            $('#modalunique').modal('show');
            fetchBill();

            $('#btncheck').click(function(){
                $('#modalunique').modal('hide');
          });

          $(document).on('click','.delete_user',function(e){
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'DELETE',
                url:"/payment/"+id,
                success:function(response){
                    $('#tbd').html("<b>Successfully paid your dues.</b>");
                }
            });
            
        });

    }

        function fetchBill(){
            $.ajax({
                type: 'GET',
                url:"getBill/"+id,
                dataType:"json",
                success:function(response){
                    $('#tbd').html("");
                    $.each(response.user,function(key,item){
                        if(item.total!='0'){
                        $('#tbd').append('<tr>\
                        <td>'+item.u_id+'</td>\
                        <td>'+item.laund_bill+'</td>\
                        <td>'+item.room_bill+'</td>\
                        <td>'+item.food_bill+'</td>\
                        <td>'+item.misc_bill+'</td>\
                        <td>'+item.total+'</td>\
                        <td><button type="button" value="'+item.u_id+'"" class="delete_user btn btn-primary btn-sn">Pay</button></td>\
                        </tr>');}
                        else{
                            $('#tbd').html("<p>You have nothing to Pay.");
                        }  
                    });
                }
            });
        }
        

    </script>

</body>
</html>
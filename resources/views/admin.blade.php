
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hotel Bliss</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/91905025ca.js" crossorigin="anonymous"></script>

    <style>

        .first{
            border: 1px solid black;
            margin-top:2%;
            background-color: black;
        }
        h1{
          color:whitesmoke
        }
        .btn{
          border-radius: 0%;
        }
        .btn:hover{
          color:green;
          background-color:aliceblue
        }
        body{
          background-color:lightgrey;
        }
        footer{
          margin-top:5%;
          background-color: black;
          color:antiquewhite
        }
        .changes{
            display:block;
            background-color: white;
        }
        .col{
          text-align:center; 
        }
        .btn{
          width:100%;
        }
        section a{
          text-decoration: none;
        }
        label{
          font-family:'Times New Roman', Times, serif;
          color:blue;
        }
        .mod input{
          border:2px solid black;
          border-radius: 1px;
        }
        .feedback{
          margin-top:2%;
        }
    </style>

</head>
<body>
    <header>

        <nav class="navbar navbar-expand-lg bg-dark text-light">
            <div class="container-fluid">
              <a class="navbar-brand text-primary " href="#">Bliss</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link text-light active" aria-current="page" href="#rooms">Insert</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="{{ url('/notifications') }}">Notifications</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="{{ url('/') }}">Logout</a>
                </li>
                </ul>
              </div>
            </div>
          </nav>

    </header>


    <section class="home" id="add">

        <div class=" first container">
          <div class="row">
              <div class="col"><h1>USERS</h1></div>
              
              <div class="d-grid gap-1">
                <div class="modal fade mod modal-lg" id="orangeModalSubscription3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-notify modal-warning" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-dark table-striped-columns">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">UserName</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($Data as $row)
                          <tr>
                          <td>{{$row->id}}</td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->username}}</td>
                          <td>{{$row->contact}}</td>
                          <td>{{$row->email}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="text-center">
                <a href=""  class="btn btn-primary " data-toggle="modal" data-target="#orangeModalSubscription3">View Users</a>
              </div>




              <div class="d-grid gap-1">
                <div class="modal fade mod" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-notify modal-warning" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="md-form ">
                        <form id="formIdU" method="POST">
                        @csrf
                        @method('POST')
                        <i class="fas fa-user prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form3">First Name:</label>
                        <input type="text" name='fname' id="form3" class="form-control validate" required="required">
                      </div>
                      <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form2">Last Name:</label>
                        <input type="text" name='lname' id="form2" class="form-control validate" required="required">
                      </div>
                      <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form2">Email:</label>
                        <input type="email" name='email' id="form2" class="form-control validate" required="required">
                      </div>
                      <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form2">Username:</label>
                        <input type="text" name='uname' id="form2" class="form-control validate" required="required">
                      </div>
                      <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form2">Password:</label>
                        <input type="text" name='password' id="form2" class="form-control validate" required="required">
                      </div>
                      <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form2">Contact Number:</label>
                        <input type="number" name='cnumber' id="form2" class="form-control validate" required="required">
                      </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <input type="submit" id="submit2" value="Submit" class="btn btn-primary">
                    </div>
                  </form>
                  </div>
                </div>
              </div> 
              <div class="text-center">
                <a href=""  class="btn btn-primary " data-toggle="modal" data-target="#orangeModalSubscription">Add Users</a>
              </div>

              </div>
              <div class="text-center">
                <a href="{{url('/admin-users')}}"  class="btn btn-primary ">Edit/Delete Users</a>
              </div>
      </div>

      <div class=" first container">
        <div class="row">
            <div class="col"><h1>ROOMS</h1></div>

            <div class="d-grid gap-1">
              <div class="modal fade mod" id="orangeModalSubscription2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-notify modal-warning" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="md-form mb-5">
                      <form id="formIdR" method="POST">
                        @csrf
                      <i class="fas fa-user prefix grey-text"></i>
                      <label data-error="wrong" data-success="right" for="form3">Type:</label>
                      <select id="form3" name="type">
                        <option value="none">Select</option>
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                        <option value="king">King</option>
                      </select>
                    </div>
                    <div class="md-form">
                      <i class="fas fa-envelope prefix grey-text"></i>
                      <label data-error="wrong" data-success="right" for="form2">Floor:</label>
                      <select id="form2" name="floor">
                        <option value="none">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-center">
                    <input type="submit" id="submitR" value="Submit" class="btn btn-primary">
                  </div>
                </form>
                </div>
              </div>
            </div> 
            <div class="text-center">
              <a href=""  class="btn btn-primary " data-toggle="modal" data-target="#orangeModalSubscription2">Add Rooms</a>
            </div>
          </div>
          <div class="d-grid gap-1">
          <div class="text-center">
            <a href="{{url('/admin-rooms')}}"  class="btn btn-primary ">View Rooms</a>
          </div>
        </div>
        <div class="text-center d-grid gap-1">
          <a href="{{url('/admin-rooms')}}"  class="btn btn-primary ">Edit/Delete Rooms</a>
        </div>

            </div>
    

    </section>

    <div class="feedback feed alert alert-success" role="alert">
        <a href="{{ url('/notifications') }}">Click to Provide Notifications!</a>
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

  $(document).ready ( function()
        {   

        $('#formIdR').submit(function(e){
            e.preventDefault();
            var data = new FormData(this);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
            url:'addRooms',
            data: data,
            type: 'POST',
            cache:false,
            contentType:false,
            processData:false,
          });

          $('#orangeModalSubscription2').modal('hide');
        });

        $('#formIdU').submit(function(e){
            e.preventDefault();
            var data = new FormData(this);

            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
            url:'addUsers',
            data: data,
            type: 'POST',
            cache:false,
            contentType:false,
            processData:false,
          });

          $('#orangeModalSubscription').modal('hide');
        });


    })

</script>

</body>


</html>
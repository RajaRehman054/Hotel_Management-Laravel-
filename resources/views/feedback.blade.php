<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
    <script src="https://kit.fontawesome.com/91905025ca.js" crossorigin="anonymous"></script>

    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body{
            background-color: lightslategray;
            background-image: url('../img/pool.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .feed{ 
            border-radius: 30px;
            max-width: 60%;
            margin:auto;
            background: rgba(12, 12, 12, 0.658);
            margin-top: 20px;
            padding: 40px;
            color: #fff;
            box-sizing: border-box;
        }
        h1{
            text-align: center;  
        }
        input{
            width: 48%;
            outline: none;
            border: none;
            border-radius: 5px;
            padding: 12px 5px;
            margin: 5px;
            font-weight: bold; 
        }
        #area{
            width: 98%;
            outline: none;
            border: none;
            border-radius: 5px;
            padding: 12px 5px;
            margin: 5px;
            font-weight: bold; 
            resize: none;
        }
        .back{
            width: 100px;
            margin: 10px;
        }
        button{
            width: 100%;
            border-radius: 5px;
        }
        #but{
            width: 20%;
            margin: 5px;   
        }
        footer{
            position:absolute;
            bottom:0;
            width:100%;
            margin-top: 100px;
            text-align: center;
            background-color: rgb(0, 0, 0);
         
        }
        a{
            text-decoration: none;
            color:white;
        }
        @media (max-width:1170px){
            input{
                width: 98%;
                outline: none;
                border: none;
                border-radius: 5px;
                padding: 12px 5px;
                margin: 5px;
                font-weight: bold; 
            }
            #but{
                width: 98%;
                margin: 5px;   
            }
            a{
                text-decoration:none;
            }
        }

    </style>
</head>
<body>
    <div class="back">
        <button type="button"class="btn btn-primary" style="background-color:rgba(0, 0, 0, 0.473);"><a href="{{ url('/') }}">Back</a></button>
    </div>
    <div class="feed">
        <h1>Drop us a feedback</h1>
        <form id="yo" method = 'post' action='/feedback'>
            @csrf
            <input type="text" placeholder="First Name.." name='fname' required="required">
            <input type="text" placeholder="Last Name.." name='lname' required="required">
            <input type="text" placeholder="Email.." name='email' required="required">
            <input type="text" placeholder="Contact No.." name='cnumber' required="required">
            <textarea name="text" id="area"  rows="10" placeholder="Write your message here.."></textarea>
            <button type="submit" id = "but" class="btn btn-primary" >Submit</button>
        </form>
    </div>
   
    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="{{ url('/') }}"> HotelBliss.com</a>
        </div>
    </footer>
     
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/91905025ca.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            background-color: lightslategray;
            background-image:url('../img/2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .signup{ 
            border-radius: 30px;
            max-width: 350px;
            margin:auto;
            background: rgba(39, 174, 236, 0.842);
            margin-top: 50px;
            padding: 40px;
            color: #fff;
            box-sizing: border-box;
            
        }
        h1{
            text-align: center;  
        }
        input{
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            padding: 12px 5px;
            margin: 5px;
            font-weight: bold; 
        }
     
        #but{
            width: 100%;
            margin: 5px;
        }
        footer{
            bottom:0;
            width:100%;
            margin-top: 100px;
            text-align: center;
            background-color: rgb(0, 0, 0);
        }
        .back{
            width: 100px;
            margin: 10px;
        }
        button{
            width: 100%;
            border-radius: 5px;
        }
        a{
            text-decoration: none;
            color:white;
        }
        footer{
            position:absolute;
            bottom:0;
        }
    </style>
</head>
<body>
    <div class="back">
        <button type="button"class="btn btn-primary"><a href="{{url('/')}}">Back</a></button>
    </div>
    <div class="signup">
        <h1>SIGN UP</h1>
        <form method="Post" action='/signup' onsubmit = "return checkblank()" enctype="multipart/form-data">
            @csrf
            <div class='form-outline form-white mb-4'>
            <input type="text" placeholder="First Name.." name='fname' id = "fname" class='form-control form-control-lg'>
            <small id="fnameval" class="form-text invalid-feedback"></small>
            </div>
            <div class='form-outline form-white mb-4'>
            <input type="text" placeholder="Last Name.." name='lname' id = "lname" class='form-control form-control-lg'>
            <small id="lnameval" class="form-text invalid-feedback"></small>
                      </div>
            <div class='form-outline form-white mb-4'>
            <input type="email" placeholder="Email.." name='email' id = "email" class='form-control form-control-lg'>
            <small id="emailval" class="form-text invalid-feedback"></small>
                      </div>
            <div class='form-outline form-white mb-4'>
            <input type="number" placeholder="Contact No.." name='cnumber' id = "cnumber" class='form-control form-control-lg'>
            <small id="cnumberval" class="form-text invalid-feedback"></small>
                      </div>
            <div class='form-outline form-white mb-4'>
            <input type="text" placeholder="Username.." name='uname' id = "uname" class='form-control form-control-lg'>
            <small id="unameval" class="form-text invalid-feedback"></small>
                      </div>
            <div class='form-outline form-white mb-4'>
            <input type="password" placeholder="Password.." name='pswd' id = "pswd" class='form-control form-control-lg'>
            <small id="pswdval" class="form-text invalid-feedback"></small>
            </div>
            <?php
                if (empty($error)){}
                else{echo "<b>".$error."</b>"; } 
            ?>
            <button type="submit" id = "but" class="btn btn-primary" >Submit</button>
        </form>
    </div>
    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="{{ url('/') }}" > HotelBliss.com</a>
        </div>
    </footer> 
    
    <script>
        
        function checkblank(){
            var check = true;
            var arr = [fname,lname,email,cnumber,uname,pswd];
            var arr1 = [fnameval,lnameval,emailval,cnumberval,unameval,pswdval];
            var arr2 = ["First name","Last name","Email","Phone number","Username","Password"]
            for(var i = 0 ;i < arr.length;i++){
                if(arr[i].value === ""){
                    arr[i].classList.add('is-invalid');
                    arr1[i].innerHTML = arr2[i]+" cannot be blank";
                    check = false;
                }
            }
            fname.addEventListener('blur', () => {
            let fname_regexp = /^[ a-zA-Z\-/']{3,30}$/;
            if (fname.value === "") {
                fname.classList.add('is-invalid');
                setErrorFor(fname, "First Name cannot be blank");
            }
            else if (!fname_regexp.test(fname.value)) {
                fname.classList.add('is-invalid');
                setErrorFor(fname, "First Name must be more than 2 char");
            }  
            else {
                 fname.classList.remove('is-invalid');
            }
         
        })
        lname.addEventListener('blur', () => {
            let lname_regexp = /^[ a-zA-Z\-/']{3,10}$/;
            if (lname.value === "") {
                lname.classList.add('is-invalid');
                setErrorFor(lname, "Last Name cannot be blank");
            }
            else if (!lname_regexp.test(lname.value)) {
                lname.classList.add('is-invalid');
                setErrorFor(lname, "last Name must be more than 2 char");
            }  
            else {
                 lname.classList.remove('is-invalid');
            }
         
        })
        uname.addEventListener('blur', () => {
            let uname_regexp = /^[a-zA-Z0-9]{6,20}$/;
            if (uname.value === "") {
                uname.classList.add('is-invalid');
                setErrorFor(uname, "User Name cannot be blank");
            }
            else if (!uname_regexp.test(uname.value)) {
                uname.classList.add('is-invalid');
                setErrorFor(uname, "User Name must be more than 5 char");
            }  
            else {
                 uname.classList.remove('is-invalid');
            }
         
        })
        cnumber.addEventListener('blur', () => {
            let cnumber_regexp = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
            if (cnumber.value === "") {
                cnumber.classList.add('is-invalid');
                setErrorFor(cnumber, "Phone number cannot be blank");
            }
            else if (!cnumber_regexp.test(cnumber.value)) {
                cnumber.classList.add('is-invalid');
                setErrorFor(cnumber, "enter correct format");
            }  
            else {
                 uname.classList.remove('is-invalid');
            }
         
        })
        email.addEventListener('blur', () => {
            let email_regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (email.value === "") {
                email.classList.add('is-invalid');
                setErrorFor(email, "Email cannot be blank");
            }
            else if (!email_regexp.test(email.value)) {
                email.classList.add('is-invalid');
                setErrorFor(email, "Not a valid email");
            }  
            else {
                 email.classList.remove('is-invalid');
            }
         
        })
        pswd.addEventListener('blur', () => {
            let pswd_regexp = /^[a-zA-Z]([0-9a-zA-Z]){8,}$/;
            if (pswd.value === "") {
                pswd.classList.add('is-invalid');
                setErrorFor(pswd, "Password cannot be blank");
            }
            else if (!pswd_regexp.test(pswd.value)) {
                pswd.classList.add('is-invalid');
                setErrorFor(pswd, "more than 7 char");
            }  
            else {
                 pswd.classList.remove('is-invalid');
                 pswd.style.borderColor = "darkgreen";
            }
         
        })
    
        function setErrorFor(input, message) {
            var arr = [fname,lname,email,cnumber,uname,pswd];
            var arr1 = [fnameval,lnameval,emailval,cnumberval,unameval,pswdval];
            var num;
            for(var i = 0 ;i < arr.length;i++){
                if(arr[i] == input){
                    num = i;
                    break;
                }
            }
            arr1[num].innerHTML = message;
        }
        if(check == true){
            return true;
        }
        else{
            return false;
        }
        }
        fname.addEventListener('blur', () => {
            let fname_regexp = /^[ a-zA-Z\-/']{3,30}$/;
            if (fname.value === "") {
                fname.classList.add('is-invalid');
                setErrorFor(fname, "First Name cannot be blank");
            }
            else if (!fname_regexp.test(fname.value)) {
                fname.classList.add('is-invalid');
                setErrorFor(fname, "First Name must be more than 2 char");
            }  
            else {
                 fname.classList.remove('is-invalid');
            }
         
        })
        lname.addEventListener('blur', () => {
            let lname_regexp = /^[ a-zA-Z\-/']{3,10}$/;
            if (lname.value === "") {
                lname.classList.add('is-invalid');
                setErrorFor(lname, "Last Name cannot be blank");
            }
            else if (!lname_regexp.test(lname.value)) {
                lname.classList.add('is-invalid');
                setErrorFor(lname, "last Name must be more than 2 char");
            }  
            else {
                 lname.classList.remove('is-invalid');
            }
         
        })
        uname.addEventListener('blur', () => {
            let uname_regexp = /^[a-zA-Z0-9]{6,20}$/;
            if (uname.value === "") {
                uname.classList.add('is-invalid');
                setErrorFor(uname, "User Name cannot be blank");
            }
            else if (!uname_regexp.test(uname.value)) {
                uname.classList.add('is-invalid');
                setErrorFor(uname, "User Name must be more than 5 char");
            }  
            else {
                 uname.classList.remove('is-invalid');
            }
         
        })
        cnumber.addEventListener('blur', () => {
            let cnumber_regexp = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
            if (cnumber.value === "") {
                cnumber.classList.add('is-invalid');
                setErrorFor(cnumber, "Phone number cannot be blank");
            }
            else if (!cnumber_regexp.test(cnumber.value)) {
                cnumber.classList.add('is-invalid');
                setErrorFor(cnumber, "enter correct format");
            }  
            else {
                 uname.classList.remove('is-invalid');
            }
         
        })
        email.addEventListener('blur', () => {
            let email_regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (email.value === "") {
                email.classList.add('is-invalid');
                setErrorFor(email, "Email cannot be blank");
            }
            else if (!email_regexp.test(email.value)) {
                email.classList.add('is-invalid');
                setErrorFor(email, "Not a valid email");
            }  
            else {
                 email.classList.remove('is-invalid');
            }
         
        })
        pswd.addEventListener('blur', () => {
            let pswd_regexp = /^[a-zA-Z]([0-9a-zA-Z]){8,}$/;
            if (pswd.value === "") {
                pswd.classList.add('is-invalid');
                setErrorFor(pswd, "Password cannot be blank");
            }
            else if (!pswd_regexp.test(pswd.value)) {
                pswd.classList.add('is-invalid');
                setErrorFor(pswd, "more than 7 char");
            }  
            else {
                 pswd.classList.remove('is-invalid');
                 pswd.style.borderColor = "darkgreen";
            }
         
        })
    
        function setErrorFor(input, message) {
            var arr = [fname,lname,email,cnumber,uname,pswd];
            var arr1 = [fnameval,lnameval,emailval,cnumberval,unameval,pswdval];
            var num;
            for(var i = 0 ;i < arr.length;i++){
                if(arr[i] == input){
                    num = i;
                    break;
                }
            }
            arr1[num].innerHTML = message;
        }
      
                 
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/91905025ca.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <h1>Hotel Bliss</h1>
    <div class="container">
        <p>ADMIN PANEL</p>
        <form action='/adminlogin' method='post' onsubmit = "return checkblank()" enctype="multipart/form-data">
        @csrf
        <div class='form-outline form-white mb-4'>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Username.." name='uname' id = "uname" class='form-control form-control-lg'>
            <small id="unameval" class="form-text invalid-feedback"></small>
        </div>
        <div class='form-outline form-white mb-4'>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Password.." name='psw' id = "psw" class='form-control form-control-lg'>
            <small id="pswdval" class="form-text invalid-feedback"></small>
        </div>
        <?php
        if (empty($error)){}
        else{echo $error; } 
        ?>
        <button type="submit" class="btn btn-primary">LogIn</button>
        <button type="button" class="btn btn-secondary"><a href="{{ url('/') }}">Cancel</a></button>
        </form>
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
        function checkblank(){
            var check = true;
            var arr = [uname,psw];
            var arr1 = [unameval,pswdval];
            var arr2 = ["Username","Password"]
            for(var i = 0 ;i < arr.length;i++){
                if(arr[i].value === ""){
                    arr[i].classList.add('is-invalid');
                    arr1[i].innerHTML = arr2[i]+" cannot be blank";
                    check = false;
                }
            }


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
        psw.addEventListener('blur', () => {
            let pswd_regexp = /^[a-zA-Z]([0-9a-zA-Z]){8,}$/;
            if (psw.value === "") {
                psw.classList.add('is-invalid');
                setErrorFor(psw, "Password cannot be blank");
            }
            else if (!pswd_regexp.test(psw.value)) {
                psw.classList.add('is-invalid');
                setErrorFor(psw, "more than 7 char");
            }  
            else {
                 psw.classList.remove('is-invalid');
                 psw.style.borderColor = "darkgreen";
            }
         
        })
        function setErrorFor(input, message) {
            var arr = [uname,psw];
            var arr1 = [unameval,pswdval];
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
        psw.addEventListener('blur', () => {
            let pswd_regexp = /^[a-zA-Z]([0-9a-zA-Z]){8,}$/;
            if (psw.value === "") {
                psw.classList.add('is-invalid');
                setErrorFor(psw, "Password cannot be blank");
            }
            else if (!pswd_regexp.test(psw.value)) {
                psw.classList.add('is-invalid');
                setErrorFor(psw, "more than 7 char");
            }  
            else {
                 psw.classList.remove('is-invalid');
                 psw.style.borderColor = "darkgreen";
            }
         
        })
        function setErrorFor(input, message) {
            var arr = [uname,psw];
            var arr1 = [unameval,pswdval];
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
<?php
/*session_start();
if(isset($_SESSION['login'])){
   if($_SESSION['login']){
       header("location:home.php");
       die;
   }
}*/
?>
<!DOCTYPE html>

<head>
    <title>FandomNet - Login</title>
    <link rel="stylesheet" type="text/css" href="css\stylesheet.css" />
    <script type="text/javascript" src="/js/functions.js" ></script>
</head>

<body>
    <div class="center">
        <p id="thetopfandoms"> Top Fandoms of the week</p>
        <br>
        <br>
        <span id="topfandoms">
            <img src="img\disney.svg" height="50px" class="fandoms">
            <img src="img\starwars.svg" height="50px" class="fandoms">
            <img src="img\sherlock.png" height="50px" class="fandoms1">
            <img src="img\supernatural.png" height="50px"class="fandoms1">
            <img src="img\harry potter.svg" height="60px" class="fandoms">
        </span>


        <form id="login" action="login.php" method="post" onsubmit="return validate()">
            Username: <br>
            <input type="text" name="email" class="input" id="email" accesskey="u"></br>
            </br>
            Pasword:<br>
            <input type="password" name="password" class="input" id="password" accesskey="p"></br>
            <input type="submit" id="submit" class="submit" value="Login" /> <input type="button" onclick="redirecttoregister()" value="Register" id="button" />
        </form>
    </div>
</body>

</html>
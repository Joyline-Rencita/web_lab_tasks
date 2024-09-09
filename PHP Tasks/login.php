<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <form id="loginForm">
    USERNAME:<input type="text" name ="username" id="username">
    <br><br>
    PASSWORD:<input type="password" name="pass" id="pass">
    <div id = "result"></div><br>
    <button id = "login" onclick="display()">Login</button>
    <?php 
    
    ?>
    </form>
    
    <script>
        function display(){
            //document.getElementById("result").innerHTML = "Hello World!!";

//AJAX             // const xhttp = new XMLHttpRequest();
            // xhttp.onload = function() {
            //     document.getElementById("result").innerHTML = this.responseText;
            // }
            // xhttp.open("GET","authenticate.php",true);
            // xhttp.send();

/* jquery */
            // $("#result").load("authenticate.php");
            name = $('#username').val();
            password = $('#pass').val();
            // var jqxhr = $.get("authenticate.php?username="+name+"&pass="+password);
            // jqxhr.done(function(data)  {document.getElementById("result").innerHTML=data;});
            // var jqxhr = $.get("/authenticate.php","username="+name+"&pass="+password);
            // jqxhr.done(function(data)  {document.getElementById("result").innerHTML=data;});
                alert($('#loginForm').serialize());
            $.ajax({
                url:"authenticate.php",
                data: $('#loginForm').serialize(),
                async:true,
                type: post,
                // success:function(data){
                //     document.getElementById("result").innerHTML = this.responseText;
                // }
            }
            );
        }



    </script>
</body>
</html>

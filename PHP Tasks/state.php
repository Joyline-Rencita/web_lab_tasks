<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="states.php" method="post">
    <p>State :
        <select name="state" id="state">
            <option >Select state from below</option>
            <option value="Goa">Goa</option>
            <option value="Gujarath">Gujarath</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Maharastra">Maharastra</option>
        </select>
    </p><br><br>
    <input type="submit" value="Submit"/><br><br>
    </form>
    
    <script>
        function display(){
//AJAX      
            // const xhttp = new XMLHttpRequest();
            // xhttp.onload = function() {
            //     document.getElementById("result").innerHTML = this.responseText;
            // }
            // xhttp.open("GET","city.php",true);
            // xhttp.send();
             }
/* jquery */
/*
            // $("#result").load("authenticate.php");
            name = $('#username').val();
            password = $('#pass').val();
            var jqxhr = $.get("authenticate.php?username="+name+"&pass="+password);
            jqxhr.done(function(data)  {document.getElementById("result").innerHTML=data;});
            } */

    </script>
</body>
</html> 

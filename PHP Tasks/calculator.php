<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
        function display(){
         op1 = $('#txt1').val();
         op2 = $('#txt2').val();
          
                    Method1 :  using load 

            $('#res').load("calci.php?txt1="+op1+"&txt2="+op2);
            $('#res').load("calci.php?"+$("#calculate").serialize());

                    Method2 :  JQuery

            var jqxhr = $.get("calci.php?txt1="+op1+"&txt2="+op2);
            jqxhr.done(function(data)  {$('#res').text(data)});

                Method 3 : HTTPRequest()

            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                alert(this.responseText);
                document.getElementById("res").innerHTML = this.responseText;
            }
            xhttp.open("GET","calci.php?txt1="+op1+"&txt2="+op2,true);
            xhttp.send();

            
        }
    </script>
</head>
<body>
    <form id="calci">
   <p> USERNAME: <input type="text" id="txt1" name="txt1"></p>
   <p>PASSWORD: <input type="text" id="txt2" name="txt2"></p>
    <button id="btnAdd" onclick="display()">ADD</button>
    <button id="btnSub" onclick="display()">SUB</button>
    <div id="res" ></div>
    </form>
</body>
</html>

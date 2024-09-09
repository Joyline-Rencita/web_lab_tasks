<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:solid 2px black;
            margin-left: auto;
            margin-right: auto;
            height: 190px;
            width: 250px;
            margin-top: 70px;
            border-collapse: collapse;
        }
        tr,td{
            border:solid 1px black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div id="paint"></div>
    <button id="btn1" onclick="display()">Show Painting</button>
    <script>
        function display()
        {
            xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","paint.xml",false);
            xmlhttp.send();
            xmlDoc =xmlhttp.responseXML;
            str = "<table>";
            paintings =xmlDoc.getElementsByTagName("painting");
            if(paintings)
            {
               
                for(var i=0; i<paintings.length;i++){
                    title =paintings[i].getElementsByTagName("title");
                    str += "<tr><td>Title</td><td>"+title[0].textContent+"</td>";

                    artist =paintings[i].getElementsByTagName("artist");
                    name = artist[0].getElementsByTagName("name");
                    str += "<td>Name</td><td>"+name[0].textContent+"</td>";

                    nationality = artist[0].getElementsByTagName("nationality");
                    str += "<td>Nationality</td><td>"+nationality[0].textContent+"</td>";

                    year = paintings[i].getElementsByTagName("year");
                    str += "<td>Year</td><td>"+year[0].textContent+"</td>";

                    medium = paintings[i].getElementsByTagName("medium");
                    str += "<td>Medium</td><td>"+medium[0].textContent+"</td></tr>";
                }
            }
            str += "</table>";
            document.getElementById("paint").innerHTML = str;
        // var xhr = new XMLHttpRequest();
        // xhr.addEventListener(load,)
         }
        
        

        
    </script>
</body>
</html>

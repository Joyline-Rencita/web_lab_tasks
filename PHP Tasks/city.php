<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $state = $_POST["state"];
        if(isset($state))
        {
            if($state == "Karnataka")
            {
                echo "City : <select name='city'><option value='Bangalore'>Bangalore</option><option value='Mangalore'>Mangalore</option><option value='Mysuru'>Mysuru</option></select>";
            }
            if($state == "Goa")
            {
                echo "City : <select name='city'><option value='Panaji'>Panaji</option><option value='Panjim'>Panjim</option></select>";
            }
            if($state == "Gujarath")
            {
                echo "City : <select name='city'><option value='Surath'>Surath</option><option value='Ahmedabad'>Ahmedabad</option><option value='Rajkot'>Rajkot</option></select>";
            }
            if($state == "Kerala")
            {
                echo "City : <select name='city'><option value='kochi'>kochi</option><option value='Kannur'>Kannur</option><option value='Chalakudi'>Chalakudi</option></select>";
            }
        }
    ?>
</body>
</html>

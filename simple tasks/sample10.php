<html>
    <head>
        <title>Profile</title>
        <style></style>
    </head>
    <body>
        <form action="profile1.php" method="post" >
            <div id="name">Name:<input type="text" id="userName" name="userName"></div>
            <div id="gen">Gender<input type="radio" name="gender" id="male" value="Male">Male <input type="radio" name="gender" id="female" value="Female">Female</div>
            <div id="dob">DOB: <input type="date" id="date" name="date"></div>
            <div id="email">Email:<input type="email" id="email" name="email"></div>
            <div id="mob">Mobile Number:<input type="number" id="phno" name="phno"></div>
            <div id="state" name="state" >
                <select name="state" id="state">
                State: 
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                </select>
            </div>
            <div id="edu">Education:  Under Graduate<input type="checkbox" name="education" id="edu1" value="Under Graduate ">Post Graduate<input type="checkbox" name="education" id="edu2" value="Post Graduate"> </div>
           <div id="desc" name="desc"> <textarea id="w3" name="w3" rows="3" cols="25"></textarea></div>
            <p><input type="reset" id="btn1" value="Clear "></p>
            <p><input type="submit" id="btn2" value="Submit"></p>
        </form>
    </body>
</html>

<?php 
    $name = $_POST["userName"];
    $male = $_POST["gender"];
    $female = $_POST["gender"];
    $dob =  $_POST["date"];
    $email = $_POST["email"];
    $number = $_POST["phno"];
    $state = $_POST["state"];
    $education =  $_POST["education"];
    $description = $_POST["desc"];

    echo "Name:".$name."<br>";
    
?>

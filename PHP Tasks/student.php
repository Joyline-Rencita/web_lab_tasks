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
        class Student{
            public static $counter=0;
            private $usn;
            private $firstName;
            private $lastName;
            private $marks;

            function __construct($usn,$fName,$lName,$marks){
                $this->usn = $usn;
                $this->firstName= $fName;
                $this->lastName= $lName;
                $this->marks=$marks;
                self::$counter++;
            }
            public function displayStudent(){
                echo "USN: ".$this->usn."<br>";
                echo "First Name: ".$this->firstName."<br>";
                echo "Last Name: ".$this->lastName."<br>";
                echo "Marks: ".$this->marks."<br>";
                echo "Number of Objects created: ".self::$counter."<br>";
            }

        }
        $st1 = new Student("4so20cs073","Joyline","Dsouza","90");
        $st2 = new Student("4so20cs073","Rencita","Dsouza","90");
        
 //     $st1->addStudent("4so20cs073","Rencita","Dsouza","90");
        $st1->displayStudent();
        $st2->displayStudent();

    //   echo "USN: ".$st1->usn."<br>";
    //   echo "First Name: ".$st1->firstName."<br>";
    //   echo "Last Name: ".$st1->lastName."<br>";
  //      echo "Marks: ".$st1->marks;
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astract n polymorphim</title>
</head>
<body>
    <h1>ASTRACT PILLAR</h1>
    <?php
    abstract class birds{
        abstract public function birdname();
        abstract public function birdcolor();
        abstract public function birdbiological();


    }

    class bird1 extends birds{
        public function birdname(){
            echo "eagle";
        }
        public function birdcolor(){
            echo "black";
        }
        public function birdbiological(){
            echo "Aquila";
        }

    }
    $obj1 = new bird1();
    $obj1->birdname();
    echo "<br>";
     $obj1 = new bird1();
    $obj1->birdcolor();
     echo "<br>";
     $obj1 = new bird1();
    $obj1->birdbiological();

    echo "<h1>polymorphim</h1>"

    class subjects{
        public function science()
        {
            echo "<p>subjects of science</p>";
        } 
    }
    class biology extends subjects{
        public function science(){
            echo "study of life";
        }
    }
    class physics extends subjects{
        public function science(){
            echo "study of interaction of matter";
        }
    }
    class chemistry extends subjects{
        public function science(){
            echo "study of chemicals";
        }
    }
    $subjects = [new biology(), new physics() , new chemistry()];
     foreach($subjects as $value){
    $value->science();
    echo "<br>";
     }
    ?>
</body>
</html>
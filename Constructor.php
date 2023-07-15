<!doctype html>
<html>
    <body>

    <?php
    Class Fruit {
        public $name;
        Public $color;
        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;

        }
        function get_name(){
            return "Fruit Name is: ". $this->name ."<br>". "Fruit Color is: " .$this->color;
        }
    }
    $apple = new Fruit("Apple","Red");
    echo "<br>";
    echo $apple->get_name();
    ?>
</body>
</html>

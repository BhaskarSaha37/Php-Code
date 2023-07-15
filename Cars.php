<!doctype html>
<html>
    <Body>

    <?php
    $cars=array(
        array("Bmw",15,20),
        array("Jaguar",25,30),
        array("Thar",85,210),
    );
    
    echo "Car Name: ".$cars[0][0].", In-Stock: ".$cars[0][1].", Sold: ".$cars[0][2].".";
    echo "<br>";
    $arrLength=count($cars);
    echo "$arrLength <br>";
    for($x=0;$x<$arrLength;$x++){
        for($y=0;$y<$arrLength;$y++){
            if($y==0)
            echo "Car Name: ".$cars[$x][$y];
            if($y==1)
            echo ", In-Stock: ".$cars[$x][$y];
            if($y==2)
            echo ", Sold: ".$cars[$x][$y]. ".";            
        }
        echo "<br>";
    }
    ?>

    </Body>
</html>
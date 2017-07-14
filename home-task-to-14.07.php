<!DOCTYPE html> 
<html>
    <head>
        <title>home task</title>
    </head>
    <body>
        <p>про Петю и Васю</p>
        <?php
            $number = 325;
            if ($number % 10 == 0 || $number % 5 != 0) {
                echo "ваше число не оканчивается на 5";

            }else {
                $result = (int) ($number/10);   
                $result = ($result * ($result+1)) . "25";
                echo "Петя: " . $result . " Вася: " .    $number ** 2;
            }
        ?>
        <br>
        <br>
        <br>
        <br>
        <p>массив случайных нечетных чисел</p>
        <?php
            for ($range=0; $range<10; $range++) {
                $print = rand(0, 1000);
                if ($print % 2 != 0) {
                    echo $print . " ";
                }
                
                for ($range2=0; $range2<10; $range2++) {
                    $print2 = rand(0, 1000);
                    if ($print2 % 2 != 0) {
                        echo $print2 . " ";
                    }
                }
                echo "<br>";
            }
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <p>сортировка случайных чисел массива</p>
        
        <?php
        echo "<br>";
        echo "<br>";
        echo "<br>";
            $a = array();
            for ($ascending=0; $ascending<10; $ascending++) {
                for ($ascending2=0; $ascending2<10; $ascending2++) {
                    $a[$ascending][$ascending2]=rand(0, 1000);
                    echo $a[$ascending][$ascending2];
                }
                echo "<br>";
            }
           
        echo "<br>";
        echo "<br>";
        echo "<br>";
            
            
            for($i=count($a); $i>=0; $i--){
                $a[$i] = $i * 2;
            }
            
            
            
        echo "<br>";
        echo "<br>";
        echo "<br>";
            echo "<PRE>";
                print_r($a);
            echo "</PRE>";
        ?>
        
    </body>
</html>


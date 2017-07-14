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
        function startSort(array $sortArr){
	$ret = '';
	foreach ($sortArr as $oneColumn)
		$ret[] = bubleSort($oneColumn);

	return $ret;
}

function bubleSort(array $sortArr){

	if(count($sortArr)) {
		do {
			$isSorted = false;

			$baseValue = $sortArr[0];
			for($i=1;$i<count($sortArr);$i++){
				if($baseValue>$sortArr[$i]){
					$sortArr[$i-1] = $sortArr[$i];
					$isSorted = true;
				}else{
					$sortArr[$i-1] = $baseValue;
					$baseValue = $sortArr[$i];
				}
			}

			$sortArr[count($sortArr)-1] = $baseValue;
		} while ( $isSorted );
	}

	return $sortArr;
}

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





        echo "<br>";
        echo "<br>";
        echo "<br>";
            echo "<PRE>";
                print_r($a);
            echo "</PRE>";


            echo 'Результаты сортировки';

echo "<PRE>";
print_r(startSort($a));
echo "</PRE>";
        ?>
        
    </body>
</html>


<?php 

class SpeSkillTest {
    public static function narcissistic($number){
        $sum = 0;
        $temp_number = str_split($number);
        $length = strlen($number);

        foreach($temp_number as $row){
            $sum += pow($row, $length);
        }

        return $sum == $number ? 'true' : 'false';
    }

    public static function parity($array_number){
        $odd = [];
        $even = [];
        foreach($array_number as $row){
            if($row % 2 == 0){
                $odd[] = $row;
            }else{
                $even[] = $row;
            }
        }        

        return count($even) === 1 ? $even[0] : (count($odd) > 0 ? $odd[0] : 'false');
    }

    public static function findNeedle($array_string, $needle){
        foreach($array_string as $key => $row){
            if($row == $needle){
                return $key;
            }
        }
        
        return 'false';
    }

     public static function blueOcean($array_string, $array_needle){
        return array_diff($array_string, $array_needle);
    }

}

$SpeSkillTestObject = new SpeSkillTest();

echo "NARCISSISTIC NUMBER : ";
echo $SpeSkillTestObject->narcissistic(153);
echo "<br>";

echo "PARITY OUTLIER : ";
echo $SpeSkillTestObject->parity([11, 13, 15, 19, 9, 13, -21, -21]);
echo "<br>";

echo "NEEDLE IN THE HAYSTACK : ";
echo $SpeSkillTestObject->findNeedle(["red", "blue", "yellow", "black", "grey"], "blue");
echo "<br>";

echo "BLUE OCEAN REVERSE : ";
print_r($SpeSkillTestObject->blueOcean([1,5,5,5,5,3], [5]));
echo "<br>";

?>
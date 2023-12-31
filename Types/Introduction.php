<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <a href="https://www.php.net/manual/en/language.types.intro.php">Source Link</a>
    <?php 
    /**
     * Data type is php
     * null 
     * bool
     * int 
     * string
     * float
     * array
     * object
     * callable
     * resource
     */

     $double = function($value)
     {
        return $value*2;
     };

     $number = range(1,5);

     $array_number = array_map($double, $number);

     echo implode(' ', $array_number);

     //array_walk
     class mc{
        public function go(array $arr)
        {
            array_walk($arr, array($this, 'Walk'));
        }

        private function Walk($val)
        {
            echo $val . "<br/>";
        }
     }

     $data = [1,2,3,4];
     $obj = new mc();
     
     $obj->go($data);
    ?>
</body>
</html>
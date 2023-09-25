<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="https://www.php.net/manual/en/language.types.array.php">Source Link</a>
    <?php 
    /**
     * array structure ---- 
     * array()
     * []
     */
    $arr = array(1,2,3,4,5,6);
    foreach($arr as $value)
    {
        echo $value."<br/>";
    }
    
    //Example #7 Accessing array elements
    $array = array(
        "foo" => "bar",
        42    => 24,
        "multi" => array(
             "dimensional" => array(
                 "array" => "foo"
             )
        )
    );

    echo $array['multi']['dimensional']['array'];

    $arr['key'] = 'value';
    $arr[] = 'value';
    // key may be an int or string
    // value may be any value of any type

    //Array destructuring ¶
    $source_array = ['foo', 'bar', 'baz'];
    [$a, $b, $c] = $source_array;
    echo $a;
    echo $b;
    echo $c;
    ?>
</body>
</html>
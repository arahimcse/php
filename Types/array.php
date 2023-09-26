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
    $arr = array(1, 2, 3, 4, 5, 6);
    foreach ($arr as $value) {
        echo $value . "<br/>";
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

    // Task 1:
    $student = array(
        'name' => 'Alice',
        'age' => 22,
        'grade' => 'A'
    );
    echo "Age of the student: " . $student['age'];

    // Task 2:
    $student = array(
        'name' => 'Alice',
        'age' => 22,
        'grade' => 'A'
    );
    if (array_key_exists('grade', $student)) {
        echo "'grade' key exists in the array.\n";
    } else {
        echo "'grade' key does not exist in the array.\n";
    }

    // Task 3:
    $numbers = array(100, 200, 50, 40, 50);
    foreach ($numbers as $number) {
        echo $number . "\n";
    }

    //Task 4:
    $names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];
    $filteredNames = array_filter($names, function ($name) {
        return substr($name, 0, 1) === 'M';
    });
    foreach ($filteredNames as $name) {
        echo $name . "\n";
    }

    // Task 5:
    $originalString = 'Hello, World!';
    $reversedString = strrev($originalString);
    echo $reversedString;

    function getArray() {
        return array(1, 2, 3);
    }
    
    $secondElement = getArray()[1];

    ?>
</body>

</html>
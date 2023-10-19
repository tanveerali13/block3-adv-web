<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Write something and check if it is a palindrome</h3>
    <form action="" method="post">
        <input type="text" placeholder="Write here" name="string">
        <input type="submit" value="Check" id="checkBtn">
    </form>
</body>

</html>

<?php

//// Displaying errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $string = $_POST['string'];

    isPalindrome($string);
}

function isPalindrome($string)
{
    $str1 = [];
    $strReverse = [];
    $i = 0;
    while (isset($string[$i])) {
        if ($string[$i] != ' ') {
            $str1[] = $string[$i];
        }
        $i++;
    }

    //echo count($str1);

    for ($j = count($str1) - 1; $j >= 0; $j--) {
        $strReverse[] = $str1[$j];

    }

    //print_r($strReverse);

    if ($str1 == $strReverse) {
        echo "$string - is palindrome";
    } else {
        echo "$string - is not palindrome";
    }
}

?>
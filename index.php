<?php

$age = 28;
echo "\n";
define("PI", 3.14159);

$constant = "constant";
echo "value of PI = {$constant("PI")}";
echo "\n";

echo "Hello, welcome to the world of PHP programming!";
echo "\n";

$result = ((20 + 5) * 3) / 4;
echo "Result: " . $result;
echo "\n";

$score = 73;

$result = ($score >= 60) ? "Passed" : (($score <= 80) ? "Passed" : "Failed");

echo "Result: $result";

?>

<?php
// 1
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . "\n";
}
//2
function greet($name) {
    echo "Hello, $name! Welcome";
}

greet("Souvik");
// 3
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 8; 
$result = factorial($number);
echo "The factorial of $number is $result";

// 4
function fibonacci($n) {
    $num = array(0, 1);

    if ($n < 1) {
        return;
    }

    echo $num[0];
    
    for ($i = 1; $i < $n; $i++) {
        echo ", " . $num[1];
        $temp = $num[0] + $num[1];
        $num[0] = $num[1];
        $num[1] = $temp;
    }
}
fibonacci(10)

?>
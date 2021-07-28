<?php

// 1-Write a script to get longest name of array $names
$names = ['Esraa', 'Khloud', 'Fatma', 'Ahmed','Mahmoud'];

$lengths = array_map('strlen', $names);
$maxLength = max($lengths);
$index = array_search($maxLength, $lengths);
echo " the longest name is $names[$index] and its length is $maxLength <br>";

//2- Removing elements from numeric arrays causes missing indexes. 
//Write a script to reset the array indexes. 
//(You can use any predefined functions)

unset($names[2]); 
print_r( array_values( $names ));
echo '<br>';


//We have an array $salaries which contains integers and floats.
//Write a script to round the floats and format all numbers.

$salaries = [ 5000 , 6000.50 , 7100.25 , 10000];
foreach($salaries as $salary){
    print_r(round($salary).'  ');
}
echo '<br>';

//Write a script to generate a random password with a given $length.
//The password can contain any ASCII character starting from 33 (! symbol) to 126 (~ symbol)

$length = 8;
$password = '';
for($i=0 ; $i<= $length ; $i++){
 //Append a random ASCII character (including symbols)
    $password .= chr(rand(32, 126));    
};
echo $password.'<br>';


//Write a script to shuffle array elements. (Don’t use shuffle predefined function)
$names = ['Esraa', 'Khloud', 'Fatma', 'Ahmed','Mahmoud'];

$i = count($names); 
while(--$i) {
        $temp = '';
        $j = mt_rand(0, $i);
         if ($i != $j) { 
     $temp =$names[$i];
     $names[$i] =$names[$j];
     $names[$j] = $temp;
         }
};
print_r($names);
echo'<br>';

//Write a script to calculate the number of digits in an integer.
// (Without converting it to any other data type)
$num = 5069842133;
$numlength = strlen((string)$num);
echo " the length of this number $num is $numlength ";

//Write a script to display names in a dynamic HTML list:
$Names = ['ahmed', 'mohammed', 'hasan'];

echo "<ul>";
foreach($Names as $i => $name){
echo "<li>$Names[$i]</li>";
echo "<br>";
}
echo "</ul>";

//We have a 2D array for instructors (outer is numeric, inner is associative):
    $instructors = [
        'kareem fouad' => [
            'job' => 'backend developer',
            'track' => 'php',
        ],
        'ahmed bahnasy' => [
            'job' => 'frontend developer',
            'track' => 'angular',
        ],
        'ahmed nasr' => [
            'job' => 'backend developer',
            'track' => '.net',
        ],
    ];

    echo "<ul>";
 foreach($instructors as $key => $value){
    echo "<li>$key </li>";
     echo "<ul> ";
     foreach($value as $key1 => $value1){
    echo "<li>$key1 : $value1 </li>";
    echo "<br>";
     }
     echo "</ul>";
};

echo "</ul>";




?>
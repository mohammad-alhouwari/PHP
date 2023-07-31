<?php

// Sample array
$fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes" ,);

// Method 1: Using print_r() to print the entire array
echo "Method 1: Using print_r()<br>";
print_r($fruits);
echo "<br><br>";

// Method 2: Using var_dump() to print the entire array with data types
echo "Method 2: Using var_dump()<br>";
var_dump($fruits);
echo "<br><br>";

// Method 3: Using a loop to print each element of the array
echo "Method 3: Using a loop to print each element<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br>";

// Method 4: Accessing array elements directly
echo "Method 4: Accessing array elements directly<br>";
echo "Fruit 1: " . $fruits[0] . "<br>";
echo "Fruit 2: " . $fruits[1] . "<br>";
echo "Fruit 3: " . $fruits[2] . "<br>";
echo "Fruit 4: " . $fruits[3] . "<br>";
echo "Fruit 5: " . $fruits[4] . "<br>";
echo "<br>";

// Method 5: Using implode() to print array elements as a string
echo "Method 5: Using implode() to print as a single string<br>";
$fruitsString = implode(", ", $fruits);
echo $fruitsString;
echo "<br> <br>";

///////////////////////////////////Array functions ////////////////////////////////////////////

// Sample array
$numbers = array(2, 4, 6, 8, 10, 12);

// 1. count() - Get the number of elements in the array
echo "Number of elements in the array: " . count($numbers) . "<br> <br>";

// 2. in_array() - Check if a value exists in the array
$valueToFind = 6;
if (in_array($valueToFind, $numbers)) {
    echo "$valueToFind exists in the array.<br> <br>";
} else {
    echo "$valueToFind does not exist in the array.<br>";
}

// 3. array_push() - Add elements to the end of an array
array_push($numbers, 14, 16);
echo "Array after adding elements: ";
print_r($numbers);
echo "<br> <br>";

// 4. array_pop() - Remove the last element from an array
$lastElement = array_pop($numbers);
echo "Removed element: $lastElement<br> <br>";
echo "Array after removing the last element: ";
print_r($numbers);
echo "<br> <br>";

// 5. array_shift() - Remove the first element from an array
$firstElement = array_shift($numbers);
echo "Removed element: $firstElement<br> <br>";
echo "Array after removing the first element: ";
print_r($numbers);
echo "<br> <br>";

// 6. array_unshift() - Add elements to the beginning of an array
array_unshift($numbers, 0, -2);
echo "Array after adding elements to the beginning: ";
print_r($numbers);
echo "<br> <br>";

// 7. array_reverse() - Reverse the order of elements in an array
$reversedArray = array_reverse($numbers);
echo "Reversed array: ";
print_r($reversedArray);
echo "<br> <br>";

// 8. array_sum() - Calculate the sum of all elements in the array
$sum = array_sum($numbers);
echo "Sum of elements in the array: $sum<br> <br>"; 

// 9. array_unique() - Remove duplicate values from an array
$duplicateArray = array(2, 4, 6, 4, 8, 6, 10, 12, 2);
$uniqueArray = array_unique($duplicateArray);
echo "Array after removing duplicates: ";
print_r($uniqueArray);
echo "<br> <br>";

// 10. array_search() - Find the key of a value in an array
$searchValue = 10;
$searchKey = array_search($searchValue, $numbers);
echo "Key of $searchValue in the array: $searchKey<br> <br>";


echo "<h2>For more functions about Array visit this link :</h2> <h1><a href='https://www.php.net/manual/en/ref.array.php'>https://www.php.net/manual/en/ref.array.php</h1> " ;
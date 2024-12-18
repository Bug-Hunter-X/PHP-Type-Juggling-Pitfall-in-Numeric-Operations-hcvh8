```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    // Explicit type checking
    if (is_numeric($number)) {
      $sum += (float) $number;
    } else {
      //Handle non-numeric values appropriately, like throwing an exception or skipping
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Now handles the non-numeric element correctly
```
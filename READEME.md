# 04 Date and Math Operations

## Math

- [ceil()](#ceil)
- [floor()](#floor)
- [round()](#round)
- [abs()](#abs)
- [pow()](#pow)
- [sqrt()](#sqrt)
- [rand()](#rand)
- [mt_rand()](#mt_rand)

  ### ceil()

  `ceil()` rounds a number up to the nearest integer.

  ```php
  echo ceil(5.40); // output: 6
  ```

  ### floor()

  `floor()` method rounds a number down to the nearest integer.

  ```php
  echo floor(5.78); // output: 5
  ```

  ### round()

  `round()` method rounds a number to the nearest integer.

  ```php
  echo round(5.87); // Output: 6
  echo round(5.47); // Output: 5
  ```

  ### abs()

  `abs()` method change negative value to positive value.

  ```php
  echo abs(-67); // Output: 67
  ```

  ### pow()

  `pow()` method calculates the power or root of a number

  ```php
  echo pow(4, 2) // Output: 16
  ```

  ### sqrt()

  `sqrt()` method returns the square root of a number.

  ```php
  echo pow(25) // Output: 5
  ```

  ### rand()

  `rand()` method generates a random integer.

  ```php
  echo rand(1, 10) // Output: random number 1 to 10
  ```

  ### mt_rand()

  `mt_rand()` method generates a better and faster random integer using the Mersenne Twister algorithm

  ```php
  echo mt_rand(13, 20) // Output: random number 1 to 10
  ```

## Date

- [date_default_timezone_set()](#date_default_timezone_set)
- [strtotime()](#strtotime)
- [date()](#date)
- [DateTime()->format()](#datetime-format)
- [DateTime()->diff()](#datetime-diff)
- [DateTime()->modify()](#datetime-modify)

  ### date_default_timezone_set()

  `date_default_timezone_set()` method sets the default timezone for all date/time functions.

  ```php
  date_default_timezone_set("Asia/Dhaka");
  ```

  ### strtotime()

  `strtotime()` method converts a date/time string into a Unix timestamp.

  ```php
  $date = "2003-01-01";
  echo strtotime() // Output: 1041357600
  ```

  ### date()

  `date()` method formats a timestamp into a readable date/time string.

  ```php
  $date = "2003-01-01";
  date_default_timezone_set("Asia/Dhaka");
  echo date('jS, F, l, Y', strtotime($date));

  // Output: 1st, January, Wednesday, 2003
  ```

  ### DateTime()->format()

  `DateTime()->format()` formats a DateTime object into a specified date/time format.

  ```php
  $date = new DateTime("2003/01/01");
  echo $date->format("jS, F, l, Y");

  // Output: 1st, January, Wednesday, 2003
  ```

  ### DateTime()->diff()

  `DateTime()->diff()` calculates the difference between two DateTime objects.

  ```php
  $rahim = "2001/12/21";
  $karim = "2000/12/03";
  $d1 = new DateTime($rahim);
  $d2 = new DateTime($karim);
  $diff = $d1->diff($d2);
  echo $diff->format("%a");

  // Output: 383
  ```

  ### DateTime()->diff()

  `DateTime()->modify()` modifies a DateTime object by adding or subtracting time.

  ```php
  $rahim = "2001/12/21";
  $karim = "2000/12/03";
  $d1 = new DateTime($rahim);
  $d2 = new DateTime($karim);
  $diff = $d1->diff($d2);
  echo $diff->format("%a");

  // Output: 383
  ```

  ### DateTime()->modify()

  `DateTime()->modify()` object

  ```php
  $date = new dateTime();
  $date->modify("1 Year 2 Month 3 days 5 hours");
  // echo $date->format("Y/m/d H:i:s");
  echo $date->format("Y/m/d H:i:s a");

  // Output: 2026/08/19 15:28:04 pm
  ```

<?php

class Assessment
{
    //function defination
    function closestToZero($arr)
    {
        //var declaration and initialise to 0
        $closeToZero = 0;
        //use lookup to search for the numbers
        $lookUp = 0;
        foreach ($arr as $close) {
            if ($closeToZero === 0 || abs($lookUp - $closeToZero) > abs($close - $lookUp)) {
            $closeToZero = $close;
            echo "TEXT";
      }
   }    
   return $closeToZero; 
  
  
}
    
/* test code */
$input = array(7,-10,13,8,4,-7.2,-12,-3.7,3.5,-9.6,6.5,-1.7,-6.2,7);
echo "Result " . closestToZero($input);


// Function to get sum of digits  
function forLoop($n) 
{ 
  
    // calculate sum here
    for ($sum = 0; $n > 0; $sum += $n % 10,  
                                  $n /= 10); 
    return $sum; 
} 
  
// Test Code 
$n = 687; 
echo(forLoop($n)); 

function whileLoop($n) 
{  
    $sum = 0; 
    while ($n != 0) 
    { 
        $sum = $sum + $n % 10; 
        $n = $n/10; 
    } 
    return $sum; 
} 
  
// Test Code    
$n = 687; 
$res = whileLoop($n); 
echo("$res");


function recursiveFunction($no) 
{ 
return $no == 0 ? 0 : $no % 10 +  
                      sumDigits($no / 10) ; 
} 
  
// Test Code 
echo recursiveFunction(687); 
  
function combineArrays()
{
    $listNo1 = array(a, b, c);
    $listNo2 = array(1, 2, 3);

$combined = array();
for ($i=0; $i<count($listNo1); $i++) {
   $combined[] = $listNo1[$i];
   $combined[] = $listNo2[$i];
}
return $combined;
}
echo $combined[];


function fibonacci( $n) 
{ 
      
    /* An array that stores our Fibonacci numbers. */
      
    // 1 extra to handle case, 
    // n = 0 
    $f = array(); 
    $i; 
      
   /* 0 and 1 are the first numbers */
    $f[0] = 0; 
    $f[1] = 1; 
      
    for ($i = 2; $i <= $n; $i++) 
    { 
          
        /* lets add the prevuious 2 numbers and store them as well*/
        $f[$i] = $f[$i-1] + $f[$i-2]; 
    } 
      
    return $f[$n]; 
} 
  
$n = 9; 
echo fibonacci($n)

public function tests($a, $b, $expected)
    {
        $this->assertSame($n, $a + $b);
    }
/*

    function absoluteSum()
    {
    }

    function compute100()
    {
    }
    */
}
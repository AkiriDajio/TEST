<?php
namespace Task11;
class MyCalculator {
private $first;
private $second;
public function __construct( $first, $second ) {
$this->first = $first;
$this->second = $second;
}
public function add() {
return $this->first + $this->second;
}
public function subtract() {
return $this->first - $this->second;
}
public function multiply() {
return $this->first * $this->second;
}
public function divide() {
return $this->first / $this->second;
}
}
$mycalc = new MyCalculator(13, 6);
echo $mycalc-> add() ."\n";
echo $mycalc-> multiply() ."\n";
echo $mycalc-> subtract() ."\n";
echo $mycalc-> divide() ."\n";
?>
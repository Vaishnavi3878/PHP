<?php
class emp
{
  public $eno,$ename,$esal;
  function __construct($c,$n,$s)
  {
      $this->eno=$c;
      $this->ename=$n;
      $this->rsal=$s;
  }
  function display()
 {
    echo("<br>Employee No:".$this->eno);
    echo("<br>Employee Name:".$this->ename);
    echo("<br>Employee Sal:".$this->esal);
 }
 function __destruct()
 {
    echo("<br>Object is destroyed");
}
};
$c=1;
$n="om";
$s=50000;
$obj=new emp($c,$n,$s);
$obj->display();
?>   
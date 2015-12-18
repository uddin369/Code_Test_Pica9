<?php
class StringReverse{
public $string;
static $Value1=1;
static $Value2=1;


public function StringLength($string){
  $i=0;
  while(isset($string[$i]) && $string[$i]!=''){
  	$i++;}
  return $i;
}


public function LoopMethod($string,$stringlength){
  static $ReverseStringloop="";
  $i=$stringlength-1;
  while(isset($string[$i]) && $i!=-1){
  	$ReverseStringloop.=$string[$i];
  	$i--;}
  return $ReverseStringloop;
}


public function RecursiveMethod($string,$StringIndex,$s){
  static $ReverseString="";	
  
  if($StringIndex>=0){
  	$ReverseString.=$string[$StringIndex];
  	$StringIndex=$StringIndex-1;
  	$s->RecursiveMethod($string,$StringIndex,$s);
  }
  return $ReverseString;
}


public function multiplication($Value1,$Value2,$obj2)

{
  static $result=0;
  while($Value2!=0){
  
  	return $Value1+$obj2->multiplication($Value1,$Value2-1,$obj2); 
  
  }
  //return $result;


}




public function display($strings, $choice, $obj)

{
  
  $StringIndex=$obj->StringLength($strings);
  echo "The String Is<br>".$strings;
  
  if($choice=='Loop' || $choice=='loop' || $choice=='LOOP' || $choice=='all' || $choice=='All' || $choice=='ALL'){
  
      echo "<br>REVERSE STRING WITH LOOP: <br>";

      echo $obj->LoopMethod($strings,$StringIndex);
  
  }
  
  if($choice=='Recursive' || $choice=='recursive' || $choice=='RECURSIVE' || $choice=='all' || $choice=='All' || $choice=='ALL'){
  
      echo "<br>REVERSE STRING WITH RECURSION: <br>";

      echo $obj->RecursiveMethod($strings,$StringIndex-1,$obj);
  
  }
  
  if($choice=='Length' || $choice=='LENGTH' || $choice=='length' || $choice=='all' || $choice=='All' || $choice=='ALL'){
  
      echo "<br>STRING LENGTH IS: <br>";

      echo $StringIndex=$obj->StringLength($strings);
  
  }

}

}



class Calculation{




public function multiplication($Value1,$Value2)

{
  static $result=0;
  while($Value2!=0){
  
  	return $Value1+$this->multiplication($Value1,$Value2-1); 
  
  }
  //return $result;


}


}


class Factory {
  public static function create($name)
  {
    if (class_exists($name))
    {
      return new $name($int1,$int2);
    }
  }
}

/*There are two classes
1. Calculation
2. StringReverse
So create will have one of these as para.
*/


$Str=Factory::create("Calculation");
$choice="";
echo "The Result Is: ".$Str->multiplication(5,2);

/*
Multiplication gets two integers as para.

*/

$Str=Factory::create("StringReverse");
$Str->display("This is not a bug","ALL",$Str);

/*

display (arg1,arg2,arg3)
arg1= The String to be reversed.
arg2= Type operation (For Example, To get the result for loop put "Loop", for Recursive just put "Recursive" or yu can put "All" to get both results)
arg3= This is the Object;

*/


//$Str->display("This is not a bug","ALL",$Str); 

//echo $Str->multiplication(2,5,$Str);




?>

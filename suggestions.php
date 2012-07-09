<?php

//print("hello ");
//echo 'hello';

//Just an array with random names of some book i like...the array could be filled with anything.
$a[]="The Prince";
$a[]="Influence by Robert Cialdini";
$a[]="Bourne identity";
$a[]="The discovery of India";
$a[]="Les miserables";
$a[]="Bourne supremacy";
$a[]="The tipping pont";
$a[]="Story of my experiments with truth";
$a[]="Dracula";
$a[]="The lean startup";
$a[]="Steve Jobs";
$a[]="The art of war";
$a[]="Alexander by billy yeanne";
$a[]="Beyond good and evil";
$a[]="Bhagvad Gita as it is";
$a[]="Chronicle by Bob Dylan";
$a[]="Acid dreams";
$a[]="The innovator's dilemma";
$a[]="Art of deception- kevin mitnick";
$a[]="The Facebook effect";
$a[]="Sociopath next door";
$a[]="Great expectations";

$q=$_GET['q']; // Lets assume user has typed q = He
$len=strlen($q); //Length of the query typed by the user.

$hint=""; //This is what will be sent back to the user's as suggestions to his query.

foreach($a as $s){
  if(strtolower($q)==strtolower(substr($s,0,$len)))
    {
      if($hint=="")
	$hint=$s;
      else
	$hint=$s.", ".$hint;
    }
}
if($hint=="")
  { print("No suggestions !!");
  }
else{
  print($hint);
}
?>
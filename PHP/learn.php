<? 

$name = "Prabakaran";

printf("Hi, I'm %s \n",$name . "<br>");

print "Statement With print \n" . $name ."<br>" ;

//Boolean  TRUE FALSE

print(gettype($name)."\n"."<br>");
print(gettype(TRUE)."\n"."<br>");
print(gettype(FALSE)."\n"."<br>");

print((boolean)(-1)."\n"."<br>");

//typecasting

$num = 10;


print(gettype((string) ($num)) . "<br>\n");
print(gettype($num) . "<br>\n");

//if else

if(NULL == 0 and NULL == FALSE and FALSE == 0){
    print("Null == 0 and False == 0 and False == Null"."<br>\n");
}

//Numbers

$intDec = 92; //Decimal
$intNeg = -54; //Negative
$intOct = 077; //Octal
$intHex = 0xff; //HexaDecimal
$intBin = 0b001; //Binary

print($intDec."<br>\n");
print($intHex."<br>\n");
print($intNeg."<br>\n");
print($intHex."<br>\n");
print($intBin."<br>\n");

//Math Opp
print($intBin * $intDec."<br>\n");
//Float(Double are Same)

$f1 = 23.32;


print($f1."<br>\n");
// printf("%0.20f",$f1."<br>\n");

$f2 = 1e10;
print($f2."<br>\n");

// unset($f2);

// print($f2)

//MultiLine String

// $MulStr = <<< 'PKLEGEND'

// Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
// Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br>
// when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
// It has survived not only five centuries,<br>
// but also the leap into electronic typesetting,<br>
// remaining essentially unchanged.<br>
//  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages<br>
// , and more recently with desktop publishing software like Aldus PageMa<br>

// PKLEGEND;

// print($MulStr."<br>");

// $MulStr = <<< PKLEGEND

// Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
// Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br>
// when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
// It has survived not only five centuries,<br>
// but also the leap into electronic typesetting,<br>
// remaining essentially unchanged.<br>
//  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages<br>
// , and more recently with desktop publishing software like Aldus PageMa<br>

// PKLEGEND;


// print($MulStr);


?>


<hr>

<h1>Arrays<h1>


<?
 //Arrays

 //Indexed Array

//  $arr = [10,9,8,7,6];

//  for($i=0; $i<count($arr); $i++){
//     printf("%d<br>\n",$arr[$i]);
//  }
 

// $input  = array("Orange","White","Green");
// $reversed = array_reverse($input);
// $preserved = array_reverse($input, true);

// print_r($input); 
// printf("<br>");
// print_r($reversed);
// printf("<br>");
// print_r($preserved);
// printf("<br>");


// ?>

<h2>Associative Arrays in PHP</h2>

<?
  $arr1 = [
    "ONE" => 1,
    "TWO" => 2,
    "THREE" => 3,
    "FOUR" => 4 //TRUE
  ];

  $rev_arr = array_reverse($arr1);

  print_r($arr);
  print("<br>");
  print_r($rev_arr);

  $fli_arr = array_flip($rev_arr);

  print("<br>");
  print_r($fli_arr);
  print("<br>");
  print_r(array_keys($arr1));
  print("<br>");
  print_r(array_values($arr1));


  function Array_wlk($value,$key){
    print("$key:$value"."\n<br>");
  }

  array_walk($arr1,"Array_wlk");

  ?><pre><?
  print_r(array_chunk($arr1,2,TRUE));
  ?></pre><?

  $demo_arr = [1,2,3,4];

  $pad = array_pad($arr1,5,1000);

  print_r($pad);
?>
<?php
$options=array(
    'options' => array(
        'min_range' => 10,
        'max_range' => 100
    )
);
$number = 50;
if(filter_var($number, FILTER_VALIDATE_INT, $options)) {
    echo "Valid number with the range!";
} else {
    echo "Out of range!";
}
?>
<br>

<?php
$string = "I love PHP";
$pos = strpos($string, "PHP");
if($pos === false) {
    echo "The string was not found!";
} else {
    echo "The string was found at position: $pos";
}
?>
<br>
<?php
$options=array('options' => array('min_range' => 10, 'max_range' =>100));
$number=50;
if(filter_var($number,FILTER_VALIDATE_INT,$options)){
    echo "Valid Number within range";
}else{
    echo "Out of range";
}
?>
<br>
<?php
$ip="192.168.1.1";
if(filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4)){
    echo "Valid IPv4";
}
else{
    echo "Invalid IPv4";
}
?>
<br>
<?php
$data=array("email"=>"test@example.com","age"=>"30");
$filters=array("email"=>FILTER_VALIDATE_EMAIL,"age"=>array("filter"=>FILTER_VALIDATE_INT,"options"=>array("min_range"=>18, "max_range"=>60)));
$result=filter_var_array($data,$filters);

if($result["email"]&&$result["age"]){
    echo "Valid input";
}else{
    echo "Invalid input";
} 
?>
<?php
//custome filters   
function customFilter($name){
    return strtoupper($name);
}
$name=' john';
$filteredName=customFilter($name);
echo $filteredName;
?>
<br>
<?php
$string="Hello PHP";
$pos=strpos($string,"PHP");
if($pos!==false){
    echo "PHP found at position $pos";
}else{
    echo " not found";
}
?>
<br>
<?php
$string="Hello PHP";
if(str_contains($string,"PHP")){
    echo "contains PHP";
}else{
    echo "does not contain PHP";
}
?>
<br>
<?php
$string="Hello PHP";
$sub=substr($string,7,3);
echo $sub;
$sub1=substr($string,-4,3);
echo $sub1;
?>
<br>
<?php
$string="user@example.com";
echo strstr($string,"@");
echo "<br>";
$string="hello PHP";
echo stristr($string,"php");
echo "<br>";
$newString=str_ireplace("php","world",$string);
echo $newString;
?>
<br>
<?php
$string="the price is 100 rupees.";
$pattern="/\d+/";
if(preg_match($pattern,$string,$matches)){
    echo "Match found ";
}
$string1 = "apple,bannana,orange,apple,mango,cherry,apple";
$parttern = "/apple/";
preg_match_all($parttern,$string1,$matches);
print_r($matches[0]);
?>
<br>
<?php
$string2="My phone number is 123-456-7890";
$pattern="/\d{3}-\d{3}-\d{4}/";
$replacement="[hidden]";
$newString=preg_replace($pattern,$replacement,$string2);

echo $newString;
echo "<br>";
$string3="one,two;three,four";
$pettern="/[,;]/";
$parts=preg_split($pattern,$string3);
print_r($parts);
echo "<br>";
$word=["cat", "dog","caterpillar","categories","rat"];
$filtered=preg_grep("/cat/",$word);
print_r($filtered);
echo "<br>";
$noA=preg_grep("/a/",$word,PREG_GREP_INVERT);
print_r($noA);
?>
<br>
<?php
$string4="apple 10, banana 20,apple 30";
$pattrn="/(apple) (\d+)/";
preg_match_all($pattrn,$string4,$matches);
print_r($matches);
?>
<?php
$array = ["banna","mango","appale"];
$food = array('mango','jam','patters');

echo in_array('jam',$food);
echo "<br>";
// echo ($array);
echo $array[1];
echo "<br>";
if (in_array('mango',$food)) {
    echo "your search result is mango";
}
else{
    echo "not found your data";
}
echo "<br>";
echo array_search('mango',$food);
echo "<br>";
$a = array('emet' => '20', 'boy' => '10','dev' => '40');
echo array_search('40',$a);
print_r($a);
/// array replease function
$dev = ['banna','jam','carrot','pea'];
$reples = ['mango','nam','potato'];

$new_array = array_replace($dev,$reples);
// echo $new_array;
echo "<pre>";
print_r($new_array);
echo "</pre>";
?>
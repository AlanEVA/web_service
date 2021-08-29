<?php
$data = (array) json_decode(file_get_contents("http://localhost/webservice/"),true);
print_r ($data);

echo "<br>";

for ($i=0; $i < count( $data ); $i++)
{
echo $data[$i]["id"]."<br>";
echo $data[$i]["nombre"]."<br>";
echo $data[$i]["telefono"]."<br>";
echo $data[$i]["email"]."<br>";
echo "<hr>";
}

?>

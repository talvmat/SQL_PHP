<?php
require("infoFolder.php");


// Start XML file, create parent node



// Opens a connection to a MySQL server

$connection=mysqli_connect (localhost, $username, $password);
if (!$connection) {  die('Not connected : ' . mysqli_error());} 

// Set the active MySQL database
$db_selected = mysqli_select_db( $connection,"GoogleMapsTutorial");
if (!$db_selected) {
  die ('Can\'t use db : ' . mysqli_error());
} 

// Select all the rows in the markers table

$query = "SELECT * FROM markers WHERE 1";
$result = mysqli_query ($connection, $query);
if (!$result) {  
  die('Invalid query: ' . mysqli_error());
} 



$doc = new DomDocument("1.0");
$doc   ->formatOutput = true;
$node = $doc-> createElement("markers");
$parnode = $doc->appendChild($node);


// Iterate through the rows, adding XML nodes for each
while ($row = mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $doc->createElement("marker");
  $newnode = $parnode->appendChild($node);

  $newnode->setAttribute("name", $row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("type", $row['type']);
}

header("Content-type: text/xml"); 

//$xmlfile = $doc->dump_mem();

//$doc->xml xml_parse($testus, "text/xml");
//echo $xml = new SimpleXMLElement($doc);
echo $doc->saveXML();
//$file= (printf ("<pre>%s</pre>", htmlentities ($doc->saveXML())));
//$file = file_get_contents('localhost:8888/connectionPage.php');
//echo xml_parse($testus, $file) ;
//$testus = new DOMParser();
//echo $xml -> asXML();
// echo $doc->saveXML('datas.xml');




?>

<?php
require_once('sparqlib.php');
$db = sparql_connect('http://dbpedia.org/sparql');
$query = "SELECT ?film
WHERE { ?film <http://purl.org/dc/terms/subject> <http://dbpedia.org/resource/Category:French_films> }";

$result = sparql_query($query);
$fields = sparql_field_array($result);
while($row = sparql_fetch_array($result))
{
  foreach($fields as $field)
  {
    print"$row[$field] \n";
  }
}
?>

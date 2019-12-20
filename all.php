<!DOCTYPE html>
<html lang="en">
<head>
	
  <title>USU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:100px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  
   .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  
  
	body { background-color:#90EE90;} 
	}
  </style>
</head>
<body >


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
	  
		<a class="navbar-brand" href="#">
		<img src="usu.png" alt="logo" style="width:30px;"height="30px">
		</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="halamanutamabaru.php">Home</a></li>
        <li> <a href="rdf_lain/plant.rdf" class="w3-button w3-block">Download rdf</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logoutbaru.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="FASILKOMTI.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Universitas Sumatera Utara</h3>
          <p>Fasilkom-TI</p>
        </div>      
      </div>

      <div class="item">
        <img src="logousu.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Universitas Sumatera Utara</h3>
          <p>Logo USU</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

	  <h3>More Info About Plants</h3><br>
<?php
require_once( "sparqlib.php" );

$db = sparql_connect( "http://localhost:3030/Plants/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns("dc", "http://dublincore.org/documents/dcmi-namespace/");
sparql_ns("dbo", "http://dbpedia.org/ontology/");

  

  $sparql = "PREFIX dc: <http://dublincore.org/documents/dcmi-namespace/> 
					PREFIX dbo: <http://dbpedia.org/ontology/> 
           SELECT ?Name ?Latin_Name   
           WHERE
   {
     ?s dbo:name ?Name ;
     dbo:latinName ?Latin_Name . 
   } ";

   $result = sparql_query( $sparql ); 
   $fields = sparql_field_array( $result );

print "<table class='table table-hover' >";
print "<tr>";
foreach( $fields as $field )
{
    print "<th>$field</th>";
}
print "</tr>";
while( $row = sparql_fetch_array( $result ) )
{
    print "<tr>";
    foreach( $fields as $field )
    {
        print "<td>$row[$field]</td>";
    }
    print "</tr>";
}
print "</table>";
?>
</div>

<!-- Footer -->


<footer class="container-fluid text-center">
  <p> &copy; Kelompok Semantic Web. 2019 </p>
</footer>


</body>
</html>

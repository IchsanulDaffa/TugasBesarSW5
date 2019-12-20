<?php
session_start();
include "koneksibaru.php";
if(!isset($_SESSION['username'])){
header("location:loginbaru.php");
exit();
}
if(isset($_SESSION['username'])){
$username=$_SESSION['username'];
}
?>
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="all.php" target="_blank">More Info</a></li>
        <li> <a href="sw.rdf" class="w3-button w3-block">Download rdf</a></li>
		
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
  
<div class="container text-center">    
  <h3>REKTORAT USU</h3><br>
  

<div class="row">
  
    <div class="col-sm-6">
      <p class="text-center"><strong>Rektorat</strong></p><br>
      <a href="#demo1" data-toggle="collapse">
        <img src="Runtung.jpg" class="img-rounded"  alt="Random Name" width="255" >
      </a>
      <div id="demo1" class="collapse">
        <p>
<?php
require_once( "sparqlib.php" );

$db = sparql_connect( "http://localhost:3030/USU/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns( "foaf","http://xmlns.com/foaf/0.1/" );
sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
sparql_ns("dc", "http://dublincore.org/documents/dcmi-namespace/");
sparql_ns("bio", "http://purl.org/vocab/bio/0.1/");



  $sparql = "PREFIX foaf: <http://xmlns.com/foaf/0.1/> 
					PREFIX bio: <http://purl.org/vocab/bio/0.1/> 
           SELECT ?Name ?Position   
           WHERE
   {
     ?s foaf:name ?Name ;
     bio:position ?Position . 
	 FILTER (?Name='Prof. Dr. Runtung, S.H., M.Hum.')

   } ";

   $result = sparql_query( $sparql ); 
   $fields = sparql_field_array( $result );

print "<table class='table table-hover' >";
print "<tr>";
foreach( $fields as $field )
{
    print "<td>$field<p>&#8595;</p></td>";
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
		</p>
      </div>
    </div>
    <div class="col-sm-6">
      <p class="text-center"><strong>Rektorat</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="Rosmayati.jpg." class="img-rounded"  alt="Random Name" width="255" >
      </a>
      <div id="demo2" class="collapse">
        <p>
<?php
require_once( "sparqlib.php" );

$db = sparql_connect( "http://localhost:3030/USU/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns( "foaf","http://xmlns.com/foaf/0.1/" );
sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
sparql_ns("dc", "http://dublincore.org/documents/dcmi-namespace/");
sparql_ns("bio", "http://purl.org/vocab/bio/0.1/");





   $sparql = "PREFIX foaf: <http://xmlns.com/foaf/0.1/> 
					PREFIX bio: <http://purl.org/vocab/bio/0.1/> 
           SELECT ?Name ?Position   
           WHERE
   {
     ?s foaf:name ?Name ;
     bio:position ?Position . 
	 FILTER (?Name='Prof. Dr. Ir. Rosmayati, M.S.')

   } ";

   $result = sparql_query( $sparql ); 
   $fields = sparql_field_array( $result );

print "<table class='table table-hover' >";
print "<tr>";
foreach( $fields as $field )
{
    print "<td>$field<p>&#8595;</p></td>";
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
		
		</p>
      </div>
    </div>
	
  </div>
  
	
  <hr>
	<div class="row">
    <div class="col-sm-6">
      <p class="text-center"><strong>Rektorat</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="Muhammad_Fidel_Ganis_Siregar.jpg" class="img-rounded"  alt="Random Name" width="255" >
      </a>
      <div id="demo3" class="collapse">
        <p>
<?php
require_once( "sparqlib.php" );

$db = sparql_connect( "http://localhost:3030/USU/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns( "foaf","http://xmlns.com/foaf/0.1/" );
sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
sparql_ns("dc", "http://dublincore.org/documents/dcmi-namespace/");
sparql_ns("bio", "http://purl.org/vocab/bio/0.1/");




  $sparql = "PREFIX foaf: <http://xmlns.com/foaf/0.1/> 
					PREFIX bio: <http://purl.org/vocab/bio/0.1/> 
           SELECT ?Name ?Position   
           WHERE
   {
     ?s foaf:name ?Name ;
     bio:position ?Position . 
	 FILTER (?Name='Prof. Dr. dr. Muhammad Fidel Ganis Siregar, M.Ked.(O.G.), Sp.O.G.(K.)')

   } ";

   $result = sparql_query( $sparql ); 
   $fields = sparql_field_array( $result );

print "<table class='table table-hover' >";
print "<tr>";
foreach( $fields as $field )
{
    print "<td>$field<p>&#8595;</p></td>";
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
		</p>
      </div>
    </div>
    <div class="col-sm-6">
      <p class="text-center"><strong>Rektorat</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="WR_III.jpg" class="img-rounded"  alt="Random Name" width="255" >
      </a>
      <div id="demo4" class="collapse">
        <p>
		<?php
require_once( "sparqlib.php" );

$db = sparql_connect( "http://localhost:3030/USU/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns( "foaf","http://xmlns.com/foaf/0.1/" );
sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
sparql_ns("dc", "http://dublincore.org/documents/dcmi-namespace/");
sparql_ns("bio", "http://purl.org/vocab/bio/0.1/");



  $sparql = "PREFIX foaf: <http://xmlns.com/foaf/0.1/> 
					PREFIX bio: <http://purl.org/vocab/bio/0.1/> 
           SELECT ?Name ?Position   
           WHERE
   {
     ?s foaf:name ?Name ;
     bio:position ?Position . 
	 FILTER (?Name='Prof. Drs. Mahyuddin K. M. Nasution, M.I.T., Ph.D.')

   } ";

   $result = sparql_query( $sparql ); 
   $fields = sparql_field_array( $result );

print "<table class='table table-hover' >";
print "<tr>";
foreach( $fields as $field )
{
    print "<td>$field<p>&#8595;</p></td>";
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
		</p>
      </div>
    </div>

	
  </div>
  
    <hr>
	<div class="row">
	
    <div class="col-sm-6">
      <p class="text-center"><strong>Rektorat</strong></p><br>
      <a href="#demo5" data-toggle="collapse">
        <img src="Bustami_Syam.jpg" class="img-rounded"  alt="Random Name" width="255" >
      </a>
      <div id="demo5" class="collapse">
        <p>
		<?php
require_once( "sparqlib.php" );

$db = sparql_connect( "http://localhost:3030/USU/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns( "foaf","http://xmlns.com/foaf/0.1/" );
sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
sparql_ns("dc", "http://dublincore.org/documents/dcmi-namespace/");
sparql_ns("bio", "http://purl.org/vocab/bio/0.1/");



  $sparql = "PREFIX foaf: <http://xmlns.com/foaf/0.1/> 
					PREFIX bio: <http://purl.org/vocab/bio/0.1/> 
           SELECT ?Name ?Position   
           WHERE
   {
     ?s foaf:name ?Name ;
     bio:position ?Position . 
	 FILTER (?Name='Prof. Dr. Ir. Bustami Syam, M.S.M.E.')

   } ";
   $result = sparql_query( $sparql ); 
   $fields = sparql_field_array( $result );

print "<table class='table table-hover' >";
print "<tr>";
foreach( $fields as $field )
{
    print "<td>$field<p>&#8595;</p></td>";
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
		</p>
      </div>
    </div>
	
	   <div class="col-sm-6">
      <p class="text-center"><strong>Rektorat</strong></p><br>
      <a href="#demo6" data-toggle="collapse">
        <img src="Luhut_Sihombing.jpg" class="img-rounded"  alt="Random Name" width="255" >
      </a>
      <div id="demo6" class="collapse">
        <p>
		<?php
require_once( "sparqlib.php" );

$db = sparql_connect( "http://localhost:3030/USU/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns( "foaf","http://xmlns.com/foaf/0.1/" );
sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
sparql_ns("dc", "http://dublincore.org/documents/dcmi-namespace/");
sparql_ns("bio", "http://purl.org/vocab/bio/0.1/");



  $sparql = "PREFIX foaf: <http://xmlns.com/foaf/0.1/> 
					PREFIX bio: <http://purl.org/vocab/bio/0.1/> 
           SELECT ?Name ?Position   
           WHERE
   {
     ?s foaf:name ?Name ;
     bio:position ?Position . 
	 FILTER (?Name='Ir. Luhut Sihombing, M.P.')
	 

   } ";

   $result = sparql_query( $sparql ); 
   $fields = sparql_field_array( $result );

print "<table class='table table-hover' >";
print "<tr>";
foreach( $fields as $field )
{
    print "<td>$field<p>&#8595;</p></td>";
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
		</p>
      </div>
    </div>
  
  </div>
  
  
      <hr>
	<div class="row">
	
    <div class="col-sm-6">
      <p class="text-center"><strong>Fakultas di USU</strong></p><br>
     
		<?php
require_once( "sparqlib.php" );

$db = sparql_connect( "http://localhost:3030/USU/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns( "foaf","http://xmlns.com/foaf/0.1/" );
sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
sparql_ns("dc", "http://dublincore.org/documents/dcmi-namespace/");
sparql_ns("bio", "http://purl.org/vocab/bio/0.1/");



  $sparql = "PREFIX foaf: <http://xmlns.com/foaf/0.1/> 
					PREFIX bio: <http://purl.org/vocab/bio/0.1/> 
           SELECT ?Faculty 
           WHERE
   {
     ?s foaf:names ?Faculty.

   } ";
   $result = sparql_query( $sparql ); 
   $fields = sparql_field_array( $result );

print "<table class='table table-hover' border='2' >";
print "<tr>";
foreach( $fields as $field )
{
    print "<td>$field</td>";
}
print "</tr>";
while( $row = sparql_fetch_array( $result ) )
{
    print "<tr>";
    foreach( $fields as $field )
    {
        print "<th>$row[$field]</th>";
    }
    print "</tr>";
}
print "</table>";
?>
		
    </div>
	
	   <div class="col-sm-6">
      <p class="text-center"><strong>Fasilitas di USU</strong></p><br>
      
		<?php
require_once( "sparqlib.php" );

$db = sparql_connect( "http://localhost:3030/USU/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns( "foaf","http://xmlns.com/foaf/0.1/" );
sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
sparql_ns("dc", "http://dublincore.org/documents/dcmi-namespace/");
sparql_ns("bio", "http://purl.org/vocab/bio/0.1/");



  $sparql = "	PREFIX bio: <http://purl.org/vocab/bio/0.1/> 
					PREFIX dc: <http://purl.org/dc/elements/1.1/>
           SELECT ?Facility
           WHERE
   {
     ?s dc:type ?Facility.
	
	 

   } ";

   $result = sparql_query( $sparql ); 
   $fields = sparql_field_array( $result );

print "<table class='table table-hover' border='2' >";
print "<tr>";
foreach( $fields as $field )
{
    print "<td>$field</td>";
}
print "</tr>";
while( $row = sparql_fetch_array( $result ) )
{
    print "<tr>";
    foreach( $fields as $field )
    {
        print "<th>$row[$field]</th>";
    }
    print "</tr>";
}
print "</table>";
?>
		
    </div>
  
  </div>
  
  
  
  
</div>

<footer class="container-fluid text-center">
  <p> &copy; Kelompok Semantic Web. 2019 </p>
</footer>

</body>
</html>

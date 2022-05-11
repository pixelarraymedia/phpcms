<?php session_start();

// checking for user log in or not
if(!isset($_SESSION['auth']) || $_SESSION['auth']!=true)
{
    header("location:index.php");
    die();
}
?>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Datasite CMS</title>
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />

<link type="text/css" rel="stylesheet" href="style/style.css" />
<link type="text/css" rel="stylesheet" href="style/bootstrap.min.css" />
<link type="text/javascript" rel="stylesheet" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />
</head>

<body>

<div id="wrapper">	<!-- open wrapper -->
	<div id="header">   <!--  open header -->
<h1> Public Dashboard </h1>
	</div>  <!-- close header -->
    
    <div id="left">  <!-- open left -->
	
	<ul class="leftmenu">
		<li class="leftmenu-button" ><a href="aution-items.php">Auction Items</a></li>
		<li class="leftmenu-button" ><a href="insert-file.php"> Upload Auction Item CSV </a></li>
		<li class="leftmenu-button" ><a href="category.php"> View by Lot Category</a></li>
		<li class="leftmenu-button" ><a href="condition.php"> View Condition</a></li>
		<li>&nbsp;</li>
		<li class="leftmenu-button" > <a href="logout.php">Logout</a></li>
		
	</ul>
    	
    <div id="left">  <!-- open left -->
    


</div> 
    </div>   <!-- close left menu -->

    
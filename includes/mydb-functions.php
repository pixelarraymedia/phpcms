<?php
require("config.php");

class database
{
	public $dbhost, $dbuser, $dbpass, $dbname, $dblink;
	
	public function setup($host, $user, $pass, $name) // this function is for setting up required parameter to be able to connect database and use it
	{
		$this->dbhost = $host;
		$this->dbuser = $user;
		$this->dbpass = $pass;
		$this->dbname = $name;
	}
	
	public function connect()
	{
		if( $this->dblink = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass) )
		{ //  successful test
			
			if(mysqli_select_db($this->dblink, $this->dbname))
			{
				return true;
			}
			else
			{
				echo "Database selection failed";
				return false;
			}
			
		}
		else // if connection failed
		{
			echo "Database connection failed";
			return false;
		}
	}
	
	public function query($sql)

	{
		
		if($result = mysqli_query($this->dblink, $sql))
		{
			return $result;
		}
		else
		{
			echo "Query failed.";
			return false;
		}
	}
	
}
//// DB onnection
$mydb = new database; // here I create an object based on database class
	$mydb->setup("$dbhost","$dbuser","","$dbname"); // setting up database environment
		$mydb->connect(); // call connect method of mydb object 
			$records = $mydb->query("SELECT * FROM lot_details"); // run passed sql statement and store results into $records variable



			
/// MISC  

		// Getting sum for pretax amounts 
		$update = $mydb->query("SELECT SUM(pre_tax) AS condition_sum FROM lot_details "); 



		//$pretax = $mydb->query("SELECT SUM(pre_tax) AS condition_sum FROM lot_details "); 


			// Running query for sum of auction items tax for Pie chart #3
			
				//$tax = $mydb->query("SELECT SUM(tax_amount) AS category_sum FROM lot_details "); 

						//while($row = mysqli_fetch_array($records))
							//{  
								//	var_dump($row);   // fetching array test
									//} 




?>
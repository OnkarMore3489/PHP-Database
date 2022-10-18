<html>
<head>
	<title>OUTPUT</title>
</head>
<body>
	<form>
		<?php
		if($_GET['radio']=="movie_name")
		{
		 echo'Enter Actor name<input type="text" name="movie" required/>
		 <input type="submit" name="Submit"/>';
		}
		if($_GET['radio']=="update")
		{
		  echo'Enter movie name<input type="text" name="update" required/>
		  <input type="submit" name="Submit"/>';
		}
		?>
	</form>
	<?php
		$conn=pg_connect("host=192.168.16.1 port=5432 user=ty8859 password= ") or die("Something went wrong");
	if(isset($_GET['movie']))
	{
			
			$query="select * from movie where movie_no in (select movie_no from movie_actor where actor_no in(select actor_no from actor where actor_name='$_GET[movie]'));";
			$result=pg_query($conn,$query);
			//echo pg_num_rows($result);
			if($result=pg_query($conn,$query))
			{
			  echo"ACTOR ".$_GET['movie']." WORKED IN MOVIE";
			  while(($data=pg_fetch_row($result)))
				echo'<br><B>'.$data[1]."</B>";
				
			}
			else
				echo "No Record in database";
			
	}
	
	if( isset($_GET['update']))
	{
		echo '<form method="post">Update Release_date<input type="date" name="date" /><input type="Submit"></form>';
		$movie=strtolower($_GET['update']);
			$query="update movie set release_year='$_POST[date]' where movie_name='$movie'";
			//echo"$query";
			if(pg_query($conn,$query))
				echo"<br>Updated Succesfully";
			echo"<a href='movie.php'>Go Back</a>";	
							
	}
	?>
		
</body>
</html>


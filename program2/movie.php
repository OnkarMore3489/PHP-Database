<!--
	Consider the following entities and their relationships

	   Movie(movie_no,movie_name,release_year)
	   Actor(actor_no,name)

	Relationship between movie and actor is many-many with attribute rate in Rs.

	Create a RDB in 3NF for above.

	Using above database,write PHP scripts and design HTML form having two radio
	buttons for the following.

	a.Accept actor name and display the names of the movie in which he has acted.
	b.Update the release year of a movie.(Accept the movie name from user).
-->
<html>
<head>
	<title>Movie</title>
</head>
<body>
	<form action="output.php" type="post">
		Get Movie name by actor<input type="radio" class='radio' name="radio" value="movie_name" required><br>
		Update Release Date<input type="radio" class='radio' name="radio" value="update" >
	<br>	<input type="submit" name="Submit" required/>
	</form>

</body>
</html>


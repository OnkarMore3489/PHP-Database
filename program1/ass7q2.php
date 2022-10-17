<!--
	Consider the following entities and their relationships

	    Student(Stude_id,name,class)
	    Competition(c_no,c-name,type)

    Relationship between student and competition is many-many with attribute rank and year.
	create a RDB in 3NF for the above and solve the following.

	Using above database write a script in PHP to

	a.Accept a competition name from user and display students who has participated int that 
	competiton

	b.Accept competiton name from user delete student at that competition.
-->
<!DOCTYPE = html>

<html>
<head>
<meta charset = "UTF-8" >
<title>ass7q1</title>
</head>
<body>
<h1>asssignment 1</h1>
<form method = "POST">

<input type = "text" name= "comp">

<h2> display students who have participated in a game : enter game name </h2>

<input name = "submit" type = "submit">

</form>




<form method = "POST">
<h2> delete student of a particular competition</h2>

<input type = "text" name= "comp2">

<input name = "delete" type = "submit">



</form>

<?php 

//echo "hhhhh";

$conn = pg_connect("host=192.168.16.1 port=5432 dbname=ty8844  user=ty8844  password=");
	if(!$conn)
	{
		echo "not connected";
	}

if(isset($_POST["delete"]))
{			       
		$comp2 = $_POST["comp2"];
		//echo "$comp2";

		$del = pg_query($conn,"delete from student
		where stud_id = (select student.stud_id from student ,competition , stud_comp
		where student.stud_id = stud_comp.stud_id  and competition.c_no = stud_comp.c_no and c_name = '$comp2')");
		
		if($del)
		{		
		  echo "$comp  deleted";
		}
}

//for submitting 
	if(isset($_POST["submit"]))
	{
		//echo "submitted"; 
	
		$comp = $_POST["comp"];
		
		echo"$comp";

		//$comp_no = pg_query($conn,"select c_no from competition where c_name = '$comp'; ");
		  
		  //echo $comp_no;

		$sss = pg_query($conn,"select student.stud_id ,name,class  from student ,competition , stud_comp
		where student.stud_id = stud_comp.stud_id  and competition.c_no = stud_comp.c_no and c_name = '$comp'");
		//$stud = pg_query($conn , "select s_id from stud_comp where '' ");
	while($row = pg_fetch_assoc($sss))
	{	
		?>
		<br>
		<h4>student id is</h4>
		<?php 
		  echo $row['stud_id'];   
		?>
		<br><h4>student name is</h4>
		<?php 
		  echo $row['name'];   
		?>
		<?php	
	}
	}	
//end
?>

</body>
</html>

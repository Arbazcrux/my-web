<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">

		input[type="submit"] {
      padding: 35px 170px;
    background-image: url(contact.jpg);
    margin-left: 197px;
    margin-bottom: 10px;
      font-size: 32px;
    color: white;
}
.hide{
	display: none;
}

	</style>
	
</head>
<body>


<form>
    <input type="submit" name="view" value="CLICK HERE TO SEE ADMIN PANNEL" method="post" id="btn" class="btn btn-primary btn-lg" id="btn">
                              	
    </form>
<?php
$con = mysqli_connect("localhost","root","","index_php");

if (mysqli_connect_errno()) {
  echo "Mysqli Connection was not Established".mysqli_connect_errno();
}
// geting user from table
if(isset($_GET['view'])){
	echo "<h1 style='text-align: center;' class='alert alert-info'>Registred Users</h1>";
	echo "<table class = 'table table-hover'>
    <thead> 
    <tr>
    <th class='one' scope='col'> # </th>
    <th class='one' scope='col'>User-Name </th>
    <th class='one' scope='col'>User-Email </th>
    <th class='one' scope='col'>User-Password </th>
    <th class='one' scope='col'>Regs-Time </th>    
    <th class='one' scope='col'>Delete-User </th>
    <th class='one' scope='col'>Update-User </th>
    </tr>
  </thead>
	";

$sel_users="select * from register order by 1 DESC LIMIT 0,10";
$run_users = mysqli_query($con, $sel_users);

while($row = mysqli_fetch_array($run_users)){
	$u_id = $row['user_id'];
	$regname = $row['username'];
	$regemail = $row['email'];
	$regpass = $row['password'];
	$regtime = $row['time'];

	echo "
	<tbody>
    <tr>
	<th scope 'row'>$u_id </th>
	<td class='two'>$regname </td>
	<td class='two'>$regemail </td>
	<td class='two'>$regpass </td>
	<td class='two'>$regtime </td>

	<td class='two'> <a href='users.php?del=$u_id'> Delete</a></td>
<td class='two'> <a href='users.php?edit=$u_id'> Edit</a></td>
</tr>
</tbody>
";
}
echo "</table>";
} 
 // deleting a user from table

if(isset($_GET['del'])){
		
		$del_id = $_GET['del'];
		
		$delete_user = "delete from register where user_id='$del_id'";
		
		$run_delete = mysqli_query($con, $delete_user); 
		
		if($run_delete){
			
			echo "<script>alert('A user has been deleted!')</script>";
			echo "<script>window.open('users.php?view','_self')</script>";
		}
	
	
	}

// script for editing the user
if(isset($_GET['edit'])){
	$edit_id= $_GET['edit'];
	$get_user="select*from register where user_id='$edit_id'";
	$run_user=mysqli_query($con,$get_user);
	$row_user=mysqli_fetch_array($run_user);
	$user_id=$row_user['user_id'];
	$regname=$row_user['username'];
	$regemail=$row_user['email'];
	$regpass=$row_user['password'];


	echo"
	<form method='post' action=''>
	<b>Edit Name:</b><input type='text' name='username' value='$regname'/><br><br>
	<b>Edit Email:</b><input type='text' name='email' value='$regemail'/><br><br>
	<b>Edit Password:</b><input type='text' name='password' value='$regpass'/><br><br>
	<input type='submit' name='update' value='update user'/>
	</form>
	";
}

// scripting for updating the user

if(isset($_POST['update'])){
	$update_id=$user_id;
	$regname=$_POST['username'];
	$regemail=$_POST['email'];
	$regpass=$_POST['password'];

	$update_users="update register set email='$regemail',password='$regpass' where user_id='$update_id'
	";
	$run_update=mysqli_query($con,$update_users);
	if($run_update){
		echo"<script>alert('A user has been update')</script>";
	}
} 

?>


<?php
$con = mysqli_connect("localhost","root","","index_php");

if (mysqli_connect_errno()) {
  echo "Mysqli Connection was not Established".mysqli_connect_errno();
}
// geting user from table
if(isset($_GET['view'])){
	echo "<h1 style='text-align: center;' class='alert alert-info'>Sign In</h1>";
	echo "<table class = 'table table-hover'>
    <thead> 
    <tr>
    <th class='one' scope='col'> # </th>
    <th class='one' scope='col'>User-Email </th>
    <th class='one' scope='col'>User-Password </th>
    <th class='one' scope='col'>Regs-Time </th>    
    <th class='one' scope='col'>Delete-User </th>
    <th class='one' scope='col'>Update-User </th>
    </tr>
  </thead>
	";

$sel_users="select * from signin order by 1 DESC LIMIT 0,10";
$run_users = mysqli_query($con, $sel_users);

while($row = mysqli_fetch_array($run_users)){
	$u_id = $row['id'];
	$regemail = $row['userid'];
	$regpass = $row['passwordinput'];
	$regtime = $row['time'];

	echo "
	<tbody>
    <tr>
	<th scope 'row'>$u_id </th>
	<td class='two'>$regemail </td>
	<td class='two'>$regpass </td>
	<td class='two'>$regtime </td>

	<td class='two'> <a href='users.php?del=$u_id'> Delete</a></td>
<td class='two'> <a href='users.php?edit=$u_id'> Edit</a></td>
</tr>
</tbody>
";
}
echo "</table>";
} 
 // deleting a user from table

if(isset($_GET['del'])){
		
		$del_id = $_GET['del'];
		
		$delete_user = "delete from signin where id='$del_id'";
		
		$run_delete = mysqli_query($con, $delete_user); 
		
		if($run_delete){
			
			echo "<script>alert('A user has been deleted!')</script>";
			echo "<script>window.open('users.php?view','_self')</script>";
		}
	
	
	}

// script for editing the user
if(isset($_GET['edit'])){
	$edit_id= $_GET['edit'];
	$get_user="select*from register where user_id='$edit_id'";
	$run_user=mysqli_query($con,$get_user);
	$row_user=mysqli_fetch_array($run_user);
	$user_id=$row_user['user_id'];
	$regname=$row_user['username'];
	$regemail=$row_user['email'];
	$regpass=$row_user['password'];


	echo"
	<form method='post' action=''>
	<b>Edit Name:</b><input type='text' name='username' value='$regname'/><br><br>
	<b>Edit Email:</b><input type='text' name='email' value='$regemail'/><br><br>
	<b>Edit Password:</b><input type='text' name='password' value='$regpass'/><br><br>
	<input type='submit' name='update' value='update user'/>
	</form>
	";
}

// scripting for updating the user

if(isset($_POST['update'])){
	$update_id=$user_id;
	$regname=$_POST['username'];
	$regemail=$_POST['email'];
	$regpass=$_POST['password'];

	$update_users="update register set email='$regemail',password='$regpass' where user_id='$update_id'
	";
	$run_update=mysqli_query($con,$update_users);
	if($run_update){
		echo"<script>alert('A user has been update')</script>";
	}
} 

?>

<!-- <<<<<<<<<<ORDER FORM START>>>>>>>>>>>>>>>>>>>>> -->



                                <?php
$con = mysqli_connect("localhost","root","","index_php");

if (mysqli_connect_errno()) {
  echo "Mysqli Connection was not Established".mysqli_connect_errno();
}
// geting user from table
if(isset($_GET['view'])){
	echo "<h1 style='text-align: center;' class='alert alert-info'>Orders</h1>";
	echo "<table class = 'table table-hover'>
    <thead>
    <tr>
    <th class='one' scope='col'> # </th>
    <th class='one' scope='col'>User-Name</th>
    <th class='one' scope='col'>User-Email</th>
    <th class='one' scope='col'>User-Number</th>
    <th class='one' scope='col'>Category</th>
    <th class='one' scope='col'>Adress</th>
    <th class='one' scope='col'>Delete-User</th>
    <th class='one' scope='col'>Update-User</th>
    </tr>
  </thead>
	";

$sel_users="select * from order_form order by 1 DESC LIMIT 0,10";
$run_users = mysqli_query($con, $sel_users);

while($row = mysqli_fetch_array($run_users)){
	$u_id = $row['user_id'];
	$regname = $row['user_name'];
	$regemail = $row['user_email'];
	$regpass = $row['user_num'];
	$regcat = $row['category'];
	$regadd = $row['adress'];
	echo "
	<tbody>
    <tr>
	<th scope 'row'>$u_id </th>
	<td class='two'>$regname </td>
	<td class='two'>$regemail </td>
	<td class='two'>$regpass </td>
	<td class='two'>$regcat </td>
	<td class='two'>$regadd </td>
<td class='two'> <a href='users.php?del=$u_id'> Delete</a></td>
<td class='two'> <a href='users.php?edit=$u_id'> Edit</a></td>
</tr>
</tbody>
";
}
echo "</table>";
} 
 // deleting a user from table

if(isset($_GET['del'])){
		
		$del_id = $_GET['del'];
		
		$delete_user = "delete from order_form where user_id='$del_id'";
		
		$run_delete = mysqli_query($con, $delete_user); 
		
		if($run_delete){
			
			echo "<script>alert('A user has been deleted!')</script>";
			echo "<script>window.open('users.php?view','_self')</script>";
		}
	
	
	}

// script for editing the user
if(isset($_GET['edit'])){
	$edit_id= $_GET['edit'];
	$get_user="select*from order_form where user_id='$edit_id'";
	$run_user=mysqli_query($con,$get_user);
	$row_user=mysqli_fetch_array($run_user);
	$user_id=$row_user['user_id'];
	$regname=$row_user['user_name'];
	$regemail=$row_user['user_email'];
	$regcat=$row_user['category'];
	$regadd=$row_user['adress'];

	echo"
	<form method='post' action=''>
	<b>Edit Name:</b><input type='text' name='user_name' value='$regname'/><br><br>
	<b>Edit Email:</b><input type='text' name='user_email' value='$regemail'/><br><br>
	<b>Edit Password:</b><input type='number' name='user_num' value='$regpass'/><br><br>
	<select class='select' name='category'>
	<option>Choose category</option>
	<option>Electrician</option>
	<option>Plumber</option>
	<option>AC/Refragrator Man</option>
	<option>Motor Repairing</option>
	<option>Electronic repair/option>
	<option>Carpenter</option>
	<option>painter</option>
	<option>Mason</option>
	</select>
	<textarea placeholder='Adress' name='adress'></textarea>
	<input type='submit' name='update' value='update user'/>
	</form>
	";
}

// scripting for updating the user

if(isset($_POST['update'])){
	$update_id=$user_id;
	$regname=$_POST['user_name'];
	$regemail=$_POST['user_email'];
	$regpass=$_POST['user_num'];
	$regcat=$_POST['category'];
	$regadd=$_POST['adress'];

	$update_users="update register set user_name='$regname',user_email='$regemail',user_num='$regpass',category='$ergcat',adress='$regadd' where user_id='$update_id'
	";
	$run_update=mysqli_query($con,$update_users);
	if($run_update){
		echo"<script>alert('A user has been update')</script>";
	}
} 

?>

<!-- <<<<<<<<<<<<<<<<<CONTACT FORM START>>>>>>>>>>>>>>>>>> -->


                                <?php
$con = mysqli_connect("localhost","root","","index_php");

if (mysqli_connect_errno()) {
  echo "Mysqli Connection was not Established".mysqli_connect_errno();
}
// geting user from table
if(isset($_GET['view'])){
	echo "<h1 style='text-align: center;' class='alert alert-info'>Messages</h1>";
	echo "<table class='table table-hover table-dark'>
    <thead>
    <tr>
    <th scope='col'> # </th>
    <th scope='col'>User-Name</th>
    <th scope='col'>User-Email</th>
    <th scope='col'>Subject</th>
    <th scope='col'>Message</th>
    <th scope='col'>Delete User: </th>
    <th scope='col'>Update User: </th>
    </tr>
  </thead>
	";

$sel_users="select * from contact_form order by 1 DESC LIMIT 0,10";
$run_users = mysqli_query($con, $sel_users);

while($row = mysqli_fetch_array($run_users)){
	$u_id = $row['user_id'];
	$regname = $row['user_name'];
	$regemail = $row['user_email'];
	$regcat = $row['subject'];
	$regadd = $row['message'];
	echo "
	<tbody>
    <tr>
	<th scope 'row'>$u_id </th>
	<td class='two'>$regname </td>
	<td class='two'>$regemail </td>
	<td class='two'>$regcat </td>
	<td class='two'>$regadd </td>
<td class='two'> <a href='users.php?del=$u_id'> Delete</a></td>
<td class='two'> <a href='users.php?edit=$u_id'> Edit</a></td>
</tr>
</tbody>
";
}
echo "</table>";
} 
 // deleting a user from table

if(isset($_GET['del'])){
		
		$del_id = $_GET['del'];
		
		$delete_user = "delete from contact_form where user_id='$del_id'";
		
		$run_delete = mysqli_query($con, $delete_user); 
		
		if($run_delete){
			
			echo "<script>alert('A user has been deleted!')</script>";
			echo "<script>window.open('users.php?view','_self')</script>";
		}
	
	
	}

// script for editing the user
if(isset($_GET['edit'])){
	$edit_id= $_GET['edit'];
	$get_user="select*from contact_form where user_id='$edit_id'";
	$run_user=mysqli_query($con,$get_user);
	$row_user=mysqli_fetch_array($run_user);
	$user_id=$row_user['user_id'];
	$regname=$row_user['user_name'];
	$regemail=$row_user['user_email'];
	$regcat=$row_user['subject'];
	$regadd=$row_user['message'];

	echo"
	<form method='post' action=''>
	<b>Edit Name:</b><input type='text' name='user_name' value='$regname'/><br><br>
	<b>Edit Email:</b><input type='text' name='user_email' value='$regemail'/><br><br>
	<select class='select' name='subject'>
	<option>Choose category</option>
	<option>General Customer Service</option>
	<option>Collabarate With us</option>
	<option>Foung Bug/Issue</option>
	<option>Any other Queries</option>
	</select>
	<textarea placeholder='Messege' name='message'></textarea>
	<input type='submit' name='update' value='update user'/>
	</form>
	";
}

// scripting for updating the user

if(isset($_POST['update'])){
	$update_id=$user_id;
	$regname=$_POST['user_name'];
	$regemail=$_POST['user_email'];
	$regcat=$_POST['subject'];
	$regadd=$_POST['message'];

	$update_users="update register set user_name='$regname',user_email='$regemail',subject='$ergcat',message='$regadd' where user_id='$update_id'
	";
	$run_update=mysqli_query($con,$update_users);
	if($run_update){
		echo"<script>alert('A user has been update')</script>";
	}
} 

?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	// $(document).ready(function(){
    	// 	$('#btn').click(function(){
    	// 	$('#btn').val('Admin');
    	// 	$('#btn').val('Admin');
    	// 	});
    	// });
    </script>
<div class="hide">
</body>
</html>
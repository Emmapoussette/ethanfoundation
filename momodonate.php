<?php
include('header.php');
include('admin/includes/config.php');

?>
<center>
<form action="php/create.php" method="post">
		<fieldset>

			<div>
				<label>Gender</label>
				<input type="radio"
				       name="gender"
				       value="Male"
				       checked>
				<label>Male</label>

				<input type="radio"
				       name="gender"
				       value="Female">
				<label>Female</label>
			</div><br />

			<div>
				<input type="checkbox"
				       name="programmer">
				<label>Are you a Programmer?</label>    
			</div><br />
			<input type="submit" value="Create">
		</fieldset>
	</form></center>

<?php
include('footer.php');
?>
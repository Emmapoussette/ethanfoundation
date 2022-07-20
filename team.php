<script>
// https://colorlib.com/polygon/adminator/index.html
<script src="js/team.js"></script>
</script>
<h1>Our Team</h1>
                <?php
				$query ="SELECT * FROM team ORDER BY id DESC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
            
        <div class="wrapper">
            
            <div class="team">
                <div class="team_member">
                <div class="team_img">
                <img src="uploads/<?php echo $row["profile"]; ?>" class="img-responsive" /><br />
                </div>
                <h3><?php echo htmlentities($row['position']);?> </h3>
                <p class="role"> <?php echo htmlentities($row['name']);?> </p></p>
                <p><?php echo htmlentities($row['description']);?> </p></p>
            

                </div>
            </div>
        
            <?php
					}
				}
			?>

                
<div class="wrapper">
  <h1>Our Team</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
      <img src="uploads/<?php echo $row["profile"]; ?>" class="img-responsive" /><br />
      </div>
      <h3><?php echo htmlentities($row['name']);?> </h3>
      <p class="role"><p class="desic"><?php echo htmlentities($row['name']);?> </p></p>
      <p><p class="desic"><?php echo htmlentities($row['position']);?> </p></p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="https://i.imgur.com/jQj1I8E.png" alt="Team_image">
      </div>
      <h3>Tean 2</h3>
      <p class="role">Role </p>
      <p>Our Courses are delivered trusted instructors, they are prepared by those Experienced and licensed Health Professionals./p></div>
    <div class="team_member">
      <div class="team_img">
        <img src="https://i.imgur.com/2Necikc.png" alt="Team_image">
      </div>
      <h3>Team 3</h3>
      <p class="role">position</p>
      <p>Our Courses are delivered trusted instructors, they are prepared by those Experienced and licensed Health Professionals.</p>
    </div>
  </div>
</div>


<style>
    @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  background: #gray;
  font-family: 'Josefin Sans', sans-serif;
}

.wrapper{
  margin-top: 50px;
}

.wrapper h1{
  font-family: 'Allura', cursive;
  font-size: 52px;
  margin-bottom: 60px;
  text-align: center;
}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
  background: #fff;
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
}

.team .team_member h3{
  color: darkblue;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: #ccc;
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

.team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #fff;
}

.team .team_member .team_img img{
  width: 100px;
  height: 100px;
  padding: 5px;
}

</style>

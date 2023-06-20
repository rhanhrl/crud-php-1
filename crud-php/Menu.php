<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    
      
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
			</div>

                    
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<?php
                                        
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "dbsiswa";
                                        
                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 
                                        
                                        $sql = "SELECT * FROM menu ORDER BY menu_id ASC";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                                
                                                while($row = $result->fetch_assoc()){
						$menu_id = $row['menu_id'];
						$sql2 = "SELECT * FROM submenu WHERE menu_id='$menu_id' ORDER BY submenu_id ASC";
                                                $result2 = $conn->query($sql2);
                                                
						if($result2->num_rows == 0){
							echo '<li><a href="'.$row['url'].'">'.$row['menu_utama'].'</a></li>';
						}else{
							echo '
							<li class="dropdown">
								<a href="'.$row['url'].'" class="dropdown-toggle" data-toggle="dropdown">'.$row['menu_utama'].' <b class="caret"></b></a>
								<ul class="dropdown-menu">';
                                                        
								while($row2 = $result2->fetch_assoc()){
									echo '<li><a href="'.$row2['submenu_link'].'">'.$row2['submenu'].'</a></li>';
								}
                                                                
							echo '
								</ul>
							</li>
							';
						}
					}
                                        }
					?>
				</ul>
			</div>
		</div>
	</nav>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
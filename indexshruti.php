

<?php
	
	include 'configshruti.php';

	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styleshruti.css">
	<link rel="stylesheet" href="style_official.css">
    <script src="js_official.js" defer></script>
	<title>Comment System PHP | National Coding</title>
</head>
<body>
	 <!-- Navigation Bar -->
	 <div class="navbar">
        <div class="navLeft">
            <img src="https://source.unsplash.com/900x900/?computer,css" alt="logo">
        </div>
        <div class="navCenter">
            <ul>
                <li><a href="#newsletter" class="button">Newsletter</a></li>
                <li><a href="#department" class="button toggle"></a>
                    <ul class="subList">
                        <li style="--i:0;"><a href="#civil">Civil</a></li>
                        <li style="--i:1;"><a href="#mech">Mech</a></li>
                        <li style="--i:2;"><a href="#eee">EEE</a></li>
                        <li style="--i:3;"><a href="#cse">CSE</a></li>
                        <li style="--i:4;"><a href="#aero">Aero</a></li>
                        <li style="--i:5;"><a href="#ise">ISE</a></li>
                        <li style="--i:6;"><a href="#ece">ECE</a></li>
                    </ul>
                </li>
                <!-- <li><a href="#events" class="button">Events</a></li> -->
            </ul>
        </div>
        <div class="navRight">
            <a href="http://localhost/login/login.php"><button class="button btnSmall eButton">Log Out</button></a>
        </div>
    </div>

    <h1 class="heading1">News Flash</h1>


	<div class="content">
		<?php

			$sql = "SELECT * FROM demo";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>

		<?php } } ?>
	</div>
	 <!-- Department -->
	 <div class="Department" id="">
        <div class="top">
            <h2 class="heading2">Department</h2>
        </div>
        <div class="section">
            <div class="civil" id="civil">
                <h3 class="heading3">
                    Civil Engineering
                </h3>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
            </div>
            <div class="mech" id="mech">
                <h3 class="heading3">
                    Mechanical Engineering
                </h3>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
            </div>

            <div class="eee" id="eee">
                <h3 class="heading3">
                    Electronics and Electrical Engineering
                </h3>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
            </div>
            <div class="cse" id="cse">
                <h3 class="heading3">
                    Computer Science Engineering
                </h3>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
            </div>
            <div class="aero" id="aero">
                <h3 class="heading3">
                    Aerospace Engineering
                </h3>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
            </div>
            <div class="ise" id="ise">
                <h3 class="heading3">
                    Information Science Engineering
                </h3>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
            </div>
            <div class="ece" id="ece">
                <h3 class="heading3">
                    Electonics and Communication Engineering
                </h3>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
                <div class="paras">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>

                    <div class="thumbnail">
                        <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image"
                            class="imgFluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

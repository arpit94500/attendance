<html>
    <title>
        Login
    </title>
    <head>
        <link rel="stylesheet" href="assets/css/css.css" type="text/css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    </head>
        <body onload="getLocation()">
           <?php include('header.html'); ?>
        
           <form action="login.php" method="post">
                <div class="container">
                    <div class="form">
                    <!-- <h1>LogIn</h1>
                    <p>Please fill in this form to LogIn.</p> -->
                    <div class="heading">
                        <h2>Attendence Login</h2>
                    </div>
                    <p id="demo"></p>
                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter Your Name" name="name" id="email" required>

                    <label for="email"><b>E-mail</b></label>
                    <input type="email" placeholder="Enter Email" name="email" id="psw" required>   
                    <input type="hidden" name="loca" id="loc" >
                    <!-- <input type="hidde" name="currentTime" id="currentTime" disabled> -->
                    <div class="col-md-6">
                <div id="my_camera"></div>
                
                <!-- <input type=button value="Take Snapshot" onClick="take_snapshot()" class="btn btn-primary take_snapshot"> -->
                <input type="hidden" name="image" class="image-tag">
            </div>
            <button id="start-camera">Start Camera</button>
            <video id="video" width="320" height="240" autoplay></video>
            <button id="click-photo">Click Photo</button>
            <canvas id="canvas" width="320" height="240"></canvas>
            <div class="col-md-8">
                <div id="results">Your captured image will appear here...</div>
            </div>
                    <input type="submit" name="submit" class="registerbtn"><br><br>
                    </div>
                </div>
                
</form>
    <?php include('footer.html'); ?>

    <script>
        var today = new Date();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        document.getElementById("currentTime").value = time;
    </script>

<script>
    let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");

camera_button.addEventListener('click', async function() {
   	let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
	video.srcObject = stream;
});

click_button.addEventListener('click', function() {
   	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
   	let image_data_url = canvas.toDataURL('image/jpeg');

   	// data url of the image
   	console.log(image_data_url);
});
</script>
    </body>
</html>


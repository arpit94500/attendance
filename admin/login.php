<link rel="stylesheet" href="../assets/css/bootstrap.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<?php
session_start();
include('connection.php');
    
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $location=$_POST['loca'];
        $img = $_POST['image'];
    //    echo $currentTime=$_POST['currentTime'];die();
    $folderPath = "upload/";
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.png';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
        //echo $name,$email,$location;
        
        $query="insert into admin(name,email,location,image)values('$name','$email','$location','$file')";
        $run=mysqli_query($conn,$query)or die(mysqli_error($conn));
        // print_r($query);die();
        if($run){
            $_SESSION['user']=$name;
            ?>
            <div class="alert alert-success content text-center"style="margin-top:20%; margin-left:25%; width:50%">
            <strong><?php echo $_SESSION['user'];?></strong> ! Your Attendence successfull submited.
            <a href="index.php" class="btn btn-primary">Go back! Home</a>
          </div>
          <?php  

        }else{
            ?>

            <div class="alert alert-success">
           Something is wrong !!!.
            
          </div>
          <?php
        }
        
    }
    
?>
 
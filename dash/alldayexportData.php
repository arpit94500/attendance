<?php 
// Load the database configuration file 
// include_once 'dbConfig.php'; 
 $conn=mysqli_connect('localhost','root','','abc')or die(mysqli_error($conn));
// Fetch records from database 
 $id=0;
$query = mysqli_query($conn,"SELECT * from admin  ORDER BY name ASC"); 
                        
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "members-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('id', 'name', 'email', 'image', 'location','timestamp','date','time','locatio_status','time_status'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $time = new DateTime($row['timestamp']);
                        $date = $time->format('j/n/Y');
                        $time = $time->format('H:i:s');
                        $l=$row['location'];
                        $temp=explode(" ",$l);
                        $lt=(double)$temp[0];
                        $ll=(double)$temp[1];
                        $tstatus='On Time';
                        $color="green";
                        if(strtotime($time)>strtotime("10:15:59"))
                        {
                          $tstatus='Late';
                          $color='Red';
                        }
                        $lstatus='On location';
                        $color1="green";
                        if(($lt<28.5851280 || $lt>28.6097428) || ($ll<77.3121120 || $ll>77.3750800))
                        {
                          $lstatus="Other Location";
                          $color1='red';
                        }
        // $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array(++$id, $row['name'], $row['email'],$row['image'], $row['location'], $row['timestamp'],$date,$time,$lstatus,$tstatus); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>

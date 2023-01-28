<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect("213.171.200.93", "cre8ive_web_user", "Network@1961!", "cre8ive_media");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$full_name = mysqli_real_escape_string($conn, $_REQUEST['full_name']);
$company_name = mysqli_real_escape_string($conn, $_REQUEST['company_name']);
$contact_number = mysqli_real_escape_string($conn, $_REQUEST['contact_number']);
$email_address = mysqli_real_escape_string($conn, $_REQUEST['email_address']);
$web_address = mysqli_real_escape_string($conn, $_REQUEST['web_address']);
$service_web_design = mysqli_real_escape_string($conn, $_REQUEST['service_web_design']);
$service_web_dev = mysqli_real_escape_string($conn, $_REQUEST['service_web']);
// $service_web_dev = 'test';
$service_hosting = mysqli_real_escape_string($conn, $_REQUEST['service_hosting']);
$service_graphic_design = mysqli_real_escape_string($conn, $_REQUEST['service_graphic_design']);
$service_video_editing = mysqli_real_escape_string($conn, $_REQUEST['service_video_editing']);
$service_animation = mysqli_real_escape_string($conn, $_REQUEST['service_animation']);
$comments = mysqli_real_escape_string($conn, $_REQUEST['comments']);
 
// Attempt insert query execution
$sql = "INSERT INTO enquiry_table (full_name, company_name, contact_number, email_address, web_address, service_web_design, service_web_dev, service_hosting, service_graphic_design, service_video_editing, service_animation, comments) 
                    VALUES ('$full_name', '$company_name', '$contact_number', '$email_address', '$web_address', '$service_web_design', '$service_web_dev', '$service_hosting', '$service_graphic_design', '$service_video_editing', '$service_animation', '$comments')";
if(mysqli_query($conn, $sql)){
    // echo "Records added successfully.";
    // header("Location: https://www.cre8ive-media.uk/dev/thank_you.php");
    echo "show: $service_web_dev" ;

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>


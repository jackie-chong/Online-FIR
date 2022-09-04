<?php
include("connect.php");

$fullname = $_REQUEST["fullname"];
$GENDER = $_REQUEST["GENDER"];
$age = $_REQUEST["age"];
$address = $_REQUEST["address"];
$pincode = $_REQUEST["pincode"];

$mobile = $_REQUEST["mobile"];
$email = $_REQUEST["email"];
$Identity_type = $_REQUEST["Identity_type"];
$Identity_detail = $_REQUEST["Identity_detail"];


$district = $_REQUEST["district"];
$place_of_occurance = $_REQUEST["place_of_occurance"];
$topic = $_REQUEST["topic"];
$subject = $_REQUEST["subject"];
$details = $_REQUEST["details"];






if( ($fullname == "") || ($GENDER == "")  || ($age == "")  || ($address == "")  || ($pincode == "") || ($Identity_type == "") || ($district == "")|| ($place_of_occurance == "") || ($topic == "")|| ($subject == "")|| ($details == "") )
{
	session_start();
	$_SESSION["reg-failed"] = "no";
	header("Location: index.php");
}
else
	{

        $filename = $_FILES["choosefile"]["name"];
        $tempname = $_FILES["choosefile"]["tmp_name"];  
        $folder = "identity_doc/".$filename; 
    
		$filename = $_FILES["choosefile"]["name"];
        $tempname = $_FILES["choosefile"]["tmp_name"];  
        $folder = "appl_doc/".$filename; 



        $add = mysqli_query($conn,"INSERT INTO `tblrecord`( `full_name`, `gender`, `age`, `contact_address`, `pincode`,`mobile`,`email`,`Identity_type`,`Identity_detail`,`identity_document_path`,`district`,`place_of_occurance`,`topic`,`subject`,`details`,`file_path`) VALUES ('$fullname','$GENDER','$age','$address','$pincode','$mobile','$email','$Identity_type','$Identity_detail','$folder','$district','$place_of_occurance','$topic','$subject','$details','$folder') ");
        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";
        }
    
        $_SESSION["reg-success"] = "yes";
        if($add)
        {
           
            $_SESSION["reg-success"] = "yes";
            $_SESSION['login-failed'] = "clear";
            header("Location: form.php");
        }
	}

?>
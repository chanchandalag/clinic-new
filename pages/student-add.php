<?php
//patient-add

include "../db_conn.php";

extract($_POST);

//$save_query = "INSERT INTO `patient` (`ID_number`, `first_name`, `middle_name`, `last_name`, `extension_name`, `email`, `current_address`, `permanent_address`, `sex`, `course`, `year`, `section`, `brgy`, `municipality`, `province`, `contact`, `age`, `dob`, `name`, `relationship`, `mobile`, `telephone`, `home_address`, `email_add`) VALUES (`$idnum`, `$fname`, `$mname`, `$lname`, `$ename`, `$email`, `$caddress`, `$paddress`, `$sex`, `$course`, `$year`, `$section`, `$brgy`, `$municipality`, `$province`, `$contact`, `$age`, `$dob`, `$name`, `$relationship`, `$mobile`, `$telephone`, `$haddress`, `$eadd`)";


$sql = "INSERT INTO `patient` (`id`, `ID_number`, `first_name`, `middle_name`, `last_name`, `extension_name`, `email`, `current_address`, `permanent_address`, `sex`, `course`, `year`, `section`, `brgy`, `municipality`, `province`, `contact`, `civil_status`, `nationality`, `age`, `dob`, `name`, `relationship`, `mobile`, `telephone`, `home_address`, `email_add`) VALUES (NULL, '$idnum', '$fname', '$mname', '$lname', '$ename', '$email', '$caddress', '$paddress', '$sex', '$course', '$year', '$section', '$brgy', '$municipality', '$province', '$contact', '$cstatus', '$nationality', '$age', '$dob', '$name', '$relationship', '$mobile', '$telephone', '$haddress', '$eadd')";

$process = mysqli_query($conn,$sql);

if($process){
	header("location: /?page=students-record&status=success");
}else{
	echo 'DB error, fck!';
}


//var_dump($_POST);


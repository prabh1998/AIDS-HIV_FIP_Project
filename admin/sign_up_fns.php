<?php

  //table name: tbl_users

  function sign_up($firstname,$lastname,$email,$country){
  	include('connect.php');

  	//check if the email address is unique
	//select row from table where conditions
	$result = $dbh->prepare("SELECT email FROM tbl_user WHERE email = :email");
	$result->execute(array(':email'=>$email));
   //if email exist throw new Exception
	
   if($result->rowCount() > 0){
   	  
   	throw new Exception("That email address is taken---.") ;die;}
   
  //  	 $sql1 = "UPDATE tbl_users SET first_name=:firstname,last_name=:lastname,country=:country WHERE email=:email";
	 // $dbh->exec($sql1);
   

  
   



  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   //if ok：insert data to database,
   $result = $dbh->prepare('INSERT INTO tbl_user (first_name,last_name,email,country,join_date,last_update_date) values(:firstname,:lastname,:email,:country,:join_date,:last_update_date)');
   $nowTime=date('Y-m-d H:i:s');
  $res=$result->execute(array(':firstname'=>$firstname,
				          ':lastname'=>$lastname,
				          ':email'=>$email,
				          ':country'=>$country,
                  ':join_date'=>$nowTime,
                  ':last_update_date'=>''));
 
   if(!$res){
   	throw new Exception("Could not register you in database- plase try again later");
   	
   }
   return true;


  }



// function update_signin(){


// }


?>
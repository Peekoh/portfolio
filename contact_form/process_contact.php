<?php
if ($_SERVER['HTTP_X_REQUESTED_WITH']){
//header("Content-Type: application/json", true);

  $errors = [];
  $gold = $_POST['gold'];

  if (empty($_POST['firstname'])) {
    $errors[] .= 'No name!';
    $first_name     = null;
  } else {
    $first_name = trim($_POST['firstname']);
  }
  if (empty($_POST['lastname'])) {
    $errors[] .= 'no lastname!';
    $last_name    = null;
  } else {
    $last_name =  trim($_POST['lastname']);
  }
  if (empty($_POST['mail'])) {
    $errors[] .= 'No mail';
    $mail  = null;
  } else {
    $mail = trim($_POST['mail']);
  }
  if (empty($errors)) {
    $response = array('firstname'=>$first_name,
                      'lastname'=> $last_name,
                      'gold'=> $gold);
    echo json_encode($response);
  } else {
   echo json_encode("Failure!");
  
  }


 //trim($formCheck);
 
/* $gold=$_POST['gold'];

    $form = $_POST['form'];
    $fName =$form['firstname'];
    $lName = $form['lastname'];

echo "<div>NAMES: " .$fName . $lName . "</div>";
     $check = []; */
/*     if(isset($_POST['firstname'])){
       
    }else{  $check .= "No name!";  }

    if (isset($_POST['lastname'])){
        
    }else{ $check .="No last name!";} */
/* 
      $response = array('firstname'=>$fName,
                'lastname'=> $lName,
                'gold'=> $gold);
        header('Content-Type: application/json');
         echo json_encode("Thank you!");
         exit; */
  /*   if (empty($check)){
      
    }else{
        echo json_encode("There was a problem with your form");
    }
  */
     
}

?>
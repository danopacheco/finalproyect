<?php
require 'conection.php'; //Connect the website with local storage
// require '../database/userDB.php';

require 'db.php';
session_start();
if (isset($_SESSION['userId'])) {
    /* the User is logged in */
    $userId = $_SESSION['userId'];
    $usernameSession = $_SESSION['username'];
    $userType=$_SESSION["id_rol"] = "";
} else {
    $userId = "-1";
    $usernameSession = "NONE";
}


$action = filter_input(INPUT_POST, 'action');
if($action == null){
    $action = filter_input(INPUT_GET, 'action');
    if($action==null){$action ='serviceForm';}
}

switch($action){
    //case 'login':
      //  session_destroy();
        //include '../files/show_login.php';
        //break;
    case 'landingPage':
        include '../files/landingPage.php';
        break;
    case 'serviceForm':
        include '../files/serviceForm.php';
        break;
    case 'addService':
        $plate = filter_input(INPUT_POST, 'plate');
        $name = filter_input(INPUT_POST, 'name'); 
        $phone = filter_input(INPUT_POST, 'phone');
        $model = filter_input(INPUT_POST, 'model');
        $service = filter_input(INPUT_POST, 'service');
        $engine = filter_input(INPUT_POST, 'engine');
        $date = filter_input(INPUT_POST, 'date'); 

        if(addQuote($plate, $name, $phone, $model, $service, $engine, $date)){
            header("Location: ?action=message");
        }
        else {
            header("Location?action=messageerror");
        }
    break;
    case 'message':
        include '../files/message.php';
        break;
    case 'services':
        include '../files/services.php';
        break;
    case 'admin-status-arriving':
        include '../files/arriving.php';
        break;
    case 'admin-status-inProgress':
        include '../files/inProgress.php';
        break;
    case 'admin-status-ready':
        include '../files/ready.php';
        break;
    case 'login':
        session_destroy();
        header ("location: ?action=showLogin");
       
        break;
        case 'showLogin':
            include '../files/login.php';
            break;
    case 'trylogin':
        $name = filter_input(INPUT_POST, 'username');
        $passwordlogin= filter_input (INPUT_POST, 'passwordlogin');
        if(trylogin($name, $passwordlogin)){
            header ("location: ?action=landingPage");
        }

        break;
        case 'logout':
            session_destroy();
            header ("location: ?action=landingPage");
            break;
    case 'update-inProgress': //to change tstaus
    $status = "working";
    $id = filter_input(INPUT_POST, 'id');
    if(updateStatus($id, $status)){
        header ("location: ?action=admin-status-arriving");
    }else{
        include '../files/landingPage.php';
    }
    break;

    case 'update-ready': //to change tstaus
    $status = "ready";
    $id = filter_input(INPUT_POST, 'id');
    if(updateStatus($id, $status)){
        header ("location: ?action=admin-status-inProgress");
    }else{
        include '../files/landingPage.php';
    }
    break;
    
    case "show-newUser":
        include '../files/signin.php';
        break; 
    case "newUser":
     $name = filter_input(INPUT_POST, 'name');
     $user = filter_input(INPUT_POST, 'user');
     $password = filter_input(INPUT_POST, 'password');
     if(addNewUser($name, $user ,$password)){
        header ("location: ?action=landingPage");
    }else{
        include '../files/landingPage.php';
    }
    break; 

}
?>

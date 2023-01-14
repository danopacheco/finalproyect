<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ger Garage</title>
    <link rel="stylesheet" href="../css/commun.css">
    
</head>

<body>
<main>
    
        <header>
            <div id="logo"><a href="?action=landingPage">Ger's Garage </div>
            <div id="get-quote"><a href="?action=serviceForm"> Get a qoute</a></div>
            <div id="services"><a href="?action=services"> Services </a></div>
            <div id="user-btn">
            <?php if($usernameSession=="NONE"){
                echo "
                <div id='login-btn'><a href='?action=login'>login</a></div>";
            }else { 
                echo'
                <div id="user-btn-picture">'. substr($usernameSession,0,1) .'</div>
                <div id="user-btn-name"><a href="#">'.$usernameSession.'</a></div>
                <div ><a href="?action=logout">logout</a></div>';
            }
            ?>
            </div>
        </header>
        <div id="wrapper">
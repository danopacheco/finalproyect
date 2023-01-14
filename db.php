<?php
function addQuote($plate, $name, $phone, $model, $service, $engine, $date){
global $db;
$query ="INSERT INTO services(plate, name, phone, model, service, engine, date) VALUES (:pl, :na, :ph, :mo, :se, :en, :da)";
$st = $db->prepare($query);
$st->bindValue('pl', $plate);
$st-> bindValue('na', $name);
$st->bindValue('ph',$phone);
$st->bindValue('mo', $model);
$st-> bindValue('se', $service);
$st->bindValue('en',$engine);
$st->bindValue('da',$date);

try{
    $st->execute();
}catch(PDOExeption $e){
    header("Location:../files/error.php?msg".$e->getMessage());
}
$st->closeCursor();
return true;
}
function getId($plate,$name){
    global $db;
    $query ="SELECT id FROM services WHERE plate=:pl and name=:na ";
    $st = $db->prepare($query);
    $st->bindValue('pl', $plate);
    $st-> bindValue('na', $name);
    // $st->bindValue('da',$date);
    try{
        $st->execute();
    }catch(PDOExeption $e){
        header("Location:../files/error.php?msg".$e->getMessage());
    }
    $id=$st->fetch();
    $st->closeCursor();
    return $id;
}

function addStatus($id){
global $db;
$query ="INSERT INTO statustable(id) VALUES (:i)";
$st = $db->prepare($query);
$st->bindValue(':i', $id);
try{
    $st->execute();
}catch(PDOExeption $e){
    header("Location:../files/error.php?msg".$e->getMessage());
}
$st->closeCursor();
return true;
}

function getServiceByStatus($status){
    global $db;
    $query ="SELECT * FROM services WHERE status=:st";
    $st = $db->prepare($query);
    $st->bindValue('st', $status);
    try{
        $st->execute();
    }catch(PDOExeption $e){
        header("Location:../files/error.php?msg".$e->getMessage());
    }
    $status=$st->fetchAll();
    $st->closeCursor();
    return $status;
}
function updateStatus ($id, $status){
    global $db;
    $query ="UPDATE services Set status=:st WHERE id=:id";
    $st = $db->prepare($query);
    $st->bindValue('id', $id);
    $st->bindValue('st',$status);
    try{
        $st->execute();
    }catch(PDOExeption $e){
        header("Location:../files/error.php?msg".$e->getMessage());
    }
    $status=$st->fetchAll();
    $st->closeCursor();
    return true;
}

    function addNewUser($name, $user, $password){
        global $db;
        $query ="INSERT INTO user(name,user,password) VALUES (:na,:us,:pas)";
        $st = $db->prepare($query);
        $st->bindValue('na', $name);
        $st->bindValue('us', $user);
        $st->bindValue('pas', $password);
        try{
            $st->execute();
        }catch(PDOExeption $e){
            header("Location:../files/error.php?msg".$e->getMessage());
        }
        $st->closeCursor();
        return true;
        }
        function trylogin($username, $password) {
            global $db;
            $query = "SELECT * FROM user WHERE name =:username AND password =:password";
            $statement = $db->prepare($query);
            $statement->bindValue('username', $username);
            $statement->bindValue('password', $password);
            try {
                $statement->execute();
            } catch (PDOException $e) {
                header("Location: ../files/error.php?msg" . $e->getMessage());
                exit();
            }
            $count = $statement->rowCount();
            if ($count != 1) {
                return false;
            }
            session_start();
            $user = $statement->fetch();
            $statement->closeCursor();
            $_SESSION['userType'] = $user['id_rol'];
            $_SESSION['userId'] = $user['id'];
            $_SESSION['username'] = $user['name'];
            return true;
        }
        


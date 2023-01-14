<?php include '../comunFiles/nav.php'?>
<div id = "login">
     /*INSERT INTO `rol` (`Id`, `description`) VALUES ('1', 'Admin'), ('2', 'user');*/
    <form action="index.php" method="POST" enctype="multypart/form-data" id="signin-form"> 
        <input type="hidden" name="action" value="newUser"> 
<input name="name" required placeholder="name"> 
<input name="user" required placeholder="user">
<input name="password" required placeholder="password">
     <button type="login">login</button>
</form>


<?php include '../comunFiles/footer.php'?>
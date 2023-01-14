<?php include '../comunFiles/nav.php'?>
<div id = "login">

 <form action='index.php' method='POST' enctype="multypart/form-data">  
     <input type='hidden' name='action' value='trylogin' > 
<input name="username" required placeholder="username">
<input name="passwordlogin" required placeholder="password">
     <button type="submit">login</button>
</form>

<?php include '../comunFiles/footer.php'?>
  
<?php include '../comunFiles/nav.php'?>

<form action="index.php" method="POST" enctype="multypart/form-data" id="serviceform">
    <input type="hidden" name="action" value="addService">
<h1>GET A QUOTE</h1>

<input name="name" required placeholder="Complete name">
<input name="phone" required placeholder="Phone number">
<input name="plate" required placeholder="plate number">

<select required name="model">
    <option value=""> Model Type Type</option>
    <option value="Volkswagen"> Volkswagen </option>
    <option value="Ford "> Ford </option>
    <option value="Skoda"> Skoda</option>
    <option value="Nissan"> Nissan</option>
</select>
<select required name="service">
    <option value=""> Service Type</option>
    <option value="Anual"> Anual </option>
    <option value="Major Service"> Major service </option>
    <option value="Repair-Fault"> Repair Fault</option>
    <option value="Major Repair"> Major Repair</option>
</select>
<select required ="engine" name="engine">
    <option value=""> Engine Type</option>
    <option value="Petrol"> Petrol </option>
    <option value="Diesel"> Diesel </option>
    <option value="Hybrid">Hybrid </option>
    <option value="Electric"> Electric</option>
</select>
<label>Appointment Date</label>
<input type="date" name="date">
<button>SUBMIT</button>
</form>
  
<?php include '../comunFiles/footer.php'?>
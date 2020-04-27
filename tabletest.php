<!DOCTYPE HTML>  
<html>
<head>
<title>Form Test</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
 


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <input list="limbs" name="limb">
  <datalist id="limbs">
      <input list="elbow_movements" name="elbow_movement">
      <datalist id="elbow_movements">
        <option value="Observation">
        <option value="Palpation">
        <option value="Active Range of Movement">
	    <option value="Passive Range of Movement">
    	<option value="Accessory Movements">
        <option value="Joint Integrity"> 
        <option value="Neurological Integrity"> 	
        <option value="Neurodynamic Tests"> 	
        <option value="Other Nerve Tests"> 	
        <option value="Vascular"> 	
      </datalist>
      <input list="wrist_movements" name="wrist_movement"> 
      <datalist id="wrist_movements">
        <option value="Observation">
        <option value="Palpation">
        <option value="Active Range of Movement">
	    <option value="Passive Range of Movement">
    	<option value="Accessory Movements">
        <option value="Joint Integrity"> 
        <option value="Neurological Integrity"> 	
        <option value="Neurodynamic Tests"> 	
        <option value="Other Nerve Tests"> 	
        <option value="Vascular"> 	
      </datalist>
      <input list="shoulder_movements" name="shoulder_movement"> 
      <datalist id="shoulder_movements">
        <option value="Observation">
        <option value="Palpation">
        <option value="Active Range of Movement">
	    <option value="Passive Range of Movement">
    	<option value="Accessory Movements">
        <option value="Joint Integrity"> 
        <option value="Neurological Integrity"> 	
        <option value="Neurodynamic Tests"> 	
        <option value="Other Nerve Tests"> 	
        <option value="Vascular"> 	
      </datalist>
  
  </datalist>
  

  
  
</form>


</body>
</html>
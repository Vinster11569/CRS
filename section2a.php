<!DOCTYPE HTML>
<?php
session_start();
?> 
<html>
<head>
<title>Section 2a - Generating A SIN Factor</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

$AggPlan = $WhichTests = $Inflammatory = $Mechanical = $Pain = $Resistance = $FeedBack = $FeedBackLabel= "";
$SIN1 = $SIN2 = $SIN3 = $SIN4 =  $Irritability1 = $Irritability2 = $Irritability3 = $Irritability4 =  "";
$Arthrogenic = $Myogenic = $Vasculogenic = $Neurogenic = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
	$SIN1 = test_input($_POST["SIN1"]);
	$SIN2 = test_input($_POST["SIN2"]);
	$SIN3 = test_input($_POST["SIN3"]);
	$SIN4 = test_input($_POST["SIN4"]);
	$Irritability1 = test_input($_POST["Irritability1"]);
	$Irritability2 = test_input($_POST["Irritability2"]);
	$Irritability3 = test_input($_POST["Irritability3"]);
	$Irritability4 = test_input($_POST["Irritability4"]);
    $Inflammatory = test_input($_POST["Inflammatory"]);
    $Mechanical = test_input($_POST["Mechanical"]);
	$Pain = test_input($_POST["Pain"]);
	$Resistance = test_input($_POST["Resistance"]);
	$Arthrogenic = test_input($_POST["Arthrogenic"]);
	$Myogenic = test_input($_POST["Myogenic"]);
	$Vasculogenic = test_input($_POST["Vasculogenic"]);
	$Neurogenic = test_input($_POST["Neurogenic"]);   
	}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h1 align="center">Questions For Section 2a.</h1>

<div class="PageReadableBlue"><p>You should how have collected a comprehensive subjective history for Mrs Andrews.</p>
<p>Consider the information you have collected on the assessment form and the ideas gathered from the multiple choice questions. Try to pull all the different ideas together to formulate an overall impression as you work through the clinical reasoning form.</p></div>

<img src="./images/lightbulb.jpg" alt="Light Bulb Icon" />

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="PageReadableBlue">
<h2>Section 2: Planning</h2>
<h2>Section 2a: Generating a SIN factor</h2>
<p>Question 22: Use this link to read more about generating a SIN factor.</p></div>
<div class="PageReadableBlack"><strong>[<a href="./documents/SIN Factors.docx" target="_blank">SIN Factors</a>]</strong></div></p>

<div class="PageReadableBlue"><p>Question 22a</p>
<p>Using all of the information from the subjective interview, estimate the overall severity of Mrs Andrew's condition:</p>

<input type="checkbox" name="SIN1" value="Non Painful">Non Painful<br />
<input type="checkbox" name="SIN2" value="Mild">Mild<br />
<input type="checkbox" name="SIN3" value="Moderate">Moderate<br />
<input type="checkbox" name="SIN4" value="Severe">Severe<br /></div>

<div class="PageReadableBlue"><p>Question 22b</p>
<p>Using all of the information from the subjective interview, estimate the overall irritability of Mrs Andrew's condition:</p>

<input type="checkbox" name="Irritability1" value="Non Irritable">Non Irritable<br />
<input type="checkbox" name="Irritability2" value="Mild">Mild<br />
<input type="checkbox" name="Irritability3" value="Moderate">Moderate<br />
<input type="checkbox" name="Irritability4" value="Severe">Severe<br /></div>

<div class="PageReadableBlue"><p>Question 22c</p>
<p>Using all of the information from the subjective interview, estimate, using a percentage, the overall nature of Mrs Andrew's condition (Please just type the percentages as numbers in the boxes):<br />
Question 22ci<br />
With reference to the overall inflammatory - mechanical nature</p>
<p>Inflammatory&nbsp;<input type="text" size="3" name="Inflammatory" />&nbsp;%<br />
Mechanical&nbsp;<input type="text" size="3" name="Mechanical" />&nbsp;%<br /></p></div>


<div class="PageReadableBlue">Question 22cii<br />
With reference to the overall limiting nature</p>
<p>Pain&nbsp;<input type="text" size="3" name="Pain" />&nbsp;%<br />
Resistance&nbsp;<input type="text" size="3" name="Resistance" />&nbsp;%<br /></p></div>

<div class="PageReadableBlue">Question 22ciii<br />
With reference to the overall structural nature</p>
<p>Arthrogenic&nbsp;<input type="text" size="3" name="Arthrogenic" />&nbsp;%<br />
Myogenic&nbsp;<input type="text" size="3" name="Myogenic" />&nbsp;%<br />
Vasculogenic&nbsp;<input type="text" size="3" name="Vasculogenic" />&nbsp;%<br />
Neurogenic&nbsp;<input type="text" size="3" name="Neurogenic" />&nbsp;%<br /></p></div>



<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>
 
<p><a href="section2b.php">Next Question.</a></p>

</form>

<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($SIN1) && ($SIN1!="")) ||
   (isset($SIN2) && ($SIN2!="")) ||
   (isset($SIN3) && ($SIN3!="")) ||
   (isset($SIN4) && ($SIN4!=""))){
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}

$fOutputText = "<hr />\nSection 2a Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);
// End of feedback code.

if ((isset($SIN1) && ($SIN1!="")) ||
   (isset($SIN2) && ($SIN2!="")) ||
   (isset($SIN3) && ($SIN3!="")) ||
   (isset($SIN4) && ($SIN4!=""))){
$fOutputText = "<strong><p>Question 22a</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($SIN1) && $SIN1=="Non Painful") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Non Painful – please reconsider your answer referring to the information on ‘SIN’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN2) && $SIN2=="Mild") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Mild – please reconsider your answer referring to the information on ‘SIN’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN3) && $SIN3=="Moderate") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightGreen";
	$FeedBack = "√ Moderate – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($SIN4) && $SIN4=="Severe") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘SIN’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}

echo "</strong>";
$SIN1 = "";
$SIN2 = "";
$SIN3 = "";
$SIN4 = "";
$FeedBack="";

if ((isset($Irritability1) && ($Irritability1!="")) ||
   (isset($Irritability2) && ($Irritability2!="")) ||
   (isset($Irritability3) && ($Irritability3!="")) ||
   (isset($Irritability4) && ($Irritability4!=""))){
$fOutputText = "<strong><p>Question 22b</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);}

if (isset($Irritability1) && $Irritability1=="Non Irritable") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Non Irritable – please reconsider your answer referring to the information on ‘Description of Pain’.";
    $fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($Irritability2) && $Irritability2=="Mild") {
    $fOutputText = "<div class=\"";	
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Mild – well done – this is the correct answer.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($Irritability3) && $Irritability3=="Moderate") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Moderate – please reconsider your answer referring to the information on ‘Description of Pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	
if (isset($Irritability4) && $Irritability4=="Severe") {
    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘Description of Pain’.";
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);}
	

echo "</strong>";
$Irritability1 = "";
$Irritability2 = "";
$Irritability3 = "";
$Irritability4 = "";
$FeedBack="";


if (($Inflammatory!="") && ($Mechanical!="")) {
$fOutputText = "<strong><p>Question 22c1</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);

    $fOutputText = "<div class=\"";
	if ($Inflammatory=="50") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Inflammatory 50% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Inflammatory 50%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);

	
    $fOutputText = "<div class=\"";
	if ($Mechanical=="50") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Mechanical 50% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Mechanical 50%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);
	
$fOutputText .= "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$Inflammatory = "";
$Mechanical = "";
$FeedBack="";}
if (($Pain!="") && ($Resistance!="")) {
$fOutputText = "<strong><p>Question 22c2</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);

    $fOutputText = "<div class=\"";
	if ($Pain=="60") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Pain 60% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Pain 60%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);

    $fOutputText = "<div class=\"";
	if ($Resistance=="40") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Resistance 40% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Resistance 40%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);

$fOutputText .= "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
$Pain = "";
$Resistance = "";
$FeedBack="";}
if (($Arthrogenic!="") && ($Myogenic!="") && ($Vasculogenic!="") && ($Neurogenic!="")) {
$fOutputText = "<strong><p>Question 22c3</p>";
echo $fOutputText;
fwrite($fp, $fOutputText);

    
	$fOutputText = "<div class=\"";
	if ($Arthrogenic=="50") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Arthrogenic 50% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Arthrogenic 50%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);

    $fOutputText = "<div class=\"";
	if ($Myogenic=="50") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Myogenic 50% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Myogenic 50%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);	

    $fOutputText = "<div class=\"";
	if ($Vasculogenic=="0") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√ Vasculogenic 0% – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Vasculogenic 0%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);	

    $fOutputText = "<div class=\"";
	if ($Neurogenic=="0") {
	$fOutputText .= "PageReadableBrightGreen";
    $FeedBack = "√  % – well done – this is the correct answer.";
} else {
	$fOutputText .= "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Neurogenic 0%";
}
	$fOutputText .= "\">";
    $fOutputText .= "<p>$FeedBack</p></div>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);
	
$fOutputText .= "</strong>";
echo $fOutputText;
fwrite($fp, $fOutputText);
fclose($fp);
$Arthrogenic = "";
$Myogenic = "";
$Vasculogenic = "";
$Neurogenic = "";
$FeedBack="";}

?>
</body>
</html>
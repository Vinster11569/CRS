<!DOCTYPE HTML>  
<html>
<head>
<title>Clinical Reasoning Tool</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values

$TableRows = array();

<table border="1">
<tr>
<td>Order</td>
<td>Test</td>
<td>Position</td>
</tr>
<tr>
<td><textarea id="tOrder01" name="tOrder01" rows="1" cols="30">01

</textarea></td>
<td><textarea id="tTest01" name="tTest01" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition01" name="tPosition01" rows="1" cols="30">

</textarea></td>
</tr>
<tr>
<td><textarea id="tOrder02" name="tOrder02" rows="1" cols="30">02

</textarea></td>
<td><textarea id="tTest02" name="tTest02" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition02" name="tPosition02" rows="1" cols="30">
</textarea></td>
</tr>
<tr>

<td><textarea id="tOrder03" name="tOrder03" rows="1" cols="30">03

</textarea></td>
<td><textarea id="tTest03" name="tTest03" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition03" name="tPosition03" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder04" name="tOrder04" rows="1" cols="30">04

</textarea></td>
<td><textarea id="tTest04" name="tTest04" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition04" name="tPosition04" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder05" name="tOrder05" rows="1" cols="30">05

</textarea></td>
<td><textarea id="tTest05" name="tTest05" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition05" name="tPosition05" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder06" name="tOrder06" rows="1" cols="30">06

</textarea></td>
<td><textarea id="tTest06" name="tTest06" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition06" name="tPosition06" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder07" name="tOrder07" rows="1" cols="30">07

</textarea></td>
<td><textarea id="tTest07" name="tTest07" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition07" name="tPosition07" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder08" name="tOrder08" rows="1" cols="30">08

</textarea></td>
<td><textarea id="tTest08" name="tTest08" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition08" name="tPosition08" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder09" name="tOrder09" rows="1" cols="30">09

</textarea></td>
<td><textarea id="tTest09" name="tTest09" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition09" name="tPosition09" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder10" name="tOrder10" rows="1" cols="30">10

</textarea></td>
<td><textarea id="tTest10" name="tTest10" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition10" name="tPosition10" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder11" name="tOrder11" rows="1" cols="30">11

</textarea></td>
<td><textarea id="tTest11" name="tTest11" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition11" name="tPosition11" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder12" name="tOrder12" rows="1" cols="30">12

</textarea></td>
<td><textarea id="tTest12" name="tTest12" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition12" name="tPosition12" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder13" name="tOrder13" rows="1" cols="30">13

</textarea></td>
<td><textarea id="tTest13" name="tTest13" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition13" name="tPosition13" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder14" name="tOrder14" rows="1" cols="30">14

</textarea></td>
<td><textarea id="tTest14" name="tTest14" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition14" name="tPosition14" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder15" name="tOrder15" rows="1" cols="30">15

</textarea></td>
<td><textarea id="tTest15" name="tTest15" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition15" name="tPosition15" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder16" name="tOrder16" rows="1" cols="30">16

</textarea></td>
<td><textarea id="tTest16" name="tTest16" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition16" name="tPosition16" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder17" name="tOrder17" rows="1" cols="30">17

</textarea></td>
<td><textarea id="tTest17" name="tTest17" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition17" name="tPosition17" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder18" name="tOrder18" rows="1" cols="30">18

</textarea></td>
<td><textarea id="tTest18" name="tTest18" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition18" name="tPosition18" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder19" name="tOrder19" rows="1" cols="30">19

</textarea></td>
<td><textarea id="tTest19" name="tTest19" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition19" name="tPosition19" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder20" name="tOrder20" rows="1" cols="30">20

</textarea></td>
<td><textarea id="tTest20" name="tTest20" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition20" name="tPosition20" rows="1" cols="30"></textarea></td>
</tr>
<tr>

<td><textarea id="tOrder21" name="tOrder21" rows="1" cols="30">21

</textarea></td>
<td><textarea id="tTest21" name="tTest21" rows="1" cols="30">

</textarea></td>
<td><textarea id="tPosition21" name="tPosition21" rows="1" cols="30"></textarea></td>
</tr>

</table>



<?php

// Change Label For Feedback Message, depending on whether any answers selected yet or not?

if ((isset($SIN1) && ($SIN1!="")) ||
   (isset($SIN2) && ($SIN2!="")) ||
   (isset($SIN3) && ($SIN3!="")) ||
   (isset($SIN4) && ($SIN4!=""))){
$FeedBackLabel = "Your Feedback:";
}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
echo "<h2>";
echo $FeedBackLabel;
echo "</h2>";
// End of feedback code.

if ((isset($SIN1) && ($SIN1!="")) ||
   (isset($SIN2) && ($SIN2!="")) ||
   (isset($SIN3) && ($SIN3!="")) ||
   (isset($SIN4) && ($SIN4!=""))){
echo "<p>";
echo "<strong>";
echo "Question 22a";
echo "</p>";}

if (isset($SIN1) && $SIN1=="Non Painful") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
    $FeedBack = "X Non Painful – please reconsider your answer referring to the information on ‘SIN’.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($SIN2) && $SIN2=="Mild") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
    $FeedBack = "X Mild – please reconsider your answer referring to the information on ‘SIN’.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($SIN3) && $SIN3=="Moderate") {
    echo "<div class=\"";
	echo "PageReadableBrightGreen";
	$FeedBack = "√ Moderate – well done – this is the correct answer.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($SIN4) && $SIN4=="Severe") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘SIN’.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}

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
echo "<p>";
echo "<strong>";
echo "Question 22b";
echo "</p>";}

if (isset($Irritability1) && $Irritability1=="Non Irritable") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
    $FeedBack = "X Non Irritable – please reconsider your answer referring to the information on ‘Description of Pain’.";
    echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($Irritability2) && $Irritability2=="Mild") {
    echo "<div class=\"";	
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Mild – well done – this is the correct answer.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($Irritability3) && $Irritability3=="Moderate") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
	$FeedBack = "X Moderate – please reconsider your answer referring to the information on ‘Description of Pain’.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	
if (isset($Irritability4) && $Irritability4=="Severe") {
    echo "<div class=\"";
	echo "PageReadableBrightRed";
	$FeedBack = "X Severe – please reconsider your answer referring to the information on ‘Description of Pain’.";
	echo "\">";
    echo $FeedBack;
    echo"</div>";}
	

echo "</strong>";
$Irritability1 = "";
$Irritability2 = "";
$Irritability3 = "";
$Irritability4 = "";
$FeedBack="";
echo "</p>";

if (($Inflammatory!="") && ($Mechanical!="")) {
echo "<p>";
echo "<strong>";
echo "Question 22c1";
echo "</p>";

    echo "<div class=\"";
	if ($Inflammatory=="50") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Inflammatory 50% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Inflammatory 50%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";

	
    echo "<div class=\"";
	if ($Mechanical=="50") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Mechanical 50% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Mechanical 50%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";
	
echo "</strong>";
$Inflammatory = "";
$Mechanical = "";
$FeedBack="";
echo "</p>";}
if (($Pain!="") && ($Resistance!="")) {
echo "<p>";
echo "<strong>";
echo "Question 22c2";
echo "</p>";

    echo "<div class=\"";
	if ($Pain=="60") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Pain 60% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Pain 60%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";

    echo "<div class=\"";
	if ($Resistance=="40") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Resistance 40% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Resistance 40%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";

echo "</strong>";
$Pain = "";
$Resistance = "";
$FeedBack="";
echo "</p>";}
if (($Arthrogenic!="") && ($Myogenic!="") && ($Vasculogenic!="") && ($Neurogenic!="")) {
echo "<p>";
echo "<strong>";
echo "Question 22c3";
echo "</p>";

    
	echo "<div class=\"";
	if ($Arthrogenic=="50") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Arthrogenic 50% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Arthrogenic 50%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";	

    echo "<div class=\"";
	if ($Myogenic=="50") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Myogenic 50% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Myogenic 50%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";	

    echo "<div class=\"";
	if ($Vasculogenic=="0") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ Vasculogenic 0% – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Vasculogenic 0%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";	

    echo "<div class=\"";
	if ($Neurogenic=="0") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√  % – well done – this is the correct answer.";
} else {
	echo "PageReadableBrightRed";
    $FeedBack = "X Incorrect. The correct answer was Neurogenic 0%";
}
	echo "\">";
    echo $FeedBack;
    echo"</div>";
	
	echo "</strong>";
$Arthrogenic = "";
$Myogenic = "";
$Vasculogenic = "";
$Neurogenic = "";
$FeedBack="";}


if (isset($RedFlag) && ($RedFlag!="")) {
echo "<p>";
echo "<strong>";
echo "Question 23";
//echo $RedFlag;
echo "</p>";}


echo "<div class=\"";

if (isset($RedFlag) && $RedFlag=="Yes") {
	echo "PageReadableBrightRed";
    $FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Red Flags’.";}

if (isset($RedFlag) && $RedFlag=="No") {	
		echo "PageReadableBrightGreen";
		$FeedBack = "√ No - Well done - this is the correct answer - there were no red flags identified in the subjective interview.";}
	
	
echo "\">";
echo $FeedBack;
echo"</div>";
echo "</strong>";
$RedFlag = "";
$FeedBack="";



if (isset($YellowFlag) && ($YellowFlag!="")) {
echo "<p>";
echo "<strong>";
echo "Question 24";
//echo $YellowFlag;
echo "</p>";}


echo "<div class=\"";

if (isset($YellowFlag) && $YellowFlag=="Yes") {
	echo "PageReadableBrightRed";
    $FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Yellow Flags’.";}

if (isset($YellowFlag) && $YellowFlag=="No") {	
		echo "PageReadableBrightGreen";
		$FeedBack = "√ No - Well done - this is the correct answer - there were no yellow flags identified in the subjective interview.";}
	
	
echo "\">";
echo $FeedBack;
echo"</div>";
echo "</strong>";
$YellowFlag = "";
$FeedBack="";


if (isset($Prognosis) && ($Prognosis!="")) {
echo "<p>";
echo "<strong>";
echo "Question 25";
//echo $Prognosis;
echo "</p>";}


echo "<div class=\"";

if (isset($Prognosis) && $Prognosis=="Improving") {
	echo "PageReadableBrightRed";
    $FeedBack = "X Improving - please reconsider your answer referring to the information on 'Condition progression'.";}

if (isset($Prognosis) && $Prognosis=="Static") {	
		echo "PageReadableBrightGreen";
		$FeedBack = "√ Static - Well done - this is the correct answer.";}

if (isset($Prognosis) && $Prognosis=="Worsening") {
	echo "PageReadableBrightRed";
    $FeedBack = "X Worsening - please reconsider your answer referring to the information on 'Condition progression'.";}		
	
echo "\">";
echo $FeedBack;
echo"</div>";
echo "</strong>";
$Prognosis = "";
$FeedBack="";

if (isset($OPACaution) && ($OPACaution!="")) {
echo "<p>";
echo "<strong>";
echo "Question 26a";
//echo $OPACaution;
echo "</p>";}


echo "<div class=\"";

if (isset($OPACaution) && $OPACaution=="Yes") {
	echo "PageReadableBrightRed";
    $FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Cautions and Precautions’.";}

if (isset($OPACaution) && $OPACaution=="No") {	
		echo "PageReadableBrightGreen";
		$FeedBack = "√ No - Well done - this is the correct answer - there were no cautions identified in the subjective interview.";}
	
	
echo "\">";
echo $FeedBack;
echo"</div>";
echo "</strong>";
$OPACaution = "";
$FeedBack="";

if (isset($OPAPreCaution) && ($OPAPreCaution!="")) {
echo "<p>";
echo "<strong>";
echo "Question 26b";
//echo $OPAPreCaution;
echo "</p>";}


echo "<div class=\"";

if (isset($OPAPreCaution) && $OPAPreCaution=="Yes") {
	echo "PageReadableBrightGreen";
    $FeedBack = "√ No - Well done - this is the correct answer - there were clearly soem aggravating factors.";}

if (isset($OPAPreCaution) && $OPAPreCaution=="No") {	
		echo "PageReadableBrightRed";
		$FeedBack = "X Yes – please reconsider your answer referring to the information on ‘Red Flags’.";}
	
	
echo "\">";
echo $FeedBack;
echo"</div>";
echo "</strong>";
$OPAPreCaution = "";
$FeedBack="";

if ($AggPlan!="") {
echo "<p>";
echo "<strong>";
echo "Section 2e";
echo "<br />";
echo $AggPlan;
echo "</p>";}

if ($WhichTests!="") {
echo "<p>";
echo "<strong>";
echo "Section 2f";
echo "<br />";
echo $WhichTests;
echo "</p>";}

?>
</body>
</html>
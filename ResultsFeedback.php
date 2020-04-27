<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
<head>
<title>Clinical Reasoning Tool</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>  

<?php
// define variables and set to empty values

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";

?>
<hr />
<h1 align="center">Results and Feedback.</h1>
<hr />

<div>
<div class="PageReadableBlue"><h2>View Results of Your Progress.</h2></div>
<hr />
<?php
// Text to display link to view progress report file
echo "<p><a href=\"";
echo $fProgress;
echo "\"";
echo " target=\"";
echo "_blank\"";
echo ">Click Here to view Progress File</a></p>";
?>

<hr />
<div class="PageReadableBlue"><h2>Feedback.</h2></div>
<hr />
<p>We hope you enjoyed working through this prototype system? We would appreciate your feedback:</p>

<p><a href="https://bournemouth.onlinesurveys.ac.uk/clinical-reasoning-tool-feedback" target="_blank">Please Click Here To Complete The Feedback Survey.</a><br />Thankyou!</p>
<hr />


<?php

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<strong><p>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}
else {
$fOutputText = "</body></html>";
fwrite($fp, $fOutputText);
fclose(!fp);
session_destroy();}

?>

</body>
</html>
<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
<head>
<title>Page Two</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
<?php
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fProgress = $_SESSION['sess_file'];
$fOutputText = "";
$InitialThoughts = "";
$FeedBack = $FeedBackLabel = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $InitialThoughts = test_input($_POST["InitialThoughts"]);}
	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}	

?>
<hr />
<h1 align="center">Page Two.</h1>
<hr />
<p><div class="PageReadableBlue">This is the case study of Anna Andrews.<br />
You will need to print out a copy of the assessment form.</div>
<div class="PageReadableBlack"><a href="./documents/Assessment Form.doc" target="_blank"><strong>[Word doc - clinical reasoning form]</a></strong></div></p>

<div class="PageReadableBlue"><p>Section 1: Subjective Interview:</p>
<p><img src="./images/lightbulb.jpg" alt="Light Bulb" / ></p>
<p>Using the following resources </div>&nbsp;<div class="PageReadableBlack"><a href="./documents/GP Referral Letter.docx" target="_blank"><strong>[GP Referral Letter]</strong></a></div></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div class="PageReadableBlue"><p>Write down your initial thoughts.</p></div>
 <textarea name="InitialThoughts" id="InitialThoughts" rows="10" cols="80">
</textarea>

<p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Clear Form and Re-Attempt Question(s).</a></p>

<p><input type="submit" name="submit" value="Submit Answer(s)" /></p>

</form>

<div class="PageReadableBlue"><p>Watch the following subjective interview, all the way through - in one go, to simulate a real life scenario.</p>

<p>Document the findings on the assessment form in <q>real time</q> as you watch the video.</p></div>

<p><iframe src="https://bournemouth.cloud.panopto.eu/Panopto/Pages/Embed.aspx?id=184b5265-2ba0-4a57-b26e-95fbdb698c7f&v=1" width="720" height="480" style="padding: 0px; border: 1px solid #464646;" frameborder="0"></iframe></p>

<div class="PageReadableDarkGreen"><a href="./documents/Audio Transcript of Video.docx" target="_blank"><strong>[Audio Transcript of Video]</a></strong></div></p>

<p><a href="VideoClip01Questions.php">Video Clip 01 Questions</a></p>


<?php

if (isset($InitialThoughts) && ($InitialThoughts!="")) {
$FeedBackLabel = "Your Feedback:";

@ $fp = fopen($fProgress, 'ab');
if (!$fp)
{
	echo '<p><strong>File not available at this time.'
	.' Please try again later!</strong></p>';
	exit;
}
$fOutputText = "<hr />\nPage 2 Questions\n<hr />\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

}
else
{$FeedBackLabel="Your Feedback Will Appear Once You Have Clicked The Submit Answers Button.";}
$fOutputText = "<h2>$FeedBackLabel</h2>\n";
echo $fOutputText;
fwrite($fp, $fOutputText);

if (isset($InitialThoughts) && $InitialThoughts!="") {

    $fOutputText = "<div class=\"";
	$fOutputText .= "PageReadableBlue";
	$fOutputText .= "\">";
    $fOutputText .= "Your Initial Thoughts";
    $fOutputText .="</div>";
	$fOutputText .= "<strong>$InitialThoughts</strong>";
	echo $fOutputText;
    fwrite($fp, $fOutputText);
	$InitialThoughts="";}

fclose($fp);
$fOutputText = "";
$InitialThoughts = "";
$FeedBack = "";
$FeedBackLabel = "";
?>
</body>
</html>
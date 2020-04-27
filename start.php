<!DOCTYPE HTML>
<?php
session_start();
?>  
<html>
<head>
<title>Clinical Reasoning System - User Logon Success Status...</title>
<?php
// CSS Text Link for Progress Folder Path
$CSS_Text="<link rel=\"";
$CSS_Text .= "stylesheet\"";
$CSS_Text .= " type=\"";
$CSS_Text .= "text/css\"";
$CSS_Text .= " href=\"";
$CSS_Text .= "../css/default.css\"";
$CSS_Text .= ">";
?>

<!-- CSS Text Link for main web folder files. -->
<link rel="stylesheet" type="text/css" href="css/default.css">

</head>
<body>
<p align="left"><img src="./images/BournemouthUniversityLogo.jpg" alt="Bournemouth University Logo" /></p>
<hr />
<?php
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$Username = $PWD = "";
$Username = test_input($_POST["Username"]);
$PWD = test_input($_POST["PWD"]);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ((($Username=="student") && ($PWD=="physio")) || 
   (($Username=="student01") && ($PWD=="physio01")) || 
   (($Username=="student02") && ($PWD=="physio02")) || 
   (($Username=="student03") && ($PWD=="physio03")) || 
   (($Username=="student04") && ($PWD=="physio04")) || 
   (($Username=="student05") && ($PWD=="physio05")) || 
   (($Username=="student06") && ($PWD=="physio06")) || 
   (($Username=="student07") && ($PWD=="physio07")) || 
   (($Username=="student08") && ($PWD=="physio08")) || 
   (($Username=="student09") && ($PWD=="physio09")) || 
   (($Username=="student10") && ($PWD=="physio10")) || 
   (($Username=="student11") && ($PWD=="physio11")) || 
   (($Username=="student12") && ($PWD=="physio12")) || 
   (($Username=="student13") && ($PWD=="physio13")) || 
   (($Username=="student14") && ($PWD=="physio14")) || 
   (($Username=="student15") && ($PWD=="physio15")) || 
   (($Username=="student16") && ($PWD=="physio16")) || 
   (($Username=="student17") && ($PWD=="physio17")) || 
   (($Username=="student18") && ($PWD=="physio18")) || 
   (($Username=="student19") && ($PWD=="physio19")) || 
   (($Username=="student20") && ($PWD=="physio20")) || 
   (($Username=="student21") && ($PWD=="physio21")) || 
   (($Username=="student22") && ($PWD=="physio22")) || 
   (($Username=="student23") && ($PWD=="physio23")) || 
   (($Username=="student24") && ($PWD=="physio24")) || 
   (($Username=="student25") && ($PWD=="physio25")) || 
   (($Username=="student26") && ($PWD=="physio26")) || 
   (($Username=="student27") && ($PWD=="physio27")) || 
   (($Username=="student28") && ($PWD=="physio28")) || 
   (($Username=="student29") && ($PWD=="physio29")) || 
   (($Username=="student30") && ($PWD=="physio30")) || 
   (($Username=="student31") && ($PWD=="physio31")) || 
   (($Username=="student32") && ($PWD=="physio32")) || 
   (($Username=="student33") && ($PWD=="physio33")) || 
   (($Username=="student34") && ($PWD=="physio34")) || 
   (($Username=="student35") && ($PWD=="physio35")) || 
   (($Username=="student36") && ($PWD=="physio36")) || 
   (($Username=="student37") && ($PWD=="physio37")) || 
   (($Username=="student38") && ($PWD=="physio38")) ||
   (($Username=="student39") && ($PWD=="physio39")) ||
   (($Username=="student40") && ($PWD=="physio40")) ||
   (($Username=="student41") && ($PWD=="physio41")) ||
   (($Username=="student42") && ($PWD=="physio42")) ||
   (($Username=="student43") && ($PWD=="physio43")) ||
   (($Username=="student44") && ($PWD=="physio44")) ||
   (($Username=="student45") && ($PWD=="physio45")) ||
   (($Username=="student46") && ($PWD=="physio46")) ||
   (($Username=="student47") && ($PWD=="physio47")) ||
   (($Username=="student48") && ($PWD=="physio48")) ||
   (($Username=="student49") && ($PWD=="physio49")) ||
   (($Username=="student50") && ($PWD=="physio50")) ||
   (($Username=="student51") && ($PWD=="physio51")) ||
   (($Username=="student52") && ($PWD=="physio52")) ||
   (($Username=="student53") && ($PWD=="physio53")) ||
   (($Username=="student54") && ($PWD=="physio54")) ||   
   (($Username=="student55") && ($PWD=="physio55")) ||   
   (($Username=="adminpt") && ($PWD=="vmcsbrb"))) {
	   
	if (($Username=="adminpt") && ($PWD=="vmcsbrb")) {
	  echo "<hr /><h1 align=\"center\">Admin Panel</h1><p align=\"center\">Refresh browser to see recent attempts.</p><hr /><hr />";
	  echo "<div class=\"";
	  echo "PageReadableBlue";
      echo "\">";
	  echo "<h2><strong>View Student Progress Files.</strong></h2></div>";
      echo "- If an attempt has been made to use the tool, you will be able ";
	  echo "to click and see the results of that attempt below, which will open in a new window. ";
	  echo "Otherwise, it will indicate no file at this time.<p><hr /><hr />";
	  
  
	  $FileUserName = "./progress/student";
	  
	  
	  for ($StudentUser=1; $StudentUser<=55; $StudentUser++) {
		$ProgressFileName=$FileUserName;
		If ($StudentUser<10)  {
			$ProgressFileName .= '0';
		}
		$ProgressFileName .= $StudentUser;
		$ProgressFileName .= ".html";

	    @ $fp = fopen($ProgressFileName, 'r');
	    if (!$fp)
	    {
		    echo "No File Named: $ProgressFileName at this current time.<br />";
			/*if ($StudentUser=55)
			{exit;}*/
	    }
        else {
		echo "<a href=\"";
        echo $ProgressFileName;
        echo "\"";
        echo " target=\"";
        echo "_blank\"";
	  echo ">$ProgressFileName</a><br />";}
		
	    fclose(!fp);		

	  }
  
	  echo "</p><p><a href=\"index.html\">Back to Logon Page.</a></p>";
	  echo "<hr />";}

    else {	
      echo "<div class=\"PageReadableBlue\"><p>Welcome to the Bournemouth University physiotherapy clinical reasoning tool.</p>";
      echo "<p>The purpose of this tool is to simulate the assessment and management process within an outpatients physiotherapy setting to enable development of your clinical reasoning skills prior to placement.</p>";
      echo "<p>As you work through each section you will collect information from a subjective interview and information from an objective physical assessment. Gathered information will be used to guide the clinical reasoning process through a series of multiple choice questions. The next stage enables you to write a problem list, goals and a treatment plan for the case study. In the final section you choose from a series of treatment options and will receive feedback on your choices.</p></div>";
      echo "<p><a href=\"pageone.html\">Go To Page One.</a></p>";

      $_SESSION['sess_user'] = $Username;
      $fProgress = "./progress/$Username.html"; // Create filename from username
      $_SESSION['sess_file'] = $fProgress;

      @ $fp = fopen($fProgress, 'w');
      if (!$fp)
      {
	    echo '<p><strong>File not created at this time.'
	    .'Please try again later!</strong></p>';
	    exit;
      }
      // Text to generate HTML Output file - in live system, omit closing BODY and HTML tags until final page.
      $fOutputText = "<!DOCTYPE HTML>\n<HTML>\n<HEAD>\n<TITLE>User: $Username's Progress.</TITLE>\n$CSS_Text\n</HEAD>\n<BODY>\n<H1>User: $Username's Progress.</H1>\n";
     fwrite($fp, $fOutputText);
     fclose($fp);
     }
    }

else {
	echo "<div class=\"";
	echo "PageReadableBrightRed";
    echo "\">";
	echo "<strong>";
	echo "Login Failed!";
	echo "</strong>";
	echo"</div>";
	echo "<br />";
	echo "<p><a href=\"index.html\">Please Click Here to Return Back to Logon Page.</a></p>";
	}
echo "<hr /><p align=\"center\"><img src=\"./images/cslab2.jpg\" alt=\"Clinical Skills Lab\" /></p><hr /><hr /></body></html>";
?>

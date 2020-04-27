<?php
/**** Self Calling Form
**** Question 1

****/
?>
<html>
<head>
<title>Question 1</title>

<style type="text/css">
.PageReadableBlue {
	color: #0080C0;
}

.PageReadableBrightRed {
	color: #F00;
}

.PageReadableDarkRed {
	color: #003300;
}

.PageReadableDarkGreen {
	color: #003300;
}

.PageReadableBrightGreen {
	color: #00FF00;
}

.PageReadableBlack {
	color: #000000;
}

</style>

</head>
<body>
<h1 align="center">Question 1</h1>
<p>text for question 1</p>



<form id="QuestionFrm" name="QuestionFrm" action="?" method="POST">

<div><p>What stage is the condition?</p>
<input type="radio" name="StageCondition" value="Acute">Acute<br />
<input type="radio" name="StageCondition" value="Sub-acute">Sub-acute<br />
<input type="radio" name="StageCondition" value="Chronic">Chronic<br /></div>

<span id="submitBtnContainer">
                        <input type="submit" name="submitBtn" id="submitBtn" value="Send" class="submitBtn">
                    </span>

</form>

<?php/*
            if (isset($_POST["submitBtn"])) { // Check if form submitted (has the submit button been pressed)
                // Add comment to guestbook database table
                try {
					if
					($StageCondition = $_POST["StageCondition"].value["Acute"];
					echo="Acute - please reconsider your answer referring o the information on Stage of Condition.";)
					if($StageCondition = $_POST["StageCondition"].value["Sub-acute"];
					echo="Sub-Acute - Well done - this is the correct answer";)
					if
					($StageCondition = $_POST["StageCondition"].value["Chronic"];)
					echo="Chronic - please reconsider your answer referring o the information on Stage of Condition.";)
				} catch {
					echo "Error!";
		*/		
			?>

</body>
</html>
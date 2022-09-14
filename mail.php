<?php
// the message

 $userAnswer = $_POST['name'];
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("tauseefmamun@gmail.com","My subject",wordwrap($userAnswer));
?>
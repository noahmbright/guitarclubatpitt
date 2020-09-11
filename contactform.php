<?php 

if (isset($_POST['submit'])){
	$name = $_POST['songname'];

	$mailTo = "nmb84@pitt.edu";
	$headers = "Song Suggestion"

	mail(#mailTo, #headers);
	header("Location: songs.html?mailsend");

}



<?php

function uta_email_validation ($email) {
	$atEmail = explode ('@',strtolower($email));
	$dotEmail = explode('.', $atEmail[1]);
	
	echo $email."::";
	if ($dotEmail[0]=="uta" && $dotEmail[1]=="edu") {
		echo "TRUE<br />";
	}
	else if ($dotEmail[1]=="uta" && $dotEmail[2]=="edu") {
		echo "TRUE<br />";
	}
	else {
		echo "FALSE<br />";
	};
}

uta_email_validation("dineth@uta.edu");
uta_email_validation("dineth@utfa.edu");
uta_email_validation("dineth@uta.efu");
uta_email_validation("dineth@mavs.uta.edu");

if (uta_email_validation("dineth@uta.edu")) {
	echo "TRUE";
}
else {
	echo "FALSE";
}

?>
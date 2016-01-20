<?php
$url = $_SERVER["REQUEST_URI"];
$url2 = explode ('/', $url);
$url3 = explode ('?', $url);
include "template/header.php";
if (!isset($url3[1])) {
	include "template/home.php";
}
elseif ($_GET['i'] == "geolinks") {
	include "template/geolinks.php";
}
elseif ($_GET['i'] == "contact") {
	include "template/contact.php";
}
elseif ($_GET['i'] == 'events') {
	include "template/events.php";
}
elseif ($_GET['i'] == 'news') {
	include "template/news.php";
}
elseif (($_GET['i'] == 'people') && (!isset($_GET['user']))) {
	include "template/people.php";
}
elseif (($_GET['i']) == 'academics') {
	include "template/academics.php";
}
elseif (($_GET['i']) == 'research') {
	include "template/research.php";
}
elseif (($_GET['i']) == 'search') {
	include "template/search.php";
}
elseif ($_GET['i'] == 'forms' ) {
	include "template/forms.php";
}
elseif ($_GET['i'] == 'alumni' ) {
	include "template/alumni.php";
}
elseif ($_GET['i'] == 'field-trip' ) {
	if ($_GET['s'] == 'signup')
		include "template/field-trip-sigup.php";
	elseif ($_GET['s'] == 'view')
		include "template/field-trip-view.php";
	elseif ($_GET['s'] == 'verify')
		include "template/field-trip-verify.php";
	elseif ($_GET['s'] == 'change')
		include "template/field-trip-change.php";
	elseif ($_GET['s'] == 'delete')
		include "template/field-trip-delete.php";
	elseif ($_GET['s'] == 'edit')
		include "template/field-trip-edit.php";
}
if (isset($_GET['user'])) {
	include "template/profile.php";
}
include "template/footer.php";
?>
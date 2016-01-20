<?php
require_once '../includes/db.php';

$_POST['search_term'];
if (isset($_POST['search_term']) && !empty($_POST['search_term'])) {
    $search_term = mysql_real_escape_string($_POST['search_term']);
    $query = mysql_query ("SELECT * FROM students WHERE (type=9 && name LIKE '%$search_term%') ORDER BY name ASC LIMIT 10");
    while ($row = mysql_fetch_assoc($query)) {
        if (strtoupper($search_term) == $search_term) {
            $search_term = strtolower($search_term);
        }
        $search_term_bold = "<strong>".$search_term."</strong>";
        $search_term_bold_caps = "<strong>".ucfirst($search_term)."</strong>";
        $name = str_replace($search_term, $search_term_bold, $row['name']);
        $caps_count = 0;
        $caps_bool = str_replace(ucfirst($search_term), $search_term_bold_caps, $row['name'], $caps_count);
        if ($caps_count > 0) {
            $name = str_replace(ucfirst($search_term), $search_term_bold_caps, $name);
        }
        echo '<li>'.$name.'</li>';
    }
    
}
?>
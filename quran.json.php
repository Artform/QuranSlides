<?php include "config.php";

$surah = $_GET['surah'];
$verse = $_GET['verse'];

// Searching for specified surah/verse ELSE specific ID in database (default = 1)
if ($surah && $verse) $q = ORM::for_table('arabic')->where('surah_id',$surah)->where('verse_id',$verse)->find_one();
else $q = ORM::for_table('arabic')->find_one($id);

// Init an array for return and add English and Transliteration to it next
$ayah = $q->as_array();

// Get English ayah
$q = ORM::for_table('english')->find_one($q['id']);
$ayah['english'] = $q['ayah'];

// Get Transliteration
$q = ORM::for_table('translit')->find_one($q['id']);
$ayah['translit'] = $q['ayah'];

// Return the Arabic, English, and Transliteration
echo json_encode($ayah);

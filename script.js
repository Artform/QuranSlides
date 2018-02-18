// Loads ayah using ID
function load(id) {
	var json = './quran.json.php?id=' + id;
	console.log(json);
	$.getJSON(json, function(data) {
		$('#arabic').html(data.ayah);
		$('#english').html(data.english);
		$('#translit').html(data.translit);
	});
}

// Loads a particular verse using Surah+Ayah number
function load_verse() {
	var surah = $('#surah').find(':selected').val();
	var verse = $('#verses').find(':selected').val();
	var json = './quran.json.php?surah=' + surah + '&verse=' + verse;
	console.log(json);
	$.getJSON(json, function(data) {
		$('#arabic').html(data.ayah);
		$('#english').html(data.english);
		$('#translit').html(data.translit);
	});
}

// Loads verses for a particular surah
function load_verses() {
	qty = $('#surah').find(':selected').data('verses');
	$('#verses').find('option').remove().end();
	for (i=1; i<=qty; i++) {
		$('#verses').append('<option>' + i + '</option>');
	}
	load_verse();
}

// Load next ayah
function next() {
	id++;
	load(id);
}

// Load previous ayah
function previous() {
	id--;
	load(id);
}

// Loads verses using ID of ayah
$(function() {
	load(id);
	load_verses();
});

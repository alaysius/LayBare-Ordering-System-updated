<?php
$oldname = $_POST['namevar'];
$newname = $_POST['namevar1'];
if (rename($oldname, "images/photos/packages/".$newname. ".jpg")) {
	$message = sprintf(
		'The file %s was renamed to %s successfully!',
		$oldname,
		$newname
	);
} else {
	$message = sprintf(
		'There was an error renaming file %s',
		$oldname
	);
}

echo $message;
?>
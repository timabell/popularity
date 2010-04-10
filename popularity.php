<?php
	$packages = $_POST['installed-package-list'];
	//i know you could get 2 uploads in the same second and clobber the file, but
	//i don't care, because it's only for a rough idea of install base :-)'
	$name = "submissions/packages".time().".txt";
	print "writing to $name ...";
	$file = dirname(__FILE__)."/".$name;
	$fp = fopen($file, "w") or die ("couldn't open $name for writing");
	fwrite($fp, $packages) or die ("write failed");
	fclose($fp);
	echo "<p>success</p>";
	print "<blockquote>";
	print $packages;
	print "</blockquote>";
?>

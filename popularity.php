<?php
	$packages = $_POST['installed-package-list'];
	$file = dirname(__FILE__)."/submissions/packages.txt";
	print "writing to $file";
	$fp = fopen($file, "w") or die ("couldn't open $file for writing");
	fwrite($fp, $packages) or die ("write failed");
	fclose($fp);
	echo "success";
	print "<blockquote>";
	print $packages;
	print "</blockquote>";
?>

<?php
$gitPath = '"C:/Program Files/Git/bin/git.exe"';
$repositoryUrl = 'https://github.com/mohit-ram-gupta/token';

$command = "$gitPath  status  2>&1";

$output = shell_exec($command);

echo "<pre>$output</pre>";
echo "hi";
?>

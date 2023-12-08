<?php
$gitPath = '"C:/Program Files/Git/bin/git.exe"';
$repositoryUrl = 'https://github.com/mohit-ram-gupta/testrepo';

$command = "$gitPath add .";

$output = shell_exec($command);

echo "<pre>$output</pre>";
echo "hi";
?>

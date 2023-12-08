<?php 


// $url = "https://github.com/mohit-ram-gupta/Test/zip/refs/heads/main.zip";
// $ch = curl_init();
//     $f = fopen(__DIR__.'/main.zip', 'w+');
//     $opt = [
//         CURLOPT_URL => $url,
//         CURLOPT_FILE => $f,
//         CURLOPT_FOLLOWLOCATION => true,
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_BINARYTRANSFER => true,
//         CURLOPT_HEADER => false,
//         CURLOPT_SSL_VERIFYHOST => false,
//         CURLOPT_SSL_VERIFYPEER => false,
//     ];
//     curl_setopt_array($ch, $opt);
//     $file = curl_exec($ch);

//     curl_close($ch);
//     fclose($f);

    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Repository</title>
</head>
<body>

    <button onclick="downloadZip()">Download Repository</button>
    <script>
        function downloadZip() {
            var githubRepoUrl = "https://github.com/mohit-ram-gupta/Test/archive/refs/heads/main.zip";

            var link = document.createElement("a");
            link.href = githubRepoUrl;

            link.download = "main.zip";

            document.body.appendChild(link);

            link.click();

            document.body.removeChild(link);
        }
    </script>

</body>
</html>

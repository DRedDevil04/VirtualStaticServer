<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Command Output</title>
    <style>
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            overflow: auto;
        }
    </style>
</head>
<body>
    <h1>System Command Output</h1>
    <pre>
    <?php
    $command = 'ls -la'; // Replace with your command
    $output = [];
    exec($command, $output); // Execute the command and capture the output into the array
    foreach ($output as $line) {
        echo htmlspecialchars($line) . "\n"; // Render each line safely
    }
    ?>
    </pre>
</body>
</html>

<?php
$scriptUrl = "https://script.google.com/macros/s/AKfycbyaXYgl5NLEsxprwoBT7tiUlJhOxCyLwt1qnq0Zy6dxOd6opGjBgQ3roHoDC7GX5srpqg/exec";
?>

<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
    <style>
        iframe {
            width: 100%;
            height: 100vh;
            border: none;
        }
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <iframe src="<?php echo htmlspecialchars($scriptUrl); ?>"></iframe>
    <script>
        // Fallback if iframe fails
        document.querySelector('iframe').onerror = function() {
            this.style.display = 'none';
            document.body.innerHTML = `
                <div style="padding:20px;color:red">
                    Failed to load content. 
                    <a href="<?php echo htmlspecialchars($scriptUrl); ?>" target="_blank">
                        Open in new tab
                    </a>
                </div>
            `;
        };
    </script>
</body>
</html>
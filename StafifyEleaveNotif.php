<?php
$scriptUrl = "https://script.google.com/macros/s/AKfycbz17f4Yw-ILUwPf0VwXvXs3jzZ8hSzUXztVjp-VUS65fkOaRPAYm5_G18MwhQwITNBqgw/exec";
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

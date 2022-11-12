<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Links - Chaoscaot</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main>
        <h1><i class="fa-regular fa-user"></i> Chaoscaot.de - Links</h1>
        <a class="card" href="github">
            <span><i class="fa-brands fa-github"></i> GitHub</span>
        </a>
        <a class="card" id="twitter" href="twitter">
            <span><i class="fa-brands fa-twitter"></i> Twitter</span>
        </a>
        <a class="card" href="instagram">
            <span><i class="fa-brands fa-instagram"></i> Instagram</span>
        </a>
        <div class="card" id="discord">
            <span><i class="fa-brands fa-discord"></i> Discord</span>
        </div>
        <a class="card" href="telegram">
            <span><i class="fa-brands fa-telegram"></i> Telegram</span>
        </a>
        <div class="card" id="bottom">
            <a href="https://github.com/Chaoscaot/links.chaoscaot.de/"><i class="fa-brands fa-square-github" aria-label="Source Code" title="Source Code"></i></a>
        </div>
    </main>

    <script>
        const discord = document.getElementById("discord")
        discord.addEventListener("click", () => {
            navigator.clipboard.writeText("Chaoscaot | Max#0303")
            discord.classList.add("copied")
        })
        discord.addEventListener("mouseleave", () => {
            discord.classList.remove("copied")
        })
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bot Hub</title>
</head>
<body>
    <div id="data-container"></div>
    <script>
        const datacontainer = document.getElementById("data-container");
        fetch("https://script.google.com/macros/s/AKfycbw5ECe3hrkJwDrYPiEzzM6cemy4Clu7bccw0l6CrOZBtUtRNwei0Rg5Olio-6h4ipLdSg/exec")
            .then(Response => Response.json())
            .then(data => {
                data.forEach(post => {
                    const postElement = document.createElement("p");
                    postElement.textContent = `${post.colimn1}`;
                    datacontainer.appendChild(postElement);
                })
            })
    </script>
</body>
</html>
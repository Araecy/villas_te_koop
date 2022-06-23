<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bidtest</title>
    <script src="./js/script.js" defer></script>
    <link rel="stylesheet" href="./css/index.min.css?v=<?php echo time(); ?>">
<body>
    <input id="currency" type='currency' value="" placeholder='Type a number & click outside' />
    <button onclick="addBiddingItem()">place bid</button>
    <div id="bidding-container"></div>
</body>
</html>
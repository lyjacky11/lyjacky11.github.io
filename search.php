<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Your Search Results</title>
<link href="theme.css" rel="stylesheet" type="text/css">
</head>
<div id="search">
<strong>You searched for</strong> "<?php echo $_POST("search"); ?>".<br>
<strong>Search Type: </strong> <?php echo $_POST("action"); ?><br><br>

<strong>No results for</strong> "<?php echo $_POST("search"); ?>".<br><br>

Sorry, we are unable to find any results in our database.<br>
Please try again later or find using a different search term.
</div>
<body>
</body>
</html>
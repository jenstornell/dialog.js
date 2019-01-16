<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>dialog.js</title>
  
  <link rel="stylesheet" href="assets/css/dist/style.css?<?= time(); ?>">
</head>
<body>

<!-- Simple pop-up dialog box, containing a form -->
<dialog id="favDialog">
  A modal
</dialog>

<menu>
  <button id="updateDetails">Update details</button>
</menu>


<script src="assets/js/dist/script.js?<?= time(); ?>"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
	affiliateBeautifier.init({
		selector: 'a'
    });
});
kirbyRatings.init('http://www.vardagsfinans.se');
</script>

</body>
</html>
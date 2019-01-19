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
  <div class="dialog-wrap">
  <p>This is a dialog</p>
  <button data-dialog-close="#favDialog">Close</button>
  </div>
</dialog>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam malesuada congue condimentum. Nunc in arcu feugiat, volutpat lorem non, aliquet massa. Fusce condimentum vehicula ante, id facilisis metus interdum sit amet. Aenean varius porta eros, vel accumsan nibh molestie placerat. Curabitur maximus vitae ipsum aliquet sodales. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla volutpat massa sagittis, maximus neque at, lobortis nibh. Praesent sed finibus mi, ac mollis odio. Maecenas vehicula, ex id lacinia ultricies, risus dolor sollicitudin neque, sit amet pulvinar risus ex at ipsum. Suspendisse maximus molestie mauris eget tempor. Morbi vitae tortor id nisi sollicitudin vulputate. Vestibulum suscipit felis ut felis tincidunt, in egestas dolor pharetra. Donec malesuada interdum orci sit amet tristique. Aliquam ultricies ante vel vehicula varius. Vivamus felis lacus, varius ac nunc in, ultrices suscipit velit.

Vestibulum erat neque, venenatis vel tellus ac, iaculis molestie turpis. In neque eros, condimentum in est semper, lobortis sagittis tellus. Ut fringilla sapien libero, non egestas velit cursus et. Curabitur commodo risus tellus, quis consectetur mauris laoreet quis. In vel eros nec lacus hendrerit iaculis. Nam volutpat eros a massa vestibulum iaculis. Donec feugiat tortor luctus diam vulputate fringilla.

In sit amet velit metus. Phasellus ornare condimentum ultrices. Integer tempus placerat dictum. Donec iaculis dapibus mauris sit amet mattis. Pellentesque vestibulum arcu sit amet ante dapibus, ut vulputate sem porta. Phasellus tortor ligula, commodo laoreet elit non, accumsan suscipit justo. Sed nec vehicula arcu.

Curabitur eu mi aliquet, molestie quam vel, commodo nisi. Aliquam erat volutpat. Suspendisse sem dolor, tempus nec sapien id, dapibus luctus ante. Aenean id turpis eget nibh imperdiet rhoncus. Integer eget accumsan erat. Fusce a gravida dui, id tincidunt lacus. Praesent in luctus elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed vestibulum urna dui, id cursus urna gravida ut.

Pellentesque vitae maximus nunc. Donec viverra vitae ex eget aliquet. In eu turpis mattis, dignissim mauris eu, dapibus elit. Proin eget sapien sollicitudin, imperdiet nisl vitae, fringilla dolor. Suspendisse augue neque, efficitur vel justo sed, volutpat facilisis neque. Nunc vestibulum vitae sapien pellentesque vulputate. In non neque enim.

<button id="updateDetails" data-dialog-open="#favDialog">Update details</button>


<script src="assets/js/dist/script.js?<?= time(); ?>"></script>
<script>
let dialog = new Dialog();
dialog.init({
  callbacks: {
    close: function(params){
      console.log(params);
    },
    open: function(params) {
      console.log(params);
    }
  }
});

dialog.open('#favDialog');
</script>

</body>
</html>
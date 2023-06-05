<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar goes here -->

    <?php  include 'header.php'; ?>
   
  
    <!-- View product Section -->
    <div class="veg__search-result container mt-50">
        <div class="row">
            <div class="col-md-4">
                <img class="veg__result-view-img" src="./assets/img/vegetables/carrots.jpg">
            </div>
            <div class="col-md-8 ">
                <div class="veg__search-result-name">Fresh carrots from Fresh Garden</div>
                 <div class="veg__search-result-location">Nuwaraeliya</div>
                <div class="veg__search-result-seller-name">
                    <div type="button" class="" data-toggle="modal" data-target="#exampleModal">
                          Dinuka Lakshan
                     </div>
                 </div>
                 <div class="veg__search-result-price">1KG - RS 1000</div>
                 <div class="veg__profile-result-descriptions">Thilan Thusara Samaraweera is a former Sri Lankan cricketer, who played Tests and ODIs. Samaraweera played international cricket for Sri Lanka as a permanent member in Test squad and is in the side primarily for his solid right-handed batting but is also a capable off spinner.</div>
                 <button type="button" class="btn btn-success veg__btn mt-20"><a href="chekout.php">මිලදී ගන්න</a></button>
                </div>
            
        </div>
    </div>



    <?php  include 'sub-search-result.php'; ?>





    <?php  include 'footer.php'; ?>

    <script>
$(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});

</script>
</body>

</html>    

   
  
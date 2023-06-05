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
   
  <div class="container veg__search-result-primary mt-50">

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">ඔබේ අයිතම</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">නිෂ්පාදන නාමය</h6>
                <small class="text-muted">කෙටි විස්තරය</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">දෙවන නිෂ්පාදනය</h6>
                <small class="text-muted">කෙටි විස්තරය</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">තෙවන අයිතමය</h6>
                <small class="text-muted">කෙටි විස්තරය</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">ප්රවර්ධන කේතය</h6>
                <small>උදාහරණ කේතය</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>

         
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">බිල්පත් ලිපිනය</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">මුල් නම</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                වලංගු මුල් නම අවශ්‍ය වේ.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">අවසන් නම</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                වලංගු අන්තිම නම අවශ්‍යයි.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">පරිශීලක නාමය</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="" required="">
                <div class="invalid-feedback" style="width: 100%;">
                ඔබගේ පරිශීලක නාමය අවශ්‍ය වේ.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">විද්‍යුත් තැපෑල </label>
              <input type="email" class="form-control" id="email" placeholder="dambulla@gmail.com">
              <div class="invalid-feedback">
              නැව්ගත කිරීම් යාවත්කාලීන කිරීම් සඳහා කරුණාකර වලංගු විද්‍යුත් තැපැල් ලිපිනයක් ඇතුළත් කරන්න.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">ලිපිනය</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
              කරුණාකර ඔබේ නැව්ගත කිරීමේ ලිපිනය ඇතුළත් කරන්න.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">ලිපිනය 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="මහල් නිවාසය හෝ කට්ටලය">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">රට</label>
                <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Choose...</option>
                  <option>එක්සත් ජනපදය</option>
                </select>
                <div class="invalid-feedback">
                  
                        කරුණාකර වලංගු රටක් තෝරන්න.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">නැව්ගත කිරීමේ ලිපිනය මගේ බිල්පත් ලිපිනයට සමානයි</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">මෙම තොරතුරු ඊළඟ වතාවට සුරකින්න</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">ගෙවීම</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit">ණයවර පත</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debit">හරපත</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal">පේපෑල්</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">කාඩ්පතේ නම</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">කාඩ්පතේ දැක්වෙන පරිදි සම්පූර්ණ නම</small>
                <div class="invalid-feedback">කාඩ්පතේ නම අවශ්‍යයි
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">ණයවර පත් අංකය</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">ක්‍රෙඩිට් කාඩ් අංකය අවශ්‍ය වේ
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">කල් ඉකුත්වීම</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">කල් ඉකුත් වීමේ දිනය අවශ්‍යයි
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                ආරක්ෂක කේතය අවශ්‍යයි
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-success" type="submit">පිටවීම දිගටම කරගෙන යන්න</button>
          </form>
        </div>
      </div>
      </div>
    





    <?php  include 'footer.php'; ?>


</body>

</html>    

   
  
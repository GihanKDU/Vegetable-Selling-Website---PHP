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

 <!-- Filter Section -->

 <div class=" container veg__search-result-primary mt-20 flex-item">
 <input type="text" class="form-control " placeholder="පරිශීලක නාමය">
 <div class="text-center"><button type="button" class="btn btn-success">සෙවීම</button></div>
 </div>
 <div class="container mt-20">
        <div class="row">
        
            <div class="col-md-4 mt-20">
             <div class="veg__filter-wrapper">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">එළවළු තෝරන්න</label>
                    <select class="form-control" id="">
                      <option>කැරට්</option>
                      <option>ගෝවා</option>
                      <option>වම්බටු</option>
                      <option>වට්ටක්කා</option>
                      <option>බණ්ඩක්කා</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">ප්‍රමාණය තෝරන්න</label>
                    <select class="form-control" id="">
                      <option>1kg</option>
                      <option>5kg</option>
                      <option>10kg</option>
                      <option>50kg</option>
                      <option>100kg</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">ස්ථානය</label>
                    <select class="form-control" id="">
                      <option>කොළඹ</option>
                      <option>ගම්පහ</option>
                      <option>කළුතර</option>
                      <option>ගාල්ල</option>
                      <option>මාතර</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">එළවළු තෝරන්න</label>
                    <select class="form-control" id="">
                      <option>කැරට්</option>
                      <option>ගෝවා</option>
                      <option>වම්බටු</option>
                      <option>වට්ටක්කා</option>
                      <option>බණ්ඩක්කා</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">ප්‍රමාණය තෝරන්න</label>
                    <select class="form-control" id="">
                      <option>1kg</option>
                      <option>5kg</option>
                      <option>10kg</option>
                      <option>50kg</option>
                      <option>100kg</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">ස්ථානය</label>
                    <select class="form-control" id="">
                      <option>කොළඹ</option>
                      <option>ගම්පහ</option>
                      <option>කළුතර</option>
                      <option>ගාල්ල</option>
                      <option>මාතර</option>
                    </select>
                </div>
                <div class="text-center"><button type="button" class="btn btn-success">සෙවීම</button></div>
               
             </div>
            </div>
            <div class="col-md-8">
               <div class="veg__search-result mt-20">
                   <div class="row">
                       <div class="col-md-4">
                           <img class="veg__result-img" src="./assets/img/vegetables/carrots.jpg">
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
                            
                                <a href="./view_result.php"> View Details</a>
                       </div>
                   </div>
               </div>
               <div class="veg__search-result mt-20">
                   <div class="row">
                       <div class="col-md-4">
                           <img class="veg__result-img" src="./assets/img/vegetables/cabbage.jpg">
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
                            
                                <a href="./view_result.php"> View Details</a>
                       </div>
                   </div>
               </div>
               <div class="veg__search-result mt-20">
                   <div class="row">
                       <div class="col-md-4">
                           <img class="veg__result-img" src="./assets/img/vegetables/eggplant.jpg">
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
                            
                                <a href="./view_result.php"> View Details</a>
                       </div>
                   </div>
               </div>
               <div class="veg__search-result mt-20">
                   <div class="row">
                       <div class="col-md-4">
                           <img class="veg__result-img" src="./assets/img/vegetables/green-chilli.jpg">
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
                            
                                <a href="./view_result.php"> View Details</a>
                       </div>
                   </div>
               </div>
               <div class="veg__search-result mt-20">
                   <div class="row">
                       <div class="col-md-4">
                           <img class="veg__result-img" src="./assets/img/vegetables/pumpkins.jpg">
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
                            
                                <a href="./view_result.php"> View Details</a>
                       </div>
                   </div>
               </div>
               <div class="veg__search-result mt-20">
                   <div class="row">
                       <div class="col-md-4">
                           <img class="veg__result-img" src="./assets/img/vegetables/lady.jpg">
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
                            
                                <a href="./view_result.php"> View Details</a>
                       </div>
                   </div>
               </div>
            </div>
        </div> 
        <div class="text-center mt-50"><a href="">See more</a></div>
    </div>



   
  


  
  



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img class="veg__result-img" src="./assets/img/Team/profile.png">
                    </div>
                    <div class="col-md-8 ">
                        <div class="veg__profile-user-name">Dinuka Thisal</div>
                         <div class="veg__profile-user-location">Nuwaraeliya</div>
                         <div class="veg__profile-user-descriptions">Thilan Thusara Samaraweera is a former Sri Lankan cricketer, who played Tests and ODIs. Samaraweera played international cricket for Sri Lanka as a permanent member in Test squad and is in the side primarily for his solid right-handed batting but is also a capable off spinner.</div>
                       
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>
    






      <?php  include 'footer.php'; ?>


</body>

</html>    

   
  
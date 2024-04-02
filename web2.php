<?php
  $conn = mysqli_connect('localhost', 'root', '', 'web2');
  $conn->query("SET NAMES  'utf8'");
$conn->query("SET CHARACTER SET utf8");
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $rating = $_POST["rating"];

    $sql = "INSERT INTO ratee (name,rating) VALUES ('$name','$rating')";
    if (mysqli_query($conn, $sql))
    {
        echo '<script type="text/javascript">'; 
echo 'alert("ڕەخنەو پێشنییارەکانتان بەهەند وەردەگرین  ، سوپاس");'; 
echo 'window.location.href = "web2.php";';
echo '</script>';  
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>

  <title></title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/nice-select/css/nice-select.css" rel="stylesheet">
        
         <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linearicons/style.css" rel="stylesheet">
        <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">



	<style type="text/css">

		   @font-face{
  font-family:shasenem-wefayi;
  src:url('../fonts/rudawregular2.ttf');
}
#a{
    font-family:shasenem-wefayi;

}


	
.text {
  position: absolute;
  top: 45%;
  right:5%;
  color: rgb(171,141,55);
  font-size: 123%;
}

.hr{
     position: absolute;
  top: 14%;
  right: 5%;
  background-color:  rgb(171,141,55);
  padding-right: 50%;
}
#title{
   position: absolute;
  top:30%;
  right:5%;
 color: rgb(171,141,55);
 
}
#t1{
     position: absolute;
  top: 8%;
  right:7%;
 color: rgb(171,141,55);
}


#t2{
     position: absolute;
 top: 8%;
  right: 14%;
 color: rgb(171,141,55);
}

#t3{
     position: absolute;
top: 8%;
  right: 21%;
 color: rgb(171,141,55);
}

#t4{
     position: absolute;
top: 8%;
  right: 29%;
  color: rgb(171,141,55);
}

#t5{
     position: absolute;
top: 8%;
  right: 39%;
 color: rgb(171,141,55);
}

#t6{
     position: absolute;
top: 8%;
  right:47%;
 color: rgb(171,141,55);
}


.g2{

  position: absolute;
  top: 109%;
  right: 45%;
 color:rgb(73,41,61);
  font-size: 270%;
}

.h1{
     position: absolute;
  top: 117%;
  right: 41%;
  background-color:rgb(73,41,61);
  padding-right: 18%;
}

.g3{

  position: absolute;
  top: 122%;
  right: 38%;
  color:rgb(73,41,61);
  font-size: 129%;
}
.ii {
  position: absolute;
  right: 86%;
  width: 14%;
  height: 28%;
  top: 140%;
 
}

.iii {
position: absolute;
  left: 0%;
  width: 18%;
  height: 50%;
  top: 220%;
 
}


.vv {
position: absolute;
  left: 75%;
  width:25%;
  height:50%;
  top: 480%;
 
}
.vvv {
position: absolute;
  left: 0%;
  width: 20%;
  height:23%;
  top: 450%;
 
}


.i2 {
position: absolute;
  left: 75%;
  width: 25%;
  height:50%;
  top: 191%;
 
}


.i {
  width: 95%;
  height: 60%;
}


.v {
position: absolute;
  left: 0%;
  width: 13%;
  height: 30%;
  top: 380%;
 
}




        /* The switch - the box around the slider */
        .switch {
          position: absolute;
          width: 4%;
          height:5%;
          left: 7%;
          top: 7%;
        }

        /* Hide default HTML checkbox */
        .switch input {
          opacity: 0%;
          width: 0%;
          height: 0%;
        }

        /* The slider */
        .slider {
          position: absolute;
          cursor: pointer;
          top: 0%;
          left: 0%;
          right: 0%;
          bottom: 0%;
          background-color: rgb(171,141,55);;
          transition: .3s;
        }

        .slider:before {
          position: absolute;
          content: "";
          height: 78%;
          width: 46%;
          left: 8%;
          top: 10%;
          background-color: white;
          transition: .3s;
        }



        input:checked + .slider:before {
          transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
          border-radius: 44%;
        }

        .slider.round:before {
          border-radius: 50%;
        }

	</style>


</head>
<body id="a" style="background-color: rgb(197,197,197);">


<img src="Untbbbbbitled-2.png" style=" width: 100%">

<hr class="hr">
<p id="t1" style=" font-size: 152%">سەرەکی</p>
<p id="t2" style=" font-size: 152%">گەلەری</p>
<p id="t3" style=" font-size: 152%">ناونیشان</p>
<p id="t4" style=" font-size: 152%">دەربارەی ئێمە</p>
<p id="t5" style=" font-size: 152%">ئۆفەرەکان</p>
<a href="barewbar2.php" style="font-size:152%" id="t6">بەڕێوەبەر</a>
<p id="title" style=" font-size: 355%">گیفت شۆپ</p>

<label class="switch">
        <input type="checkbox" id="toggleButton">
        <span class="slider round"></span>
    </label>

   <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.getElementById('toggleButton');
            
            // Check if the toggle button state is stored in localStorage
            const storedState = localStorage.getItem('toggleButtonState');
            if (storedState === 'on') {
                toggleButton.checked = true;
            } else {
                toggleButton.checked = false;
            }
            
            toggleButton.addEventListener('change', function() {
                if (this.checked) {
                    // If toggle button is on, store its state in localStorage and redirect to web2.php
                    localStorage.setItem('toggleButtonState', 'on');
                    window.location.href = 'web1.php';
                } else {
                    // If toggle button is off, remove its state from localStorage and redirect to web1.php
                    localStorage.removeItem('toggleButtonState');
                    window.location.href = 'web1.php';
                }
            });
        });
    </script>




  <div class="text">
    
    <p>لێرە دەتوانن ڕۆژە تایبەتەکانی ژیانتان تایبەتتر  و جوانتر بکەن  بە ئامادەکردنی </p>
    <p>     دیاریەکەت لەلای ئێمە بە جوانترین دیزاین ،باشترین کوالێتی  ،گونجاوترین نرخ      </p>
</div>

<br><br><br><br><br>
<p class="g2">گیفت شۆپ</p>
<strong><hr class="h1"></strong>
<p class="g3">ناونیشانی جوانترین دیزاین و ، ناوازەترین دیارییە</p>
<br><br><br><br><br>

   <img src="e.png" alt="Image 3" class="ii">
  <img src="3c977df99ff95ae2025087e601a228f7.png" class="iii">
    <img src="ff88eb382b81b3f9e0b7a11d522c937b.png" alt="Image 3" class="i2">


   

<br><br><br>


<section class="cake_feature_four">
            <div class="container">
                <div class="cake_feature_inner">
                    <div class="cake_feature_slider owl-carousel">
 
                        <div class="item">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="0d8ed78c0c6cd7c8aa033d5c7431aa08.jpg"  width="300" height="200">
                                </div>
                            </div>
                        </div>
                
                           <div class="item">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="9b54799d564aea9bb7e7360d42124358.jpg"  width="300" height="200">
                                </div>
                            </div>
                        </div>
               
                           <div class="item">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="19cb7928099a24b8a8838a4ca8a6e917.jpg"  width="300" height="200">
                                </div>
                            </div>
                        </div>
                    
                           <div class="item">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="94669836d33bf5436ac218527e3a87d4.jpg"  width="300" height="200">
                                </div>
                            </div>
                        </div>
                  
                           <div class="item">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="f80e615920173b28a79c943fb4bb09b9.jpg"  width="300" height="200">
                                </div>
                            </div>
                        </div>
                   
                           <div class="item">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="e944c2615e652e2610df481ef5319107.jpg"  width="300" height="200">
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </section>
<br>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>




<p style="position: absolute;top: 198%;right: 45%;color:rgb(73,41,61);font-size: 230%; ">گیفت شۆپ</p>
<hr style="position: absolute;top:205%;right:34%;color: rgb(73,41,61);padding-right:30%">
<p style="position: absolute;top: 210%;right: 33%;color:rgb(73,41,61);font-size: 122%; ">لەسەردەستی ستافێکی بەئەزموون و وەستای شارەزاو دیزاینەری کارامە</p>
<hr style="position: absolute;top: 215%;right:35%;color:rgb(73,41,61);padding-right: 30%">
<p style="position: absolute;top: 219%;right:39%;color:rgb(73,41,61);font-size: 122%; ">بەهوونەرییانە داواکارییەکانتان بۆ جێبەجێ دەکەین</p>
<hr style="position: absolute;top:223%;right: 35%;color:rgb(73,41,61);padding-right: 30%">
<p style="position: absolute;top:228%;right:39%;color:rgb(73,41,61);font-size: 122%; ">بەڕەنگ و دیزاینی تایبەت پێشکەشتانی دەکەین</p>






<div style="background-color: rgb(44,44,44);width: 100%;height: 60%;position: absolute;top: 259%;text-align: center;font-size: 280%;"><br><span style="color: rgb(202,202,202)">
خزمەتگووزارییەکانمان
</div>
    <div style="background-color: rgb(202,202,202);width: 19%;height: 15%;position: absolute;top: 295%;text-align: center;right: 10%"><br><b>گەیاندن
</b><br>بەبێ بەرامبەر داواکارییەکانتان دەگەیەنیینە شوێنی مەبەست</div>

 <div style="background-color: rgb(202,202,202);width: 22%;height: 15%;position: absolute;top: 295%;text-align: center;right: 35%"><br><b>ڕازاندنەوە

</b><br>داواکارییەکانتان پێشکەش بکەن بۆ ڕازاندنەوەی  دیاری بە جوانترین دیزاین ،کەمترین کات ، نرخی گوونجاو</div>

 <div style="background-color: rgb(202,202,202);width: 23%;height: 15%;position: absolute;top: 295%;text-align: center;right: 63%"><br><b>داشکاندن


</b><br>لە بۆنە و رۆژە تایبەتەکانی ساڵ داشکاندن دەکەین بۆ ئەو کەسانەی لای ئێمە داواکارییەکەیان پێشکەش دەکەن</div>


<img src="c.png"  style="position: absolute;top: 279%;width: 7%;right: 18%">
<img src="b.png"  style="position: absolute;top: 278%;width: 7%;right: 43%">
<img src="d.png"  style="position: absolute;top: 278%;width: 4%;right:72%">


<img src="e.png" alt="Image 3" class="v">






<div  style="background: url(aa53d750fa279f6a26f22d50ee7aa91b.jpg)  scroll center center;border:2px solid purple;height:70%;border-radius: 5%;width:70%; position: absolute; top: 340%;left: 16%"></div>
    
        <div class="container">
                <div class="video_inner">
                    <h3 style="font-weight: bolder;color:rgb(0,0,0);position: absolute;top: 355%;left: 38%;font-size: 300%">چۆن  ئامادەیی دەکەین </h3>
                    <div class="media">
                        <div class="d-flex">
                            <a href="1711498385852515720p1711498387405441.mp4" style="position: absolute;top: 375%;left: 42%">
                                <i class="flaticon-play-button" style="color:rgb(0,0,0);"></i></a>
                        </div>

                        <div>
                            <h5 style="font-weight: bolder;color:rgb(0,0,0);position: absolute;top: 374%;left: 46%;font-size:180%">کلیک لێرە بکە </h5>
                        </div>
                    </div>
                </div>
            </div>



<p style="position: absolute;top: 445%;left: 10%;text-align: center;font-size:150%;color:rgb(36,48,31);">بەخێربێن بۆ ناو شۆپەکەمان ، تێبینیەکانی ئێوە سوتەمەنی گەشەکردنمانن ، هیوادارین وێب ئەپڵیکەیشنەکەمان بازاڕکردنێکی ئاسوودەتان پێببەخشیت  <br><br> *سوپاستان دەکەین  لەخوارەوە  تێبینی و ڕەخنەکانتان سەبارەت بە دیزاینەکەمان پێبگەیەنن   *</p>




<img src="f.png" class="vv">
<img src="Captpppppure.PNG" class="vvv">





<div style="background-color: rgb(44,44,44);width: 100%;height: 40%;position: absolute;top: 557%;">
</div>

 <footer >
            <div  style="position: absolute;top: 565%">
                <div class="container">
                    <div class="row footer_wd_inner">
                        
                        <div align="center" class="col-lg-3 col-6" style="text-align: center;left: 10%">
                          
                                <div >
                                    <h3 id="aa" style="font-weight: bolder;font-size:120%;color: white">خزمەتگووزارییەکان  <p style="color:white;font-weight: bolder;">___</p></h3>
                                </div>
                               
                                    <p id="aa" style="font-size:125%;font-weight: bolder;color: white">ئامادەکردنی دیاریی</p>
                                    <p style="font-size:125%;font-weight: bolder;color: white">ڕازاندنەوەی دیاریی</p>
                                    <p style="font-size:125%;font-weight: bolder;color: white">گفتووگۆکردن پێکەوە</a></li>
                                    
                           
                    
                        </div>
                        <div class="col-lg-3 col-6" align="center" class="col-lg-3 col-6" style="text-align: center;left: 12%;list-style-type: none;">
                          
                                <div >
                                    <h3 id="aa" style="font-weight: bolder;font-size: 120%;color: white">کاتی کارکردن   <p style="color:white;font-weight: bolder;">___</p></h3></h3>
                                </div>
                               
                                    <p  style="color: white">Sun. :  Thrs. : 8 am - 8 pm</p>
                                    <p  style="color: white">Sat. : 9 am - 4 pm</p>
                                    <p  style="color: white">Fri. : <i id="aa" style="font-size: 120%"> داخراوە  </i></a></li>
                               
                         
                        </div>

                        <div align="center" class="col-lg-3 col-6" style="text-align: center;left: 14%">
                         
                                <div >
                                    <h3  style="font-weight: bolder;font-size: 120%;color: white">بۆ پەیوەندی کردن    <p style="color:white;font-weight: bolder">___</p></h3></h3>

                                </div>
                                <p style="font-weight: bolder;font-size:110%;color: white">07500000000</p>
                                <p  style="font-size:129%;font-weight: bolder;color: white">پارێزگای هەڵەبجە   </p>
                           
                        </div>

                        <div class="col-lg-3 col-6" style="text-align: center;left: 15%">
                            <aside >
                                <p style="color: rgb(171,141,55);font-size:200%;font-weight: bolder;left: 20%">گیفت شۆپ</p>
                                <p style="font-weight: bolder;font-size:115%;color: white" >جیاوازترین و ناوازەترین دیارییەکان بە جوانترین شێووە پێشکەش بە ئێوە دەکات</p>
                                
                            </aside>
                        </div>

                    </div>
                </div>
            </div>
            
        </footer>

         

         


       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/datetime-picker/js/moment.min.js"></script>
        <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <script src="js/theme.js"></script>                     


<br><br><br><br><br><br><br><br><br><br><br>




<div class="container_rate" style="position: absolute;top: 505%; left: 33%;">
    <div class="row">

<form action="web2.php" method="post">



    <div>
        
       <textarea name="name" rows="3" cols="60" placeholder="سەرنجەکانتان" ; style="text-align: center;border: 3px solid rgb(0,0,0);border-left: none;border-right: none;border-top: none;background-color: rgb(197,197,197);"></textarea>
    </div>
<br>
         <div class="rateyo" id= "rating" data-rateyo-rating="0" data-rateyo-num-stars="5" data-rateyo-score="3" style="position: absolute;left: 150px">
         </div>

  
    <input type="hidden" name="rating">

    </div>

    <div style="position: absolute;left: 45%;background-color:rgb(186,137,129);top: 165%; "><input type="submit" name="add" value="ناردن" > </div>

</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>
</body>
</html>
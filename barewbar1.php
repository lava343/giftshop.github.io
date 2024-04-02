<!DOCTYPE html>
<html lang="en">
<head>

    <style type="text/css">
         @font-face{
  font-family:shasenem-wefayi;
  src:url('../fonts/rudawregular2.ttf');
}
#a{
    font-family:shasenem-wefayi;

}
.hr{
     position: absolute;
  top: 14%;
  right: 5%;
  background-color: rgb(111,32,28);
  padding-right: 50%;
}

#t1{
     position: absolute;
  top: 8%;
  right:7%;
  color: rgb(111,32,28);
  text-decoration: none;
}


#t2{
     position: absolute;
 top: 5%;
  right: 14%;
  color: rgb(111,32,28);
}

#t3{
     position: absolute;
top: 5%;
  right: 21%;
  color: rgb(111,32,28);
}

#t4{
     position: absolute;
top: 5%;
  right: 29%;
  color: rgb(111,32,28);
}

#t5{
     position: absolute;
top: 5%;
  right: 39%;
  color: rgb(111,32,28);
}

#t6{
     position: absolute;
top: 5%;
  right:47%;
  color: rgb(111,32,28);
  
}
#loginButton:hover{
  color: rgb(137,11,3);
}

    </style>
</head>
<body id="a">
  <img src="r.png" width="100%">
    <hr class="hr">
<a id="t1" style=" font-size: 152%" href="web1.php">سەرەکی</a>
<p id="t2" style=" font-size: 152%">گەلەری</p>
<p id="t3" style=" font-size: 152%">ناونیشان</p>
<p id="t4" style=" font-size: 152%">دەربارەی ئێمە</p>
<p id="t5" style=" font-size: 152%">ئۆفەرەکان</p>
<p id="t6" style=" font-size: 152%" >بەڕێوەبەر</p>
  
   <p  style="position: absolute;top:22%;left: 48%;font-size: 128%;color: rgb(111,32,28);">بۆ چوونەژوورەوە بۆ بەشی بەڕێوەبردن تەواوی زانیارییەکانی خوارەوە بەڕاستی و درووستی تۆمار بکە </p>

<div  style="position: absolute;top: 37%;left: 53%; border:1px solid black;width:37%;height:45%;border-radius: 5%" >
    <form id="loginForm" >
        <label for="username" style="position: absolute;top:9%;left: 40%;font-size: 160%">ناوی بەڕێوبەر</label>
        <input type="text" id="username" name="username" style="position: absolute;top:25%;left: 37%"  required  ><br><br>

        <label for="password" style="position: absolute;top:45%;left: 42%;font-size: 160%">وشەی تێپەڕ</label>
        <input type="password" id="password" name="password" required style="position: absolute;top:62%;left: 38%"><br><br>

        <button type="button" id="loginButton" style="position: absolute;top:82%;left: 40%;font-size: 179%;border: none;font-family: shasenem-wefayi;background-color: rgb(232,232,230);">چوونەژورەوە</button>
    </form>
</div>


    <script>
        document.getElementById("loginButton").addEventListener("click", function() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (!username || !password) {
                // Show alert message if username or password is empty
                alert("تکایە تەواوی خانەکان پڕ بەکەرەوە!");
                return;
            }

            if (username === "admin" && password === "admin") {
                // Redirect to another page if username and password are correct
                window.location.href = "data1.php";
            } else {
                // Show alert message if username or password is incorrect
                alert("تکەیە زانییارییەکان بەڕاست و درووستی تۆماربکە!");
            }
        });
    </script>
</body>
</html>

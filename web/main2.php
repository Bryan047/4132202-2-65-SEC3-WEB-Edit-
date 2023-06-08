<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3f5e445c9d.js" crossorigin="anonymous"></script>
    <title>Cafe and Picture</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <nav id="navBar">
            <img src="../logo11.png" class="logo">
            <ul class="nav-links">
                <li><a href="main2.php" class="active">Home</a></li>
                <li><a href="page2.html">Gallery</a></li>
                <li><a href="#4">About</a></li>
            </ul>
            <ul>
            <!-- <a href="signup.php" class="register-btn">Regiser Now</a> -->
            <a href="logout.php" class="register-btn2">LOGOUT </a>
            <i class="fa-solid fa-bars" onclick="togglebtn()"></i>
            </ul>    
        </nav>
        <div class="text-box1">
            <a href="#1" class="btn btn-white">คาเฟ่</a>
            <a href="#2" class="btn btn-white1">สถานที่ท่องเที่ยว</a>
            <a href="#3" class="btn btn-white2">สถานบันเทิง</a>
        </div>
    </div>
    <div class="container">
        <h2 id="2" class="sub-title">สถานที่ท่องเที่ยว</h2>
        <div class="exclusive">
            <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/At_the_Top.jpg/1200px-At_the_Top.jpg "  >
                <span>
                    <h3>Chiang Mai</h3>
                    
                </span>
            </div>
            <div>
                <img src="https://s359.kapook.com/pagebuilder/f1cad28c-eb5b-4ca4-9551-2f6f40026171.jpg" >
                <span>
                    <h3>Chiang Rai</h3>
                    
                </span>
            </div>
            <div>
                <img src="https://img.wongnai.com/p/800x0/2020/10/16/2a3c98008a8b4432ba00019164316fbd.jpg" >
                <span>
                    <h3>Lampang</h3>
                   
                </span>
            </div>
            <div>
                <img src="https://www.maehongsongreentravel.com/images/content/original-1649754083916.jpg" >
                <span>
                    <h3>Mae Hong Son</h3>
                    
                </span>
            </div>
            <div>
                <img src="https://gangtravel.com/upload/2020/07/15_900x600-5.jpg.webp" >
                <span>
                    <h3>Nan</h3>
                    
                </span>
            </div>

        </div>


        <h2 id="1" class="sub-title">Cafe</h2>
        <div class="trending">
            <div>
                <img src="https://lh3.googleusercontent.com/p/AF1QipPzyGyec9ZVNnm-50ik90fBo6Ttm6si00x7d0Hk=s680-w680-h510" >
                <h3>Groon Cafe</h3>
            </div>
            <div>
                <img src="https://lh3.googleusercontent.com/p/AF1QipNUvvjYbh4R1Mdt7b-OJZwRxUq1d1_5humOUfkt=s680-w680-h510" >
                <h3>Nakama Cafe</h3>
            </div>
            <div>
                <img src="https://lh3.googleusercontent.com/p/AF1QipMapl_LziGCCOZQ7-OATAPwTMhE4rrb4ByI0AWD=s680-w680-h510" >
                <h3>ชมวิวค่าเฟ่ </h3>
            </div>
            <div>
                <img src="https://www.kongaroi.com/wp-content/uploads/2020/12/yelloo.jpg" >
                <h3>Yelloo cafe</h3>
            </div>       
        </div>

        <h2 id="3" class="sub-title">สถานบันเทิง</h2>
        <div class="stories">
            <div>
            <img src="https://siam2nite.media/zlnGvGfK57yY0w7CLdmTatznuI0=/1280x960/smart/locations/1081/cover_large_p19op819ru1v92sof1k0l138rf6p3.jpg">
                <p>Warmup Cafe ผับดังของเชียงใหม่</p>
            </div>
            <div>
                <img src="https://scontent.fnak3-1.fna.fbcdn.net/v/t39.30808-6/352002978_1440289480074586_8694674765225497927_n.jpg?stp=dst-jpg_p180x540&_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH0F9HfzgepZmbIEVQbt3GybkAuIK-RFq9uQC4gr5EWr2ZO6JpfpfIsHRrAaN4WDi_g3jSPwQkZxatfZbVH9Xp-&_nc_ohc=-W-krnfhxBAAX8QX0XB&_nc_ht=scontent.fnak3-1.fna&oh=00_AfBDti1teyX1gixyEUBM-KnpFFI7KhgH1nYVc7NDjXbf2w&oe=6485E3CB">
                <p>Ribbon Bar จังหวัดเชียงราย</p>
            </div>
            <div>
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/96/09/28/jikko-bar.jpg?w=1200&h=-1&s=1">
                <p>จิ๊กโก๋บาร์ แท็ปเบียร์ ซิงเกิลมอลต์ จังหวัดแม่ฮ่องสอน</p>
            </div>
        </div>

        <a href="page2.html" class="start-btn">Gallery</a>

        <div class="cta">
            <h3>พักผ่อน เที่ยว <br>ให้สนุกกับวันหยุดของคุณ</h3>
            <p>สามารถเลือกโรงแรมในราคาที่เหมาะสมในแบบที่คุณต้องการ</p>
            <p>ราคาสุดจะประหยัดจากทางเรา</p>
            <a href="page2.html" class="cta-btn">เพิ่มเติม</a>
        </div>
        <!-- <div class="arrow">
            <a href="#"  class="fas fa-arrow-up" style="font-size: 55px;color: #fff;"></a>
        </div> -->

        <div class="about-msg">
            <h2 id="4">About Cafe and Picture</h2>
            <p>เว็บไซต์นี้จัดทำเพื่อแนะนำการท่องเที่ยวภายในภาคเหนือเท่านั้น</p>
            <p>ภายในเว็บไซต์อาจจะไม่มีเนื้อหาที่คุณต้องการหรือคุณภาพอาจจะไม่ถูกใจผู้ใช้</p>
            <p>ทางเราขออภัยมา ณ ที่นี้ด้วยและเว็บไซต์นี้จัดทำเพื่อการศึกษาเท่านั้น</p>
        </div>

        <div class="footer">
            <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <hr>
            <p>Copyright 2023, Cafe and Picture.</p>
        </div>

     
    </div>

<script>
    var navBar = document.getElementById("navBar")

    function togglebtn(){
        navBar.classList.toggle("hidemenu");
    }

</script>
</body>


</html>


<?php

}else{
    header("Location: loginForm.php");
                exit();
}

?>
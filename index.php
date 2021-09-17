<?php
$con = mysqli_connect("localhost", "root", "", "assignment");
$nameerr = $codeerr = $emailerr = $moberr = $commenterr = $name = $countrycode = $email = $mobile = $commenterr = "";
if (!$con) {
    die("Database connection failed");
} else {
    if (isset($_REQUEST['submit'])) {
        if (empty($_REQUEST['name'])) {
            $nameerr = "<p>Please enter name</p>";
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $_REQUEST['name'])) {
                $nameerr = "<p>Only Letters are allowed</p>";
            }
        }
        if (empty($_POST['regioncode'])) {
            $codeerr = "<p>Please enter countrycode</p>";
        } else {
            if (!preg_match("/^[+0-9]*$/", $_POST['regioncode'])) {
                $codeerr = "<p>Only + and numbers are allowed</p>";
            }
        }
        if (empty($_POST['email'])) {
            $emailerr = "<p>Please enter email</p>";
        } else {
            if (!preg_match("/^[a-z0-9_-]+(\.[a-z0-9_-])*@[a-z0-9-]+(\.[a-z0-9-]+(\.[a-z]){2,6})$/", $_POST['email'])) {
                $emailerr = "<p>Only + and numbers are allowed</p>";
            }
        }
        if (empty($_POST['mobile'])) {
            $moberr = "<p>Please enter mobile</p>";
        } else {
            if (!preg_match("/^[0-9]{10}*$/", $_POST['mobile'])) {
                $moberr = "<p>Only Ten digits are allowed</p>";
            }
        }
        if (empty($_POST['comment'])) {
            $commenterr = "<p>Please enter comment</p>";
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $_POST['comment'])) {
                $commenterr = "<p>Only text is allowed</p>";
            }
        }
        $name = $_POST['name'];
        $countrycode = $_POST['countrycode'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $comment = $_POST['comment'];
    }
    if (!empty($_POST['name'])) {
        $query = "insert into contactus (`name`,`countrycode`,`email`,`mobile`,`comment`) values ('" . $name . "','" . $countrycode . "','" . $email . "','" . $mobile . "','" . $comment . "')";
        if (mysqli_query($con, $query)) {
?>
            <script>
                alert("Thank You for submitting your query :) We will get back to you soon..");
            </script>
<?php
            mysqli_close($con);
        } else {
            die(mysqli_error($con));
        }
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="position:relative">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><span>01</span></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"><span>02</span></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"><span>03</span></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1.webp" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/2.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/3.jpg" class="d-block w-100" alt="">
            </div>
        </div>
        <div class="carousel-hr"></div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <nav class="nav flex-column">
            <a class="nav-link active" aria-current="page" id="1" href="#">
                <span id="nav-list"></span>
                <span class="arrow"></span>
                <span class="link-name">Header</span>
            </a>
            <a class="nav-link" id="2" href="#Home">
                <span id="nav-list"></span>
                <span class="arrow"></span>
                <span class="link-name">Home</span>
            </a>
            <a class="nav-link" id="3" href="#amenities">
                <span id="nav-list"></span>
                <span class="arrow"></span>
                <span class="link-name">Amenities</span>
            </a>
            <a class="nav-link" id="4" href="#aboutUs">
                <span id="nav-list"></span>
                <span class="arrow"></span>
                <span class="link-name">About Us</span>
            </a>
            <a class="nav-link" id="5" href="#ourWork">
                <span id="nav-list"></span>
                <span class="arrow"></span>
                <span class="link-name">Our Work</span>
            </a>
            <a class="nav-link" id="6" href="#contactUs">
                <span id="nav-list"></span>
                <span class="arrow"></span>
                <span class="link-name">Contact Us</span>
            </a>
            <a class="nav-link" id="7" href="#careers">
                <span id="nav-list"></span>
                <span class="arrow"></span>
                <span class="link-name">Carrers</span>
            </a>
        </nav>
        <button class="btn"><a href="#contactUs"><i>Enquire Now</i></a></button>
    </div>

    <div id="amenities">
        <img id="opacity" src="images/2.jpg" alt="">
        <img src="images/3.jpg">
        <div class="orange row g-3">
            <div class="border">
                <h2>Amenities</h2>
                <div class="amenityList">
                    <a href="#">Video Door Phone</a>
                    <a href="#">Outdoor Cafes</a>
                    <a href="#" class="active">Restaurants</a>
                    <a href="#">Food Trucks</a>
                    <a href="#">Lively Fairs</a>
                </div>
            </div>
        </div>
    </div>

    <div id="contactUs">
        <img id="opacity" src="images/4.jpg" alt="">

        <form action="" method="post" class="row g-3" id="form">
            <h1>Contact Us<div></div>
            </h1>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" placeholder="Name*" />
                <span class="text-danger"><?= $nameerr; ?></span>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="regioncode" placeholder="India (+91)" />
                <span class="text-danger"><?= $codeerr; ?>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="email" placeholder="Email" />
                <span class="text-danger"><?= $emailerr; ?>
            </div>
            <div class="col-md-6">
                <input type="number" class="form-control" name="mobile" placeholder="Mobile" />
                <span class="text-danger"><?= $moberr; ?>
            </div>
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Comment" rows="4" name="comment"></textarea>
                <span class="text-danger"><?= $commenterr; ?>
            </div>
            <div class="col-md-12">
                <input type="submit" value="SUBMIT" name="submit" id="submit-btn" />
            </div>
        </form>

        <div class="container">
            <div class="row g-3" id="disc">
                <div class="col-md-7">
                    <div><b>Disclaimer:</b></div>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    <div id="copyright">Copyright &#169; 2020 all right reserved
                    </div>
                </div>
                <div class="col-md-5">
                    <div id="post">Postal Address:</div>
                    <div id="addrs">Address: Keas 69 Str.15234, Chalandri Athens, Greece</div>
                    <div id="number">Call: +30-2106019321 | +30-6977546132 (mobile phone)</div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 6000,
            wrap: true
        });
        var $item = $('.carousel-item');
        var $myCarosel = $('#myCarousel');
        var $wHeight = $(window).height();
        $item.eq(0).addClass('active');
        $item.height($wHeight - 70);
        $item.addClass('full-screen');
        $myCarosel.height($wHeight - 70);
        $('#myCarousel img').each(function() {
            var $src = $(this).attr('src');
            $(this).parent().css({
                'background-image': 'url(' + $src + ')',
            });
            $(this).remove();
        });

        $(window).on('resize', function() {
            $wHeight = $(window).height();
            $item.height($wHeight);
        });
        $(window).scroll(function() {
            var carousel = $('#myCarousel').height();
            var amenity = $('#amenities').height();

            if ($(document).scrollTop() == 0 &&  $(document).scrollTop()<= carousel) {
                $('#myCarousel .nav a').removeClass('active');
                $('#amenities .nav a').removeClass('active');
                $('#contactUs .nav a').removeClass('active');
                // $('#myCarousel .nav .link-name').css('display','block');
                // $('#amenities .nav .link-name').css('display','none');
                // $('#contactUs .nav .link-name').css('display','none');
                $('#myCarousel .nav #1 .link-name').css('display','block');
                $('#myCarousel .nav #1 .arrow').css('display','block');
                $('#myCarousel .nav #1').addClass('active');
            }
            if ($(document).scrollTop() >= carousel) {
                $('#myCarousel .nav a').removeClass('active');
                $('#amenities .nav a').removeClass('active');
                $('#contactUs .nav a').removeClass('active');
                // $('#myCarousel .nav .link-name').css('display','none');
                // $('#amenities .nav .link-name').css('display','block');
                // $('#contactUs .nav .link-name').css('display','none');
                $('#myCarousel .nav .arrow').css('display','none');
                $('#amenities .nav #4 .link-name').css('display','block');
                console.log('active');
                $('#amenities .nav #4').addClass('active');
            }
            if ($(document).scrollTop() >= carousel) {
                $('#myCarousel .nav a').removeClass('active');
                $('#amenities .nav a').removeClass('active');
                $('#contactUs .nav a').removeClass('active');
                // $('#myCarousel .nav .link-name').css('display','none');
                // $('#amenities .nav .link-name').css('display','none');
                // $('#contactUs .nav .link-name').css('display','block');
                $('#myCarousel .nav .arrow').css('display','none');
                $('#contactUs .nav #6 .link-name').css('display','block');
                $('#contactUs .nav #6').addClass('active');
            }
        });

        var amenitesNav = $('#myCarousel nav').clone();
        var ContactUsNav = $('#myCarousel nav').clone();
        $('#amenities').append(amenitesNav);
        $('#contactUs').append(ContactUsNav);

        $('.amenityList a').hover(
            function() {
                $('.amenityList a').removeClass('active');
                $(this).addClass('active');
            },
            function() {
                $(this).removeClass('active');
            });
        $('.border').mouseleave(
            function() {
                $('.amenityList a:nth-child(3)').addClass('active');
            });
        $('.nav-link').click(
            function() {
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            }
        );
        // // if($(document).scrollTop > 200){
        //     console.log($(document).scrollTop);
        //     $('#amenities nav .nav-link #3').css('display','block');
        // // }
        // if ($('.nav-link').hasClass('active')) {
        //     $('.active .arrow').css('display', 'block');
        //     $('.active .link-name').css('display', 'block');
        // } else {
        //     $('.link-name').css('display', 'none');
        // }

        // var triggerTabList = [].slice.call(document.querySelectorAll('#myCarousel nav a'))
        // triggerTabList.forEach(function(triggerEl) {
        //     var tabTrigger = new bootstrap.Tab(triggerEl)

        //     triggerEl.addEventListener('click', function(event) {
        //         event.preventDefault()
        //         tabTrigger.show()
        //     })
        // })
    </script>
</body>

</html>
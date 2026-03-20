<?php
include_once('../classes/config.php');

function showRDiv()
{
    if ($_SESSION['btnPressed'] == "Register") {
        $showRDiv = 'Block';
    } else {
        $showRDiv = 'none';
    }

    return $showRDiv;
}
function showRDivAdd()
{
    if ($_SESSION['BtnPressed'] == "Apply") {
        $showRDiv = 'Block';
    } else {
        $showRDiv = 'none';
    }
    return $showRDiv;
}

$fname = '';
$lname = '';
$mobile = '';
$email = '';
//
if (isset($_SESSION['eduworld_params']) && count($_SESSION['eduworld_params']) > 0) {
    $eduworld_params = $_SESSION['eduworld_params'];
    if (isset($eduworld_params) && count($eduworld_params) > 0) {
        $fname = $eduworld_params['fname'];
        $lname = $eduworld_params['lname'];
        $mobile = $eduworld_params['mobile'];
        $email = $eduworld_params['email'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robots" content="noindex,nofollow">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        MET: Top PGDM College in Mumbai, PGDM in Marketing, PGDM in Finance
    </title>
    <meta name="Description" content="MET Institute of PGDM is one of the best PGDM colleges in Mumbai. PGDM at MET is approved by AICTE & DTE. It is more than an MBA since its industry-driven course content, pedagogy, New Age Add on specialisation">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>

    <!-- Link Swiper's CSS -->
    <link rel='stylesheet' href='https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css'>

    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>


    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-9110127-6']);
        _gaq.push(['_setDomainName', '.met.edu']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>


    <script>
        function RedirectRegistration() {
            // alert('Hii');
            $.ajax({
                type: 'POST',
                url: "../classes/redirects.php",
                dataType: 'json',
                data: {
                    fname: '<?php echo $fname; ?>',
                    lname: '<?php echo $lname; ?>',
                    mobile: '<?php echo $mobile; ?>',
                    email: '<?php echo $email; ?>',
                    institute_name: 'MET Institute of Post Graduate Diploma in Management',
                    course_id: '46'
                },
                beforeSend: function() {},
                success: function(res) {
                    // alert(res);
                    if (res.error === 1) {
                        window.location = res.url;
                    } else {
                        alert(res.msg);
                    }
                }
            });
        }
    </script>



    <script type="text/javascript">
        $(document).ready(function() {
            $("#myTab a").click(function(e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>

    <script>
        //init
        $(document).ready(function() {
            window.responsiveTables.init();
        });
    </script>

    <link rel="shortcut icon" type="image/png" href="https://www.met.edu/frontendassets/images/fev/metlogo.ico" />


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y35WP4WP37"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Y35WP4WP37');
    </script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-9110127-6']);
        _gaq.push(['_setDomainName', '.met.edu']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>


    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '450155366593151');
        fbq('track', 'PageView');
        fbq('track', 'Lead');
    </script>
    <noscript><img height="" 1"" width="" 1"" style="" display:none"" src="" https://www.facebook.com/tr?id=450155366593151&ev=PageView&noscript=1"" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Microsoft Clarity Tracking Code -->
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "chqhrstg9m");
    </script>
    <!-- End Microsoft Clarity Code -->

    <!-- Global site tag (gtag.js) - Google Ads: 10944998245 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10944998245"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10944998245');
    </script>
    <!-- End Global site tag -->

    <!-- Event snippet for Sign-up_PGDM (e-Business) conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-10944998245/5ekvCK6w4csDEOXW_eIo'
        });
    </script>

</head>



<body id="top">


    <!-- Section: 1 -->
    <section class="mb-20 background-radial-gradient">
        <style>
            .background-radial-gradient {
                background-color: hsl(218, 41%, 15%);
                background-image: linear-gradient(to bottom right, rgba(7, 7, 7, 0.8), rgba(17, 17, 17, 0.8)),
                    url('img/header-background.jpg');
                /* background-image:url('img/3.jpg'); */
            }
        </style>

        <nav class="navbar bg-white drop-shadow-lg navbar-expand-lg  py-2  relative flex items-center w-full justify-between">
            <div class="px-6 w-full flex flex-wrap items-center justify-between ">
                <div class="flex mx-auto">
                    <a class="navbar-brand  w-[8rem] mb-[-3rem]" href="#!">
                        <img src="https://www.met.edu/frontendassets/images/MET_College_in_Mumbai_logo.png" class="" alt="">
                    </a>
                </div>
            </div>
        </nav>

        <div class="container px-6 py-16 mx-auto text-center h-[35rem]">
            <div class="max-w-lg mx-auto">
                <h1 class="text-2xl md:text-3xl xl:text-5xl text-red-500 font-bold tracking-tight ">
                    PGDM
                </h1>
                <p class="mt-6 mb-6 text-white text-[14.8px]">
                    Marketing, Finance, HR, System and Operations. New Age Add on specialisation in
                    FinTech, MarTech, Media &amp; Entertainment, Business Analytics,
                    Start-ups &amp; New Enterprise Management.
                </p>


                <a class="example_a" href="#" onclick="javascript:RedirectRegistration();" rel="nofollow noopener">
                    <div class="text-white bg-red-600 rounded-lg hover:bg-gray-800 py-3 px-5 " style="display: <?php echo showRDivAdd() ?>">
                        <center>
                            Proceed To Application
                        </center>
                    </div>
                </a>


                <div class="text-white bg-red-600 rounded-lg hover:bg-gray-800 py-3 px-5 " style="display: <?php echo showRDiv() ?>">
                    <center>
                        <h3>
                            Thank You
                        </h3>
                        <p>
                            Councellor Will Contact You Soon..
                        </p>
                    </center>
                </div>


            </div>

            <div class="flex justify-center mt-10 ">
                <?php
                include('content/PGDM_Banner.php');
                ?>
                <!-- <iframe  width="727" height="409" src="https://www.youtube.com/embed/ua-CiDNNj30" title="Learn Data Science Tutorial - Full Course for Beginners" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
            </div>
        </div>
    </section>
    <!-- Section: 1 -->


    <!-- Section 2 -->
    <section class="px-6 py-12 md:px-12 text-center lg:text-left" id="apply-now">
        <div class="container mt-[1rem] mx-auto xl:px-32 grid lg:grid-cols-2 gap-12 flex">
            <div class="lg:mt-[2rem]">
                <h1 class="text-3xl text-red-500 font-bold capitalize lg:text-3xl">
                    About Programme
                </h1>

                <p class="max-w-xl mt-6 text-justify">
                    MET is ranked as one of the top B-schools in India that offers PGDM or PGDM in
                    Mumbai with specialisations in Marketing, Finance, HR, System and Operations. <br>
                    PGDM at MET is approved by the All India Council for Technical Education (AICTE) &amp;
                    DTE, Govt. Of Maharashtra. It is more than an MBA since its industry-driven course
                    content and pedagogy empowers budding managers with technological tools and
                    knowledge besides honing their managerial prowess. It is evident by the fact that a
                    few thousand MET PGDM alumni are successfully employed at senior levels in
                    leading corporate organisations, making their presence felt and many are successful
                    entrepreneurs too.<br>
                    Besides regular specializations in Finance, Marketing, Human Resources, System
                    and Operations, MET PGDM offers New Age Add-on specialization in FinTech,
                    MarTech, Media &amp; Entertainment, Business Analytics, Start-ups &amp;
                    New Enterprise Management.
                </p>
            </div>
            <div class=" lg:mt-[2rem]  ">
                <div class="w-full px-8 py-10 h-[31rem] mx-auto overflow-hidden bg-red-600 shadow-2xl rounded-xl  lg:max-w-xl">
                    <h1 class="text-2xl pt-[5rem] font-medium text-white  text-center">
                        Thank You
                    </h1>

                    <p class="mt-4 text-white text-center">
                        Councellor Will Contact You Soon..
                    </p>

                    <div class="text-white" style="display: <?php echo showRDiv() ?>">
                        <center>
                            <a href="https://www.met.edu/uploadfile/documents/PGDM/PGDM_Brochure_2024.pdf" class="reply-info"><u>
                                    <font>
                                        <p>Right Click and Save As the e-copy of the brochure PGDM</p>
                                    </font>
                                </u></a>
                        </center>
                    </div>
                    <br>

                    <a class="example_a" href="#" onclick="javascript:RedirectRegistration();" rel="nofollow noopener">
                        <div class="text-white bg-black py-3 px-5 " style="display: <?php echo showRDivAdd() ?>">
                            <center>
                                Proceed To Application
                            </center>
                        </div>
                    </a>

                    <br>
                    <p class="text-white text-center ">Please wait, it may take a few seconds. <br> Do not click again or refresh.</p>

                </div>
            </div>
        </div>
    </section>
    <!-- Section 2 -->



    <?php
    include('content/PGDM_content.php');
    ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <!-- Swiper JS -->
    <script src='https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js'></script>
    <script>
        $('.question-and-answer').click(function() {
            $(this).find(".answer").toggleClass("hidden")
            $(this).find(".question-chevron").toggleClass("hidden")
        })
    </script>


    <!-- download PDF -->
    <script type="text/javascript">
        window.onload = function() {
            setTimeout(function() {
                DownloadFile("PGDM_Brochure_2024.pdf");
            }, 1000);
        };

        function DownloadFile(fileName) {
            //Set the File URL.
            var url = "https://www.met.edu/uploadfile/documents/PGDM/" + fileName;

            //Create XMLHTTP Request.
            var req = new XMLHttpRequest();
            req.open("GET", url, true);
            req.responseType = "blob";
            req.onload = function() {
                //Convert the Byte Data to BLOB object.
                var blob = new Blob([req.response], {
                    type: "application/octetstream"
                });

                //Check the Browser type and download the File.
                var isIE = false || !!document.documentMode;
                if (isIE) {
                    window.navigator.msSaveBlob(blob, fileName);
                } else {
                    var url = window.URL || window.webkitURL;
                    link = url.createObjectURL(blob);
                    var a = document.createElement("a");
                    a.setAttribute("download", fileName);
                    a.setAttribute("href", link);
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                }
            };
            req.send();
        };
    </script>

</body>

</html>
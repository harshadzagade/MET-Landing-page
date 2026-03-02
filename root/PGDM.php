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
    <meta name="Description"
        content="MET Institute of PGDM is one of the best PGDM colleges in Mumbai. PGDM at MET is approved by AICTE & DTE. It is more than an MBA since its industry-driven course content, pedagogy, New Age Add on specialisation">
    <link rel="shortcut icon" type="image/png" href="https://www.met.edu/frontendassets/images/fev/metlogo.ico" />

    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>

    <!-- Link Swiper's CSS -->
    <link rel='stylesheet' href='https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css'>

    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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



    <script type="text/javascript">
        $(document).ready(function() {
            $('.c-tabs').basicTabs();
        });

        function isEmailValid(email) {
            return /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w{2,}$/.test(email);
        }

        // now, test it: 

        function ValidateData() {
            var Alphabet; //Alphabet = "^[a-zA-Z]+$";			
            Alphabet = /^[A-Za-z\s\b]+$/; //A-Z or a-z Alphabets only allowed				
            var fname1 = document.getElementById('txtFName').value;
            var city1 = document.getElementById('txtCity').value;
            var y = document.forms[0].txtMobile.value;
            if (document.forms[0].txtFName.value == "") {
                alert("Name is not given.");
                document.forms[0].txtFName.focus();
                return false;
            }
            if (!fname1.match(Alphabet)) {
                alert("Please enter the correct first name!");
                document.forms[0].txtFName.value = "";
                document.forms[0].txtFName.focus();
                return false;
            }


            if (document.forms[0].txtLName.value == "") {
                alert("Name is not given.");
                document.forms[0].txtLName.focus();
                return false;
            }
            if (!lname1.match(Alphabet)) {
                alert("Please enter the correct last name!");
                document.forms[0].txtLName.value = "";
                document.forms[0].txtLName.focus();
                return false;
            }
            if (document.forms[0].txtMobile.value == "" && document.forms[0].txtMobile.value == "") {
                alert("Please enter mobile number.");
                document.forms[0].txtMobile.focus();
                return false;
            }

            if (isNaN(y) || y.indexOf(" ") != -1) {
                alert("Enter numeric value")
                document.forms[0].txtMobile.value = "";
                return false;
            }
            if (y.length < 10 || y.length > 10) {
                alert("Enter the 10 digit only");
                document.forms[0].txtMobile.value = "";
                return false;
            }

            if (document.forms[0].txtEmail.value == "") {
                alert("!Please enter your emailid");
                document.forms[0].txtEmail.focus();
                return false;
            }
            if (document.forms[0].txtEmail.value != "" && !isEmailValid(document.forms[0].txtEmail.value)) {
                alert("Incorrect email id!!");
                document.forms[0].txtEmail.focus();
                return false;
            }

            if (document.forms[0].work_experience.value == "") {
                alert("!Please select work experience");
                document.forms[0].work_experience.focus();
                return false;
            }

            if (document.forms[0].ddQuali.value == "") {
                alert("!Please select Qualification");
                document.forms[0].ddQuali.focus();
                return false;
            }



            return true;
        }
    </script>

    <script>
        function SendToExtraedge(clicked_name) { // not used


            //alert('In send');
            var finame = $("#txtFName").val();
            var lname = $("#txtLName").val();
            let fname = finame.concat(" ", lname);
            var mobile = $("#txtMobile").val();
            var email = $("#txtEmail").val();
            var city = $("#txtCity").val();
            var qualification = $("#ddQuali").val();
            var work_experience = $("#work_experience").val();
            var Leadsource = "testLeadsource";
            var Leadtype = "testLeadtype";
            var Leadname = "testLeadname";
            //alert(Qualification);
            var btnPressed = "";
            var refUrl = window.location.href; //document.referrer;;
            //alert(refUrl);
            //validation code begins

            var error = false;
            var Alphabet; //Alphabet = "^[a-zA-Z]+$";			
            Alphabet = /^[A-Za-z\s\b]+$/;

            var mbNumber = /^[6-9]{1}[0-9]{9}/;

            $('#fname_er').text("");

            $('#lname_er').text("");
            $('#mobile_er').text("");
            $('#email_er').text("");
            $('#city_er').text("");

            if (finame == "") {
                error = true;
                $('#fname_er').text('Please enter valid first name.')
            } else if (!finame.match(Alphabet)) {
                error = true;
                $('#fname_er').text('Please enter valid first name.')
            }


            if (lname == "") {
                error = true;
                $('#lname_er').text('Please enter valid last name.')
            } else if (!lname.match(Alphabet)) {
                error = true;
                $('#lname_er').text('Please enter valid last name.')
            }



            if (mobile == "") {
                error = true;
                $('#mobile_er').text('Please enter valid mobile number starting with 6-9.')
            } else if (!mobile.match(mbNumber)) {
                error = true;
                $('#mobile_er').text('Please enter valid mobile number starting with 6-9.')
            } else if (mobile.length < 10 || mobile.length > 10) {
                error = true;
                $('#mobile_er').text('Please enter valid mobile number starting with 6-9.')
            }

            if (email == "") {
                error = true;
                $('#email_er').text('Please enter valid email id.')
            } else if (!isEmailValid(email)) {
                error = true;
                $('#email_er').text('Please enter valid email id.')
            }

            if (work_experience == "") {
                error = true;
                $('#work_experience_er').text('Select work experience.')
            }

            if (city == "") {
                error = true;
                $('#city_er').text('Please enter valid city name.')
            } else if (!city.match(Alphabet)) {
                error = true;
                $('#city_er').text('Please enter valid city name.')
            }

            if (qualification == "") {
                error = true;
                $('#Qualification_er').text('Select qualification.')
            }
            //validation code ends 

            if (clicked_name == "Apply") {
                btnPressed = "Apply";
                //alert(btnPressed);

            } else if (clicked_name == "Register") {
                btnPressed = "Register";

            }


            //alert(fname);
            //alert('Before call');
            if (error === false) {
                $.ajax({
                    type: 'POST',
                    url: "../classes/extraedgeNew.php",
                    //contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    data: {
                        'fname': fname,
                        'mobile': mobile,
                        'email': email,
                        'Educationalqualification': qualification,
                        'btnPressed': btnPressed,
                        'city': city,
                        'currentUrl': refUrl,
                        'course': 'MET Institute of Post Graduate Diploma in Management',
                        'center': 'PGDM',
                        'state': 'Maharashtra',
                        best_time_to_call: '10',
                        'Leadsource': Leadsource,
                        'Leadtype': Leadtype,
                        'Leadname': Leadname
                    },
                    beforeSend: function() {},
                    success: function(res) {
                        //alert("success");  
                        //alert("In success1");
                        if (res.error === 1) {
                            //window.location =res.url;

                            //window.location ='PGDM_Visit11_test.php';
                            //alert("In error");
                        } else {
                            //alert(res.msg);
                            window.location = 'PGDM_Visit.php';
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        //alert(xhr.status);


                        window.location = 'PGDM_Visit.php';
                        // window.location ='AS_and_A_level_Visit10.php';

                        //window.location ='PGDM_Visit11_test.php';
                        //alert( ajaxOptions );
                        //alert(thrownError);
                    }
                });

            }


        }
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
    </script>
    <noscript><img height="" 1"" width="" 1"" style="" display:none"" src=""
            https://www.facebook.com/tr?id=450155366593151&ev=PageView&noscript=1"" /></noscript>
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

    <!--end google tag-->

    <?php
    session_start();
    if (isset($_SERVER['HTTP_REFERER'])) {
        $_SESSION['RefUrl'] = $_SERVER['HTTP_REFERER'];
        //print_r($_SESSION['RefUrl']);
        //exit();
    }

    ?>

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

        <nav
            class="navbar bg-white drop-shadow-lg navbar-expand-lg  py-2  relative flex items-center w-full justify-between">
            <div class="px-6 w-full flex flex-wrap items-center justify-between ">
                <div class="flex mx-auto">
                    <a class="navbar-brand  w-[8rem] mb-[-3rem]" href="#!">
                        <img src="https://www.met.edu/frontendassets/images/MET_College_in_Mumbai_logo.png" class=""
                            alt="">
                    </a>
                </div>
            </div>
        </nav>

        <div class="container px-6 py-16 mx-auto text-center h-[35rem]">
            <div class="max-w-lg mx-auto">
                <h1 class="text-2xl md:text-3xl xl:text-5xl text-red-500 font-bold tracking-tight ">
                    PGDM
                </h1>
                <p class="mt-6 mb-6 text-white text-[14.6px]">
                    Marketing, Finance, HR, System and Operations. New Age Add on specialisation in
                    FinTech, MarTech, Media &amp; Entertainment, Business Analytics,
                    Start-ups &amp; New Enterprise Management.
                </p>
                <a class=" inline-block px-7 py-3 mt-2 bg-red-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-500 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light" role="button" href="#apply-now">
                    Apply Now
                </a> &nbsp;
                <a class=" inline-block px-7 py-3 mt-[0.8rem] bg-transparent border border-white text-white font-medium text-sm leading-snug uppercase rounded focus:outline-none focus:ring-0 transition duration-150 ease-in-out "
                    data-mdb-ripple="true" data-mdb-ripple-color="light" role="button" href="#apply-now">
                    Download e-Brochure
                </a>
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
    <section class="px-6 py-12 md:px-12 text-center lg:text-left">
        <div class="container mt-[2rem] mx-auto xl:px-32 grid lg:grid-cols-2 gap-12 flex">
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
            <div class=" lg:mt-[2rem]" id="apply-now">
                <div class="w-full px-8 py-10 mx-auto overflow-hidden bg-red-600 shadow-2xl rounded-xl  lg:max-w-xl">
                    <h1 class="text-2xl font-medium text-white text-center">Download
                        Free e-Brochure</h1>

                    <p class="mt-4 text-white text-center">
                        Ask us everything and we would love
                        to hear from you
                    </p>

                    <!-- <form class="mt-3" action="PGDM_Visit.php" method="post" name="form">
                        <div class=" grid lg:grid-cols-2 lg:gap-5 md:gap-5  flex">
                            <div class="flex-1 ">
                                <input type="text" placeholder="First Name" id="txtFName" name="txtFName" pattern="[a-zA-Z]{1,}" required class="block w-full px-3 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" />
                            </div>
                            <div class="flex-1 ">
                                <input type="text" placeholder="Last Name" id="txtLName" name="txtLName" pattern="[a-zA-Z]{1,}" required class="block w-full px-3 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" />
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-2 lg:gap-5 md:gap-5 flex mb-2">
                            <div class="flex-1 ">
                                <input type="email" placeholder="Email address" id="txtEmail" name="txtEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required class=" block w-full px-3 py-2 mt-2 sm:mt-[2rem]  text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" />
                            </div>

                            <div class="flex-1 ">
                                <input type="text" placeholder="Mobile no." id="txtMobile" name="txtMobile" pattern="[6-9]{1}[0-9]{9}" required class="block w-full px-3 py-2 mt-2 lg:mt-[2rem] text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" />
                            </div>
                        </div>
                        <div class="grid lg:grid-cols gap-5  flex">
                            <div class="flex-1 ">
                                <input type="text" placeholder="City" id="txtCity" name="txtCity" pattern="[a-zA-Z ]{1,}" required class="block w-full px-3 py-2 mt-0.5 lg:mt-[1.5rem] text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" />
                            </div>
                        </div>
                        <div class="grid lg:grid-cols gap-5  flex">
                            <div class="flex-1  ">
                                <select type="text" name="ddQuali" id="ddQuali" required class="block w-full px-3 py-2 mt-2 lg:mt-[2rem] text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    <option hidden> Qualification </option>
                                    <option>Graduate</option>
                                    <option>Post-Graduate</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid lg:grid-cols gap-5  flex">
                            <p class="text-gray-300 px-3 text-center text-sm mt-4">
                                *MET can contact me through SMS, WhatsApp, Email and Call
                            </p>
                        </div>
                        <button type="submit" id="btnSubmitLpPGDMApply" onclick="javascript:SendToExtraedge(this.name);" value="Apply" name="Apply" class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-black rounded-md hover:bg-gray-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                            Apply Now
                        </button>
                    </form> -->

                    <div class="form-body">
                        <div class="mt-3" id="ee-form-11">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 2 -->


    <div class="relative">
        <a href="#apply-now">
            <button
                class="fixed z-20 w-30 mt-[18rem] rotate-[-90deg] mr-[-2rem] uppercase  top-0 right-0 item-right px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-600 rounded-md hover:bg-gray-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                <span class=""> Apply Now</span>
            </button>
        </a>
    </div>


    <?php
    include('content/PGDM_content.php');
    ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="js/jquery-3.5.1.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script> -->

    <!-- Swiper JS -->
    <script src='https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js'></script>
    <script>
        $('.question-and-answer').click(function() {
            $(this).find(".answer").toggleClass("hidden")
            $(this).find(".question-chevron").toggleClass("hidden")
        })
    </script>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
    <script
        src="https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/met/ee-form-widget/form-11/widget.js">
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- include libraries(jQuery, bootstrap) 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
-->


    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/Normalize.css">
    <link rel="stylesheet" href="../css/CustomBootstrap.css">
    <link rel="stylesheet" href="../css/MainStyle.css">

    <title>عيادات الموج | خدمات المختبر
    </title>


</head>

<body id="body">
    <header>
        <nav id="header">
            <a href="../index.html">
                <img id="logo" src="https://static1.s123-cdn-static-a.com/uploads/4858436/400_60319e2e9da0e.png"
                    alt=" عيادات الموج ">
            </a>
            <div id="mainMenu">
                <ul id="MenuList">
                    <li>
                        <a class="link" href="../index.html">الرئيسية</a>
                    </li>

                    <li>
                        <a class="link" href="../aboutUs.html">حول موج </a>
                    </li>

                    <li>
                        <div id="more">
                            <input type="checkbox" id="moreShowServeses" hidden="">
                            <div id="moreSelectServeses">
                                <label for="moreShowServeses" id="moreLable">
                                    خدماتنا
                                </label>
                                <div id="moreMenuServeses">
                                    <ul class="moreMenuList">
                                        <li><a href="non-surgical.html">تجميل لا جراحي</a></li>
                                        <li><a href="Dermatology.html">الجلدية</a></li>
                                        <li><a href="skinLaser.html">ليزر علاج البشرة</a></li>
                                        <li><a href="laserHair.html">ليزرعلاج الشعر</a></li>
                                        <li><a href="regularCare.html">العناية الدورية</a></li>
                                        <li><a href="dentist.html">طب الاسنان</a></li>
                                        <li><a href="lab.html">المختبر الطبي</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li>
                        <a class="link" href="../offers.html">العروض </a>
                    </li>

                    <li>

                        <a class="link" href="../beautyDeals.html">صفقات الجمال</a>
                    </li>

                    <li>

                        <div id="more">
                            <input type="checkbox" id="moreShow" hidden="">
                            <div id="moreSelect">
                                <label for="moreShow" id="moreLable">
                                    المزيد
                                </label>
                                <div id="moreMenu">
                                    <ul class="moreMenuList" id="moreList">
                                        <li>
                                            <a class="link" href="../loyaltyCard.html">بطاقات الولاء</a>
                                        </li>
                                        <li>
                                            <a href="../beautyPassport.html">جواز سفر الجمال</a>
                                        </li>
                                        <li>
                                            <a href="../BookDate.html">حجز موعد</a>
                                        </li>
                                        <li>
                                            <a href="../pharmacy.html">الصيدلية</a>
                                        </li>
                                        <li>
                                            <a href="../Asag.html">مركز آساج الرياضي</a>
                                        </li>
                                        <li>
                                            <a href="../blog.html">المدونة</a>
                                        </li>
                                        <li>
                                            <a href="../Contact.html">الاتصال</a>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li>
                        <label for="showLanguagePage">
                            <img class="mainMenuIcons" src="../img/AR.png" alt="AR"></label>
                    </li>
                    <li>
                        <label for="showSharePage">
                            <i class="fas fa-share-alt mainMenuIcons"></i>
                        </label>

                    </li>
                    <li>
                        <label for="showSendEmailPage">
                            <i class="fas fa-envelope mainMenuIcons"></i>
                        </label>
                    </li>
                    <li>
                        <label for="showCallUsAlirtPage">
                            <i class="fas fa-phone-alt mainMenuIcons"></i>
                        </label>
                    </li>
                    <li>
                        <div class="mainMenuIcons" id="User"></div>
                    </li>


                </ul>
            </div>

            <!--  </!-div>-->
            <div id="soialMediaHeaderMobile">
                <label for="showSendEmailPage">
                    <i class="fas fa-envelope mainMenuIcons"></i>
                </label>
                <label for="showCallUsAlirtPage">
                    <i class="fas fa-phone-alt mainMenuIcons"></i>
                </label>
            </div>
        </nav>
        <input type="checkbox" name="mobileWrap" id="mobileWrap" hidden="">
        <label id="menu" for="mobileWrap">
            <div class="menuIcon" id="menuIcon1"></div>
            <div class="menuIcon" id="menuIcon2"></div>
            <div class="menuIcon" id="menuIcon3"></div>
        </label>

        <aside>
            <div id="balckBackgroundMobile"></div>
            <div id="innerAside">
                <ul id="MainMobileBar">
                    <li class="MobileBarItem">
                        <a href="../index.html">الرئيسية</a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../aboutUs.html">حول الموج</a>
                    </li>
                    <li class="MobileBarItem" id="MobileBarServeces">
                        <a href="#">

                            <label for="showMobileSeveces">
                                خدماتنا
                            </label>

                        </a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../offers.html">العروض</a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../beautyDeals.html">صفقات الجمال</a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../loyaltyCard.html">بطاقات الولاء</a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../beautyPassport.html">جواز سفر الجمال</a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../BookDate.html">حجز موعد</a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../pharmacy.html">الصيدلية</a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../Asag.html">مركز آساج الرياضي</a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../blog.html">المدونة</a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../Contact.html">الاتصال</a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../offers.html">جديد عروضنا</a>
                    </li>
                    <li class="MobileBarItem">
                        <a href="../offers.html">جديد العروض</a>
                    </li>
                </ul>

                <input type="checkbox" name="showMobileSeveces" id="showMobileSeveces"
                    onchange="showMobileBarServeces(this)" hidden>
                <ul id="showMobileBarServeces">
                    <li class="MobileBarItem" id="MobileBarServeces">
                        <a href="#">
                            <label for="showMobileSeveces">خدماتنا</label>
                        </a>
                    </li>
                    <li><a href="non-surgical.html">تجميل لا جراحي</a></li>
                    <li><a href="Dermatology.html">الجلدية</a></li>
                    <li><a href="skinLaser.html">ليزر علاج البشرة</a></li>
                    <li><a href="laserHair.html">ليزرعلاج الشعر</a></li>
                    <li><a href="regularCare.html">العناية الدورية</a></li>
                    <li><a href="dentist.html">طب الاسنان</a></li>
                    <li><a href="lab.html">المختبر الطبي</a></li>
                </ul>
                <div id="soialMediaMobile">

                    <label for="showLanguagePage">
                        <img class="mainMenuIcons" src="../img/AR.png" alt="AR"></label>
                    <label for="showSharePage">
                        <i class="fas fa-share-alt mainMenuIcons"></i>
                    </label>

                    <label for="showSendEmailPage">
                        <i class="fas fa-envelope mainMenuIcons"></i>
                    </label>
                    <label for="showCallUsAlirtPage">
                        <i class="fas fa-phone-alt mainMenuIcons"></i>
                    </label>
                    <div class="mainMenuIcons" id="User"></div>


                </div>
            </div>
        </aside>



    </header>


    <div id="contant">
        <section>
            <div class="PageTitle">
                <h1 id="AboutUsTitle"> طب الاسنان
                </h1>
            </div>
            <div class="wrap">

                <div id="AbouText">
                    <p>
                        عيادات الموج توفر العناية بصحة الفم التي - تستحقها انت وعائلتك بتوفير افضل وأحدث التقنيات
                        المستخدمة حول العالم من قبل
                        خبرائنا المميزين في قسم طب الاسنان، نحن نهتم بصنع تغيير ايجابي في الاسنان وتعزيز جمال ابتسامتك
                    </p>

                </div>
                <img src="https://static1.s123-cdn-static-a.com/uploads/4858436/800_60682ab9ecb8e.png" alt="Abou us"
                    id="AboutUsImg">
            </div>

        </section>

        <section>
            <div id="face-art">
                <div class="PageTitle">
                    <h1 id="AboutUsTitle">
                        طب الاسنان العلاجي
                    </h1>
                </div>


                <div id="accordion">

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    حشوات
                                    <i class="fas fa-chevron-down"></i>

                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTow"
                                    aria-expanded="false" aria-controls="collapseTow">
                                    التركيبات العلاجية


                                    <i class="fas fa-chevron-down"></i>
                                </button>

                            </h5>
                        </div>
                        <div id="collapseTow" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    سحب العصب

                                    <i class="fas fa-chevron-down"></i>
                                </button>

                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    علاج مشاكل اللثة

                                    <i class="fas fa-chevron-down"></i>
                                </button>

                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">
                                    علاج خراج الفم
                                    <i class="fas fa-chevron-down"></i>

                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    خلع


                                    <i class="fas fa-chevron-down"></i>
                                </button>

                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    جراحة – زراعة
                                    <i class="fas fa-chevron-down"></i>

                                </button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div id="face-art">
                <div class="PageTitle">
                    <h1 id="AboutUsTitle">
                        تجميل الابتسامة
                    </h1>
                </div>


                <div id="accordion">

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    جهاز تجميل اللثة

                                    <i class="fas fa-chevron-down"></i>
                                </button>

                            </h5>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTin"
                                    aria-expanded="false" aria-controls="collapseTin">
                                    العدسات التجميلية

                                    <i class="fas fa-chevron-down"></i>
                                </button>

                            </h5>
                        </div>
                        <div id="collapseTin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse11"
                                    aria-expanded="false" aria-controls="collapse11">
                                    تنظيف اسنان

                                    <i class="fas fa-chevron-down"></i>
                                </button>

                            </h5>
                        </div>
                        <div id="collapse11" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse12"
                                    aria-expanded="false" aria-controls="collapse12">
                                    تقويم الأسنان
                                    <i class="fas fa-chevron-down"></i>

                                </button>
                            </h5>
                        </div>
                        <div id="collapse12" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse13"
                                    aria-expanded="false" aria-controls="collapse13">
                                    تبيض الاسنان( البلازما –المنزلي)

                                    <i class="fas fa-chevron-down"></i>
                                </button>

                            </h5>
                        </div>
                        <div id="collapse13" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div id="face-art">
                <div class="PageTitle">
                    <h1 id="AboutUsTitle">
                        طب اسنان الاطفال العلاجي
                    </h1>
                </div>


                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse14"
                                    aria-expanded="false" aria-controls="collapse14">
                                    الفلورايد

                                    <i class="fas fa-chevron-down"></i>
                                </button>

                            </h5>
                        </div>
                        <div id="collapse14" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse15"
                                    aria-expanded="false" aria-controls="collapse15">
                                    الفيشر سيلنت
                                    <i class="fas fa-chevron-down"></i>
                                </button>

                            </h5>
                        </div>
                        <div id="collapse15" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                            style="">
                            <div class="card-body">
                                الفيلير علاج دقيق ولكن متعدد الاستخدامات يمكن ان يجلب الحجم و النعومة المرجوه الى وجهك
                                عن طريق حقن مادة هلامية للحصول
                                على شفاه ممتلئة , تجاعيد وتجاويف أقل ويمكن يستخدم لتحديد رسمة الوجة .
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
    <footer>

        <div id="innerFotter">
            <div id="footerInfo">
                مجموعة عيادات الموج
                <br>
                حقوق النشر © 2021 جميع الحقوق محفوظة
            </div>
            <div id="leftFotter">
                <div id="FotterMenu">
                    <ul id="MenuListFotter">
                        <li>
                            <a class="link" href="../index.html">الرئيسية</a>
                        </li>

                        <li>
                            <a class="link" href="../aboutUs.html">حول موج </a>
                        </li>

                        <li>
                            <div id="moreFotter">
                                <input type="checkbox" id="moreShowServesesFotter" hidden="">
                                <div id="moreSelectServesesFotter">
                                    <label for="moreShowServesesFotter" id="moreLableFotter">
                                        خدماتنا
                                    </label>
                                    <div id="moreMenuServesesFotter">
                                        <ul class="moreMenuList">
                                            <li><a href="non-surgical.html">تجميل لا جراحي</a></li>
                                            <li><a href="Dermatology.html">الجلدية</a></li>
                                            <li><a href="skinLaser.html">ليزر علاج البشرة</a></li>
                                            <li><a href="laserHair.html">ليزرعلاج الشعر</a></li>
                                            <li><a href="regularCare.html">العناية الدورية</a></li>
                                            <li><a href="dentist.html">طب الاسنان</a></li>
                                            <li><a href="lab.html">المختبر الطبي</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <li>
                            <a class="link" href="../offers.html">العروض </a>
                        </li>

                        <li>
                            <a class="link" href="../beautyDeals.html">صفقات الجمال</a>
                        </li>

                        <li>
                            <a class="link" href="../loyaltyCard.html">بطاقات الولاء</a>
                        </li>

                        <li>
                            <div id="moreFotter">
                                <input type="checkbox" id="moreShowFotter" hidden="">
                                <div id="moreSelectFotter">
                                    <label for="moreShowFotter" id="moreLableFotter">
                                        المزيد
                                    </label>
                                    <div id="moreMenuFotter">
                                        <ul class="moreMenuList">
                                            <li>
                                                <a href="../beautyPassport.html">جواز سفر الجمال</a>
                                            </li>
                                            <li>
                                                <a href="../BookDate.html">حجز موعد</a>
                                            </li>
                                            <li>
                                                <a href="../pharmacy.html">الصيدلية</a>
                                            </li>
                                            <li>
                                                <a href="../Asag.html">مركز آساج الرياضي</a>
                                            </li>
                                            <li>
                                                <a href="../blog.html">المدونة</a>
                                            </li>
                                            <li>
                                                <a href="../Contact.html">الاتصال</a>
                                            </li>


                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="subscribeFotter">
                    <form method="post">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="subscribeEmail" id="subscribeEmail">
                        <input type="submit" name="subscribeBtn" id="subscribeBtn" value="إشتراك">
                    </form>
                </div>
                <div id="share">

                    <a href="https://twitter.com/AlmawjClinics" target="_blank">
                        <img src="../img/twitter.png" alt="twitter">
                    </a>

                    <a href="https://www.snapchat.com/add/almawjclinics" target="_blank">
                        <img src="../img/snapchat.png" alt="snapchat">
                    </a>
                    <a href="https://instagram.com/almawjclinics?igshid=1ww9gbgi8ssq6" target="_blank">
                        <img src="../img/instagram.png" alt="instagram">
                    </a>
                </div>
            </div>

        </div>



    </footer>

    <div id="floating">
        <div id="floatingFirst" onlclick="HidFloating(this)" onclick="showFloating(this)">
            <i class="fas fa-comments"></i>
        </div>
        <label for="showSendEmailPage" id="floatingSecond" tabindex="1">
            <i class="fas fa-envelope"></i>
        </label>
        <a href="tel:920009125" id="floatingTheerd">
            <i class="fas fa-phone fa-rotate-90"></i>
        </a>
    </div>

    <input type="checkbox" name="showSendEmailPage" id="showSendEmailPage" hidden>
    <div id="sendEmailPage" class="Alert">

        <label for="showSendEmailPage">
            <i class="fas fa-times fa-1x"></i></label>
        <h3>اتصل بنا</h3>
        <h5>
            setd to <a href="mailto:info@almawj.net">info@almawj.net</a>
        </h5>
        <form method="post">
            <input type="text" name="UserFullName" id="UserFullName">
            <input type="email" name="UserEmail" id="UserEmail">
            <textarea name="EmailContant" id="EmailContant" cols="70" rows="5"></textarea>
            <input type="submit" value="send" id="sendEmail">
        </form>

    </div>



    <input type="checkbox" name="showCallUsAlirtPage" id="showCallUsAlirtPage" hidden>
    <div id="callUsAlertPage" class="Alert">

        <label for="showCallUsAlirtPage">
            <i class="fas fa-times fa-1x"></i></label>
        <a href="tel:920009125">920009125
            -
            للحجز والأستفسار</a>
    </div>

    <input type="checkbox" name="showSharePage" id="showSharePage" hidden>
    <div id="SharePage" class="Alert">

        <label for="showSharePage">
            <i class="fas fa-times fa-1x"></i>
        </label>
        <div>

            <a href="https://twitter.com/AlmawjClinics" target="_blank">
                <img src="../img/twitter.png" alt="twitter">
            </a>

            <a href="https://www.snapchat.com/add/almawjclinics" target="_blank">
                <img src="../img/snapchat.png" alt="snapchat">
            </a>
            <a href="https://instagram.com/almawjclinics?igshid=1ww9gbgi8ssq6" target="_blank">
                <img src="../img/instagram.png" alt="instagram">
            </a>
        </div>
    </div>
    </div>




    <input type="checkbox" name="showLanguagePage" id="showLanguagePage" hidden>
    <div id="LanguagePage" class="Alert">

        <label for="showLanguagePage">
            <i class="fas fa-times fa-1x"></i>
        </label>
        <div>
            <a href="#">
                <h2>AR</h2>
            </a>

            <a href="#">
                <h2>EN</h2>
            </a>
        </div>
    </div>


    <script src="../js/jquery.min.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/Actions.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 2000,
            pause: false
        })
    </script>



</body>

</html>
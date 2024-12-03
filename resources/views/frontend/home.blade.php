@extends('layout.frontend.min')
@section('content')

<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from labartisan.net/demo/hafsa/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Jun 2021 13:32:13 GMT -->

<head>
    <title>Hafsa Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

    <link rel="stylesheet" href="{{ asset('home/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/style-ar.css') }}">
</head>

<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->



    <!-- About section start here -->
    <section class="about-section padding-tb shape-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-content">
                                <div class="header-title text-start m-0">
                                    <h5></h5>
                                    <h2 class="mb-0" style="font-size: 46px;
                                    color: #444;">جامعة الامام ابو العزائم</h2>
                                </div>
                                <h5 class="my-4" style="font-size: 30px;color: #e3d26e;">لاحياء علوم الدين والتفسير
                                </h5>
                                <h5 class="my-4" style="font-size: 30px;color: #e3d26e;">والقران الكريم</h5>
                                <p>ولد محمد ماضي أبو العزائم في 27 رجب 1286هـ/2 نوفمبر 1869م بمدينة رشيد، ويرجع نسبه إلى أهل البيت فهو حسني من جهة الأم، حسيني من جهة الأب. اعتنى والده عبد الله المحجوب بتعليمه، فحفظ القرآن الكريم في بلدته محلة أبو علي، ثم دفعه إلى شيخ أزهري يدعى عبد الرحمن عبد الغفار لتعليمه، فدرس على يديه جوانب من الفقه المالكي والحديث والنحو. كما شغف أبو العزائم بقراءة كتاب إحياء علوم الدين في صباه، ولما بلغ السادسة عشرة من عمره، التحق بالأزهر الشريف، ثم التحق بمدرسة دار العلوم وتخرج منها سنة 1305هـ/1888م. كانت أولى مهامه الوظيفية هي العمل كمدرس لمادتي الدين واللغة العربية بمدرسة إدفو الابتدائية سنة 1306هـ/1889م، ثم نُقل إلى مدرسة الإبراهيمية الأولية سنة 1307هـ/1891م، ثم إلى المدرسة الابتدائية بالمنيا في ربيع الأول 1311هـ/أكتوبر 1894م.</p>
                                <a href="#" class="lab-btn mt-4">نبذة عن الجامعة </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <div class="img-grp">

                                    <div class="about-circle-wrapper">
                                        <div class="about-circle-2"></div>
                                        <div class="about-circle"></div>

                                    </div>
                                    <div class="about-fg-img">
                                        <img src="{{ asset('home/assets/images/abo-el-3azayem.png')}}" alt="about-image">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end here -->
    <!-- Program secton start Here -->
    <div class="program-section padding-tb padding-b" style="background-color: #f7f1e9;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="program-item mb-4">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <a href="#">
                                    <img src="{{ asset('home/assets/images/program/Photo1_03.png')}}" alt="program-image">
                                </a>
                                <div class="lab-thumb-content">
                                    <div class="progress-item">
                                        <ul class="progress-item-status lab-ul d-flex justify-content-center mb-2">
                                            <li><a href="#" style="font-size: 25px; color: #444; ">تفسير القران
                                                    الكريم</a></li>
                                            <!-- <li>Gold<span> $34,900</span></li> -->
                                        </ul>
                                        <!-- <div class="progress-bar-wrapper progress" data-percent="50%">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated">
                                            </div>
                                        </div>
                                        <div
                                            class="progress-bar-percent d-flex align-items-center justify-content-center">
                                            50 <sup>%</sup> </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-md-6 col-12">
                    <div class="program-item mb-4">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <a href="#">
                                    <img src="{{ asset('home/assets/images/program/Photo2_03.png')}}" alt="program-image">
                                </a>
                                <div class="lab-thumb-content">
                                    <div class="progress-item">
                                        <ul class="progress-item-status lab-ul d-flex justify-content-center mb-2">
                                            <li><a href="#" style="font-size: 25px; color: #444; "> استمع القران
                                                    الكريم</a></li>
                                            <!-- <li>Gold<span> $34,900</span></li> -->
                                        </ul>
                                        <!-- <div class="progress-bar-wrapper progress" data-percent="90%">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated">
                                            </div>
                                        </div>
                                        <div
                                            class="progress-bar-percent d-flex align-items-center justify-content-center">
                                            90 <sup>%</sup> </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Program secton end Here -->

    <!-- Feature Section Start Here -->
    <section class="feature-section bg-ash padding-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item text-xs-center">
                        <div class="lab-inner">
                            <div class="lab-thumb" style="text-align: center;">
                                <img src="{{ asset('home/assets/images/feature/01.png')}}" alt="feature-image">
                            </div>
                            <div class="lab-content" style="    text-align: right;">
                                <h5>التراث العلمي النظمي للامام </h5>
                                <p>بما أنّ الّنثر هو كلام غير موزون أو مُقفّى، فتعدّدت أنواعه وفنونه، واختلفت باختلاف
                                    الزّمان والمكان والاستخدام

                                    إقرأ المزيد على موضوع.كوم
                                </p>
                                <a href="#" class="text-btn">المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item">
                        <div class="lab-inner">
                            <div class="lab-thumb" style="text-align: center;">
                                <img src="{{ asset('home/assets/images/feature/02.png')}}" alt="feature-image">
                            </div>
                            <div class="lab-content" style="    text-align: right;">
                                <h5>الامام محمد ماضي ابو العزائم</h5>
                                <p>ولد محمد ماضي أبو العزائم في 27 رجب 1286هـ/2 نوفمبر 1869م بمدينة رشيد، ويرجع نسبه إلى
                                    أهل البيت فهو حسني من جهة الأم،
                                </p>
                                <a href="#" class="text-btn">المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item">
                        <div class="lab-inner">
                            <div class="lab-thumb" style="text-align: center;">
                                <img src="{{ asset('home/assets/images/feature/03.png')}}" alt="feature-image">
                            </div>
                            <div class="lab-content" style="    text-align: right;">
                                <h5>التراث العلمي النظمي للامام</h5>
                                <p>نظرية النظم في البلاغة والنقد والإعجاز القرآني، في التراث المعرفي قبل الإمام الجرجاني
                                    فتحي بودفلة
                                </p>
                                <a href="#" class="text-btn">المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item">
                        <div class="lab-inner">
                            <div class="lab-thumb" style="text-align: center;">
                                <img src="{{ asset('home/assets/images/feature/04.png')}}" alt="feature-image">
                            </div>
                            <div class="lab-content" style="    text-align: right;
                            ">
                                <h5> مدارج السالكين</h5>
                                <p>مدارج السالكين بين منازل إياك نعبد وإياك نستعين ألفه ابن قيم الجوزية (691 هـ 751 هـ -
                                    1292 1349)
                                </p>
                                <a href="#" class="text-btn">المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End Here -->


    <!-- Program section start Here -->
    <section class="program-section padding-tb bg-img"
        style="background: url(assets/images/program/bg.jpg) rgba(5, 21, 57, 0.7); background-blend-mode: overlay;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>جامعة الامام ابو العزائم</h5>
                        <h2 class="mb-4">جامعة هي كلمة مشتقة عربياً من كلمة الاجتماع أي الاجتماع حول هدف ألا وهو هدف
                            التعليم والمعرفة</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="progress-item-wrapper text-center">
                        <div class="progress-item mb-4">
                            <!-- <div class="progress-bar-wrapper progress" data-percent="50%">
                                <div class="progress-bar progress-bar-striped progress-bar-animated"></div>
                            </div>
                            <div class="progress-bar-percent d-flex align-items-center justify-content-center">50
                                <sup>%</sup> </div> -->

                            <!-- <ul class="progress-item-status lab-ul d-flex justify-content-between">
                                <li>Raised<span> $24,000</span></li>
                                <li>Gold<span> $34,900</span></li>
                            </ul> -->
                        </div>
                        <a href="#" class="lab-btn">نبذة عن الجامعة </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- upcoming program -->
    <div class="upcoming-programs">
        <div class="container">
            <div class="row">
               
                <div class="col-xl-8">
                    <div class="programs-item-part">
                        <div class="program-desc d-flex justify-content-center">

                            <ul class="lab-ul">
                                <li><a href="#" class="program-next"><i class="icofont-arrow-left"></i></a></li>
                                <li><a href="#" class="program-prev"><i class="icofont-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="program-item-container">
                            <div class="program-item-wrapper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="program-item">
                                            <div class="lab-inner">
                                                <div class="lab-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('home/assets/images/event/06.jpg')}}" alt="program-image">
                                                    </a>
                                                    <div class="lab-thumb-content">
                                                        <div class="progress-item">
                                                            <ul
                                                                class="progress-item-status lab-ul d-flex justify-content-between mb-2">
                                                               
                                                                <li style="font-size:23px; text-align:right;"">تلميذ الامام محمد ماضي ابو العزائم<span> الامام الشاه</span></li>
                                                            </ul>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" lab-content" style="text-align: right;">
                                                                    <span>الامام الشاه </span>
                                                                    <h5><a href="#">ولدت بجزيرة البرلس من أعمال مديرية الغربية . وهذه الجزيرة تقع على شاطئ البحر الأبيض المتوسط </a> </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="program-item">
                                                    <div class="lab-inner">
                                                        <div class="lab-thumb">
                                                            <a href="#">
                                                                <img src="{{ asset('home/assets/images/event/06.jpg')}}"
                                                                    alt="program-image">
                                                            </a>
                                                            <div class="lab-thumb-content">
                                                                <div class="progress-item">
                                                                    <ul
                                                                        class="progress-item-status lab-ul d-flex justify-content-xl-around mb-2">

                                                                        <li style="font-size:23px; text-align:right;">
                                                                            تلميذ الامام محمد ماضي ابو العزائم<span>
                                                                                الامام العقاد</span></li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=" lab-content" style="text-align: right;">
                                                            <span> الامام العقاد </span>
                                                            <h5><a href="#">
                                                                ولدت بجزيرة البرلس من أعمال مديرية الغربية . وهذه الجزيرة تقع على شاطئ البحر الأبيض المتوسط </a> </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="program-item">
                                                    <div class="lab-inner">
                                                        <div class="lab-thumb">
                                                            <a href="#">
                                                                <img src="{{ asset('home/assets/images/event/06.jpg')}}"
                                                                    alt="program-image">
                                                            </a>
                                                            <div class="lab-thumb-content">
                                                                <div class="progress-item">
                                                                    <ul
                                                                        class="progress-item-status lab-ul d-flex justify-content-between mb-2">

                                                                        <li style="font-size:23px; text-align:right;">
                                                                            تلميذ الامام محمد ماضي ابو العزائم
                                                                            <span> الامام القاضي</span>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="lab-content" style="text-align: right;">
                                                            <span>الامام القاضي</span>
                                                            <h5><a href="#"></a> ولدت بجزيرة البرلس من أعمال مديرية الغربية . وهذه الجزيرة تقع على شاطئ البحر الأبيض المتوسط </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Program section end Here -->

            <!-- Faith section start here -->
            <section class="faith-section padding-tb shape-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-title">
                                <h5>نفحات من الامام</h5>
                                <h2>أدعية الغفران في شهر القرآن للإمام المجدد السيد محمد ماضي أبو العزائم</h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="faith-content">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="shahadah" role="tabpanel"
                                        aria-labelledby="sahadah-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <img src="{{ asset('home/assets/images/faith/01.png')}}" alt="faith-image">
                                                </div>
                                                <div class="lab-content" style="text-align: right;">
                                                    <h4>المواجيد <span>(المواجيد)</span> </h4>
                                                    <p>الشهادة عقيدة إسلامية وأحد أركان الإسلام الخمسة وجزء من الأذان. ونصها: أشهد أن لا إله إلا الله وأشهد أن محمدا رسول الله.الشهادة عقيدة إسلامية وأحد أركان الإسلام الخمسة وجزء من الأذان. ونصها: أشهد أن لا إله إلا الله وأشهد أن محمدا رسول الله.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="prayer" role="tabpanel" aria-labelledby="salah-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <img src="{{ asset('home/assets/images/faith/02.png')}}" alt="faith-image">
                                                </div>
                                                <div class="lab-content" style="text-align: right;">
                                                    <h4>المواجيد <span>(المواجيد)</span> </h4>
                                                    <p>الشهادة عقيدة إسلامية وأحد أركان الإسلام الخمسة وجزء من الأذان. ونصها: أشهد أن لا إله إلا الله وأشهد أن محمدا رسول الله.الشهادة عقيدة إسلامية وأحد أركان الإسلام الخمسة وجزء من الأذان. ونصها: أشهد أن لا إله إلا الله وأشهد أن محمدا رسول الله.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ramadan" role="tabpanel" aria-labelledby="sawm-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <img src="{{ asset('home/assets/images/faith/03.png')}}" alt="faith-image">
                                                </div>
                                                <div class="lab-content" style="text-align: right;">
                                                    <h4>المواجيد <span>(المواجيد)</span> </h4>
                                                    <p>الشهادة عقيدة إسلامية وأحد أركان الإسلام الخمسة وجزء من الأذان. ونصها: أشهد أن لا إله إلا الله وأشهد أن محمدا رسول الله.الشهادة عقيدة إسلامية وأحد أركان الإسلام الخمسة وجزء من الأذان. ونصها: أشهد أن لا إله إلا الله وأشهد أن محمدا رسول الله.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="jakat" role="tabpanel" aria-labelledby="zakat-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <img src="{{ asset('home/assets/images/faith/04.png')}}" alt="faith-image">
                                                </div>
                                                <div class="lab-content" style="text-align: right;">
                                                    <h4>المواجيد <span>(المواجيد)</span> </h4>
                                                    <p>الشهادة عقيدة إسلامية وأحد أركان الإسلام الخمسة وجزء من الأذان. ونصها: أشهد أن لا إله إلا الله وأشهد أن محمدا رسول الله.الشهادة عقيدة إسلامية وأحد أركان الإسلام الخمسة وجزء من الأذان. ونصها: أشهد أن لا إله إلا الله وأشهد أن محمدا رسول الله.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hajj" role="tabpanel" aria-labelledby="hajj-tab">
                                        <div class="lab-item faith-item tri-shape-1 pattern-2">
                                            <div class="lab-inner d-flex align-items-center">
                                                <div class="lab-thumb">
                                                    <img src="{{ asset('home/assets/images/faith/05.png')}}" alt="faith-image">
                                                </div>
                                                <div class="lab-content" style="text-align: right;">
                                                    <h4>المواجيد <span>(المواجيد)</span> </h4>
                                                    <p>الشهادة عقيدة إسلامية وأحد أركان الإسلام الخمسة وجزء من الأذان. ونصها: أشهد أن لا إله إلا الله وأشهد أن محمدا رسول الله.الشهادة عقيدة إسلامية وأحد أركان الإسلام الخمسة وجزء من الأذان. ونصها: أشهد أن لا إله إلا الله وأشهد أن محمدا رسول الله.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-pills mb-3 align-items-center justify-content-center" style="flex-direction: row-reverse !important; " id="pills-tab"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="sahadah-tab" data-bs-toggle="pill"
                                            href="#shahadah" role="tab" aria-controls="sahadah-tab"
                                            aria-selected="true">
                                            <img src="{{ asset('home/assets/images/faith/faith-icons/01.png')}}" alt="faith-icon">
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="salah-tab" data-bs-toggle="pill" href="#prayer"
                                            role="tab" aria-controls="salah-tab" aria-selected="false">
                                            <img src="{{ asset('home/assets/images/faith/faith-icons/02.png')}}" alt="faith-icon">
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="sawm-tab" data-bs-toggle="pill" href="#ramadan"
                                            role="tab" aria-controls="sawm-tab" aria-selected="false">
                                            <img src="{{ asset('home/assets/images/faith/faith-icons/03.pn')}}g" alt="faith-icon">
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="zakat-tab" data-bs-toggle="pill" href="#jakat"
                                            role="tab" aria-controls="zakat-tab" aria-selected="false">
                                            <img src="{{ asset('home/assets/images/faith/faith-icons/04.png')}}" alt="faith-icon">
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="hajj-tab" data-bs-toggle="pill" href="#hajj" role="tab"
                                            aria-controls="hajj-tab" aria-selected="false">
                                            <img src="{{ asset('home/assets/images/faith/faith-icons/05.png')}}" alt="faith-icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Faith section end here -->

            <!-- Qoute Section start Here -->
            <div class="qoute-section padding-tb">
                <div class="qoute-section-wrapper">
                    <div class="qoute-overlay"></div>
                    <div class="container">
                        <div class="qoute-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="lab-item qoute-item">
                                        <div class="lab-inner d-flex align-items-center">
                                            <div class="lab-thumb">
                                                <span>علوم الشريعة</span>
                                                <i class="icofont-quote-left"></i>
                                            </div>
                                            <div class="lab-content" style="text-align: right;">
                                                <blockquote class="blockquote">
                                                    <p> <span>مقدمة في علوم الشريعة
                                                        </span> إلـهي إلـهي، تجل لي بجمال يجذبني لحضرتك العلية، ونور تبين لي به سبلك للوصول إليك يارب العالمين، وفضل عظيم يجعلني دائم الإقبال على حضرتك العلية، غنيا بك سبحانك عن شرار خلقك، عزيزا</p>
                                                    <footer class="blockquote-footer bg-transparent">
                                                        الامام محمد ماضي ابو عزائم
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Qoute Section end Here -->

           

           




            <script src="{{ asset('home/assets/js/jquery.js') }}"></script>
            <script src="{{ asset('home/assets/js/fontawesome.min.js') }}"></script>
            <script src="{{ asset('home/assets/js/waypoints.min.js') }}"></script>
            <script src="{{ asset('home/assets/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('home/assets/js/swiper.min.js') }}"></script>
            <script src="{{ asset('home/assets/js/circularProgressBar.min.js') }}"></script>
            <script src="{{ asset('home/assets/js/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('home/assets/js/lightcase.js') }}"></script>
            <script src="{{ asset('home/assets/js/functions.js') }}"></script>
</body>


<!-- Mirrored from labartisan.net/demo/hafsa/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Jun 2021 13:32:56 GMT -->

</html>






































@endsection
@extends('layout.frontend.min')
@section('content')


<section class="service-single-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title wow animate__backInUp" data-wow-duration="2s">
                    <h2>علوم الطريقة</h2>
                </div>
            </div>
        </div>
        <div class="row reverse-col">
            <div class="col col-md-4  wow animate__backInLeft" data-wow-duration="2s">
                <div class="service-sidebar">
                    <div class="widget service-list-widget">
                        <div class="wpo-blog-sidebar" style="    margin-bottom: 33px;">

                            <div class="widget search-widget">
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder=" بحث">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <h3>الاقسام الفرعية </h3>
                        <ul style="overflow-y: scroll;">
                            <li class="current"><a href="Method-ar-Road.html"> الطريق </a></li>
                            <li><a href="Method-ar-Folks.html">اهل الطريق</a></li>
                            <li><a href="Method-ar-Men.html">رجال الطريق</a></li>
                            <li><a href="Method-ar-brothers.html"> الاخوة في الطريق</a></li>
                            <li><a href="Method-ar-Science.html">العلم والمعرفة</a></li>
                            <li><a href="Method-ar-Science1.html"> علم التصوف</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col col-md-8 wow animate__backInRight" data-wow-duration="2s">
                <div class="service-single-content">
                    <div class="service-single-img">
                        <img src="{{asset('frontend//assets/images/service-details.jpg')}}" alt>
                    </div>
                    <h2>مقدمه علوم الطريقة</h2>
                    <p class="text-p">ي ما شرعه الله لعباده المسلمين من أحكام وقواعد ونظم لإقامة الحياة العادلة وتصريف مصالح الناس وأمنهم في العقائد والعبادات والأخلاق والمعاملات ونظم الحياة، في شعبها المختلفة لتنظيم علاقة الناس بربهم وعلاقاتهم بعضهم ببعض وتحقيق سعادتهم في الدنيا والآخرة. فمن يحقق هذه الكليات أو يقترب منها فهو على شريعة الله بصرف النظر عن هويته ونوع انتمائه فالله يحاسب الناس على الأعمال والنيات، والشريعة الإسلامية ذات دلالة موسوعية تتسع لكل جهد إيجابي يبذل لعمارة الأرض ويستثمر مكنوناتها لصالح حياة الإنسان وكرامته، وتتسع لكل ما يحقق للإنسان صحته وغذاءه وأمنه واستقراره، وتتسع لكل ما يعزز تنمية آمنة وتقدم علمي نافع وارتقاء </p>
                    <p class="text-p">والشريعة الإسلامية مع كل جهد بشري يبذل لبناء المجتعات وتنظيم شؤون الناس وتصريف مصالحهم وتشجيع طموحاتهم ويحقق آمال أجيالهم، الشريعة الإسلامية لا تبخس جهود الآخرين ومهاراتهم وارتقائهم في بناء مجتمعاتهم، وليست هي ناسخة - كما يظن البعض - لإبداعاتهم ومهاراتهم الحضارية بل الشريعة الإسلامية تشجع الآخر وتبارك جهود الآخر وتتعاون مع الآخر في كل عمل يحقق الخير والأمن والأمان والسلام للمجتمعات، الشريعة الإسلامية تدعو إلى عمل بشري جماعي للنهوض معاً بمهمة التكليف الرباني المشترك لعمارة الأرض بل لعمارة الكون وإقامة حياة إنسانية كريمة راشدة.</p>
                </div>
            </div>

        </div> <!-- end row -->
    </div> <!-- end container -->
</section>

@endsection
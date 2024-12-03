@extends('layout.frontend.min')

@section('content')
<section class="service-single-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 wow animate__backInLeft" data-wow-duration="2s">
                <div class="wpo-section-title">
                    <h2>{{__('messages.quran')}}</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row height-qouran" style="height: 1280px ; border-bottom: 1px solid gray;">

                <div id="wrapper">
                    <div id="control">
                        <a href="" class="page-change" data-offset="-100">
                            <button data-offset="-100" class="btn  page-change"><i data-offset="-100" class="fas fa-angle-double-right page-change"></i></button>
                        </a>
                        <a href="" class="page-change" data-offset="-10">
                            <button data-offset="-10" class="btn  page-change"><i data-offset="-10" class="fad fa-angle-double-right page-change"></i></button>
                        </a>
                        <a href="" class="page-change" data-offset="-1">
                            <button data-offset="-1" class="btn  page-change"><i data-offset="-1" class="fas fa-angle-right page-change"></i></i></button>
                        </a>
                        <span id="page_num"></span>
                        <a href="" class="page-change" data-offset="1">
                            <button data-offset="1" class="btn  page-change"><i data-offset="1" class="fas fa-angle-left page-change"></i></button>
                        </a>
                        <a href="" class="page-change" data-offset="10">
                            <button data-offset="10" class="btn  page-change"><i data-offset="10" class="fad fa-angle-double-left page-change"></i></button>
                        </a>
                        <a href="" class="page-change" data-offset="100">
                            <button data-offset="100" class="btn  page-change"><i data-offset="100" class="fas fa-angle-double-left page-change"></i></button>
                        </a>

                    </div>


                </div>

                <div class="aya_tafser">
                    <h4>{{__('messages.click')}}</h4>
                </div>
                <p class="text-center quran-collapse">

                    <button class="btn btn-primary btn-qu btn-qoran" type="button">
                    {{__('messages.change')}}
                    </button>

                </p>
                <div id="wrapper2" style="width: 100%;  height: 100%;">
                    <div id="suras" class="scrollbar" id="style-1" style="height: 1100px;">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم</th>
                                    <th>صفحة</th>
                                    <th> الآيات</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Loading ...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- suras -->

                    <div id="page" style="
                            background-size: 100% 100%;
                            z-index: 999;
                            height: 86%;
                            width: 77%;
                            ">
                        Loading ...
                    </div><!-- page -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="tfser-one">


                                <div class="row print-area">
                                    <div class="col-md-12" style="padding: 50px;     border: solid 1px;">
                                        <h4 id="aya-text"></h4>
                                    </div>

                                </div>
                                <div class="row" style="display: flex;flex-direction: row;">
                                    <div class="col-md-4" style="border: solid 1px;padding: 10px;">
                                        <div class="form-group ">
                                            <label class="control-label"> اختار الامام </label>
                                            <select onChange="selectOption(this);" id="ourSelect" class="ui search dropdown pon up">
                                                <!-- <option>...... </option>
                                                <option>الامام ابن كثير </option>
                                                <option>الامام الحسن بن على </option>
                                                <option>على زين العابدين الامام </option>
                                                <option>محمد الباقر الامام </option>
                                                <option> جعفر الصادقالامام </option>
                                                <option> جعفر الصادقالامام </option> -->
                                            </select>
                                        </div>
                                        <div class="row  btn-content-1">
                                            <div>
                                                <div class="wpo-section-title btn-1" style="margin-bottom: 15px; ">
                                                    <button class="nt_button one but-madi " style="width: 91%;">تفسير الامام محمد ماضي ابو العزائم </button>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-1" style="display: none;">
                                            <div class="row  btn-content-1">
                                                <div>
                                                    <div class="wpo-section-title btn-2" style="margin-bottom: 15px;">
                                                        <button class="nt_button one but-madi " style="width: 91%;"> تلاميذ الامام محمد ماضي ابو العزائم </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="show-2" style="display: none;">
                                                <div class="row d-none btn-content-2">
                                                    <div>
                                                        <div class="wpo-section-title" style="margin-bottom: 15px; ">
                                                            @foreach($students as $student)
                                                                <button class="nt_button smile-font but-madi {{$student->id == 2? 'btn-3':'' }}  btn-student" data-class='show-student-{{$student->id}}'> {{$student->name_ar}} </button>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row d-none btn-content-3 show-3" style="display: none;">
                                                    <div class="col-12 ">
                                                        <div class="wpo-section-title" style="margin-bottom: 15px">
                                                            @foreach($types as $type)
                                                                <button class="nt_button smile-font but-madi  btn-4 btn-type" data-class='show-type-{{$type->id}}'> {{$type->name_ar}} </button>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div  class="col-md-8 d-none print-area" style="border: solid 1px;">
                                        <div id="tafser_imam_container"></div>
                                        <!-- <p style="padding-top: 20px;" class="text-p">تفسير الامام : </p> -->

                                        <!-- <div class="wrapper-tab show-4" style="display: none;">
                                            <hr class="sold" id="on">
                                            <p class="text-p tab_1">
                                                العقاد :<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae, modi reprehenderit atque harum aperiam sunt molestiae, voluptatum, asperiores tempore perferendis ipsam. Reprehenderit cumque perspiciatis sapiente natus rerum expedita officia?
                                                </span>
                                            </p>
                                        </div>
                                        <div class="wrapper-tab show-5" style="display: none;">
                                            <hr class="sold" id="on">
                                            <p class="text-p tab_1 "> شاه :<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae, modi reprehenderit atque harum aperiam sunt molestiae, voluptatum, asperiores tempore perferendis ipsam. Reprehenderit cumque perspiciatis sapiente natus rerum expedita officia?</span></p>
                                        </div> -->
                                        <div id="student_container">

                                        </div>
                                        <div id="type_container">

                                        </div>
                                        <!-- <div class="show-6" style="display: none;">
                                            <hr class="sold">
                                            <p class="text-p"> معني مفردات :<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae, modi reprehenderit atque harum aperiam sunt molestiae, voluptatum, asperiores tempore perferendis ipsam. Reprehenderit cumque perspiciatis sapiente natus rerum expedita officia?</span></p>
                                        </div>
                                        <div class="show-7" style="display: none;">
                                            <hr class="sold">
                                            <p class="text-p"> معني الاجمالي :<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae, modi reprehenderit atque harum aperiam sunt molestiae, voluptatum, asperiores tempore perferendis ipsam. Reprehenderit cumque perspiciatis sapiente natus rerum expedita officia?</span></p>
                                        </div>
                                        <div class="show-8" style="display: none;">
                                            <hr class="sold">
                                            <p class="text-p"> مبحث علم الاسرار :<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae, modi reprehenderit atque harum aperiam sunt molestiae, voluptatum, asperiores tempore perferendis ipsam. Reprehenderit cumque perspiciatis sapiente natus rerum expedita officia?</span></p>
                                        </div> -->

                                        





                                    </div>
                                   
                                </div>
                                <div>
                                    <div class="wpo-section-title" style="display: flex; margin-left: 10px;">
                                        <button class="nt_button smile-font but-madi btn-9 "> ارسال </button>
                                        <button id="print-btn" class="nt_button smile-font but-madi "> طبع </button>
                                    </div>
                                    <div class="share" id="shareIcons" style="display: none;"></div> 
                                   
                                </div>

                            </div><!-- tafseer -->
                        </div>
                    </div>

                </div><!-- wrapper2 -->

            </div><!-- wrapper -->

        </div>
    </div>

    </div>
   
    
</section>
@endsection
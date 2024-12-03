<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="sidebar-search-wrapper">
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
            <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                <a href="javascript:;" class="remove">
                    <i class="icon-close"></i>
                </a>
                <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <a href="javascript:;" class="btn submit">
                            <i class="icon-magnifier"></i>
                        </a>
                    </span>
                </div> -->

            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="nav-item start active open">
            <a href="{{ url('/') }}" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">الرئيسية</span>
                <span class="selected"></span>
            </a>

        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title"> الصفحه الرئيسية</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.card.index') }}" class="nav-link ">
                        <span class="title">المحتوى الاول</span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.home_quran.index') }}" class="nav-link ">
                        <span class="title">المحتوى الثاني</span>
                    </a>
                </li>


            </ul>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">الامام محمد ماضي ابو العزائم </span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

            <li class="nav-item  ">
                    <a href="{{ route('dashboard.home_imam.index') }}" class="nav-link ">
                        <span class="title">المحتوى الاول</span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.AboutImam.index') }}" class="nav-link ">
                        <span class="title"> نبذه عن الامام</span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.ImamLibrary.index') }}" class="nav-link ">
                        <span class="title">اسم المكتبة </span>
                    </a>
                </li>
                {{-- <li class="nav-item  ">
                    <a href="{{ route('dashboard.ImamText.index') }}" class="nav-link ">
                        <span class="title">نبذه عن المكتبة </span>
                    </a>
                </li> --}}




            </ul>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">عن الجامعة</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.AboutUniversity.index') }}" class="nav-link ">
                        <span class="title"> نبذه عن الجامعة</span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.UniversityLibrary.index') }}" class="nav-link ">
                        <span class="title">اسم المكتبة </span>
                    </a>
                </li>


            </ul>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">تفسير الامام </span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">



                <li class="nav-item  ">
                    <a href="{{ route('dashboard.TafsirLibrary.index') }}" class="nav-link ">
                        <span class="title">اسم مكتبة التفسير  </span>
                    </a>
                </li>





            </ul>
        </li>

        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">التراث العلمي النثري للامام </span>
                <span class="arrow"></span>
            </a>

            <ul class="sub-menu">


                <li class="nav-item  ">
                    <a href="{{ route('dashboard.AboutProse.index') }}" class="nav-link ">
                        <span class="title"> نبذه عن التراث النثري</span>
                    </a>
                </li>



                <li class="nav-item  ">
                    <a href="{{ route('dashboard.ProseLibrary.index') }}" class="nav-link ">
                        <span class="title">اسم المكتبة </span>
                    </a>
                </li>


            </ul>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">التراث العلمي النثري للامام (النصى)</span>
                <span class="arrow"></span>
            </a>

            <ul class="sub-menu">


                <li class="nav-item  ">
                    <a href="{{ route('dashboard.NacryLibrary.index') }}" class="nav-link ">
                        <span class="title">   التراث النثري</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">التراث العلمي النظمي للامام </span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.AboutNazmy.index') }}" class="nav-link ">
                        <span class="title"> نبذه عن التراث النظمي</span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.NazmyLibrary.index') }}" class="nav-link ">
                        <span class="title">اسم المكتبة </span>
                    </a>
                </li>


            </ul>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">القصائد والمواجيد </span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                {{-- <li class="nav-item  ">
                    <a href="{{ route('dashboard.sea.index') }}" class="nav-link ">
                        <span class="title"> بحر القصائد</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ route('dashboard.rawy.index') }}" class="nav-link ">
                        <span class="title"> اسم تابع للقصيده </span>
                    </a>
                </li> --}}
                <li class="nav-item  ">
                    <a href="{{ route('dashboard.poems.index') }}" class="nav-link ">
                        <span class="title"> القصائد </span>
                    </a>
                </li>
                {{-- <li class="nav-item  ">
                    <a href="{{ route('dashboard.poem_rawy.index') }}" class="nav-link ">
                        <span class="title">ابيات القصائد</span>
                    </a>
                </li> --}}
                <li class="nav-item  ">
                    <a href="{{ route('dashboard.listen.index') }}" class="nav-link ">
                        <span class="title">صوتيات القصائد</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ route('dashboard.explained.index') }}" class="nav-link ">
                        <span class="title">شرح القصائد</span>
                    </a>
                </li>





            </ul>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title"> مراقي السالكين </span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">


                <li class="nav-item  ">
                    <a href="{{ route('dashboard.MarakyText.index')}}" class="nav-link ">
                        <span class="title"> نبذة عن مراقي السالكين</span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.categorie.index')}}" class="nav-link ">
                        <span class="title"> الصفحه الاولي</span>
                    </a>
                </li>

                {{-- <li class="nav-item  ">
                    <a href="{{ route('dashboard.post.index')}}" class="nav-link ">
                        <span class="title">الصفحه الثانيه </span>
                    </a>
                </li> --}}


            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title"> علوم تفسير القران</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.imams.index') }}" class="nav-link ">
                        <span class="title">الامام</span>
                    </a>
                </li>
{{--                <li class="nav-item  ">--}}
{{--                    <a href="{{ route('dashboard.ayat.index') }}" class="nav-link ">--}}
{{--                        <span class="title"> الاية</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item  ">
                    <a href="{{ route('dashboard.tafser.index') }}" class="nav-link ">
                        <span class="title">تفسير الاية</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ route('dashboard.student_tafser.index') }}" class="nav-link ">
                        <span class="title"> تفسير التلاميذ</span>
                    </a>
                </li>




                <li class="nav-item  ">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="icon-puzzle"></i>
                        <span class="title"> جديد</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item  ">
                            <a href="{{ route('dashboard.student.index') }}" class="nav-link ">
                                <span class="title">المحتوى الاول</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{ route('dashboard.type.index') }}" class="nav-link ">
                                <span class="title">المحتوى الثاني</span>
                            </a>
                        </li>




                    </ul>
                </li>

            </ul>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title"> أبناء إلامام و تلاميذه</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.AboutDisciples.index')}}" class="nav-link ">
                        <span class="title">نبذة عن أبناء إلامام و تلاميذه</span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.ImamDisciples.index')}}" class="nav-link ">
                        <span class="title">اسماء الائمة و التلاميذ </span>
                    </a>
                </li>

                {{-- <li class="nav-item  ">
                    <a href="{{ route('dashboard.DisciplesText.index')}}" class="nav-link ">
                        <span class="title">نبذه عن التلميذ </span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item  ">
                    <a href="{{ route('dashboard.ButtonType.index')}}" class="nav-link ">
                        <span class="title"> الامام مكتبات</span>
                    </a>
                </li> --}}

            </ul>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title"> علوم التصوف </span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.AboutEltasof.index') }}" class="nav-link ">
                        <span class="title"> نبذه عن علوم التصوف </span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.EltasofLibrary.index') }}" class="nav-link ">
                        <span class="title">اسم المكتبة </span>
                    </a>
                </li>

                {{-- <li class="nav-item  ">
                    <a href="{{ route('dashboard.EltasofText.index') }}" class="nav-link ">
                        <span class="title">نبذه عن المكتبة </span>
                    </a>
                </li> --}}

                {{-- <li class="nav-item  ">
                    <a href="{{ route('dashboard.EltasofBook.index') }}" class="nav-link ">
                        <span class="title"> الكتاب</span>
                    </a>
                </li> --}}


            </ul>
        </li>

        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title"> صوتيات و مرئيات</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">


                <li class="nav-item  ">
                    <a href="{{ route('dashboard.MediaLibrary.index') }}" class="nav-link ">
                        <span class="title"> اسم المكتبة</span>
                    </a>
                </li>

                    {{-- <li class="nav-item  ">
                        <a href="{{ route('dashboard.MediaText.index') }}" class="nav-link ">
                            <span class="title">نبذه عن المكتبة</span>
                        </a>
                    </li> --}}
                <li class="nav-item  ">
                    <a href="{{ route('dashboard.ButtonLibrary.index') }}" class="nav-link ">
                        <span class="title"> اضافة صوتيات او مرئيات</span>
                    </a>
                </li>



            </ul>
        </li>

        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title"> تواصل معنا</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">

                <li class="nav-item  ">
                    <a href="{{ route('dashboard.contact.index') }}" class="nav-link ">
                        <span class="title">المحتوى الاول</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ route('dashboard.map.index') }}" class="nav-link ">
                        <span class="title">المحتوى الثاني</span>
                    </a>
                </li>


            </ul>
        </li>

        <li class="nav-item  ">
                    <a href="{{ route('dashboard.book.index') }}" class="nav-link ">
                        <span class="title"> الاحاديث</span>
                    </a>
                </li>



        @if(auth()->user()->super_admin == 1)

            <li class="nav-item  ">
                <a href="{{ route('dashboard.users.index') }}" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title"> اضافة مستخدم</span>

                </a>

            </li>
        @endif
    </ul>
    </li>
    <li>

        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('frm-logout').submit();"> <i class="fa fa-sign-out"></i>
            {{ __('الخروج') }}
        </a>
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </li>
    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->

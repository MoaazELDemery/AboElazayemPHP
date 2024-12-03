@extends('layout.dashboard.app')
@section('content')





<div class=" row">
    <a href="{{ route('dashboard.tafser.create') }}" class="btn btn-primary mb-3 pog"> اضافة جديد</a>
    <h1 class="pn"> تفسير القران الكريم</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal form-row-seperated" action="#">
            <div class="portlet">

                <div class="portlet-body">
                    <div class="tabbable-bordered">
                        <ul class="nav nav-tabs">


                            <li class="active">
                                <a href="#tab_images" data-toggle="tab" aria-expanded="true"> اسم الامام </a>
                            </li>
                            <form class="form-inline pull-right" action="dashboard.tafser.index" method="GET">
                                <div id="search" class="input-group input-medium">
                                    <input type="text" class="form-control" name="search" placeholder="اسم الامام" value="{{ request()->search }}">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn green">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>

                        </ul>
                        <div class="tab-content">


                            <div class="tab-pane active" id="tab_images">


                                <div class="row">
                                    <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"></div>
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th width="3%"> رقم </th>
                                            <th width="36%"> اسم الامام عربي </th>

                                            <th width="20%"> رقم السورة </th>
                                            <th width="20%">رقم الاية </th>
                                            <th width="8%"> التفسير </th>
                                            <th width="8%"> تعديل </th>
                                            <th width="8%"> حذف </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $namder = 1;
                                        ?>
                                        <?php
                                        $empty = 1;
                                        ?>
                                        @foreach ($tafsers as $tafser)
                                        <?php
                                        $empty = 0;
                                        ?>
                                        @if($tafser->ayat->count()>1)
                                        @foreach($tafser->ayat as $index => $aya)

                                        <tr>
                                            @if($index == 0)
                                            <td rowspan="{{$tafser->ayat->count()}}"> {{ $tafser->id }} </td>

                                            <td rowspan="{{$tafser->ayat->count()}}">{{$tafser->imams->name_ar}} </td>
                                            @endif

                                            <td> (سوره {{ $aya->sora_name }})  ({{ $aya->key_aya }}) </td>
                                            <td> رقم آيه :{{ $aya->key_aya }}</td>
                                            <th> <a href="{{ route('dashboard.tafser.show', $tafser->id) }}" class="btn btn-icon-only blue">
                                                    <i class="fa fa-file-o"></i>
                                                </a> </th>
                                            <td>
                                                <a href="{{ route('dashboard.tafser.edit', $tafser->id) }}" class="btn btn-icon-only red">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                            </td>
                                            <td>
                                                <a href="{{ route('dashboard.tafser.destroy', $tafser->id) }}" class="btn btn-icon-only  btn-dark">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>

                                        </tr>

                                        @endforeach
                                        @else
                                        <tr>
                                            <td> {{ $tafser->id }} </td>

                                            <td>{{$tafser->imams->name_ar}} </td>

                                            @foreach($tafser->ayat as $aya)



                                            <td> (سوره {{ $aya->sora_name }})  ({{ $aya->key_aya }}) </td>
                                            <td> رقم آيه :{{ $aya->key_aya }}</td>
                                            <th> <a href="{{ route('dashboard.tafser.show', $tafser->id) }}" class="btn btn-icon-only blue">
                                                    <i class="fa fa-file-o"></i>
                                                </a> </th>
                                            <td>
                                                <a href="{{ route('dashboard.tafser.edit', $tafser->id) }}" class="btn btn-icon-only red">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('dashboard.tafser.destroy', $tafser->id) }}" class="btn btn-icon-only  btn-dark">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>

                                            @endforeach

                                        </tr>

                                        @endif
                                        <?php
                                        $namder++;
                                        ?>
                                        @endforeach

                                    </tbody>
                                    @if($empty)

                                    <h3>لا يوجد ما تبحث عنه</h3>
                                    <div class="form-actions left" style="display: none;">
                                        <a href="{{ $tafsers->nextPageUrl() }}" class="btn default">التالى</a>
                                        <a href="{{ $tafsers->previousPageUrl()}}" class="btn default">السابق</a>
                                    </div>

                                    @else

                                    <div class="form-actions left">
                                        <a href="{{ $tafsers->nextPageUrl() }}" class="btn default">التالى</a>
                                        <a href="{{ $tafsers->previousPageUrl()}}" class="btn default">السابق</a>
                                    </div>


                                    @endif
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>







@endsection

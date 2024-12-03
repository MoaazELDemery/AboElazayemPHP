@extends('layout.dashboard.app')
@section('content')

<div class="tab-pane" id="tab_1">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i> ابيات القصيدة
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                <a href="javascript:;" class="reload"> </a>
                <a href="javascript:;" class="remove"> </a>
            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form class="horizontal-form" method="POST" action="{{ route('dashboard.poems.update_abyat', $poem->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="poem_id" value="{{$poem->id}}">

                <div class="form-body">
                    <h3 class="form-section">تعديل ابيات القصيدة : {{$poem->pname_ar}}</h3>
                    <?php
                    $namder = 1;
                    ?>


                    @foreach($abyat as $i => $item)

                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('dashboard.poem_rawy.destroy', $item->id) }}" class="btn btn-danger btu_n" style="margin: 7px !important;font-size: 13px !important;">حذف</a>
                            <div class="form-group">
                                <label class="control-label"> الجزء الاول من البيت : {{$namder}} </label>
                                <textarea class="form-control" id="right_ar" name="poem_rawys[{{$item->id}}][right_ar]" rows="3">{{ $item->right_ar }}</textarea>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <a href="{{ route('dashboard.poem_rawy.destroy', $item->id) }}" class="btn btn-danger btu_n" style="margin: 7px !important;font-size: 13px !important; float: left;">Delete </a>
                            <div class="form-group ">
                                <label class="control-label" style=" text-align: left; width: 100%;">The first part of verse : {{$namder}}</label>
                                <textarea class="form-control" id="right_en" name="poem_rawys[{{$item->id}}][right_en]" rows="3">{{ $item->right_en }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!--/row-->
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"> الجزء الثاني من البيت : {{$namder}} </label>
                                <textarea class="form-control" id="left_ar" name="poem_rawys[{{$item->id}}][left_ar]" rows="3">{{ $item->left_ar }}</textarea>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label" style=" text-align: left; width: 100%;">The first part of verse : {{$namder}}</label>
                                <textarea class="form-control" id="left_en" name="poem_rawys[{{$item->id}}][left_en]" rows="3">{{ $item->left_en }}</textarea>
                            </div>
                        </div>
                    </div>
                    <?php
                    $namder++;
                    ?>
                    @endforeach
                    @for( $j=0 ; $j<= $poem->num_verses - $namder ; $j++ )
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> الجزء الاول من البيت : {{$j + $namder}} </label>
                                    <textarea class="form-control" id="right_ar" name="poem_rawys[{{$j + $namder}}][right_ar]" rows="3"></textarea>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="control-label" style=" text-align: left; width: 100%;">The first part of verse : {{$j + $namder}}</label>
                                    <textarea class="form-control" id="right_en" name="poem_rawys[{{$j + $namder}}][right_en]" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <!--/row-->
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> الجزء الثاني من البيت : {{$j + $namder}} </label>
                                    <textarea class="form-control" id="left_ar" name="poem_rawys[{{$j + $namder}}][left_ar]" rows="3"></textarea>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="control-label" style=" text-align: left; width: 100%;">The first part of verse : {{$namder}}</label>
                                    <textarea class="form-control" id="left_en" name="poem_rawys[{{$j + $namder}}][left_en]" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    @endfor 
                </div>


                <div class="form-actions left">
                    <a href="{{ route('dashboard.poem_rawy.index')}}" class="btn default">الغاء</a>
                    <button type="submit" class="btn blue">
                        <i class="fa fa-check"></i> حفظ</button>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>

</div>



@endsection
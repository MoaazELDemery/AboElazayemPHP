@extends('layout.dashboard.app')
@section('content')



    <div class="portlet light form-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> تعديل البيانات
                    تلاميذ الامام</span>
            </div>
            <div class="actions">

            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->

            <form class="form-horizontal form-bordered" method="POST"
                action="{{ route('dashboard.student.update', $Students->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-md-3">اسم الإمام </label>
                        <div class="col-md-4">
                            <input class="form-control" placeholder="الاسم" value="{{ $Students->name_ar }}"
                                name="name_ar" type="text" />

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="single" class="control-label  col-md-3">اختار قسم </label>
                        <div class="input-group col-md-9 select2-bootstrap-append">
                            <select id="single" name="imam_id" class="form-control select2 select2-hidden-accessible"
                                tabindex="-1" aria-hidden="true">


                                <optgroup label="الاقسام">
                                    @foreach ($imam as $imams)
                                        <option <?php if ($imams->id == $Students->poem_id) {echo 'selected';} ?> value="{{ $imams->id }}">{{ $imams->name_ar }}</option>
                                       
                                    @endforeach
                                </optgroup>
                            </select>


                        </div>

                    </div>




                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn blue">
                                <i class="fa fa-check"></i> تعديل</button>
                            <a href="{{ route('dashboard.student.index') }}" class="btn default">الغاء</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>







@endsection

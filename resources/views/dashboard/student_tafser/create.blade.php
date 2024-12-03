@extends('layout.dashboard.app')
@section('content')


<script>
        window.onload = function (){
            tinymce.init({
            selector: '.tinymce',
            plugins: 'casechange',
            toolbar: 'casechange',
            height: '300px',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        })
    }

    </script>

<div class="portlet light form-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> ادخل البيانات تفسير تلاميذ
                الامام</span>
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->

        <form class="form-horizontal form-bordered" method="POST" action="{{ route('dashboard.student_tafser.store') }}"
            encstudent="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">وصف المحتوي</label>
                    <div class="col-md-9">
                        <textarea class="form-control tinymce" name="description_ar" rows="2" placeholder="وصف المحتوي" ></textarea>
                    </div>
                </div>


                <div class="form-group">
                    <label for="single" class="control-label col-md-3">تلاميذ الامام  </label>
                    <div class="input-group col-md-9 select2-bootstrap-append">

                    <select id="single" name="student_id" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                        <optgroup label="الاقسام">
                        @foreach ($Students as $Student)
                            <option value="{{$Student->id}}">{{$Student->name_ar}}</option>
                            @endforeach
                        </optgroup>
                    </select>
                </div>
                </div>

                <div class="form-group">
                    <label for="single" class="control-label col-md-3">نوع التلميذ</label>
                    <div class="input-group col-md-9 select2-bootstrap-append">
                    <select id="single" name="type_id" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                        <option value="0">بدون قسم</option>
                        <optgroup label="الاقسام">
                        @foreach ($Types as $Type)
                            <option value="{{$Type->id}}">{{$Type->name_ar}}</option>
                            @endforeach
                        </optgroup>
                    </select>
                </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">اختر السوره</label>
                    <div id="testing" class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <select required id="ayaWrapper" name="key_aya"
                                class="form-control" tabindex="-1"
                                aria-hidden="true">
                            <option></option>

                        </select>
                    </div>
                </div>



                </div>


            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button student="submit" class="btn blue">
                            <i class="fa fa-check"></i> حفظ</button>
                        <a href="{{ route('dashboard.student_tafser.index') }}" class="btn default">الغاء</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>



@endsection

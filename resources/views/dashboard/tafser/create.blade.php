@extends('layout.dashboard.app')
@section('content')

<script>
    window.onload = function() {
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
                <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> ادخل البيانات  تفسير القران </span>
            </div>
            <div class="actions">

            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->

            <form class="form-horizontal form-bordered" method="POST" action="{{ route('dashboard.tafser.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-body">

                    <div class="tafser-container" id="tafser-container">
                        <div class="form-group" style="text-align: right ; ">
                            <label class="control-label col-md-3">التفسير  </label>
                            <div class="col-md-9">
                                <textarea class="form-control tafser_textarea tinymce"   id="tafser_ar" name="tafser[0][tafser_ar]"
                                    rows="2" placeholder="وصف المحتوي"></textarea>

                            </div>
                        </div>
                    </div>

                    <div id="aya-container" class="aya-container">


                    </div>

                    <div class="form-group">
                        <label for="single" class="control-label col-md-3"> اسم الامام </label>
                        <div class="col-md-9">
                        <select id="single" name="imam_id"
                            class="form-control select2 select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
                            <option></option>

                            <optgroup label="الامام">
                                @foreach ($imam as $imams)
                                    <option value="{{ $imams->id }}">{{ $imams->name_ar }}</option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>
                    </div>


                </div>
                <div class="form-actions ">
                    <button onclick="appendAya()" id="button" data-role="button" type="button" class="btn  blue">اضافة
                        تفسير اخر</button>

                </div>
                <div class=" testingone w-25 m-auto ">
                    <input type="number" class="form-control" id="ayaNumber">
                    <button id="next" data-role="next" type="button" class="btn  blue">اضافة الأيات</button>

                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn blue">
                                <i class="fa fa-check"></i> حفظ</button>
                            <a href="{{ route('dashboard.tafser.index') }}" class="btn default">الغاء</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>



<style>
    .testingone
    {
        width : 25% !important;
        margin : auto !important;
        display : flex;
        justify-content: center;
        padding : 20px 0 ;
    }
</style>
@endsection

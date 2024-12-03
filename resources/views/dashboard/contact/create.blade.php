@extends('layout.dashboard.app')
@section('content')
 
    <script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textArea',
        height: 160,
        toolbar: 'bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect | forecolor backcolor fontsizeselect | image media link table emoticons | bullist numlist | outdent indent blockquote | undo, redo removeformat | subscript superscript | restoredraft code',
        plugins: 'code textcolor colorpicker image emoticons link autolink autosave hr media table wordcount lists',
        menubar: "file edit insert format table"
    });
</script>
<div class="tab-pane" id="tab_1">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i> تواصل معنا   المحتوى الاول
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
            <form class="horizontal-form" method="POST" action="{{ route('dashboard.contact.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <h3 class="form-section">ادخل البيانات </h3>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"> اسم الاول  </label>
                                <input type="text" class="form-control" id="first" placeholder="اسم الاول " name="first" required>
                            </div>
                        </div>
                        <!--/span-->
                       
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"> اسم الثاني </label>
                                <input type="text" class="form-control" id="second" placeholder="  اسم الثاني " name="second" required>
                            </div>
                        </div>
                        <!--/span-->
                      
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">البريد الاكتروني</label>
                                <input type="email"  class="form-control" id="email" placeholder="البريد الاكتروني" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">رساله  بالعربي</label>
                                <textarea class="form-control" id="messages" name="messages" rows="3" required></textarea>
                            </div>
                        </div>
                        <!--/span-->
                       
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">وصف المحتوي بالعربي</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                            </div>
                        </div>
                     
                    </div>
                   

                 


                </div>

               
                <div class="form-actions left">
                    <a href="{{ route('dashboard.contact.index')}}" class="btn default">الغاء</a>
                    <button type="submit" class="btn blue">
                        <i class="fa fa-check"></i> حفظ</button>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>

</div>


@endsection

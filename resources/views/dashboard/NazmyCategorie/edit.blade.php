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
                <i class="fa fa-gift"></i>اسم الاقسام  /التراث النظمي
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
            <form class="horizontal-form" method="POST" action="{{ route('dashboard.NazmyCategorie.update', $Categories->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <h3 class="form-section">تعديل البيانات</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">اسم المحتوى بالعربي</label>
                                <input type="text" class="form-control" id="name_ar" placeholder="اسم  بالعربي" name="name_ar" value="{{ $Categories->name_ar }}">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label">اسم المحتوى بالانجليزي</label>
                                <input type="text" class="form-control" id="name_en" placeholder="اسم  بالانجليزي" name="name_en" value="{{ $Categories->name_en}}">
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                     <!--/row-->
                     <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                
                                <input type="hidden" name="library_id" value="{{$id_button}}">

                            </div>

                        </div>
                    </div>
                 
                 
                   
                </div>
               <div class="form-actions left">
                    <a href="{{ route('dashboard.NazmyCategorie.index',$id_button) }}" class="btn default">الغاء</a>
                    
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> حفظ</button>
                    </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>

</div>



@endsection
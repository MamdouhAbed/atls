
<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dtableFiles">الملفات</a>
                    </li>
                    <li class="breadcrumb-item active">رفع ملف
                    </li>
                </ol>
            </div>

            <div class="content-header-lead col-xs-12 mt-1">

            </div>
        </div>
        <div class="content-body">
            <!-- Responsive integration table -->
            <section id="dropzone-examples">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><i class="icon-tag"></i> رفع ملف</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <form class="form" novalidate="" action="<?php echo base_url().'admin/saveFile'?>" method="post"  enctype="multipart/form-data" />

                                    <div class="form-body">




                                        <div class="row">
                                            <label class="col-md-2 text-xs-right">اسم الملف:</label>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="text" id="issueinput1" class="form-control" placeholder="اسم الملف" required="" data-validation-required-message="أدخـل اسم الملف" name="filename" data-toggle="tooltip" data-trigger="hover"  data-title="اسم الملف" />
                                                    </div></div>
                                            </div>


                                        </div>


                                        <div class="row">
                                            <label class="col-md-2 text-xs-right" >إضافة ملف:</label>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="file" data-max-size="30000"  id="filesToUpload"  name="file1"  required class="form-control"  data-validation-required-message="أضف ملف" placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>
                                                    </div></div>
                                            </div>
                                        </div>

                                        <p class="col-md-5 text-xs-right" style="color: #aa0000; font-size: 12px">ملاحظة/ حجم الملف مسموح لحد أقصى 30 ميجا</p>

                                    </div>

                                    <div class="form-actions" style="margin-top: 45px">
                                        <div class="text-xs-right">
                                            <button type="submit" name="fileSubmit" value="upload" class="btn btn-success"> تنفيذ <i class="icon-thumbs-up position-right"></i></button>
                                            <!--            <button type="submit" class="btn btn-info"> معاينة <i class="fa fa-eye position-right"></i></button>-->
                                            <button type="reset" class="btn btn-danger"> مسح الحقول <i class="icon-refresh position-right"></i></button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--</div>-->

            </section>

        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!--<script>-->
<!---->
<!--    var uploadField = document.getElementById("filesToUpload");-->
<!---->
<!--    uploadField.onchange = function() {-->
<!--        if(this.files[0].size > 30000000){-->
<!--            $('#error-span').remove();-->
<!--            $('#filesToUpload').parent().append('<span style="color: #DA4453; position: relative; top: 5px; " id="error-span"> الحجم غير مسموح به<span>');-->
<!--            $('#filesToUpload').focus();-->
<!--            this.value = "";-->
<!--        }-->
<!--    }-->
<!--</script>-->


<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dtableInfographic">الانفوجرافيك</a>
                    </li>
                    <li class="breadcrumb-item active">إضافة انفوجرافيك
                    </li>
                </ol>
            </div>

            <div class="content-header-lead col-xs-12 mt-1">

            </div>
        </div>
        <div class="content-body">
            <!-- Responsive integration table -->
            <section id="responsive">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><i class="icon-tag"></i> إضافة انفوجرافيك</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body collapse in">
                                <div class="card-block card-dashboard">

                                    <form class="form" novalidate="" action="<?php echo base_url().'admin/saveInfographic'?>" method="post" enctype="multipart/form-data" />

                                            <br>
                                            <div class="form-body">

                                                <div class="row">
                                                    <label class="col-md-2 text-xs-right">اسم الانفوجرافيك:</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <input type="text" id="issueinput2" name="infoname" class="form-control" placeholder="اسم الانفوجرافيك" required="" data-validation-required-message="أدخـل اسم الانفوجرافيك"  data-toggle="tooltip" data-trigger="hover"  data-title="اسم الانفوجرافيك" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <label class="col-md-2 text-xs-right" >اضافة صورة:</label>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <input type="file"  accept="image/x-png,image/gif,image/jpeg" name="info" id="filesToUpload" required class="form-control"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>
                                                            </div></div>
                                                    </div>

                                                </div>



                                            </div>



                                        <div class="form-actions">
                                            <div class="text-xs-right">
                                                <button type="submit" value="upload" class="btn btn-success"> تنفيذ <i class="icon-thumbs-up position-right"></i></button>
                                                <button type="reset" class="btn btn-danger"> مسح الحقول <i class="icon-refresh position-right"></i></button>
                                            </div></div>




                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Responsive integration table -->
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->



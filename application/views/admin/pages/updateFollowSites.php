<div class="robust-content content container-fluid" xmlns="">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
                    </li>

                    <li class="breadcrumb-item active">تعديل موقع
                    </li>
                </ol>
            </div>

            <div class="content-header-lead col-xs-12 mt-1">

            </div>
        </div>
        <div class="content-body">
            <!-- Responsive integration table -->
            <section id="responsive" class="input-validation checkbox-validation">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><i class="icon-tag"></i> تعديل موقع </h4>
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

                                    <form class="form" novalidate="" action="<?php echo base_url().'admin/saveUpdateFollowSites/'.$followsites->id?>" method="post" enctype="multipart/form-data"/>

                                    <div class="form-body">
                                        <div class="row">
                                            <label class="col-md-2 text-xs-right"> اسم الموقع:</label>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="text" id="issueinput1" class="form-control" required="" data-validation-required-message=" اسم الموقع" placeholder="اسم الموقع" name="site_name" data-toggle="tooltip" data-trigger="hover"  data-title="اسم الموقع" value="<?php  echo $followsites->title ?>"/>
                                                    </div></div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <label class="col-md-2 text-xs-right" >رابط الموقع :</label>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" id="issueinput3" class="form-control" required="" data-validation-required-message="رابط الموقع" name="site_link" placeholder="رابط الموقع" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="رابط الموقع" value="<?php  echo $followsites->link ?>"/>
                                                </div></div>
                                        </div>



                                        <div class="row">
                                            <label class="col-md-2 text-xs-right" > صورة الموقع :</label>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="file"  accept="image/x-png,image/gif,image/jpeg" name="site_img" id="filesToUpload"   class="form-control"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>
                                                    </div></div>
                                            </div>

                                            <label class="col-md-2 text-xs-right">القسم:</label>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <select id="issueinput5" name="category" required="" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="الأقسام">
                                                        <?php
                                                        foreach ($SiteDept as $sitedept)
                                                        {?>


                                                            <option value="<?php  echo $sitedept->id; ?> " <?php if($followsites->category_id==$sitedept->id) echo 'selected'?> ><?php  echo $sitedept->category_name ?></option>

                                                            <?php
                                                        }
                                                        ?>
                                                    </select>




                                                </div></div>

                                            <div class="col-md-2 col-sm-2 ">
                                                <div class="controls">
                                                    <div class="skin skin-square">
                                                        <input type="checkbox" name="siteshome" value="1" id="input-15"  <?php  if($followsites->show_home_id==1) echo 'checked';?>/>
                                                        <label for="input-15">الظهور على الرئيسية</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>




                                    </div>


                                    <!---->





                                    <div class="form-actions">
                                        <div class="text-xs-right">
                                            <button type="submit" value = "upload" name="fileSubmit" class="btn btn-success"> تنفيذ <i class="icon-thumbs-up position-right"></i></button>
                                            <button type="reset" class="btn btn-danger"> مسح الحقول <i class="icon-refresh position-right"></i></button>
                                        </div>
                                    </div>
                                    </form>
                                    <!--</form>-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--</div>-->
            </section>

            <script src='<?php echo base_url()?>admin-assets/js/tinymce/tinymce.min.js'></script>
            <script src="<?php echo base_url()?>admin-assets/js/index.js" type="text/javascript"></script>
        </div>
    </div>
</div>


<!-- ////////////////////////////////////////////////////////////////////////////-->




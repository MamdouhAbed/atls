<div class="robust-content content container-fluid" xmlns="">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dtableQuotations">الاقتباسات</a>
                    </li>
                    <li class="breadcrumb-item active">إضافة اقتباس
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
                                <h4 class="card-title"><i class="icon-tag"></i> إضافة اقتباس </h4>
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

                                    <form class="form" novalidate="" action="<?php echo base_url().'admin/saveUpdateQuotations/'.$quotations->id?>" method="post" enctype="multipart/form-data"/>

                                    <div class="form-body">

                                        <div class="row">
                                            <label class="col-md-2 text-xs-right" >الاقتباس:</label>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <textarea id="issueinput41" rows="10" class="form-control" name="txt" placeholder="الاقتباس"  data-toggle="tooltip" data-trigger="hover"
                                                                  data-placement="top" data-title="الاقتباس" ><?php  echo $quotations->txt ?></textarea>
                                                    </div></div></div>
                                        </div>

                                        <div class="row" id="warning">
                                            <label class="col-md-2 text-xs-right">الكاتب :</label>
                                            <div class="col-md-7">
                                                <div class=" form-group ">
                                                    <div class="controls">
                                                        <select  name="author" required="" class=" select2 select2-rtl  form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="الكتّاب">

                                                            <?php
                                                            foreach ($Authors as $authors)
                                                            {?>
                                                                <option value="<?php  echo $authors->id; ?> " <?php if($quotations->author_id==$authors->id) echo 'selected'?> ><?php  echo $authors->name ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>


                                    </div>


                                    <!---->





                                    <div class="form-actions">
                                        <div class="text-xs-right">
                                            <button type="submit" value = "upload" name="fileSubmit" class="btn btn-success"> تنفيذ <i class="icon-thumbs-up position-right"></i></button>
                                            <!--                          <button type="submit" class="btn btn-info"> معاينة <i class="fa fa-eye position-right"></i></button>-->
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




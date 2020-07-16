<div class="robust-content content container-fluid" xmlns="">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
                    </li>

                    <li class="breadcrumb-item active">تعديل بيانات كتاب
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
                                <h4 class="card-title"><i class="icon-tag"></i> تعديل بيانات الكتاب </h4>
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

                                    <form class="form" novalidate="" action="<?php echo base_url().'admin/saveUpdateBooks/'.$books->id?>" method="post" onsubmit="return validateForm()" enctype="multipart/form-data"/>

                                    <div class="form-body">
                                        <div class="row">
                                            <label class="col-md-2 text-xs-right"> اسم الكتاب:</label>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="text" id="issueinput1" class="form-control" required="" data-validation-required-message=" اسم الكتاب" placeholder="اسم الكتاب" name="book_name"
                                                               data-toggle="tooltip" data-trigger="hover"  data-title="اسم الكتاب" value="<?php  echo $books->title ?>" />
                                                    </div></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-2 text-xs-right"> تاريخ الإصدار:</label>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="date" id="issueinput2" class="form-control"   placeholder="تاريخ الاصدار" name="date" data-toggle="tooltip"
                                                               data-trigger="hover"  data-title="تاريخ الاصدار" value="<?php  echo $books->date_book ?>"/>
                                                    </div></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-2 text-xs-right" >عدد الصفحات :</label>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" id="issueinput3" class="form-control" name="page_number" placeholder="عدد الصفحات" data-toggle="tooltip"
                                                           data-trigger="hover" data-placement="top" data-title="عدد الصفحات" value="<?php  echo $books->page_number ?>"/>
                                                </div></div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-2 text-xs-right" >وصف الكتاب:</label>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <textarea id="issueinput4" rows="10" class="form-control" name="txt" placeholder="وصف الكتاب" data-toggle="tooltip"
                                                                  data-trigger="hover" data-placement="top" data-title="وصف الكتاب" ><?php  echo $books->desc_book ?></textarea>
                                                    </div></div></div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-2 text-xs-right" > صورةالكتاب :</label>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="file"  accept="image/x-png,image/gif,image/jpeg" name="book_img" id="filesToUpload" required class="form-control"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>
                                                    </div></div>
                                            </div>

                                        </div>


                                        <div class="row" id="warning">
                                            <label class="col-md-2 text-xs-right">الكاتب :</label>
                                            <div class="col-md-3">
                                                <div class=" form-group ">
                                                    <div class="controls">
                                                        <select  name="author[]" class="select2-tags form-control" dir="rtl" multiple="" id="select2-tags">
                                                            <?php
                                                            foreach ($Authors as $authors)
                                                            {?>

                                                                <option value="<?php  echo $authors->id ?>"
                                                                    <?php
                                                                    foreach ($AUTHOR_BOOK as $author_book)
                                                                    {
                                                                        if($authors->id==$author_book->author_id) {


                                                                            ?>
                                                                            selected
                                                                            <?php
                                                                        }

                                                                    }
                                                                    ?>
                                                                ><?php  echo $authors->name ?></option>                                                  <?php
                                                            }
                                                            ?>
                                                        </select>

                                                    </div>


                                                </div>
                                            </div>
                                            <label class="col-md-1 text-xs-right"> المركز:</label>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="text" id="issueinput55" class="form-control" required="" data-validation-required-message=" اسم المركز" placeholder="اسم المركز" name="center_name"
                                                               data-toggle="tooltip" data-trigger="hover"  data-title="اسم المركز" value="<?php  echo $books->center ?>"/>
                                                    </div></div>
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




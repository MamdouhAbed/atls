
    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
              </li>
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dtableImages">الصور</a>
                </li>
              <li class="breadcrumb-item active">إضافة ألبوم صور
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
          <h4 class="card-title"><i class="icon-tag"></i> إضافة ألبوم صور</h4>
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
            <form class="form" novalidate="" action="<?php echo base_url().'admin/saveImages'?>" method="post" enctype="multipart/form-data" />

        <div class="form-body">




        <div class="row">
          <label class="col-md-2 text-xs-right">اسم ألبوم الصور:</label>
          <div class="col-md-7">
            <div class="form-group">
              <div class="controls">
              <input type="text" id="issueinput1" class="form-control" placeholder="اسم الألبوم" required="" data-validation-required-message="أدخـل اسم الألبوم" name="imgname" data-toggle="tooltip" data-trigger="hover"  data-title="اسم الألبوم" />
            </div></div>
          </div>


        </div>
        <div class="row">
          <label class="col-md-2 text-xs-right">وصف ألبوم الصور:</label>
          <div class="col-md-7">
          <div class="form-group">
            <div class="controls">
            <textarea id="issueinput14" rows="3" class="form-control" name="comments" placeholder="وصف للألبوم" required="" data-validation-required-message="أدخـل الوصف" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="وصف للألبوم"></textarea>
          </div></div></div></div>

          <div class="row">
            <label class="col-md-2 text-xs-right" >اضافة صورة رئيسية:</label>
            <div class="col-md-7">
              <div class="form-group">
                <div class="controls">
                  <input type="file" accept="image/x-png,image/gif,image/jpeg"  name="imghome"  required class="form-control"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>
                </div></div>
            </div>
          </div>

          <div class="row">
            <label class="col-md-2 text-xs-right" >اضافة صور الألبوم:</label>
            <div class="col-md-7">
              <div class="form-group">
                <div class="controls">
                  <input type="file"  name="userFiles[]" accept="image/x-png,image/gif,image/jpeg"  multiple  required class="form-control"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>
                </div></div>
            </div>
          </div>
          <div class="row">
            <div class="controls" style="position: absolute; margin-right: 188px;">
              <div class="skin skin-square">
                <input type="checkbox" value="1" name="water_img" id="input-25"  />
                <label style="font-size: 12px" for="input-25">استخدام علامة مائية</label>
              </div>
            </div>
            </div>

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


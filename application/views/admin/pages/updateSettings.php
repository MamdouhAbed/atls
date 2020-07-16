

    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
              </li>
              <li class="breadcrumb-item active">تعديل اعدادات الموقع
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
					<h4 class="card-title"><i class="icon-tag"></i> اعدادات الموقع</h4>
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
                      <form class="form" novalidate="" action="<?php echo base_url().'admin/saveSettings'?>" method="post" />
                      <div class="form-body">
                          <div class="row">
                              <label class="col-md-2 text-xs-right">شكل الأخبار الرئيسية :</label>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <select id="issueinput5" name="home_news" required="" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="الأقسام">


                                              <option value="1" <?php if($Website_settings->value==1) echo 'selected'?> >شكل 1 ( 5أخبار رئيسية )</option>
                                              <option value="2" <?php if($Website_settings->value==2) echo 'selected'?>>شكل 2 ( خبرين رئيسيين + أحداث الساعة )</option>
                                              <option value="3" <?php if($Website_settings->value==3) echo 'selected'?>>شكل 3 ( 5 أخبار سلايدر + أحداث الساعة )</option>

                                      </select>

                      </div>
                                  </div>
</div>
                      <div class="form-actions">
                        <div class="text-xs-right">
                          <button type="submit" class="btn btn-success"> تنفيذ <i class="icon-thumbs-up position-right"></i></button>
<!--                          <button type="submit" class="btn btn-info"> معاينة <i class="fa fa-eye position-right"></i></button>-->
                          <button type="reset" class="btn btn-danger"> مسح الحقول <i class="icon-refresh position-right"></i></button>
                        </div>
                      </div>
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



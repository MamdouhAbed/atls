
    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
              </li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dtableAdv">الإعلانات</a>
              </li>
              <li class="breadcrumb-item active">إضافة إعلان
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
					<h4 class="card-title">إضافة إعلان</h4>
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
                      <form class="form" novalidate="" />
                      <div class="form-body">
                        <div class="row">
                          <label class="col-md-2 text-xs-right">رقم الاعلان:</label>
                          <div class="col-md-2">
                            <div class="form-group">
                              <div class="controls">
                              <input type="number" id="issueinput1" class="form-control" placeholder="رقم الاعلان" required="" data-validation-required-message="أدخـل رقم الاعلان" name="issuetitle" data-toggle="tooltip" data-trigger="hover"  data-title="رقم الاعلان" />
                            </div></div>
                          </div>


                          <label class="col-md-2 text-xs-right">اسم الاعلان:</label>
                          <div class="col-md-5 ">
                            <div class="form-group">
                              <div class="controls">
                              <input type="text" id="issueinput2" class="form-control" placeholder="اسم الاعلان" required="" data-validation-required-message="أدخـل اسم الاعلان"  data-toggle="tooltip" data-trigger="hover"  data-title="اسم الاعلان" />
                            </div></div>
                          </div>
                        </div>

                        <div class="row">
                          <label class="col-md-2 text-xs-right" >صورة الاعلان:</label>
                          <div class="col-md-5">
                            <div class="form-group">
                              <div class="controls">
                          <input type="text" id="issueinput3" class="form-control" name="comments" placeholder="صورة الاعلان" required="" data-validation-required-message="أدخـل الصورة" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="صورة الاعلان"/>
                        </div></div></div>

                            <label class="col-md-2 text-xs-right" >الأبعاد:</label>
                            <div class="col-md-2">
                                <div class="form-group">
                                  <div class="controls">
                                    <input type="number" id="issueinput51" class="form-control" name="comments" placeholder="الطول * العرض" required="" data-validation-required-message="أدخـل الأبعاد" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="الأبعاد"/>
                                </div></div></div>

                          </div>

                          <div class="row">
                              <label class="col-md-2 text-xs-right" >رابط الاعلان:</label>
                              <div class="col-md-5">
                                  <div class="form-group">
                                    <div class="controls">
                                      <input type="text" id="issueinput4" class="form-control" name="comments" placeholder="رابط الاعلان" required="" data-validation-required-message="أدخـل الرابط" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="رابط الاعلان"/>
                                  </div></div></div>
                              <label class="col-md-2 text-xs-right">القالب:</label>
                              <div class="col-md-2">
                                  <div class="form-group">
                                    <div class="controls">
                                      <select id="issueinput5" name="priority" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="القالب" required="" >
                                          <option value="low" />قالب اعلاني أخبار رئيسية
                                          <option value="medium" />اعلان هيدر
                                          <option value="high" />بنر اعلاني اسفل بلوك الفيديو
                                          <option value="" />بنر اعلاني اسفل الهيدر
                                          <option value="" />بنر اعلاني اسفل الاخبار الرئيسية
                                          <option value="" />بنر اعلاني اسفل بلوك الصور
                                      </select>
                                  </div></div></div>

                          </div>


                          <div class="row ">
                              <div class="col-md-4 text-xs-right">
                                  <div class="form-group pb-1">
                                      <input type="checkbox" id="switchery" class="switchery" data-size="sm" checked="" />
                                      <label for="switchery" class="text-xs-right card-title ml-1">التفعيل</label>
                                  </div></div>
                          </div>




                      </div>

                      <div class="form-actions">
                        <div class="text-xs-right">
                          <button type="submit" class="btn btn-success"> تنفيذ <i class="icon-thumbs-up position-right"></i></button>
                          <button type="submit" class="btn btn-info"> معاينة <i class="fa fa-eye position-right"></i></button>
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

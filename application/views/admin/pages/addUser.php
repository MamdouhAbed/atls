
    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">الرئيسية</a>
              </li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/dtableUsers">المستخدمين</a>
              </li>
              <li class="breadcrumb-item active">إضافة مستخدم
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
					<h4 class="card-title"><i class="icon-user-plus2"></i> إضافة مستخدم</h4>
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
                        <div class="row">
                        <div class="col-md-6">
                        <ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" id="baseOnlyIcon-tab11" data-toggle="tab" href="#tabOnlyIcon11" aria-controls="tabOnlyIcon11" aria-expanded="true"><i class="icon-grid2"></i> بيانات المستخدم</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="baseOnlyIcon-tab12" data-toggle="tab" aria-controls="tabOnlyIcon12" href="#tabOnlyIcon12" aria-expanded="false"><i class="icon-head"></i>صلاحيات المستخدم</a>
                            </li>

                        </ul></div></div>
                        <form class="form" novalidate="" action="<?php echo base_url().'admin/saveUser'?>" method="post" enctype="multipart/form-data" />
                        <div class="tab-content px-1 pt-1">
                            <div role="tabpanel" class="tab-pane fade in active" id="tabOnlyIcon11" aria-expanded="false" aria-labelledby="baseOnlyIcon-tab11">
                              <br>
                              <div class="form-body">

                                    <div class="row">
                                        <label class="col-md-2 text-xs-right">اسم المستخدم:</label>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                              <div class="controls">
                                                <input type="text" id="issueinput2" name="username" class="form-control" placeholder="اسم المستخدم" required="" data-validation-required-message="أدخـل اسم المستخـدم"  data-toggle="tooltip" data-trigger="hover"  data-title="اسم المستخدم" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-md-2 text-xs-right">الايميل:</label>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                              <div class="controls">
                                                <input type="email" name="email" class="form-control" placeholder="الايميل" required="" data-validation-required-message="أدخـل الايميـل" data-toggle="tooltip" data-trigger="hover" data-title="الايميل"/>
                                            </div></div>
                                        </div>
                                    </div>
                                  <div class="row">
                                      <label class="col-md-2 text-xs-right" >اضافة صورة:</label>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <input type="file" accept="image/x-png,image/gif,image/jpeg"  name="userfile" id="filesToUpload" required class="form-control"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>
                                              </div></div>
                                      </div>

                                  </div>

                                    <div class="row">
                                        <label class="col-md-2 text-xs-right">كلمة المرور:</label>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                              <div class="controls">
                                                <input type="password" name="password" class="form-control" placeholder="كلمة المرور" required="" data-validation-required-message="أدخـل كلمة المـرور" data-toggle="tooltip" data-trigger="hover" data-title="كلمة المرور"/>
                                            </div></div>
                                        </div>
                                    </div>

                                    <!--<div class="row ">-->
                                        <!--&lt;!&ndash;<div class="col-md-6 col-sm-6">&ndash;&gt;-->
                                        <!--&lt;!&ndash;<fieldset>&ndash;&gt;-->
                                        <!--&lt;!&ndash;<input type="checkbox" id="input-17" checked="" />&ndash;&gt;-->
                                        <!--&lt;!&ndash;<label >التفعيل</label>&ndash;&gt;-->
                                        <!--&lt;!&ndash;</fieldset>&ndash;&gt;-->
                                        <!--&lt;!&ndash;</div>&ndash;&gt;-->
                                        <!--&lt;!&ndash;</div>&ndash;&gt;-->
                                      <!---->
                                        <!--&lt;!&ndash;<div class="col-md-6 text-xs-right">&ndash;&gt;-->
                                            <!--&lt;!&ndash;<div class="form-group pb-1">&ndash;&gt;-->
                                                <!--&lt;!&ndash;<input type="checkbox" id="switchery" class="switchery" data-size="sm" checked="" />&ndash;&gt;-->
                                                <!--&lt;!&ndash;<label for="switchery" class="text-xs-right card-title ml-1">التفعيل</label>&ndash;&gt;-->
                                            <!--&lt;!&ndash;</div></div>&ndash;&gt;-->
                                    <!--</div>-->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabOnlyIcon12" aria-labelledby="baseOnlyIcon-tab12" aria-expanded="false">
                              <br>
                              <div class="col-md-4">
                                    <h6 class="form-section"> الصلاحيات الرئيسية :</h6>
                                </div>
                              <div class="row icheck_minimal skin">
                                <div class="col-md-2">
                              <fieldset>
                                <input type="checkbox" id="input-1" name="admin" value="1"/>
                                <label for="input-1">مدير عام</label>
                              </fieldset>
                                  </div>
                                <div class="col-md-2">
                                  <fieldset>
                                    <input type="checkbox" id="input-2" name="normal" value="1"/>
                                    <label for="input-2">مشرف عام</label>
                                  </fieldset>
                                </div>
                                <div class="col-md-2">
                                  <fieldset>
                                    <input type="checkbox" id="input-3" />
                                    <label for="input-3">مشرف الصور</label>
                                  </fieldset>
                                </div>
                                <div class="col-md-2">
                                  <fieldset>
                                    <input type="checkbox" id="input-4" />
                                    <label for="input-4">مشرف الفيديو</label>
                                  </fieldset>
                                </div>
                                <div class="col-md-2">
                                  <fieldset>
                                    <input type="checkbox" id="input-5" />
                                    <label for="input-5">مشرف الصوتيات</label>
                                  </fieldset>
                                </div>
                                <div class="col-md-2">
                                  <fieldset>
                                    <input type="checkbox" id="input-6" />
                                    <label for="input-6">مشرف الاعلانات</label>
                                  </fieldset>
                                </div>
                              </div>
                              <br><br>

                              <div class="col-md-4">
                                <h6 class="form-section"> الصلاحيات على الأقسام :</h6>
                              </div>
                              <div class="row icheck_minimal skin">
                                <div class="col-md-2">
                                  <fieldset>
                                    <input type="checkbox" id="input-11" />
                                    <label for="input-11">الكل</label>
                                  </fieldset>
                                </div>
                                <div class="col-md-2">
                                  <fieldset>
                                    <input type="checkbox" id="input-12" />
                                    <label for="input-12">أخبار</label>
                                  </fieldset>
                                </div>
                                <div class="col-md-2">
                                  <fieldset>
                                    <input type="checkbox" id="input-13" />
                                    <label for="input-13">رياضة</label>
                                  </fieldset>
                                </div>
                                <div class="col-md-2">
                                  <fieldset>
                                    <input type="checkbox" id="input-14" />
                                    <label for="input-14">تقارير</label>
                                  </fieldset>
                                </div>
                                <div class="col-md-2">
                                  <fieldset>
                                    <input type="checkbox" id="input-15" />
                                    <label for="input-15">منوعات</label>
                                  </fieldset>
                                </div>
                                <div class="col-md-2">
                                  <fieldset>
                                    <input type="checkbox" id="input-16" />
                                    <label for="input-16">أعداد المجلة</label>
                                  </fieldset><br>
                                </div>
                              </div>
                            </div>


                          <div class="form-actions">
                          <div class="text-xs-right">
                            <button type="submit" value="upload" class="btn btn-success"> تنفيذ <i class="icon-thumbs-up position-right"></i></button>
                            <button type="reset" class="btn btn-danger"> مسح الحقول <i class="icon-refresh position-right"></i></button>
                          </div></div>
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



<!-- main menu-->
<div id="main-menu" data-scroll-to-active="true" class="main-menu menu-dark menu-fixed menu-shadow menu-accordion">
    <!-- main menu header-->
    <div class="main-menu-header">
<!--        <input type="text" placeholder="بحث" class="menu-search form-control round" />-->
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" nav-item"><a href=" <?php echo base_url();?>admin/index "><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">الرئيسية</span></a>

            </li>
            <li class=" nav-item"><a href="#"><i class="icon-note"></i><span data-i18n="nav.templates.main" class="menu-title">الأخبار </span></a>


                <ul class="menu-content">
                    <li><a href=" <?php echo base_url();?>admin/dtableNews" data-i18n="nav.templates.vert.classic_menu" class="menu-item">قائمة الأخبار</a>
                    </li>
                    <li><a href="<?php echo base_url();?>admin/addNews" data-i18n="nav.templates.vert.compact_menu" class="menu-item">إضافة خبر</a>
                    </li>
                    <li><a href="#" data-i18n="nav.page_layouts.3_columns.main" class="menu-item">عاجل</a>
                        <ul class="menu-content">
                            <li><a href="<?php echo base_url();?>admin/dtableBreaknews" data-i18n="nav.templates.vert.content_menu" class="menu-item">قائمة الأخبار العاجلة </a>
                            </li>
                            <li><a href="<?php echo base_url();?>admin/addBreakNew" data-i18n="nav.templates.vert.content_menu" class="menu-item">إضافة خبر عاجل</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#" data-i18n="nav.page_layouts.main" class="menu-title"> أقسام الأخبار</a>
                        <ul class="menu-content">
                            <li><a href=" <?php echo base_url();?>admin/addSubDept " data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar" class="menu-item">إضافة تصنيف</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#" data-i18n="nav.page_layouts.3_columns.main" class="menu-item">شريط الاخبار</a>
                        <ul class="menu-content">
                            <li><a href="<?php echo base_url();?>admin/dtableTickerNew" data-i18n="nav.templates.vert.content_menu" class="menu-item">قائمة شريط الاخبار </a>
                            </li>
                    <li><a href="<?php echo base_url();?>admin/addTickerNew" data-i18n="nav.templates.vert.compact_menu" class="menu-item">إضافة خبر على الشريط</a>
                    </li>
                        </ul>
                    </li>
                </ul>



            </li>
            <!--<li class=" navigation-header"><span data-i18n="nav.category.layouts">Layouts</span><i data-toggle="tooltip" data-placement="right" data-original-title="Layouts" class="icon-ellipsis icon-ellipsis"></i>-->
            <!--</li>-->


<!--            <li class=" nav-item"><a href="#"><i class="icon-note"></i><span data-i18n="nav.templates.main" class="menu-title"> التعليقات</span></a>-->
<!--                <ul class="menu-content">-->
<!--                    <li><a href=" --><?php //echo base_url();?><!--admin/dtableComments " data-i18n="nav.horz_nav.horizontal_nav_mega_menu" class="menu-item">قائمة التعليقات</a>-->
<!--                    </li>-->
<!--                    </ul>-->
<!--            </li>-->

<!--            <li class=" nav-item"><a href="#"><i class="icon-note"></i><span data-i18n="nav.templates.main" class="menu-title"> الشهداء والأسرى</span></a>-->
<!--                <ul class="menu-content">-->
<!--                    <li><a href=" --><?php //echo base_url();?><!--admin/dtableMartyre " data-i18n="nav.horz_nav.horizontal_nav_mega_menu" class="menu-item">قائمة الشهداء والأسرى</a>-->
<!--                    </li>-->
<!--                    <li><a href=" --><?php //echo base_url();?><!--admin/addMartyre " data-i18n="nav.horz_nav.horizontal_nav_mega_menu" class="menu-item">إضافة شهيد/أسير</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->

            <li class=" nav-item"><a href="#"><i class="icon-navicon2"></i><span data-i18n="nav.navbars.main" class="menu-title">الوسائط المتعددة</span></a>
                <ul class="menu-content">

                    <li><a href="#" data-i18n="nav.page_layouts.3_columns.main" class="menu-item">الصور</a>
                        <ul class="menu-content">
                            <li><a href=" <?php echo base_url();?>admin/dtableImages " data-i18n="nav.page_layouts.3_columns.left_sidebar" class="menu-item">إدارة الصور</a>
                            </li>
                            <li><a href=" <?php echo base_url();?>admin/addImages " data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar" class="menu-item">إضافة صور</a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="#" data-i18n="nav.page_layouts.3_columns_detached.main" class="menu-item">الفيديو</a>
                        <ul class="menu-content">
                            <li><a href=" <?php echo base_url();?>admin/dtableVideos " data-i18n="nav.page_layouts.3_columns_detached.detached_left_sidebar" class="menu-item">إدارة الفيديو</a>
                            </li>
                            <li><a href=" <?php echo base_url();?>admin/addVideo " data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar" class="menu-item">إضافة فيديو</a>
                            </li>
                        </ul>
                    </li>
<!--                    <li><a href="#" data-i18n="nav.page_layouts.3_columns.main" class="menu-item">انفوجرافيك</a>-->
<!--                        <ul class="menu-content">-->
<!--                            <li><a href=" --><?php //echo base_url();?><!--admin/dtableInfographic " data-i18n="nav.page_layouts.3_columns.left_sidebar" class="menu-item">إدارة الانفوجرافيك</a>-->
<!--                            </li>-->
<!--                            <li><a href="--><?php //echo base_url();?><!--admin/addInfographic" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar" class="menu-item">إضافة انفوجرافيك</a>-->
<!--                            </li>-->
<!---->
<!--                        </ul>-->
<!--                    </li>-->
                    <li><a href="#" data-i18n="nav.page_layouts.3_columns.main" class="menu-item">كاريكاتير</a>
                        <ul class="menu-content">
                            <li><a href=" <?php echo base_url();?>admin/dtableCaricature " data-i18n="nav.page_layouts.3_columns.left_sidebar" class="menu-item">إدارة الكاريكاتير</a>
                            </li>
                            <li><a href="<?php echo base_url();?>admin/addCaricature" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar" class="menu-item">إضافة كاريكاتير</a>
                            </li>

                        </ul>
                    </li>



                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="icon-book"></i><span data-i18n="nav.vertical_nav.main" class="menu-title">الكُتب</span></a>
                <ul class="menu-content">
                    <li><a href=" <?php echo base_url();?>admin/dtableBooks " data-i18n="nav.vertical_nav.vertical_nav_static" class="menu-item">قائمة الكُتب</a>
                    </li>
                    <li><a href=" <?php echo base_url();?>admin/addBooks " data-i18n="nav.vertical_nav.vertical_nav_static" class="menu-item">إضافة كتاب</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="icon-quotes-right"></i><span data-i18n="nav.vertical_nav.main" class="menu-title">الاقتباسات</span></a>
                <ul class="menu-content">
                    <li><a href=" <?php echo base_url();?>admin/dtableQuotations " data-i18n="nav.vertical_nav.vertical_nav_static" class="menu-item">قائمة الاقتباسات</a>
                    </li>
                    <li><a href=" <?php echo base_url();?>admin/addQuotations " data-i18n="nav.vertical_nav.vertical_nav_static" class="menu-item">إضافة اقتباس</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="icon-news"></i><span data-i18n="nav.vertical_nav.main" class="menu-title">مواقع نتابعها</span></a>
                <ul class="menu-content">
                    <li><a href=" <?php echo base_url();?>admin/dtableFollowSites " data-i18n="nav.vertical_nav.vertical_nav_static" class="menu-item">قائمة المواقع </a>
                    </li>
                    <li><a href=" <?php echo base_url();?>admin/addFollowSites " data-i18n="nav.vertical_nav.vertical_nav_static" class="menu-item">إضافة موقع</a>
                    </li>

            <li><a href="#" data-i18n="nav.page_layouts.main" class="menu-title"> أقسام مواقع نتابعها</a>
                <ul class="menu-content">
                    <li><a href=" <?php echo base_url();?>admin/addSiteDept " data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar" class="menu-item">إضافة تصنيف</a>
                    </li>
                </ul>
            </li>
                </ul>
            </li>



            <li class=" nav-item"><a href="#"><i class="icon-pen"></i><span data-i18n="nav.vertical_nav.main" class="menu-title">الكُتاب</span></a>
                <ul class="menu-content">
                    <li><a href=" <?php echo base_url();?>admin/dtableAuthor " data-i18n="nav.vertical_nav.vertical_nav_static" class="menu-item">قائمة الكُتاب</a>
                    </li>
                    <li><a href=" <?php echo base_url();?>admin/addAuthor " data-i18n="nav.vertical_nav.vertical_nav_static" class="menu-item">إضافة كاتب</a>
                    </li>
                </ul>
            </li>


<!--            <li class=" nav-item"><a href=" --><?php //echo base_url();?><!--admin/addCurrency"><i class="icon-money"></i><span data-i18n="nav.dash.main" class="menu-title">إضافة أسعار العملات </span></a>-->
<!--            <li class=" nav-item"><a href=" --><?php //echo base_url();?><!--admin/addAds"><i class="icon-microphone"></i><span data-i18n="nav.dash.main" class="menu-title">إضافة إعلان  </span></a>-->

          <li class=" nav-item"><a href="#"><i class="icon-panorama_horizontal"></i><span data-i18n="nav.horz_nav.main" class="menu-title">الإعلانات</span></a>
                <ul class="menu-content">
                    <li><a href=" <?php echo base_url();?>admin/dtableBanner " data-i18n="nav.horz_nav.horizontal_nav_mega_menu" class="menu-item">قائمة الإعلانات</a>
                    </li>
                    <li><a href=" <?php echo base_url();?>admin/addAds " data-i18n="nav.horz_nav.horizontal_nav_fixed" class="menu-item">إضافة إعلان</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-upload"></i><span data-i18n="nav.horz_nav.main" class="menu-title">رفع الملفات</span></a>
                <ul class="menu-content">
                    <li><a href=" <?php echo base_url();?>admin/dtableFiles " data-i18n="nav.horz_nav.horizontal_nav_mega_menu" class="menu-item">قائمة الملفات المرفوعة</a>
                    </li>
                    <li><a href=" <?php echo base_url();?>admin/addFile " data-i18n="nav.horz_nav.horizontal_nav_fixed" class="menu-item">رفع ملف</a>
                    </li>
                </ul>
            </li>
            <?php if($this->session->userdata('role')==1){?>
            <li class=" nav-item"><a href="#"><i class="icon-head"></i><span data-i18n="nav.page_headers.main" class="menu-title">المستخدمين</span></a>
                <ul class="menu-content">
                    <li><a href=" <?php echo base_url();?>admin/dtableUsers " data-i18n="nav.page_headers.headers_breadcrumbs_basic" class="menu-item">قائمة المستخدمين</a>
                    </li>
                    <li><a href=" <?php echo base_url();?>admin/addUser " data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item">إضافة مستخدم</a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            <?php if($this->session->userdata('role')==1){?>
            <li class=" nav-item"><a href=" <?php echo base_url();?>admin/aboutUs"><i class="icon-panorama_horizontal"></i><span data-i18n="nav.dash.main" class="menu-title">من نحن </span></a>
                <?php } ?>
<!--            <li class=" nav-item"><a href="#"><i class="icon-cog3"></i><span data-i18n="nav.footers.main" class="menu-title">خيارات</span></a>-->
<!--                <ul class="menu-content">-->
<!---->
<!--                    <li><a href=" --><?php //echo base_url();?><!--admin/aboutUs " data-i18n="nav.footers.footer_dark" class="menu-item">من نحن</a>-->
<!--                    </li>-->
<!---->
<!--                </ul>-->
<!--            </li>-->
        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <div class="main-menu-footer footer-close">
        <div class="header text-xs-center"><a href="#" class="col-xs-12 footer-toggle"><i class="icon-ios-arrow-up"></i></a></div>
        <div class="content">

            <div class="actions"><a href="<?php echo base_url();?>admin/aboutUs" data-placement="top" data-toggle="tooltip" data-original-title="من نحن"><span aria-hidden="true" class="icon-cog3"></span></a><a href="<?php echo base_url();?>" data-placement="top" data-toggle="tooltip" data-original-title="الموقع"><span aria-hidden="true" class="icon-home"></span></a><a href="<?php echo base_url();?>admin/logout" data-placement="top" data-toggle="tooltip" data-original-title="تسجيل خروج"><span aria-hidden="true" class="icon-power3"></span></a></div>
        </div>
    </div>
    <!-- main menu footer-->
</div>
<!-- / main menu-->
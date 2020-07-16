<section class="breadcrumb" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <ul>
            <li><a href="<?php echo base_url();?>index.php"> الرئيسية </a> / </li>
            <li><a href="<?php echo base_url();?>category/<?php echo $Category->id; ?>"> <?php echo $Category->cat_name; ?></a></li>
            <li class="_active"> / عرض الخبر</li>
        </ul>
    </div>
</section>
<!--<section ondragstart="return false;" onselectstart="return false;"  oncontextmenu="return false;" onload="clearData();" onblur="clearData();"  class="blog">-->
<section class="blog">

    <div class="container">
        <div class="row" data-sticky_parent>
            <div class="col-md-10 col-md-offset-1" data-sticky_column>
                <div class="blog-title">
                <h4 class="blog-caption"><?php echo $Post->caption; ?></h4>
                <h2><?php echo $Post->title; ?></h2>
                </div>
                <?php if($Post_img==null) {
                    ?>
                    <img src="<?php echo base_url(thumb($Post->img,945,462)); ?>" alt="" class="img-responsive post-img1">
                    <?php
                }
                ?>
                <?php if($Post_img!=null) {
                ?>
                <div dir="rtl" class="slider-blog">
                    <div class="item active">
                    <a data-fancybox="gallery-post" href="<?php echo base_url();?><?php echo $Post->img; ?>"><img src="<?php echo base_url(thumb($Post->img,845,413)); ?>" alt="<?php echo $Post->title;?>" class="img-responsive"></a>
                    </div>
                    <?php
                    foreach ($Post_img as $post_img)
                    {?>
                    <div class="item">
                        <a data-fancybox="gallery-post" href="<?php echo base_url();?><?php echo $post_img->name; ?>"><img src="<?php echo base_url(thumb($post_img->name,845,413)); ?>" alt="<?php echo $Post->title;?>" class="img-responsive"></a>
                    </div>
                    <?php }
                    ?>
                </div>
                    <?php
                }
                ?>

                <div class="author-blog" <?php if ($Authors==null)  {?> hidden <?php }?>>
                    <?php
                    foreach ($Authors as $authors){?>
                    <span class="img-author-blog"><img src="<?php echo base_url(thumb($authors->img_author,57,57)); ?>" alt=""></span>
                    <?php } ?>
                    <hr>
                    <span class="author_name">
                        <span>بقلــم: </span>
                        <?php
                        foreach ($Authors as $authors){?>
                        <?php echo $authors->name_author; ?> <i class="slash">/</i>
                <?php } ?>
                        </span>
                </div>

                <div class="rv-post-meta">
                    <div class="rv-margin-tiny-bottom date1">
                        <i class="rv-inline rv-margin-tiny-right rv-icon" rv-icon="icon: calendar">
                            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" ratio="1"> <path d="M 2,3 2,17 18,17 18,3 2,3 Z M 17,16 3,16 3,8 17,8 17,16 Z M 17,7 3,7 3,4 17,4 17,7 Z"></path> <rect width="1" height="3" x="6" y="2"></rect> <rect width="1" height="3" x="13" y="2"></rect></svg>
                        </i>
                        <small class="rv-inline" title="تاريخ الخبر"><time class="entry-date" datetime="2018-02-12T15:24:48+00:00"> <?php echo ArabicDate3 ($Post->created_at); ?></time></small>
                    </div>
                    <div class="rv-margin-tiny-bottom time1">
                        <i class="rv-inline rv-margin-tiny-right rv-icon" rv-icon="icon: clock" style="fill: black">
                            <svg width="20" height="20" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve"><g><path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30 S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/><path d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"/></g><g></svg>
                        </i>
                        <small class="rv-inline" title="وقت الخبر"><time class="entry-date" datetime="2018-02-12T15:24:48+00:00"><?php echo ArabicDate4 ($Post->created_at); ?></time></small>
                    </div>
                    <!--                            <div class="rv-margin-tiny-bottom">-->
                    <!--                                <i class="rv-inline rv-margin-tiny-right rv-icon" rv-icon="icon: folder">-->
                    <!--                                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" ratio="1"> <polygon fill="none" stroke="#000" points="9.5 5.5 8.5 3.5 1.5 3.5 1.5 16.5 18.5 16.5 18.5 5.5"></polygon></svg></i>-->
                    <!--                                <a class="rv-inline" href="#" title="مشاهدة أخبار التصنيف"><small>أخبار محلية</small></a>-->
                    <!--                            </div>-->
                    <div class="rv-margin-tiny-bottom view1">
                        <i class="rv-inline rv-margin-tiny-right rv-icon" rv-icon="icon: eye" style="fill: black">
                            <svg width="20" height="20" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 59.2 59.2" style="enable-background:new 0 0 59.2 59.2;" xml:space="preserve"><g><path d="M51.062,21.561c-11.889-11.889-31.232-11.889-43.121,0L0,29.501l8.138,8.138c5.944,5.944,13.752,8.917,21.561,8.917 s15.616-2.972,21.561-8.917l7.941-7.941L51.062,21.561z M49.845,36.225c-11.109,11.108-29.184,11.108-40.293,0l-6.724-6.724 l6.527-6.527c11.109-11.108,29.184-11.108,40.293,0l6.724,6.724L49.845,36.225z"/><path d="M28.572,21.57c-3.86,0-7,3.14-7,7c0,0.552,0.448,1,1,1s1-0.448,1-1c0-2.757,2.243-5,5-5c0.552,0,1-0.448,1-1	S29.125,21.57,28.572,21.57z"/><path d="M29.572,16.57c-7.168,0-13,5.832-13,13s5.832,13,13,13s13-5.832,13-13S36.741,16.57,29.572,16.57z M29.572,40.57 c-6.065,0-11-4.935-11-11s4.935-11,11-11s11,4.935,11,11S35.638,40.57,29.572,40.57z"/></g></svg></i>
                        <small title="عدد المشاهدات"><?php echo $Post->view_count; ?></small>
                    </div>
                    <div class="rv-margin-tiny-bottom share1">

                        <i class="rv-inline rv-margin-tiny-right rv-icon" rv-icon="icon: eye" style="fill: black">
                            <svg width="20" height="20" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 482.8 482.8" style="enable-background:new 0 0 482.8 482.8;" xml:space="preserve"><g><g><path d="M255.2,209.3c-5.3,5.3-5.3,13.8,0,19.1c21.9,21.9,21.9,57.5,0,79.4l-115,115c-21.9,21.9-57.5,21.9-79.4,0l-17.3-17.3
			c-21.9-21.9-21.9-57.5,0-79.4l115-115c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-115,115C8.7,322.7,0,343.6,0,365.8
			c0,22.2,8.6,43.1,24.4,58.8l17.3,17.3c16.2,16.2,37.5,24.3,58.8,24.3s42.6-8.1,58.8-24.3l115-115c32.4-32.4,32.4-85.2,0-117.6
			C269.1,204,260.5,204,255.2,209.3z"/><path d="M458.5,58.2l-17.3-17.3c-32.4-32.4-85.2-32.4-117.6,0l-115,115c-32.4,32.4-32.4,85.2,0,117.6c5.3,5.3,13.8,5.3,19.1,0
			s5.3-13.8,0-19.1c-21.9-21.9-21.9-57.5,0-79.4l115-115c21.9-21.9,57.5-21.9,79.4,0l17.3,17.3c21.9,21.9,21.9,57.5,0,79.4l-115,115
			c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4l115-115c15.7-15.7,24.4-36.6,24.4-58.8
			C482.8,94.8,474.2,73.9,458.5,58.2z"/></g></g></svg>
                        </i>
                        <small class="copy-link" title="اضغط لنسخ رابط الخبر">نسخ رابط الخبر:</small>

                        <small><input type="text" class="share-link" value="<?php echo base_url(uri_string()); ?>" /></small>
                    </div></div>
                    <div class="row">
                    <div class="col-md-1 fixed">
                    <p class="share-title">مشاركة</p>
                    <div class="social-share-blog"><a href="http://www.facebook.com/share.php?v=4&amp;u=<?php echo base_url(uri_string()); ?> &t=<?php echo $Post->title; ?> " onclick="window.open(this.href,'sharer', 'toolbar=0,status=0,width=626,height=436'); return false;" rel="nofollow" target="_blank" title="مشاركة عبر الفيسبوك" class="social-links__item_link"><i class="fa fa-facebook"></i></a></div>
                    <div class="social-share-blog"><a data-via='SweethemeDotCom' href='http://twitter.com/home?status= أطلس للدراسات - <?php echo $Post->title; ?>  <?php echo base_url(uri_string()); ?>' onclick="window.open(this.href,'sharer', 'toolbar=0,status=0,width=626,height=436'); return false;" title="مشاركة عبر تويتر" rel='nofollow' target='_blank'  class="social-links__item_link"><i class="fa fa-twitter"></i></a></div>
                    <div class="social-share-blog"><a href="https://plus.google.com/share?url=<?php echo base_url(uri_string()); ?>" rel='nofollow' title="مشاركة عبر قوقل بلس" target='_blank' onclick="window.open(this.href,'sharer', 'toolbar=0,status=0,width=626,height=436'); return false;" class="social-links__item_link"><i class="fa fa-google-plus"></i></a></div>
<!--                    <div class="social-share-blog"><a href="#"><i class="fa fa-telegram"></i></a></div>-->

                </div>
                <div class="col-md-11 blog-text">
                    <a href="<?php echo $Post->site_link; ?>" target="_blank" <?php if($Post->news_source_id==null){
                        ?> hidden    <?php
                    }
                    ?>><p class="news_source">المصدر: <?php echo $Post->site_name; ?></p></a>
                    <p><?php echo $Post->post_text; ?></p>
                    <div class="hashtag-atlas">
                        <?php
                        foreach ($Tags as $tags)
                        {?>
                            <div class="hashtag-item"><a href="<?php echo base_url()?>post_tags/<?php echo $tags->tag_id; ?>"><?php echo $tags->name2; ?></a></div>
                        <?php }
                        ?>
                    </div>

                    <div>
                        <?php
                        foreach ($Post_video as $post_video)
                        {?>
                            <div class="video-block-main" style="margin-top: 40px">
                                <iframe width="100%" height="420" src="https://www.youtube.com/embed/<?php echo $post_video->video;?>?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1" frameborder="0" allowfullscreen></iframe>
                            </div>
                        <?php }
                        ?>
                    </div>

                </div>

                    </div>
                </div>
        </div>
            </div>
</section>
<script>
    jQuery(document).ready(function(){
        var window_width = jQuery( window ).width();

        if (window_width < 768) {
            jQuery("#sidebar").trigger("sticky_kit:detach");
        } else {
            make_sticky();
        }

        jQuery( window ).resize(function() {

            window_width = jQuery( window ).width();

            if (window_width < 768) {
                jQuery("#sidebar").trigger("sticky_kit:detach");
            } else {
                make_sticky();
            }

        });
        function make_sticky() {
            jQuery(".fixed").stick_in_parent({

            });
        }
    });
</script>
    <?php if($Post->disable_copy==1){ ?>
<script type="text/javascript">

    $(document).bind('contextmenu', function(e) {
        e.stopPropagation();
        e.preventDefault();
        e.stopImmediatePropagation();
        return false;
    });
    $('.blog').ready(function(e) {
        e.dragstart();
        e.selectstart();
        e.contextmenu();
        return false;
    });
    $('.blog').ready(function(e) {
        e.load();
        e.blur();
        return clearData();
    });
    function disableselect(e){
        return false
    }
    function reEnable(){
        return true
    }
    document.onselectstart=new Function ("return false")
    if (window.sidebar){
        document.onmousedown=disableselect
        document.onclick=reEnable
    }
    //        $('.blog').attr(ondragstart="return false;" onselectstart="return false;"  oncontextmenu="return false;" onload="clearData();" onblur="clearData();");

    $(document).keydown(function (event) {
        if (event.keyCode == 123) { // Prevent F12
            return false;
        }
        if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
            return false;
        }
        if (event.ctrlKey && event.keyCode == 85) { // Prevent Ctrl+u
            return false;
        }
        if (event.ctrlKey && event.keyCode == 65) { // Prevent Ctrl+a
            return false;
        }
        if (event.ctrlKey && event.keyCode == 67) { // Prevent Ctrl+c
            return false;
        }
    });
</script>
    <?php } ?>



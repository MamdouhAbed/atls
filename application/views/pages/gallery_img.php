
<section class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="<?php echo base_url();?>index.php"> الرئيسية </a> / </li>
            <li><a href="<?php echo base_url();?>gallery_list"> الصور</a></li>
            <li class="_active"> / عرض الصور</li>
        </ul>
    </div>
</section>
<section class="img-gallary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2><?php echo $Gallery_Name->title; ?></h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a data-fancybox="gallery-img-list" href="<?php echo base_url();?><?php echo $Gallery_Name->img; ?>"><img src="<?php echo base_url(thumb($Gallery_Name->img,360,240)); ?>" alt="" class="img-responsive"></a>
            </div>
            <?php foreach ($Img_Gallery as $gallery)
            { ?>
            <div class="col-md-4 col-sm-6">
                <div class="default-blog img-details">
                    <a data-fancybox="gallery-img-list" data-caption="<?php echo $gallery->title; ?>" title="<?php echo $gallery->title; ?>" href="<?php echo base_url();?><?php echo $gallery->link; ?>">
                        <img class="img-responsive" src="<?php echo base_url(thumb($gallery->link,360,240)); ?>" alt="<?php echo $gallery->title; ?>">
                    </a>
                </div>
            </div>
            <?php
            } ?>
            </div>
        </div>
</section>

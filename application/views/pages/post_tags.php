
<section class="category-news">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="rv-main__headline"> #<?php echo $Tag_name[0]->name; ?> </h1>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
            </div>
            <div class="">
                <?php
                foreach ($News_Tags as $news_tag)
                {?>
                    <div class="col-md-3">
                        <!-- Post-->
                        <div class="post-module">
                            <a href="<?php echo base_url() ?>post/<?php echo $news_tag->id;?>">
                                <!-- Thumbnail-->
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(thumb($news_tag->img,285,210)); ?>" class="img-responsive"/>
                                </div>
                                <!-- Post Content-->
                                <div class="post-content">
                                    <!--                    <div class="category">Photos</div>-->
                                    <!--                    <h1 class="title">City Lights in New York</h1>-->
                                    <h4 class="sub_title"><?php echo $news_tag->title; ?></h4>
                                    <p class="description desc-brief"><?php echo $news_tag->post_brief; ?></p>
                                    <div class="description post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> <?php echo ArabicDate ($news_tag->created_at); ?> </span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="comments"><i class="fa fa-eye"></i>  <?php echo $news_tag->view_count; ?> </span></div>
                                </div></a>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
        <div class="wrap-pagination">
            <?php echo $pagination; ?>
        </div>
    </div>
</section>


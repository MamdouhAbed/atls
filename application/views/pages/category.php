
<section class="category-news">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="rv-main__headline"> <?php echo $category->cat_name; ?> </h1>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
            </div>
            <div class="">
                <?php
                foreach ($Category as $category)
                {?>
                <div class="col-md-3 col-sm-4">
                    <!-- Post-->
                    <div class="post-module">
                        <a href="<?php echo base_url() ?>post/<?php echo $category->id;?>">
                            <!-- Thumbnail-->
                            <div class="thumbnail">
                                <img src="<?php echo base_url(thumb($category->img,285,210)); ?>" class="img-responsive"/>
                            </div>
                            <!-- Post Content-->
                            <div class="post-content">
                                <!--                    <div class="category">Photos</div>-->
                                <!--                    <h1 class="title">City Lights in New York</h1>-->
                                <h4 class="sub_title"><?php echo $category->title; ?></h4>
                                <p class="description desc-brief"><?php echo $category->post_brief; ?></p>
                                <div class="description post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> <?php echo ArabicDate ($category->created_at); ?> </span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="comments"><i class="fa fa-eye"></i>  <?php echo $category->view_count; ?> </span></div>
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


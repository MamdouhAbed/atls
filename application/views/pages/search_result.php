
<section class="category-news">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="rv-main__headline">نتائج البحث عن <b class="" style="color: #cf202c"><< <?php echo $Keyword ?> >></b></h1>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
            </div>
            <?php
            if (count($Results)==0){

                echo "<img style=\"margin: 60px auto 100px auto;\" class=\"img-responsive\" src=\" assets/image/nofound1.png\" alt=\"لا تتوفر نتائج\">";

            } else

            foreach ($Results as $results)
            {?>
                    <div class="col-md-3 col-sm-4">
                        <!-- Post-->
                        <div class="post-module">
                            <a href="<?php echo base_url() ?>post/<?php echo $results->id;?>">
                                <!-- Thumbnail-->
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(thumb($results->img,285,210)); ?>" class="img-responsive"/>
                                </div>
                                <!-- Post Content-->
                                <div class="post-content">
                                    <!--                    <div class="category">Photos</div>-->
                                    <!--                    <h1 class="title">City Lights in New York</h1>-->
                                    <h4 class="sub_title"><?php echo $results->title; ?></h4>
                                    <p class="description desc-brief"><?php echo $results->post_brief; ?></p>
                                    <div class="description post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> <?php echo ArabicDate ($results->created_at); ?> </span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="comments"><i class="fa fa-eye"></i>  <?php echo $results->view_count; ?> </span></div>
                                </div></a>
                        </div>
                    </div>
                <?php }
                ?>
        </div>
        <div class="wrap-pagination">
            <?php echo $pagination;?>
        </div>
    </div>
</section>


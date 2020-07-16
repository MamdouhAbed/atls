
<section class="category-news">
<div class="media-album">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="rv-main__headline"> الصور </h1>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
            </div>
            <div class="">
                <?php
                foreach ($Gallery as $gallery)
                {?>
                <div class="col-md-4 col-sm-6">
                    <!-- Post-->
                    <div class="post-module">
                        <a href="<?php echo base_url();?>gallery_img/<?php echo $gallery->id;?>">
                            <!-- Thumbnail-->
                            <div class="thumbnail">
                                <img src="<?php echo base_url(thumb($gallery->img,285,210)); ?>" class="img-responsive"/>
                            </div>
                            <svg class="media-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 444.163 444.163" style="enable-background:new 0 0 444.163 444.163;" xml:space="preserve" width="50px" height="50px">
<g>
    <g>
        <g>
            <path d="M404.163,44.882h-288c-22,0-40,18-40,40v14l-46.4,12.8c-10.4,2.8-19.2,9.2-24.4,18.4c-5.2,9.2-6.8,20-4,30.4l56,208.8     c2.8,10.4,9.2,19.2,18.4,24.4c6,3.6,13.2,5.6,20,5.6c3.6,0,6.8-0.4,10.4-1.2l183.2-49.2h114.8c22,0,40-18,40-40v-224     C444.163,62.882,426.163,44.882,404.163,44.882z M102.163,382.482c-6.4,1.6-12.8,0.8-18.4-2.4c-5.6-3.2-9.6-8.4-11.2-14.8     l-56-208.8c-1.6-6.4-0.8-12.8,2.4-18.4s8.4-9.6,14.8-11.2l42.4-11.6v193.6c0,22,18,40,40,40h111.2L102.163,382.482z      M428.163,308.882c0,13.2-10.8,24-24,24h-288c-13.2,0-24-10.8-24-24v-224c0-13.2,10.8-24,24-24h288c13.2,0,24,10.8,24,24v113.6     l-38-38c-6.4-6.4-16-6.4-22.4,0l-91.6,91.2l-0.4-0.4l-46.4-46.4c-6-6-16.4-6-22.4,0l-39.2,39.2c-3.2,3.2-3.2,8,0,11.2     c3.2,3.2,8,3.2,11.2,0l39.2-39.2l46.4,46.4l0.4,0.4l-32.4,32.4c-3.2,3.2-3.2,8,0,11.2c1.6,1.6,3.6,2.4,5.6,2.4s4-0.8,5.6-2.4     l135.2-134.8l47.6,47.6c0.4,0.4,1.2,0.8,1.6,1.2V308.882z" fill="#FFFFFF"></path>
            <path d="M148.563,263.282l-8,8c-3.2,3.2-3.2,8,0,11.2c1.6,1.6,3.6,2.4,5.6,2.4s4-0.8,5.6-2.4l8-8c3.2-3.2,3.2-8,0-11.2     C156.563,260.082,151.763,260.082,148.563,263.282z" fill="#FFFFFF"></path>
            <path d="M204.163,132.882c0-22-18-40-40-40s-40,18-40,40s18,40,40,40S204.163,154.882,204.163,132.882z M164.163,156.882     c-13.2,0-24-10.8-24-24s10.8-24,24-24s24,10.8,24,24S177.363,156.882,164.163,156.882z" fill="#FFFFFF"></path>
        </g>
    </g>
</g>
</svg>
                            <!-- Post Content-->
                            <div class="post-content">
                                <div class="category"><?php echo $gallery->c+1;?> صور</div>
                                <!--                    <h1 class="title">City Lights in New York</h1>-->
                                <h4 class="sub_title"><?php echo $gallery->title; ?></h4>
                                <div class="description post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> <?php echo ArabicDate ($gallery->created_at); ?> </span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="comments"><i class="fa fa-eye"></i> <?php echo $gallery->view_count; ?> </span></div>
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
</div>
</section>

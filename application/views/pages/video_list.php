

<section class="category-news">
    <div class="media-album">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="rv-main__headline"> الفيديو </h1>
                    <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
                </div>
                <div class="">
                    <?php
                    foreach ($Video as $video)
                    {?>
                    <div class="col-md-4 col-sm-6">
                        <!-- Post-->
                        <div class="post-module">
                            <a href="<?php echo base_url();?>video_show/<?php echo $video->id;?>">
                                <!-- Thumbnail-->
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(thumb($video->imghome,285,210)); ?>"/>
                                </div>
                                <svg class="media-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="50px" height="50px">
<g>
    <path d="M36.537,28.156l-11-7c-0.308-0.195-0.698-0.208-1.019-0.033C24.199,21.299,24,21.635,24,22v14   c0,0.365,0.199,0.701,0.519,0.877C24.669,36.959,24.834,37,25,37c0.187,0,0.374-0.053,0.537-0.156l11-7   C36.825,29.66,37,29.342,37,29S36.825,28.34,36.537,28.156z M26,34.179V23.821L34.137,29L26,34.179z" fill="#FFFFFF"></path>
    <path d="M57,6H47H11H1C0.448,6,0,6.447,0,7v11v11v11v11c0,0.553,0.448,1,1,1h10h36h10c0.552,0,1-0.447,1-1V40V29V18V7   C58,6.447,57.552,6,57,6z M10,28H2v-9h8V28z M2,30h8v9H2V30z M12,40V29V18V8h34v10v11v11v10H12V40z M56,28h-8v-9h8V28z M48,30h8v9   h-8V30z M56,8v9h-8V8H56z M2,8h8v9H2V8z M2,50v-9h8v9H2z M56,50h-8v-9h8V50z" fill="#FFFFFF"></path>
</g>
</svg>
                                <div class="post-content">
                                    <!--                    <h1 class="title">City Lights in New York</h1>-->
                                    <h4 class="sub_title"><?php echo $video->title; ?></h4>
                                    <div class="description post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> <?php echo ArabicDate ($video->created_at); ?> </span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="comments"><i class="fa fa-eye"></i><a href="#"> <?php echo $video->view_count; ?> </a></span></div>
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


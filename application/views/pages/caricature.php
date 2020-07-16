

<section class="category-news">
    <div class="media-album">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="rv-main__headline"> كاريكتير </h1>
                    <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
                </div>
                <div class="">
                    <?php
                    foreach ($Caricature as $caricature)
                    {?>
                    <div class="col-md-4 col-sm-6">
                        <!-- Post-->
                        <div class="post-module">
                            <a data-fancybox="gallery-caricature-list" data-caption="<?php echo $caricature->name; ?>" title="" href="<?php echo base_url();?><?php echo $caricature->link; ?>">
                                <!-- Thumbnail-->
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(thumb($caricature->link,285,210)); ?>" class="img-responsive"/>
                                </div>
                                <svg class="media-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="50px" height="50px">
<g>
    <path d="M52.276,30.239c-1.164-1.164-3.057-1.162-4.221,0L32.664,45.63l-2.121,7.779l-0.519,0.519   c-0.388,0.388-0.389,1.014-0.006,1.405l-0.005,0.02l0.019-0.005c0.194,0.191,0.446,0.288,0.699,0.288   c0.256,0,0.512-0.098,0.707-0.293l0.52-0.52l7.778-2.121l15.39-15.391c1.164-1.164,1.164-3.058,0-4.222L52.276,30.239z    M34.973,46.15l10.243-10.243l4.243,4.243L39.216,50.393L34.973,46.15z M34.07,48.075l3.22,3.22l-4.428,1.208L34.07,48.075z    M53.711,35.896l-2.839,2.839l-4.243-4.242l2.839-2.839c0.385-0.385,1.01-0.384,1.394-0.001l2.85,2.85   C54.096,34.887,54.096,35.513,53.711,35.896z" fill="#FFFFFF"></path>
    <path d="M21.569,15.935c0-3.071-2.498-5.569-5.569-5.569s-5.569,2.498-5.569,5.569c0,3.07,2.498,5.568,5.569,5.568   S21.569,19.005,21.569,15.935z M12.431,15.935c0-1.968,1.601-3.569,3.569-3.569s3.569,1.602,3.569,3.569S17.968,19.503,16,19.503   S12.431,17.902,12.431,15.935z" fill="#FFFFFF"></path>
    <path d="M6.25,39.026C6.447,39.251,6.723,39.365,7,39.365c0.234,0,0.47-0.082,0.66-0.249l16.313-14.362l8.319,8.318   c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414l-2.825-2.824l9.191-10.065l8.262,7.344c0.414,0.368,1.045,0.33,1.412-0.083   c0.367-0.412,0.33-1.045-0.083-1.411l-9-8c-0.41-0.365-1.035-0.333-1.403,0.073l-9.794,10.727l-4.743-4.743   c-0.374-0.373-0.972-0.391-1.368-0.044L6.339,37.614C5.925,37.979,5.884,38.611,6.25,39.026z" fill="#FFFFFF"></path>
    <path d="M57,2.365H1c-0.552,0-1,0.447-1,1v44c0,0.553,0.448,1,1,1h26c0.552,0,1-0.447,1-1s-0.448-1-1-1H2v-42h54v24   c0,0.553,0.448,1,1,1s1-0.447,1-1v-25C58,2.813,57.552,2.365,57,2.365z" fill="#FFFFFF"></path>
</g>

</svg>

                                <!-- Post Content-->
                                <div class="post-content">
                                    <!--                    <h1 class="title">City Lights in New York</h1>-->
                                    <h4 class="sub_title"><?php echo $caricature->name; ?></h4>
                                    <div class="description post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> <?php echo ArabicDate ($caricature->created_at); ?> </span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="comments"><i class="fa fa-eye"></i> <?php echo $caricature->view_count; ?> </span></div>
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

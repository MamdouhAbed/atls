
<section class="main-news">
    <div class="container">
        <div class="row">
            <div class="top-news">
                <div class="col-md-12">
                <div dir="rtl" class="slider-top">
                    <?php foreach ($Slider_subject as $slider_subject)
                    { ?>
                    <div class="">
                    <div class="col-md-5 col-sm-5">
                <div class="main-news-title">
                    <a href="<?php echo base_url();?>category/<?php echo $slider_subject->category_id; ?>"><span class="cat-title"><?php echo $slider_subject->cat_name; ?></span></a>
                    <div class="main-news-caption2">
                    <p class="main-news-caption"><?php echo $slider_subject->caption; ?></p></div>
                    <a href="<?php echo base_url();?>post/<?php echo $slider_subject->id;?>"><h1 class="manshait"><?php echo $slider_subject->title; ?></h1></a>
                    <p class="main-news-date"><?php echo ArabicDate ($slider_subject->created_at); ?></p>
                    <a href="<?php echo base_url();?>post/<?php echo $slider_subject->id;?>"><span class="read-more">اقرأ المزيد<i class="fa fa-chevron-left" aria-hidden="true"></i></span></a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 p-r-0 top-img-header">
                <a href="<?php echo base_url();?>post/<?php echo $slider_subject->id;?>"><img src="<?php echo base_url(thumb($slider_subject->img,650,377)); ?>" alt="" class="" ></a>
            </div>
                        </div>
                        <?php
                    } ?>

                </div>
                </div>
                <img src="<?php echo base_url();?>assets/image/1x.png" class="bg-img-main-news">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="fixed-news-ticker">
<div class="news-ticker-title"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" width="20px" height="20px">
<g><g id="news">
        <path d="M29,0H7C5.343,0,4,1.342,4,3v2H3C1.343,5,0,6.342,0,8v20c0,2.209,1.791,4,4,4h24    c2.209,0,4-1.791,4-4V3C32,1.342,30.656,0,29,0z M30,28c0,1.102-0.898,2-2,2H4c-1.103,0-2-0.898-2-2V8c0-0.552,0.448-1,1-1h1v20    c0,0.553,0.447,1,1,1s1-0.447,1-1V3c0-0.552,0.448-1,1-1h22c0.551,0,1,0.448,1,1V28z" fill="#ffffff"/>
        <path d="M19.498,13.005h8c0.277,0,0.5-0.224,0.5-0.5s-0.223-0.5-0.5-0.5h-8c-0.275,0-0.5,0.224-0.5,0.5    S19.223,13.005,19.498,13.005z" fill="#ffffff"/>
        <path d="M19.498,10.005h8c0.277,0,0.5-0.224,0.5-0.5s-0.223-0.5-0.5-0.5h-8c-0.275,0-0.5,0.224-0.5,0.5    S19.223,10.005,19.498,10.005z" fill="#ffffff"/>
        <path d="M19.498,7.005h8c0.277,0,0.5-0.224,0.5-0.5s-0.223-0.5-0.5-0.5h-8c-0.275,0-0.5,0.224-0.5,0.5    S19.223,7.005,19.498,7.005z" fill="#ffffff"/>
        <path d="M16.5,27.004h-8c-0.276,0-0.5,0.225-0.5,0.5c0,0.277,0.224,0.5,0.5,0.5h8    c0.275,0,0.5-0.223,0.5-0.5C17,27.229,16.776,27.004,16.5,27.004z" fill="#ffffff"/>
        <path d="M16.5,24.004h-8c-0.276,0-0.5,0.225-0.5,0.5c0,0.277,0.224,0.5,0.5,0.5h8    c0.275,0,0.5-0.223,0.5-0.5C17,24.229,16.776,24.004,16.5,24.004z" fill="#ffffff"/>
        <path d="M16.5,21.004h-8c-0.276,0-0.5,0.225-0.5,0.5c0,0.277,0.224,0.5,0.5,0.5h8    c0.275,0,0.5-0.223,0.5-0.5C17,21.229,16.776,21.004,16.5,21.004z" fill="#ffffff"/>
        <path d="M27.5,27.004h-8c-0.277,0-0.5,0.225-0.5,0.5c0,0.277,0.223,0.5,0.5,0.5h8    c0.275,0,0.5-0.223,0.5-0.5C28,27.229,27.775,27.004,27.5,27.004z" fill="#ffffff"/>
        <path d="M27.5,24.004h-8c-0.277,0-0.5,0.225-0.5,0.5c0,0.277,0.223,0.5,0.5,0.5h8    c0.275,0,0.5-0.223,0.5-0.5C28,24.229,27.775,24.004,27.5,24.004z" fill="#ffffff"/>
        <path d="M27.5,21.004h-8c-0.277,0-0.5,0.225-0.5,0.5c0,0.277,0.223,0.5,0.5,0.5h8    c0.275,0,0.5-0.223,0.5-0.5C28,21.229,27.775,21.004,27.5,21.004z" fill="#ffffff"/>
        <path d="M27.5,15.004h-19c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5h19c0.275,0,0.5-0.224,0.5-0.5    S27.775,15.004,27.5,15.004z" fill="#ffffff"/>
        <path d="M27.5,18.004h-19c-0.276,0-0.5,0.225-0.5,0.5c0,0.277,0.224,0.5,0.5,0.5h19    c0.275,0,0.5-0.223,0.5-0.5C28,18.229,27.775,18.004,27.5,18.004z" fill="#ffffff"/>
        <path d="M9,13h7c0.553,0,1-0.447,1-1V5.004c0-0.553-0.447-1-1-1H9c-0.553,0-1,0.447-1,1V12    C8,12.552,8.447,13,9,13z M10,6h5v5h-5V6z" fill="#ffffff"/>
    </g></g>
</svg>شريط الأخبار</div>
<div class="news-ticker-text">
    <div class="row">
    <ul id="myUl">
<!--        <marquee direction="right" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()">-->
        <?php
        foreach (array_slice($last_news_ticker , 0, 50)as $last_n_ticker)

        {
        if($last_n_ticker->type==1){
            ?>
            <li class="news-item"><a href="<?php echo base_url();?>post/<?php echo $last_n_ticker->id;?>"><?php echo $last_n_ticker->text; ?> </a><img src="<?php echo base_url();?>assets/logo/logo_ticker.png" alt="" class="logo_ticker"></li>
        <?php }else{
        ?>
        <li class="news-item"><span><?php echo $last_n_ticker->text; ?></span><img src="<?php echo base_url();?>assets/logo/logo_ticker.png" alt="" class="logo_ticker"></li>
            <?php

        }
        }
        ?>
        <!--        </marquee>-->
    </ul>
</div>
</div>
    </div>
</section>
<section class="ads">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
            <a href="#" target="_blank"><img src="<?php echo base_url(thumb($Banner_place1->img,555,90)); ?>" alt="" class="img-responsive m-b-15"></a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <a href="#" target="_blank"><img src="<?php echo base_url(thumb($Banner_place2->img,555,90)); ?>" alt="" class="img-responsive"></a>
            </div>
        </div>
    </div>
</section>
<section class="news-classification">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="tab-classification">
                        <ul class="nav nav-pills icons col-md-12" id="pills-tab" role="tablist">
                            <li class="col-md-3 col-xs-3 active"><a class="nav-link reports tooltip-border" id="pills-reports-tab" data-toggle="pill" href="#pills-reports" role="tab" aria-controls="pills-sport" aria-expanded="true">
                                    <svg width="28px" height="28px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 488 488" style="enable-background:new 0 0 488 488;" xml:space="preserve" fill="#1c184a">
<g transform="translate(0 -540.36)"><g><g><path d="M448.9,664.26c0-0.2-0.1-0.3-0.1-0.5c0-0.1-0.1-0.3-0.1-0.4c0-0.2-0.1-0.3-0.2-0.5c0-0.1-0.1-0.3-0.1-0.4
				c-0.1-0.2-0.1-0.3-0.2-0.5c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.1-0.2-0.3-0.2-0.4
				c-0.1-0.1-0.2-0.3-0.2-0.4c-0.1-0.1-0.2-0.3-0.3-0.4c-0.1-0.1-0.2-0.2-0.2-0.3c0,0,0,0-0.1-0.1l-96.9-115.1
				c-0.1-0.1-0.1-0.1-0.2-0.2c-0.2-0.2-0.3-0.4-0.5-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.1-0.3-0.3-0.5-0.4
				c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.1-0.3-0.2-0.5-0.4c-0.1-0.1-0.2-0.1-0.3-0.2c-0.2-0.1-0.4-0.2-0.6-0.3
				c-0.1-0.1-0.2-0.1-0.3-0.2c-0.2-0.1-0.4-0.2-0.7-0.3c-0.1,0-0.2-0.1-0.3-0.1c-0.2-0.1-0.5-0.1-0.7-0.2c-0.1,0-0.2-0.1-0.3-0.1
				c-0.3-0.1-0.5-0.1-0.8-0.1c-0.1,0-0.2,0-0.3,0c-0.3,0-0.6,0-0.9,0c-0.1,0-0.1,0-0.2,0L49,540.36c-2.6,0-5.2,1-7.1,2.9
				c-1.9,1.9-2.9,4.4-2.9,7.1v468c0,5.5,4.5,10,10,10h390c5.5,0,10-4.5,10-10v-352.1c0-0.3,0-0.6,0-1l0,0c0-0.1,0-0.2,0-0.4
				S449,664.46,448.9,664.26z M352.1,578.46l65.3,77.6l-65.3-0.5V578.46z M429,1008.26H59v-447.9l273.1,0.7v104.4
				c0,5.5,4.4,10,9.9,10l87,0.6V1008.26z"/><path d="M121.3,733.26c0,5.5,4.5,10,10,10h225.4c5.5,0,10-4.5,10-10s-4.5-10-10-10H131.3C125.8,723.26,121.3,727.76,121.3,733.26
				z"/><path d="M356.7,784.26H131.3c-5.5,0-10,4.5-10,10s4.5,10,10,10h225.4c5.5,0,10-4.5,10-10S362.2,784.26,356.7,784.26z"/>
            <path d="M356.7,845.26H131.3c-5.5,0-10,4.5-10,10s4.5,10,10,10h225.4c5.5,0,10-4.5,10-10S362.2,845.26,356.7,845.26z"/>
            <path d="M356.7,906.26H131.3c-5.5,0-10,4.5-10,10s4.5,10,10,10h225.4c5.5,0,10-4.5,10-10S362.2,906.26,356.7,906.26z"/>
        </g></g></g></svg><p>تقاريــر</p></a></li>
                            <li class="col-md-3 col-xs-3"><a class="nav-link analysis" id="pills-analysis-tab" data-toggle="pill" href="#pills-analysis" role="tab" aria-controls="pills-rased" aria-expanded="true"><svg width="28px" height="28px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="#1c184a"><g><g><path d="M458.667,0H53.333C23.893,0.035,0.035,23.893,0,53.333v405.333C0.035,488.107,23.893,511.965,53.333,512h245.333v-21.333
			H53.333c-17.673,0-32-14.327-32-32V53.333c0-17.673,14.327-32,32-32h405.333c17.673,0,32,14.327,32,32v96H512v-96
			C511.965,23.893,488.107,0.035,458.667,0z"/></g></g><g><g>
             <rect x="42.667" y="85.333" width="426.667" height="21.333"/></g></g><g><g><rect x="53.333" y="42.667" width="21.333" height="21.333"/>
             </g></g><g><g><rect x="96" y="42.667" width="21.333" height="21.333"/> </g></g>
             <g><g><rect x="437.333" y="42.667" width="21.333" height="21.333"/></g></g> <g><g><rect x="373.333" y="405.333" width="21.333" height="42.667"/>
                                            </g></g> <g><g><path d="M384,437.333c-17.673,0-32,14.327-32,32v32h21.333v-32c0-5.891,4.776-10.667,10.667-10.667
			c5.891,0,10.667,4.776,10.667,10.667v32H416v-32C416,451.66,401.673,437.333,384,437.333z"/></g></g><g><g>
            <path d="M384,160c-70.692,0-128,57.308-128,128s57.308,128,128,128c70.661-0.076,127.924-57.339,128-128
			C512,217.308,454.693,160,384,160z M384,394.667c-58.91,0-106.667-47.756-106.667-106.667S325.09,181.333,384,181.333
			c58.884,0.065,106.602,47.783,106.667,106.667C490.667,346.91,442.91,394.667,384,394.667z"/></g></g><g> <g>
             <path d="M309.333,288h21.333c0.035-29.441,23.893-53.298,53.333-53.333v-21.333C342.785,213.386,309.386,246.785,309.333,288z"/>
             </g> </g><g><g><path d="M181.333,181.333H74.667v21.333h96V224h-96v21.333h106.667c5.891,0,10.667-4.776,10.667-10.667V192
			C192,186.109,187.224,181.333,181.333,181.333z"/> </g></g><g> <g><rect x="170.667" y="266.667" width="21.333" height="21.333"/>
             </g></g><g> <g> <rect x="128" y="266.667" width="21.333" height="21.333"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="74.667" y="309.333" width="117.333" height="21.333"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="170.667" y="352" width="21.333" height="21.333"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="128" y="352" width="21.333" height="21.333"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="74.667" y="394.667" width="117.333" height="21.333"/>
                                            </g>
                                        </g></svg>
                                    <p>تحليلات</p></a></li>
                            <li class="col-md-3 col-xs-3"><a class="nav-link article" id="pills-article-tab" data-toggle="pill" href="#pills-article" role="tab" aria-controls="pills-sport" aria-expanded="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="28px" height="28px" fill="#1c184a">
<g><g><path d="M477.488,125.53l-17.103-59.858c-0.982-3.441-4.128-5.814-7.708-5.814h-8.551c-3.58,0-6.725,2.373-7.708,5.814    l-17.102,59.858c-1.216,4.257,1.248,8.694,5.506,9.911c4.258,1.215,8.694-1.247,9.911-5.506l3.225-11.288h20.889l3.225,11.289    c1.006,3.521,4.216,5.816,7.705,5.816c0.729,0,1.471-0.101,2.206-0.311C476.238,134.224,478.704,129.787,477.488,125.53z     M442.537,102.614l5.864-20.523l5.864,20.523H442.537z" />
    </g></g><g><g><path d="M478.33,17.102h-46.402c0.13-3.659-0.966-7.267-3.209-10.328C425.564,2.469,420.693,0,415.355,0h-99.497    c-18.566,0-33.67,15.105-33.67,33.67v94.063c0,15.805,10.945,29.101,25.653,32.706v35.703c0,3.242,1.953,6.166,4.949,7.406    c0.992,0.41,2.033,0.61,3.067,0.61c2.086,0,4.137-0.815,5.67-2.348l40.406-40.407h8.877c-0.13,3.659,0.966,7.267,3.209,10.328    c3.155,4.305,8.026,6.775,13.363,6.775h90.947c18.566,0,33.67-15.105,33.67-33.67V50.772C512,32.207,496.895,17.102,478.33,17.102    z M375.242,145.37h-16.628c-2.126,0-4.165,0.844-5.668,2.348l-29.071,29.071v-23.402c0-4.427-3.589-8.017-8.017-8.017    c-9.725,0-17.637-7.912-17.637-17.637V33.67c0-9.725,7.912-17.637,17.637-17.637h99.497c0.088,0,0.27,0,0.431,0.218    c0.16,0.219,0.106,0.393,0.079,0.477l-27.483,87.031c-0.36-0.215-0.735-0.413-1.136-0.573    c-6.798-2.718-12.732-6.302-17.792-10.704c9-12.476,12.331-25.564,13.56-33.694h9.805c4.427,0,8.017-3.589,8.017-8.017    c0-4.427-3.589-8.017-8.017-8.017H366.63v-0.534c0-4.427-3.589-8.017-8.017-8.017s-8.017,3.589-8.017,8.017v0.534h-26.188    c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h42.318c-1.075,5.501-3.35,13.164-8.132,20.872    c-1.283-2.081-2.46-4.255-3.505-6.544c-1.839-4.029-6.597-5.8-10.623-3.961c-4.028,1.84-5.801,6.596-3.961,10.623    c2.051,4.492,4.504,8.695,7.321,12.596c-4.735,4.155-10.583,7.907-17.845,10.812c-4.111,1.645-6.11,6.31-4.466,10.421    c1.254,3.135,4.264,5.042,7.446,5.042c0.991,0,1.999-0.185,2.975-0.575c9.268-3.708,16.734-8.477,22.757-13.761    c6.486,5.704,14.058,10.345,22.595,13.761c0.788,0.314,1.595,0.49,2.399,0.548L375.242,145.37z M495.967,144.835    c0,9.725-7.912,17.637-17.637,17.637h-90.946c-0.088,0-0.27,0-0.431-0.219c-0.159-0.219-0.105-0.392-0.078-0.477l40.622-128.64    h50.832c9.725,0,17.637,7.912,17.637,17.637V144.835z"/>
                                            </g></g><g><g><path d="M328.274,411.931l-74.947-23.06c-3.836-1.18-6.413-4.67-6.413-8.684v-29.22l4.365-3.637    c7.842-6.535,13.049-15.686,14.662-25.765l0.998-6.24h6.162c13.851,0,25.119-11.268,25.119-25.119v-17.102    c0-12.298-8.886-22.554-20.574-24.699l7.798-48.738c3.541-22.133-2.768-44.607-17.312-61.662    c-14.543-17.055-35.739-26.839-58.153-26.839h-61.88c-22.415,0-43.611,9.781-58.154,26.837    c-14.543,17.055-20.853,39.531-17.312,61.662l7.798,48.738c-11.687,2.146-20.573,12.402-20.573,24.7v17.102    c0,13.851,11.268,25.119,25.119,25.119h6.162l0.998,6.24c1.613,10.08,6.82,19.229,14.662,25.765l4.365,3.638v29.219    c0,4.014-2.577,7.505-6.413,8.684l-74.947,23.06C11.978,417.417,0,433.634,0,452.285v34.596C0,500.732,11.268,512,25.119,512    H332.96c13.851,0,25.119-11.268,25.119-25.119v-34.596C358.079,433.634,346.101,417.417,328.274,411.931z M282.188,273.102v17.102    c0,5.01-4.076,9.086-9.086,9.086h-3.597l5.606-35.042C279.158,265.167,282.188,268.784,282.188,273.102z M84.977,299.29    c-5.01,0-9.086-4.076-9.086-9.086v-17.102c0-4.318,3.03-7.935,7.075-8.854l5.607,35.042H84.977z M88.467,197.133    c-2.799-17.49,2.187-35.25,13.679-48.728c11.493-13.477,28.242-21.207,45.954-21.207h61.88c17.712,0,34.461,7.729,45.954,21.207    c11.492,13.477,16.479,31.238,13.68,48.728l-8.135,50.85h-6.785c-0.263,0-0.484-0.188-0.527-0.447l-6.169-37.017    c-1.337-8.021-8.21-13.843-16.342-13.843H126.427c-8.132,0-15.005,5.822-16.342,13.844l-6.169,37.016    c-0.044,0.259-0.265,0.447-0.527,0.447h-6.785L88.467,197.133z M107.969,319.031l-8.802-55.014h4.22    c8.132,0,15.005-5.822,16.342-13.844l6.169-37.016c0.044-0.259,0.265-0.447,0.527-0.447h105.228c0.263,0,0.484,0.188,0.527,0.447    l6.169,37.017c1.337,8.021,8.21,13.843,16.342,13.843h4.22l-6.161,38.51c-1.87,2.104-21.343,22.417-73.71,22.417    c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017c33.609,0,55.601-7.707,69.003-15.148    c-1.617,3.519-4.006,6.665-7.027,9.183l-34.32,28.6c-3.163,2.636-7.173,4.087-11.291,4.087h-32.732    c-4.117,0-8.128-1.452-11.291-4.087l-34.32-28.6C112.2,330.958,108.969,325.282,107.969,319.031z M109.466,404.196    c10.606-3.263,17.732-12.911,17.732-24.008v-15.858l13.92,11.601c6.039,5.032,13.695,7.804,21.555,7.804h32.732    c7.861,0,15.516-2.772,21.555-7.804l13.92-11.602v15.858c0,11.097,7.126,20.745,17.732,24.008l4.047,1.245    c-28.422,43.606-66.2,54.402-73.639,56.15c-7.513-1.723-45.08-12.315-73.604-56.149L109.466,404.196z M59.858,495.967H25.119    c-5.01,0-9.086-4.076-9.086-9.086v-34.596c0-4.537,1.157-8.833,3.212-12.596l34.267,28.555c4.033,3.361,6.346,8.3,6.346,13.549    V495.967z M282.188,481.794v14.172H75.891v-14.172c0-10.023-4.416-19.451-12.115-25.866l-32.762-27.302    c1.123-0.529,2.289-0.997,3.505-1.371l55.007-16.924c35.591,57.965,86.007,66.991,88.194,67.355    c0.436,0.073,0.876,0.109,1.318,0.109s0.882-0.036,1.318-0.109c2.187-0.365,52.605-9.39,88.194-67.355l55.007,16.925    c1.216,0.374,2.381,0.842,3.505,1.371l-32.76,27.302C286.604,462.344,282.188,471.771,282.188,481.794z M342.046,486.881    c0,5.01-4.076,9.086-9.086,9.086h-34.739v-14.172c0-5.25,2.313-10.189,6.346-13.549l34.267-28.555    c2.055,3.762,3.212,8.058,3.212,12.596V486.881z"/>
                                            </g></svg>
                                    <p>ترجمات</p></a></li>
                            <li class="col-md-3 col-xs-3"><a class="nav-link opinian" id="pills-opinian-tab" data-toggle="pill" href="#pills-opinian" role="tab" aria-controls="pills-islamic" aria-expanded="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="28px" height="28px" fill="#1c184a">
<g><g><g> <path d="M199.2,384.424c-0.848-1.686-2.265-3.018-4-3.76l-53.12-22.984l-4.276-13.253C151.643,333.241,160,314.685,160,292v-16     v-48c0-2.122-0.844-4.156-2.344-5.656C142.713,209.702,123.555,203.153,104,204c-19.555-0.848-38.712,5.702-53.656,18.344     c-1.5,1.5-2.344,3.534-2.344,5.656v48v16c0,22.671,8.346,41.219,22.17,52.407l-4.282,13.273L12.84,380.664     c-1.735,0.742-3.152,2.074-4,3.76l-8,16C0.286,401.535-0.001,402.759,0,404v96h16v-94.112l5.848-11.704l48.163-20.861L96,399.312     V428h16v-28.688l25.987-25.987l48.165,20.859L192,405.888V500h16v-96c0.014-1.238-0.26-2.462-0.8-3.576L199.2,384.424z M104,220     c14.245-0.483,28.268,3.625,40,11.72v35.125c-4-1.052-8-3.053-8-6.845c0-4.418-3.582-8-8-8H80c-4.418,0-8,3.582-8,8     c0,3.792-4,5.792-8,6.845v-35.117C75.731,223.631,89.754,219.52,104,220z M64,292v-8.744c9.619-0.922,18.111-6.669,22.544-15.256     h34.912c4.433,8.587,12.925,14.334,22.544,15.256V292c0,22.144-10.48,48-40,48S64,314.144,64,292z M104,356     c7.043,0,13.627-1.21,19.635-3.467l3.054,9.466L104,384.688l-22.698-22.698l3.043-9.464C90.359,354.788,96.95,356,104,356z" />
            <rect x="40" y="460" width="16" height="40" />
            <rect x="152" y="460" width="16" height="40" />
            <path d="M503.2,384.424c-0.848-1.686-2.265-3.018-4-3.76l-53.12-22.984l-4.276-13.253C455.643,333.241,464,314.685,464,292v-16     v-48c0-2.122-0.844-4.156-2.344-5.656C446.713,209.702,427.555,203.153,408,204c-19.555-0.848-38.712,5.702-53.656,18.344     c-1.5,1.5-2.344,3.534-2.344,5.656v48v16c0,22.661,8.339,41.202,22.151,52.391l-4.287,13.289L316.8,380.664     c-1.735,0.742-3.152,2.074-4,3.76l-8,16c-0.54,1.114-0.814,2.338-0.8,3.576v96h16v-94.112l5.84-11.704l48.171-20.861L400,399.312     V428h16v-28.688l25.987-25.987l48.165,20.859L496,405.888V500h16v-96c0.014-1.238-0.26-2.462-0.8-3.576L503.2,384.424z M408,220     c14.245-0.483,28.268,3.625,40,11.72v35.125c-4-1.052-8-3.053-8-6.845c0-4.418-3.582-8-8-8h-48c-4.418,0-8,3.582-8,8     c0,3.792-4,5.792-8,6.845v-35.117C379.731,223.631,393.754,219.52,408,220z M368,292v-8.744     c9.619-0.922,18.111-6.669,22.544-15.256h34.912c4.433,8.587,12.925,14.334,22.544,15.256V292c0,22.144-10.48,48-40,48     C378.48,340,368,314.144,368,292z M408,356c7.043,0,13.627-1.21,19.635-3.467l3.054,9.466L408,384.688l-22.701-22.701     l3.034-9.465C394.35,354.786,400.945,356,408,356z" />
            <rect x="344" y="460" width="16" height="40" />
            <rect x="456" y="460" width="16" height="40" />
            <path d="M289.995,373.318l16.077,6.979l6.368-14.68l-18.32-7.936l-4.284-13.278C303.656,333.214,312,314.668,312,292v-16v-48     c0-2.122-0.844-4.156-2.344-5.656C294.713,209.702,275.555,203.153,256,204c-19.555-0.848-38.712,5.702-53.656,18.344     c-1.5,1.5-2.344,3.534-2.344,5.656v48v16c0,22.657,8.336,41.197,22.144,52.386l-4.296,13.318l-20.376,8.8l6.4,14.68l18.14-7.86     L248,399.312V428h16v-28.688L289.995,373.318z M256,220c14.245-0.483,28.268,3.625,40,11.72v35.125c-4-1.052-8-3.053-8-6.845     c0-4.418-3.582-8-8-8h-48c-4.418,0-8,3.582-8,8c0,3.792-4,5.792-8,6.845v-35.117C227.731,223.631,241.754,219.52,256,220z      M216,292v-8.744c9.619-0.922,18.111-6.669,22.544-15.256h34.912c4.433,8.587,12.925,14.334,22.544,15.256V292     c0,22.144-10.48,48-40,48S216,314.144,216,292z M256,356c7.057,0,13.653-1.215,19.671-3.479l3.048,9.449L256,384.688     l-22.702-22.702l3.031-9.466C242.347,354.786,248.943,356,256,356z" />
            <path d="M16,108h21.6l29.216,29.192c1.5,1.5,3.534,2.344,5.656,2.344c2.122,0,4.156-0.844,5.656-2.344L107.312,108H128V92h-24     c-2.122,0-4.156,0.844-5.656,2.344l-25.872,25.88l-25.888-25.88c-1.5-1.5-3.534-2.344-5.656-2.344H16V28h208v16h16V28     c0-8.837-7.163-16-16-16H16C7.163,12,0,19.164,0,28v64C0,100.837,7.163,108,16,108z" />
            <path d="M256,60h-96c-8.837,0-16,7.163-16,16v64c0,8.837,7.163,16,16,16h60.688l29.656,29.656c1.5,1.5,3.534,2.344,5.656,2.344     c2.122,0,4.156-0.844,5.656-2.344l29.328-29.328L368,156c8.837,0,16-7.163,16-16l-96.4,0.344c-2.102,0.015-4.114,0.857-5.6,2.344     l-26,26l-26.344-26.344c-1.5-1.5-3.534-2.344-5.656-2.344h-64V76h96V60z" />
            <path d="M496,28H288c-8.837,0-16,7.163-16,16v64c0,8.837,7.163,16,16,16h116.688l29.656,29.656c1.5,1.5,3.534,2.344,5.656,2.344     c2.122,0,4.156-0.844,5.656-2.344L475.312,124H496c8.837,0,16-7.163,16-16V44C512,35.164,504.837,28,496,28z M496,108h-24     c-2.122,0-4.156,0.844-5.656,2.344L440,136.688l-26.344-26.344c-1.5-1.5-3.534-2.344-5.656-2.344H288V44h208V108z"/>
            <rect x="312" y="68" width="128" height="16" />
            <rect x="216" y="100" width="32" height="16" />
            <rect x="456" y="68" width="16" height="16" />
            <rect x="184" y="100" width="16" height="16" />
            <rect x="104" y="52" width="16" height="16"/>
            <rect x="40" y="52" width="48" height="16"/>
        </g></g></g></svg>
                                    <p>آراء</p></a></li>
                        </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane tab-news fade active in" id="pills-reports" role="tabpanel" aria-labelledby="pills-reports-tab">
                            <div class="row tab-category">
                                <div class="col-md-5 col-sm-4 p-l-0">
                                    <?php
                                    $counter4=0;

                                    foreach ($Reports as $reports )

                                    {
                                    if ($counter4 < 1) {
                                    ?>
                                    <div class="entry-img">
                                        <a href="<?php echo base_url();?>post/<?php echo $reports->id;?>">
                                            <img src="<?php echo base_url(thumb($reports->img,351,375)); ?>" class="img-responsive tab-firstimg" alt="" >
                                        </a>
                                    </div>
                                    <h3 class="news-title"><a href="<?php echo base_url();?>post/<?php echo $reports->id;?>"><?php echo $reports->title; ?></a></h3>
                                    <?php }
                                    ?>
                                </div>
                                <div class="col-md-7 col-sm-8">
                                    <?php

                                    if($counter4>=1&&$counter4<4)
                                    {
                                    ?>
                                    <div class="mg-r-15">
                                        <div class="tab-news-left">
                                            <a href="<?php echo base_url();?>post/<?php echo $reports->id;?>">
                                                <img src="<?php echo base_url(thumb($reports->img,142,76)); ?>" class="img-responsive" alt="" >
                                                <h2 class="news-title-left"><?php echo $reports->title; ?></h2>
                                            </a>
                                        </div>
                                    </div>
                                    <?php }
                                    $counter4++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tab-news fade" id="pills-analysis" role="tabpanel" aria-labelledby="pills-analysis-tab">
                            <div class="row tab-category">
                                <div class="col-md-5 col-sm-4 p-l-0">
                                    <?php
                                    $counter4=0;

                                    foreach ($Analytics as $analytics )

                                    {
                                    if ($counter4 < 1) {
                                        ?>
                                        <div class="entry-img">
                                            <a href="<?php echo base_url();?>post/<?php echo $analytics->id;?>">
                                                <img src="<?php echo base_url(thumb($analytics->img,351,375)); ?>" class="img-responsive tab-firstimg" alt="" >
                                            </a>
                                        </div>
                                        <h3 class="news-title"><a href="<?php echo base_url();?>post/<?php echo $analytics->id;?>"><?php echo $analytics->title; ?></a></h3>
                                    <?php }
                                    ?>
                                </div>
                                <div class="col-md-7 col-sm-8">
                                    <?php

                                    if($counter4>=1&&$counter4<4)
                                    {
                                        ?>
                                        <div class="mg-r-15">
                                            <div class="tab-news-left">
                                                <a href="<?php echo base_url();?>post/<?php echo $analytics->id;?>">
                                                    <img src="<?php echo base_url(thumb($analytics->img,142,76)); ?>" class="img-responsive" alt="" >
                                                    <h2 class="news-title-left"><?php echo $analytics->title; ?></h2>
                                                </a>
                                            </div>
                                        </div>
                                    <?php }
                                    $counter4++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tab-news fade" id="pills-article" role="tabpanel" aria-labelledby="pills-article-tab">
                            <div class="row tab-category">
                                <div class="col-md-5 col-sm-4 p-l-0">
                                    <?php
                                    $counter4=0;

                                    foreach ($Hebrew as $hebrew )

                                    {
                                    if ($counter4 < 1) {
                                        ?>
                                        <div class="entry-img">
                                            <a href="<?php echo base_url();?>post/<?php echo $hebrew->id;?>">
                                                <img src="<?php echo base_url(thumb($hebrew->img,351,375)); ?>" class="img-responsive tab-firstimg" alt="" >
                                            </a>
                                        </div>
                                        <h3 class="news-title"><a href="<?php echo base_url();?>post/<?php echo $hebrew->id;?>"><?php echo $hebrew->title; ?></a></h3>
                                    <?php }
                                    ?>
                                </div>
                                <div class="col-md-7 col-sm-8">
                                    <?php

                                    if($counter4>=1&&$counter4<4)
                                    {
                                        ?>
                                        <div class="mg-r-15">
                                            <div class="tab-news-left">
                                                <a href="<?php echo base_url();?>post/<?php echo $hebrew->id;?>">
                                                    <img src="<?php echo base_url(thumb($hebrew->img,142,76)); ?>" class="img-responsive" alt="" >
                                                    <h2 class="news-title-left"><?php echo $hebrew->title; ?></h2>
                                                </a>
                                            </div>
                                        </div>
                                    <?php }
                                    $counter4++;
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane tab-news fade" id="pills-opinian" role="tabpanel" aria-labelledby="pills-opinian-tab">
                            <div class="row tab-category">
                                <div class="col-md-5 col-sm-4 p-l-0">
                                    <?php
                                    $counter4=0;

                                    foreach ($Opinians as $opinians )
                                    {
                                    if ($counter4 < 1) {
                                        ?>
                                        <div class="entry-img">
                                            <a href="<?php echo base_url();?>post/<?php echo $opinians->id;?>">
                                                <img src="<?php echo base_url(thumb($opinians->img,351,375)); ?>" class="img-responsive tab-firstimg" alt="" >
                                            </a>
                                        </div>
                                        <h3 class="news-title"><a href="<?php echo base_url();?>post/<?php echo $opinians->id;?>"><?php echo $opinians->title; ?></a></h3>
                                    <?php }
                                    ?>
                                </div>
                                <div class="col-md-7 col-sm-8">
                                    <?php

                                    if($counter4>=1&&$counter4<4)
                                    {
                                        ?>
                                        <div class="mg-r-15">
                                            <div class="tab-news-left">
                                                <a href="<?php echo base_url();?>post/<?php echo $opinians->id;?>">
                                                    <img src="<?php echo base_url(thumb($opinians->img,142,76)); ?>" class="img-responsive" alt="" >
                                                    <h2 class="news-title-left"><?php echo $opinians->title; ?></h2>
                                                </a>
                                            </div>
                                        </div>
                                    <?php }
                                    $counter4++;
                                    }
                                    ?>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 tab-ads">
                <img src="<?php echo base_url(thumb($Banner_place3->img,262,458)); ?>" alt="" class="img-responsive">
            </div>
        </div>
    </div>
</section>
<section class="multimedia">
    <div class="container">
        <div class="row mg-t-15">
            <div class="col-md-2 col-sm-4">
            <h1 class="rv-main__headline"> معرض الوسائط </h1>
            <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
            </div>
            <div class="col-md-10 col-sm-8">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"  class="active in"><a class="cat-ic" href="#media_image" aria-controls="media_image" role="tab" data-toggle="tab"><span class="icon_category">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 444.163 444.163" style="enable-background:new 0 0 444.163 444.163;" xml:space="preserve" width="30px" height="30px">
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
                    </span><span class="title-sub-cat">الصور</span></a></li>
                    <li role="presentation"><a class="cat-ic" href="#media_video" aria-controls="media_video" role="tab" data-toggle="tab"><span class="icon_category">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="30px" height="28px">
<g>
	<path d="M36.537,28.156l-11-7c-0.308-0.195-0.698-0.208-1.019-0.033C24.199,21.299,24,21.635,24,22v14   c0,0.365,0.199,0.701,0.519,0.877C24.669,36.959,24.834,37,25,37c0.187,0,0.374-0.053,0.537-0.156l11-7   C36.825,29.66,37,29.342,37,29S36.825,28.34,36.537,28.156z M26,34.179V23.821L34.137,29L26,34.179z" fill="#FFFFFF"></path>
	<path d="M57,6H47H11H1C0.448,6,0,6.447,0,7v11v11v11v11c0,0.553,0.448,1,1,1h10h36h10c0.552,0,1-0.447,1-1V40V29V18V7   C58,6.447,57.552,6,57,6z M10,28H2v-9h8V28z M2,30h8v9H2V30z M12,40V29V18V8h34v10v11v11v10H12V40z M56,28h-8v-9h8V28z M48,30h8v9   h-8V30z M56,8v9h-8V8H56z M2,8h8v9H2V8z M2,50v-9h8v9H2z M56,50h-8v-9h8V50z" fill="#FFFFFF"></path>
</g>
</svg>
                    </span><span class="title-sub-cat">الفيديو</span></a></li>
                    <li role="presentation" class=""><a class="cat-ic" href="#media_caricature" aria-controls="media_caricature" role="tab" data-toggle="tab"><span class="icon_category">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="30px" height="28px">
<g>
	<path d="M52.276,30.239c-1.164-1.164-3.057-1.162-4.221,0L32.664,45.63l-2.121,7.779l-0.519,0.519   c-0.388,0.388-0.389,1.014-0.006,1.405l-0.005,0.02l0.019-0.005c0.194,0.191,0.446,0.288,0.699,0.288   c0.256,0,0.512-0.098,0.707-0.293l0.52-0.52l7.778-2.121l15.39-15.391c1.164-1.164,1.164-3.058,0-4.222L52.276,30.239z    M34.973,46.15l10.243-10.243l4.243,4.243L39.216,50.393L34.973,46.15z M34.07,48.075l3.22,3.22l-4.428,1.208L34.07,48.075z    M53.711,35.896l-2.839,2.839l-4.243-4.242l2.839-2.839c0.385-0.385,1.01-0.384,1.394-0.001l2.85,2.85   C54.096,34.887,54.096,35.513,53.711,35.896z" fill="#FFFFFF"></path>
	<path d="M21.569,15.935c0-3.071-2.498-5.569-5.569-5.569s-5.569,2.498-5.569,5.569c0,3.07,2.498,5.568,5.569,5.568   S21.569,19.005,21.569,15.935z M12.431,15.935c0-1.968,1.601-3.569,3.569-3.569s3.569,1.602,3.569,3.569S17.968,19.503,16,19.503   S12.431,17.902,12.431,15.935z" fill="#FFFFFF"></path>
	<path d="M6.25,39.026C6.447,39.251,6.723,39.365,7,39.365c0.234,0,0.47-0.082,0.66-0.249l16.313-14.362l8.319,8.318   c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414l-2.825-2.824l9.191-10.065l8.262,7.344c0.414,0.368,1.045,0.33,1.412-0.083   c0.367-0.412,0.33-1.045-0.083-1.411l-9-8c-0.41-0.365-1.035-0.333-1.403,0.073l-9.794,10.727l-4.743-4.743   c-0.374-0.373-0.972-0.391-1.368-0.044L6.339,37.614C5.925,37.979,5.884,38.611,6.25,39.026z" fill="#FFFFFF"></path>
	<path d="M57,2.365H1c-0.552,0-1,0.447-1,1v44c0,0.553,0.448,1,1,1h26c0.552,0,1-0.447,1-1s-0.448-1-1-1H2v-42h54v24   c0,0.553,0.448,1,1,1s1-0.447,1-1v-25C58,2.813,57.552,2.365,57,2.365z" fill="#FFFFFF"></path>
</g>

</svg>

                    </span><span class="title-sub-cat">الكاريكاتير</span></a></li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="media_image">
            <div class="row mg-0">
                <?php foreach ($Gallery as $gallery)
                { ?>
            <div class="media-img portfolio-element">
                <a href="<?php echo base_url();?>gallery_img/<?php echo $gallery->id;?>">
                    <div class='img-hover'>
                        <h2><?php echo $gallery->title; ?></h2>
                        <p><span><?php echo $gallery->c+1;?></span> صورة </p>
                        <div class="media-date"><?php echo ArabicDate ($gallery->created_at); ?></div>
                    </div>
                <img src="<?php echo base_url(thumb($gallery->img,230,266)); ?>" alt="" class="img-responsive">
                </a>
        </div>
                    <?php
                } ?>

        </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="media_video">
            <div class="row mg-0">
                <?php foreach ($Video as $video)
                { ?>
            <div class="media-img portfolio-element">
                <a href="<?php echo base_url();?>video_show/<?php echo $video->id;?>">
                    <div class='img-hover'>
                        <h2><?php echo $video->title; ?></h2>
                        <div class="media-date"><?php echo ArabicDate ($video->created_at); ?></div>
                    </div>
                <img src="<?php echo base_url(thumb($video->imghome,230,266)); ?>" alt="" class="img-responsive">
                </a>
        </div>
                    <?php
                } ?>


        </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="media_caricature">
            <div class="row mg-0">
                <?php foreach ($Caricature as $caricature)
                { ?>
            <div class="media-img portfolio-element">
                <a href="<?php echo base_url();?><?php echo $caricature->link; ?>" data-fancybox="gallery-caricature-home" data-caption="<?php echo $caricature->name; ?>" title="">
                    <div class='img-hover'>
                        <h2><?php echo $caricature->name; ?></h2>
                        <div class="media-date"><?php echo ArabicDate ($caricature->created_at); ?></div>
                    </div>
                <img src="<?php echo base_url(thumb($caricature->link,230,266)); ?>" alt="" class="img-responsive">
                </a>
        </div>
                    <?php
                } ?>

        </div>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="studies">
    <div class="container">
<!--        <div class="row">-->
            <div class="">
<!--                <img src="--><?php //echo base_url();?><!--assets/image/studies.png" class="" alt="" >-->
                <h1 class="rv-main__headline"> دراسات </h1>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>

            </div>
            <div class="owl-carousel1">
                <?php foreach ($Studies as $studies)
                { ?>
            <div class="item studies-slider">
                <div class="entry-img">
                    <a href="<?php echo base_url();?>post/<?php echo $studies->id;?>">
                        <img src="<?php echo base_url(thumb($studies->img,357,231)); ?>" class="img-responsive" alt="" >
                    </a>
                </div>
                <h3 class="news-title"><a href="<?php echo base_url();?>post/<?php echo $studies->id;?>"><?php echo $studies->title; ?> </a></h3>
            </div>
                    <?php
                } ?>

            </div>
<!--        </div>-->
    </div>
</section>
<section class="books">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="last_book" href="<?php echo base_url();?>books"><h1 class="rv-main__headline"> آخر الإصدارات </h1>
                    <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
                </a>
                <h1 class="copy-book">للحصول على نسخة التواصل عبر الرقم 0592826767</h1>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="row">

                <div class="col-md-6 col-sm-6 book_details_r" >
                    <div dir="rtl" class="slider slider-for">
                        <?php foreach ($Books as $books)
                        { ?>
                        <div>
                            <span class="col-md-6 col-sm-6 col-xs-6 book-title p-r-0"><span class="dot"></span><h5>اسم الكتاب</h5><p><?php echo $books->title; ?></p></span>
                            <span class="col-md-6 col-sm-6 col-xs-6 book-title p-r-0"><span class="dot"></span><h5>تاريخ الإصدار</h5><p><?php echo $books->date_book; ?></p></span>
                            <span class="col-md-6 col-sm-12 col-xs-12 book-title p-r-0"><div><span class="dot"></span><h5><?php if (count(get_Authors_books($books->id))==1)  echo"الكاتب" ?><?php if (count(get_Authors_books($books->id))>1)  echo"الكتاب" ?></h5></div>
                            <?php
                                foreach (get_Authors_books($books->id) as $authors) {?>
                                    <div <?php if (count(get_Authors_books($books->id))==1)  { ?> class="book-author" <?php }?> <?php if (count(get_Authors_books($books->id))>1)  { ?> class="book-author2" <?php }?>>
                                        <img src="<?php echo base_url(thumb($authors->img_author,57,57)); ?>" alt="" <?php if (count(get_Authors_books($books->id))>1)  { ?> data-toggle="tooltip" data-placement="top" class="mg_left" title="<?php echo $authors->name_author; ?>" <?php } ?>>
                                    </div>
                                <?php
                                if (count(get_Authors_books($books->id))==1)  {?>
                                    <p class="author-name3"><?php echo $authors->name_author; ?><br><?php echo $books->center; ?></p>
                                <?php }?>
                                <?php }?>
                                </span>

                            <span class="col-md-6 col-sm-6 col-xs-12 book-title number-page p-r-0"><span class="dot"></span><h5>عدد الصفحات</h5><p><?php echo $books->page_number; ?></p></span>
                            <span class="col-md-11 col-sm-11 col-xs-12 book-title p-r-0"><span class="dot"></span><h5>وصف الكتاب</h5><div class="book-desc"><?php echo $books->desc_book; ?></div></span>
                        </div>
                            <?php
                        } ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div dir="rtl" class="slider slider-nav">
                        <?php foreach ($Books as $books)
                        { ?>
                        <div><img src="<?php echo base_url(thumb($books->img_book,172,259)); ?>" alt="" class="img-responsive img-books"></div>
                        <?php
                        } ?>
                    </div>
                </div>

                </div>

            </div>
        </div>
    </div>
</section>
<section class="seminars">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="rv-main__headline"> نـدوات </h1>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
            </div>

            <div class="col-md-6 col-sm-6 seminars-title">
                <a href="<?php echo base_url();?>post/<?php echo $Seminars->id;?>"><h1 class="manshait"><?php echo $Seminars->title; ?></h1></a>
                <p class="main-news-date-title">تاريخ عقد الندوة /</p>
                <p class="main-news-date"><?php echo ArabicDate ($Seminars->publish_date); ?></p>
                <p class="seminars-desc"><?php echo $Seminars->post_brief; ?></p>
            </div>
            <div class="col-md-6 col-sm-6 seminars-side-left">
                <div class="row">
                <div class="col-md-12 seminars-left ">
                    <div class="seminars-hover">
                    <a href="<?php echo base_url();?>post/<?php echo $Seminars->id;?>">
                        <img src="<?php echo base_url(thumb($Seminars->img,540,170)); ?>" alt="" class="img-responsive">
                        <div class="media-icon">
                        <svg class="media-icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 463.101 463.101" style="enable-background:new 0 0 463.101 463.101;" xml:space="preserve" width="50px" height="50px">
<g><g><path d="M451.2,42.401c-6.6,0-12,5.4-12,12v318.5c0,33.7-27.4,61-61,61H85c-33.7,0-61-27.4-61-61v-343.6h351.3v309    c0,6.6,5.4,12,12,12s12-5.4,12-12v-321c0-6.6-5.4-12-12-12H12c-6.6,0-12,5.4-12,12v355.5c0,46.9,38.1,85,85,85h293.1    c46.9,0,85-38.1,85-85v-318.4C463.2,47.801,457.8,42.401,451.2,42.401z" fill="#FFFFFF"/>
        <path d="M329.3,98.501c6.6,0,12-5.4,12-12s-5.4-12-12-12H67.7c-6.6,0-12,5.4-12,12s5.4,12,12,12H329.3z" fill="#FFFFFF"/>
        <path d="M329.3,319.101H67.7c-6.6,0-12,5.4-12,12s5.4,12,12,12h261.5c6.6,0,12-5.4,12-12S335.9,319.101,329.3,319.101z" fill="#FFFFFF"/>
        <path d="M329.3,380.601H109.2c-6.6,0-12,5.4-12,12s5.4,12,12,12h220.1c6.6,0,12-5.4,12-12S335.9,380.601,329.3,380.601z" fill="#FFFFFF"/>
        <path d="M51.7,140.401v129.8c0,6.6,5.4,12,12,12H194c6.6,0,12-5.4,12-12v-129.8c0-6.6-5.4-12-12-12H63.7    C57.1,128.401,51.7,133.801,51.7,140.401z M75.7,152.401H182v105.8H75.7V152.401z" fill="#FFFFFF"/>
        <path d="M335.7,140.401h-86.3c-6.6,0-12,5.4-12,12s5.4,12,12,12h86.3c6.6,0,12-5.4,12-12S342.4,140.401,335.7,140.401z" fill="#FFFFFF"/>
        <path d="M335.7,194.601h-86.3c-6.6,0-12,5.4-12,12s5.4,12,12,12h86.3c6.6,0,12-5.4,12-12S342.4,194.601,335.7,194.601z" fill="#FFFFFF"/>
        <path d="M347.7,264.201c0-6.6-5.4-12-12-12h-86.3c-6.6,0-12,5.4-12,12s5.4,12,12,12h86.3    C342.4,276.201,347.7,270.801,347.7,264.201z" fill="#FFFFFF"/>
    </g></g></svg><h3>التقرير</h3></div></a>
                </div></div>
                    <?php if($Post_video==null) {
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-6 seminars-left seminars-video" style="display: none">
                            <div class="seminars-hover">
                                <img src="https://img.youtube.com/vi/<?php echo $Post_video->video; ?>/mqdefault.jpg" alt="" class="img-responsive img-video">
                                <div class="media-icon">
                                    <div class="play-backdrop"></div>
                                    <div class="play-button">
                                        <svg class="play-circles" viewBox="0 0 152 152">
                                            <circle class="play-circle-01" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="343 343" cx="76" cy="76" r="72.7"/>
                                            <circle class="play-circle-02" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="309 309" cx="76" cy="76" r="65.5"/>
                                        </svg>
                                        <div class="play-perspective">
                                            <button class="play-close"></button>
                                            <div class="play-triangle">
                                                <div class="play-video">
                                                    <iframe width="540" height="370" src="https://www.youtube.com/embed/<?php echo $Post_video->video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div><h3>الفيديو</h3>
                                </div>
                            </div>
                        </div>
                    <?php if($Post_img!=null) {
                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-12 seminars-left seminars-img" style="padding: 0">
                            <div class="seminars-hover">
                                <a data-fancybox="gallery-seminars" data-caption="<?php echo $Seminars->title; ?>" title="<?php echo $Seminars->title; ?>" href="<?php echo base_url();?><?php echo $Post_img[0]->name; ?>">
                                    <img src="<?php echo base_url(thumb($Post_img[0]->name,540,170)); ?>" alt="" class="img-responsive image-img">
                                    <div class="media-icon">
                                        <svg class="media-icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="50px" height="50px">
<g><g><g><path d="M379.879,131.063c-28.418,0-51.537,23.12-51.537,51.537s23.119,51.537,51.537,51.537     c28.417,0,51.537-23.119,51.537-51.537C431.416,154.181,408.297,131.063,379.879,131.063z M379.879,214.137     c-17.39,0-31.537-14.147-31.537-31.537s14.147-31.537,31.537-31.537c17.389,0,31.537,14.147,31.537,31.537     C411.416,199.988,397.269,214.137,379.879,214.137z" fill="#FFFFFF"/>
            <path d="M380.23,451.181c-0.25-0.61-0.56-1.19-0.92-1.73c-0.36-0.55-0.78-1.06-1.24-1.52c-0.46-0.46-0.97-0.88-1.52-1.24     c-0.54-0.36-1.12-0.67-1.73-0.92c-0.6-0.25-1.23-0.45-1.87-0.57c-1.29-0.26-2.61-0.26-3.9,0c-0.64,0.12-1.27,0.32-1.87,0.57     c-0.61,0.25-1.19,0.56-1.73,0.92c-0.55,0.36-1.06,0.78-1.52,1.24c-0.46,0.46-0.88,0.97-1.24,1.52c-0.36,0.54-0.67,1.12-0.92,1.73     c-0.25,0.6-0.45,1.23-0.57,1.87c-0.13,0.64-0.2,1.3-0.2,1.95c0,0.65,0.07,1.31,0.2,1.95c0.12,0.64,0.32,1.27,0.57,1.87     c0.25,0.61,0.56,1.19,0.92,1.73c0.36,0.55,0.78,1.06,1.24,1.52c0.229,0.229,0.471,0.448,0.723,0.655     c0.255,0.208,0.521,0.405,0.797,0.585c0.54,0.36,1.12,0.67,1.73,0.92c0.6,0.25,1.23,0.45,1.87,0.57c0.64,0.13,1.3,0.2,1.95,0.2     c0.65,0,1.31-0.07,1.95-0.2c0.64-0.12,1.27-0.32,1.87-0.57c0.61-0.25,1.19-0.56,1.73-0.92c0.276-0.181,0.542-0.377,0.797-0.585     c0.253-0.207,0.494-0.426,0.723-0.655c0.46-0.46,0.88-0.97,1.24-1.52c0.36-0.54,0.67-1.12,0.92-1.73     c0.25-0.6,0.45-1.23,0.58-1.87c0.13-0.64,0.19-1.3,0.19-1.95s-0.06-1.31-0.19-1.95C380.68,452.41,380.48,451.78,380.23,451.181z" fill="#FFFFFF"/>
            <path d="M222.85,55.451c-0.25-0.6-0.56-1.18-0.92-1.73c-0.36-0.54-0.78-1.06-1.24-1.52c-0.46-0.46-0.97-0.88-1.52-1.24     c-0.54-0.36-1.12-0.67-1.73-0.92c-0.6-0.25-1.23-0.44-1.87-0.57c-1.29-0.26-2.61-0.26-3.9,0c-0.64,0.13-1.27,0.32-1.88,0.57     c-0.6,0.25-1.18,0.56-1.72,0.92c-0.55,0.36-1.06,0.78-1.52,1.24c-0.46,0.46-0.88,0.98-1.25,1.52c-0.36,0.55-0.66,1.13-0.91,1.73     c-0.25,0.6-0.45,1.23-0.57,1.87c-0.13,0.65-0.2,1.3-0.2,1.96c0,0.65,0.07,1.3,0.2,1.95c0.12,0.64,0.32,1.27,0.57,1.87     c0.25,0.6,0.55,1.18,0.91,1.73c0.37,0.54,0.79,1.06,1.25,1.52c0.46,0.46,0.97,0.88,1.52,1.24c0.54,0.36,1.12,0.67,1.72,0.92     c0.61,0.25,1.24,0.44,1.88,0.57c0.64,0.13,1.3,0.2,1.95,0.2c0.65,0,1.31-0.07,1.95-0.2c0.64-0.13,1.27-0.32,1.87-0.57     c0.61-0.25,1.19-0.56,1.73-0.92c0.55-0.36,1.06-0.78,1.52-1.24c0.46-0.46,0.88-0.98,1.24-1.52c0.36-0.55,0.67-1.13,0.92-1.73     c0.25-0.6,0.45-1.23,0.57-1.87c0.13-0.65,0.2-1.3,0.2-1.95c0-0.66-0.07-1.31-0.2-1.96C223.3,56.681,223.1,56.051,222.85,55.451z" fill="#FFFFFF"/>
            <path d="M456.128,49.318c-5.996-25.349-28.8-44.274-55.956-44.274H86.417C38.767,5.043,0,43.81,0,91.46v313.755     c0,31.161,24.917,56.595,55.872,57.468c5.996,25.349,28.8,44.274,55.956,44.274H454.49c31.711,0,57.51-25.799,57.51-57.51     v-75.458V106.785C512,75.625,487.083,50.191,456.128,49.318z M492,449.449c0,20.683-16.827,37.51-37.51,37.51H111.828     c-16.01,0-29.702-10.085-35.075-24.233c-1.569-4.13-2.435-8.603-2.435-13.277v-6.723v-46.329l114.725-194.524     c3.493-5.922,9.722-9.38,16.556-9.27c6.875,0.118,12.942,3.792,16.23,9.831l49.396,90.702l71.801,131.843     c1.814,3.332,5.247,5.219,8.791,5.219c1.616,0,3.255-0.393,4.774-1.22c4.85-2.642,6.641-8.715,4-13.565l-23.3-42.785     c10.23,0.472,20.292-2.841,28.305-9.488l44.971-37.306c7.212-5.983,17.861-5.72,24.769,0.613l2.348,2.152l20,18.333L492,378.389     V449.449z M492,351.257l-34.317-31.458l-20-15.229c-13.031-5.45-28.525-3.554-39.886,5.87l-44.971,37.306     c-4.946,4.104-11.404,5.762-17.716,4.549c-6.312-1.212-11.695-5.146-14.769-10.79l-31.552-57.936l-17.618-32.351v-0.001     l-31.777-58.35c-6.778-12.445-19.284-20.02-33.453-20.262c-14.165-0.222-26.926,6.901-34.125,19.107L74.317,357.027V106.785     c0-20.683,16.827-37.51,37.51-37.51h61.792c5.523,0,10-4.477,10-10s-4.477-10-10-10h-61.792c-31.711,0-57.51,25.799-57.51,57.51     v286.882v48.912C35.124,440.952,20,424.822,20,405.215V91.46c0-36.623,29.795-66.417,66.417-66.417h313.755     c16.01,0,29.702,10.085,35.075,24.233H253.619c-5.523,0-10,4.477-10,10c0,5.523,4.477,10,10,10h184.063l20,0.146     C476.876,71.048,492,87.178,492,106.785V351.257z" fill="#FFFFFF"/>
        </g></g></g></svg><h3>الصور</h3></div></a>
                                <div style="display: none;">
                                    <?php
                                    foreach ($Post_img as $post_img)
                                    {?>
                                        <a href="<?php echo base_url();?><?php echo $post_img->name; ?>" data-caption="<?php echo $Seminars->title; ?>" data-fancybox="gallery-seminars"></a>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php }
                        ?>
                        <?php
                    }
                    ?>
                    <?php if($Post_video!=null) {
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-6 seminars-left seminars-video">
                            <div class="seminars-hover">
                                <img src="https://img.youtube.com/vi/<?php echo $Post_video->video; ?>/mqdefault.jpg" alt="" class="img-responsive img-video">
                                <div class="media-icon">
                                    <div class="play-backdrop"></div>
                                    <div class="play-button">
                                        <svg class="play-circles" viewBox="0 0 152 152">
                                            <circle class="play-circle-01" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="343 343" cx="76" cy="76" r="72.7"/>
                                            <circle class="play-circle-02" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="309 309" cx="76" cy="76" r="65.5"/>
                                        </svg>
                                        <div class="play-perspective">
                                            <button class="play-close"></button>
                                            <div class="play-triangle">
                                                <div class="play-video">
                                                    <iframe width="540" height="370" src="https://www.youtube.com/embed/<?php echo $Post_video->video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div><h3>الفيديو</h3>
                                </div>
                            </div>
                        </div>
                    <?php if($Post_img!=null) {
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-6 seminars-left seminars-img">
                            <div class="seminars-hover">
                                <a data-fancybox="gallery-seminars" data-caption="<?php echo $Seminars->title; ?>" title="<?php echo $Seminars->title; ?>" href="<?php echo base_url();?><?php echo $Post_img[0]->name; ?>">
                                    <img src="<?php echo base_url(thumb($Post_img[0]->name,255,170)); ?>" alt="" class="img-responsive image-img">
                                    <div class="media-icon">
                                        <svg class="media-icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="50px" height="50px">
<g><g><g><path d="M379.879,131.063c-28.418,0-51.537,23.12-51.537,51.537s23.119,51.537,51.537,51.537     c28.417,0,51.537-23.119,51.537-51.537C431.416,154.181,408.297,131.063,379.879,131.063z M379.879,214.137     c-17.39,0-31.537-14.147-31.537-31.537s14.147-31.537,31.537-31.537c17.389,0,31.537,14.147,31.537,31.537     C411.416,199.988,397.269,214.137,379.879,214.137z" fill="#FFFFFF"/>
            <path d="M380.23,451.181c-0.25-0.61-0.56-1.19-0.92-1.73c-0.36-0.55-0.78-1.06-1.24-1.52c-0.46-0.46-0.97-0.88-1.52-1.24     c-0.54-0.36-1.12-0.67-1.73-0.92c-0.6-0.25-1.23-0.45-1.87-0.57c-1.29-0.26-2.61-0.26-3.9,0c-0.64,0.12-1.27,0.32-1.87,0.57     c-0.61,0.25-1.19,0.56-1.73,0.92c-0.55,0.36-1.06,0.78-1.52,1.24c-0.46,0.46-0.88,0.97-1.24,1.52c-0.36,0.54-0.67,1.12-0.92,1.73     c-0.25,0.6-0.45,1.23-0.57,1.87c-0.13,0.64-0.2,1.3-0.2,1.95c0,0.65,0.07,1.31,0.2,1.95c0.12,0.64,0.32,1.27,0.57,1.87     c0.25,0.61,0.56,1.19,0.92,1.73c0.36,0.55,0.78,1.06,1.24,1.52c0.229,0.229,0.471,0.448,0.723,0.655     c0.255,0.208,0.521,0.405,0.797,0.585c0.54,0.36,1.12,0.67,1.73,0.92c0.6,0.25,1.23,0.45,1.87,0.57c0.64,0.13,1.3,0.2,1.95,0.2     c0.65,0,1.31-0.07,1.95-0.2c0.64-0.12,1.27-0.32,1.87-0.57c0.61-0.25,1.19-0.56,1.73-0.92c0.276-0.181,0.542-0.377,0.797-0.585     c0.253-0.207,0.494-0.426,0.723-0.655c0.46-0.46,0.88-0.97,1.24-1.52c0.36-0.54,0.67-1.12,0.92-1.73     c0.25-0.6,0.45-1.23,0.58-1.87c0.13-0.64,0.19-1.3,0.19-1.95s-0.06-1.31-0.19-1.95C380.68,452.41,380.48,451.78,380.23,451.181z" fill="#FFFFFF"/>
            <path d="M222.85,55.451c-0.25-0.6-0.56-1.18-0.92-1.73c-0.36-0.54-0.78-1.06-1.24-1.52c-0.46-0.46-0.97-0.88-1.52-1.24     c-0.54-0.36-1.12-0.67-1.73-0.92c-0.6-0.25-1.23-0.44-1.87-0.57c-1.29-0.26-2.61-0.26-3.9,0c-0.64,0.13-1.27,0.32-1.88,0.57     c-0.6,0.25-1.18,0.56-1.72,0.92c-0.55,0.36-1.06,0.78-1.52,1.24c-0.46,0.46-0.88,0.98-1.25,1.52c-0.36,0.55-0.66,1.13-0.91,1.73     c-0.25,0.6-0.45,1.23-0.57,1.87c-0.13,0.65-0.2,1.3-0.2,1.96c0,0.65,0.07,1.3,0.2,1.95c0.12,0.64,0.32,1.27,0.57,1.87     c0.25,0.6,0.55,1.18,0.91,1.73c0.37,0.54,0.79,1.06,1.25,1.52c0.46,0.46,0.97,0.88,1.52,1.24c0.54,0.36,1.12,0.67,1.72,0.92     c0.61,0.25,1.24,0.44,1.88,0.57c0.64,0.13,1.3,0.2,1.95,0.2c0.65,0,1.31-0.07,1.95-0.2c0.64-0.13,1.27-0.32,1.87-0.57     c0.61-0.25,1.19-0.56,1.73-0.92c0.55-0.36,1.06-0.78,1.52-1.24c0.46-0.46,0.88-0.98,1.24-1.52c0.36-0.55,0.67-1.13,0.92-1.73     c0.25-0.6,0.45-1.23,0.57-1.87c0.13-0.65,0.2-1.3,0.2-1.95c0-0.66-0.07-1.31-0.2-1.96C223.3,56.681,223.1,56.051,222.85,55.451z" fill="#FFFFFF"/>
            <path d="M456.128,49.318c-5.996-25.349-28.8-44.274-55.956-44.274H86.417C38.767,5.043,0,43.81,0,91.46v313.755     c0,31.161,24.917,56.595,55.872,57.468c5.996,25.349,28.8,44.274,55.956,44.274H454.49c31.711,0,57.51-25.799,57.51-57.51     v-75.458V106.785C512,75.625,487.083,50.191,456.128,49.318z M492,449.449c0,20.683-16.827,37.51-37.51,37.51H111.828     c-16.01,0-29.702-10.085-35.075-24.233c-1.569-4.13-2.435-8.603-2.435-13.277v-6.723v-46.329l114.725-194.524     c3.493-5.922,9.722-9.38,16.556-9.27c6.875,0.118,12.942,3.792,16.23,9.831l49.396,90.702l71.801,131.843     c1.814,3.332,5.247,5.219,8.791,5.219c1.616,0,3.255-0.393,4.774-1.22c4.85-2.642,6.641-8.715,4-13.565l-23.3-42.785     c10.23,0.472,20.292-2.841,28.305-9.488l44.971-37.306c7.212-5.983,17.861-5.72,24.769,0.613l2.348,2.152l20,18.333L492,378.389     V449.449z M492,351.257l-34.317-31.458l-20-15.229c-13.031-5.45-28.525-3.554-39.886,5.87l-44.971,37.306     c-4.946,4.104-11.404,5.762-17.716,4.549c-6.312-1.212-11.695-5.146-14.769-10.79l-31.552-57.936l-17.618-32.351v-0.001     l-31.777-58.35c-6.778-12.445-19.284-20.02-33.453-20.262c-14.165-0.222-26.926,6.901-34.125,19.107L74.317,357.027V106.785     c0-20.683,16.827-37.51,37.51-37.51h61.792c5.523,0,10-4.477,10-10s-4.477-10-10-10h-61.792c-31.711,0-57.51,25.799-57.51,57.51     v286.882v48.912C35.124,440.952,20,424.822,20,405.215V91.46c0-36.623,29.795-66.417,66.417-66.417h313.755     c16.01,0,29.702,10.085,35.075,24.233H253.619c-5.523,0-10,4.477-10,10c0,5.523,4.477,10,10,10h184.063l20,0.146     C476.876,71.048,492,87.178,492,106.785V351.257z" fill="#FFFFFF"/>
        </g></g></g></svg><h3>الصور</h3></div></a>
                                <div style="display: none;">
                                    <?php
                                    foreach ($Post_img as $post_img)
                                    {?>
                                        <a href="<?php echo base_url();?><?php echo $post_img->name; ?>" data-caption="<?php echo $Seminars->title; ?>" data-fancybox="gallery-seminars"></a>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="quotations">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="rv-main__headline"> اقتباسات </h1>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
            </div>
            <div class="owl-carousel2">
                <?php foreach ($Quotations as $quotations)
                { ?>
                <div class="col-md-12 col-xs-12">
                    <div class="book-author"><img src="<?php echo base_url(thumb($quotations->img,111,111)); ?>" alt=""></div>
                    <div class="bg-quotations-text"><div class="quotations-author"><i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="15px" height="15px">
<g><g><path d="M374.45,332.463c-0.407-0.044-59.344,1.695-68.107-61.463c9.737-6.794,18.711-15.614,26.617-26.316    c15.38-20.82,25.29-46.938,28.82-75.189c1.213-1.097,2.217-2.462,2.893-4.071c6.387-15.215,9.626-31.461,9.626-48.289    C374.299,52.547,325.578,0,265.688,0c-15.663,0-30.859,3.608-45.211,10.733c-5.475,0.418-10.84,1.381-15.985,2.867    c-24.597,7.107-44.613,25.344-56.362,51.354c-11.406,25.254-13.654,54.983-6.328,83.712c1.548,6.069,3.516,12.033,5.85,17.731    c0.632,1.541,1.574,2.856,2.705,3.938c5.718,44.095,26.699,80.63,55.307,100.577c-8.79,63.265-67.706,61.509-68.112,61.553    c-42.382,1.438-76.425,36.341-76.425,79.067v88.941c0,6.367,5.161,11.528,11.528,11.528h101.231h164.227h101.233    c6.366,0,11.529-5.161,11.529-11.528v-88.941C450.874,368.804,416.834,333.9,374.45,332.463z M210.893,35.751    c4.207-1.216,8.65-1.937,13.206-2.142c1.691-0.076,3.344-0.523,4.843-1.311c11.671-6.132,24.035-9.241,36.747-9.241    c47.174,0,85.554,42.203,85.554,94.078c0,1.557-0.044,3.106-0.112,4.649c-9.15-9.292-21.863-15.067-35.902-15.067h-78.571    c-4.675,0-9.112-1.468-12.833-4.246c-3.177-2.371-5.633-5.558-7.1-9.216c-2.272-5.658-7.874-9.197-13.972-8.814    c-6.12,0.39-11.27,4.64-12.816,10.579c-4.553,17.496-13.632,33.612-26.088,46.681C152.259,94.002,173.176,46.648,210.893,35.751z     M200.863,235.14c-15.001-18.326-24.825-43.073-27.939-70.166c14.547-12.965,26.047-29.099,33.534-46.995    c1.136,1.048,2.329,2.039,3.575,2.97c7.736,5.773,16.942,8.826,26.626,8.826h78.571c11.117,0,20.699,6.668,24.975,16.211    c-0.001,0.082-0.013,0.16-0.013,0.242c0,65.078-37.76,118.023-84.174,118.023C235.818,264.252,216.229,253.913,200.863,235.14z     M227.352,282.233c9.139,3.307,18.752,5.076,28.666,5.076c9.835,0,19.444-1.712,28.643-5.015    c4.221,21.991,16.448,41.158,33.527,54.353l-60.535,86.208c-0.395,0.563-0.944,0.848-1.632,0.848c-0.687,0-1.236-0.286-1.63-0.847    l-60.55-86.228C210.921,323.418,223.144,304.237,227.352,282.233z M427.817,488.943h-89.704H173.886H84.183v-77.413    c0-30.922,25.157-56.079,56.079-56.079c0.42,0,18.971-0.451,33.629-7.112l61.629,87.766c4.684,6.672,12.348,10.655,20.5,10.655    c0,0,0,0,0.001,0c8.151,0,15.816-3.983,20.5-10.655l61.618-87.752c16.717,7.099,33.18,7.099,33.6,7.099    c30.922,0,56.078,25.157,56.078,56.079V488.943z" fill="#69d1f4"/>
    </g></g></g>
</svg></i><p> <?php echo $quotations->name; ?> </p></div><svg class="double-quot-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" width="14px" height="14px">
<g><g id="right_x5F_quote"><g><path d="M0,4v12h8c0,4.41-3.586,8-8,8v4c6.617,0,12-5.383,12-12V4H0z" fill="#1c184a"/>
            <path d="M20,4v12h8c0,4.41-3.586,8-8,8v4c6.617,0,12-5.383,12-12V4H20z" fill="#1c184a"/>
        </g></g></g></g></svg><div class="quotations-text"><?php echo $quotations->txt; ?></div><svg class="double-quot-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" width="14px" height="14px">
<g><g id="right_x5F_quote"><g><path d="M0,4v12h8c0,4.41-3.586,8-8,8v4c6.617,0,12-5.383,12-12V4H0z" fill="#1c184a"/>
            <path d="M20,4v12h8c0,4.41-3.586,8-8,8v4c6.617,0,12-5.383,12-12V4H20z" fill="#1c184a"/>
        </g></g></g></g></svg>
                    <svg class="quotation-opacity" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="80px" height="80px">
<g>
    <g>
        <path d="M133.928,149.771H115.73c2.738-20.265,13.942-21.282,19.098-21.752c5.15-0.469,9.094-4.787,9.094-9.959V88.135    c0-2.75-1.132-5.378-3.13-7.267c-1.999-1.889-4.681-2.864-7.432-2.717c-31.609,1.778-69.29,17.738-69.29,83.676v52.04    c0,8.687,7.067,15.754,15.755,15.754h54.103c8.687,0,15.754-7.067,15.754-15.754v-48.342    C149.682,156.838,142.615,149.771,133.928,149.771z M129.681,209.62H84.07v-47.794c0-46.01,20.461-58.859,39.852-62.487v10.515    c-13.392,4.076-28.804,16.113-28.804,49.915c0,5.523,4.478,10,10,10h24.563V209.62z" fill="#69d1f4"/>
    </g>
</g>
                        <g>
                            <g>
                                <path d="M444.774,255.997h-48.692c-8.369,0-15.179,6.809-15.179,15.179v43.508c0,8.37,6.81,15.179,15.179,15.179h15.237    c-2.546,16.341-11.485,17.155-16.139,17.579c-5.15,0.469-9.094,4.787-9.094,9.959v26.933c0,2.75,1.132,5.378,3.131,7.267    c1.861,1.76,4.321,2.733,6.869,2.733c0.187,0,0.374-0.005,0.562-0.016c28.879-1.625,63.305-16.182,63.305-76.307v-46.835    C459.953,262.806,453.143,255.997,444.774,255.997z M439.953,318.011c0,39.702-17.161,51.483-33.866,55.011v-7.494h-0.001    c12.207-3.952,25.923-15.179,25.923-45.665c0-5.523-4.478-10-10-10h-21.106v-33.866h39.05V318.011z" fill="#69d1f4"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M351.919,255.997h-48.692c-8.37,0-15.179,6.809-15.179,15.179v43.508c0,8.37,6.81,15.179,15.179,15.179h15.238    c-2.545,16.34-11.484,17.155-16.139,17.579c-5.15,0.469-9.094,4.787-9.094,9.959v26.933c0,2.75,1.132,5.378,3.13,7.267    c1.862,1.76,4.322,2.733,6.87,2.733c0.187,0,0.374-0.005,0.562-0.016c28.879-1.625,63.304-16.182,63.304-76.307v-46.835    C367.098,262.806,360.288,255.997,351.919,255.997z M347.098,318.011c0,39.702-17.16,51.483-33.865,55.011v-7.495    c12.207-3.953,25.923-15.18,25.923-45.665c0-5.523-4.478-10-10-10h-21.107v-33.865h39.049V318.011z" fill="#69d1f4"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M452.333,190.499h-31.906c-5.522,0-10,4.477-10,10s4.478,10,10,10h31.906c21.872,0,39.667,17.794,39.667,39.667v148.667    c0,21.872-17.795,39.667-39.667,39.667h-77c-2.652,0-5.195,1.054-7.071,2.929l-35.929,35.929v-28.859c0-5.523-4.478-10-10-10    h-26.666c-21.872,0-39.667-17.794-39.667-39.667V250.165c0-21.872,17.795-39.667,39.667-39.667H333c5.522,0,10-4.477,10-10    c0-5.523-4.478-10-10-10h-37.333c-17.272,0-32.845,7.384-43.751,19.152v-44.128c0-8.687-7.067-15.754-15.754-15.754h-18.197    c2.737-20.263,13.941-21.281,19.098-21.75c5.15-0.469,9.094-4.787,9.094-9.959V88.135c0-2.75-1.132-5.378-3.13-7.267    c-1.999-1.889-4.692-2.867-7.432-2.717c-31.61,1.778-69.29,17.739-69.29,83.676v52.04c0,8.687,7.067,15.754,15.755,15.754h54.103    c1.262,0,2.484-0.165,3.661-0.447c-2.465,6.534-3.823,13.606-3.823,20.992v148.667c0,32.9,26.767,59.667,59.667,59.667h16.666v43    c0,4.044,2.437,7.691,6.173,9.239c1.237,0.513,2.537,0.762,3.825,0.762c2.603,0,5.16-1.017,7.073-2.929l50.071-50.071h72.857    c32.9,0,59.667-26.766,59.667-59.667V250.165C512,217.265,485.233,190.499,452.333,190.499z M231.916,209.62h-45.611v-47.794    c0-46.009,20.461-58.859,39.852-62.487v10.516c-13.392,4.075-28.804,16.112-28.804,49.914c0,5.523,4.478,10,10,10h24.563V209.62z" fill="#69d1f4"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M386.069,193.429c-1.859-1.86-4.439-2.93-7.069-2.93s-5.21,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07    s1.069,5.21,2.93,7.07c1.861,1.86,4.44,2.93,7.07,2.93s5.21-1.07,7.069-2.93c1.86-1.86,2.931-4.44,2.931-7.07    S387.93,195.289,386.069,193.429z" fill="#69d1f4"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M313.069,158.099c-1.859-1.87-4.429-2.93-7.069-2.93c-2.63,0-5.21,1.06-7.07,2.93c-1.86,1.85-2.93,4.43-2.93,7.07    c0,2.63,1.069,5.21,2.93,7.07c1.861,1.86,4.44,2.93,7.07,2.93c2.64,0,5.21-1.07,7.069-2.93c1.86-1.86,2.931-4.44,2.931-7.07    C316,162.529,314.93,159.949,313.069,158.099z" fill="#69d1f4"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M248.573,0.499H67.427C30.247,0.499,0,30.746,0,67.926v171.896c0,37.18,30.247,67.427,67.427,67.427h21.118l58.353,58.352    c1.913,1.914,4.471,2.93,7.073,2.93c1.288,0,2.588-0.25,3.825-0.762c3.736-1.548,6.173-5.194,6.173-9.239v-51.281H199    c5.522,0,10-4.477,10-10s-4.478-10-10-10h-45.031c-5.522,0-10,4.477-10,10v37.139l-44.21-44.21    c-1.876-1.875-4.419-2.929-7.071-2.929H67.427C41.275,287.249,20,265.973,20,239.822V67.926c0-26.151,21.275-47.427,47.427-47.427    h181.146c26.152,0,47.427,21.276,47.427,47.427v59.239c0,5.523,4.478,10,10,10c5.522,0,10-4.477,10-10V67.926    C316,30.746,285.753,0.499,248.573,0.499z" fill="#69d1f4"/>
                            </g></svg>
                    </div>
                </div>
                    <?php
                } ?>
            </div>
        </div>
    </div>
</section>
<section class="seminars sites-follow">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="rv-main__headline"> مواقع نتابعها </h1>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
            </div>
            <div class="owl-carousel4" style="text-align: center">
                <?php foreach ($FollowSitesHome as $followsiteshome)
                { ?>
                <div class="follow-sites-slider"><a href="<?php echo $followsiteshome->link; ?>" target="_blank"><img src="<?php echo base_url($followsiteshome->img); ?>" class="img-responsive" alt=""><h4><?php echo $followsiteshome->title; ?></h4></a></div>
                <?php
                } ?>
            </div>

        </div>
    </div>
</section>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
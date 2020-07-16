<section class="follow_sites">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="rv-main__headline"> مواقع نتابعها </h1>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
            </div>
        </div>

            <div class="cat-sites">
                <div class="row">
                    <div class="site_title">
                <h3><?php echo $NewsSites[0]->category_name; ?></h3>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
                    </div>
                    <?php foreach ($NewsSites as $newssites)
                    { ?>
                <div class="col-md-2 col-sm-3 col-xs-6"><a href="<?php echo $newssites->link; ?>" target="_blank"><img class="follow-img" src="<?php echo base_url($newssites->img); ?>" alt=""><h4><?php echo $newssites->title; ?></h4></a></div>
                        <?php
                    } ?>

            </div>
            </div>
        <div class="cat-sites">
            <div class="row">
                <div class="site_title">
                <h3><?php echo $PaperSites[0]->category_name; ?></h3>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
                </div>
                    <?php foreach ($PaperSites as $papersites)
                { ?>
                    <div class="col-md-2 col-sm-3 col-xs-6"><a href="<?php echo $papersites->link; ?>" target="_blank"><img class="follow-img" src="<?php echo base_url($papersites->img); ?>" alt=""><h4><?php echo $papersites->title; ?></h4></a></div>
                    <?php
                } ?>

            </div>
        </div>
        <div class="cat-sites">
            <div class="row">
                <div class="site_title">
                <h3><?php echo $RadioSites[0]->category_name; ?></h3>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
                </div>
                    <?php foreach ($RadioSites as $radiosites)
                { ?>
                    <div class="col-md-2 col-sm-3 col-xs-6"><a href="<?php echo $radiosites->link; ?>" target="_blank"><img class="follow-img" src="<?php echo base_url($radiosites->img); ?>" alt=""><h4><?php echo $radiosites->title; ?></h4></a></div>
                    <?php
                } ?>

            </div>
        </div>
        <div class="cat-sites">
            <div class="row">
                <div class="site_title">
                <h3><?php echo $TvSites[0]->category_name; ?></h3>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
                </div>
                    <?php foreach ($TvSites as $tvsites)
                { ?>
                    <div class="col-md-2 col-sm-3 col-xs-6"><a href="<?php echo $tvsites->link; ?>" target="_blank"><img class="follow-img" src="<?php echo base_url($tvsites->img); ?>" alt=""><h4><?php echo $tvsites->title; ?></h4></a></div>
                    <?php
                } ?>

            </div>
        </div>
        <div class="cat-sites">
            <div class="row">
                <div class="site_title">
                <h3><?php echo $OfficialSites[0]->category_name; ?></h3>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
                </div>
                    <?php foreach ($OfficialSites as $officialsites)
                { ?>
                    <div class="col-md-2 col-sm-3 col-xs-6"><a href="<?php echo $officialsites->link; ?>" target="_blank"><img class="follow-img" src="<?php echo base_url($officialsites->img); ?>" alt=""><h4><?php echo $officialsites->title; ?></h4></a></div>
                    <?php
                } ?>

            </div>
        </div>
        <div class="cat-sites">
            <div class="row">
                <div class="site_title">
                <h3><?php echo $ResearchSites[0]->category_name; ?></h3>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
                </div>
                <?php foreach ($ResearchSites as $researchsites)
                { ?>
                    <div class="col-md-2 col-sm-3 col-xs-6"><a href="<?php echo $researchsites->link; ?>" target="_blank"><img class="follow-img" src="<?php echo base_url($researchsites->img); ?>" alt=""><h4><?php echo $researchsites->title; ?></h4></a></div>
                    <?php
                } ?>

            </div>
        </div>




    </div>
</section>
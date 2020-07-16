
<section class="books_archive">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="rv-main__headline"> الكتب </h1>
                <div class="rv-dividers rv-dividers--weight rv-dividers--primary rv-dividers--small"> <span></span></div>
            </div>
            <div class="">
                <?php
                foreach ($BooksArchive as $booksarchive)
                {?>
                    <div class="col-md-6 col-sm-6">
                        <div class="archive_bk">
                            <div class="col-md-12"> <p class="archive_bk_title"><?php echo $booksarchive->title; ?></p></div>
                            <div class="col-md-5 col-sm-5 col-xs-6">
                                <img src="<?php echo base_url(thumb($booksarchive->img_book,192,255)); ?>" alt="" class="img-responsive img-books">
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-6">
                                <?php
                                if (get_news_where_book($booksarchive->id)==null){
                                    ?>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <span class="dot"></span><h5 class="book-title">تاريخ الإصدار </h5><p><?php echo $booksarchive->date_book; ?></p>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 nopage">
                                            <span class="dot"></span><h5 class="book-title">عدد الصفحات </h5><p class="nopage_result"><?php echo $booksarchive->page_number; ?></p>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12"><div class=""><span class="dot"></span><h5 class="book-title"><?php if (count(get_Authors_books($booksarchive->id))==1)  echo"الكاتب" ?><?php if (count(get_Authors_books($booksarchive->id))>1)  echo"الكتاب" ?></h5></div>
                                            <?php
                                            foreach (get_Authors_books($booksarchive->id) as $authors) {?>
                                                    <div class="book-author">
                                                        <img src="<?php echo base_url(thumb($authors->img_author,57,57)); ?>" alt="" <?php if (count(get_Authors_books($booksarchive->id))>1)  { ?> data-toggle="tooltip" class="mg_left2" data-placement="top" title="<?php echo $authors->name_author; ?>" <?php }?>>
                                                    </div>
                                               <?php if (count(get_Authors_books($booksarchive->id))==1)  {?>
                                                <p class="author-name3"><?php echo $authors->name_author; ?><br><?php echo $booksarchive->center; ?></p>
                                             <?php }?>
                                            <?php }?>

                                        </div>


                                    </div>
                                    <div class="description-book"> <span class="dot"></span><h5 class="book-title">وصف الكتاب </h5><div class="book-desc"><?php echo $booksarchive->desc_book; ?></div></div>

                                <?php  } else { ?>
                                    <div class="news_books">
                                        <?php  foreach (get_news_where_book($booksarchive->id) as $news){
                                            ?>
                                            <li><a href="<?php echo base_url();?>post/<?php echo $news->id;?>"><?php echo $news->title; ?></a></li>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                <?php }
                ?>
            </div>


        </div>
    </div>
    <div class="wrap-pagination">
        <?php echo $pagination; ?>
    </div>
    </div>
</section>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
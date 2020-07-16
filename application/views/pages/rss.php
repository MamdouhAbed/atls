<?php header('content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" ?>';
    echo '<rss version="2.0">';
        echo '<channel>';
echo  '<title>أطلس للدراسات الإسرائيلية</title>
  <link>http://www.atls.ps</link>
  <description>مركز أطلس للدراسات والأبحاث، مؤسسة بحثية مستقلة، تأسس في غزة منتصف العام 2012م بمبادرة من بعض الأسرى المحررين ذوي الخبرة في الشأن الإسرائيلي بهدف خدمة القضية الفلسطينية، ونشر الوعي العلمي بالمشروع الصهيوني والكيان الإسرائيلي، وبدراسة هذا الكيان بالقدر الذي يفيد جمهور الباحثين والرأي العام وصناع القرار.</description>
  <image>
<url>http://atls.ps/assets/logo/logo.png</url>
<title>أطلس للدراسات الإسرائيلية</title>
  <link>http://www.atls.ps</link>
</image>
  ';

                    foreach ($Post as $post)
                    { ?>

                        <item>
                            <title> <?php echo $post->title ?></title>
                            <link><?php echo base_url() ?>post/<?php echo $post->id ?></link>
                            <description><?php echo $post->post_brief ?></description>
                            <image><?php echo base_url() ?><?php echo $post->img ?></image>
                            <category><?php echo $post->cat_name ?></category>
                            <date><?php echo $post->created_at ?></date>
                        </item>
                    <?php }


echo '</channel>

</rss>';
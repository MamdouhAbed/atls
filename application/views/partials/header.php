<?php
function ArabicDate($date1) {

    $months = array("Jan" => "يناير", "Feb" => "فبراير", "Mar" => "مارس", "Apr" => "أبريل", "May" => "مايو", "Jun" => "يونيو", "Jul" => "يوليو", "Aug" => "أغسطس", "Sep" => "سبتمبر", "Oct" => "أكتوبر", "Nov" => "نوفمبر", "Dec" => "ديسمبر");
    $your_date = date('y-m-d h:i  a',strtotime($date1)); // The Current Date

    $en_month = date("M", strtotime($your_date));
    foreach ($months as $en => $ar) {
        if ($en == $en_month) { $ar_month = $ar; }
    }

    $find = array ("Sat", "Sun", "Mon", "Tue", "Wed" , "Thu", "Fri");
    $replace = array ("السبت", "الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة");
    $ar_day_format = date('D',strtotime($your_date)); // The Current Day
    $ar_day = str_replace($find, $replace, $ar_day_format);

    $find1 = array ("am", "pm");
    $replace1 = array ("ص", "م");
    $ar_day_format1 = date('a',strtotime($date1)); // The Current Day
    $ar_day1 = str_replace($find1, $replace1, $ar_day_format1);

    header('Content-Type: text/html; charset=utf-8');
    $standard = array("0","1","2","3","4","5","6","7","8","9");
    $eastern_arabic_symbols = array("0","1","2","3","4","5","6","7","8","9");
    $current_date = date('h:i ',strtotime($your_date)) . $ar_day1 .' - ' .$ar_day.' '.date('d',strtotime($your_date)).' / '.$ar_month.' / '.date('Y',strtotime($your_date));
    $data = str_replace($standard , $eastern_arabic_symbols , $current_date);

    return $data;
}
function ArabicDate3($date1) {

$months = array("Jan" => "يناير", "Feb" => "فبراير", "Mar" => "مارس", "Apr" => "أبريل", "May" => "مايو", "Jun" => "يونيو", "Jul" => "يوليو", "Aug" => "أغسطس", "Sep" => "سبتمبر", "Oct" => "أكتوبر", "Nov" => "نوفمبر", "Dec" => "ديسمبر");
$your_date = date('y-m-d h:i  a',strtotime($date1)); // The Current Date

$en_month = date("M", strtotime($your_date));
foreach ($months as $en => $ar) {
    if ($en == $en_month) { $ar_month = $ar; }
}
$find = array ("Sat", "Sun", "Mon", "Tue", "Wed" , "Thu", "Fri");
$replace = array ("السبت", "الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة");
$ar_day_format = date('D',strtotime($your_date)); // The Current Day
$ar_day = str_replace($find, $replace, $ar_day_format);
header('Content-Type: text/html; charset=utf-8');
$current_date =$ar_day.' '.date('d',strtotime($your_date)).' / '.$ar_month.' / '.date('Y',strtotime($your_date));
$data = $current_date;

return $data;
}
function ArabicDate4($date1) {

    $your_date = date('y-m-d h:i  a',strtotime($date1)); // The Current Date
    $find1 = array ("am", "pm");
    $replace1 = array ("ص", "م");
    $ar_day_format1 = date('a',strtotime($date1)); // The Current Day
    $ar_day1 = str_replace($find1, $replace1, $ar_day_format1);

    header('Content-Type: text/html; charset=utf-8');

    $current_date = date('h:i ',strtotime($your_date)) . $ar_day1 ;
    $data = $current_date;

    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/logo/logo2.png" type="image/x-icon">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $Description; ?>"/>
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-rtl.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">
    <link rel='stylesheet' href='http://cdn.jsdelivr.net/jquery.slick/1.3.8/slick.css'>
    <!--Custom-css-->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/fonts/dinnext/styles.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/responsive-atlas.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css">
    <link href="<?php echo base_url();?>assets/css/modal-video.min.css" rel="stylesheet">
<!--    js-->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</head>
<body class="body-scroll">

<header>
    <section class="top-header">
        <div class="container ">

            <div class="row mg-t-15">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="atlas-logo">
                        <a href="<?php echo base_url();?>index.php"><img src="<?php echo base_url();?>assets/logo/logo.png" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="search-header">
                        <form class="search-global search" action="<?php echo  base_url() ?>search" method="get" >
                        <div id="search">
                            <div class="search-input">
                            <input id="input" required class="search-focus" placeholder="أدخل كلمة البحث..." name="keyword" autocomplete="off"/>
                            </div>
                                <div class="select-container search-focus">
                                <select id="categoryOptions" name="categoryOptions" class="form-control search-focus valid">

                                    <option value="">الكل</option>
                                    <optgroup label="البحث حسب التصنيف">
                                        <?php foreach ($Categorysearch as $category)
                                        { ?>
                                        <option value="<?php echo $category->id; ?>"><?php echo $category->cat_name; ?></option>
                                            <?php
                                        } ?>
                                    </optgroup>
                                </select>
                            </div>
                            <button id="button"><i class="fa fa-search"></i></button>
                            <div class="spinner"><i class="fa fa-spinner"></i></div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-sm-7 col-xs-12 p-r-0">
                    <div class="contact-header">
                        <div class="contact">
                            <div class="col-md-1 col-xs-1 p-r-0 site">
                                <i> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="30px" height="40px">
<g><g><path d="M446.812,493.966l-67.499-142.781c-1.347-2.849-3.681-5.032-6.48-6.223l-33.58-14.949l58.185-97.518    c0.139-0.234,0.27-0.471,0.395-0.713c11.568-22.579,17.434-46.978,17.434-72.515c0-42.959-16.846-83.233-47.435-113.402    C337.248,15.703,296.73-0.588,253.745,0.016c-41.748,0.579-81.056,17.348-110.685,47.22    c-29.626,29.87-46.078,69.313-46.326,111.066c-0.152,25.515,5.877,50.923,17.431,73.479c0.124,0.241,0.255,0.479,0.394,0.713    l58.184,97.517l-33.774,15.031c-2.763,1.229-4.993,3.408-6.285,6.142L65.187,493.966c-2.259,4.775-1.306,10.453,2.388,14.23    c3.693,3.777,9.345,4.859,14.172,2.711l84.558-37.646l84.558,37.646c3.271,1.455,7.006,1.455,10.277,0l84.558-37.646    l84.558,37.646c1.652,0.735,3.401,1.093,5.135,1.093c3.331,0,6.608-1.318,9.037-3.803    C448.119,504.419,449.071,498.743,446.812,493.966z M136.473,219.906c-9.73-19.132-14.599-39.805-14.47-61.453    c0.428-72.429,59.686-132.17,132.094-133.173c36.166-0.486,70.263,13.199,95.993,38.576    c25.738,25.383,39.911,59.267,39.911,95.412c0,21.359-4.869,41.757-14.473,60.638L266.85,402.054    c-3.318,5.56-8.692,6.16-10.849,6.16c-2.158,0-7.532-0.6-10.849-6.16L136.473,219.906z M350.834,447.891    c-3.271-1.455-7.006-1.455-10.277,0l-84.558,37.646l-84.558-37.646c-3.271-1.455-7.006-1.455-10.277,0l-58.578,26.08    l50.938-107.749l32.258-14.356l37.668,63.133c6.904,11.572,19.072,18.481,32.547,18.481c13.475,0,25.643-6.909,32.547-18.48    l37.668-63.133l32.261,14.361l50.935,107.744L350.834,447.891z" fill="#010d57"/>
    </g></g><g><g><path d="M256.004,101.607c-31.794,0-57.659,25.865-57.659,57.658s25.865,57.658,57.659,57.658    c31.793,0.001,57.658-25.865,57.658-57.658S287.797,101.607,256.004,101.607z M256.004,191.657    c-17.861,0.001-32.393-14.529-32.393-32.392c0-17.861,14.531-32.392,32.393-32.392c17.861,0,32.392,14.531,32.392,32.392    S273.865,191.657,256.004,191.657z" fill="#010d57"/>
                                            </g></g>
</svg></i>
                            </div>
                            <div class="col-md-4 col-xs-4 information-contact p-r-0 mg-r--6">
                                <div class="contact-title">المـوقع: </div>
                                <div class="contact-info">برج شوا وحصري - الطابق 10</div>
                            </div>
                        </div>

                        <div class="contact">
                            <div class="col-md-1 col-xs-1 p-r-0 mg-r--10 email">
                                <i> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="30px" height="40px">
<g><g><path d="M511.609,197.601c-0.001-0.77-0.173-1.933-0.472-2.603c-0.787-2.854-2.536-5.461-5.154-7.281l-73.292-50.948V82.153    c0-7.24-5.872-13.112-13.112-13.112H335.26l-71.743-49.878c-4.484-3.121-10.437-3.134-14.935-0.026l-72.206,49.904H92.426    c-7.242,0-13.112,5.872-13.112,13.112v53.973L5.666,187.027c-3.623,2.504-5.583,6.507-5.645,10.6    C0.017,197.704,0,197.777,0,197.857l0.391,284.235c0.005,3.477,1.391,6.81,3.852,9.266c2.458,2.451,5.788,3.827,9.26,3.827    c0.007,0,0.012,0,0.018,0l485.385-0.667c7.24-0.01,13.104-5.889,13.094-13.13L511.609,197.601z M432.69,168.708l41.898,29.118    l-41.898,29.128V168.708z M256.015,45.884l33.31,23.156h-66.812L256.015,45.884z M105.538,95.265h300.928v149.921L305.43,315.428    l-41.194-31.954c-0.064-0.05-0.119-0.081-0.181-0.126c-4.604-3.454-11.116-3.581-15.894,0.126l-41.493,32.185l-101.13-69.893    V95.265z M79.314,168.003v59.64l-43.146-29.819L79.314,168.003z M26.258,222.867l158.669,109.655L26.578,455.346L26.258,222.867z     M51.875,468.909l204.324-158.484l203.591,157.923L51.875,468.909z M327.144,332.271l158.276-110.036l0.32,233.059    L327.144,332.271z" fill="#010d57"/>
    </g></g><g><g><path d="M344.77,147.713H167.234c-7.24,0-13.112,5.872-13.112,13.112s5.872,13.112,13.112,13.112H344.77    c7.242,0,13.112-5.872,13.112-13.112S352.012,147.713,344.77,147.713z" fill="#010d57"/>
                                            </g></g><g><g><path d="M344.77,215.895H167.234c-7.24,0-13.112,5.872-13.112,13.112c0,7.24,5.872,13.112,13.112,13.112H344.77    c7.242,0,13.112-5.872,13.112-13.112C357.882,221.767,352.012,215.895,344.77,215.895z" fill="#010d57"/>
                                            </g></g></svg></i>
                            </div>
                            <div class="col-md-3 col-xs-3 information-contact p-r-0">
                                <div class="contact-title">الايميل: </div>
                                <div class="contact-info">atlas.ps@hotmail.com</div>
                            </div>
                        </div>

                        <div class="contact">
                            <div class="col-md-1 col-xs-1 p-r-0 mg-r-10 phone">
                                <i> <svg class="call-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="30px" height="40px">
<g><g><path d="M492.557,400.56L392.234,300.238c-11.976-11.975-31.458-11.975-43.435,0l-26.088,26.088    c-8.174,8.174-10.758,19.845-7.773,30.241l-9.843,9.843c-0.003,0.003-0.005,0.005-0.008,0.008    c-6.99,6.998-50.523-3.741-103.145-56.363c-52.614-52.613-63.356-96.139-56.366-103.142c0-0.002,0.002-0.002,0.002-0.002    l9.852-9.851c2.781,0.799,5.651,1.207,8.523,1.207c7.865,0,15.729-2.993,21.718-8.98l26.088-26.088    c11.975-11.975,11.975-31.458,0-43.434L111.436,19.441c-5.8-5.8-13.513-8.994-21.716-8.994c-8.205,0-15.915,3.196-21.716,8.994    l-26.09,26.09c-8.174,8.174-10.758,19.846-7.773,30.241c0,0-8.344,8.424-8.759,8.956c-27.753,30.849-32.96,79.418-14.561,137.487    c18.017,56.857,56.857,117.088,109.367,169.595c52.508,52.508,112.739,91.348,169.596,109.367    C312.624,508.414,333.991,512,353.394,512c31.813,0,58.337-9.648,77.35-28.66l5.474-5.474c2.74,0.788,5.602,1.213,8.532,1.213    c8.205,0,15.917-3.196,21.716-8.994l26.09-26.09C504.531,432.02,504.531,412.536,492.557,400.56z M89.72,41.157l100.324,100.325    l-26.074,26.102c0,0-0.005-0.005-0.014-0.014l-0.375-0.375l-49.787-49.787L63.631,67.247L89.72,41.157z M409.029,461.623    c-0.002,0.002-0.003,0.003-0.005,0.005c-22.094,22.091-61.146,25.74-109.961,10.27c-52.252-16.558-108.065-52.714-157.156-101.806    C92.814,321,56.658,265.189,40.101,212.936c-15.47-48.817-11.821-87.87,10.275-109.967l0.002-0.002l2.77-2.77l77.857,77.856    l-7.141,7.141c-0.005,0.005-0.009,0.011-0.015,0.017c-29.585,29.622,5.963,96.147,56.378,146.562    c37.734,37.734,84.493,67.14,118.051,67.14c11.284,0,21.076-3.325,28.528-10.778c0.003-0.003,0.005-0.005,0.008-0.008l7.133-7.133    l77.857,77.856L409.029,461.623z M444.752,448.368L344.428,348.044l26.088-26.088L470.84,422.278    C470.84,422.278,444.761,448.377,444.752,448.368z" fill="#010d57"/>
    </g></g> <g><g><path d="M388.818,123.184c-29.209-29.209-68.042-45.294-109.344-45.293c-8.481,0-15.356,6.875-15.356,15.356    c0,8.481,6.876,15.356,15.356,15.356c33.1-0.002,64.219,12.89,87.628,36.297c23.406,23.406,36.295,54.525,36.294,87.624    c0,8.481,6.875,15.358,15.356,15.358c8.48,0,15.356-6.875,15.356-15.354C434.109,191.224,418.023,152.393,388.818,123.184z" fill="#010d57"/>
                                            </g></g><g><g><path d="M443.895,68.107C399.972,24.186,341.578-0.002,279.468,0c-8.481,0-15.356,6.876-15.356,15.356    c0,8.481,6.876,15.356,15.356,15.356c53.907-0.002,104.588,20.992,142.709,59.111c38.118,38.118,59.111,88.799,59.11,142.706    c0,8.481,6.875,15.356,15.356,15.356c8.48,0,15.356-6.875,15.356-15.354C512.001,170.419,487.813,112.027,443.895,68.107z" fill="#010d57"/>
                                            </g></g><g><g><path d="M333.737,178.26c-14.706-14.706-33.465-22.477-54.256-22.477c0,0-0.005,0-0.006,0    c-8.481,0.002-15.356,6.876-15.354,15.358c0.002,8.481,6.878,15.356,15.358,15.354c0.002,0,0.003,0,0.005,0    c12.644,0,23.593,4.536,32.539,13.481c8.819,8.82,13.481,20.075,13.479,32.544c-0.002,8.481,6.875,15.356,15.354,15.358h0.002    c8.481,0,15.354-6.875,15.356-15.354C356.215,211.732,348.444,192.968,333.737,178.26z" fill="#010d57"/>
                                            </g></g></svg></i>
                            </div>
                            <div class="col-md-2 col-xs-2 information-contact p-r-0">
                                <div class="contact-title">الهاتف: </div>
                                <div class="contact-info">082834064</div>
                            </div>
                        </div>


                    </div>
                </div>
            </div></div>
    </section>
    <section class=" menu-header">
        <div class="container">
            <div class="row preview-html mg-t-10" ng-show="screen == 'preview'" ng-hide="loading">
                <div class="col-md-7 p-r-0">
                    <div id="cssmenu" class="cssmenu open"><span class="cls"></span> <span>
                        <ul class="sub-menu">
                            <li class="active"><a href="<?php echo base_url();?>index.php" class="cat"><i class="home-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="15px" height="15px">
<g><g><path d="M506.555,208.064L263.859,30.367c-4.68-3.426-11.038-3.426-15.716,0L5.445,208.064    c-5.928,4.341-7.216,12.665-2.875,18.593s12.666,7.214,18.593,2.875L256,57.588l234.837,171.943c2.368,1.735,5.12,2.57,7.848,2.57    c4.096,0,8.138-1.885,10.744-5.445C513.771,220.729,512.483,212.405,506.555,208.064z" fill="#1c184a"></path>
    </g></g><g><g><path d="M442.246,232.543c-7.346,0-13.303,5.956-13.303,13.303v211.749H322.521V342.009c0-36.68-29.842-66.52-66.52-66.52    s-66.52,29.842-66.52,66.52v115.587H83.058V245.847c0-7.347-5.957-13.303-13.303-13.303s-13.303,5.956-13.303,13.303v225.053    c0,7.347,5.957,13.303,13.303,13.303h133.029c6.996,0,12.721-5.405,13.251-12.267c0.032-0.311,0.052-0.651,0.052-1.036v-128.89    c0-22.009,17.905-39.914,39.914-39.914s39.914,17.906,39.914,39.914v128.89c0,0.383,0.02,0.717,0.052,1.024    c0.524,6.867,6.251,12.279,13.251,12.279h133.029c7.347,0,13.303-5.956,13.303-13.303V245.847    C455.549,238.499,449.593,232.543,442.246,232.543z" fill="#17384f"></path>
    </g></g></svg>
                    </i></a></li>
                            <li><a href="<?php echo base_url();?>category/10" class="cat"> مقالنا</a></li>
                            <li><a href="<?php echo base_url();?>books" class="cat"> الكتب</a></li>
                            <li><a href="<?php echo base_url();?>category/3" class="cat"> دراسات</a></li>
                            <li><a href="<?php echo base_url();?>category/12" class="cat"> ترجمات</a></li>
                            <li><a href="<?php echo base_url();?>category/1" class="cat"> تقارير</a></li>
                            <li><a href="<?php echo base_url();?>category/6" class="cat"> آراء</a></li>
                            <li class="media1"><a href="#" class="cat"> الميديا<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                <div class="media-slide-container" >
                                    <div class="media-slide">
                                        <div class="item"><a href="<?php echo base_url();?>gallery_list" class="media-item"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 444.163 444.163" style="enable-background:new 0 0 444.163 444.163;" xml:space="preserve" width="20px" height="25px"><g><g><g>
                                                                <path d="M404.163,44.882h-288c-22,0-40,18-40,40v14l-46.4,12.8c-10.4,2.8-19.2,9.2-24.4,18.4c-5.2,9.2-6.8,20-4,30.4l56,208.8     c2.8,10.4,9.2,19.2,18.4,24.4c6,3.6,13.2,5.6,20,5.6c3.6,0,6.8-0.4,10.4-1.2l183.2-49.2h114.8c22,0,40-18,40-40v-224     C444.163,62.882,426.163,44.882,404.163,44.882z M102.163,382.482c-6.4,1.6-12.8,0.8-18.4-2.4c-5.6-3.2-9.6-8.4-11.2-14.8     l-56-208.8c-1.6-6.4-0.8-12.8,2.4-18.4s8.4-9.6,14.8-11.2l42.4-11.6v193.6c0,22,18,40,40,40h111.2L102.163,382.482z      M428.163,308.882c0,13.2-10.8,24-24,24h-288c-13.2,0-24-10.8-24-24v-224c0-13.2,10.8-24,24-24h288c13.2,0,24,10.8,24,24v113.6     l-38-38c-6.4-6.4-16-6.4-22.4,0l-91.6,91.2l-0.4-0.4l-46.4-46.4c-6-6-16.4-6-22.4,0l-39.2,39.2c-3.2,3.2-3.2,8,0,11.2     c3.2,3.2,8,3.2,11.2,0l39.2-39.2l46.4,46.4l0.4,0.4l-32.4,32.4c-3.2,3.2-3.2,8,0,11.2c1.6,1.6,3.6,2.4,5.6,2.4s4-0.8,5.6-2.4     l135.2-134.8l47.6,47.6c0.4,0.4,1.2,0.8,1.6,1.2V308.882z" fill="#010d57"></path>
                                                                <path d="M148.563,263.282l-8,8c-3.2,3.2-3.2,8,0,11.2c1.6,1.6,3.6,2.4,5.6,2.4s4-0.8,5.6-2.4l8-8c3.2-3.2,3.2-8,0-11.2     C156.563,260.082,151.763,260.082,148.563,263.282z" fill="#010d57"></path>
                                                                <path d="M204.163,132.882c0-22-18-40-40-40s-40,18-40,40s18,40,40,40S204.163,154.882,204.163,132.882z M164.163,156.882     c-13.2,0-24-10.8-24-24s10.8-24,24-24s24,10.8,24,24S177.363,156.882,164.163,156.882z" fill="#010d57"></path>
                                                            </g></g></g></svg> صور </a></div>
                                    </div>
                                    <div class="media-slide" >
                                        <div class="item"><a href="<?php echo base_url();?>video_list" class="media-item"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="20px" height="23px"><g>
                                                        <path d="M36.537,28.156l-11-7c-0.308-0.195-0.698-0.208-1.019-0.033C24.199,21.299,24,21.635,24,22v14   c0,0.365,0.199,0.701,0.519,0.877C24.669,36.959,24.834,37,25,37c0.187,0,0.374-0.053,0.537-0.156l11-7   C36.825,29.66,37,29.342,37,29S36.825,28.34,36.537,28.156z M26,34.179V23.821L34.137,29L26,34.179z" fill="#010d57"></path>
                                                        <path d="M57,6H47H11H1C0.448,6,0,6.447,0,7v11v11v11v11c0,0.553,0.448,1,1,1h10h36h10c0.552,0,1-0.447,1-1V40V29V18V7   C58,6.447,57.552,6,57,6z M10,28H2v-9h8V28z M2,30h8v9H2V30z M12,40V29V18V8h34v10v11v11v10H12V40z M56,28h-8v-9h8V28z M48,30h8v9   h-8V30z M56,8v9h-8V8H56z M2,8h8v9H2V8z M2,50v-9h8v9H2z M56,50h-8v-9h8V50z" fill="#010d57"></path></g>
                                                            </svg> فيديو </a></div>
                                    </div>

                                    <div class="media-slide" >
                                        <div class="item"><a href="<?php echo base_url();?>caricature" class="media-item"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="20px" height="23px"><g>
                                                        <path d="M52.276,30.239c-1.164-1.164-3.057-1.162-4.221,0L32.664,45.63l-2.121,7.779l-0.519,0.519   c-0.388,0.388-0.389,1.014-0.006,1.405l-0.005,0.02l0.019-0.005c0.194,0.191,0.446,0.288,0.699,0.288   c0.256,0,0.512-0.098,0.707-0.293l0.52-0.52l7.778-2.121l15.39-15.391c1.164-1.164,1.164-3.058,0-4.222L52.276,30.239z    M34.973,46.15l10.243-10.243l4.243,4.243L39.216,50.393L34.973,46.15z M34.07,48.075l3.22,3.22l-4.428,1.208L34.07,48.075z    M53.711,35.896l-2.839,2.839l-4.243-4.242l2.839-2.839c0.385-0.385,1.01-0.384,1.394-0.001l2.85,2.85   C54.096,34.887,54.096,35.513,53.711,35.896z" fill="#010d57"></path>
                                                        <path d="M21.569,15.935c0-3.071-2.498-5.569-5.569-5.569s-5.569,2.498-5.569,5.569c0,3.07,2.498,5.568,5.569,5.568   S21.569,19.005,21.569,15.935z M12.431,15.935c0-1.968,1.601-3.569,3.569-3.569s3.569,1.602,3.569,3.569S17.968,19.503,16,19.503   S12.431,17.902,12.431,15.935z" fill="#010d57"></path>
                                                        <path d="M6.25,39.026C6.447,39.251,6.723,39.365,7,39.365c0.234,0,0.47-0.082,0.66-0.249l16.313-14.362l8.319,8.318   c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414l-2.825-2.824l9.191-10.065l8.262,7.344c0.414,0.368,1.045,0.33,1.412-0.083   c0.367-0.412,0.33-1.045-0.083-1.411l-9-8c-0.41-0.365-1.035-0.333-1.403,0.073l-9.794,10.727l-4.743-4.743   c-0.374-0.373-0.972-0.391-1.368-0.044L6.339,37.614C5.925,37.979,5.884,38.611,6.25,39.026z" fill="#010d57"></path>
                                                        <path d="M57,2.365H1c-0.552,0-1,0.447-1,1v44c0,0.553,0.448,1,1,1h26c0.552,0,1-0.447,1-1s-0.448-1-1-1H2v-42h54v24   c0,0.553,0.448,1,1,1s1-0.447,1-1v-25C58,2.813,57.552,2.365,57,2.365z" fill="#010d57"></path>
                                                    </g></svg> كاريكتير </a></div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="<?php echo base_url();?>about_us" class="cat"> من نحن</a></li>
                            <li><a href="<?php echo base_url();?>contact_us" class="cat"> اتصل بنا</a></li>
                        </ul></span> <span class="cls"></span>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="social-media-header">
                        <ul>
                            <li class=""><a class="facebook" href="https://www.facebook.com/atlas.ps1" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class=""><a class="twitter" href="https://twitter.com/atlas_cen" target="_blank"> <i class="fa fa-twitter"></i></a></li>
                            <li class=""><a class="youtube" href="https://www.youtube.com/atlascenter" target="_blank"> <i class="fa fa-youtube "></i></a></li>
                            <li class=""><a class="google-plus" href="https://plus.google.com/u/0/110628355449614105179/posts" target="_blank"> <i class="fa fa-google-plus"></i></a></li>
                            <li class=""><a class="rss" href="<?php echo base_url();?>rss"><i class="fa fa-rss"></i></a></li>
                            <li class=""><a href="<?php echo base_url();?>follow_sites" class="follow-sites">مواقع نتابعها</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</header>
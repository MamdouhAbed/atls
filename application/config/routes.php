<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['blog'] = 'Blog';
//$route['about-us'] = 'AboutUs';
//$route['all-video'] = 'AllVideo';
//$route['caricature'] = 'Caricature';
//$route['category'] = 'Category';
//$route['contact-us'] = 'ContactUs';
//$route['img-album'] = 'ImgAlbum';
//$route['img-gallary'] = 'ImgGallary';
//$route['video-playlist'] = 'VideoPlaylist';

$route['contact_us'] = 'Contact_us';
$route['about_us'] = 'About_us';
$route['rss'] = 'Rss';
$route['post/:num'] = 'Post_Details';
$route['martyrs'] = 'Martyrs_Prisoner_Details/all_martyr';
$route['martyrs/page'] = 'Martyrs_Prisoner_Details/all_martyr';
$route['martyrs/page/:num'] = 'Martyrs_Prisoner_Details/all_martyr';

$route['prisoner'] = 'Martyrs_Prisoner_Details/all_prisoner';
$route['prisoner/page'] = 'Martyrs_Prisoner_Details/all_prisoner';
$route['prisoner/page/:num'] = 'Martyrs_Prisoner_Details/all_prisoner';

$route['martyrs/:num'] = 'Martyrs_Prisoner_Details/martyr';
$route['prisoner/:num'] = 'Martyrs_Prisoner_Details/prisoner';
$route['children'] = 'Children';
$route['children/page/:num'] = 'Children';


$route['category/:num'] = 'Category';
$route['category/:num/page'] = 'Category';
$route['category/:num/page/:num'] = 'Category';


$route['categories'] = 'Categories';
$route['categories/page'] = 'Categories';
$route['categories/page/:num'] = 'Categories';


$route['view_newspaper/:num'] = 'News_Paper';


$route['video_list'] = 'Video_List';
$route['video_list/page'] = 'Video_List';
$route['video_list/page/:num'] = 'Video_List';
$route['video_show/:num'] = 'Video_Show';


$route['post_tags/:num'] = 'News_Tags';
$route['post_tags/:num/page'] = 'News_Tags';
$route['post_tags/:num/page/:num'] = 'News_Tags';


$route['search'] = 'Search';
$route['search/page'] = 'Search';
$route['search/page/:num'] = 'Search';


$route['gallery_img/:num'] = 'Gallery_Img';
$route['gallery_list'] = 'Gallery_List';
$route['gallery_list/page'] = 'Gallery_List';
$route['gallery_list/page/:num'] = 'Gallery_List';

$route['caricature'] = 'Caricature';
$route['caricature/page'] = 'Caricature';
$route['caricature/page/:num'] = 'Caricature';

$route['follow_sites'] = 'Follow_Sites';

$route['books'] = 'Books';
$route['books/page'] = 'Books';
$route['books/page/:num'] = 'Books';

$route['404_override'] = 'my404';

//admin

$route['admin/login'] = 'Login/log';
$route['admin/logout'] = 'Login/logout';
$route['admin/loginpost'] = 'Login/testlogin';
$route['admin/index'] = 'Admin';
$route['admin/settings'] = 'Settings/Update_settings';
$route['admin/saveSettings'] = 'Settings/save_Settings';


$route['admin/dtableSocial'] = 'Social/social_table';
$route['admin/saveSocial'] = 'Social/savesocial';
$route['admin/addSocial'] = 'Social/add_social';
$route['admin/updateSocial/:num'] = 'Social/updateSocial';
$route['admin/saveUpdateSocial/:num'] = 'Social/saveUpdateSocial';
$route['admin/deleteSocial'] = 'Social/deleteSocial';


$route['admin/dtableMartyre'] = 'Martyrs/martyr_table';
$route['admin/saveMartyre'] = 'Martyrs/saveMartyr';
$route['admin/addMartyre'] = 'Martyrs/add_martyr';
$route['admin/updateMartyre/:num'] = 'Martyrs/updateMartyr';
$route['admin/saveUpdateMartyre/:num'] = 'Martyrs/saveUpdate';
$route['admin/deleteMartyr'] = 'Martyrs/deleteMartyr';


$route['admin/dtableChildren'] = 'Children/children_table';
$route['admin/saveChildren'] = 'Children/saveChildren';
$route['admin/addChildren'] = 'Children/add_children';
$route['admin/updateChildren/:num'] = 'Children/updateChildren';
$route['admin/saveUpdateChildren/:num'] = 'Children/saveUpdateChildren';
$route['admin/delChildren'] = 'Children/deleteChildren';

$route['admin/dtableAuthor'] = 'Author/author_table';
$route['admin/saveAuthor'] = 'Author/saveAuthor';
$route['admin/addAuthor'] = 'Author/add_author';
$route['admin/updateAuthor/:num'] = 'Author/updateAuthor';
$route['admin/saveUpdateAuthor/:num'] = 'Author/saveUpdateAuthor';
$route['admin/delAuthor'] = 'Author/deleteAuthor';


$route['admin/addInfographic'] = 'Multimedia/add_infographic';
$route['admin/dtableInfographic'] = 'Multimedia/infographic_table';
$route['admin/saveInfographic'] = 'Multimedia/saveInfographic';
$route['admin/updateInfographic/:num'] = 'Multimedia/updateInfographic';
$route['admin/saveUpdateInfographic/:num'] = 'Multimedia/saveUpdateInfographic';
$route['admin/deleteInfographic'] = 'Multimedia/deleteInfographic';
$route['infographic'] = 'Infographic';
$route['infographic/page'] = 'Infographic';
$route['infographic/page/:num'] = 'Infographic';

$route['admin/addCaricature'] = 'Multimedia/add_caricature';
$route['admin/dtableCaricature'] = 'Multimedia/caricature_table';
$route['admin/saveCaricature'] = 'Multimedia/saveCaricature';
$route['admin/updateCaricature/:num'] = 'Multimedia/updateCaricature';
$route['admin/saveUpdateCaricature/:num'] = 'Multimedia/saveUpdateCaricature';
$route['admin/deleteCaricature'] = 'Multimedia/deleteCaricature';



$route['admin/addAds'] = 'Advert/add_advert';
$route['admin/saveAdvert'] = 'Advert/saveAdvert';
$route['admin/dtableBanner'] = 'Advert/advert_table';
$route['admin/updateBanner/:num'] = 'Advert/updateAdvert';
$route['admin/saveUpdateBanner/:num'] = 'Advert/saveUpdateAdvert';
$route['admin/deleteBanner'] = 'Advert/deleteAdvert';




$route['admin/dtableNews'] = 'News/news_table';
$route['admin/addNews'] = 'News/add_news';
$route['admin/saveNews'] = 'News/saveNews';
$route['admin/updateNews/:num'] = 'News/updateNews';
$route['admin/saveUpdateNews/:num'] = 'News/saveUpdateNews';
$route['admin/deleteNews'] = 'News/deleteNews';

$route['admin/dtableBooks'] = 'Books/books_table';
$route['admin/addBooks'] = 'Books/add_books';
$route['admin/saveBooks'] = 'Books/saveBooks';
$route['admin/updateBooks/:num'] = 'Books/updateBooks';
$route['admin/saveUpdateBooks/:num'] = 'Books/saveUpdateBooks';
$route['admin/deleteBooks'] = 'Books/deleteBooks';

$route['admin/dtableQuotations'] = 'Quotations/quotations_table';
$route['admin/addQuotations'] = 'Quotations/add_quotations';
$route['admin/saveQuotations'] = 'Quotations/saveQuotations';
$route['admin/updateQuotations/:num'] = 'Quotations/updateQuotations';
$route['admin/saveUpdateQuotations/:num'] = 'Quotations/saveUpdateQuotations';
$route['admin/deleteQuotations'] = 'Quotations/deleteQuotations';

$route['admin/dtableFollowSites'] = 'Follow_Sites/followsites_table';
$route['admin/addFollowSites'] = 'Follow_Sites/add_followsites';
$route['admin/saveFollowSites'] = 'Follow_Sites/saveFollowSites';
$route['admin/updateFollowSites/:num'] = 'Follow_Sites/updateFollowSites';
$route['admin/saveUpdateFollowSites/:num'] = 'Follow_Sites/saveUpdateFollowSites';
$route['admin/deleteFollowSites'] = 'Follow_Sites/deleteFollowSites';


$route['admin/dtableBreaknews'] = 'News/breaknews_table';
$route['admin/addBreakNew'] = 'News/add_breaknews';
$route['admin/saveBreaknews'] = 'News/saveBreaknews';
$route['admin/updateBreakNew'] = 'News/updateBreakNew';
$route['admin/deleteBreakNew'] = 'News/deleteBreakNew';

$route['admin/addCurrency'] = 'Currency/add_currency';
$route['admin/saveCurrency'] = 'Currency/saveCurrency';

$route['admin/addSubDept'] = 'NewsClassification/add_subDept';
$route['admin/saveSubDept'] = 'NewsClassification/saveSubDept';
$route['admin/deleteSubDept'] = 'NewsClassification/deleteSubDept';
$route['admin/updateSubDept'] = 'NewsClassification/updateSubDept';

$route['admin/addSiteDept'] = 'SitesClassification/add_siteDept';
$route['admin/saveSiteDept'] = 'SitesClassification/saveSiteDept';
$route['admin/deleteSiteDept'] = 'SitesClassification/deleteSiteDept';
$route['admin/updateSiteDept'] = 'SitesClassification/updateSiteDept';

$route['admin/dtableImages'] = 'Multimedia/image_table';
$route['admin/addImages'] = 'Multimedia/add_image';
$route['admin/saveImages'] = 'Multimedia/saveImages';
$route['admin/updateImages/:num'] = 'Multimedia/updateImages';
$route['admin/saveUpdateImages/:num'] = 'Multimedia/saveUpdateImages';
$route['admin/deleteImagesAlbum'] = 'Multimedia/deleteImagesAlbum';

$route['admin/dtableVideos'] = 'Multimedia/video_table';
$route['admin/addVideo'] = 'Multimedia/add_video';
$route['admin/saveVideo'] = 'Multimedia/saveVideo';
$route['admin/updateVideo/:num'] = 'Multimedia/updateVideo';
$route['admin/saveUpdateVideo/:num'] = 'Multimedia/saveUpdateVideo';
$route['admin/deleteVideo'] = 'Multimedia/deleteVideo';

$route['admin/dtablePdf'] = 'Multimedia/pdf_table';
$route['admin/addPdf'] = 'Multimedia/add_pdf';
$route['admin/savePdf'] = 'Multimedia/savePdf';
$route['admin/updatePdf/:num'] = 'Multimedia/updatePdf';
$route['admin/saveUpdatePdf/:num'] = 'Multimedia/saveUpdatePdf';
$route['admin/deletePdf'] = 'Multimedia/deletePdf';

$route['admin/dtableFiles'] = 'Files/files_table';
$route['admin/addFile'] = 'Files/add_file';
$route['admin/saveFile'] = 'Files/saveFile';
$route['admin/updateFile'] = 'Files/updateFile';
$route['admin/deleteFile'] = 'Files/deleteFile';

$route['admin/saveSubMediaDept'] = 'MediaClassification/saveSubMediaDept';
$route['admin/deleteSubMediaDept'] = 'MediaClassification/deleteSubMediaDept';
$route['admin/updateSubMediaDept'] = 'MediaClassification/updateSubMediaDept';


$route['admin/dtableUsers'] = 'User/user_table';
$route['admin/addUser'] = 'User/add_user';
$route['admin/saveUser'] = 'User/saveUser';
$route['admin/updateUser/:num'] = 'User/updateUser';
$route['admin/saveUpdateUser/:num'] = 'User/saveUpdateUser';
$route['admin/deleteUser'] = 'User/deleteUser';

$route['admin/dtableTickerNew'] = 'News/tickernew_table';
$route['admin/addTickerNew'] = 'News/add_tickernew';
$route['admin/saveTickerNew'] = 'News/saveTickerNew';
$route['admin/updateTickerNew'] = 'News/updateTickerNew';
$route['admin/deleteTickerNew'] = 'News/deleteTickerNew';

$route['admin/aboutUs'] = 'About_us/aboutUs';
$route['admin/updateDetails'] = 'About_us/updateDetails';

$route['getImages'] = 'News/archive2';
$route['load_more_news'] = 'Home/load_more_news';
$route['create_thumb'] = 'Home/createThumb';
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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['store'] = 'welcome/shop';
$route['finance'] = 'welcome/finance';
$route['finance/(:any)'] = 'welcome/finance';
$route['autoteilee'] = 'welcome/autoteilee';
$route['details/(:any)'] = 'welcome/car_details/$1';
$route['shop_next'] = 'welcome/shop_next';
$route['list'] = 'welcome/shop_next';
$route['article'] = 'welcome/article';
$route['carvenience'] = 'welcome/carvenience';
$route['rto'] = 'welcome/rto';
$route['sell'] = 'welcome/sell';
$route['insurance'] = 'welcome/insurance';
$route['download'] = 'welcome/download';

$route['filter_price'] = 'welcome/filter_price';

$route['get_bodytype'] = 'welcome/get_bodytype';
$route['get_brand'] = 'welcome/get_brand';
$route['get_model'] = 'welcome/get_model';
$route['get_fueltype'] = 'welcome/get_fueltype';
$route['get_transmissiontype'] = 'welcome/get_transmissiontype';
$route['get_color'] = 'welcome/get_color';

$route['home_data'] = 'FormSubmission/home_data';
$route['sell_data'] = 'FormSubmission/sell_data';
$route['insurance_data'] = 'FormSubmission/insurance_data';
$route['carvenience_rto_data'] = 'FormSubmission/carvenience_rto_data';

$route['add_city'] = 'welcome/add_city_in_session';

$route['fetch_car_images'] = 'welcome/fetch_car_images';

$route['compare_cars'] = 'welcome/compare_cars';
$route['add_to_wishlist'] = 'welcome/add_wishlist_in_session';

$route['car_count'] = 'welcome/get_car_count_session_data';

$route['get_recently_viewed'] = 'welcome/get_recently_viewed';
$route['get_first_ten_cars'] = 'welcome/get_first_ten_cars';
$route['get_wishlisted_cars'] = 'welcome/get_wishlisted_cars';

$route['get_car_city_wise'] = 'welcome/get_car_city_wise';

$route['get_car_featuers'] = 'welcome/get_car_featuers';
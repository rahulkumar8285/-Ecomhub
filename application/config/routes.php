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
| my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'ad/adminauth/login';
$route['logout'] = 'ad/adminsite/AdminLogout';
$route['addcategory'] = 'ad/adminsite/AddCategory';
$route['admin-index'] = 'ad/adminsite';
$route['vendor-singup'] = '/ve/vendorauth/Singup';
$route['vendor-login'] = '/ve/vendorauth/login';
$route['vendor-list'] = 'ad/adminsite/Vendorlist';
$route['singup-comp'] = 'welcome/Singupmsg';
$route['ve/add-prodect'] = '/ve/vendorsite/addprodect';
$route['ve/AddProdect'] = '/ve/vendorope/AddProdect';
$route['ve/add-size'] = '/ve/vendorsite/addsize';
$route['ve/add-var/(:num)'] = '/ve/vendorsite/addvar/$1';
$route['ve/addvar'] = '/ve/vendorope/addvar';
$route['test'] = '/ve/vendorope/Testfun';
$route['ve/ProdectList'] = 've/vendorsite/ProdectList';
$route['ve/pr-addimg'] = 've/vendorsite/addimg';
$route['ve/pr-img/(:num)'] = '/ve/vendorsite/addimg/$1';
$route['ve/edit-var/(:num)'] = '/ve/vendorsite/editvar/$1';
$route['ve/updatevar'] = '/ve/vendorope/upldatevar';
$route['deletedata'] = '/ve/vendorope/deletedata';
$route['deletepro'] = '/ve/vendorope/deleproduct';
$route['proaddimg'] = '/ve/vendorope/addproimg';
$route['DeleteImage'] = '/ve/vendorope/DeleteImage';
$route['ve/edit-img/(:num)'] = '/ve/vendorsite/updateImg/$1';

























    




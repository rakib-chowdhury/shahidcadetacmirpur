<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$subDomains = array();
//$subDomains['test.eeanstar.com'] = "tradefairs";
$subDomains['tradefairs.eeanstar.com'] = "tradefairs";
$subDomains['clothingaccessory.eeanstar.com'] = "garment";
$subDomains['dyes.eeanstar.com'] = "garment";
$subDomains['fabrics.eeanstar.com'] = "garment";
$subDomains['fibre.eeanstar.com'] = "garment";
$subDomains['garment.eeanstar.com'] = "garment";
$subDomains['hometextile.eeanstar.com'] = "garment";
$subDomains['yarn.eeanstar.com'] = "garment";
//$subDomains['localhost'] = "tradefairs";
//echo "<pre>"; print_r($subDomains[$_SERVER['HTTP_HOST']]); die();


if(array_key_exists($_SERVER['HTTP_HOST'], $subDomains)) {
  $route['default_controller'] = $subDomains[$_SERVER['HTTP_HOST']];
  $route['404_override'] = '';
		//echo "<pre>"; print_r($subDomains[$_SERVER['HTTP_HOST']]); die();

}
else{
	$route['default_controller'] = 'home';
	$route['404_override'] = '';
}

$route['all_category'] = 'garment/all_category/';
$route['compare_products'] = 'garment/compare_products/';
$route['product_details(:any)'] = 'garment/product_details/';
$route['product(:any)'] = 'garment/product';
$route['search'] = 'garment/search';
$route['suppler'] = 'garment/suppler';
$route['buyer'] = 'garment/buyer';
$route['company(:any)/contact'] = 'company/contact';
$route['company(:any)/product/(:any)'] = 'company/product';
$route['company(:any)/product'] = 'company/product';
$route['company(:any)/tradeleads'] = 'company/tradeleads';
$route['company(:any)'] = 'company';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*-----------------Route Admin------------------------*/ 
$route['login'] 		= 'admin/auth/login';
$route['beranda']		= 'admin/admin';

$route['artikel']				     		= 'admin/artikel';
$route['artikel/tambah'] 			  		= 'admin/artikel/add';
$route['artikel/ubah/(:any)'] 		  		= 'admin/artikel/edit/$1';
$route['artikel/hapus/(:any)/(:any)']		= 'admin/artikel/delete/$1/$2';
$route['artikel/lihat/(:any)']		  		= 'admin/artikel/read/$1';

$route['pengurus']				= 'admin/pengurus';
$route['pengurus/tambah'] 		= 'admin/pengurus/add';
$route['pengurus/ubah/(:any)'] 	= 'admin/pengurus/edit/$1';
$route['pengurus/hapus/(:any)'] = 'admin/pengurus/delete/$1';

$route['ustadz']				= 'admin/ustadz';
$route['ustadz/tambah'] 		= 'admin/ustadz/add';
$route['ustadz/ubah/(:any)'] 	= 'admin/ustadz/edit/$1';
$route['ustadz/hapus/(:any)'] 	= 'admin/ustadz/delete/$1';

$route['infaq']			= 'admin/infaq';
$route['keuangan']		= 'admin/keuangan';

$route['shalat']				= 'admin/shalat';
$route['shalat/tambah']	   		= 'admin/shalat/add';
$route['shalat/ubah/(:any)']	= 'admin/shalat/edit/$1';
$route['shalat/hapus/(:any)'] 	= 'admin/shalat/delete/$1';






$route['jumat']			= 'admin/jumat';
$route['ramadhan']		= 'admin/ramadhan';
$route['pesan']			= 'admin/pesan';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
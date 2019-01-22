<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*-----------------Route Admin------------------------*/ 
$route['login'] 						= 'admin/auth/login';
$route['logout']						= 'admin/auth/logout';
$route['beranda']						= 'admin/admin';
 
$route['artikel']				     	= 'admin/artikel';
$route['artikel/tambah'] 			 	= 'admin/artikel/add';
$route['artikel/ubah/(:any)'] 		  	= 'admin/artikel/edit/$1';
$route['artikel/hapus/(:any)/(:any)']	= 'admin/artikel/delete/$1/$2';
$route['artikel/lihat/(:any)']		  	= 'admin/artikel/read/$1';

$route['pengurus']						= 'admin/pengurus';
$route['pengurus/tambah'] 				= 'admin/pengurus/add';
$route['pengurus/ubah/(:any)'] 			= 'admin/pengurus/edit/$1';
$route['pengurus/hapus/(:any)'] 		= 'admin/pengurus/delete/$1';

$route['ustadz']						= 'admin/ustadz';
$route['ustadz/tambah'] 				= 'admin/ustadz/add';
$route['ustadz/ubah/(:any)'] 			= 'admin/ustadz/edit/$1';
$route['ustadz/hapus/(:any)'] 			= 'admin/ustadz/delete/$1';

$route['infaq']							= 'admin/infaq';
$route['infaq/tambah']					= 'admin/infaq/add';
$route['infaq/ubah/(:any)']				= 'admin/infaq/edit/$1';
$route['infaq/hapus/(:any)']			= 'admin/infaq/delete/$1';

$route['keuangan']						= 'admin/keuangan';
$route['keuangan/tambah']				= 'admin/keuangan/add';
$route['keuangan/ubah/(:any)']			= 'admin/keuangan/edit/$1';
$route['keuangan/hapus/(:any)']			= 'admin/keuangan/delete/$1';

$route['jumat']							= 'admin/jumat';
$route['jumat/tambah']					= 'admin/jumat/add';
$route['jumat/ubah/(:any)']				= 'admin/jumat/edit/$1';
$route['jumat/hapus/(:any)']			= 'admin/jumat/delete/$1';

$route['pesan']							= 'admin/pesan';
$route['pesan/hapus/(:any)']			= 'admin/pesan/delete/$1';
/*----------------------------------------------------*/

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
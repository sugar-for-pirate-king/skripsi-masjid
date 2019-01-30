<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*-----------------Route Admin------------------------*/ 
$route['login'] 							= 'auth/login';
$route['logout']							= 'auth/logout';
$route['admin/beranda']						= 'admin';

$route['admin/artikel']				     	= 'artikel';
$route['admin/artikel/tambah'] 			 	= 'artikel/add';
$route['admin/artikel/ubah/(:any)'] 		= 'artikel/edit/$1';
$route['admin/artikel/hapus/(:any)/(:any)']	= 'artikel/delete/$1/$2';
$route['admin/artikel/lihat/(:any)']		= 'artikel/read/$1';

$route['admin/pengurus']					= 'pengurus';
$route['admin/pengurus/tambah'] 			= 'pengurus/add';
$route['admin/pengurus/ubah/(:any)'] 		= 'pengurus/edit/$1';
$route['admin/pengurus/hapus/(:any)'] 		= 'pengurus/delete/$1';

$route['admin/ustadz']						= 'ustadz';
$route['admin/ustadz/tambah'] 				= 'ustadz/add';
$route['admin/ustadz/ubah/(:any)'] 			= 'ustadz/edit/$1';
$route['admin/ustadz/hapus/(:any)'] 		= 'ustadz/delete/$1';

$route['admin/infaq']						= 'infaq';
$route['admin/infaq/tambah']				= 'infaq/add';
$route['admin/infaq/ubah/(:any)']			= 'infaq/edit/$1';
$route['admin/infaq/hapus/(:any)']			= 'infaq/delete/$1';

$route['admin/keuangan']					= 'keuangan';
$route['admin/keuangan/tambah']				= 'keuangan/add';
$route['admin/keuangan/ubah/(:any)']		= 'keuangan/edit/$1';
$route['admin/keuangan/hapus/(:any)']		= 'keuangan/delete/$1';

$route['admin/jumat']						= 'jumat';
$route['admin/jumat/tambah']				= 'jumat/add';
$route['admin/jumat/ubah/(:any)']			= 'jumat/edit/$1';
$route['admin/jumat/hapus/(:any)']			= 'jumat/delete/$1';

$route['admin/pesan']						= 'pesan';
$route['admin/pesan/hapus/(:any)']			= 'pesan/delete/$1';
/*---------------------------------------------------*/

/*-----------------Route User------------------------*/
$route['default_controller'] 				= 'beranda';
$route['beranda']							= 'beranda';

$route['sejarah']							= 'sejarah';

$route['profile']							= 'profile';

$route['agenda']							= 'artikel/lihat_agenda';
$route['agenda/(:any)']						= 'artikel/lihat_agenda_detail/$1';

$route['jumat']								= 'jumat/lihat_jumat';

$route['shalat']							= 'shalat';

$route['kajian']							= 'artikel/lihat_kajian';
$route['kajian/(:any)']						= 'artikel/lihat_kajian_detail/$1';

$route['pengurus']							= 'pengurus/lihat_pengurus';

$route['ustadz']							= 'ustadz/lihat_ustadz';

$route['infaq']								= 'infaq/lihat_infaq';

$route['keuangan']							= 'keuangan/lihat_keuangan';

$route['kontak']							= 'pesan/lihat_kontak';

$route['layanan']							= 'artikel/lihat_layanan';
$route['layanan/(:any)']					= 'artikel/lihat_layanan_detail/$1';

$route['pengumuman']						= 'artikel/lihat_pengumuman';
$route['pengumuman/(:any)']					= 'artikel/lihat_pengumuman_detail/$1';
/*---------------------------------------------------*/


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
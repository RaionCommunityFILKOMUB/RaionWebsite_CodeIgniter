<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/

$route['default_controller'] = 'C_Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Root Route
$route['portofolio'] = 'C_Portofolio';
$route['program-kerja'] = 'C_Proker';
$route['anggota'] = 'C_Anggota';
$route['tentang'] = 'C_Tentang';

// Portofolio
$route['portofolio/(:any)'] = 'C_Portofolio/loadDetailPortofolio/$1';

// Program Kerja

// Anggota

// Tentang


// Admin Member
$route['member-login']          = 'C_Login/loadFormLoginMember';
$route['member-login-auth']     = 'C_Login/memberAuth';
$route['member-logout']         = 'C_Login/logoutMember';
$route['member/dashboard']      = 'admin_member/C_MemberDashboard/loadMemberDashboard';
$route['member/lihat-biodata']  = 'admin_member/C_MemberDashboard/loadMemberDashboardLihatBiodata';
$route['member/edit-biodata']   = 'admin_member/C_MemberDashboard/loadMemberDashboardeditBiodata';
$route['member/submit-update-biodata/(:any)'] = 'admin_member/C_MemberDashboard/updateBiodataMember/$1';

$route['dashboard-member']      = 'admin_member/C_MemberDashboard/loadMemberDashboard';

// Admin 
$route['adminrawr']             = 'C_Login/loadFormLoginAdmin';
$route['admin-login-auth']      = 'C_Login/adminAuth';
$route['admin-logout']          = 'C_Login/logoutMember';
$route['dashboard-admin']       = 'admin/C_Admin/loadAdminDashboard';

//Admin-Anggota
$route['admin/anggota/anggota_aktif']   = 'admin/C_Admin/loadAllAnggota';
$route['admin/anggota/edit/(:any)']     = 'admin/C_Admin/loadEditAnggota/$1';
$route['admin/anggota/tambah_anggota']  = 'admin/C_Admin/addAnggota';
$route['admin/anggota/tambah_anggota/submit_tambah_anggota']    = 'admin/C_Admin/submitAddAnggota';
$route['admin/anggota/edit/submit_update_biodata/(:any)']       = 'admin/C_Admin/submitUpdateBiodataAnggota/$1';
$route['admin/anggota/edit/hapus_anggota/(:any)']               = 'admin/C_Admin/deleteAnggota/$1';

//Admin-Portofolio
$route['admin/portofolio/produk']               = 'admin/C_Admin/loadPortofolio';
$route['admin/portofolio/edit/(:any)']          = 'admin/C_Admin/loadEditPortofolio/$1';
$route['admin/portofolio/tambah_portofolio']    = 'admin/C_Admin/addPortofolio';
$route['admin/portofolio/tambah_portofolio/submit_tambah_portofolio']   = 'admin/C_Admin/submitAddPortofolio';
$route['admin/portofolio/edit/submit_edit_portofolio/(:any)']           = 'admin/C_Admin/submitEditPortofolio/$1';
$route['admin/portofolio/edit/hapus_portofolio/(:any)']                 = 'admin/C_Admin/deletePortofolio/$1';
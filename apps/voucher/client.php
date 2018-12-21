<?php

 require 'apps/voucher/models/Voucher.php';
 require 'apps/voucher/models/VoucherCountry.php';


//  _auth();
$ui->assign('_application_menu', 'My Voucher');
$ui->assign('_st', 'My Voucher');
$ui->assign('_title', $config['CompanyName']);


if(isset($routes[2]) && ($routes[2] != '')){
    $action = $routes[2];
}
else{
    $action = 'myvoucher';
}



switch ($action){

  
/*
 *  Add/List Country   (country_list.tpl, modal_edit_country, country_list.js)
 */

    case 'myvoucher':

        $countries = Countries::all(); // may add this $config['country_code']
        // $list_country = ORM::for_table('voucher_country')->order_by_asc('id')->find_array();
        // $baseUrl = APP_URL;

        $c = Contacts::details();

       
        $ui->assign('xheader', Asset::css(array('modal','dp/dist/datepicker.min','footable/css/footable.core.min','dropzone/dropzone','redactor/redactor','s2/css/select2.min')));
        $ui->assign('xfooter', Asset::js(array('modal','dp/dist/datepicker.min','footable/js/footable.all.min','dropzone/dropzone','redactor/redactor.min','numeric','s2/js/select2.min',
            's2/js/i18n/'.lan(),)));


        view('wrapper_client',[
            '_include' => 'client_myvoucher',
            'countries' => $countries,
            'user' => $c
        ]);


        break;

    
    default:
        echo 'action not defined';
        break;

 }
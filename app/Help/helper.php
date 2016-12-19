<?php

function uploadImage($request){
    if($file = $request){
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move('website/images', $filename);
        return $filename;
    }
}

function getImagePath($imageName){
    if($imageName != ''){
        return URL::to('website/images') . '/' . $imageName;
    }
    return getSiteSettings('default_image');
}

function getSiteSettings($siteSetting = 'site_name')
{
    return \App\SiteSetting::where('namesetting', $siteSetting)->first()->value;
}

function setBuildingType($num)
{
    $array = [trans('welcome.apartment'), trans('welcome.villa'), trans('welcome.chalet')];
    return $array[$num];
}

function getBuildingType()
{
    $array = [trans('welcome.apartment'), trans('welcome.villa'), trans('welcome.chalet')];
    return $array;
}

function getBuildingRentType()
{
    $array = [trans('welcome.rent'), trans('welcome.ownership')];
    return $array;
}

function setBuildingRentType($num)
{
    $array = [trans('welcome.rent'), trans('welcome.ownership')];
    return $array[$num];
}

function getStatus()
{
    $array = [trans('welcome.inactive'), trans('welcome.active')];
    return $array;
}

function setStatus($num)
{
    $array = [trans('welcome.inactive'), trans('welcome.active')];
    return $array[$num];
}

function getRoomsNumber()
{
    $array = [];
    for ($i = 2; $i <= 60; $i++) {
        $array[$i] = $i;
    }
    return $array;
}

function retriveValue($fieldName)
{
    if (Session::has($fieldName)) {
        return Session($fieldName);
    }
}

function minRange()
{
    if (Session::has('range')) {
        $min = explode(';', Session('range'));
        return $min[0];
    }
}

function maxRange()
{
    if (Session::has('range')) {
        $max = explode(';', Session('range'));
        return $max[1];
    }
}

function bu_places(){
    return [
        '1'  =>  'البساتين',
        '2'  =>  'التجمع الخامس',
        '3'  =>  'الدراسة',
        '4'  =>  'الزمالك',
        '5'  =>  'مصر الجديدة',
        '6'  =>  'روكسي',
        '7'  =>  'عين شمس',
        '8'  =>  'الهرم',
        '9'  =>  'المهندسين',
        '10'  =>  'الساحل',
        '11'  =>  'الزيتون',
        '12'  =>  'المطرية',
        '13'  =>  'التجمع الأول',
        '14'  =>  'المعادي',
        '15'  =>  'أكتوبر',
        '16'  =>  'المرج',
        '17'  =>  'القاهرة الجديدة',
        '18'  =>  'القبة',
        '19'  =>  'رمسيس',
        '20'  =>  'امبابة',
        '21'  =>  'مدينة نصر',
        '22'  =>  'مدينيتي',
        '23'  =>  'مدينة الشروق',
        '24'  =>  'الزاوية الحمرا',
        '25'  =>  'المرج الجديدة',
        '26'  =>  'وسط القاهرة',
        '27'  =>  'مصر القديمة',
    ];
}
function get_place($id){
    $places = [
        '1'  =>  'البساتين',
        '2'  =>  'التجمع الخامس',
        '3'  =>  'الدراسة',
        '4'  =>  'الزمالك',
        '5'  =>  'مصر الجديدة',
        '6'  =>  'روكسي',
        '7'  =>  'عين شمس',
        '8'  =>  'الهرم',
        '9'  =>  'المهندسين',
        '10'  =>  'الساحل',
        '11'  =>  'الزيتون',
        '12'  =>  'المطرية',
        '13'  =>  'التجمع الأول',
        '14'  =>  'المعادي',
        '15'  =>  'أكتوبر',
        '16'  =>  'المرج',
        '17'  =>  'القاهرة الجديدة',
        '18'  =>  'القبة',
        '19'  =>  'رمسيس',
        '20'  =>  'امبابة',
        '21'  =>  'مدينة نصر',
        '22'  =>  'مدينيتي',
        '23'  =>  'مدينة الشروق',
        '24'  =>  'الزاوية الحمرا',
        '25'  =>  'المرج الجديدة',
        '26'  =>  'وسط القاهرة',
        '27'  =>  'مصر القديمة',
    ];
    return $places[$id];
}

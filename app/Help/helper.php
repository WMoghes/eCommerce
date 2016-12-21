<?php
/**
 * This function received image input from Request and return filename of the image
 * @param $request
 * @return string
 */
function uploadImage($request){
    if($file = $request){
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move('website/images', $filename);
        return $filename;
    }
}

/**
 * This function to return default image from public folder
 * @return mixed Image from public folder
 */
function default_image(){
    return URL::to('website/images/website_images/default-image.png');
}

/**
 * This function received the name of the image and then check if there any image for the building in DB. if not return the default image
 * @param $imageName
 * @return mixed|string
 */
function getImagePath($imageName){
    if($imageName != ''){
        return URL::to('website/images') . '/' . $imageName;
    }
    return default_image();
//    return getSiteSettings('default_image');
}

/**
 * This function return the default image from DB
 * @param string $siteSetting
 * @return string
 */
function getSiteSettings($siteSetting = 'site_name')
{
    return \App\SiteSetting::where('namesetting', $siteSetting)->first()->value;
}

/**
 * This function return the value of BuildingType after receive the key of array
 * @param $num
 * @return mixed
 */
function setBuildingType($num)
{
    $array = [trans('welcome.apartment'), trans('welcome.villa'), trans('welcome.chalet')];
    return $array[$num];
}

/**
 * This function return array of Building types
 * @return array
 */
function getBuildingType()
{
    $array = [trans('welcome.apartment'), trans('welcome.villa'), trans('welcome.chalet')];
    return $array;
}

/**
 * This function return array of Building rent type
 * @return array
 */
function getBuildingRentType()
{
    $array = [trans('welcome.rent'), trans('welcome.ownership')];
    return $array;
}

/**
 * This function return name of rent type after passing the key of the array
 * @param $num
 * @return string
 */
function setBuildingRentType($num)
{
    $array = [trans('welcome.rent'), trans('welcome.ownership')];
    return $array[$num];
}

/**
 * This function return array of status names
 * @return array
 */
function getStatus()
{
    $array = [trans('welcome.inactive'), trans('welcome.active')];
    return $array;
}

/**
 * This function return value of array after passing the key of array
 * @param $num
 * @return mixed
 */
function setStatus($num)
{
    $array = [trans('welcome.inactive'), trans('welcome.active')];
    return $array[$num];
}

/**
 * This function return of room numbers
 * @return array
 */
function getRoomsNumber()
{
    $array = [];
    for ($i = 2; $i <= 60; $i++) {
        $array[$i] = $i;
    }
    return $array;
}

/**
 * This function return value of array after passing the key
 * @param $fieldName
 * @return mixed
 */
function retrieveValue($fieldName)
{
    if (Session::has($fieldName)) {
        return Session($fieldName);
    }
}

/**
 * This function return the min value of array for range
 * @return integer
 */
function minRange()
{
    if (Session::has('range')) {
        $min = explode(';', Session('range'));
        return $min[0];
    }
}

/**
 * This function return the max value of array for range
 * @return integer
 */
function maxRange()
{
    if (Session::has('range')) {
        $max = explode(';', Session('range'));
        return $max[1];
    }
}

/**
 * This function return array of region names
 * @return array
 */
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

/**
 * This function return the region name after pass the key of array
 * @param $id
 * @return mixed
 */
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

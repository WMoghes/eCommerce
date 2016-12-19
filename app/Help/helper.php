<?php

function getSiteSettings($siteSetting = 'site_name')
{
    return \App\SiteSetting::where('namesetting', $siteSetting)->first()->value;
}
function setBuildingType($num){
    $array = [trans('welcome.apartment'), trans('welcome.villa'), trans('welcome.chalet')];
    return $array[$num];
}
function getBuildingType(){
    $array = [trans('welcome.apartment'), trans('welcome.villa'), trans('welcome.chalet')];
    return $array;
}
function getBuildingRentType(){
    $array = [trans('welcome.rent'), trans('welcome.ownership')];
    return $array;
}
function setBuildingRentType($num){
    $array = [trans('welcome.rent'), trans('welcome.ownership')];
    return $array[$num];
}
function getStatus() {
    $array = [trans('welcome.inactive'), trans('welcome.active')];
    return $array;
}
function setStatus($num) {
    $array = [trans('welcome.inactive'), trans('welcome.active')];
    return $array[$num];
}
function getRoomsNumber(){
    $array = [];
    for($i = 2; $i <= 60; $i++){
        $array[$i] = $i;
    }
    return $array;
}
function retriveValue($fieldName){
    if(Session::has($fieldName)){
        return Session($fieldName);
    }
}
function minRange(){
    if(Session::has('range')){
        $min = explode(';', Session('range'));
        return $min[0];
    }
}
function maxRange(){
    if(Session::has('range')){
        $max = explode(';', Session('range'));
        return $max[1];
    }
}
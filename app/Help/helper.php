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
function getStatus() {
    $array = [trans('welcome.active'), trans('welcome.inactive')];
    return $array;
}
function setStatus($num) {
    $array = [trans('welcome.active'), trans('welcome.inactive')];
    return $array[$num];
}
<?php

function getSiteSettings($siteSetting = 'site_name')
{
    return \App\SiteSetting::where('namesetting', $siteSetting)->first()->value;
}
function getBuildingType($num){
    $array = ['شقة', 'فيلا', 'شالية'];
    return $array[$num];
}
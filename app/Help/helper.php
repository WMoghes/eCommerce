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

function paginateCollection($collection, $perPage = 15, $pageName = 'page', $page = null)
{
    $page = $page ?: \Illuminate\Pagination\Paginator::resolveCurrentPage($pageName);
    $page = (int) max(1, $page); // Handle pageResolver returning null and negative values
    $path = \Illuminate\Pagination\Paginator::resolveCurrentPath();

    return new \Illuminate\Pagination\LengthAwarePaginator(
        $collection->forPage($page, $perPage),
        count($collection),
        $perPage,
        $page,
        compact('path', 'pageName')
    );
}
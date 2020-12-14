<?php
use Carbon\Carbon;
function formatDate($dt){
    return Carbon::parse($dt)->format('d-m-Y');
}

function setDate($yy, $mm, $dd){
    return Carbon::create($yy, $mm, $dd, 0, 0, 0, 'Asia/Kolkata');
}

function setDateFromDDMMYYYY($date){
    $dt = explode('-', $date);
    return Carbon::create($dt[2], $dt[1], $dt[0], 0, 0, 0, 'Asia/Kolkata');
}

function durationToDate($duration) {
    $dt1 = explode(' ', $duration);
    //dd($dt1[0]);
    return formatDate($dt1[0]);
}

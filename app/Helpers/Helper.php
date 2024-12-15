<?php

function formatSlash($date)
{
    $value = Carbon\Carbon::parse($date);
    $parse = $value->locale('id');
    return $parse->translatedFormat('d/m/Y');
}

function getStatusBook($value)
{
    return $value ? 'published' : 'draft';
}

function getCoverBook($value)
{
    return $value ? asset('storage/' . $value) : asset('assets/img/cover-blank.jpeg');
}

function getColorBook($value)
{
    return $value === 'published' ? 'bg-success text-white' : 'bg-secondary text-white';
}
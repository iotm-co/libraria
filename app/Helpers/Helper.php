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
    return $value === 'published' ? 'bg-primary text-white' : 'bg-secondary text-white';
}

function getCaraouselImage($value)
{
    return $value ? asset('storage/' . $value) : asset('assets/img/hero-blank.jpg');
}

function getColorCarousel($value)
{
    return $value ? 'bg-primary text-white' : 'bg-secondary text-white';
}

function getStatusCarousel($value)
{
    return $value ? 'active' : 'inactive';
}
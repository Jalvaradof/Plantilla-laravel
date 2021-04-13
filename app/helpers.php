<?php

function setActive($routeName)
{
    return request()->routeIs($routeName) ? 'active' : '';
}

function setTrue($routeName)
{
    return request()->routeIs($routeName) ? 'show' : '';
}
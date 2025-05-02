<?php

namespace App\Interfaces;

interface ServiceProviderInterface
{
    public function getAllServiceProviders($categoryId = null);
    public function getServiceProviderById($id);
}
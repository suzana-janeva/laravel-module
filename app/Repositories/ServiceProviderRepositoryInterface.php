<?php

namespace App\Repositories;

interface ServiceProviderRepositoryInterface
{
    public function getAllServiceProviders($categoryId = null);
    public function getServiceProviderById($id);
}
<?php
namespace msys\V1\Rpc\Service;

class ServiceControllerFactory
{
    public function __invoke($controllers)
    {
        return new ServiceController();
    }
}

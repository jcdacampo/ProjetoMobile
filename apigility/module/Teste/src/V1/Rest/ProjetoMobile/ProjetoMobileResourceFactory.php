<?php
namespace Teste\V1\Rest\ProjetoMobile;

class ProjetoMobileResourceFactory
{
    public function __invoke($services)
    {
        return new ProjetoMobileResource();
    }
}

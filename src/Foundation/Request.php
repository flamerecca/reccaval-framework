<?php

namespace Reccaval\Foundation;

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class Request extends SymfonyRequest
{
    public function capture()
    {
        return SymfonyRequest::createFromGlobals();
    }
}
<?php

namespace TochkaBank;

class SandboxClient extends Client
{
    protected function getPrefixApiPath()
    {
        return 'sandbox/v1';
    }
}

<?php


namespace CkallCloud\Desc;


class ApiDesc
{
    protected $interfaceType = '';
    protected $path = '';
    public function __construct($interfaceType, $path)
    {
        $this->interfaceType = $interfaceType;
        $this->path = $path;
    }

    public function render()
    {
        return 1;
    }


}
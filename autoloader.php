<?php

spl_autoload_register(function (string $className)
{
    include str_replace('\\', '/', $className . '.php');
}
);

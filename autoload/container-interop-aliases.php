<?php
declare(strict_types=1);

use Composer\InstalledVersions;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

// Do not provide `class_alias` for container-interop when upstream project uses `psr/container` v2
if (version_compare(InstalledVersions::getVersion('psr/container'), '2', '>=')) {
    return;
}

class_alias(ContainerInterface::class, '\Interop\Container\ContainerInterface');
class_alias(ContainerExceptionInterface::class, '\Interop\Container\Exception\ContainerException');
class_alias(NotFoundExceptionInterface::class, '\Interop\Container\Exception\NotFoundException');

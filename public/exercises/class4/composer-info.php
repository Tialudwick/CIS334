<?php

declare(strict_types=1);

use Composer\InstalledVersions;

require_once __DIR__ . '/../../../vendor/autoload.php';

$packages = InstalledVersions::getInstalledPackages();
foreach ($packages as $package) {
    echo $package . " @ " . InstalledVersions::getPrettyVersion($package), '<br>', PHP_EOL;
}

if (InstalledVersions::isInstalled('guzzlehttp/guzzle')) {
    echo 'Guzzle is installed<br>', PHP_EOL;
} else {
    echo 'Guzzle is not installed<br>', PHP_EOL;
}

$rootInfo = InstalledVersions::getRootPackage();

echo "Project Name: " . $rootInfo['name'] . "<br>\n";
echo "Project Version: " . $rootInfo['pretty_version'] . "<br>\n";
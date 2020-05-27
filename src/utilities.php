<?php

function getPackageVersion($name) {
    $composer = json_decode(file_get_contents('../composer.lock'), true);
    $version = 'unknown';
    foreach ($composer['packages'] as $package) {
        if ($package['name'] === $name) {
            $version = $package['version'];

            if (strpos($version, 'master') > -1) {
                $version = 'master ' . substr($package['source']['reference'], 0, 7);
            }

            break;
        }
    }

    return $version;
}

<?php
$dir = new RecursiveDirectoryIterator('App');
$iterator = new RecursiveIteratorIterator($dir);

$filesArray = [];

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $openedFile = fopen($file->getPathname(), 'r');
        if ($openedFile) {
            while (!feof($openedFile)) {
                $line = fgets($openedFile);
                if (strpos($line, 'interface ') !== false) {
                    if (array_key_exists($file->getPathname(), $filesArray)) {
                        if (in_array($filesArray[$file->getPathname()], ['abstract', 'class'])) {
                            $filesArray[$file->getPathname()] = 'interface';
                        }
                    }
                }
                if (strpos($line, 'abstract class') !== false) {
                    if (array_key_exists($file->getPathname(), $filesArray)) {
                        if (in_array($filesArray[$file->getPathname()], ['class'])) {
                            $filesArray[$file->getPathname()] = 'abstract';
                        }
                    }
                }
                if (!array_key_exists($file->getPathname(), $filesArray)) {
                    $filesArray[$file->getPathname()] = 'class';
                }
            }
            fclose($openedFile);
        }
    }
}
$interfaceArray = [];
$abstractArray = [];
$classArray = [];
foreach ($filesArray as $path => $type) {
    if ($type == 'interface') $interfaceArray[] = $path;
    if ($type == 'abstract') $abstractArray[] = $path;
    if ($type == 'class') $classArray[] = $path;
}
$resultArray = array_merge($interfaceArray, $abstractArray, $classArray);
foreach ($resultArray as $path) {
    include $path;
}
<?php

/**
 * This function recursively deletes all files and folders under the given directory, and then the directory itself
 *
 * equivalent to Bash: rm -r $dir
 * @param $dir
 */
function rmrdir($dir) {
    $it = new RecursiveDirectoryIterator($dir);
    $it = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);
    foreach($it as $file) {
        if ('.' === $file->getBasename() || '..' ===  $file->getBasename()) continue;
        if ($file->isDir()) rmdir($file->getPathname());
        else unlink($file->getPathname());
    }
    return rmdir($dir);
}
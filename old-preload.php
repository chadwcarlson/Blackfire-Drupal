<?php
$directory = new RecursiveDirectoryIterator(getenv('PLATFORM_APP_DIR') . '/vendor');
$iterator = new RecursiveIteratorIterator($directory);
$regex = new RegexIterator($iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

foreach ($regex as $key => $file) {
    // This is the important part!
    // if ($file[0] != "app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/RiakCache.php") {
    //     opcache_compile_file($file[0]);
    // }
    // print_r($file[0]);
    opcache_compile_file($file[0]);

}
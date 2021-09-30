<?php
/**
 * Preloader Script 2.x
 *
 * This file is generated automatically by the Preloader package.
 *
 * The following script uses `opcache_compile_file($file)` syntax to preload each file in this list into Opcache.
 * To full enable preload, add this file to your `php.ini` in `opcache.preload` key to preload
 * this list of files PHP at startup. This file also includes some information about Opcache.
 *
 *
 * Add (or update) this line in `php.ini`:
 *
 *     opcache.preload=/app/.preload/preloader.php
 *
 *
 * --- Config ---
 * Generated at: 2021-09-29 19:32:53 UTC
 * Opcache
 *     - Used Memory: 34.0 MB
 *     - Free Memory: 30.0 MB
 *     - Wasted Memory: 0.0 MB
 *     - Cached files: 2169
 *     - Hit rate: 89.58%
 *     - Misses: 2010
 * Preloader config
 *     - Memory limit: 32 MB
 *     - Overwrite: true
 *     - Files excluded: 0
 *     - Files appended: 0
 *
 *
 * For more information:
 * @see https://github.com/darkghosthunter/preloader
 */



$files = [];

foreach ($files as $file) {
    try {
        if (!(is_file($file) && is_readable($file))) {
            throw new \Exception("{$file} does not exist or is unreadable.");
        }
        opcache_compile_file($file);
    } catch (\Throwable $e) {
        echo 'Preloader Script has stopped with an error:' . \PHP_EOL;
        echo 'Message: ' . $e->getMessage() . \PHP_EOL;
        echo 'File: ' . $file . \PHP_EOL;

        throw $e;
    }
}


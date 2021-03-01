<?php
// Magic constants
echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';

// Create directory
//mkdir('test');

// Rename directory
//rename('test', 'test2');

// Delete directory
//rmdir('test2');

// Read files and folders inside directory
echo file_get_contents('lorem.txt').'<br>';
file_put_contents('sample.txt', 'Some content');

// file_get_contents, file_put_contents
$files = scandir('../');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo '<pre>';
var_dump($usersJson).'<br><br>';
echo '</pre>';
$users = json_decode($usersJson, true);
echo '<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
echo file_exists('sample.txt').'<br><br>';
// is_dir
echo '<p>Is test a directory? </>'.is_dir('test').'<br><br>';
echo '<p>Is . a directory?  </>'.is_dir('.').'<br><br>';
// filemtime
// filesize
// disk_free_space
// file

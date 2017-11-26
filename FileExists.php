/* FileExists snippet */
/* [[!FileExists &file=`path/to/file`]] */

$path = $modx->getOption('file', $scriptProperties, '');

return file_exists($path)? $path : '';

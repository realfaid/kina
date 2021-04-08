<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'codeigniter4/framework',
  ),
  'versions' => 
  array (
    'benedmunds/codeigniter-ion-auth' => 
    array (
      'pretty_version' => '4.x-dev',
      'version' => '4.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '200b03d961602995939ab82f26afabb61b020028',
    ),
    'codeigniter4/codeigniter4-standard' => 
    array (
      'pretty_version' => 'v1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '051da55337e73cf53f13df0a15ea8e0b76a5facd',
    ),
    'codeigniter4/framework' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.5.x-dev',
      'version' => '1.5.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '6410c4b8352cb64218641457cef64997e6b784fb',
    ),
    'fakerphp/faker' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.15.x-dev',
      ),
      'reference' => '2e032fe3b37c2e85724ac7badcbef540a0bcc496',
    ),
    'kint-php/kint' => 
    array (
      'pretty_version' => '3.x-dev',
      'version' => '3.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '335ac1bcaf04d87df70d8aa51e8887ba2c6d203b',
    ),
    'laminas/laminas-escaper' => 
    array (
      'pretty_version' => '2.8.x-dev',
      'version' => '2.8.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'd827899f8760ee9b746e8f9105e3056e9f6280ff',
    ),
    'laminas/laminas-zendframework-bridge' => 
    array (
      'pretty_version' => '1.3.x-dev',
      'version' => '1.3.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'ff8e9a7832de38fc329eb7cc0bc2b9bdaeddb819',
    ),
    'mikey179/vfsstream' => 
    array (
      'pretty_version' => 'v1.x-dev',
      'version' => '1.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '7299174faac59e63a59c20cd775fbbb4f559d04e',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.x-dev',
      'version' => '1.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '776f831124e9c62e1a2c601ecc52e776d8bb7220',
      'replaced' => 
      array (
        0 => '1.x-dev',
      ),
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.10.4',
      'version' => '4.10.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6d052fc58cb876152f89f532b95a8d7907e7f0e',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.0.x-dev',
      ),
      'reference' => '85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bae7c545bef187884426f042434e561ab1ddb182',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.x-dev',
      ),
      'reference' => 'cf8df60735d98fd18070b7cab0019ba0831e219c',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '5.x-dev',
      ),
      'reference' => 'f8d350d8514ff60b5993dd0121c62299480c989c',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.x-dev',
      'version' => '1.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '6759f2268deb9f329812679e9dcb2d0083b2a30b',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.13.0',
      'version' => '1.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be1996ed8adc35c3fd795488a653f4b518be70ea',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '9.2.x-dev',
      'version' => '9.2.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'f6293e1b30a2354e8428e004689671b83871edde',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '3.0.x-dev',
      ),
      'reference' => '97eb187efc3560da69c5b501235cd3eb1ebfec86',
    ),
    'phpunit/php-invoker' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '3.1.x-dev',
      ),
      'reference' => 'de89b92643f75d97135fd0f895d4369630952c95',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.0.x-dev',
      ),
      'reference' => 'f46a87d94ad351b46c836f6cdda98795e8a6c979',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '5.0.x-dev',
      ),
      'reference' => 'bd80d581ad411a5a4b7e613541a7f4cd09cf0da9',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '9.5.x-dev',
      'version' => '9.5.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '108b2c4bd6b08619c4eeb31fe0a2288b83f01ee4',
    ),
    'predis/predis' => 
    array (
      'pretty_version' => 'v1.1.x-dev',
      'version' => '1.1.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '3271e1edcbfad0b3d2ddb2d6e14daf47c7aaeb9f',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.x-dev',
      'version' => '1.1.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/log' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.1.x-dev',
      ),
      'reference' => 'a18c1e692e02b84abbafe4856c3cd7cc6903908c',
    ),
    'sebastian/cli-parser' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.0.x-dev',
      ),
      'reference' => 'e59dfbeeaf6ccdff168c537427cbc9f7fed6b160',
    ),
    'sebastian/code-unit' => 
    array (
      'pretty_version' => '1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.0.x-dev',
      ),
      'reference' => 'f7ee1d817bdd8a8bdfb76b11fa851204132ef6d9',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '4.0.x-dev',
      ),
      'reference' => '604de433dd3e1467ded9a92414b3561a812554c5',
    ),
    'sebastian/complexity' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '4.0.x-dev',
      ),
      'reference' => '3fa178cf5772d7a09bcfe01bfb7acc13edcf8aec',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '5.1.x-dev',
      ),
      'reference' => '1fe23c75ca20a9cfe5ef8af473c726f9ef7e9465',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '4.0.x-dev',
      ),
      'reference' => '31abe95278f9b406051b4a26faf2677fbcc01755',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '5.0.x-dev',
      ),
      'reference' => '8684de2d84cd6a819f5e22a1292cd3b2e1f26487',
    ),
    'sebastian/lines-of-code' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '4.0.x-dev',
      ),
      'reference' => 'b331fc5975a2225e6b93c7e6cd9fce0a57f0fddc',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.0.x-dev',
      ),
      'reference' => '297a334e3ae78670a7633e36569d7362bb7397bf',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '4.0.x-dev',
      ),
      'reference' => '78526ace5bac7c10048020f0317c58fd310a14ec',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '3.0.x-dev',
      ),
      'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.3.x-dev',
      ),
      'reference' => '17fc98bb3c75a02a1a99ffdd022e84ac6d22bd51',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
    ),
    'squizlabs/php_codesniffer' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '3.x-dev',
      ),
      'reference' => '97f78982711bdf122200dc37be6f33dfbd4aa4dd',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '2.4.x-dev',
      ),
      'reference' => '5f38c8804a9e97d23e0c8d63341088cd8a22d627',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
        0 => '1.22.x-dev',
      ),
      'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '75a63c33a8577608444246075ea0af0d052e452a',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '1.10.x-dev',
      ),
      'reference' => 'f07851c5b43e4cb502c24068620e9af6cbdd953f',
    ),
    'zendframework/zend-escaper' => 
    array (
      'replaced' => 
      array (
        0 => '^2.6.1',
      ),
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}

<?php namespace KevBaldwyn\Image\Cache;

use KevBaldwyn\Image\Providers\ProviderInterface;
use KevBaldwyn\Image\Image;

interface CacherInterface {

	public function init($imgPath, $operations, $cacheLifetime);

	public function exists();

	public function serve();

	public function put($data);

	public function register(Image $image);
}
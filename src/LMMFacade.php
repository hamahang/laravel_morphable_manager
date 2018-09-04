<?php
namespace ArtinCMS\LMM;
use Illuminate\Support\Facades\Facade;

class LMMFacade extends Facade
{
	protected static function getFacadeAccessor() {
		return 'LMM';
	}
}
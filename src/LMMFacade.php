<?php
namespace Hamahang\LMM;
use Illuminate\Support\Facades\Facade;

class LMMFacade extends Facade
{
	protected static function getFacadeAccessor() {
		return 'LMM';
	}
}
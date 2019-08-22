<?php 
namespace LetMeProto\Core\Http;

use Psr\Http\Message\RequestInterface;

interface Controller {
	public function install(RequestInterface $request);
	
}
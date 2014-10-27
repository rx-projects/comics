<?php

/*
 * To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

error_reporting(E_ALL | E_STRICT);
include_once (MODEL_PATH .'/ImageUploader.php');
include_once(RUDRA_HANDLER . "/AbstractDataHandler.php");

class Uploader extends AbstractDataHandler {

	public function invokeHandler(User $user, $img, $page,$q,$action) {
		if($user->isValid()){
			$upload_handler = new ImageUploader(array(
				'user_token' => $user->getToken(),
			));
		}
	}

}

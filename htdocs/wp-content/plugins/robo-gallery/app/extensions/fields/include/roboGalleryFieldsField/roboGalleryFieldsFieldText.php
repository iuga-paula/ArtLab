<?php
/* 
*      Robo Gallery     
*      Version: 3.0.4 - 47168
*      By Robosoft
*
*      Contact: https://robosoft.co/robogallery/ 
*      Created: 2015
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php

 */


class roboGalleryFieldsFieldText extends roboGalleryFieldsField{
	
	protected function getDefaultOptions(){
		return array(
			'textBefore' => '',
			'textAfter' => '',
		);
	}
}

<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\View\Helper;

use Cake\View\Helper;

/**
 * App View class
 */
class CamposFormHelper extends Helper
{
	public $helpers = ['Html','Form'];

	public function finalizaForm($textoBotao)
	{
		$boxFooter = $this->Html->div(
			"box-footer",
			$this->Form->button($textoBotao, ["class" => "btn btn-primary"])
		);		
		$finalForm = $this->Form->end();
		return $boxFooter.$finalForm;
	}
}

<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$titulo = 'SoftContabil';
?>
<!DOCTYPE html>
<html>
	<head>
		<?= $this->Html->charset() ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?= $titulo ?>::<?= $this->fetch('title') ?></title>
		<?= $this->Html->meta('icon') ?>
		<?= $this->fetch('meta') ?>
		<?= $this->fetch('css') ?>
		<!-- novos css -->
		<?= 
			$this->Html->css([
				'bootstrap.min',
				'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
				'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
				'jquery-jvectormap-1.2.2',
				'AdminLTE.min',
				'_all-skins.min'
			]) 
		?>
		<?= 
			$this->Html->script([
				'jQuery-2.1.4.min',
				'bootstrap.min','fastclick.min',
				'app.min','jquery.sparkline.min',
				'jquery-jvectormap-1.2.2.min',
				'jquery-jvectormap-world-mill-en',
				'jquery.slimscroll.min',
				'Chart.min',
				'dashboard2',
				'demo'
			]) 
		?>
	</head>
	<body class="skin-blue sidebar-mini">
		<div class="wrapper">
			<?= $this->Element("header"); ?>
			<?= $this->Element("menu"); ?>
			<div class="content-wrapper">
				<?= $this->Element("tituloPaginas"); ?>
				<section class="content">
					<div class="row">
						<?= $this->fetch("content"); ?>
					</div>
				</section>
			</div>
			<?= $this->Element("footer"); ?>
			<div class="control-sidebar-bg"></div>
		</div>
	</body>
</html>
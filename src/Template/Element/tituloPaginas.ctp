			<section class="content-header">
				<h1>
					<?= $this->fetch('title') ?>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> <?= $this->request->params['controller'] ?></a></li>
					<li class="active">
						<?php 
							switch ($this->request->params['action']) {
								case 'add':
									echo "Adicionar";
									break;
								case 'edit':
									echo "Editar";
									break;
							}
						?>
					</li>
				</ol>
			</section>

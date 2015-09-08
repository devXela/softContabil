			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
<!-- 					<div class="user-panel">
						<div class="pull-left image">
							<img src="img/user2-160x160.jpg" class="img-circle" alt="User Image" />
						</div>
						<div class="pull-left info">
							<p>Alexander Pierce</p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
 -->					<!-- search form -->
<!-- 					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search..." />
							<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
 -->					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header text-center">MENU DE NAVEGAÇAO</li>
<!--             <li class="active treeview">
			  <a href="#">
				<i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
			  </a>
			  <ul class="treeview-menu">
				<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
				<li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
			  </ul>
			</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-files-o"></i>
				<span>Layout Options</span>
				<span class="label label-primary pull-right">4</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
				<li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
				<li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
				<li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
			  </ul>
			</li>
		-->            
<!--             <li>
			  <a href="pages/widgets.html">
				<i class="fa fa-building"></i> <span>Empresas</span> <small class="label pull-right bg-green">new</small>
			  </a>
			</li>
		-->            
		<li class="treeview">
			<a href="#">
				<i class="fa fa-bullseye"></i> <span>Atividades das Empresas</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li>
					<?= $this->Html->link('<i class="fa fa-list-alt"></i> Listar atividades', '/atividadeEmpresas', ['escape' => false]) ?>
				</li>
				<li>
					<?= $this->Html->link('<i class="fa fa-upload"></i> Nova atividade ', '/atividadeEmpresas/add', ['escape' => false]) ?>
				</li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-money"></i> <span>Bancos</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li>
					<?= $this->Html->link('<i class="fa fa-list-alt"></i> Listar bancos', '/bancos', ['escape' => false]) ?>
				</li>
				<li>
					<?= $this->Html->link('<i class="fa fa-upload"></i> Novo bancos', '/bancos/add', ['escape' => false]) ?>
				</li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-truck"></i> <span>Cat. de Fornecedores</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li>
					<?= $this->Html->link('<i class="fa fa-list-alt"></i> Listar fornecedores', '/bancos', ['escape' => false]) ?>
				</li>
				<li>
					<?= $this->Html->link('<i class="fa fa-upload"></i> Novo fornecedor', '/bancos/add', ['escape' => false]) ?>
				</li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-suitcase"></i> <span>Classe de Fornecedores</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li>
					<?= $this->Html->link('<i class="fa fa-list-alt"></i> Listar classes', '/classeFornecedores', ['escape' => false]) ?>
				</li>
				<li>
					<?= $this->Html->link('<i class="fa fa-upload"></i> Nova classe', '/classeFornecedores/add', ['escape' => false]) ?>
				</li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-star"></i> <span>Clientes</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li>
					<?= $this->Html->link('<i class="fa fa-list-alt"></i> Listar clientes', '/clientes', ['escape' => false]) ?>
				</li>
				<li>
					<?= $this->Html->link('<i class="fa fa-upload"></i> Novo cliente', '/clientes/add', ['escape' => false]) ?>
				</li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-building"></i> <span>Empresas</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li>
					<?= $this->Html->link('<i class="fa fa-list-alt"></i> Listar empresas', '/empresas', ['escape' => false]) ?>
				</li>
				<li>
					<?= $this->Html->link('<i class="fa fa-upload"></i> Nova empresa', '/empresas/add', ['escape' => false]) ?>
				</li>
			</ul>
		</li>
	</ul>
	</section>
</aside>
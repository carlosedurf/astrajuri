<div class="right_col" role="main">
		
			<div class="">
				<div class="page-title">
				  <div class="title_left">
					<h3>Lista de Clientes </h3>
				  </div>
				</div>
			</div>
		
			
            <div class="clearfix"></div>
			
			<div id="main" class="container-fluid" style="margin-top: 50px">
 
			<div id="top" class="row">
				<div class="col-sm-3">
					
					<div class="input-group h2">
						<input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Cliente">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="submit">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
					
				</div>
				<div class="col-sm-6">
					<a href="http://localhost/astrajuri/producao/addCliente.php" class="btn btn-primary pull-right h2">Novo Cliente</a>
				</div>
			</div> <!-- /#top -->
 
			<hr/>        
 	
			<div id="list" class="row">
			
			<div class="table-responsive col-md-12">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
                                    <thead>
                                            <tr>
                                                    <th>CPF / CNPJ</th>
                                                    <th>Cliente</th>
                                                    <th>Advogado</th>
                                                    <th>Data</th>
                                                    <th class="actions">Ações</th>
                                            </tr>
                                    </thead>
                                    <tbody>
					<tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
						
					</tbody>
				</table>
			</div>
			</div> <!-- /#list -->
	
			<div id="bottom" class="row">
				<div class="col-md-12">
					<ul class="pagination">
						<li class="disabled"><a>&lt; Anterior</a></li>
						<li class="disabled"><a>1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
					</ul><!-- /.pagination -->
				</div>
			</div> <!-- /#bottom -->
		 </div> <!-- /#main -->

		 Modal 
		<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modalLabel">Excluir Item</h4>
			  </div>
			  <div class="modal-body">
				Deseja realmente excluir este cliente?
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-primary">Sim</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
			  </div>
			</div>
		  </div>
		</div>
		</div>

        <!-- jQuery -->
        <script src="<?= HOME; ?>/assets/bootstrap/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?= HOME; ?>/assets/bootstrap/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?= HOME; ?>/assets/bootstrap/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?= HOME; ?>/assets/bootstrap/nprogress/nprogress.js"></script>
        <!-- iCheck -->
        <script src="<?= HOME; ?>/assets/bootstrap/iCheck/icheck.min.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?= HOME; ?>/assets/js/custom.min.js"></script>
<div class="conteudo">
	<div class="base-home">
		<div class="rows">
			<div class="centro">
				<div class="caixa">
					<span class="titulo"><i class="fas fa-tags"></i> Vendas </span>
					<div class="base-form p-4">
						<h2 class="h4 mb-4 text-azul border-bottom">Nova venda</h2>
						<div class="rows">
							<div class="col-6 d-flex">
								<div class="border p-2 radius-4 width-100">
									<div class="rows">
										<div class="col-12 position-relative">
											<form action="" class="mt-3">

												<span class="label">SELECIONE UM CLIENTE: </span>
												<input type="text" id="buscarCliente" class="form-campo" autocomplete="off">

												<div class="border radius-4 mt-1">
													<p class="mb-0 p-2 py-1 border-bottom"><small><b>Código:</b> <span id="id_cliente">1</span></small></p>
													<p class="mb-0 p-2 py-1 border-bottom"><small><b>Nome:</b> <span id="nome">Cliente Padrão</span></small></p>
													<p class="mb-0 p-2 py-1 border-bottom"><small><b>Endereço:</b> <span id="endereco">Rua tal, 15</span></small></p>
													<p class="mb-0 p-2 py-1 border-bottom"><small><b>Cidade:</b> <span id="cidade">Cidade tal</span></small></p>
													<p class="mb-0 p-2 py-1 border-bottom"><small><b>Bairro:</b> <span id="bairro">Bairro tal</span></small></p>
													<p class="mb-0 p-2 py-1 border-bottom"><small><b>Email:</b> <span id="email">mjailton@gmail.com</span></small></p>
												</div>
											</form>
										</div>

									</div>
								</div>
							</div>
							<div class="col-6 d-flex">
								<div class="border p-2 radius-4 width-100">
									<h3 class="text-azul text-uppercase mb-2">Dados da venda</h3>
									<div class="rows">
										<div class="col-12 mb-3">
											<span class="label">Cliente</span>
											<input type="text" value="Cliente Padrão" class="form-campo">
										</div>
										<div class="col-6 mb-3">
											<span class="label">Código</span>
											<input type="text" id="id_venda" value="10" class="form-campo">
										</div>
										<div class="col-6 mb-3">
											<span class="label">Hora</span>
											<input type="text" value="06:49:01" class="form-campo">
										</div>
										<div class="col-6 mb-3">
											<span class="label">Total</span>
											<input type="text" value="500.00" class="form-campo">
										</div>
										<div class="col-6 mb-3">
											<span class="label">Data</span>
											<input type="text" value="17/05/2020" class="form-campo">
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="caixa mt-4" style="min-height:auto">
							<div class="marcacao">
								<h3 class="titulo">Itens da venda</h3>
								<div class="p-4">
									<div class="rows">
										<div class="col-4 mb-2">
											<span class="label">Produto</span>
											<input type="text" id="produto" name="produto" class="form-campo">
										</div>
										<div class="col-2 mt-3 pt-2">
											<a href="javascript:;" onclick="abrirModal('#janela1')" class="btn btn-azul">Buscar</a>
										</div>
										<div class="col-2 mb-2">
											<span class="label">Preço</span>
											<input type="text" value="preco" id="preco" class="form-campo">
										</div>
										<div class="col-2 mb-2">
											<span class="label">Qtde</span>
											<input type="text" value="qtde" id="qtde" class="form-campo">
										</div>
										<div class="col-2 mt-3 pt-2">
											<input type="hidden" id="id_produto" name="id_produto">
											<input type="button" class="btn btn-verde width-100" value="Inserir" id="btInserirItemVenda">
										</div>
									</div>
								</div>

								<div class="base-lista">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
										<thead>
											<tr>
												<th width="2%" align="left">Id</th>
												<th width="48%" align="center">Produto</th>
												<th align="left">Qtfr</th>
												<th align="center">Valor</th>
												<th align="center">Subtotal</th>
												<th align="center">Excluir</th>
											</tr>
										</thead>
										<tbody id="lista_itens_vendas">
											<tr>
												<td>18</td>
												<td>Monitor CCE e</td>
												<td align="center">1</td>
												<td align="center">500.00</td>
												<td align="center">500.00</td>
												<td align="center"><a href="" class="btn btn-outline-vermelho">Excluir</a></td>

											</tr>

										</tbody>
									</table>
								</div>
								<div class="d-flex text-end p-3">
									<a href="" class="btn btn-amarelo mr-1"><i class="fas fa-times"></i> Limpar Itens</a>
									<a href="" class="btn btn-vermelho"><i class="fas fa-check"></i> Cancelar</a>
									<a href="" class="btn btn-verde mr-1"><i class="fas fa-check"></i> Finalizar</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- selecionar cliente-->
<div class="window" id="janela1">
	<div class="caixa">
		<span class="titulo">Selecionar cliente</span>
		<a href="" class="fechar"><b>X</b></a>
		<div class="base-home">
			<div class="base-lista px-4">
				<form action="" method="">
					<div class="base-pesquisa">
						<div class="base-form alt p-4 mb-3">
							<div class="rows">
								<div class="col-2">
									<label class="label">Código:</label>
									<input type="text" id="pesq_codigo" placeholder="pesquisar" class="form-campo">
								</div>
								<div class="col-4">
									<label class="label">Nome:</label>
									<input type="text" id="pesq_nome" placeholder="pesquisar" class="form-campo">
								</div>
								<div class="col-4">
									<label class="label">Email:</label>
									<input type="text" id="pesq_email" placeholder="pesquisar" class="form-campo">
								</div>
								<div class="col-2 mt-3">
									<input type="button" value="Pesquisar" onclick="buscarAluno()" class="btn btn-roxo mt-3 width-100">
								</div>
							</div>
						</div>
						<div class="scroll-234">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<thead>
									<tr>
										<th align="center">Id</th>
										<th align="left">Titulo</th>
										<th align="center">Editora</th>
										<th align="center">Ação</th>
									</tr>
								</thead>
								<tbody id="listaAlunos">
									<tr>
										<td align="center">1</td>
										<td>Sítio do pica pau amarelo</td>
										<td align="center">Abreu</td>
										<td align="center"><a href="" class="btn btn-verde d-inline-block">selecionar</a></td>
									</tr>
									<tr>
										<td align="center">1</td>
										<td>Sítio do pica pau amarelo</td>
										<td align="center">Abreu</td>
										<td align="center"><a href="" class="btn btn-verde d-inline-block">selecionar</a></td>
									</tr>
									<tr>
										<td align="center">1</td>
										<td>Sítio do pica pau amarelo</td>
										<td align="center">Abreu</td>
										<td align="center"><a href="" class="btn btn-verde d-inline-block">selecionar</a></td>
									</tr>
									<tr>
										<td align="center">1</td>
										<td>Sítio do pica pau amarelo</td>
										<td align="center">Abreu</td>
										<td align="center"><a href="" class="btn btn-verde d-inline-block">selecionar</a></td>
									</tr>
									<tr>
										<td align="center">1</td>
										<td>Sítio do pica pau amarelo</td>
										<td align="center">Abreu</td>
										<td align="center"><a href="" class="btn btn-verde d-inline-block">selecionar</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="fundo_preto"></div>
</div>
</div>
<div class="conteudo">
	<div class="base-home">
		<div class="rows">
			<div class="centro">
				<div class="caixa">
					<span class="titulo"><i class="fas fa-boxes"></i> Entrada de produtos </span>
					<div class="rows px-4 pb-5 pt-3">
						<div class="col-12 p-2 text-right">
							<a href="" class="btn btn-verde d-inline-block filtro"><i class="fas fa-filter"></i> filtar</a>
						</div>
						<div class="col-12">
							<form action="" name="">
								<div class="base-form alt p-2 pb-4 mostraFiltro">
									<div class="rows">
										<div class="col-6">
											<span class="label"> Produto</span>
											<input type="text" id="produto" data-type="localizar_produto" class="form-campo" />

										</div>
										<div class="col-2">
											<span class="label"> Valor</span>
											<input type="text" id="preco" name="preco" id="preco" class="form-campo">
										</div>
										<div class="col-2">
											<span class="label"> Qtde</span>
											<input type="text" value="1" id="qtde" name="qtde" id="qtde" class="form-campo">
										</div>

										<div class="col-2 mt-3 p-2">
											<input type="hidden" id="id_produto" name="id_produto">
											<input type="button" name="Submit" class="btn btn-azul width-100" value="Inserir" id="btnInserir">
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-12">
							<div class="tabela pt-2">
								<table id="dataTable" width="100%" border="0" cellpadding="0" cellspacing="0">
									<thead>
										<tr>
											<th width="2%" align="center">Id</th>
											<th width="34%" align="center">Data</th>
											<th width="23%" align="center">Produto</th>
											<th align="center">Quantidade</th>
											<th align="center">Valor</th>
											<th align="center">Subtotal</th>
										</tr>
									</thead>
									<tbody id="lista_itens">
										<tr>
											<td align="center">1</th>
											<td align="center">10/06/2020</th>
											<td align="center">Produto</th>
											<td align="center">12</th>
											<td align="center">100,00</th>
											<td align="center">100,00</th>
										</tr>
										<tr>
											<td align="center">1</th>
											<td align="center">10/06/2020</th>
											<td align="center">Produto</th>
											<td align="center">12</th>
											<td align="center">100,00</th>
											<td align="center">100,00</th>
										</tr>
										<tr>
											<td align="center">1</th>
											<td align="center">10/06/2020</th>
											<td align="center">Produto</th>
											<td align="center">12</th>
											<td align="center">100,00</th>
											<td align="center">100,00</th>
										</tr>
										<tr>
											<td align="center">1</th>
											<td align="center">10/06/2020</th>
											<td align="center">Produto</th>
											<td align="center">12</th>
											<td align="center">100,00</th>
											<td align="center">100,00</th>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th width="2%" align="center">Id</th>
											<th width="34%" align="center">Data</th>
											<th width="23%" align="center">Produto</th>
											<th align="center">Quantidade</th>
											<th align="center">Valor</th>
											<th align="center">Subtotal</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
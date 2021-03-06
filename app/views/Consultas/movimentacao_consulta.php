<div class="conteudo">
	<div class="base-home">
		<div class="rows">
			<div class="centro">
				<div class="caixa">
					<span class="titulo"><i class="fas fa-boxes"></i> Consulta de movimentação de produtos </span>
					<div class="rows px-4 pb-5 pt-3">
						<div class="col-12 p-2 text-right">
							<a href="" class="btn btn-verde d-inline-block filtro"><i class="fas fa-filter"></i> filtar</a>
						</div>
						<div class="col-12">
							<form action="" method="GET">
								<div class="">
									<div class="base-form alt p-2 pb-4 mostraFiltro">
										<div class="rows">
											<div class="col-4">
												<span class="label"> Produto</span>
												<select name="id_produto" class="form-campo">
													<option value="">Selecione uma opção</option>
													<option value='1'>Monitor CCE e</option>
													<option value='2'>Teclado Multilaser </option>
												</select>
											</div>
											<div class="col-3">
												<span class="label"> Data início</span>
												<input type="date" name="data_inicio" value="" class="form-campo">
											</div>
											<div class="col-3">
												<span class="label"> Data Fim</span>
												<input type="date" name="data_fim" value="" class="form-campo">
											</div>

											<div class="col-2 mt-3 pt-2">
												<input type="submit" name="Submit" class="btn btn-azul width-100" value="Pesquisar" id="btnInserir">
											</div>
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
											<th align="center">Motivo</th>
										</tr>
									</thead>
									<tbody id="lista_itens">
										<tr>
											<td align="center">1</td>
											<td align="center">10/02/2017</td>
											<td align="center">Monitor CCE e</td>
											<td align="center">30</td>
											<td align="center">0.00</td>
											<td align="center">0.00</td>
											<td align="center">Saída Avulsa</td>
										</tr>
										<tr>
											<td align="center">2</td>
											<td align="center">16/05/2020</td>
											<td align="center">Monitor CCE e</td>
											<td align="center">1</td>
											<td align="center">500.00</td>
											<td align="center">500.00</td>
											<td align="center">Saida Avulsa</td>
										</tr>
										<tr>
											<td align="center">3</td>
											<td align="center">16/05/2020</td>
											<td align="center">Teclado Multilaser </td>
											<td align="center">1</td>
											<td align="center">20.00</td>
											<td align="center">20.00</td>
											<td align="center">Saida Avulsa</td>
										</tr>
										<tr>
											<td align="center">4</td>
											<td align="center">16/05/2020</td>
											<td align="center">Teclado Multilaser </td>
											<td align="center">10</td>
											<td align="center">20.00</td>
											<td align="center">200.00</td>
											<td align="center">Saida Avulsa</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th align="center">Id</th>
											<th align="center">Data</th>
											<th align="center">Produto</th>
											<th align="center">Quantidade</th>
											<th align="center">Valor</th>
											<th align="center">Subtotal</th>
											<th align="center">Motivo</th>
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
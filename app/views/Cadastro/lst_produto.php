<div class="conteudo">
	<div class="base-home">
		<div class="caixa mb-3">
			<span class="titulo"><i class="fas fa-list-alt"></i> Lista de produtos</span>
			<div class="width-100 p-2 text-right">
				<a href="<?php echo URL_BASE . "produto/cadastrar" ?>" class="btn btn-azul d-inline-block"><i class="fas fa-plus-circle"></i> Cadatrar novo</a>
				<a href="" class="btn btn-verde d-inline-block filtro"><i class="fas fa-filter"></i> filtar</a>
			</div>
			<form action="" name="">
				<div class="px-2">
					<div class="base-form alt p-2 pb-4 mostraFiltro">
						<div class="rows">
							<div class="col-10">
								<span class="label"> Produto</span>
								<input type="text" name="termodabusca" value="" class="form-campo" />
							</div>
							<div class="col-2 mt-3 pt-2">
								<input type="submit" name="Submit" value="Pesquisar" class="btn btn-azul width-100">
							</div>
						</div>
					</div>
				</div>
			</form>

			<div class="tabela p-2">
				<!--mensagens-->
				<span class="msg sucesso"><i class="fas fa-check"></i> Mensagem de sucesso <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				<span class="msg erro"><i class="fas fa-exclamation-triangle"></i> Mensagem de erro<a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>

				<table id="dataTable" width="100%" border="0" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<th align="center">ID</th>
							<th align="center">Produto</th>
							<th align="center">Preço</th>
							<th align="center">Inicial</th>
							<th align="center">Mínimo</th>
							<th align="center">Atual</th>
							<th align="center">Ação</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="center">1</td>
							<td align="center">Monitor CCE e</td>
							<td align="center">500.00</td>
							<td align="center">100</td>
							<td align="center">100</td>
							<td align="center">168</td>
							<td align="center">
								<a href="" class="btn btn-outline-verde">Editar</a>
								<a href="" class="btn btn-outline-vermelho">Excluir</a>
							</td>
						</tr>
						<tr>
							<td align="center">2</td>
							<td align="center">Teclado Multilaser </td>
							<td align="center">20.00</td>
							<td align="center">150</td>
							<td align="center">100</td>
							<td align="center">82</td>
							<td align="center">
								<a href="h" class="btn btn-outline-verde">Editar</a>
								<a href="" class="btn btn-outline-vermelho">Excluir</a>
							</td>
						</tr>
						<tr>
							<td align="center">2</td>
							<td align="center">Teclado Multilaser </td>
							<td align="center">20.00</td>
							<td align="center">150</td>
							<td align="center">100</td>
							<td align="center">82</td>
							<td align="center">
								<a href="h" class="btn btn-outline-verde">Editar</a>
								<a href="" class="btn btn-outline-vermelho">Excluir</a>
							</td>
						</tr>
						<tr>
							<td align="center">2</td>
							<td align="center">Teclado Multilaser </td>
							<td align="center">20.00</td>
							<td align="center">150</td>
							<td align="center">100</td>
							<td align="center">82</td>
							<td align="center">
								<a href="h" class="btn btn-outline-verde">Editar</a>
								<a href="" class="btn btn-outline-vermelho">Excluir</a>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th align="center">ID</th>
							<th align="center">Produto</th>
							<th align="center">Preço</th>
							<th align="center">Inicial</th>
							<th align="center">Mínimo</th>
							<th align="center">Atual</th>
							<th align="center">Ação</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
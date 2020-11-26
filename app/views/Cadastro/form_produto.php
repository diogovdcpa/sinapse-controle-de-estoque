<div class="conteudo">
	<div class="base-home">
		<div class="caixa mb-3">
			<span class="titulo"><i class="fas fa-arrow-circle-right" aria-hidden="true"></i> Cadastrar Produto</span>
			<form action="" method="POST">
				<div class="base-form p-2 pb-4">
					<div class="px-4">
						<!--mensagens-->
						<span class="msg sucesso"><i class="fas fa-check"></i> Mensagem de sucesso <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
						<span class="msg erro"><i class="fas fa-exclamation-triangle"></i> Mensagem de erro<a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>

						<div class="rows mt-4">
							<div class="col-4 img-up">
								<div class="campo-upload">
									<label for="arquivo">
										<img src="<?php echo ASSETS ?>assets/img/img-semproduto.png" id="imgUp" class="img-fluido">
										<span>Inserir produto</span>
									</label>
									<input type="file" name="arquivo" id="arquivo" onchange="pegaArquivo(this.files)">
								</div>
								<div id="uploadStatus"></div>
							</div>
							<div class="col-8">
								<div class="rows">
									<div class="col-12 mb-3">
										<span class="label">Produto</span> <input type="text" name="produto" id="txt_twitter" value="" class="form-campo">
									</div>
									<div class="col-3 mb-3">
										<span class="label">Preço</span> <input type="text" name="preco" id="" value="" class="form-campo">
									</div>
									<div class="col-3 mb-3">
										<span class="label">Estoque Inicial</span> <input type="text" name="estoque_inicial" id="" value="" class="form-campo">
									</div>

									<div class="col-3 mb-3">
										<span class="label">Estoque Mínimo</span> <input type="text" name="estoque_minimo" id="" value="" class="form-campo">
									</div>

									<div class="col-3 mb-3">
										<span class="label">Estoque atual</span> <input type="text" name="estoque_atual" id="" value="" class="form-campo">
									</div>
								</div>

								<div class="mt-2">
									<input type="hidden" name="id_produto" value="">

									<input type="submit" value="Salvar alterações" class="btn btn-azul m-auto d-table">
								</div>
							</div>

						</div>
					</div>

				</div>
			</form>

		</div>

	</div>
</div>
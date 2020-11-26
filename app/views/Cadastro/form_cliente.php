<div class="conteudo">
	<div class="base-home">
		<div class="caixa mb-3">
			<span class="titulo"><i class="fas fa-arrow-circle-right" aria-hidden="true"></i> Cadastrar Leitor</span>
			<form action="" method="POST">
				<div class="base-form p-2 pb-4">
					<!--mensagens-->
					<span class="msg sucesso"><i class="fas fa-check"></i> Mensagem de sucesso <a href="javascript:;"
							onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
					<span class="msg erro"><i class="fas fa-exclamation-triangle"></i> Mensagem de erro<a
							href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>

					<div class="px-4">
						<div class="rows mt-4">
							<div class="col-12 mb-3">
								<span class="label">Nome cliente</span>
								<input type="text" name="cliente" id="cliente" value="" class="form-campo">
							</div>

							<div class="col-3 mb-3">
								<span class="label">Cep</span>
								<input type="text" name="cep" id="cep" value="" class="form-campo">
							</div>

							<div class="col-6 mb-3">
								<span class="label">Logradouro</span>
								<input type="text" name="endereco" id="endereco" value="" class="form-campo">
							</div>

							<div class="col-3 mb-3">
								<span class="label">Complemento</span>
								<input type="text" name="complemento" id="complemento" value="" class="form-campo">
							</div>


							<div class="col-4 mb-3">
								<span class="label">Bairro</span>
								<input type="text" name="bairro" id="bairro" value="" class="form-campo">
							</div>
							<div class="col-4 mb-3">
								<span class="label">UF</span>
								<input type="text" name="uf" id="uf" value="" class="form-campo">
							</div>
							<div class="col-4 mb-3">
								<span class="label">Cidade</span>
								<input type="text" name="cidade" id="cidade" value="" class="form-campo">
							</div>
							<div class="col-4 mb-3">
								<span class="label">Sexo</span>
								<input type="text" name="sexo" id="sexo" value="" class="form-campo">
							</div>


							<div class="col-4 mb-3">
								<span class="label">RG</span>
								<input type="text" name="rg" id="rg" value="" class="form-campo">
							</div>

							<div class="col-4 mb-3">
								<span class="label">CPF</span>
								<input type="text" name="cpf" id="cpf" value="" class="form-campo">
							</div>

							<div class="col-8 mb-3">
								<span class="label">Email</span>
								<input type="text" name="email" id="email" value="" class="form-campo">
							</div>


							<div class="col-4 mb-3">
								<span class="label">Data de cadatro</span>
								<input type="date" name="txt_site" id="txt_site" value="" class="form-campo">
							</div>

						</div>
					</div>

					<div class="mt-2">
						<input type="hidden" name="id_cliente" value="">
						<input type="submit" value="Salvar alterações" class="btn btn-azul m-auto d-table">
					</div>
				</div>
			</form>

		</div>

	</div>
</div>
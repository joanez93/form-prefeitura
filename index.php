<?php
	// busca a biblioteca recaptcha
	require_once "recaptchalib.php";

    // sua chave secreta
	$secret = "6LdMrQ4TAAAAABEuE3ht6zTvRnYJcqMFbcns_Li2";
	 
	// resposta vazia
	$response = null;
	 
	// verifique a chave secreta
	$reCaptcha = new ReCaptcha($secret);

	if ($_POST["g-recaptcha-response"]) {
		$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
?>


<!DOCTYPE html>
<html ng-app="appForm">
<head>
	<meta charset="utf-8" />
	<!-- Import JS -->
	<script type="text/javascript" src="lib/angular.min.js"></script>
	<script type="text/javascript" src="lib/angular-messages.min.js"></script>
	<script type="text/javascript" src="lib/app-form.js"></script>

	<!-- Import Css -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style-form.css">

	<!-- Google -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="https://www.gstatic.com/recaptcha/api2/r20151117130340/recaptcha__pt_br.js"></script>

	<title>Formulário de acesso a Licitações</title>

</head>
<body ng-controller="appFormCtrl">
<header id="form">
	<div class="logo">
		<img title="Brasão Municipio de Santa Lúcia" src="img/santalucia.png">
		<h2>Município de Santa Lúcia</h2>
	</div>
	<div class="title">
		<h2>Formulário de Controle - Licitações</h2>
	</div>
</header>
<section id="form">
	<article>
		<div class="descricao">
			<h3>Todos os campos são obrigatórios.</h3>
			<p>Declaro que recebi o Edital de licitação acima descrito e declaro ter ciência de que o formulário e as informações acima não constituem, nem representam Cadastro de Fornecedores do Municipio de Santa Lúcia-PR, mas mera solicitação de Edital, não implicando em qualquer obrigatoriedade de participação no referido edital.</p>
			<h4>Atenciosamente,</h4>
			<p>Luiz Rodrigo Bocca<br/>Fone: (045) 8829 3330</p>
		</div>
		
	</article>
	<div class="formulario">
		<form name="linkForm" action="contato.php" method="post">
			<input id="nome" type="text" name="empresa" placeholder="Razão social/Nome" ng-model="empresa" ng-required="true" ng-minlength="6" />
			<input id="cnpj" type="text" name="cnpj" placeholder="CNPJ" ng-model="cnpj" ng-pattern="/^\d{8,10}/\d{4,5}\d{2,3}$/" ng-required="true" />
			<input id="licitacao" type="number" name="licitacaoN" placeholder="Licitação Nº" ng-model="Nlicitacao" ng-required="true" />
			<input id="ano" type="number" name="ano" placeholder="Ano" ng-model="ano" ng-pattern="/^\d{4}$/" ng-required="true" />
			<input id="cidade" type="text" name="cidade" placeholder="Cidade" ng-model="cidade" ng-required="true" ng-minlength="6" />
			<input id="bairro" type="text" name="bairro" placeholder="Bairro" ng-model="bairro" ng-required="true" ng-minlength="4" />
			<input id="rua" type="text" name="rua" placeholder="Rua/Logradouro" ng-model="rua" ng-required="true" ng-minlength="4" />
			<input id="cep" type="number" name="cep" placeholder="Cep" ng-model="cep" ng-pattern="/^\d{5}\d{3}$/" ng-required="true" />
			<input id="numero" type="number" name="idN" placeholder="Nº" ng-model="idN" ng-required="true" />
			<select name="estado">
				<option value="">UF</option>
				<option ng-repeat="estado in estados">{{estado.est}}</option>
			</select>
			<input id="ddd" type="number" name="ddd" placeholder="DDD" ng-model="ddd" ng-required="true" ng-minlength="2" ng-maxlength="2" />
			<input id="telefone" type="text" name="telefone" placeholder="Telefone" ng-model="telefone" ng-pattern="/^\d{4,5}-\d{4}$/" ng-required="true"/>
			<input id="ddd" type="number" name="ddd" placeholder="DDD" ng-model="ddd" ng-required="true" ng-minlength="2" ng-maxlength="2" />
			<input id="celular" type="text" name="celular" placeholder="Celular" ng-model="celular" ng-pattern="/^\d{4,5}-?\d{4}$/" ng-required="true" />
			<input id="email" type="email" name="email" placeholder="E-mail" ng-model="email" ng-required="true" />
	<!-- 	<textarea name="complemento" placeholder="complemento"></textarea> -->

			<div class="g-recaptcha" data-sitekey="6LdMrQ4TAAAAAMNsjveY-SXDIxOOeMUJgVW30w4j"></div>
			<button type="submit" ng-disabled="linkForm.$invalid">Obter Link</button>	
		</form>

			<!-- Mensagens de ajuda -->
		<article class="help-messages">
			<div class="help-message" ng-messages="linkForm.empresa.$error">
				<span ng-message="minlength">O nome da empresa deve conter no minímo 6 digítos!</span>
			</div>

			<div class="help-message" ng-messages="linkForm.cnpj.$error">
				<span ng-message="pattern">O formato do CNPJ deve seguir o modelo: 99.999.999/9999-99</span>
			</div>

			<div class="help-message" ng-messages="linkForm.ano.$error">
				<span ng-message="pattern">O formato do ano deve seguir o modelo: 9999</span>
			</div>

			<div class="help-message" ng-messages="linkForm.cidade.$error">
				<span ng-message="minlength">O nome da cidade deve conter no minímo 6 digítos!</span>
			</div>

			<div class="help-message" ng-messages="linkForm.bairro.$error">
				<span ng-message="minlength">O nome da Bairro deve conter no minímo 4 digítos!</span>
			</div>

			<div class="help-message" ng-messages="linkForm.rua.$error">
				<span ng-message="minlength">O nome da Rua deve conter no minímo 4 digítos!</span>
			</div>

			<div class="help-message" ng-messages="linkForm.cep.$error">
				<span ng-message="pattern">O formato do CEP deve seguir o modelo: 99999000</span>
			</div>

			<div class="help-message" ng-messages="linkForm.ddd.$error">
				<span ng-message="minlength">O campo DDD deve conter no minímo 2 digítos!</span>
				<span ng-message="maxlength">O campo DDD deve conter no máximo 2 digítos!</span>
			</div>
			<div class="help-message" ng-messages="linkForm.telefone.$error">
				<span ng-message="pattern">O campo Telefone deve seguir o modelo: 99999-9999!</span>
			</div>
			<div class="help-message" ng-messages="linkForm.celular.$error">
				<span ng-message="pattern">O campo Telefone deve seguir o modelo: 99999-9999!</span>
			</div>
		</article>
		<article class="sucess-messages">
			
		</article>
	</div>	
</section>
<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
</body>
</html>
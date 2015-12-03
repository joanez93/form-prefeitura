<?php

$resultado = null;

if(!empty($_POST['empresa'])){
	
	// Definindo variáveis para as globais
	$contactempresa		= $_POST['empresa'];
	$contactcnpj		= $_POST['cnpj'];
	$contactlicitacaoN	= $_POST['licitacaoN'];
	$contactano			= $_POST['ano'];
	$contactcidade		= $_POST['cidade'];
	$contactbairro		= $_POST['bairro'];
	$contactrua			= $_POST['rua'];
	$contactcep			= $_POST['cep'];
	$contactidn			= $_POST['idN'];
	$contactestado		= $_POST['estado'];
	$contactddd			= $_POST['ddd'];
	$contacttelefone	= $_POST['telefone'];
	$contactcelular		= $_POST['celular'];
	$contactemail		= $_POST['email'];

	// E-mail que enviará a mensagem
	$emailfrom			= 'bot@izzyweb.com.br';

	// E-mail que receberá a mensagem
	$emailto			= 'joanez-dev@izzyweb.com.br';

	// Definindo variáveis da função mail
	$quebra_linha = "\n";
	$assunto			= "Formulário de Controle - Licitações";

	/* Mensagem HTML do e-mail. */
	$mensagemHTML = '<p>Formulário de Controle - Licitações</p>
	<p><b>Empresa:</b> ' . $contactempresa .'
	<p><b>CNPJ:</b> ' . $contactcnpj .'
	<p><b>Licitação Nº:</b> ' . $contactlicitacaoN .'
	<p><b>Ano:</b> ' . $contactano .'
	<p><b>Cidade:</b> ' . $contactcidade .'
	<p><b>Bairro:</b> ' . $contactbairro . '
	<p><b>Rua/Logradouro:</b> ' . $contactrua .'
	<p><b>Cep:</b> ' . $contactcep .'
	<p><b>Imóvel Nº:</b> ' . $contactidn .'
	<p><b>Estado (UF):</b> ' . $contactestado .'
	<p><b>DDD:</b> ' . $contactddd .'
	<p><b>Telefone:</b> ' . $contacttelefone .'
	<p><b>Celular:</b> ' . $contactcelular .'
	<p><b>E-mail:</b> ' . $contactemail . '</p>';

	// O return-path deve ser ser o mesmo e-mail do remetente.
	
    $headers = "MIME-Version: 1.1" . $quebra_linha;
    $headers .= "Content-type: text/html; charset=utf-8" . $quebra_linha;
    $headers .= "From: " . $emailfrom . $quebra_linha;
    $headers .= "Return-Path: " . $emailfrom . $quebra_linha;
    $headers .= "Reply-To: " . $contactmail . $quebra_linha;

	mail($emailto, $assunto, $mensagemHTML, $headers, "-r" . $emailfrom);

		$resultado = "Obrigado! <a href='http://192.168.10.249:7474/esportal/esportalpublicacao.loadPublicacao.logic?publicacao.idPublicacao=46'>Ir para Licitações</a>"; // Mensagem de sucesso

	} else {
		$resultado = "<h2>Houve um erro ao enviar sua mensagem. Por favor, tente novamente</h2>"; // Mensagem de erro
	}
	echo $resultado;
	// Limpar variáveis globais
	unset ($_POST['contactempresa']);
	unset ($_POST['contactcnpj']);
	unset ($_POST['contactlicitacaoN']);
	unset ($_POST['contactano']);
	unset ($_POST['contactcidade']);
	unset ($_POST['contactbairro']);
	unset ($_POST['contactrua']);
	unset ($_POST['contactcep']);
	unset ($_POST['contactidn']);
	unset ($_POST['contactestado']);
	unset ($_POST['contactddd']);
	unset ($_POST['contacttelefone']);
	unset ($_POST['contactcelular']);
	unset ($_POST['contactemail']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">

	<!-- Import Styles -->
	<link rel="stylesheet" type="text/css" href="css/style-form.css">

	<title>Licitações - Prefeitura Municipal de Santa Lúcia-PR</title>
</head>
<body>
<header id="contato">
	<h1>Obrigado!</h1>
</header>
</body>
</html>
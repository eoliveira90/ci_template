<?php
error_reporting(0);

$db_config = "../application/config/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="description" content="">
	<meta name="author" content="Erison Correia de Oliveira Neto">
	<title>Instalação</title>
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		* {
			border-radius: 0 !important;
		}

		body {
			padding-top: 50px;
			margin-bottom: 60px;
		}

		.starter-template {}

		.alert-danger-alt {
			background-color: #f34a50;
			color: white;
		}

		.footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			/* Set the fixed height of the footer here */
			height: 60px;
			background-color: #f5f5f5;
		}

		.container .text-muted {
			margin: 20px 0;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Instalação</a>
			</div>
		</div>
	</nav>
	<div class="starter-template">
		<div class="container">
			<div class="page-header">
				<h1>Bem vindo a instalação e configuração do banco de dados.</h1>
			</div>
			<p class="lead">Versão 1.0.0</p>
			<p>Clique em Instalar para iniciar o processo de Instalação do sistema.</p>
			<!--<div class="alert alert-warning">
				<strong>Atenção!</strong> Ao clicar em Instalar, caso já exista uma instalação do Sistema no banco especificado, a mesma será apagada.
			</div>-->
			<!-- Bando de dados testedo com sucesso! -->
			<!-- Instalação concluída com sucesso! -->
			<!-- No final botão de ir para tela de login -->
			<?php
			if (is_writable($db_config)) {

			?>
				<form action="setup.php" id="wizard" method="post" class="form-horizontal">
					<div class="form-group">
						<label for="fielddriver" class="col-sm-3 control-label">Driver:</label>
						<div class="col-sm-8">
							<select id="fielddriver" class="form-control" name="driver">
								<option value="cubrid">CUBRID</option>
								<option value="ibase">Firebird/Interbase</option>
								<option value="mssql">MS SQL/Sybase</option>
								<option value="mysql">MySQL</option>
								<option value="mysqli" selected="selected">MySQLi</option>
								<!-- <option value="oci8">Oracle Call Interface</option> -->
								<option value="oci8">Oracle</option>
								<option value="odbc">ODBC</option>
								<option value="pdo">PDO</option>
								<option value="postgre">PostgreSQL</option>
								<option value="sqlite">SQLite</option>
								<option value="sqlite3">SQLite3</option>
								<!--<option value="sqlsrv">SQLSRV</option>-->
								<option value="sqlsrv">MS SQL Server/SQL Azure</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="fieldhostname" class="col-sm-3 control-label">Host:</label>
						<div class="col-sm-8">
							<input id="fieldhostname" class="form-control" name="hostname" type="text" required autocomplete="false">
						</div>
					</div>
					<div class="form-group">
						<label for="fieldpost" class="col-sm-3 control-label">Porta:</label>
						<div class="col-sm-8">
							<input id="fieldpost" class="form-control" name="port" type="text" required autocomplete="false" value="3306">
						</div>
					</div>
					<div class="form-group">
						<label for="fieldusername" class="col-sm-3 control-label">Usuário:</label>
						<div class="col-sm-8">
							<input id="fieldusername" class="form-control" type="text" name="username" required autocomplete="false">
						</div>
					</div>
					<div class="form-group">
						<label for="fieldpassword" class="col-sm-3 control-label">Senha:</label>
						<div class="col-sm-8">
							<input id="fieldpassword" class="form-control" type="password" name="db_pass" autocomplete="false">
						</div>
					</div>
					<div class="form-group">
						<label for="fielddb" class="col-sm-3 control-label">Database:</label>
						<div class="col-sm-8">
							<input id="fielddb" class="form-control" type="text" name="db_name" required autocomplete="false">
						</div>
					</div>
					<div class="form-group">
						<label for="fieldcharset" class="col-sm-3 control-label">Charset:</label>
						<div class="col-sm-8">
							<select dir="ltr" lang="en" id="fieldcharset" class="form-control" type="text" name="charset">
								<option value="armscii8">armscii8 - ARMSCII-8 Armenian</option>
								<option value="ascii">ascii - US ASCII</option>
								<option value="big5">big5 - Big5 Traditional Chinese</option>
								<option value="binary">binary - Binary pseudo charset</option>
								<option value="cp1250">cp1250 - Windows Central European</option>
								<option value="cp1251">cp1251 - Windows Cyrillic</option>
								<option value="cp1256">cp1256 - Windows Arabic</option>
								<option value="cp1257">cp1257 - Windows Baltic</option>
								<option value="cp850">cp850 - DOS West European</option>
								<option value="cp852">cp852 - DOS Central European</option>
								<option value="cp866">cp866 - DOS Russian</option>
								<option value="cp932">cp932 - SJIS for Windows Japanese</option>
								<option value="dec8">dec8 - DEC West European</option>
								<option value="eucjpms">eucjpms - UJIS for Windows Japanese</option>
								<option value="euckr">euckr - EUC-KR Korean</option>
								<option value="gb2312">gb2312 - GB2312 Simplified Chinese</option>
								<option value="gbk">gbk - GBK Simplified Chinese</option>
								<option value="geostd8">geostd8 - GEOSTD8 Georgian</option>
								<option value="greek">greek - ISO 8859-7 Greek</option>
								<option value="hebrew">hebrew - ISO 8859-8 Hebrew</option>
								<option value="hp8">hp8 - HP West European</option>
								<option value="keybcs2">keybcs2 - DOS Kamenicky Czech-Slovak</option>
								<option value="koi8r">koi8r - KOI8-R Relcom Russian</option>
								<option value="koi8u">koi8u - KOI8-U Ukrainian</option>
								<option value="latin1">latin1 - cp1252 West European</option>
								<option value="latin2">latin2 - ISO 8859-2 Central European</option>
								<option value="latin5">latin5 - ISO 8859-9 Turkish</option>
								<option value="latin7">latin7 - ISO 8859-13 Baltic</option>
								<option value="macce">macce - Mac Central European</option>
								<option value="macroman">macroman - Mac West European</option>
								<option value="sjis">sjis - Shift-JIS Japanese</option>
								<option value="swe7">swe7 - 7bit Swedish</option>
								<option value="tis620">tis620 - TIS620 Thai</option>
								<option value="ucs2">ucs2 - UCS-2 Unicode</option>
								<option value="ujis">ujis - EUC-JP Japanese</option>
								<option value="utf16">utf16 - UTF-16 Unicode</option>
								<option value="utf16le">utf16le - UTF-16LE Unicode</option>
								<option value="utf32">utf32 - UTF-32 Unicode</option>
								<option value="utf8" selected="selected">utf8 - UTF-8 Unicode</option>
								<option value="utf8mb4">utf8mb4 - UTF-8 Unicode</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="fielddb_collation" class="col-sm-3 control-label">Agrupamento (Collation):</label>
						<div class="col-sm-8">
							<!--<input id="fieldcollat" class="form-control" type="text" name="collate" required autocomplete="false" value="utf8_general_ci">-->
							<select dir="ltr" lang="en" id="fielddb_collation" class="form-control" type="text" name="db_collation">
								<option value="">Agrupamento (Collation)</option>
								<option value=""></option>
								<optgroup label="armscii8" title="ARMSCII-8 Armenian">
									<option value="armscii8_bin" title="Armênio, binário">armscii8_bin</option>
									<option value="armscii8_general_ci" title="Armênio, Indiferente a maiúsculas/minúsculas">armscii8_general_ci</option>
									<option value="armscii8_general_nopad_ci" title="Armênio, no-pad, Indiferente a maiúsculas/minúsculas">armscii8_general_nopad_ci</option>
									<option value="armscii8_nopad_bin" title="Armênio, no-pad, binário">armscii8_nopad_bin</option>
								</optgroup>
								<optgroup label="ascii" title="US ASCII">
									<option value="ascii_bin" title="Europa Ocidental, binário">ascii_bin</option>
									<option value="ascii_general_ci" title="Europa Ocidental, Indiferente a maiúsculas/minúsculas">ascii_general_ci</option>
									<option value="ascii_general_nopad_ci" title="Europa Ocidental, no-pad, Indiferente a maiúsculas/minúsculas">ascii_general_nopad_ci</option>
									<option value="ascii_nopad_bin" title="Europa Ocidental, no-pad, binário">ascii_nopad_bin</option>
								</optgroup>
								<optgroup label="big5" title="Big5 Traditional Chinese">
									<option value="big5_bin" title="Chinês Tradicional, binário">big5_bin</option>
									<option value="big5_chinese_ci" title="Chinês Tradicional, Indiferente a maiúsculas/minúsculas">big5_chinese_ci</option>
									<option value="big5_chinese_nopad_ci" title="Chinês Tradicional, no-pad, Indiferente a maiúsculas/minúsculas">big5_chinese_nopad_ci</option>
									<option value="big5_nopad_bin" title="Chinês Tradicional, no-pad, binário">big5_nopad_bin</option>
								</optgroup>
								<optgroup label="binary" title="Binary pseudo charset">
									<option value="binary" title="Binário">binary</option>
								</optgroup>
								<optgroup label="cp1250" title="Windows Central European">
									<option value="cp1250_bin" title="Europa Central, binário">cp1250_bin</option>
									<option value="cp1250_croatian_ci" title="Croata, Indiferente a maiúsculas/minúsculas">cp1250_croatian_ci</option>
									<option value="cp1250_czech_cs" title="Checo, Sensível a maiúsculas/minúsculas">cp1250_czech_cs</option>
									<option value="cp1250_general_ci" title="Europa Central, Indiferente a maiúsculas/minúsculas">cp1250_general_ci</option>
									<option value="cp1250_general_nopad_ci" title="Europa Central, no-pad, Indiferente a maiúsculas/minúsculas">cp1250_general_nopad_ci</option>
									<option value="cp1250_nopad_bin" title="Europa Central, no-pad, binário">cp1250_nopad_bin</option>
									<option value="cp1250_polish_ci" title="Polaco, Indiferente a maiúsculas/minúsculas">cp1250_polish_ci</option>
								</optgroup>
								<optgroup label="cp1251" title="Windows Cyrillic">
									<option value="cp1251_bin" title="Cirílico, binário">cp1251_bin</option>
									<option value="cp1251_bulgarian_ci" title="Búlgaro, Indiferente a maiúsculas/minúsculas">cp1251_bulgarian_ci</option>
									<option value="cp1251_general_ci" title="Cirílico, Indiferente a maiúsculas/minúsculas">cp1251_general_ci</option>
									<option value="cp1251_general_cs" title="Cirílico, Sensível a maiúsculas/minúsculas">cp1251_general_cs</option>
									<option value="cp1251_general_nopad_ci" title="Cirílico, no-pad, Indiferente a maiúsculas/minúsculas">cp1251_general_nopad_ci</option>
									<option value="cp1251_nopad_bin" title="Cirílico, no-pad, binário">cp1251_nopad_bin</option>
									<option value="cp1251_ukrainian_ci" title="Ucraniano, Indiferente a maiúsculas/minúsculas">cp1251_ukrainian_ci</option>
								</optgroup>
								<optgroup label="cp1256" title="Windows Arabic">
									<option value="cp1256_bin" title="Árabe, binário">cp1256_bin</option>
									<option value="cp1256_general_ci" title="Árabe, Indiferente a maiúsculas/minúsculas">cp1256_general_ci</option>
									<option value="cp1256_general_nopad_ci" title="Árabe, no-pad, Indiferente a maiúsculas/minúsculas">cp1256_general_nopad_ci</option>
									<option value="cp1256_nopad_bin" title="Árabe, no-pad, binário">cp1256_nopad_bin</option>
								</optgroup>
								<optgroup label="cp1257" title="Windows Baltic">
									<option value="cp1257_bin" title="Báltico, binário">cp1257_bin</option>
									<option value="cp1257_general_ci" title="Báltico, Indiferente a maiúsculas/minúsculas">cp1257_general_ci</option>
									<option value="cp1257_general_nopad_ci" title="Báltico, no-pad, Indiferente a maiúsculas/minúsculas">cp1257_general_nopad_ci</option>
									<option value="cp1257_lithuanian_ci" title="Lituano, Indiferente a maiúsculas/minúsculas">cp1257_lithuanian_ci</option>
									<option value="cp1257_nopad_bin" title="Báltico, no-pad, binário">cp1257_nopad_bin</option>
								</optgroup>
								<optgroup label="cp850" title="DOS West European">
									<option value="cp850_bin" title="Europa Ocidental, binário">cp850_bin</option>
									<option value="cp850_general_ci" title="Europa Ocidental, Indiferente a maiúsculas/minúsculas">cp850_general_ci</option>
									<option value="cp850_general_nopad_ci" title="Europa Ocidental, no-pad, Indiferente a maiúsculas/minúsculas">cp850_general_nopad_ci</option>
									<option value="cp850_nopad_bin" title="Europa Ocidental, no-pad, binário">cp850_nopad_bin</option>
								</optgroup>
								<optgroup label="cp852" title="DOS Central European">
									<option value="cp852_bin" title="Europa Central, binário">cp852_bin</option>
									<option value="cp852_general_ci" title="Europa Central, Indiferente a maiúsculas/minúsculas">cp852_general_ci</option>
									<option value="cp852_general_nopad_ci" title="Europa Central, no-pad, Indiferente a maiúsculas/minúsculas">cp852_general_nopad_ci</option>
									<option value="cp852_nopad_bin" title="Europa Central, no-pad, binário">cp852_nopad_bin</option>
								</optgroup>
								<optgroup label="cp866" title="DOS Russian">
									<option value="cp866_bin" title="Russo, binário">cp866_bin</option>
									<option value="cp866_general_ci" title="Russo, Indiferente a maiúsculas/minúsculas">cp866_general_ci</option>
									<option value="cp866_general_nopad_ci" title="Russo, no-pad, Indiferente a maiúsculas/minúsculas">cp866_general_nopad_ci</option>
									<option value="cp866_nopad_bin" title="Russo, no-pad, binário">cp866_nopad_bin</option>
								</optgroup>
								<optgroup label="cp932" title="SJIS for Windows Japanese">
									<option value="cp932_bin" title="Japonês, binário">cp932_bin</option>
									<option value="cp932_japanese_ci" title="Japonês, Indiferente a maiúsculas/minúsculas">cp932_japanese_ci</option>
									<option value="cp932_japanese_nopad_ci" title="Japonês, no-pad, Indiferente a maiúsculas/minúsculas">cp932_japanese_nopad_ci</option>
									<option value="cp932_nopad_bin" title="Japonês, no-pad, binário">cp932_nopad_bin</option>
								</optgroup>
								<optgroup label="dec8" title="DEC West European">
									<option value="dec8_bin" title="Europa Ocidental, binário">dec8_bin</option>
									<option value="dec8_nopad_bin" title="Europa Ocidental, no-pad, binário">dec8_nopad_bin</option>
									<option value="dec8_swedish_ci" title="Sueco, Indiferente a maiúsculas/minúsculas">dec8_swedish_ci</option>
									<option value="dec8_swedish_nopad_ci" title="Sueco, no-pad, Indiferente a maiúsculas/minúsculas">dec8_swedish_nopad_ci</option>
								</optgroup>
								<optgroup label="eucjpms" title="UJIS for Windows Japanese">
									<option value="eucjpms_bin" title="Japonês, binário">eucjpms_bin</option>
									<option value="eucjpms_japanese_ci" title="Japonês, Indiferente a maiúsculas/minúsculas">eucjpms_japanese_ci</option>
									<option value="eucjpms_japanese_nopad_ci" title="Japonês, no-pad, Indiferente a maiúsculas/minúsculas">eucjpms_japanese_nopad_ci</option>
									<option value="eucjpms_nopad_bin" title="Japonês, no-pad, binário">eucjpms_nopad_bin</option>
								</optgroup>
								<optgroup label="euckr" title="EUC-KR Korean">
									<option value="euckr_bin" title="Coreano, binário">euckr_bin</option>
									<option value="euckr_korean_ci" title="Coreano, Indiferente a maiúsculas/minúsculas">euckr_korean_ci</option>
									<option value="euckr_korean_nopad_ci" title="Coreano, no-pad, Indiferente a maiúsculas/minúsculas">euckr_korean_nopad_ci</option>
									<option value="euckr_nopad_bin" title="Coreano, no-pad, binário">euckr_nopad_bin</option>
								</optgroup>
								<optgroup label="gb2312" title="GB2312 Simplified Chinese">
									<option value="gb2312_bin" title="Chinês Simplificado, binário">gb2312_bin</option>
									<option value="gb2312_chinese_ci" title="Chinês Simplificado, Indiferente a maiúsculas/minúsculas">gb2312_chinese_ci</option>
									<option value="gb2312_chinese_nopad_ci" title="Chinês Simplificado, no-pad, Indiferente a maiúsculas/minúsculas">gb2312_chinese_nopad_ci</option>
									<option value="gb2312_nopad_bin" title="Chinês Simplificado, no-pad, binário">gb2312_nopad_bin</option>
								</optgroup>
								<optgroup label="gbk" title="GBK Simplified Chinese">
									<option value="gbk_bin" title="Chinês Simplificado, binário">gbk_bin</option>
									<option value="gbk_chinese_ci" title="Chinês Simplificado, Indiferente a maiúsculas/minúsculas">gbk_chinese_ci</option>
									<option value="gbk_chinese_nopad_ci" title="Chinês Simplificado, no-pad, Indiferente a maiúsculas/minúsculas">gbk_chinese_nopad_ci</option>
									<option value="gbk_nopad_bin" title="Chinês Simplificado, no-pad, binário">gbk_nopad_bin</option>
								</optgroup>
								<optgroup label="geostd8" title="GEOSTD8 Georgian">
									<option value="geostd8_bin" title="Georgiano, binário">geostd8_bin</option>
									<option value="geostd8_general_ci" title="Georgiano, Indiferente a maiúsculas/minúsculas">geostd8_general_ci</option>
									<option value="geostd8_general_nopad_ci" title="Georgiano, no-pad, Indiferente a maiúsculas/minúsculas">geostd8_general_nopad_ci</option>
									<option value="geostd8_nopad_bin" title="Georgiano, no-pad, binário">geostd8_nopad_bin</option>
								</optgroup>
								<optgroup label="greek" title="ISO 8859-7 Greek">
									<option value="greek_bin" title="Grego, binário">greek_bin</option>
									<option value="greek_general_ci" title="Grego, Indiferente a maiúsculas/minúsculas">greek_general_ci</option>
									<option value="greek_general_nopad_ci" title="Grego, no-pad, Indiferente a maiúsculas/minúsculas">greek_general_nopad_ci</option>
									<option value="greek_nopad_bin" title="Grego, no-pad, binário">greek_nopad_bin</option>
								</optgroup>
								<optgroup label="hebrew" title="ISO 8859-8 Hebrew">
									<option value="hebrew_bin" title="Hebraico, binário">hebrew_bin</option>
									<option value="hebrew_general_ci" title="Hebraico, Indiferente a maiúsculas/minúsculas">hebrew_general_ci</option>
									<option value="hebrew_general_nopad_ci" title="Hebraico, no-pad, Indiferente a maiúsculas/minúsculas">hebrew_general_nopad_ci</option>
									<option value="hebrew_nopad_bin" title="Hebraico, no-pad, binário">hebrew_nopad_bin</option>
								</optgroup>
								<optgroup label="hp8" title="HP West European">
									<option value="hp8_bin" title="Europa Ocidental, binário">hp8_bin</option>
									<option value="hp8_english_ci" title="Inglês, Indiferente a maiúsculas/minúsculas">hp8_english_ci</option>
									<option value="hp8_english_nopad_ci" title="Inglês, no-pad, Indiferente a maiúsculas/minúsculas">hp8_english_nopad_ci</option>
									<option value="hp8_nopad_bin" title="Europa Ocidental, no-pad, binário">hp8_nopad_bin</option>
								</optgroup>
								<optgroup label="keybcs2" title="DOS Kamenicky Czech-Slovak">
									<option value="keybcs2_bin" title="Checo-Eslovaco, binário">keybcs2_bin</option>
									<option value="keybcs2_general_ci" title="Checo-Eslovaco, Indiferente a maiúsculas/minúsculas">keybcs2_general_ci</option>
									<option value="keybcs2_general_nopad_ci" title="Checo-Eslovaco, no-pad, Indiferente a maiúsculas/minúsculas">keybcs2_general_nopad_ci</option>
									<option value="keybcs2_nopad_bin" title="Checo-Eslovaco, no-pad, binário">keybcs2_nopad_bin</option>
								</optgroup>
								<optgroup label="koi8r" title="KOI8-R Relcom Russian">
									<option value="koi8r_bin" title="Russo, binário">koi8r_bin</option>
									<option value="koi8r_general_ci" title="Russo, Indiferente a maiúsculas/minúsculas">koi8r_general_ci</option>
									<option value="koi8r_general_nopad_ci" title="Russo, no-pad, Indiferente a maiúsculas/minúsculas">koi8r_general_nopad_ci</option>
									<option value="koi8r_nopad_bin" title="Russo, no-pad, binário">koi8r_nopad_bin</option>
								</optgroup>
								<optgroup label="koi8u" title="KOI8-U Ukrainian">
									<option value="koi8u_bin" title="Ucraniano, binário">koi8u_bin</option>
									<option value="koi8u_general_ci" title="Ucraniano, Indiferente a maiúsculas/minúsculas">koi8u_general_ci</option>
									<option value="koi8u_general_nopad_ci" title="Ucraniano, no-pad, Indiferente a maiúsculas/minúsculas">koi8u_general_nopad_ci</option>
									<option value="koi8u_nopad_bin" title="Ucraniano, no-pad, binário">koi8u_nopad_bin</option>
								</optgroup>
								<optgroup label="latin1" title="cp1252 West European">
									<option value="latin1_bin" title="Europa Ocidental, binário">latin1_bin</option>
									<option value="latin1_danish_ci" title="Dinamarquês, Indiferente a maiúsculas/minúsculas">latin1_danish_ci</option>
									<option value="latin1_general_ci" title="Europa Ocidental, Indiferente a maiúsculas/minúsculas">latin1_general_ci</option>
									<option value="latin1_general_cs" title="Europa Ocidental, Sensível a maiúsculas/minúsculas">latin1_general_cs</option>
									<option value="latin1_german1_ci" title="Alemão (ordem de dicionário), Indiferente a maiúsculas/minúsculas">latin1_german1_ci</option>
									<option value="latin1_german2_ci" title="Alemão (ordem de lista telefónica), Indiferente a maiúsculas/minúsculas">latin1_german2_ci</option>
									<option value="latin1_nopad_bin" title="Europa Ocidental, no-pad, binário">latin1_nopad_bin</option>
									<option value="latin1_spanish_ci" title="Espanhol (moderno), Indiferente a maiúsculas/minúsculas">latin1_spanish_ci</option>
									<option value="latin1_swedish_ci" title="Sueco, Indiferente a maiúsculas/minúsculas">latin1_swedish_ci</option>
									<option value="latin1_swedish_nopad_ci" title="Sueco, no-pad, Indiferente a maiúsculas/minúsculas">latin1_swedish_nopad_ci</option>
								</optgroup>
								<optgroup label="latin2" title="ISO 8859-2 Central European">
									<option value="latin2_bin" title="Europa Central, binário">latin2_bin</option>
									<option value="latin2_croatian_ci" title="Croata, Indiferente a maiúsculas/minúsculas">latin2_croatian_ci</option>
									<option value="latin2_czech_cs" title="Checo, Sensível a maiúsculas/minúsculas">latin2_czech_cs</option>
									<option value="latin2_general_ci" title="Europa Central, Indiferente a maiúsculas/minúsculas">latin2_general_ci</option>
									<option value="latin2_general_nopad_ci" title="Europa Central, no-pad, Indiferente a maiúsculas/minúsculas">latin2_general_nopad_ci</option>
									<option value="latin2_hungarian_ci" title="Húngaro, Indiferente a maiúsculas/minúsculas">latin2_hungarian_ci</option>
									<option value="latin2_nopad_bin" title="Europa Central, no-pad, binário">latin2_nopad_bin</option>
								</optgroup>
								<optgroup label="latin5" title="ISO 8859-9 Turkish">
									<option value="latin5_bin" title="Turco, binário">latin5_bin</option>
									<option value="latin5_nopad_bin" title="Turco, no-pad, binário">latin5_nopad_bin</option>
									<option value="latin5_turkish_ci" title="Turco, Indiferente a maiúsculas/minúsculas">latin5_turkish_ci</option>
									<option value="latin5_turkish_nopad_ci" title="Turco, no-pad, Indiferente a maiúsculas/minúsculas">latin5_turkish_nopad_ci</option>
								</optgroup>
								<optgroup label="latin7" title="ISO 8859-13 Baltic">
									<option value="latin7_bin" title="Báltico, binário">latin7_bin</option>
									<option value="latin7_estonian_cs" title="Estoniano, Sensível a maiúsculas/minúsculas">latin7_estonian_cs</option>
									<option value="latin7_general_ci" title="Báltico, Indiferente a maiúsculas/minúsculas">latin7_general_ci</option>
									<option value="latin7_general_cs" title="Báltico, Sensível a maiúsculas/minúsculas">latin7_general_cs</option>
									<option value="latin7_general_nopad_ci" title="Báltico, no-pad, Indiferente a maiúsculas/minúsculas">latin7_general_nopad_ci</option>
									<option value="latin7_nopad_bin" title="Báltico, no-pad, binário">latin7_nopad_bin</option>
								</optgroup>
								<optgroup label="macce" title="Mac Central European">
									<option value="macce_bin" title="Europa Central, binário">macce_bin</option>
									<option value="macce_general_ci" title="Europa Central, Indiferente a maiúsculas/minúsculas">macce_general_ci</option>
									<option value="macce_general_nopad_ci" title="Europa Central, no-pad, Indiferente a maiúsculas/minúsculas">macce_general_nopad_ci</option>
									<option value="macce_nopad_bin" title="Europa Central, no-pad, binário">macce_nopad_bin</option>
								</optgroup>
								<optgroup label="macroman" title="Mac West European">
									<option value="macroman_bin" title="Europa Ocidental, binário">macroman_bin</option>
									<option value="macroman_general_ci" title="Europa Ocidental, Indiferente a maiúsculas/minúsculas">macroman_general_ci</option>
									<option value="macroman_general_nopad_ci" title="Europa Ocidental, no-pad, Indiferente a maiúsculas/minúsculas">macroman_general_nopad_ci</option>
									<option value="macroman_nopad_bin" title="Europa Ocidental, no-pad, binário">macroman_nopad_bin</option>
								</optgroup>
								<optgroup label="sjis" title="Shift-JIS Japanese">
									<option value="sjis_bin" title="Japonês, binário">sjis_bin</option>
									<option value="sjis_japanese_ci" title="Japonês, Indiferente a maiúsculas/minúsculas">sjis_japanese_ci</option>
									<option value="sjis_japanese_nopad_ci" title="Japonês, no-pad, Indiferente a maiúsculas/minúsculas">sjis_japanese_nopad_ci</option>
									<option value="sjis_nopad_bin" title="Japonês, no-pad, binário">sjis_nopad_bin</option>
								</optgroup>
								<optgroup label="swe7" title="7bit Swedish">
									<option value="swe7_bin" title="Sueco, binário">swe7_bin</option>
									<option value="swe7_nopad_bin" title="Sueco, no-pad, binário">swe7_nopad_bin</option>
									<option value="swe7_swedish_ci" title="Sueco, Indiferente a maiúsculas/minúsculas">swe7_swedish_ci</option>
									<option value="swe7_swedish_nopad_ci" title="Sueco, no-pad, Indiferente a maiúsculas/minúsculas">swe7_swedish_nopad_ci</option>
								</optgroup>
								<optgroup label="tis620" title="TIS620 Thai">
									<option value="tis620_bin" title="Tailandês, binário">tis620_bin</option>
									<option value="tis620_nopad_bin" title="Tailandês, no-pad, binário">tis620_nopad_bin</option>
									<option value="tis620_thai_ci" title="Tailandês, Indiferente a maiúsculas/minúsculas">tis620_thai_ci</option>
									<option value="tis620_thai_nopad_ci" title="Tailandês, no-pad, Indiferente a maiúsculas/minúsculas">tis620_thai_nopad_ci</option>
								</optgroup>
								<optgroup label="ucs2" title="UCS-2 Unicode">
									<option value="ucs2_bin" title="Unicode, binário">ucs2_bin</option>
									<option value="ucs2_croatian_ci" title="Croata, Indiferente a maiúsculas/minúsculas">ucs2_croatian_ci</option>
									<option value="ucs2_croatian_mysql561_ci" title="Croata (MySQL 5.6.1), Indiferente a maiúsculas/minúsculas">ucs2_croatian_mysql561_ci</option>
									<option value="ucs2_czech_ci" title="Checo, Indiferente a maiúsculas/minúsculas">ucs2_czech_ci</option>
									<option value="ucs2_danish_ci" title="Dinamarquês, Indiferente a maiúsculas/minúsculas">ucs2_danish_ci</option>
									<option value="ucs2_esperanto_ci" title="Esperanto, Indiferente a maiúsculas/minúsculas">ucs2_esperanto_ci</option>
									<option value="ucs2_estonian_ci" title="Estoniano, Indiferente a maiúsculas/minúsculas">ucs2_estonian_ci</option>
									<option value="ucs2_general_ci" title="Unicode, Indiferente a maiúsculas/minúsculas">ucs2_general_ci</option>
									<option value="ucs2_general_mysql500_ci" title="Unicode (MySQL 5.0.0), Indiferente a maiúsculas/minúsculas">ucs2_general_mysql500_ci</option>
									<option value="ucs2_general_nopad_ci" title="Unicode, no-pad, Indiferente a maiúsculas/minúsculas">ucs2_general_nopad_ci</option>
									<option value="ucs2_german2_ci" title="Alemão (ordem de lista telefónica), Indiferente a maiúsculas/minúsculas">ucs2_german2_ci</option>
									<option value="ucs2_hungarian_ci" title="Húngaro, Indiferente a maiúsculas/minúsculas">ucs2_hungarian_ci</option>
									<option value="ucs2_icelandic_ci" title="Islandês, Indiferente a maiúsculas/minúsculas">ucs2_icelandic_ci</option>
									<option value="ucs2_latvian_ci" title="Letão, Indiferente a maiúsculas/minúsculas">ucs2_latvian_ci</option>
									<option value="ucs2_lithuanian_ci" title="Lituano, Indiferente a maiúsculas/minúsculas">ucs2_lithuanian_ci</option>
									<option value="ucs2_myanmar_ci" title="Birmanês, Indiferente a maiúsculas/minúsculas">ucs2_myanmar_ci</option>
									<option value="ucs2_nopad_bin" title="Unicode, no-pad, binário">ucs2_nopad_bin</option>
									<option value="ucs2_persian_ci" title="Persa, Indiferente a maiúsculas/minúsculas">ucs2_persian_ci</option>
									<option value="ucs2_polish_ci" title="Polaco, Indiferente a maiúsculas/minúsculas">ucs2_polish_ci</option>
									<option value="ucs2_roman_ci" title="Europa Ocidental, Indiferente a maiúsculas/minúsculas">ucs2_roman_ci</option>
									<option value="ucs2_romanian_ci" title="Romeno, Indiferente a maiúsculas/minúsculas">ucs2_romanian_ci</option>
									<option value="ucs2_sinhala_ci" title="Cingalês, Indiferente a maiúsculas/minúsculas">ucs2_sinhala_ci</option>
									<option value="ucs2_slovak_ci" title="Eslovaco, Indiferente a maiúsculas/minúsculas">ucs2_slovak_ci</option>
									<option value="ucs2_slovenian_ci" title="Esloveno, Indiferente a maiúsculas/minúsculas">ucs2_slovenian_ci</option>
									<option value="ucs2_spanish2_ci" title="Espanhol (tradicional), Indiferente a maiúsculas/minúsculas">ucs2_spanish2_ci</option>
									<option value="ucs2_spanish_ci" title="Espanhol (moderno), Indiferente a maiúsculas/minúsculas">ucs2_spanish_ci</option>
									<option value="ucs2_swedish_ci" title="Sueco, Indiferente a maiúsculas/minúsculas">ucs2_swedish_ci</option>
									<option value="ucs2_thai_520_w2" title="Tailandês (UCA 5.2.0), multi-níveis">ucs2_thai_520_w2</option>
									<option value="ucs2_turkish_ci" title="Turco, Indiferente a maiúsculas/minúsculas">ucs2_turkish_ci</option>
									<option value="ucs2_unicode_520_ci" title="Unicode (UCA 5.2.0), Indiferente a maiúsculas/minúsculas">ucs2_unicode_520_ci</option>
									<option value="ucs2_unicode_520_nopad_ci" title="Unicode (UCA 5.2.0), no-pad, Indiferente a maiúsculas/minúsculas">ucs2_unicode_520_nopad_ci</option>
									<option value="ucs2_unicode_ci" title="Unicode, Indiferente a maiúsculas/minúsculas">ucs2_unicode_ci</option>
									<option value="ucs2_unicode_nopad_ci" title="Unicode, no-pad, Indiferente a maiúsculas/minúsculas">ucs2_unicode_nopad_ci</option>
									<option value="ucs2_vietnamese_ci" title="Vietnamita, Indiferente a maiúsculas/minúsculas">ucs2_vietnamese_ci</option>
								</optgroup>
								<optgroup label="ujis" title="EUC-JP Japanese">
									<option value="ujis_bin" title="Japonês, binário">ujis_bin</option>
									<option value="ujis_japanese_ci" title="Japonês, Indiferente a maiúsculas/minúsculas">ujis_japanese_ci</option>
									<option value="ujis_japanese_nopad_ci" title="Japonês, no-pad, Indiferente a maiúsculas/minúsculas">ujis_japanese_nopad_ci</option>
									<option value="ujis_nopad_bin" title="Japonês, no-pad, binário">ujis_nopad_bin</option>
								</optgroup>
								<optgroup label="utf16" title="UTF-16 Unicode">
									<option value="utf16_bin" title="Unicode, binário">utf16_bin</option>
									<option value="utf16_croatian_ci" title="Croata, Indiferente a maiúsculas/minúsculas">utf16_croatian_ci</option>
									<option value="utf16_croatian_mysql561_ci" title="Croata (MySQL 5.6.1), Indiferente a maiúsculas/minúsculas">utf16_croatian_mysql561_ci</option>
									<option value="utf16_czech_ci" title="Checo, Indiferente a maiúsculas/minúsculas">utf16_czech_ci</option>
									<option value="utf16_danish_ci" title="Dinamarquês, Indiferente a maiúsculas/minúsculas">utf16_danish_ci</option>
									<option value="utf16_esperanto_ci" title="Esperanto, Indiferente a maiúsculas/minúsculas">utf16_esperanto_ci</option>
									<option value="utf16_estonian_ci" title="Estoniano, Indiferente a maiúsculas/minúsculas">utf16_estonian_ci</option>
									<option value="utf16_general_ci" title="Unicode, Indiferente a maiúsculas/minúsculas">utf16_general_ci</option>
									<option value="utf16_general_nopad_ci" title="Unicode, no-pad, Indiferente a maiúsculas/minúsculas">utf16_general_nopad_ci</option>
									<option value="utf16_german2_ci" title="Alemão (ordem de lista telefónica), Indiferente a maiúsculas/minúsculas">utf16_german2_ci</option>
									<option value="utf16_hungarian_ci" title="Húngaro, Indiferente a maiúsculas/minúsculas">utf16_hungarian_ci</option>
									<option value="utf16_icelandic_ci" title="Islandês, Indiferente a maiúsculas/minúsculas">utf16_icelandic_ci</option>
									<option value="utf16_latvian_ci" title="Letão, Indiferente a maiúsculas/minúsculas">utf16_latvian_ci</option>
									<option value="utf16_lithuanian_ci" title="Lituano, Indiferente a maiúsculas/minúsculas">utf16_lithuanian_ci</option>
									<option value="utf16_myanmar_ci" title="Birmanês, Indiferente a maiúsculas/minúsculas">utf16_myanmar_ci</option>
									<option value="utf16_nopad_bin" title="Unicode, no-pad, binário">utf16_nopad_bin</option>
									<option value="utf16_persian_ci" title="Persa, Indiferente a maiúsculas/minúsculas">utf16_persian_ci</option>
									<option value="utf16_polish_ci" title="Polaco, Indiferente a maiúsculas/minúsculas">utf16_polish_ci</option>
									<option value="utf16_roman_ci" title="Europa Ocidental, Indiferente a maiúsculas/minúsculas">utf16_roman_ci</option>
									<option value="utf16_romanian_ci" title="Romeno, Indiferente a maiúsculas/minúsculas">utf16_romanian_ci</option>
									<option value="utf16_sinhala_ci" title="Cingalês, Indiferente a maiúsculas/minúsculas">utf16_sinhala_ci</option>
									<option value="utf16_slovak_ci" title="Eslovaco, Indiferente a maiúsculas/minúsculas">utf16_slovak_ci</option>
									<option value="utf16_slovenian_ci" title="Esloveno, Indiferente a maiúsculas/minúsculas">utf16_slovenian_ci</option>
									<option value="utf16_spanish2_ci" title="Espanhol (tradicional), Indiferente a maiúsculas/minúsculas">utf16_spanish2_ci</option>
									<option value="utf16_spanish_ci" title="Espanhol (moderno), Indiferente a maiúsculas/minúsculas">utf16_spanish_ci</option>
									<option value="utf16_swedish_ci" title="Sueco, Indiferente a maiúsculas/minúsculas">utf16_swedish_ci</option>
									<option value="utf16_thai_520_w2" title="Tailandês (UCA 5.2.0), multi-níveis">utf16_thai_520_w2</option>
									<option value="utf16_turkish_ci" title="Turco, Indiferente a maiúsculas/minúsculas">utf16_turkish_ci</option>
									<option value="utf16_unicode_520_ci" title="Unicode (UCA 5.2.0), Indiferente a maiúsculas/minúsculas">utf16_unicode_520_ci</option>
									<option value="utf16_unicode_520_nopad_ci" title="Unicode (UCA 5.2.0), no-pad, Indiferente a maiúsculas/minúsculas">utf16_unicode_520_nopad_ci</option>
									<option value="utf16_unicode_ci" title="Unicode, Indiferente a maiúsculas/minúsculas">utf16_unicode_ci</option>
									<option value="utf16_unicode_nopad_ci" title="Unicode, no-pad, Indiferente a maiúsculas/minúsculas">utf16_unicode_nopad_ci</option>
									<option value="utf16_vietnamese_ci" title="Vietnamita, Indiferente a maiúsculas/minúsculas">utf16_vietnamese_ci</option>
								</optgroup>
								<optgroup label="utf16le" title="UTF-16LE Unicode">
									<option value="utf16le_bin" title="Unicode, binário">utf16le_bin</option>
									<option value="utf16le_general_ci" title="Unicode, Indiferente a maiúsculas/minúsculas">utf16le_general_ci</option>
									<option value="utf16le_general_nopad_ci" title="Unicode, no-pad, Indiferente a maiúsculas/minúsculas">utf16le_general_nopad_ci</option>
									<option value="utf16le_nopad_bin" title="Unicode, no-pad, binário">utf16le_nopad_bin</option>
								</optgroup>
								<optgroup label="utf32" title="UTF-32 Unicode">
									<option value="utf32_bin" title="Unicode, binário">utf32_bin</option>
									<option value="utf32_croatian_ci" title="Croata, Indiferente a maiúsculas/minúsculas">utf32_croatian_ci</option>
									<option value="utf32_croatian_mysql561_ci" title="Croata (MySQL 5.6.1), Indiferente a maiúsculas/minúsculas">utf32_croatian_mysql561_ci</option>
									<option value="utf32_czech_ci" title="Checo, Indiferente a maiúsculas/minúsculas">utf32_czech_ci</option>
									<option value="utf32_danish_ci" title="Dinamarquês, Indiferente a maiúsculas/minúsculas">utf32_danish_ci</option>
									<option value="utf32_esperanto_ci" title="Esperanto, Indiferente a maiúsculas/minúsculas">utf32_esperanto_ci</option>
									<option value="utf32_estonian_ci" title="Estoniano, Indiferente a maiúsculas/minúsculas">utf32_estonian_ci</option>
									<option value="utf32_general_ci" title="Unicode, Indiferente a maiúsculas/minúsculas">utf32_general_ci</option>
									<option value="utf32_general_nopad_ci" title="Unicode, no-pad, Indiferente a maiúsculas/minúsculas">utf32_general_nopad_ci</option>
									<option value="utf32_german2_ci" title="Alemão (ordem de lista telefónica), Indiferente a maiúsculas/minúsculas">utf32_german2_ci</option>
									<option value="utf32_hungarian_ci" title="Húngaro, Indiferente a maiúsculas/minúsculas">utf32_hungarian_ci</option>
									<option value="utf32_icelandic_ci" title="Islandês, Indiferente a maiúsculas/minúsculas">utf32_icelandic_ci</option>
									<option value="utf32_latvian_ci" title="Letão, Indiferente a maiúsculas/minúsculas">utf32_latvian_ci</option>
									<option value="utf32_lithuanian_ci" title="Lituano, Indiferente a maiúsculas/minúsculas">utf32_lithuanian_ci</option>
									<option value="utf32_myanmar_ci" title="Birmanês, Indiferente a maiúsculas/minúsculas">utf32_myanmar_ci</option>
									<option value="utf32_nopad_bin" title="Unicode, no-pad, binário">utf32_nopad_bin</option>
									<option value="utf32_persian_ci" title="Persa, Indiferente a maiúsculas/minúsculas">utf32_persian_ci</option>
									<option value="utf32_polish_ci" title="Polaco, Indiferente a maiúsculas/minúsculas">utf32_polish_ci</option>
									<option value="utf32_roman_ci" title="Europa Ocidental, Indiferente a maiúsculas/minúsculas">utf32_roman_ci</option>
									<option value="utf32_romanian_ci" title="Romeno, Indiferente a maiúsculas/minúsculas">utf32_romanian_ci</option>
									<option value="utf32_sinhala_ci" title="Cingalês, Indiferente a maiúsculas/minúsculas">utf32_sinhala_ci</option>
									<option value="utf32_slovak_ci" title="Eslovaco, Indiferente a maiúsculas/minúsculas">utf32_slovak_ci</option>
									<option value="utf32_slovenian_ci" title="Esloveno, Indiferente a maiúsculas/minúsculas">utf32_slovenian_ci</option>
									<option value="utf32_spanish2_ci" title="Espanhol (tradicional), Indiferente a maiúsculas/minúsculas">utf32_spanish2_ci</option>
									<option value="utf32_spanish_ci" title="Espanhol (moderno), Indiferente a maiúsculas/minúsculas">utf32_spanish_ci</option>
									<option value="utf32_swedish_ci" title="Sueco, Indiferente a maiúsculas/minúsculas">utf32_swedish_ci</option>
									<option value="utf32_thai_520_w2" title="Tailandês (UCA 5.2.0), multi-níveis">utf32_thai_520_w2</option>
									<option value="utf32_turkish_ci" title="Turco, Indiferente a maiúsculas/minúsculas">utf32_turkish_ci</option>
									<option value="utf32_unicode_520_ci" title="Unicode (UCA 5.2.0), Indiferente a maiúsculas/minúsculas">utf32_unicode_520_ci</option>
									<option value="utf32_unicode_520_nopad_ci" title="Unicode (UCA 5.2.0), no-pad, Indiferente a maiúsculas/minúsculas">utf32_unicode_520_nopad_ci</option>
									<option value="utf32_unicode_ci" title="Unicode, Indiferente a maiúsculas/minúsculas">utf32_unicode_ci</option>
									<option value="utf32_unicode_nopad_ci" title="Unicode, no-pad, Indiferente a maiúsculas/minúsculas">utf32_unicode_nopad_ci</option>
									<option value="utf32_vietnamese_ci" title="Vietnamita, Indiferente a maiúsculas/minúsculas">utf32_vietnamese_ci</option>
								</optgroup>
								<optgroup label="utf8" title="UTF-8 Unicode">
									<option value="utf8_bin" title="Unicode, binário">utf8_bin</option>
									<option value="utf8_croatian_ci" title="Croata, Indiferente a maiúsculas/minúsculas">utf8_croatian_ci</option>
									<option value="utf8_croatian_mysql561_ci" title="Croata (MySQL 5.6.1), Indiferente a maiúsculas/minúsculas">utf8_croatian_mysql561_ci</option>
									<option value="utf8_czech_ci" title="Checo, Indiferente a maiúsculas/minúsculas">utf8_czech_ci</option>
									<option value="utf8_danish_ci" title="Dinamarquês, Indiferente a maiúsculas/minúsculas">utf8_danish_ci</option>
									<option value="utf8_esperanto_ci" title="Esperanto, Indiferente a maiúsculas/minúsculas">utf8_esperanto_ci</option>
									<option value="utf8_estonian_ci" title="Estoniano, Indiferente a maiúsculas/minúsculas">utf8_estonian_ci</option>
									<option value="utf8_general_ci" title="Unicode, Indiferente a maiúsculas/minúsculas" selected="selected">utf8_general_ci</option>
									<option value="utf8_general_mysql500_ci" title="Unicode (MySQL 5.0.0), Indiferente a maiúsculas/minúsculas">utf8_general_mysql500_ci</option>
									<option value="utf8_general_nopad_ci" title="Unicode, no-pad, Indiferente a maiúsculas/minúsculas">utf8_general_nopad_ci</option>
									<option value="utf8_german2_ci" title="Alemão (ordem de lista telefónica), Indiferente a maiúsculas/minúsculas">utf8_german2_ci</option>
									<option value="utf8_hungarian_ci" title="Húngaro, Indiferente a maiúsculas/minúsculas">utf8_hungarian_ci</option>
									<option value="utf8_icelandic_ci" title="Islandês, Indiferente a maiúsculas/minúsculas">utf8_icelandic_ci</option>
									<option value="utf8_latvian_ci" title="Letão, Indiferente a maiúsculas/minúsculas">utf8_latvian_ci</option>
									<option value="utf8_lithuanian_ci" title="Lituano, Indiferente a maiúsculas/minúsculas">utf8_lithuanian_ci</option>
									<option value="utf8_myanmar_ci" title="Birmanês, Indiferente a maiúsculas/minúsculas">utf8_myanmar_ci</option>
									<option value="utf8_nopad_bin" title="Unicode, no-pad, binário">utf8_nopad_bin</option>
									<option value="utf8_persian_ci" title="Persa, Indiferente a maiúsculas/minúsculas">utf8_persian_ci</option>
									<option value="utf8_polish_ci" title="Polaco, Indiferente a maiúsculas/minúsculas">utf8_polish_ci</option>
									<option value="utf8_roman_ci" title="Europa Ocidental, Indiferente a maiúsculas/minúsculas">utf8_roman_ci</option>
									<option value="utf8_romanian_ci" title="Romeno, Indiferente a maiúsculas/minúsculas">utf8_romanian_ci</option>
									<option value="utf8_sinhala_ci" title="Cingalês, Indiferente a maiúsculas/minúsculas">utf8_sinhala_ci</option>
									<option value="utf8_slovak_ci" title="Eslovaco, Indiferente a maiúsculas/minúsculas">utf8_slovak_ci</option>
									<option value="utf8_slovenian_ci" title="Esloveno, Indiferente a maiúsculas/minúsculas">utf8_slovenian_ci</option>
									<option value="utf8_spanish2_ci" title="Espanhol (tradicional), Indiferente a maiúsculas/minúsculas">utf8_spanish2_ci</option>
									<option value="utf8_spanish_ci" title="Espanhol (moderno), Indiferente a maiúsculas/minúsculas">utf8_spanish_ci</option>
									<option value="utf8_swedish_ci" title="Sueco, Indiferente a maiúsculas/minúsculas">utf8_swedish_ci</option>
									<option value="utf8_thai_520_w2" title="Tailandês (UCA 5.2.0), multi-níveis">utf8_thai_520_w2</option>
									<option value="utf8_turkish_ci" title="Turco, Indiferente a maiúsculas/minúsculas">utf8_turkish_ci</option>
									<option value="utf8_unicode_520_ci" title="Unicode (UCA 5.2.0), Indiferente a maiúsculas/minúsculas">utf8_unicode_520_ci</option>
									<option value="utf8_unicode_520_nopad_ci" title="Unicode (UCA 5.2.0), no-pad, Indiferente a maiúsculas/minúsculas">utf8_unicode_520_nopad_ci</option>
									<option value="utf8_unicode_ci" title="Unicode, Indiferente a maiúsculas/minúsculas">utf8_unicode_ci</option>
									<option value="utf8_unicode_nopad_ci" title="Unicode, no-pad, Indiferente a maiúsculas/minúsculas">utf8_unicode_nopad_ci</option>
									<option value="utf8_vietnamese_ci" title="Vietnamita, Indiferente a maiúsculas/minúsculas">utf8_vietnamese_ci</option>
								</optgroup>
								<optgroup label="utf8mb4" title="UTF-8 Unicode">
									<option value="utf8mb4_bin" title="Unicode (UCA 4.0.0), binário">utf8mb4_bin</option>
									<option value="utf8mb4_croatian_ci" title="Croata (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_croatian_ci</option>
									<option value="utf8mb4_croatian_mysql561_ci" title="Croata (MySQL 5.6.1), Indiferente a maiúsculas/minúsculas">utf8mb4_croatian_mysql561_ci</option>
									<option value="utf8mb4_czech_ci" title="Checo (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_czech_ci</option>
									<option value="utf8mb4_danish_ci" title="Dinamarquês (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_danish_ci</option>
									<option value="utf8mb4_esperanto_ci" title="Esperanto (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_esperanto_ci</option>
									<option value="utf8mb4_estonian_ci" title="Estoniano (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_estonian_ci</option>
									<option value="utf8mb4_general_ci" title="Unicode (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_general_ci</option>
									<option value="utf8mb4_general_nopad_ci" title="Unicode (UCA 4.0.0), no-pad, Indiferente a maiúsculas/minúsculas">utf8mb4_general_nopad_ci</option>
									<option value="utf8mb4_german2_ci" title="Alemão (ordem de lista telefónica) (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_german2_ci</option>
									<option value="utf8mb4_hungarian_ci" title="Húngaro (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_hungarian_ci</option>
									<option value="utf8mb4_icelandic_ci" title="Islandês (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_icelandic_ci</option>
									<option value="utf8mb4_latvian_ci" title="Letão (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_latvian_ci</option>
									<option value="utf8mb4_lithuanian_ci" title="Lituano (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_lithuanian_ci</option>
									<option value="utf8mb4_myanmar_ci" title="Birmanês (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_myanmar_ci</option>
									<option value="utf8mb4_nopad_bin" title="Unicode (UCA 4.0.0), no-pad, binário">utf8mb4_nopad_bin</option>
									<option value="utf8mb4_persian_ci" title="Persa (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_persian_ci</option>
									<option value="utf8mb4_polish_ci" title="Polaco (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_polish_ci</option>
									<option value="utf8mb4_roman_ci" title="Europa Ocidental (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_roman_ci</option>
									<option value="utf8mb4_romanian_ci" title="Romeno (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_romanian_ci</option>
									<option value="utf8mb4_sinhala_ci" title="Cingalês (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_sinhala_ci</option>
									<option value="utf8mb4_slovak_ci" title="Eslovaco (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_slovak_ci</option>
									<option value="utf8mb4_slovenian_ci" title="Esloveno (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_slovenian_ci</option>
									<option value="utf8mb4_spanish2_ci" title="Espanhol (tradicional) (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_spanish2_ci</option>
									<option value="utf8mb4_spanish_ci" title="Espanhol (moderno) (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_spanish_ci</option>
									<option value="utf8mb4_swedish_ci" title="Sueco (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_swedish_ci</option>
									<option value="utf8mb4_thai_520_w2" title="Tailandês (UCA 5.2.0), multi-níveis">utf8mb4_thai_520_w2</option>
									<option value="utf8mb4_turkish_ci" title="Turco (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_turkish_ci</option>
									<option value="utf8mb4_unicode_520_ci" title="Unicode (UCA 5.2.0), Indiferente a maiúsculas/minúsculas">utf8mb4_unicode_520_ci</option>
									<option value="utf8mb4_unicode_520_nopad_ci" title="Unicode (UCA 5.2.0), no-pad, Indiferente a maiúsculas/minúsculas">utf8mb4_unicode_520_nopad_ci</option>
									<option value="utf8mb4_unicode_ci" title="Unicode (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_unicode_ci</option>
									<option value="utf8mb4_unicode_nopad_ci" title="Unicode (UCA 4.0.0), no-pad, Indiferente a maiúsculas/minúsculas">utf8mb4_unicode_nopad_ci</option>
									<option value="utf8mb4_vietnamese_ci" title="Vietnamita (UCA 4.0.0), Indiferente a maiúsculas/minúsculas">utf8mb4_vietnamese_ci</option>
								</optgroup>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="fieldurl" class="col-sm-3 control-label">Base URL:</label>
						<div class="col-sm-8">
							<input id="fieldurl" class="form-control" type="text" name="site_url" autocomplete="false">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-8">
							<button type="submit" class="btn btn-success" value="Install" name="submit">Instalar</button>
						</div>
					</div>
				</form>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-8">
						<p> É necessário testar o banco antes de prosseguir. <button class="btn btn-default">Testar</button>
					</div>
				</div>
			<?php
			} else {
			?>
				<p class="error">Please make the application/config/production/database.php file writable. <strong>Example</strong>:<br /><br /><code>chmod 777 application/config/database.php</code></p>
			<?php
			}
			?>
		</div>
	</div>
	<!-- Site footer -->
	<footer class="footer">
		<div class="container">
			<p class="text-muted">Copyright &copy; <?= date('Y'); ?> Erison E. Oliveira Nt.</p>
		</div>
	</footer>

	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-notify/bootstrap.notify.min.js"></script>

	<script>
		$(document).ready(function() {

			// to show it in an alert window
			var url = window.location + '';

			var site = url.split("install");

			$('#fieldurl').val(site[0]);
			<?php
			if (!empty($_GET['err_msg'])) {
			?>
				$.notify({
					title: '<strong><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Error!</strong>',
					message: "<?php echo $_GET['err_msg'] ?>"
				}, {
					type: 'danger alert-danger-alt col-md-3'
				});
			<?php
			} elseif (!empty($_GET['success_msg'])) {
			?>

				$.notify({
					title: '<strong> <span class= "glyphicon glyphicon-ok"></span> Success!</strong>',
					message: "<?php echo $_GET['success_msg'] ?>"
				}, {
					type: 'danger alert-success-alt col-md-3'
				});

			<?php
			}
			?>
		});
	</script>
</body>

</html>

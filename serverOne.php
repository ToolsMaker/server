<?php
	$f = fopen(‘POST_DATA.txt’,’a’);
	fwrite($f, ‘Nome do Filme:’.$_POST[‘nameMovie’].”\r\n”);
	fwrite($f, ‘Descricao do Filme:’.$_POST[‘descriptionMovie’].”\r\n”);
	fwrite($f, ‘URL do Filme:’.$_POST[‘urlMovie’].”\r\n”);
	fwrite($f, ‘Nome do Usuario:’.$_POST[‘userName’].”\r\n”);
	fwrite($f, ‘Comentario do Filme:’.$_POST[‘coments’].”\r\n”);
	fwrite($f, ‘Nota do Filme:’.$_POST[‘note’].”\r\n”);
fclose($f);

echo ‘Dados enviados com sucesso’;

echo ‘nome-SPDATA-idade-SPDATA-pais’;
?>

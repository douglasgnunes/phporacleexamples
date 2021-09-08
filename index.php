<?php
//phpinfo();
// require_once('Conexao.php');
// $id=1;
// $variavel_com_email=300;
// $quantidade = 5;
#INSERT
// $dados = $conn->prepare('INSERT INTO fruta_palete (CODIGO_PALETE,CODIGO_FUNCIONARIO) VALUES (?, ?)');
// $dados->bindParam(1, $variavel_com_nome);
// $dados->bindParam(2, $variavel_com_email);
// $dados->execute();

#UPDATE
// $consulta = $conn->prepare('UPDATE fruta_palete SET QUANTIDADE = ? WHERE CODIGO_PALETE = ?');
// $consulta->bindParam(1, $quantidade);
// $consulta->bindParam(2, $id);
// if ($consulta->execute()) {
//   echo 'Dados atualizados com sucesso!';
// }

#DELETE
// $consulta = $conn->prepare('DELETE FROM fruta_palete WHERE CODIGO_PALETE = ?');
// $consulta->bindParam(1, $id);
// if ($consulta->execute()) {
//   echo 'Dados removidos com sucesso!';
// }

#SELECT
// $dados = $conn->prepare('SELECT CODIGO_PALETE, CODIGO_FUNCIONARIO FROM fruta_palete WHERE CODIGO_PALETE = ?');
// $dados->bindParam(1, $id);
// $dados->execute();
// $result = $dados->fetchAll(); //PDO::FETCH_OBJ

// foreach ($result as $key => $value) {
//   $codigoPalete = $value["CODIGO_PALETE"];
// }
// echo "Código do palete: ".$codigoPalete;

?>
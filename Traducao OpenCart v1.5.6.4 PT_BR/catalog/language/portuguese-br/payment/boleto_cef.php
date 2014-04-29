<?php
/*
* Módulo de Pagamento Boleto Caixa Econômica Federal.
* Feito sobre OpenCart 1.5.5.1
* Autor Original Leonardo Ribeiro - leovicio@pop.com.br
* Modificado e Atualizado a partir da versão 1.5.3.1 por Guilherme Desimon - http://www.desimon.net
* Modificado e Atualizado para 1.5.5.1 por Aldo Anizio Lugão Camacho - http://www.visualcode.com.br
* @02/2013
* Sob licença GPL.
*/

// Text
$_['text_title'] = 'Boleto Caixa Econômica Federal';
$_['text_instruction'] = '<h3>Leia atentamente todas as instru&ccedil;&otilde;es abaixo para gerar o Boleto:</h3><br/><br/><h4>1.: Clique no Bot&atilde;o "Gerar Boleto".<br/>2.: O Boleto ser&aacute; aberto em uma nova Aba/Janela. Ao abrir Imprima-o.<br/>3.: Ap&oacute;s imprimir o Boleto feche a Aba/Janela e retorne a esta janela.<br/>4.: Clique no Bot&atilde;o Continuar.</h4>';
$_['text_linkboleto'] = '<a href="'.HTTPS_SERVER.'index.php?route=payment/boleto_cef/callback&order_id=%s" target="_blank">Gerar Segunda Via do Boleto</a>';
$_['text_payment'] = '<h5>Obs.: Pagar preferencialmente nas Casas Lot&eacute;ricas, Ag&ecirc;ncias da Caixa ou Internet Banking.</h5>';
?>
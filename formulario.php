Olá <?php echo htmlspecialchars($_POST['nome']); ?>
<?php
if	 (isset($_POST['envia'])) {
 
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $cidade = $_POST['cidade'];
 $uf = $_POST['uf']; 
 $mensagem = $_POST['mensagem'];
 //====================================================
 
 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //==================================================== 
 $email_remetente = "contato@jahdigital.com.br"; // deve ser uma conta de email do seu dominio 
 //====================================================
 
 //Configurações do email, ajustar conforme necessidade
 //==================================================== 
 $email_destinatario = "jorgejah14@gmail.com"; // pode ser qualquer email que receberá as mensagens
 $email_reply = "$email"; 
 $email_assunto = "Contato Jah Digital"; // Este será o assunto da mensagem
 //====================================================
 
 //Monta o Corpo da Mensagem
 //====================================================
 $email_conteudo = "Nome = $nome \n"; 
 $email_conteudo .= "Email = $email \n";
 $email_conteudo .= "Cidade = $cidade \n";
 $email_conteudo .= "UF = $uf \n"; 
 $email_conteudo .= "Mensagem = $mensagem \n"; 
 //====================================================
 
 //Seta os Headers (Alterar somente caso necessario) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "</b>E-Mail enviado com sucesso!</b>"; 
 } 
 else{ 
 echo "</b>Falha no envio do E-Mail!</b>"; } 
 //====================================================
} 
?>
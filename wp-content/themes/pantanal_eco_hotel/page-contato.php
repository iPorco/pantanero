<?php
/**
 * Template Name: Contato
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 */
    
get_header();
if ($_POST) {
    $sent = 1;
}
?>


<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
        <div class="heading-contact">
        <h1>Entre em Contato</h1>
        <div class="container">

        <div class="row">
             
                <hr class="marginbot-50">
             
        </div>


    <div class="row">
        <div class="col-lg-8">

<?
            if(!$_POST) {
        ?>
            <div class="boxed-grey">
                <form action="#" method="post" id="contato-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nome</label>
                            <input type="text" name="nome" class="form-control" id="name" placeholder="Digite seu nome" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Assunto</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Escolha um:</option>
                                <option value="Inoformações de reservas">Informações de reservas</option>
                                <option value="Outros">Outros assuntos</option>
                                 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensagem</label>
                            <textarea  name="mensagem"id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Texto"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="contato-botao">
                            Enviar Mensagem</button>
                    </div>
                </div>
                </form>
            </div>

            <?
            } else {
                $nome       = $_POST['nome'];
                $assunto    = $_POST['subject'];
                $email      = $_POST['email'];
            
  



                $mensagem = "Contato de: ".$nome;
 
                $mensagem.= "\nResponder para: ".$email;
 
                $mensagem.= "\n\nMensagem enviada: \n".$_POST['mensagem'];



                if(wp_mail( 'contato@pantanero.com.br', $assunto, $mensagem ))
                    echo '<h2>Mensagem enviada!</h2><p>Seu contato foi feito com sucesso! <br />Aguarde só um pouco que breve te retornaremos.</p>';

                else
                    echo '<h1>Ops!</h1><p>Houve um erro durante o envio do seu email!</p>';
            }
        ?>
        </div>
 

        
        <div class="col-lg-4">
            <div class="widget-contact">
                <h5>Pantanero Pousada</h5>
                
                <address>
                  <strong> Endereço</strong><br>
                  MT 040,  S/n,  Cuiaba - Mimoso, zona rural<br />
                  Margem direita do Rio Mutum, Barão de Melgaço <br />
                  CEP: 78190-000<br>
                  <abbr title="Phone">Tel:</abbr> (11) 3230-6361
                </address>

                <address>
                  <strong>Email</strong><br>
                  <a href="mailto:contato@pantanero.com.br">contato@pantanero.com.br</a>
                </address>  
                <!--<address>
                  <strong>Encontre-nos, também, nas redes sociais:</strong><br>
                        <ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>   
                </address>                  
            -->
            </div>  
        </div>
    </div>  

        </div>
    </section>
    <!-- /Section: contact -->
     <hr class="marginbot-50">
<?
    get_footer();
?>
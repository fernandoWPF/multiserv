<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
            <h1>Digite os dados abaixo e clique em Enviar</h1>
            <form class="main_contato-form" action="<?= INCLUDE_PATH; ?>/mail/enviar.php">

                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-email input-group-lg">
                        <input type="text" class="form-control" name="nome"  required="required" placeholder="Seu Nome">
                    </div>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-email input-group-lg">
                        <input type="email" class="form-control"  name="email" required="required" placeholder="Seu E-mail">
                    </div>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-email input-group-lg">
                        <input type="tel" class="form-control"  name="fone"  placeholder="Seu Telefone">
                    </div>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-email input-group-lg">
                        <input type="text" class="form-control"  name="assunto"  required="required" placeholder="Assunto do E-mail">
                    </div>
                </div>
                <div class="form-group form-group-lg div-form-email col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <textarea class="form-control" rows="4"  name="msg" placeholder="Digite aqui sua Mensagem..." style="resize: none"></textarea>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-email input-group-lg">
                        <button type="submit" formmethod="POST" name="btn" class="btn btn-warning form-control">ENVIAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
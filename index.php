<?php include_once "init.php" ?> 
<?php include_once "header.php" ?>

<div class="px-2 d-flex flex-column justify-content-center">
    
    <section id="section-1" class="d-flex align-items-center justify-content-center">
        <form >
            <h4 class="text-center mb-4">
                Qual o nome do seu pet?
            </h4>
            <div class="form-group mb-4">
                <input class="form-control form-control-lg" name="nomeAnimalCliente" value="Timóteo" />
            </div>
            <div class="form-group text-center">
                <a href="#section-2" class="btn btn-lg btn-light">Próóóximo!</a>
            </div>
        </form>
    </section>

    <section id="section-2"class="d-flex align-items-center justify-content-center">
        <form >
            <h4 class="text-center mb-4">
                Timóteo é gato ou cachorro?
            </h4>
            <div class="form-group mb-4 px-2">
                <select class="form-control form-control-lg">
                    <option selected >Gato</option>
                    <option>Cachorro</option>
                </select>
            </div>
            <div class="form-group text-center">
                <a href="#section-3" class="btn btn-lg btn-light">Adiante!!!</a>
            </div>
        </form>
    </section>

    <section id="section-3"class="d-flex align-items-center justify-content-center">
        <form >
            <h4 class="text-center mb-4">
                Timóteo é macho ou fêmea?
            </h4>
            <div class="form-group mb-4 px-2">
                <select class="form-control form-control-lg">
                    <option selected >Macho</option>
                    <option>Fêmea</option>
                </select>
            </div>
            <div class="form-group text-center">
                <a href="#section-4" class="btn btn-lg btn-light">Vai na fé!</a>
            </div>
        </form>
    </section>

    <section id="section-4"class="d-flex align-items-center justify-content-center">
        <form >
            <h4 class="text-center mb-4">
                Quando é o aniversário do Timóteo?
            </h4>
            <div class="form-group mb-4 px-2">
                <input class="form-control form-control-lg text-center" value="01/07/2017" />
            </div>
            <div class="form-group text-center">
                <a href="#section-5" class="btn btn-lg btn-light">Tá quase!</a>
            </div>
        </form>
    </section>

    <section id="section-5"class="d-flex align-items-center justify-content-center">
        <form >
            <h4 class="text-center mb-4">
                Qual a raça do Timóteo?
            </h4>
            <div class="form-group mb-4 px-2">
                <select class="form-control form-control-lg">
                    <option selected >Tomba Latão</option>
                    <option>Bengal</option>
                </select>
            </div>
            <div class="form-group text-center">
                <a href="#section-6" class="btn btn-lg btn-light">Continua na fé!</a>
            </div>
        </form>
    </section>

    <section id="section-6" class="d-flex align-items-center justify-content-center">
        <form >
            <h4 class="text-center mb-4">
                Onde o Timóteo vive?
            </h4>
            <div class="form-group mb-4 px-2">
                <input class="form-control form-control-lg text-center" value="05.777-777" />
            </div>
            <div class="card bg-light mb-4 mx-2">
                <div class="card-body p-2">
                    Rua dos Bobos, 000<br>
                    Vila Tonta<br>
                    São Paulo - SP
                </div>
            </div>            
            <div class="form-group text-center">
                <a href="#section-7" class="btn btn-lg btn-light">Pega rex, pega!</a>
            </div>
        </form>
    </section>

    <section id="section-7" class="d-flex align-items-center justify-content-center">
        <form>
            <h4 class="text-center text-dark mb-4">
                E o nosso Box para o é Timóteo é ...
            </h4>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h5 class="card-title d-inline">Young Cat Box</h5> ... que inclui:
                    </div>
                    <div class="card-text">
                        <p><strong>Seguro Assistência</strong></p>
                        Enfermidades corriqueiras ou pequenos acidentes podem acontecer 
                        a qualquer momento. Nessas horas, contar com um cuidado 
                        ápido e qualificado é fundamental. 
                        O YOUNG CAT cobre consultas, exames, vacinas, 
                        procedimentos ambulatoriais, 
                        incluindo urgências e emergências. Eeee ...
                    </div>
                    <div class="card-text pt-2">
                        <div class="text-center m-2">
                            <img src="img/11504-birthday.gif" class="w-50">
                        </div>
                        <p>Todo mês você e seu pet receberão uma linda caixa<br>
                        com um ou mais presentes surpresa, cuidadosamente selecionados
                        por veterinários.</p>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#section-8" class="btn btn-warning">Quero comprar <strong>AGORA!</strong></a>
                </div>                  
            </div>
        </form>
    </section>

    <section id="section-8" class="d-flex align-items-center justify-content-center" style="width:75%;" >
        <form style="width:100%;" method="POST"> <!-- action = "validacao.php" -->
            <h4 class="text-center text-dark mb-4">
                Cadastrinho rápido ...
            </h4>
            <h5 class="text-center mb-4">
                Qual seu nome?
            </h5>
            <div class="form-group mb-4">
                <input class="form-control form-control-lg text-center" name="NAME" value="Ubiratã Carvalho Nogueira" />
            </div>
            <h5 class="text-center mb-4">
                Qual seu CPF?
            </h5>
            <div class="form-group mb-4">
                <input class="form-control form-control-lg text-center" name="CPF" value="607.487.291-00" />
            </div>
            <h5 class="text-center mb-4">
                E o seu e-mail?
            </h5>
            <div class="form-group mb-4">
                <input class="form-control form-control-lg text-center" name="EMAIL" value="bira@biracarvalho.com.br" />
            </div>            
            <div class="form-group text-center">
                <a href="#section-9" class="btn btn-lg btn-warning">Tá acabando, bora!</a>
            </div>
        </form>
    </section>

    <section id="section-9" class="d-flex align-items-center justify-content-center" style="width:75%;" >
        <form style="width:100%;" >
            <h4 class="text-center text-dark mb-4">
               Obrigado!
            </h4>
            <form method="post"> <!-- action = "checkout.php" -->
            </form>
        </form> 
    </section>    

</div>

<?php include_once "footer.php" ?>
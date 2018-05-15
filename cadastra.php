<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>.:.Cadastrar.:.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="assets/style/buefy.min.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="assets/style/bulma-docs.min.css" />
        <link rel="stylesheet" href="assets/style/sweet-alert.css">
        <script src="assets/js/sweet-alert.js"></script>
        <script src="assets/js/navbar.js"></script>
        <script src="assets/js/jquery-1.9.1.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="assets/style/table.css" />
        <script type="text/javascript" src="assets/js/vueStart.js"></script>
        <script src='assets/js/vue.min.js'></script>
        <script src='assets/js/index.js'></script>    
                  
</head>

<script type="text/javascript">
$(window).load(function(){

$("#btnShowAlert").click(function() {
    sweetAlert(
        "Oops...", "Something went wrong!", "error"
    );
});

});




</script>


  <a id="btnShowAlert">
    Show Sweet Alert
</a>
  


<header>
<nav class="navbar is-transparent">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.html">
        <img src="assets/images/contato.png" alt="Agenda" width="150">
      </a>
      <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  
    <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-start">
        <!--
        <a class="navbar-item" href="/">
          Início
        </a>
      -->
      
        <div class="navbar-item has-dropdown is-hoverable">
      <!--
          <a class="navbar-link" href="/">
            Contatos
          </a>
          <div class="navbar-dropdown is-boxed">
            <a class="navbar-item" href="cadastra.html">
              Cadastrar
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item" href="cadastra.html">
              Listar
            </a>
          </div>
        -->
        </div>
      </div>
  
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
              <a class="bd-tw-button button" href="cadastra.php#listar">
                <span class="icon">
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="#FFFFFF" d="M9,5V9H21V5M9,19H21V15H9M9,14H21V10H9M4,9H8V5H4M4,19H8V15H4M4,14H8V10H4V14Z" />
                </svg>
                </span>
                <span>
                  Listar
                </span>
              </a>
            </p>
            <p class="control">
                <a class="bd-tw-button button" href="cadastra.php#cadastra">
                  <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
<path fill="#FFFFFF" d="M15,14C12.33,14 7,15.33 7,18V20H23V18C23,15.33 17.67,14 15,14M6,10V7H4V10H1V12H4V15H6V12H9V10M15,12A4,4 0 0,0 19,8A4,4 0 0,0 15,4A4,4 0 0,0 11,8A4,4 0 0,0 15,12Z" />
</svg>
                  </span>
                  <span>
                    Cadastro
                  </span>
                </a>
              </p>

          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!-- FINAL CABEÇALHO -->

<?php
//require_once 'crud.php'; // Inclui o arquivo do crud
?>

<body>
<!--Início TAB -->
<div id="app" class="container is-fluid">

<section>
  <b-tabs position="is-centered" class="block">
      <b-tab-item label="Cadastrar">
        
      <h3 id="cadastra" class="title is-4 is-spaced bd-anchor-title">
        <span class="bd-anchor-name">
          Inserir novo cadastro
        </span>
        <a class="bd-anchor-link" href="#cadastra">
        </a>
      </h3> 

<div id="app" class="container">
  <section class="is-fluid">

  <!--- CADASTRAR -->
  <div class="row is-fluid">
    <form action="?act=save" method="POST" name="form1" class="form-horizontal" >
      <div class="panel panel-default">
      <!--VALUE recebe valor que está no BD (editar)  -->
      <div class="is-fluid">
          <input type="hidden" name="id" value="<?php
           // echo (isset($id) && ($id != null || $id != "")) ? $id : ''; ?>" />
                
      <div class="form-group">
          <label for="nome label" class="label git is-normal">Nome: </label>
          <b-field> 
            <input type="text" name="nome" placeholder="Nome" value="<?php
             // echo (isset($nome) && ($nome != null || $nome != "")) ? $nome : ''; ?>" class="input"/>
              
          </b-field> 
          <label for="apelido" class="label git is-normal">Apelido: </label>
          <div class="col-md-4">
              <input type="text" name="apelido" value="<?php
               // echo (isset($apelido) && ($apelido != null || $apelido != "")) ? $apelido : ''; ?>" class="input" />
          </div>
      </div>

          <label for="numero" class="label git is-normal">Telefone: </label>
          <div class="field is-grouped">
              <input type="text" name="numero" value="<?php
               // echo (isset($numero) && ($numero != null || $numero != "")) ? $numero : ''; ?>" class="input" />
              <p class="control">
                <a class="button is-info is-primary">+</a>
              </p>
          </div>
          <br>
      </div>
    </div>
          <div class="field is-grouped-left">
            <div class="clearfix">
                <div class="control">
                  <button type="submit" class="button is-primary" /> Salvar</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
  <!--- FINAL CADASTRAR -->
</section>
</div>

      </b-tab-item>
        <b-tab-item label="Listar">
      
      <!--- LISTAR -->
      <!-- <table>
        <caption>Contatos</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Apelido</th>  
            <th scope="col">E-mail</th>
            <th scope="col">Telefones</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>  -->
        <!-- READ -->
    <!-- </tbody>
    </table> -->
      <!--- LISTAR -->    
      
      </b-tab-item>
    </b-tabs>
</section>
</div>​
<!--Final TAB -->
  <script>
    //Habilita função do TAB
    Vue.use(Buefy.default);
        var app = new Vue();
           app.$mount('#app');
  </script>

<!-- MetaProgramação -->


	<script>
	meta{
    var nome;
    var apelido;
    var telefone;

  }
  


  //Maninpulador---------------------------------Manipulador
  	// let domColor = document.querySelector('.color')

		// let cnf = {
			// childList: true,
			// attributes: true,
			// characterData: true,
			// subtree: true,
			// attributeOldValue: true,
			// characterDataOldValue: true,
			//// attributeFilter: [],
		// }

		// let mo = new MutationObserver(mutations => {
		// 	mutations.forEach(mutation => {
		// 		if (mutation.type == "characterData")
		// 			document.body.style.backgroundColor = domColor.innerText
		// 	})
		// });

		// mo.observe(domColor, cnf)

		// class Manipulador {
		// 	constructor() {
		// 		this.domNome = document.querySelector('.nome')
    //     this.domApelido = document.querySelector('.apelido')
		// 		this.domTelefone = document.querySelector('.telefone')
		// 	}

		// 	get nome() {
		// 		return this.domNome.innerText
		// 	}

		// 	set nome(value) {
		// 		this.domNome.innerText = value
		// 	}

		// 	get apelido() {
		// 		return this.domApelido.innerText
		// 	}

		// 	set apelido(value) {
		// 		this.domNome.innerText = value
		// 	}

		// 	get telefone() {
		// 		return this.domTelefone.innerText
		// 	}

		// 	set telefone(value) {
		// 		this.domTelefone.innerText = value
		// 	}
		// }

		// var man = new Manipulador()

	</script>


</body>
<footer class="hero is-medium">
            <div class="container ">
              <div class="content has-text-centered">
                <p>
                  <strong>Optativa II - Utilização de Tecnologia emergentes no desenvolvimento de aplicações cliente servidor modernas</strong> - BSI/15
                </p>
              </div>
            </div>
          </div>  
          </footer>
</html>
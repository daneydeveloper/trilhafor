<!DOCTYPE html>
<html lang="pt-BR" ng-app="app">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="troller, trilhafor, t4, 4x4" />
      <meta name="description" content="Troller é na Trilha For. Uma concessionária das Agências Peixoto." />
      <meta name="author" content="mídia9" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <link rel="shortcut icon" href="images/favicon.png" />
      <title>TrilhaFor - Concessionária Troller em Fortaleza</title>

      <!-- bootstrap -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
      <!-- flaticon -->
      <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
      <!-- mega menu -->
      <link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css" />
      <!-- mega menu -->
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
      <!-- main style -->
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <!-- responsive -->
      <link rel="stylesheet" type="text/css" href="css/responsive.css" />
      <!-- Style customizer -->
      <link rel="stylesheet" href="#" data-style="styles">
      <link rel="stylesheet" type="text/css" href="css/style-customizer.css" />

      <link rel="stylesheet" type="text/css" href="http://cdn.marketingmidia9.com.br/css/sweetalert2.css">
		<link rel="stylesheet" type="text/css" href="http://cdn.marketingmidia9.com.br/css/ngDialog.min.css">
		<style type="text/css">
		   .ngdialog.ngdialog-theme-default .ngdialog-content {
		      font-size: 1.1em;
		      background-color: rgba(255, 255, 255, 0);
		      line-height: 1.5em;
		      margin: 0 auto;
		      max-width: 40%;
		      margin-top: 5%;
		   }
		   .ngdialog-overlay {
		      background: rgba(0, 0, 0, 0.68);
		   }
		</style>
   </head>
   <body ng-controller="Lead">
      <?php include_once('includes/header.php');?>

      <section class="contact-2 page-section-ptb white-bg">
         <div class="container">
            <div class="row">
               <div class="col-md-offset-1 col-md-10">
                  <div class="section-title">
                     <h2>CONTATO</h2>
                     <div class="separator"></div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 col-md-8">
                  <div class="gray-form row">
                     <div class="col-lg-12 col-md-12">
                        <!-- <div id="formmessage">Success/Error Message Goes Here</div> -->
                        <form name="form" class="form-horizontal" id="contactform" role="form">
                           <h5>Preencha o formulário abaixo</h5>
                           <p>Quer falar conosco sobre o novo T4 ou quer mais informações sobre peças e acessório? É bem fácil. Basta preencher os campos que retornamos para você.</p>
                           <div class="contact-form">
                              <div class="form-group">
                              	<span>Nome Completo*</span>
                                 <input ng-model="dados.LE_Nome" ng-required="true" ng-disabled="load" id="name" type="text"  class="form-control"  name="name">
                              </div>
                              <div class="form-group">
                              	<span>E-mail*</span>
                                 <input ng-model="dados.LE_Email" ng-required="true" ng-disabled="load" type="email" class="form-control" name="email">
                              </div>
                              <div class="form-group">
                              	<span>Telefone*</span>
                                 <input ng-model="dados.LE_Telefone" ng-required="true" ng-disabled="load" type="text" class="form-control" name="phone">
                              </div>
                              <div class="form-group">
                              	<span>Mensagem*</span>
                                 <textarea ng-model="dados.LE_Descricao" ng-required="true" ng-disabled="load" class="form-control input-message" rows="7" name="message"></textarea>
                              </div>
                              <!-- <button id="submit" name="submit" type="submit" value="Send" class="button red"> Enviar</button> -->
                              <div class="right">
		                           <div class="form-group">
				                        <button class="button red btn hvr-bounce-in submit btn-color text-uppercase" id="button_submit" ng-click="enviarLead(dados)" ng-disabled="form.$invalid || load" >
				                           <b ng-if="load">Enviando...</b>
				                           <b ng-if="!load">Enviar</b>
				                        </button>
				                     </div>
		                        </div>
                           </div>
                        </form>
                        <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader.gif" alt=""></div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="feature-box-3">
                     <div class="icon">
                        <i class="fa fa-map-marker"></i>
                     </div>
                     <div class="content">
                        <h5>Endereço </h5>
                        <p> BR-116, 5590, Aerolândia - Fortaleza/CE </p>
                     </div>
                  </div>
                  <div class="feature-box-3">
                     <div class="icon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <div class="content">
                        <h5>Telefone </h5>
                        <p>(85) 3221-6110</p>
                     </div>
                  </div>
                  <div class="feature-box-3">
                     <div class="icon">
                        <i class="fa fa-envelope-o"></i>
                     </div>
                     <div class="content">
                        <h5>Email  </h5>
                        <p> emerson@trilhafor.com.br </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="contact-map">
         <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1827739223863!2d-38.51989798581638!3d-3.7703732444417404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74f2dead52415%3A0x4d8df8fb595e52ff!2sBR-116%2C+5590+-+Aerol%C3%A2ndia%2C+Fortaleza+-+CE%2C+60850-810!5e0!3m2!1spt-BR!2sbr!4v1515525945941" allowfullscreen></iframe>
         </div>
      </section>

      <?php include_once('includes/footer.php');?>

      <!-- jquery  -->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <!-- bootstrap -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- mega-menu -->
      <script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>
      <!-- select -->
      <script type="text/javascript" src="js/select/jquery-select.js"></script>
      <!-- style customizer  -->
      <script type="text/javascript" src="js/style-customizer.js"></script>
      <!-- custom -->
      <script type="text/javascript" src="js/custom.js"></script>

      <script src="http://cdn.marketingmidia9.com.br/js/angular.min.js"></script>
	   <script src="http://cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
	   <script src="http://cdn.marketingmidia9.com.br/js/ngMask.min.js"></script>
	   <script src="http://cdn.marketingmidia9.com.br/js/ngDialog.min.js"></script>
	   <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
	   <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
	   <script type="text/javascript">
	      angular.module('app', ['ngMask', 'ngDialog'])
	      .controller('Lead', function($scope, $log, $http, $location, ngDialog, $httpParamSerializerJQLike){
	          $log.warn($location.host());
	          $scope.load = false;
	          $scope.dados = {};
	          var host = 'http://crm2.marketingmidia9.com.br'
	          var registra_acesso = function() {
	              $http.get(host + '/api/registraAcesso/LNJeIdwkFSL2VV0EB6WmSCwTnPcHHAOS2MzWavDFCgs')
	              .success(function(result){
	                  $log.info(result);
	                  $scope.request = result.data;
	              });
	      
	              $http.get('http://ipv4.myexternalip.com/json')
	              .success(function(result) { 
	                $http.get('http://api.ipinfodb.com/v3/ip-city/?key=20d8cbecc9e0a937c59a9754982bc0a4a76d26ce9b7ce016e2f5276451c96466&ip='+result.ip+'&format=json')
	                .success(function(data){
	                    /*$log.info(data);*/
	                    $scope.meta = data;
	                })
	              });
	          }
	      
	          $scope.enviarLead = function(dados, tmp = null) {
	            $scope.load = true;
	            dados.EMP_Key = $scope.request.EMP_Key;
	            /*dados.EMP_Key = 'F27PPqcdM4zg0n6SXaGrWUPCkK6LGc7za0ni_QBtiG8';*/
	            dados.LE_CodigoTipo = 9997;
	            dados.LE_CodigoProduto = 217;
	            dados.LE_MetaDado = $scope.meta;
	            $log.info(dados);
	      
	            $http({
	              method: 'POST',
	              url: host + '/api2/registraLead',
	              data:  $httpParamSerializerJQLike(dados),
	              headers: {
	                'Content-Type': 'application/x-www-form-urlencoded'
	              }
	            })
	           .success(function(retorno){
	              $scope.load = false;
	              if (!retorno.error) {
	                swal({
	                  title: "Obrigado!",
	                  text: "suas informações foram enviadas com sucesso, um de nossos colaboradores irá lhe contactar em breve",
	                  type: "success",
	                  confirmButtonColor: "#DD6B55",
	                  confirmButtonText: "Ok",
	                  closeOnConfirm: false
	                },
	                function(){
	                 window.location.href = "";
	                });
	              }
	              else {
	                swal("Ops!", "Ocorreu um problema ao enviar suas informações, tente novamente", "error");
	              }
	            })
	            .error(function(retorno){
	              $scope.load = false;
	              $log.error(retorno);
	            });
	           
	        }
	      
	          /*$scope.openForm = function(template, tipo) {
	            $scope.dados.LE_CodigoTipo = tipo;
	            ngDialog.openConfirm({
	              template:template,
	              scope: $scope,
	              width: '100%',
	              showClose: false,
	              closeByDocument: false,
	              closeByEscape: false
	            });
	          }*/
	          /*$timeout(function() {
	           	$scope.formIndex = 2;
	              $scope.openForm('m_Form', null);
	           }, 1);*/
	      
	          registra_acesso();
	      });
	   </script> 
   </body>
</html>
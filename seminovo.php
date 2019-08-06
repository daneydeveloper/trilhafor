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

      <!-- META TAG -->
      <meta property="og:locale" content="pt_BR" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Trilha For - Troller" />
		<meta property="og:description" content="Troller é na Trilha For. Uma concessionária das Agências Peixoto." />
		<meta property="og:url" content="http://www.trilhafor.com.br" />
		<meta property="og:site_name" content="TrilhaFor" />
		<meta property="og:image" content="" />

      <!-- bootstrap -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
      <!-- flaticon -->
      <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
      <!-- mega menu -->
      <link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css" />
      <!-- mega menu -->
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
      <!-- slick css -->
      <link rel="stylesheet" type="text/css" href="css/slick/slick.css" />
      <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css" />
      <!-- owl-carousel -->
      <link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.css" />
      <!-- main style -->
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <!-- responsive -->
      <link rel="stylesheet" type="text/css" href="css/responsive.css" />
      <!-- Style customizer -->
      <link rel="stylesheet" href="#" data-style="styles">
      <link rel="stylesheet" type="text/css" href="css/style-customizer.css" />
      <!-- M9 -->
	   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
      <link rel="stylesheet" type="text/css" href="http://cdn.marketingmidia9.com.br/css/sweetalert.css">
   </head>
   <body ng-controller="Home">
      
      <?php include_once('includes/header.php');?>
      
      <section class="car-details page-section-ptb">
         <div class="container" ng-repeat="item in modelos.modelos">
            <div class="row">
               <div class="col-lg-9 col-md-9 col-sm-9">
                  <h3>{{item.PRO_Nome}}</h3>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="details-nav">
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-lg-8 col-md-8 col-sm-8">
                  <div class="slider-slick">
                     <div class="slider slider-for detail-big-car-gallery"> 
                        <img class="img-responsive" src="images/detail/big/01.jpg" alt="">
                        <img class="img-responsive" src="images/detail/big/02.jpg" alt="">
                        <img class="img-responsive" src="images/detail/big/03.jpg" alt="">
                        <img class="img-responsive" src="images/detail/big/04.jpg" alt="">
                        <img class="img-responsive" src="images/detail/big/05.jpg" alt="">
                        <img class="img-responsive" src="images/detail/big/06.jpg" alt="">
                        <img class="img-responsive" src="images/detail/big/07.jpg" alt="">
                        <img class="img-responsive" src="images/detail/big/08.jpg" alt="">
                     </div>
                     <div class="slider slider-nav"> 
                        <img class="img-responsive" src="images/detail/thum/01.jpg" alt=""> 
                        <img class="img-responsive" src="images/detail/thum/02.jpg" alt=""> 
                        <img class="img-responsive" src="images/detail/thum/03.jpg" alt=""> 
                        <img class="img-responsive" src="images/detail/thum/04.jpg" alt=""> 
                        <img class="img-responsive" src="images/detail/thum/05.jpg" alt=""> 
                        <img class="img-responsive" src="images/detail/thum/06.jpg" alt=""> 
                        <img class="img-responsive" src="images/detail/thum/07.jpg" alt=""> 
                        <img class="img-responsive" src="images/detail/thum/08.jpg" alt=""> 
                     </div>
                  </div>
		            <div id="tab1" class="tabcontent"> 
			             <h6>Descrição do Veículo</h6>   
			             <p>{{item.PRO_MetaDados.PRO_Descricao}}</p>
			         	 <h6>Detalhes do veículo</h6>
                        <table class="table table-bordered">
                           <tbody>
                              <tr>
                                 <th scope="row"> Ano</th>
                                 <td>{{item.PRO_MetaDados.PRO_Ano}}</td>
                              </tr>
                              <tr>
                                 <th scope="row"> Cambio</th>
                                 <td>{{item.PRO_MetaDados.PRO_Cambio}}</td>
                              </tr>
                              <tr>
                                 <th scope="row"> Combustível</th>
                                 <td>{{item.PRO_MetaDados.PRO_Combustivel}}</td>
                              </tr>
                              <tr>
                                 <th scope="row"> Cor</th>
                                 <td>{{item.PRO_MetaDados.PRO_Cor}}</td>
                              </tr>
                              <tr>
                                 <th scope="row">Km Rodados</th>
                                 <td>{{item.PRO_MetaDados.PRO_KM}}</td>
                              </tr>
                           </tbody>
                        </table>
			         </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="car-details-sidebar">
                     <div class="details-form contact-2 details-weight">
                     	<div ng-controller="Lead">
	                        <form class="gray-form" name="form">
	                        	<!-- <input type="hidden" ng-init="dados.LE_CodigoProduto={{item.PROI_CodigoProduto}}"> -->
	                           <h5 class="texto-transform">Quer receber um contato via WhatsApp agora? Deixe seus dados que falaremos AGORA com você</h5>
	                           <div class="form-group">
	                              <label>Nome*</label>
	                              <input ng-model="dados.LE_Nome" ng-required="true" ng-disabled="load" type="text" class="form-control" >
	                           </div>
	                           <div class="form-group">
	                              <label>Email*</label>
	                              <input ng-model="dados.LE_Email" ng-required="true" ng-disabled="load" type="text" class="form-control" >
	                           </div>
	                           <div class="form-group">
	                              <label>Telefone*</label>
	                              <input ng-model="dados.LE_Telefone" ng-required="true" ng-disabled="load" type="text" class="form-control" >
	                           </div>
	                           <div class="right">
		                           <div class="form-group">
				                        <button class="button red btn hvr-bounce-in submit btn-color text-uppercase" id="button_submit" ng-click="enviarLead(dados)" ng-disabled="form.$invalid || load" >
				                           <b ng-if="load">Enviando...</b>
				                           <b ng-if="!load">Enviar</b>
				                        </button>
				                     </div>
		                        </div>
	                        </form>
	                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <?php include_once('includes/footer.php');?>

      <!-- jquery  -->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <!-- bootstrap -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- mega-menu -->
      <script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>
      <!-- appear -->
      <script type="text/javascript" src="js/jquery.appear.js"></script>
      <!-- owl-carousel -->
      <script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>
      <!-- slick -->
      <script type="text/javascript" src="js/slick/slick.min.js"></script>
      <!-- select -->
      <script type="text/javascript" src="js/select/jquery-select.js"></script>
      <!-- style customizer  -->
      <script type="text/javascript" src="js/style-customizer.js"></script>
      <!-- custom -->
      <script type="text/javascript" src="js/custom.js"></script>
      <!-- php forms -->
      <script type="text/javascript" src="js/forms/form-validation.js"></script>
      <script src="../../../www.google.com/recaptcha/apib091.js?render=explicit" async defer></script>
      <script type="text/javascript" src="js/forms/recaptcha.js"></script>
      <!-- M9 -->
      <script src="http://cdn.marketingmidia9.com.br/js/angular.min.js"></script>
	   <script src="http://cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
	   <script src="http://cdn.marketingmidia9.com.br/js/ngMask.min.js"></script>
	   <script src="http://cdn.marketingmidia9.com.br/js/ngDialog.min.js"></script>
	   <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
	   <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
	   <script type="text/javascript">
	      angular.module('app', ['ngMask', 'ngDialog'])
	      .factory('urlParamns', function(){
			  var _get = function() {
			      paramsObject = {};
			      window.location.search.replace(/\?/,'').split('&').map(function(o){ paramsObject[o.split('=')[0]]= o.split('=')[1]});
			      return paramsObject;
			  }
			  return {
			    get: _get
			  }
			})
	      .controller('Lead', function($scope, $log, $http, $location, ngDialog, $httpParamSerializerJQLike){
	          $log.warn($location.host());
	          $scope.load = false;
	          $scope.dados = {};
	          var host = 'http://crm2.marketingmidia9.com.br'
	          var registra_acesso = function() {
	              $http.get(host + '/api/registraAcesso/peayGnYW3Xu6IFzhzL9LrhurE8oYKp_3a2uL__4Gus4')
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
	            /*dados.EMP_Key = $scope.request.EMP_Key;*/
	            dados.EMP_Key = 'F27PPqcdM4zg0n6SXaGrWUPCkK6LGc7za0ni_QBtiG8';
	            dados.LE_CodigoTipo = 2;
	            /*dados.LE_CodigoProduto = modelos.PRO_CodigoProduto;*/
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
	      })
	      .controller('Home', function($scope, $log, $http, urlParamns){
				$log.info("Home");
			  $log.debug('v 1.0.1');
				var host = 'http://crm2.marketingmidia9.com.br'
				var registra_acesso = function() {
			    $http.get(host + '/api/registraAcesso/peayGnYW3Xu6IFzhzL9LrhurE8oYKp_3a2uL__4Gus4')
			    .success(function(result){
			        $log.info(result);
			        $scope.request = result.data;
			        carregaModelo();
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

			  var carregaModelo = function () {
			    /*$log.info($scope.request);*/
			    $http.get(host + '/api/carregaModelosSeminovo/1/' + $scope.request.EMP_Key)
			    .success(function(result){
			      $log.info(result);
			      $scope.modelos = result;
			    })
			    .error(function(result){
			      $log.error(result);
			    });
			  }

			  registra_acesso();
			});
	   </script>
   </body>
</html>
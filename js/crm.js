angular.module('app', ['ngRoute','angular-flexslider','ngMask'])
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
      $scope.dados = result;
    })
    .error(function(result){
      $log.error(result);
    });
  }

  registra_acesso();
})


.controller('Detalhe', function($scope, $log, $http, urlParamns){
  $log.info('Detalhe');
  $log.debug('v 1.0.1');
  var urlData = urlParamns.get();
  $log.info(urlParamns.get());
  var host = 'http://crm2.marketingmidia9.com.br';

  var carregaModelo = function () {
    $http.get(host + '/api/carregaModelosSeminovoDetalhe/' + $scope.request.EMP_Key + '/' + urlParamns.get().id)
    .success(function(result){
      $log.info(result);
      $scope.dados = result;
    })
    .error(function(result){
      $log.error(result);
    });
  }

  var registra_acesso = function() {
    $http.get(host + '/api/registraAcesso/ogKEeQT5hbnObI6GcZiisPr0MtjGWZ-AFy2qrMphUJc')
    .success(function(result){
        $log.info(result);
        $scope.request = result.data;
        carregaModelo();
    });

    $http.get('http://ipv4.myexternalip.com/json')
    .success(function(result) { 
      $http.get('http://api.ipinfodb.com/v3/ip-city/?key=20d8cbecc9e0a937c59a9754982bc0a4a76d26ce9b7ce016e2f5276451c96466&ip='+result.ip+'&format=json')
      .success(function(data){
          $scope.meta = data;
      })
    });
  }

  registra_acesso();
})

.controller('Lead', function($scope, $log, $http, $location){
    $log.warn($location.host());
    $scope.disabled = false;
    var novo = true
    $scope.new = true;
   

    var host = 'http://crm2.marketingmidia9.com.br'
    var registra_acesso = function() {
        $http.get(host + '/api/registraAcesso/ogKEeQT5hbnObI6GcZiisPr0MtjGWZ-AFy2qrMphUJc')
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
      $log.info($scope.request);
      $http.get(host + '/api/carregaModelosSeminovo/1/' + $scope.request.EMP_Key)
      .success(function(result){
        $log.info(result);
        $scope.modelos = result;
      })
      .error(function(result){
        $log.error(result);
      });
    }

    $scope.enviarLead = function(dados) {
        $scope.disabled = true;
        $scope.dados.LE_CodigoTipo = '2';     
        $scope.dados.LE_Origem = "Starfor Seminovos";
        $scope.dados.EMP_Key = 'ogKEeQT5hbnObI6GcZiisPr0MtjGWZ-AFy2qrMphUJc';
        $scope.dados.LE_MetaDado = $scope.meta;
        $log.info(dados);
        $.ajax({
            url: host +'/api/registraLead/' ,
            type:'POST',
            data: dados,
            success: function(retorno) {
              $scope.disabled = false;
                    $log.info(retorno);
                    if (retorno) {
                        swal("Ops!", "Ocorreu um problema ao enviar suas informaÃ§Ãµes, tente novamente.", "error");
                    }
                    else {
                        swal("Obrigado!", "suas informaÃ§Ãµes foram enviadas com sucesso, um de nossos colaboradores irÃ¡ lhe contactar em breve", "success");
                        swal({
                          title: "Obrigado!",
                          text: "suas informaÃ§Ãµes foram enviadas com sucesso, um de nossos colaboradores irÃ¡ lhe contactar em breve",
                          type: "success",
                          confirmButtonColor: "#DD6B55",
                          confirmButtonText: "Ok",
                          closeOnConfirm: false
                        },
                        function(){
                         window.location.replace("https://www.facebook.com/fordstarfor/");
                        });
                    }
                },
        });
    }
    registra_acesso();
})

.directive('realTimeCurrency', function ($filter, $locale) {
      var decimalSep = $locale.NUMBER_FORMATS.DECIMAL_SEP;
      var toNumberRegex = new RegExp('[^0-9\\' + decimalSep + ']', 'g');
      var trailingZerosRegex = new RegExp('\\' + decimalSep + '0');
      var filterFunc = function (value) {
          return $filter('currency')(value);
      };
      function getCaretPosition(input){
          if (!input) return 0;
          if (input.selectionStart !== undefined) {
              return input.selectionStart;
          } else if (document.selection) {
              // Curse you IE
              input.focus();
              var selection = document.selection.createRange();
              selection.moveStart('character', input.value ? -input.value.length : 0);
              return selection.text.length;
          }
          return 0;
      }


      function setCaretPosition(input, pos){
          if (!input) return 0;
          if (input.offsetWidth === 0 || input.offsetHeight === 0) {
              return; // Input's hidden
          }
          if (input.setSelectionRange) {
              input.focus();
              input.setSelectionRange(pos, pos);
          }
          else if (input.createTextRange) {
              // Curse you IE
              var range = input.createTextRange();
              range.collapse(true);
              range.moveEnd('character', pos);
              range.moveStart('character', pos);
              range.select();
          }
      }

      function toNumber(currencyStr) {
          return parseFloat(currencyStr.replace(toNumberRegex, ''), 10);
      }


      return {
          restrict: 'A',
          require: 'ngModel',
          link: function postLink(scope, elem, attrs, modelCtrl) {    
              modelCtrl.$formatters.push(filterFunc);
              modelCtrl.$parsers.push(function (newViewValue) {
                  var oldModelValue = modelCtrl.$modelValue;
                  var newModelValue = toNumber(newViewValue);
                  modelCtrl.$viewValue = filterFunc(newModelValue);
                  var pos = getCaretPosition(elem[0]);
                  elem.val(modelCtrl.$viewValue);
                  var newPos = pos + modelCtrl.$viewValue.length -
                                     newViewValue.length;
                  if ((oldModelValue === undefined) || isNaN(oldModelValue)) {
                      newPos -= 3;
                  }
                  setCaretPosition(elem[0], newPos);
                  return newModelValue;
              });
          }
      };
    });
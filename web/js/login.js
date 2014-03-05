function LoginController($scope, $http)
{
    $scope.user = {};
    $scope.msg = {};

    $scope.loginAction = function(login)
    {
        
        $http({method: 'POST', url: 'class/Acces.php?User=' + login.email + '&Pass=' + login.password }).success(function(data)
        {
            $scope.user = $scope.posts = data; // response data 
            if ($scope.user.length != 0)
            {
                location.href = "index.php?ctl=inicio";
            } else {
                $scope.msg = "El usuario o contrase\u00f1a proporcionados son incorrectos.";
            }

        });
    }
}

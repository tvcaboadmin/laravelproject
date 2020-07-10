<?php 
namespace App\Http\Controllers;

use Aacotroneo\Saml2\Http\Controllers\Saml2Controller;

class MySaml2Controller extends Saml2Controller
{
    public function login()
    {
        $loginRedirect = 'http://localhost:9011/samlv2/login/31663266-3962-3031-6165-363138323962'; // Determine redirect URL
        $this->saml2Auth->login($loginRedirect);
    }
}
?>
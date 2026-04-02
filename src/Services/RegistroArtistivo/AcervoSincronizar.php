<?php // versão 01;   
namespace Idsy\Client\Services\RegistroArtistivo;

use Idsy\Client\Http\Request;

class AcervoSincronizar
{
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->toClear();
    }

    public function toClear(): void
    {
        $this->request->toClear();
    }

    public function post(string $authenticationData): void
    {   
        $this->request->setController('REGISTRO_ARTISTICO_ACERVO_SINCRONIZAR');
        $this->request->setPublicDataType('json');
        $this->request->setAuthenticationDataType('text');  
        $this->request->setAuthenticationData($authenticationData);        
        $this->request->setPrivateDataType('json');  
        $this->request->post();        
    }
}

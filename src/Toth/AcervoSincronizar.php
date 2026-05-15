<?php
namespace Idsy\Client\Toth;

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
        $this->request->setController('TOTH_ACERVO_SINCRONIZAR');
        $this->request->setPublicDataType('json');
        $this->request->setAuthenticationDataType('text');
        $this->request->setAuthenticationData($authenticationData);
        $this->request->setPrivateDataType('json');
        $this->request->post();
    }
}

<?php

namespace Idsy\Client\Control;

use Idsy\Client\Http\Request;

class Login
{
    public Request $request;

    private string $login;
    private string $password;
    private string $team;
    private string $key;

    public function __construct()
    {
        $this->request = new Request();
        $this->toClear();
    }

    public function toClear(): void
    {
        $this->login    = '';
        $this->password = '';
        $this->team     = '';
        $this->key      = '';
        $this->request->toClear();
    }

    public function getLogin(): string
    {
        return $this->login;
    }
    public function setLogin(string $value): void
    {
        $this->login = substr($value, 0, 100);
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $value): void
    {
        $this->password = substr($value, 0, 100);
    }

    public function getTeam(): string
    {
        return $this->team;
    }
    public function setTeam(string $value): void
    {
        $this->team = substr($value, 0, 100);
    }

    public function getKey(): string
    {
        return $this->key;
    }
    public function setKey(string $value): void
    {
        $this->key = substr($value, 0, 100);
    }

    public function get(): void
    {
        $authenticationData = [
            'login'    => $this->login,
            'password' => $this->password,
            'team'     => $this->team,
            'key'      => $this->key,
        ];

        $this->request->setController('CONTROL_LOGIN');
        $this->request->setPublicDataType('json');
        $this->request->setAuthenticationDataType('json');
        $this->request->setAuthenticationData(json_encode($authenticationData));
        $this->request->setPrivateDataType('json');
        $this->request->post();
    }
}

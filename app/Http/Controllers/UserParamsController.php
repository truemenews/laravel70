<?php namespace App\Http\Controllers;

class UserParamsController extends BindParamsController
{
    public function getName()
    {
        return view('bind-params.user-params-view', [
            'username' => $this->request->username, 
            'email' => $this->request->email
        ]);
    }

    public function getServer()
    {
        return view('bind-params.server-params-view', [
            'remoteAddr' => $this->server->remote_addr, 
            'serverPort' => $this->server->server_port
        ]);
    }

    public function postForm()
    {
        return view('bind-params.post-form');
    }

    public function submitForm()
    {
        return view('bind-params.submit-form', [
            'name' => $this->request->name,
            'old' => $this->request->old
        ]);
    }

    public function postWithHeader()
    {
        return view('bind-params.post-with-header', [
            'keyHeader' => $this->header->keyHeader,
            'param1' => $this->request->param1,
            'param2' => $this->request->param2
        ]);
    }

    public function getConfig()
    {
        return view('bind-params.get-config', [
            'appName' => $this->config->app->name,
            'logDaily' => $this->config->logging->channels->daily
        ]);
    }
}

<?php
namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $addHttpCookie = true;

    protected $except = [
        'casos/*',
    ];
    //protected $except = ['*'];

    public function getToken($request)
    {
        // Retorna el mismo token CSRF en cada solicitud
        //return 'UN0DC*2o2E+M3xIc0/*-G3st1on4';

        // Obtener el token CSRF de la ruta /token
        $response = app()->handle(Request::create('/token', 'GET'));
        $token = $response->getContent();
        
        // Retorna el token CSRF obtenido
        return $token;
    }

    protected function tokensMatch($request)
    {
        // Verifica si el token enviado en la solicitud coincide con el token almacenado
        $token = $this->getToken($request);
        return hash_equals((string) $request->input('_token'), $token);
    }
}

<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    // public function render($request, Throwable $exception)
    // {
    //     // cuando se usa un request validation
    //     if ($exception instanceof ValidationException) {
    //         return $this->errorResponse($exception->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
    //     }

    //     // cuando se usa un tipo de request equivocado para una url
    //     if ($exception instanceof MethodNotAllowedHttpException) {
    //         return $this->errorResponse('The request method is not allowed for the requested resource.', Response::HTTP_METHOD_NOT_ALLOWED);
    //     }

    //     // cuando se usa en la url un id que no existe
    //     if ($exception instanceof ModelNotFoundException) {
    //         $model = strtolower(class_basename($exception->getModel()));
    //         return $this->errorResponse("Does not exist any instance of {$model} with the given id.", Response::HTTP_NOT_FOUND);
    //     }

    //     // cuando se usa un nombre de ruta que no existe(->name())
    //     if ($exception instanceof RouteNotFoundException) {
    //         return $this->errorResponse('Route not found.', Response::HTTP_NOT_FOUND);
    //     }

    //     // cuando se usa una url que no existe
    //     if ($exception instanceof NotFoundHttpException) {
    //         return $this->errorResponse('The requested resource was not found.', Response::HTTP_NOT_FOUND);
    //     }

    //     // cuando un request validation retorna false
    //     if ($exception instanceof AuthorizationException) {
    //         return $this->errorResponse($exception->getMessage(), Response::HTTP_FORBIDDEN);
    //     }

    //     // cuando no esta autenticado
    //     if ($exception instanceof AuthenticationException) {
    //         return $this->errorResponse($exception->getMessage(), Response::HTTP_UNAUTHORIZED);
    //     }

    //     // si estamos modo debug, lo errores no manejados deben mostrarse para el programador
    //     if (config('app.debug')) {
    //         return parent::render($request, $exception);
    //     }

    //     // si estamos en modo de produccion, los errores no manejados tendran este mensaje de error
    //     return $this->errorResponse('Unexpected error. Try later.', Response::HTTP_INTERNAL_SERVER_ERROR);
    // }
}

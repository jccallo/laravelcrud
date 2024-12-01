<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\Response;

trait ApiResponser
{
   /**
    * Build error response
    * @param  string|object|array $message
    * @param  int $code
    * @return \Illuminate\Http\JsonResponse
    */
   public function errorResponse($message, $code = Response::HTTP_INTERNAL_SERVER_ERROR)
   {
      $response = [
         'error' => $message,
      ];

      return response()->json($response, $code);
   }
}

<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use App\Models\LogModel;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
     /**

     * Report or log an exception.

     *

     * @param  \Throwable  $exception

     * @return void

     *

     * @throws \Exception

     */

     public function report(Throwable $exception)

     {
 
         parent::report($exception);
 
     }
 
     /**
 
      * Render an exception into an HTTP response.
 
      *
 
      * @param  \Illuminate\Http\Request  $request
 
      * @param  \Throwable  $exception
 
      * @return \Symfony\Component\HttpFoundation\Response
 
      *
 
      * @throws \Throwable
 
      */
 
     public function render($request, Throwable $exception)
 
     {
        //dd($exception);
        if($exception->getCode() == 0){
            return redirect('/error-page');
        }
         // $code = $exception->getStatusCode();
         // if($code == 404){
         //     return redirect('/');
         // }else{
            // $code = new LogModel;
            // $code->message = $exception->getMessage();
            // $code->url = $_SERVER['REQUEST_URI'];
            // $code->method = $_SERVER['REQUEST_METHOD'];
            // $code->paramiter = json_encode($request->all());
            // $code->statusCode = $exception->getStatusCode();
            // $code->save();
            //dd($exception);
 
         // }
         // return back();
         return parent::render($request, $exception);
     }
}

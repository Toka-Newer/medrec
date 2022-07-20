<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\App;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
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
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    // if you don't send the authentication code (replace of exception)
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return response()->json([
            'status' => false,
            'errCode' => 200,
            'msg' => 'user not authenticated',
        ]);
    }

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $e)
    {
        if ($this->shouldReport($e)) {
            $airbrakeNotifier = \App::make('Airbrake\Notifier');
            $airbrakeNotifier->notify($e);
        }

        parent::report($e);
    }
}

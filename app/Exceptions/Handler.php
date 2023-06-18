<?php

namespace App\Exceptions;
use Illuminate\Database\QueryException;
use symfony\Component\Routing\Exception\RouteNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use PDOException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];


    public function render($request, Throwable $exception)
    {
        if ($exception instanceof QueryException || $exception instanceof PDOException) {
            return redirect()->route('error');
        }

        if ($exception instanceof RouteNotFoundException) {
            return redirect('/');
        }

        if ($exception instanceof PDOException && $exception->getMessage() === "SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it") {
            dd($exception);
            return redirect()->route('error');
        }

        return parent::render($request, $exception);
    }




    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
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
}

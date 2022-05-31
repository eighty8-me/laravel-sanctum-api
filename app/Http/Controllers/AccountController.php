<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

final class AccountController extends Controller
{
    public function __construct()
    {

    }

    public function __invoke(Request $request)
    {
        return new JsonResponse([
            'message' => 'Account controller accessed!',
        ]);
    }
}

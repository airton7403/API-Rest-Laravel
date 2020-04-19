<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    private $user;
    private $product;

    public function __construct(User $user, Product $product)
    {
        $this->user = $user;
        $this->product = $product;
    }

    public function index()
    {
        $user = $this->user->with(['profile'])->paginate(10);

        return response()->json($user, 200);
    }
}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponser;


Class UserController extends Controller {
    use ApiResponser;

    private $request;


    public function __construct(Request $request){
        $this->request = $request;
    }


    public function index(){
        $users = User::all();

        return $this->successResponse($users);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\UserRequest;

// libreria para SQL crudo
// use DB || use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index (): View {
        // codigo para consultas SQL en crudo
        // $users = DB::select( DB::raw("SELECT * FROM users") );
        
        // usamos el metodo all del modelo user.php para obtner todos los usarios
        $users = User::all();
        return view('user.index',compact('users'));
    }

    //metodo para la ceracion de un usuario mediante un formulario
    public function create (): View {
        return view('user.create');
    }

    public function store (UserRequest $request): RedirectResponse {
        User::create($request->all());

        return redirect()->route('user.index')->with('success', 'User Created');
    }

    public function edit (User $user): View {
        return view("user.edit", compact('user'));
    }

    public function update (UserRequest $request, User $user): RedirectResponse {

        // actualizando datos de usuario
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->address = $request->address;
        $user->zip_code = $request->zip_code;
        $user->save();

        return redirect()->route('user.index')->with('success', 'User Update');
    }

    public function show (User $user): View {
        return view("user.show", compact('user'));
    }

    public function delete (User $user): RedirectResponse {
        $user->delete();

        return redirect()->route('user.index')->with('danger', 'User Delete');
    }

    // funcion para crear usuarios de prueba
    public function auto (): RedirectResponse {
        User::create([
            "name" => "Juan",
            "email" => "juan@email.com",
            "password" => Hash::make("123456"),
            "age" => "27",
            "address" => "calle juan 45",
            "zip_code" => "212345454"
        ]);

        User::create([
            "name" => "Luis",
            "email" => "luis@email.com",
            "password" => Hash::make("123456"),
            "age" => "24",
            "address" => "avenida luis 13",
            "zip_code" => "212345454"
        ]);

        User::create([
            "name" => "Cesar",
            "email" => "cesar@email.com",
            "password" => Hash::make("123456"),
            "age" => "22",
            "address" => "barrio cesar 22",
            "zip_code" => "212345454"
        ]);

        return redirect()->route("user.index");
    }
}

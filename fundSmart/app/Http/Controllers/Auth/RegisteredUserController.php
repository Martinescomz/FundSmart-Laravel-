<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }
 
    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'cpf' => ['required', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'cpf' => $request->cpf,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //When a new user is created the DB create 4 categories for the user
        //income(rendimento/receita) = 0
        //expense(despesa) = 1
        $categoryDefault= [
            ['name' => 'mercado', 'type' => 1],
            ['name' => 'investimento', 'type' => 1],
            ['name' => 'salário', 'type' => '0'],
            ['name' => 'casa', 'type' => '1']
        ];


        foreach($categoryDefault as $category){
            $user->category()->create([
                'name' => $category['name'],
                'type' => $category['type']
            ]);
        }

        

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('menu', absolute: false));
    }
}

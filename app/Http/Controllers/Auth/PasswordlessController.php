<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\Passwordless;
use App\Notifications\YourAccountIsActive;
use App\Providers\RouteServiceProvider;
use App\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

/**
 * [Description PasswordlessController]
 * Password less Controller
 * This controller is responsible for handling login by magic link (passwordless).
 * This controoler will send email with link , if the user click on link ,then login direct.
 *
 */
class PasswordlessController extends Controller
{

    /**
     * Where to redirect users click on link (magic link).
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            LoginController::username => "required|exists:users," . LoginController::username . "|max:255"
        ];
    }



    /**
     * @param Request $request
     *
     * @return [type]
     */
    public function sendLink(Request $request)
    {
        /**
         * validation data
         * if have error ,then go back with error
         * else will go to new page url
         *
         */

        $request->validate($this->rules());

        $user =    User::where(LoginController::username,  $request->{LoginController::username})->first();

        $this->sendLinkToEmail(
            $this->keyGeneration(
                $user->id,
                3600
            ),
            $user
        );




        return view("auth.passwordlessSuccess")->with("username", $request->{LoginController::username});
    }



    /**
     * @param Request $request
     *
     * @return [type]
     */
    public function sendLinkForm(Request $request)
    {




        return view("auth.passwordless");
    }

    /**
     *
     * Send link (magic link ) to user email .
     *
     *
     * @param String $key
     * @param User $user
     *
     * @return void
     */
    public function sendLinkToEmail(String $key, User $user)
    {

        $user->notify(new Passwordless($key));
    }




    /**
     * login by
     * @param Request $request
     * @param mixed $id
     *
     * @return void
     */
    public function active(Request $request, $id)
    {

        Auth::loginUsingId($id);

        Auth::user()->notify(new YourAccountIsActive());
        Auth::user()->markEmailAsVerified();
        return Response()->redirectTo($this->redirectTo);
    }

    /**
     *
     * @param int $userid userid
     * @param int $expire time expire in Seconds
     *
     * @return string
     */
    protected function UrlGeneration($userid, $expire = 3600)
    {
        return URL::temporarySignedRoute(
            'magiclink',
            now()->addSeconds($expire),
            [
                'id' => $userid
            ]
        );
    }
}

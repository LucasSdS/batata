<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('contato');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
            if(isset($_POST['g-recaptcha-response'])&&($_POST['g-recaptcha-response'])){
                $secret = "6LfHFgsTAAAAAO2R4uC5JNrhhleZLQJ_LCFt0aSK";
                $captcha = $_POST['g-recaptcha-response'];
                $ip = $_SERVER['REMOTE_ADDR'];
                $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
                $arr = json_decode($rsp, TRUE);
                if ($arr['success']){
                    $message = $request->Nome." - ".$request->Email;
                    echo "<script>alert('Seu formulário foi enviado com sucesso.')</script>";
                    return view('contato');
                } else {
                    echo 'SPAM';
                };
            } else {
                echo 'SPAM';
            };
            $string = $request -> Nome."-".$request ->Email;
            return $string;
//        $string = $request -> Nome. " - ".$request ->Email. " - ".$request -> Telefone. " - ".$request -> Mensagem;
//        return $string;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

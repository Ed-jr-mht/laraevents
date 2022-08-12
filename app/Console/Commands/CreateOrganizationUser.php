<?php

namespace App\Console\Commands;
use App\Models\User;
use Illuminate\Console\Command;

class CreateOrganizationUser extends Command
{

    protected $signature = 'create:organization-user {name} {email} {cpf} {password}';


    protected $description = 'Cria um novo usuario do tipo organização';


    public function __construct(){
        parent:: __construct();
    }


    public function handle()
    {
        $name =$this->argument('name');
        $email =$this->argument('email');
        $cpf =$this->argument('cpf');
        $password =$this->argument('password');

        User::create([
            'name'=>$name,
            'email'=>$email,
            'cpf'=>$cpf,
            'password'=>$password,
            'role'=>'organization'
        ]);

        $this->info('Usuario cadastrado com Success!!!!');

      /*
        $this->info($name);
        $this->info($email);
        $this->info($cpf);
        $this->info($password);
      */
    }
}

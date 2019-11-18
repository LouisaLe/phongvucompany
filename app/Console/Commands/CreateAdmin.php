<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Admins;
use League\Flysystem\Exception;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $email = Admins::where('email', '=', $this->argument('email'))->get();
        if($email->count()){
            echo "Account already exit \r";
        }else{
            try{
                $newAdmin = new Admins();
                $newAdmin->email = $this->argument('email');
                $newAdmin->user_name = $this->argument('email');
                $newAdmin->password = Hash::make($this->argument('password'));
                $newAdmin->status = 1;
                $newAdmin->roles = Admins::SUPER_ADMIN;
                $newAdmin->save();
                echo "Account created successfully! \r";
            }catch (Exception $e){
                echo  $e->getMessage()."\r";
            }

        }

    }
}

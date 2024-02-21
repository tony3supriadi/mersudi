<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class OldbUserdata extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oldb:userdata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get userdata from old database and import it into users table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = DB::connection('mysql_oldb')
            ->table('anggota')
            ->whereNotNull('agt_email')
            ->groupBy('agt_id', 'agt_email')
            ->get();

        foreach ($users as $user) {
            DB::table('users')->insert([
                'email' => $user->agt_email,
                'name' => $user->agt_nama,
                'password' => bcrypt('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

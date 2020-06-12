<?php

use App\User;
use Illuminate\Database\Migrations\Migration;

class AddUser extends Migration
{
    private $name = 'reinis';
    private $email = 'reinis@venta.lv';
    private $password = 'guest';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = new User();

        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->email_verified_at = now();

        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $user = User::where('email', $this->email)->first();
        $user->delete();
    }
}

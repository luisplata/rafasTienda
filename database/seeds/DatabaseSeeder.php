<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsuarioInicial::class);
        $this->call(Categorias::class);
        factory(App\Producto::class, 200)->create()->each(function ($u) {
            $u->save();
        });
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name'=>'Administrador']);
        $permissons = [
            //users
            // [
            //     'name'=>'Ver usuarios',
            //     'guard_name'=>'web',
            // ],
            [
                'id'=>1,
                'name' => 'Listar usuarios',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>2,
                'name' => 'Crear usuarios',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>3,
                'name' => 'Editar usuarios',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>4,
                'name' => 'Eliminar usuarios',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],

            // services
            [
                'id'=>5,
                'name' => 'Listar servicios',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>6,
                'name' => 'Crear servicios',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>7,
                'name' => 'Editar servicios',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>8,
                'name' => 'Eliminar servicios',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>9,
                'name' => 'Ver servicios',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],

            // roles
            [
                'id'=>10,
                'name' => 'Listar roles',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>11,
                'name' => 'Crear roles',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>12,
                'name' => 'Editar roles',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>13,
                'name' => 'Eliminar roles',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],

            // employee
            [
                'id'=>14,
                'name' => 'Listar empleados',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>15,
                'name' => 'Crear empleados',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>16,
                'name' => 'Editar empleados',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ],
            [
                'id'=>17,
                'name' => 'Eliminar empleados',
                'guard_name' => 'web',
                'created_at' => Carbon::now()
            ]

        ];
        Permission::insert($permissons);

        $user = User::create(
            [
                'name' => 'Cambiar por el nombre de la doctora',
                'email' => 'correoDeLaDoctora@gmail.com',
                'password' => Hash::make('root'),
            ],
        );

        $admin = User::create(
            [
                'name' => 'Administrador',
                'email' => 'administrador@clinica.com',
                'password' => Hash::make('root'),
            ]
        );

        for($i = 0 ;  $i < count($permissons) ; $i++)
        {
           
            $role->syncPermissions($permissons[$i]['id']);
            $admin->givePermissionTo($permissons[$i]['id']);
            
        }


     

    }
}

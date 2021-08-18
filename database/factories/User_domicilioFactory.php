<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\User_domicilio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class User_domicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User_domicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //decidi formar asi la dirección para poder manipularla a mi criterio y no fuera 
        //solamente un texto sin sentido
        
        $calle = $this->faker->sentence();
        $num_ext = random_int(100,500);
        $cp = random_int(10000,50000);

        $ciudad = $this->faker->randomElement(['Ciudad de Mexico','Monterrey','Guadalajara','Xalapa','Tampico','Queretaro']);
        $colonia = $this->faker->randomElement(['Loma Bonita','Agua Santa','San Angel','Rastro','Altamirano','18 de Marzo','Ruiz Cortinez']);

        return [
            'user_id' => User::all()->random()->id,
            'domicilio' => $calle.' #'.$num_ext.', '.$colonia.', '.$ciudad.','.$cp,
            'numero_exterior' => $num_ext,
            'colonia' => $colonia,
            'cp' => $cp,
            'ciudad' => $ciudad
        ];
    }
}

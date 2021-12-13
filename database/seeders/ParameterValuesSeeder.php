<?php

namespace Database\Seeders;

use App\Models\Parametros;
use App\Models\Value_parameter;
use Illuminate\Database\Seeder;

class ParameterValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $parameterValue = new Value_parameter();
        $parameterValue->idParameter = 1;
        $parameterValue->name = "Admin_Global";
        $parameterValue->save();

        $parameterValue = new Value_parameter();
        $parameterValue->idParameter = 1;
        $parameterValue->name = "Sub_Administrador";
        $parameterValue->save();

        $parameterValue = new Value_parameter();
        $parameterValue->idParameter = 1;
        $parameterValue->name = "tienda";
        $parameterValue->save();

        $parameterValue = new Value_parameter();
        $parameterValue->idParameter = 1;
        $parameterValue->name = "cliente";
        $parameterValue->save();

        $parameterValue = new Value_parameter();
        $parameterValue->idParameter = 1;
        $parameterValue->name = "Soporte ";
        $parameterValue->save();

        //moneda
        $parameterValue = new Value_parameter();
        $parameterValue->idParameter = 2;
        $parameterValue->name = "COP";
        $parameterValue->save();

        $parameterValue = new Value_parameter();
        $parameterValue->idParameter = 2;
        $parameterValue->name = "USD";
        $parameterValue->save();


        $parameterValue = new Value_parameter();
        $parameterValue->idParameter = 2;
        $parameterValue->name = "ARS";
        $parameterValue->save();

    }
}

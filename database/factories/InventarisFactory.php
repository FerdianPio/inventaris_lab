<?php

namespace Database\Factories;

use App\Models\Inventaris;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventarisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventaris::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $kategori = DB::table('kategori')->pluck('id_kat')->toArray();
        $ruang = DB::table('ruang')->pluck('id_ruang')->toArray();

        return [
            "kodeInventaris"=>$this->faker->regexify('[A-Z]{3}[0-9]{9}'),
            "namaInventaris"=>$this->faker->sentence(4),
            "id_kat"=>$this->faker->randomElement($kategori),
            "id_ruang"=>$this->faker->randomElement($ruang),
            "jumlah"=>$this->faker->numerify(),
            "status"=>$this->faker->randomElement(["baik","perlu perbaikan","rusak"]),
        ];
    }
}

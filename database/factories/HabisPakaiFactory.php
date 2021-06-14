<?php

namespace Database\Factories;
use Illuminate\Support\Facades\DB;
use App\Models\HabisPakai;
use Illuminate\Database\Eloquent\Factories\Factory;

class HabisPakaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HabisPakai::class;

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
            "kodeBarang"=>$this->faker->regexify('[A-Z]{3}[0-9]{9}'),
            "namaBarang"=>$this->faker->sentence(4),
            "id_kat"=>$this->faker->randomElement($kategori),
            "id_ruang"=>$this->faker->randomElement($ruang),
            "jumlah"=>$this->faker->numerify(),
        ];
    }
}

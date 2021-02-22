<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->name,
            'nama_panggilan' => $this->faker->userName,
            'jenis_kelamin' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            'ttl' => $this->faker->address,
            'kewarganegaraan' => $this->faker->country,
            'gelombang' => $this->faker->randomElement(['gelombang 1', 'gelombang 2', 'gelombang 3']),
            'abk' => $this->faker->randomElement(['ya', 'tidak']),
            'alamat' => $this->faker->address,
            'nama_ayah' => $this->faker->name,
            'nama_ibu' => $this->faker->name,
            'daerah' => $this->faker->address,
            'no_hp_ayah' => $this->faker->phoneNumber,
            'no_hp_ibu' => $this->faker->phoneNumber,
            'tlp' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'info_dari' => $this->faker->randomElement([
                'Direkomendasikan Saudara/kerabat/tetangga',
                'Media sosial (WA/Youtube/telegram/IG, dll)',
                'Media cetak (Nuansa)',
            ]),
        ];
    }
}

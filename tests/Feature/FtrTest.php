<?php

namespace Tests\Feature;

use App\Models\DataSekolah;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FtrTest extends TestCase
{
    protected $loggeduser;
    protected $namasiswa;
    protected $newnamasiswa;

    public function setUp(): void
    {
        parent::setUp();

        $this->loggeduser = User::first();
    }

    public function test_index_namasiswa_with_admin(): void
    {
        $response = $this->actingAs($this->loggeduser)->get('/datasekolah');
        $response->assertStatus(200);
    }

    public function test_index_datasiswa_with_admin(): void
    {
        $response = $this->actingAs($this->loggeduser)->get('/datasekolah/datasiswa');
        $response->assertStatus(200);
    }

    public function test_create_with_admin(): void
    {
        $response = $this->actingAs($this->loggeduser)->get('/datasekolah/datasiswa/create');
        $response->assertStatus(200);
    }

    public function test_store_with_admin(): void
    {
        $siswa = [
            "NomorInduk" => "10424659421",
            "NamaSiswa" => "test",
            "TingkatSiswa" => "3",
            "JurusanSiswa" => "Permesinan",
            "NoTlp" => "08153839082409"
        ];

        $response = $this->actingAs($this->loggeduser)->post('/datasekolah/datasiswa', $siswa);
        $response->assertStatus(302);
        $this->assertDatabaseHas('datasekolah', ['NomorInduk' => "10424659421"]);
    }

    public function test_edit_with_admin(): void
    {
        $dataSekolah = DataSekolah::first();

        $response = $this->actingAs($this->loggeduser)->get('/datasekolah/datasiswa/' . $dataSekolah->id . '/edit');
        $response->assertStatus(200);
    }

    public function test_update_with_admin(): void
    {
        $dataSekolah = DataSekolah::first();
        $updatedData = [
            "NomorInduk" => "10424659421",
            "NamaSiswa" => "updated_test",
            "TingkatSiswa" => "4",
            "JurusanSiswa" => "Elektro",
            "NoTlp" => "08153839082409"
        ];

        $response = $this->actingAs($this->loggeduser)->put('/datasekolah/datasiswa/' . $dataSekolah->id, $updatedData);
        $response->assertStatus(302);
        $this->assertDatabaseHas('datasekolah', ['NomorInduk' => "10424659421", 'NamaSiswa' => 'updated_test']);
    }

    public function test_delete_with_admin(): void
    {
        $dataSekolah = DataSekolah::first();

        $response = $this->actingAs($this->loggeduser)->delete('/datasekolah/datasiswa/' . $dataSekolah->id);
        $response->assertStatus(302);
        $this->assertDatabaseMissing('datasekolah', ['id' => $dataSekolah->id]);
    }
}

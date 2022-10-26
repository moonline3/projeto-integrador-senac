<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_should_show_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200)
         ->assertSeeText('Login');
    }


    public function test_shouldn´t_login_when_invalid_data()
    {
      $response = $this->post('/login');

      $response->assertRedirect()->assertInvalid(['email', 'password']);
    }

    // use RefreshDatabase;
    // protected function setUp(): void
    // {
    //   parent::setUp();
    //
    //   $this->post('/register', [
    //     'name' => 'Xayan',
    //     'email' => 'duplarocket@gmail.com',
    //     'password' => 'segredo',
    //     'password_confirmation' => 'segredo',
    //     'address' => 'cidades',
    //     // 'company_name' => 'Empresa',
    //     // 'trading_name' => 'Nome Fantasia',
    //     'phone' => '(42)6804256',
    //     'cnpj' => '25175099755362'.
    //   ]);
    //
    //   \Auth::logout();
    // }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_should_show_register()
    {
        $response = $this->get('/register');

        $response->assertStatus(200)
             ->assertSeeText('Register');
    }


    public function test_shouldn´t_register_user_when_invalid_data()
    {
      $responde = $this->post('register');

      $responde->assertRedirect()
       ->assertInvalid(['name', 'email', 'password']);
    }
    public function test_should_register_user_when_valid_data()
    {
      $responde = $this->post('/register'), [
        'name' => 'george',
        'email' => 'george@george',
        'password' => 'qwertyuiop',
        'password_confirmation' => 'qwertyuiop',
        'address' => 'Rua Rua',
        'phone' => '9995143',
        'cnpj' => '2148539063',
      ]);
      $response->assertRedirect()
         ->assertSessionHasNoErrors();

         $this->assertDatasbaseHas('users', ['email' => 'Rico&Louco@gmail.com']);

         $$this->assertDatabaseHas('establishments', ['cnpj' => '2148539063']).
    }
}

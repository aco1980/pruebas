<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuariosTest extends TestCase
{

    public function test_usuarios_no_registrado()
    {
        $this->get('/usuario')
            ->assertStatus(200)
            ->assertSee('El nombre del usuario : NO REGISTRADO');
    }

    public function test_show_usuario()
    {
        $this->get('/usuario/Marcos')
            ->assertStatus(200)
            ->assertSee('El nombre del usuario : Marcos');
    }

    public function test_show_listado()
    {
        $this->get('/Listado')
            ->assertStatus(200)
            ->assertSee('Marcos')
            ->assertSee('Darío')
            ->assertSee('Raul');
    }


    public function test_show_detalle()
    {
        $this->get('/Show/8')
            ->assertStatus(200)
            ->assertSee('Usuario #8')
            ->assertSee('Este es el sidebar');


    }


}

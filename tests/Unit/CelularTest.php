<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Celular;

class CelularTest extends TestCase
{
    /**
     * Testar criação de um celular
     *
     * @return void
     */
    public function test_example()
    {
        // Criação de um celular
        $celular = new Celular();
        $celular->name = 'Celular Teste';
        $celular->price = 1000.00;
        $celular->description = 'Descrição do celular de teste';

        // Verificação dos atributos
        $this->assertEquals('Celular Teste', $celular->name);
        $this->assertEquals(1000.00, $celular->price);
        $this->assertEquals('Descrição do celular de teste', $celular->description);
    }

    
}

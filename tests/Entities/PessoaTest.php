<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Click4Web\DeclaracaoConteudo\Entities\Pessoa;

final class PessoaTest extends TestCase
{
    public function testDefinirERecuperarNome()
    {
        $pessoa = new Pessoa();

        $this->assertInstanceOf(
            Pessoa::class,
            $pessoa->setNome('Click 4 Web')
        );
        $this->assertEquals(
            'Click 4 Web',
            $pessoa->getNome()
        );
    }

    public function testDefinirERecuperarDoc()
    {
        $pessoa = new Pessoa();

        $this->assertInstanceOf(
            Pessoa::class,
            $pessoa->setDoc('12.398.650/0001-16')
        );
        $this->assertEquals(
            '12.398.650/0001-16',
            $pessoa->getDoc()
        );
    }

    public function testDefinirERecuperarEndereco()
    {
        $pessoa = new Pessoa();

        $this->assertInstanceOf(
            Pessoa::class,
            $pessoa->setEndereco('Rua Mandaguari, 400 - Vila Curuça')
        );
        $this->assertEquals(
            'Rua Mandaguari, 400 - Vila Curuça',
            $pessoa->getEndereco()
        );
    }

    public function testDefinirERecuperarCidade()
    {
        $pessoa = new Pessoa();

        $this->assertInstanceOf(
            Pessoa::class,
            $pessoa->setCidade('Santo André')
        );
        $this->assertEquals(
            'Santo André',
            $pessoa->getCidade()
        );
    }

    public function testDefinirERecuperarEstado()
    {
        $pessoa = new Pessoa();

        $this->assertInstanceOf(
            Pessoa::class,
            $pessoa->setEstado('SP')
        );
        $this->assertEquals(
            'SP',
            $pessoa->getEstado()
        );
    }

    public function testDefinirERecuperarCep()
    {
        $pessoa = new Pessoa();

        $this->assertInstanceOf(
            Pessoa::class,
            $pessoa->setCep('09290-660')
        );
        $this->assertEquals(
            '09290-660',
            $pessoa->getCep()
        );
    }

    public function testDefinirAtributosPorArray()
    {
        $pessoa = new Pessoa([
            'nome' => 'Click 4 Web',
            'doc' => '12.398.650/0001-16',
            'endereco' => 'Rua Mandaguari, 400 - Vila Curuça',
            'cidade' => 'Santo André',
            'estado' => 'SP',
            'cep' => '09290-660',
        ]);

        $this->assertEquals('Click 4 Web', $pessoa->getNome());
        $this->assertEquals('12.398.650/0001-16', $pessoa->getDoc());
        $this->assertEquals('Rua Mandaguari, 400 - Vila Curuça', $pessoa->getEndereco());
        $this->assertEquals('Santo André', $pessoa->getCidade());
        $this->assertEquals('SP', $pessoa->getEstado());
        $this->assertEquals('09290-660', $pessoa->getCep());
    }
}

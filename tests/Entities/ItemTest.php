<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Click4Web\DeclaracaoConteudo\Entities\Item;

final class ItemTest extends TestCase
{
    public function testDefinirERecuperarDescricao()
    {
        $item = new Item();

        $this->assertInstanceOf(
            Item::class,
            $item->setDescricao('Livro - 8Ps do Marketing Digital')
        );
        $this->assertEquals(
            'Livro - 8Ps do Marketing Digital',
            $item->getDescricao()
        );
    }

    public function testDefinirERecuperarQuantidade()
    {
        $item = new Item();

        $this->assertInstanceOf(
            Item::class,
            $item->setQuantidade(1)
        );
        $this->assertEquals(
            1,
            $item->getQuantidade()
        );
    }

    public function testDefinirERecuperarPeso()
    {
        $item = new Item();

        $this->assertInstanceOf(
            Item::class,
            $item->setPeso(0.733)
        );
        $this->assertEquals(
            0.733,
            $item->getPeso()
        );
    }

    public function testDefinirAtributosPorArray()
    {
        $item = new Item([
            'descricao' => 'Livro - 8Ps do Marketing Digital',
            'quantidade' => 1,
            'peso' => 0.733,
        ]);

        $this->assertEquals('Livro - 8Ps do Marketing Digital', $item->getDescricao());
        $this->assertEquals(1, $item->getQuantidade());
        $this->assertEquals(0.733, $item->getPeso());
    }
}

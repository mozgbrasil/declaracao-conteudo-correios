<?php
namespace Click4Web\DeclaracaoConteudo\Core;

use Click4Web\DeclaracaoConteudo\Interfaces\ItemBagInterface;
use Click4Web\DeclaracaoConteudo\Interfaces\ItemInterface;

/**
 * Class ItemBag
 *
 * @package  Click4Web\DeclaracaoConteudo
 * @subpackage Core
 * @author   fontebasso <sfdsilva@fontesoft.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 */
class ItemBag implements ItemBagInterface
{
    private $itens = [];

    public function __construct(array $itens = [], $classItem = '\\Click4Web\\DeclaracaoConteudo\\Entities\\Item')
    {
        foreach ($itens as $item) {
            if ($item instanceof $classItem) {
                $this->itens[] = $item;
            } else {
                $this->itens[] = new $classItem($item);
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function getItens(): array
    {
        return $this->itens;
    }

    /**
     * @inheritDoc
     */
    public function add(ItemInterface $item): ItemBagInterface
    {
        $this->itens[] = $item;
        return $this;
    }
}

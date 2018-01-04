<?php
namespace Click4Web\DeclaracaoConteudo\Core;

/**
 * Class Entity
 *
 * @package  Click4Web\DeclaracaoConteudo
 * @subpackage Core
 * @author   fontebasso <sfdsilva@fontesoft.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 */
class Entity
{
    /**
     * Entity constructor.
     *
     * @param array $params Lista de atributos da Entidade
     */
    public function __construct($params = [])
    {
        foreach ($params as $param => $value) {
            if (property_exists($this, $param)) {
                $this->{$param} = $value;
            }
        }
    }
}

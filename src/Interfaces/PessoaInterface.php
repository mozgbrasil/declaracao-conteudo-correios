<?php
namespace Click4Web\DeclaracaoConteudo\Interfaces;

/**
 * Interface PessoaInterface
 *
 * @package Click4Web\DeclaracaoConteudo
 * @subpackage Interfaces
 * @author   fontebasso <sfdsilva@fontesoft.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 */
interface PessoaInterface
{
    /**
     * Recupera o nome da pessoa
     *
     * @return string
     */
    public function getNome(): string;

    /**
     * Recupera o número do documento (CPF/CNPJ)
     *
     * @return string
     */
    public function getDoc(): string;

    /**
     * Recupera o endereço (Rua, número, bairro e complemento)
     *
     * @return string
     */
    public function getEndereco(): string;

    /**
     * Recupera a cidade
     *
     * @return string
     */
    public function getCidade(): string;

    /**
     * Recupera o estado
     *
     * @return string
     */
    public function getEstado(): string;

    /**
     * Recupera o CEP da pessoa
     *
     * @return string
     */
    public function getCep(): string;
}

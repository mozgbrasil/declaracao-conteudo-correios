<?php
namespace Click4Web\DeclaracaoConteudo\Entities;

use Click4Web\DeclaracaoConteudo\Core\Entity;
use Click4Web\DeclaracaoConteudo\Interfaces\PessoaInterface;

/**
 * Class Pessoa
 *
 * @package Click4Web\DeclaracaoConteudo
 * @subpackage Entities
 * @author   fontebasso <sfdsilva@fontesoft.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 */
class Pessoa extends Entity implements PessoaInterface
{
    /**
     * @var string $nome Nome
     */
    protected $nome;

    /**
     * @var string CPF/CNPJ
     */
    protected $doc;

    /**
     * @var string $endereco Endereço (Logradouro, número, bairro e complemento(
     */
    protected $endereco;
    protected $cidade;
    protected $estado;
    protected $cep;

    /**
     * Define o nome da pessoa
     *
     * @param  string $nome Nome da pessoa
     * @return Pessoa
     */
    public function setNome($nome): Pessoa
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Define o documento (CPF/CNPJ) da pessoa
     *
     * @param  string $doc CPF/CNPJ
     * @return Pessoa
     */
    public function setDoc($doc): Pessoa
    {
        $this->doc = $doc;
        return $this;
    }

    /**
     * Define o endereço da pessoa
     *
     * @param  string $endereco Endereço (Logradouro, Número, Bairro e Complemento)
     * @return Pessoa
     */
    public function setEndereco($endereco): Pessoa
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * Define a Cidade da pessoa
     *
     * @param  string $cidade Cidade
     * @return Pessoa
     */
    public function setCidade($cidade): Pessoa
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * Define o Estado da pessoa
     *
     * @param  string $estado Estado
     * @return Pessoa
     */
    public function setEstado($estado): Pessoa
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * Define o CEP da pessoa
     *
     * @param  string $cep CEP
     * @return Pessoa
     */
    public function setCep($cep): Pessoa
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @inheritDoc
     */
    public function getDoc(): string
    {
        return $this->doc;
    }

    /**
     * @inheritDoc
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**
     * @inheritDoc
     */
    public function getCep(): string
    {
        return $this->cep;
    }

    /**
     * @inheritDoc
     */
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * @inheritDoc
     */
    public function getEstado(): string
    {
        return $this->estado;
    }
}

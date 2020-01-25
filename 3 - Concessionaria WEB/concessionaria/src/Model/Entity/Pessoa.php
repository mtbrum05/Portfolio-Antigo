<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $codigo
 * @property string $bairro
 * @property string $celular
 * @property string $cep
 * @property string|null $complemento
 * @property string $cpf
 * @property string $email
 * @property string $nome
 * @property int $numero
 * @property string $rg
 * @property string $rua
 * @property string|null $telefone
 * @property int $cidade_codigo
 */
class Pessoa extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'bairro' => true,
        'celular' => true,
        'cep' => true,
        'complemento' => true,
        'cpf' => true,
        'email' => true,
        'nome' => true,
        'numero' => true,
        'rg' => true,
        'rua' => true,
        'telefone' => true,
        'cidade_codigo' => true,
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Servico Entity
 *
 * @property int $codigo
 * @property string $ativo
 * @property string $descricao
 * @property int $cupomVenda_codigo
 * @property int $funcionario_codigo
 * @property int $item_codigo
 */
class Servico extends Entity
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
        'ativo' => true,
        'descricao' => true,
        'cupomVenda_codigo' => true,
        'funcionario_codigo' => true,
        'item_codigo' => true,
    ];
}

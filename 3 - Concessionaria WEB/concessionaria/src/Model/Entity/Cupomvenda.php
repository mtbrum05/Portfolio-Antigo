<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cupomvenda Entity
 *
 * @property int $codigo
 * @property string $descricao
 * @property int $cliente_codigo
 */
class Cupomvenda extends Entity
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
        'descricao' => true,
        'cliente_codigo' => true,
    ];
}

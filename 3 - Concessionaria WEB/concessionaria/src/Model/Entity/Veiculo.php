<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Veiculo Entity
 *
 * @property int $codigo
 * @property string $chassi
 * @property string $placa
 * @property int $cliente_codigo
 * @property int $cor_codigo
 * @property int $modelo_codigo
 */
class Veiculo extends Entity
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
        'chassi' => true,
        'placa' => true,
        'cliente_codigo' => true,
        'cor_codigo' => true,
        'modelo_codigo' => true,
    ];
}

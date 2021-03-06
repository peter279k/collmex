<?php

namespace MarcusJaschen\Collmex\Type;

/**
 * Class AccountBalance
 *
 * @author  Marcus Jaschen <mjaschen@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license MIT License
 * @link    https://github.com/mjaschen/collmex
 *
 * @property $type_identifier
 * @property $account_id
 * @property $account_name
 * @property $balance
 */
class AccountBalance extends AbstractType implements TypeInterface
{
    /**
     * @var array
     */
    protected $template = [
        'type_identifier' => 'ACCBAL',
        'account_id'      => null,
        'account_name'    => null,
        'balance'         => null,
    ];

    /**
     * Formally validates the type data in $data attribute.
     *
     * @return bool Validation success
     */
    public function validate()
    {
        return true;
    }
}

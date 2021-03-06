<?php
/**
 * Collmex Delivery Get Type
 *
 * @author  Marcus Jaschen <mjaschen@gmail.com>
 * @author  René Galle <renegalle.webdevelopment@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license MIT License
 * @link    https://github.com/mjaschen/collmex
 */

namespace MarcusJaschen\Collmex\Type;

/**
 * Collmex Delivery Get Type
 *
 * @author  Marcus Jaschen <mjaschen@gmail.com>
 * @author  René Galle <renegalle.webdevelopment@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license MIT License
 * @link    https://github.com/mjaschen/collmex
 *
 * @property $type_identifier
 * @property $delivery_id
 * @property $client_id
 * @property $customer_id
 * @property $delivery_date_from
 * @property $delivery_date_to
 * @property $issued_only
 * @property $returned_format
 * @property $changed_only
 * @property $system_name
 * @property $no_writing_paper
 * @property $order_id
 */
class DeliveryGet extends AbstractType implements TypeInterface
{
    /**
     * @var array
     */
    protected $template = [
        'type_identifier'    => 'DELIVERY_GET',
        'delivery_id'        => null,
        'client_id'          => null,
        'customer_id'        => null,
        'delivery_date_from' => null,
        'delivery_date_to'   => null,
        'issued_only'        => null,
        'returned_format'    => null,
        'changed_only'       => null,
        'system_name'        => null,
        'no_writing_paper'   => null,
        'order_id'           => null,
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

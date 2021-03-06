<?php
/**
 * Collmex Delivery Type
 *
 * @author  Marcus Jaschen <mjaschen@gmail.com>
 * @author  René Galle <renegalle.webdevelopment@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license MIT License
 * @link    https://github.com/mjaschen/collmex
 */

namespace MarcusJaschen\Collmex\Type;

/**
 * Collmex Delivery Type
 *
 * @author  Marcus Jaschen <mjaschen@gmail.com>
 * @author  René Galle <renegalle.webdevelopment@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license MIT License
 * @link    https://github.com/mjaschen/collmex
 *
 * @property $type_identifier
 * @property $delivery_id
 * @property $position
 * @property $kind_of_delivery
 * @property $client_id
 * @property $customer_id
 * @property $order_id
 * @property $customer_salutation
 * @property $customer_title
 * @property $customer_firstname
 * @property $customer_lastname
 * @property $customer_company
 * @property $customer_department
 * @property $customer_street
 * @property $customer_zip
 * @property $customer_city
 * @property $customer_country
 * @property $customer_tel
 * @property $customer_tel2
 * @property $customer_telefax
 * @property $customer_email
 * @property $customer_account_number
 * @property $customer_bank_routing_number
 * @property $customer_different_dipositor
 * @property $customer_IBAN
 * @property $customer_BIC
 * @property $customer_bank
 * @property $customer_business_tax_id
 * @property $customer_private_person
 * @property $order_id_at_customer
 * @property $delivery_date
 * @property $delivery_note
 * @property $closing_note
 * @property $internal_note
 * @property $deleted
 * @property $completed
 * @property $status
 * @property $lang
 * @property $issuer_id
 * @property $weight
 * @property $amount_to_be_collected
 * @property $currency
 * @property $tracking_code
 * @property $mode_of_shipment
 * @property $delivery_specifications
 * @property $delivery_additions
 * @property $delivery_address_salutation
 * @property $delivery_address_title
 * @property $delivery_address_firstname
 * @property $delivery_address_lastname
 * @property $delivery_address_company
 * @property $delivery_address_department
 * @property $delivery_address_street
 * @property $delivery_address_zip
 * @property $delivery_address_city
 * @property $delivery_address_country
 * @property $delivery_address_tel
 * @property $delivery_address_tel2
 * @property $delivery_address_telefax
 * @property $delivery_address_email
 * @property $position_type
 * @property $product_id
 * @property $product_description
 * @property $unit
 * @property $quantitiy
 * @property $customer_order_position
 * @property $ean
 */
class Delivery extends AbstractType implements TypeInterface
{
    /**
     * @var array
     */
    protected $template = [
        'type_identifier'              => 'CMXDLV', // 1
        'delivery_id'                  => null,
        'position'                     => null,
        'kind_of_delivery'             => null, // reserved
        'client_id'                    => null, // 5
        'customer_id'                  => null,
        'order_id'                     => null,
        'customer_salutation'          => null,
        'customer_title'               => null,
        'customer_firstname'           => null, // 10
        'customer_lastname'            => null,
        'customer_company'             => null,
        'customer_department'          => null,
        'customer_street'              => null,
        'customer_zip'                 => null, // 15
        'customer_city'                => null,
        'customer_country'             => null,
        'customer_tel'                 => null,
        'customer_tel2'                => null,
        'customer_telefax'             => null, // 20
        'customer_email'               => null,
        'customer_account_number'      => null,
        'customer_bank_routing_number' => null,
        'customer_different_dipositor' => null,
        'customer_IBAN'                => null, // 25
        'customer_BIC'                 => null,
        'customer_bank'                => null,
        'customer_business_tax_id'     => null,
        'customer_private_person'      => null,
        'order_id_at_customer'         => null, // 30
        'delivery_date'                => null,
        'delivery_note'                => null,
        'closing_note'                 => null,
        'internal_note'                => null,
        'deleted'                      => null, // 35
        'completed'                    => null,
        'status'                       => null,
        'lang'                         => null,
        'issuer_id'                    => null,
        'weight'                       => null, // 40
        'amount_to_be_collected'       => null,
        'currency'                     => null,
        'tracking_code'                => null,
        'mode_of_shipment'             => null,
        'delivery_specifications'      => null, // 45
        'delivery_additions'           => null,
        'delivery_address_salutation'  => null,
        'delivery_address_title'       => null,
        'delivery_address_firstname'   => null,
        'delivery_address_lastname'    => null, // 50
        'delivery_address_company'     => null,
        'delivery_address_department'  => null,
        'delivery_address_street'      => null,
        'delivery_address_zip'         => null,
        'delivery_address_city'        => null, // 55
        'delivery_address_country'     => null,
        'delivery_address_tel'         => null,
        'delivery_address_tel2'        => null,
        'delivery_address_telefax'     => null,
        'delivery_address_email'       => null, // 60
        'position_type'                => null,
        'product_id'                   => null,
        'product_description'          => null,
        'unit'                         => null,
        'quantitiy'                    => null, // 65
        'customer_order_position'      => null,
        'ean'                          => null, // 67
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

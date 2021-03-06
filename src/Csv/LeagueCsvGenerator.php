<?php
/**
 * CSV Generator Class
 *
 * @author    Marcus Jaschen <mail@marcusjaschen.de>
 * @license   http://www.opensource.org/licenses/mit-license MIT License
 * @link      https://github.com/mjaschen/collmex
 */

namespace MarcusJaschen\Collmex\Csv;

use League\Csv\Writer;

/**
 * CSV Generator Class
 *
 * @author   Marcus Jaschen <mail@marcusjaschen.de>
 * @license  http://www.opensource.org/licenses/mit-license MIT License
 * @link     https://github.com/mjaschen/collmex
 */
class LeagueCsvGenerator implements GeneratorInterface
{
    /**
     * @var string
     */
    protected $delimiter;

    /**
     * @var string
     */
    protected $enclosure;

    /**
     * @param string $delimiter
     * @param string $enclosure
     */
    public function __construct($delimiter = ';', $enclosure = '"')
    {
        $this->delimiter = $delimiter;
        $this->enclosure = $enclosure;
    }

    /**
     * Generates a CSV string from given array data
     *
     * @param array $data
     *
     * @throws \RuntimeException
     *
     * @return string
     */
    public function generate(array $data)
    {
        $writer = Writer::createFromString('');
        $writer->setDelimiter($this->delimiter);
        $writer->setEnclosure($this->enclosure);

        if (! is_array($data[0])) {
            $data = [$data];
        }

        $writer->insertAll($data);

        return $writer->__toString();
    }
}

<?php
namespace Swiftriver\Core\ObjectModel;
class ConfigurationElement {
    /**
     * The name of this element
     * @var string
     */
    public $name;

    /**
     * The type of the property, only valid php
     * types are allowed.
     * @var string 'int'|'string'|'bool'|'float'
     */
    public $type;

    /**
     * The text description of the element
     * @var string
     */
    public $description;

    /**
     *
     * @param string $name The name of this element
     * @param string $type 'int'|'string'|'bool'|'float'
     * @param string $description The text description of the element
     * @param object $value
     */
    public function __construct($name, $type, $description, $value = null) {
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
    }
}
?>

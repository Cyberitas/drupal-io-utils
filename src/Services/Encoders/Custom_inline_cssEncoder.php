<?php
namespace Drupal\io_utils\Services\Encoders;

class Custom_inline_cssEncoder extends AbstractFieldEncoder implements FieldEncoderInterface
{
    /**
     * @inheritDoc
     */
    public function encodeItem($value)
    {
      return [
        'custom_inline_css' => $value->get('custom_inline_css')->getValue()
      ];
    }
}

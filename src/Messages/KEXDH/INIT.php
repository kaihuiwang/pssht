<?php

/*
* This file is part of pssht.
*
* (c) François Poirotte <clicky@erebot.net>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Clicky\Pssht\Messages\KEXDH;

use Clicky\Pssht\MessageInterface;
use Clicky\Pssht\Wire\Encoder;
use Clicky\Pssht\Wire\Decoder;

class INIT implements MessageInterface
{
    protected $e;

    public function __construct($e)
    {
        $this->e = $e;
    }

    public static function getMessageId()
    {
        return 30;
    }

    public function serialize(Encoder $encoder)
    {
        $encoder->encodeMpint($this->e);
    }

    public static function unserialize(Decoder $decoder)
    {
        return new static($decoder->decodeMpint());
    }

    public function getE()
    {
        return $this->e;
    }
}

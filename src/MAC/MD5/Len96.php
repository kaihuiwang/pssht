<?php

/*
* This file is part of pssht.
*
* (c) François Poirotte <clicky@erebot.net>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Clicky\Pssht\MAC\MD5;

use Clicky\Pssht\MAC\Base96;

class       Len96
extends     Base96
{
    static public function getBaseClass()
    {
        return '\\Clicky\\Pssht\\MAC\\MD5';
    }
}

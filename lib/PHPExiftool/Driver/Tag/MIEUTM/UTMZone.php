<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIEUTM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class UTMZone extends AbstractTag
{

    protected $Id = 'Zone';

    protected $Name = 'UTMZone';

    protected $FullName = 'MIE::UTM';

    protected $GroupName = 'MIE-UTM';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-UTM';

    protected $g2 = 'Location';

    protected $Type = 'int8s';

    protected $Writable = true;

    protected $Description = 'UTM Zone';

}

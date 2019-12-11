<?php

namespace TochkaBank\Responses;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Organizations.
 *
 * @method Organization[] getOrganizations()
 * @method bool isOrganizations()
 * @method $this setOrganizations(Organization[] $value)
 * @method $this unsetOrganizations()
 *
 * @property Organization[] $organizations
 */
class Organizations extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'organizations' => 'Organization[]'
    ];
}

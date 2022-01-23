<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2019 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Module;

use Illuminate\Support\Collection;

/**
 * Class HolocaustTimeline
 */
class HolocaustTimeline extends AbstractModule implements ModuleHistoricEventsInterface
{
    use ModuleHistoricEventsTrait;

    /**
     * How should this module be identified in the control panel, etc.?
     *
     * @return string
     */
    public function title(): string
    {
        return 'Holocaust Timeline';
    }

    /**
     * Should this module be enabled when it is first installed?
     *
     * @return bool
     */
    public function isEnabledByDefault(): bool
    {
        return false;
    }

    /**
     * All events provided by this module.
     *
     * @return Collection<string>
     */
    public function historicEventsAll(): Collection
    {
        return new Collection([
            "1 EVEN Germany Invades Belgium\n2 TYPE Occupation\n2 DATE @#DJULIAN@ 10 MAY 1940",
            "1 EVEN Germany Occupies Czechoslovakia\n2 TYPE Occupation\n2 DATE @#DJULIAN@ 15 MARCH 1939",
            "1 EVEN Russia Liberates Auschwitz\n2 TYPE Liberation\n2 DATE @#DJULIAN@ 27 JAN 1945",
            "1 EVEN Japan Bombs Pearl Harbor\n2 TYPE Attack\n2 DATE @#DJULIAN@ 7 DEC 1941",
            "1 EVEN D-Day, Allies Invade Normandy\n2 TYPE Attack\n2 DATE @#DJULIAN@ 6 JUN 1944",
            "1 EVEN Germany Occupies Hungary\n2 TYPE Occupation\n2 DATE @#DJULIAN@ 19 MARCH 1944",
            "1 EVEN Hitler Comes To Power\n2 TYPE Background\n2 DATE @#DJULIAN@ 01 JAN 1933",
            "1 EVEN Kristallnact\n2 TYPE Pogrom\n2 DATE FROM @#DJULIAN@ 09 NOV 1938 TO @#DJULIAN@ 10 NOV 1938\PLAC Germany\n2 NOTE Over 7,000 Jewish businesses were damaged or destroyed, and 30,000 Jewish men were arrested and incarcerated in concentration camps.",
            
        ]);
    }
}

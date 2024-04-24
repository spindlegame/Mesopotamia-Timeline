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

namespace Murwell\WebtreesModules\History\mesopotamia_timeline;

use Fisharebest\Localization\Translation;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsTrait;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsInterface;
use Illuminate\Support\Collection;

/** 
 * Historic Events: Mesopotamia Timeline
 */

return new class extends AbstractModule implements ModuleCustomInterface, ModuleHistoricEventsInterface {
    use ModuleCustomTrait;
    use ModuleHistoricEventsTrait;

    public const CUSTOM_TITLE = 'Mesopotamia Timeline';

    public const CUSTOM_AUTHOR = 'spindlegame';
    
    public const CUSTOM_WEBSITE = 'https://github.com/spindlegame/Mesopotamia-Timeline';
    
    public const CUSTOM_VERSION = '1.0.0';

/**
     * Constructor.  The constructor is called on *all* modules, even ones that are disabled.
     * This is a good place to load business logic ("services").  Type-hint the parameters and
     * they will be injected automatically.
     */
    
    public function __construct()
    {
        // NOTE:  If your module is dependent on any of the business logic ("services"),
        // then you would type-hint them in the constructor and let webtrees inject them
        // for you.  However, we can't use dependency injection on anonymous classes like
        // this one. For an example of this, see the example-server-configuration module.
    }

    /**
     * Bootstrap.  This function is called on *enabled* modules.
     * It is a good place to register routes and views.
     *
     * @return void
     */
    public function boot(): void
    {
    }
   /**
     * How should this module be identified in the control panel, etc.?
     *
     * @return string
     */
    public function title(): string
    {
        return self::CUSTOM_TITLE;
    }

 
    /**
     * The person or organisation who created this module.
     *
     * @return string
     */
    public function customModuleAuthorName(): string
    {
        return self::CUSTOM_AUTHOR;
    }

    /**
     * The version of this module.
     *
     * @return string
     */
    public function customModuleVersion(): string
    {
        return self::CUSTOM_VERSION;
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
"1 EVEN Pre-Pottery Neolithic A\n2 TYPE Pre-Pottery Neolithic A\n2 DATE FROM 10000 BC TO 8700 BC",
"1 EVEN Pre-Pottery Neolithic B\n2 TYPE Pre-Pottery Neolithic B\n2 DATE FROM 8700 BC TO 6800 BC",
"1 EVEN Jarmo\n2 TYPE Jarmo\n2 DATE FROM 7500 BC TO 5000 BC",
"1 EVEN Hassuna\n2 TYPE Hassuna\n2 DATE FROM  6000 BC TO ",
"1 EVEN Samarra\n2 TYPE Samarra\n2 DATE FROM  5700 BC TO 4900 BC",
"1 EVEN Halaf cultures\n2 TYPE Halaf cultures\n2 DATE FROM  6000 BC TO 5300 BC",
"1 EVEN Ubaid period\n2 TYPE Ubaid period\n2 DATE FROM  6500 BC TO 4000 BC",
"1 EVEN Ubaid 0 Early Ubaid or Oueili Style\n2 TYPE Ubaid period\n2 DATE FROM 6500 TO 5400 BC",
"1 EVEN Ubaid 1 Early Ubaid or Eridu Style\n2 TYPE Ubaid period\n2 DATE FROM 5400 TO 4700 BC",
"1 EVEN Ubaid 2 Hadji Muhammed Style\n2 TYPE Ubaid period\n2 DATE FROM 4800 TO 4500 BC",
"1 EVEN Ubaid 3 Middle Ubaid\n2 TYPE Ubaid period\n2 DATE FROM 5300 TO 4700 BC",
"1 EVEN Ubaid 4 Late Ubaid Style\n2 TYPE Ubaid period\n2 DATE FROM 4700 TO 4200 BC",
"1 EVEN Ubaid 5 Terminal Ubaid Style\n2 TYPE Ubaid period\n2 DATE FROM 4200 TO 3800 BC",
"1 EVEN Uruk period\n2 TYPE Uruk period\n2 DATE FROM  4000 BC TO 3100 BC",
"1 EVEN Early Uruk Period\n2 TYPE Uruk period\n2 DATE FROM 4000 TO 3800 BC",
"1 EVEN Middle Uruk Period\n2 TYPE Uruk period\n2 DATE FROM 3800 TO 3400 BC",
"1 EVEN Late Uruk Period\n2 TYPE Uruk period\n2 DATE FROM 3400 TO 3100 BC",
"1 EVEN Terminal Uruk or Final Uruk Period\n2 TYPE Uruk period\n2 DATE FROM 3100 TO 3000 BC",
"1 EVEN Jemdet Nasr period\n2 TYPE Jemdet Nasr period\n2 DATE FROM  3100 BC TO 2900 BC",
"1 EVEN Early Jemdet Nasr Period\n2 TYPE Jemdet Nasr period\n2 DATE FROM 3100 TO 3000 BC",
"1 EVEN Middle Jemdet Nasr Period\n2 TYPE Jemdet Nasr period\n2 DATE FROM 3000 TO 2950 BC",
"1 EVEN Late Jemdet Nasr Period\n2 TYPE Jemdet Nasr period\n2 DATE FROM 2950 TO 2900 BC",
"1 EVEN Early Dynastic period\n2 TYPE Early Dynastic period\n2 DATE FROM  2900 BC TO 2350 BC",
"1 EVEN ED I\n2 TYPE Early Dynastic period\n2 DATE FROM 2900 BC TO 2750/2700 BC",
"1 EVEN ED II\n2 TYPE Early Dynastic period\n2 DATE FROM 2750/2700 BC TO 2600 BC",
"1 EVEN ED IIIa\n2 TYPE Early Dynastic period\n2 DATE FROM 2600 BC TO 2500/2450 BC",
"1 EVEN ED IIIb\n2 TYPE Early Dynastic period\n2 DATE FROM 2500/2450 TO 2350 BC",
"1 EVEN Akkadian Empire\n2 TYPE Akkadian Empire\n2 DATE FROM  2350 BC TO 2100 BC",
"1 EVEN Late Akkadian\n2 TYPE Late Akkadian\n2 DATE FROM  2141 BC TO  2050 BC",
"1 EVEN Third Dynasty of Ur\n2 TYPE Third Dynasty of Ur\n2 DATE FROM 2112 BC TO 2004 BC",
"1 EVEN Isin-Larsa period\n2 TYPE Isin-Larsa period\n2 DATE FROM 1900  BC TO 1800  BC",
"1 EVEN Establishment of Isin\n2 TYPE Isin-Larsa period\n2 DATE FROM  2025 BC TO 1924 BC",
"1 EVEN Rise of Larsa\n2 TYPE Isin-Larsa period\n2 DATE FROM  1924 BC TO 1860 BC",
"1 EVEN Dominance of Larsa and Decline of Isin\n2 TYPE Isin-Larsa period\n2 DATE FROM  1860 BC TO 1763 BC",
"1 EVEN End of the Isin-Larsa Period and Transition to Babylonian Rule\n2 TYPE Isin-Larsa period\n2 DATE FROM  1763 BC TO ",
"1 EVEN First Babylonian dynasty\n2 TYPE First Babylonian dynasty\n2 DATE FROM 1800  BC TO 1700 BC",
"1 EVEN Minoan eruption\n2 TYPE Minoan eruption\n2 DATE FROM 1620 BC TO ",
"1 EVEN Old Assyrian period\n2 TYPE Old Assyrian period\n2 DATE FROM 1600  BC TO 1100 BC",
"1 EVEN Middle Assyrian period\n2 TYPE Middle Assyrian period\n2 DATE FROM 1365 BC TO 1076 BC",
"1 EVEN Kassites in Babylon,\n2 TYPE Kassites in Babylon,\n2 DATE FROM 1595 BC TO 1155 BC",
"1 EVEN Late Bronze Age collapse\n2 TYPE Late Bronze Age collapse\n2 DATE FROM 1200  BC TO 1100 BC",
"1 EVEN Syro-Hittite states\n2 TYPE Syro-Hittite states\n2 DATE FROM 1100  BC TO 700  BC",
"1 EVEN Neo-Assyrian Empire\n2 TYPE Neo-Assyrian Empire\n2 DATE FROM 1000  BC TO 700  BC",
"1 EVEN Neo-Babylonian Empire\n2 TYPE Neo-Babylonian Empire\n2 DATE FROM 700  BC TO 600 BC",
"1 EVEN Fall of Babylon\n2 TYPE Fall of Babylon\n2 DATE FROM 600 BC TO ",
"1 EVEN Achaemenid Babylonia, Achaemenid Assyria\n2 TYPE Achaemenid Babylonia, Achaemenid Assyria\n2 DATE FROM 600 BC TO 400  BC",
"1 EVEN Seleucid Mesopotamia\n2 TYPE Seleucid Mesopotamia\n2 DATE FROM 400  BC TO 300 BC",
"1 EVEN Parthian Babylonia\n2 TYPE Parthian Babylonia\n2 DATE FROM 300 BC TO 300 BC",
"1 EVEN Osroene\n2 TYPE Osroene\n2 DATE FROM 200 BC TO 300 BC",
"1 EVEN Adiabene\n2 TYPE Adiabene\n2 DATE FROM 100  BC TO 200 BC",
"1 EVEN Hatra\n2 TYPE Hatra\n2 DATE FROM 100  BC TO 200 BC",
"1 EVEN Roman Mesopotamia\n2 TYPE Roman Mesopotamia\n2 DATE FROM 200 AD TO 700 AD",
"1 EVEN Asōristān\n2 TYPE Asōristān\n2 DATE FROM 300 AD TO 700 AD",
"1 EVEN Muslim conquest\n2 TYPE Muslim conquest\n2 DATE FROM 650 AD TO ",
        ]);
     }
        
 };



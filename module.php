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

namespace Murwell\WebtreesModules\History\holocaust_timeline;

use Fisharebest\Localization\Translation;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsTrait;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsInterface;
use Illuminate\Support\Collection;

/** 
 * Historic Events: Holocaust Timeline
 */

return new class extends AbstractModule implements ModuleCustomInterface, ModuleHistoricEventsInterface {
    use ModuleCustomTrait;
    use ModuleHistoricEventsTrait;

    public const CUSTOM_TITLE = 'Holocaust Timeline';

    public const CUSTOM_AUTHOR = 'Murwell';
    
    public const CUSTOM_WEBSITE = 'https://github.com/murwell/Holocaust-Timeline/';
    
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
            "1 EVEN Germany Invades Belgium\n2 TYPE Occupation\n2 DATE 10 MAY 1940",
            "1 EVEN Germany Occupies Czechoslovakia\n2 TYPE Occupation\n2 DATE 15 MARCH 1939",
            "1 EVEN Russia Liberates Auschwitz\n2 TYPE Liberation\n2 DATE 27 JAN 1945",
            "1 EVEN Japan Bombs Pearl Harbor\n2 TYPE Attack\n2 DATE 07 DEC 1941",
            "1 EVEN D-Day, Allies Invade Normandy\n2 TYPE Attack\n2 DATE 06 JUN 1944",
            "1 EVEN Germany Occupies Hungary\n2 TYPE Occupation\n2 DATE 19 MARCH 1944",
            "1 EVEN Hitler Comes To Power\n2 TYPE Background\n2 DATE 01 JAN 1933",
            "1 EVEN Great Britain and France Declare War Against Germany\n2 TYPE Declaration Of War\n2 DATE 03 SEP 1939",
            "1 EVEN Germany Invades Poland\n2 TYPE Invasion\n2 DATE 01 SEP 1939",
            "1 EVEN Auschwitz Established\n2 TYPE Concentration Camp\n2 DATE 20 MAY 1940",
            "1 EVEN Krakow Ghetto Established\n2 TYPE Ghetto\n2 DATE 03 MARCH 1941",
            "1 EVEN Germany begin the deportation of Dutch Jews from camps in the Netherlands\n2 TYPE Deportation\n2 DATE 15 JULY 1942",
            "1 EVEN Krakow Ghetto Liquidated\n2 TYPE Ghetto\n2 DATE 13 MARCH 1943",
            "1 EVEN 400,000 Hungarian Jews Are Deported To Auschwitz\n2 TYPE Deportation\n2 DATE FROM 15 MAY 1944 TO 09 JULY 1944",



            
                      
        ]);
     }
        
 };


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
            "1 EVEN Germany Invades Belgium\n2 TYPE Invasion\n2 DATE 10 MAY 1940",
            "1 EVEN Germany Occupies Czechoslovakia\n2 TYPE Invasion\n2 DATE 15 MARCH 1939",
            "1 EVEN Russia Liberates Auschwitz\n2 TYPE Liberation\n2 DATE 27 JAN 1945",
            "1 EVEN Japan Bombs Pearl Harbor\n2 TYPE Attack\n2 DATE 07 DEC 1941",
            "1 EVEN D-Day, Allies Invade Normandy\n2 TYPE Attack\n2 DATE 06 JUN 1944",
            "1 EVEN Germany Occupies Hungary\n2 TYPE Invasion\n2 DATE 19 MARCH 1944",
            "1 EVEN Hitler Becomes German Chancellor\n2 TYPE Background\n2 DATE 30 JAN 1933",
            "1 EVEN Great Britain and France Declare War Against Germany\n2 TYPE Declaration Of War\n2 DATE 03 SEP 1939",
            "1 EVEN Beginning of WWII. Germany Invades Poland\n2 TYPE Invasion\n2 DATE 01 SEP 1939",
            "1 EVEN Auschwitz Established\n2 TYPE Concentration Camp\n2 DATE 20 MAY 1940",
            "1 EVEN Krakow Ghetto Established\n2 TYPE Ghetto\n2 DATE 03 MARCH 1941",
            "1 EVEN Germany begins the deportation of Dutch Jews from camps in the Netherlands\n2 TYPE Deportation\n2 DATE 15 JULY 1942",
            "1 EVEN Krakow Ghetto Liquidated\n2 TYPE Ghetto\n2 DATE 13 MARCH 1943",
            "1 EVEN 435,000 Hungarian Jews Are Deported To Auschwitz\n2 TYPE Deportation\n2 DATE FROM 15 MAY 1944 TO 09 JULY 1944",
            "1 EVEN German Parliament Passes Nuremberg Race Laws\n2 TYPE Background\n2 DATE 15 SEP 1935",
            "1 EVEN Kristallnacht\n2 TYPE Pogrom\n2 DATE FROM 09 NOV 1938 TO 10 NOV 1938\n2 NOTE Kristallnacht (Crystal Night) comes from the broken windows of Jewish-owned stores, buildings and synagogues that were smashed. 7,500 Jewish owned businesses are looted. 30,000 Jewish males. rounded up and taken to concentration camps. [Wikipedia](https://en.wikipedia.org/wiki/Kristallnacht)",
            "1 EVEN Germany begins deportation of Austrian and Czech Jews to Poland\n2 TYPE Deportation\n2 DATE 12 OCT 1939",
            "1 EVEN Germany Occupies Denmark and southern Norway\n2 TYPE Invasion\n2 DATE 09 APRIL 1940",
            "1 EVEN France Surrenders To Germany\n2 TYPE Surrender\n2 DATE 22 JUNE 1940",
            "1 EVEN Warsaw Ghetto Sealed\n2 TYPE Ghetto\n2 DATE 16 NOV 1940",
            "1 EVEN Archduke Franz Ferdinand, Heir To The Austrian Throne, Is Assasinated In Sarajevo, Bosnia\n2 TYPE Assasination\n2 DATE 18 JUNE 1914",
            "1 EVEN British Passenger Liner Lusitania Is Sunk By A German Sumbarine. Killing about 1200.\n2 TYPE Background\n2 DATE 18 JUNE 1914",
            "1 EVEN United States Declares War On Germany\n2 TYPE Background\n2 DATE 6 APR 1917",
            "1 EVEN United States Signs Armistice With Germany\n2 TYPE Background\n2 DATE 11 NOV 1918",







            




            
                      
        ]);
     }
        
 };



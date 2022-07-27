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
            "1 EVEN Germany Occupies Czechoslovakia\n2 TYPE Invasion\n2 DATE 15 MARCH 1939",
            "1 EVEN Russia Liberates Auschwitz\n2 TYPE Liberation\n2 DATE 27 JAN 1945",
            "1 EVEN Japan Bombs Pearl Harbor\n2 TYPE Attack\n2 DATE 07 DEC 1941",
            "1 EVEN D-Day, Allies Invade Normandy\n2 TYPE Attack\n2 DATE 06 JUN 1944",
            "1 EVEN Germany Occupies Hungary\n2 TYPE Invasion\n2 DATE 19 MARCH 1944",
            "1 EVEN Hitler Becomes German Chancellor\n2 TYPE Background\n2 DATE 30 JAN 1933",
            "1 EVEN Great Britain and France Declare War Against Germany\n2 TYPE Declaration Of War\n2 DATE 03 SEP 1939",
            "1 EVEN Beginning of WWII. Germany Invades Poland\n2 TYPE Invasion\n2 DATE 01 SEP 1939",
            "1 EVEN Auschwitz Established\n2 TYPE Concentration Camp\n2 DATE 20 MAY 1940",
            "1 EVEN Krakow Ghetto Formally Established\n2 TYPE Ghetto\n2 DATE 03 MARCH 1941",
            "1 EVEN Germany begins the deportation of Dutch Jews from camps in the Netherlands\n2 TYPE Deportation\n2 DATE 15 JULY 1942",
            "1 EVEN Krakow Ghetto Liquidated. Those deemed able to work were transported to the Płaszów concentration camp. Some 2,000 Jews unable to move or attempting to run were killed in the streets and in their homes. Operation Reinhard\n2 TYPE Ghetto\n2 DATE 13 MARCH 1943",
            "1 EVEN 435,000 Hungarian Jews Are Deported To Auschwitz\n2 TYPE Deportation\n2 DATE FROM 15 MAY 1944 TO 09 JULY 1944",
            "1 EVEN German Parliament Passes Nuremberg Race Laws. Only racially pure Germans would be allowed to hold German citizenship. It banned future intermarriages and sexual relations between Jews and people “of German or related blood.” \n2 TYPE Background\n2 DATE 15 SEP 1935",
            "1 EVEN Kristallnacht\n2 TYPE Pogrom\n2 DATE FROM 09 NOV 1938 TO 10 NOV 1938\n2 NOTE Kristallnacht (Crystal Night) comes from the broken windows of Jewish-owned stores, buildings and synagogues that were smashed. 7,500 Jewish owned businesses are looted. 30,000 Jewish males were rounded up and taken to concentration camps.",
            "1 EVEN Germany begins deportation of Austrian and Czech Jews to Poland\n2 TYPE Deportation\n2 DATE 12 OCT 1939",
            "1 EVEN Germany Occupies Denmark and southern Norway\n2 TYPE Invasion\n2 DATE 09 APRIL 1940",
            "1 EVEN France Surrenders To Germany\n2 TYPE Surrender\n2 DATE 22 JUNE 1940",
            "1 EVEN Warsaw Ghetto Sealed\n2 TYPE Ghetto\n2 DATE 16 NOV 1940",
            "1 EVEN Archduke Franz Ferdinand, Heir To The Austrian Throne, Is Assasinated In Sarajevo, Bosnia\n2 TYPE Assasination\n2 DATE 18 JUNE 1914",
            "1 EVEN British Passenger Liner Lusitania Is Sunk By A German Sumbarine. Killing about 1200.\n2 TYPE Background\n2 DATE 18 JUNE 1914",
            "1 EVEN United States Declares War On Germany\n2 TYPE Background\n2 DATE 6 APR 1917",
            "1 EVEN United States Signs Armistice With Germany\n2 TYPE Background\n2 DATE 11 NOV 1918",
            "1 EVEN Britain Declares War On Germany.\n2 TYPE Background\n2 DATE 04 AUG 1914",
            "1 EVEN Treaty Of Trianon ended WWI. Hungary Gives Up Two Thirds Of Its Land. Town Of Bilky Becomes Part of Czechoslovakia.\n2 TYPE Background\n2 DATE 06 JUNE 1920",
            "1 EVEN Austria-Hungary Declares War On Serbia. Russia, An Ally Of Serbia, Mobilize Troops. Russia's entrance into WWI was a disaster. By the end of the war, about 2.5 million Russians had been killed.\n2 TYPE Background\n2 DATE 28 JULY 1914",
            "1 EVEN Germany Declares War On Russia.\n2 TYPE Background\n2 DATE 01 AUG 1914",
            "1 EVEN Germany Declares War On France.\n2 TYPE Background\n2 DATE 03 AUG 1914",
            "1 EVEN Austria Declares War On Russia.\n2 TYPE Background\n2 DATE 06 AUG 1914",
            "1 EVEN Japan Declares War On Germany.\n2 TYPE Background\n2 DATE 23 AUG 1914",
            "1 EVEN Austria Declares War On Japan.\n2 TYPE Background\n2 DATE 25 AUG 1914",
            "1 EVEN United States Declares War On Austria-Hungary.\n2 TYPE Background\n2 DATE 7 DEC 1917",
            "1 EVEN Germany Invades Belgium, the Netherlands, and France.\n2 TYPE Invasion\n2 DATE 10 MAY 1940",
            "1 EVEN Dunkirk Evacuation.\n2 TYPE Background\n2 DATE FROM 26 MAY 1940 TO 4 JUNE 1940",
            "1 EVEN In Krakow, Judenräte (Jewish Councils) were created which were to be run by Jewish citizens for the purpose of carrying out orders for the Nazis. These orders included registration of all Jewish people living in the area, the collection of taxes, and forced labour groups.\n2 TYPE Krakow Ghetto\n2 DATE 28 NOV 1939",
            "1 EVEN The Great Powers were divided into two opposing alliances, the Triple Entente, consisting of France, Russia, and Britain, and the Triple Alliance, made up of Germany, Austria-Hungary, and Italy. \n2 TYPE Background\n2 DATE 1 JAN 1914",
            "1 EVEN Russian Czar Nicholas is forced to abdicate the throne.\n2 TYPE Background\n2 DATE 15 MARCH 1917",
            "1 EVEN In Russia, leftist revolutionaries led by Bolshevik Party leader Vladimir Lenin launch a nearly bloodless coup d’état against the provisional government. Beginning of the Russian Civil War.\n2 TYPE Background\n2 DATE 7 NOV 1917",
            "1 EVEN Russian Civil War ends. 7,000,000–12,000,000 total deaths. The overwhelming majority of deaths were civilians. Russia becomes Soviet Union.\n2 TYPE Background\n2 DATE 16 JUNE 1923",
            "1 EVEN In Soviet Union, Stalin becomes General Secretary of Communist Party.\n2 TYPE Background\n2 DATE 3 APRIL 1922",
            "1 EVEN Germany arrests 17,000 Polish Jewish Residents and deports thousands to Poland. https://w.wiki/5R8z \n2 TYPE Background\n2 DATE FROM 27 OCTOBER 1938 TO 29 OCTOBER 1938",        
            "1 EVEN Carpathian Ruthenia Region, of which Bilky is a part of, declares its indepedence from Czechoslovakia.\n2 TYPE Background\n2 DATE 15 MARCH 1939",
            "1 EVEN Carpathian Ruthenia Region, of which Bilky is a part of, is occupied and annexed by Hungary.\n2 TYPE Background\n2 DATE FROM 15 MARCH 1939 TO  18 MARCH 1939",
            "1 EVEN Nazis Photograph Hungarian Jews Arriving At Auschwitz. Many Jews Were From The Sub-Carpathia Region. Theses photos became know as The Auschwitz Album/Lilly Jacob Album. Lilly Jacob, the woman who found the photos, was from Bilky, Ukraine.\n2 TYPE Background\n2 DATE 26 MAY 1944",
            "1 EVEN Hungary restricts the number of Jews in each commercial enterprise, in the press, among physicians, engineers and lawyers to twenty percent.\n2 TYPE Hungarian Anti-Jewish Laws\n2 DATE 29 MAY 1938",
            "1 EVEN Hungary defines Jews racially: individuals with two, three or four Jewish-born grandparents were declared Jewish. It reduced the role of Jews in Hungarian economic life even more, setting the limit to 6%. \n2 TYPE Hungarian Anti-Jewish Laws\n2 DATE 5 MAY 1939",
            "1 EVEN Hungary prohibits intermarriage and penalizes sexual intercourse between Jews and non-Jews. Became a keystone in the process of excluding and eliminating Jews from Hungarian society. \n2 TYPE Hungarian Anti-Jewish Laws\n2 DATE 8 AUGUST 1941",
            "1 EVEN Hungary abolishes the status of Judaism as a received religion.\n2 TYPE Hungarian Anti-Jewish Laws\n2 DATE 19 JULY 1942",            
            "1 EVEN Hungary prohibits Jews from acquiring agricultural property, and calls for the transfer of Jewish-owned property to non-Jews.\n2 TYPE Hungarian Anti-Jewish Laws\n2 DATE 6 SEPT 1942",
            "1 EVEN Munich Agreement reached by Germany, Great Britain, France, and Italy that permitted German annexation of the Sudetenland, in western Czechoslovakia.\n2 TYPE Background\n2 DATE 30 SEPTEMBER 1938",
            "1 EVEN Germany annexes Austria.\n2 TYPE Background\n2 DATE 12 MARCH 1938",
            "1 EVEN First Vienna Award separated from Czechoslovakia territories in southern Slovakia and southern Carpathian Rus and gave them to Hungary.\n2 TYPE Background\n2 DATE 2 NOVEMBER 1938",
            "1 EVEN UN General Assembly passes Resolution 181, adopting a plan to partition the Palestine British Mandate into two states, one Jewish, one Arab.\n2 TYPE Background\n2 DATE 29 NOVEMBER 1947",
            "1 EVEN Israel declares its independence.\n2 TYPE Background\n2 DATE 14 MAY 1948",            
            "1 EVEN Germany unconditionally surrenders.\n2 TYPE Background\n2 DATE 07 MAY 1945",            
            "1 EVEN In the United States, the 18th Amendment Prohibition of alcohol becomes effective.\n2 TYPE Background\n2 DATE 17 JAN 1920",            
            "1 EVEN In the United States, the 18th Amendment is repealed and alcohol becomes legal again.\n2 TYPE Background\n2 DATE 5 DEC 1933",            
            "1 EVEN In the United States, the stock market crashes and loses 23% in two days.\n2 TYPE Background\n2 DATE FROM 23 OCT 1929 TO 24 OCT 1929",
            "1 EVEN In the United States, the stock market loses 90% of its value in less than three years.\n2 TYPE Background\n2 DATE FROM APR 1930 TO JULY 1932",
            "1 EVEN In the United States, the 18th Amendment is certified and women are given the right to vote.\n2 TYPE Background\n2 DATE 26 AUG 1920",
            "1 EVEN In Czechoslovakia, women are given the right to vote when the Constitution is enacted.\n2 TYPE Background\n2 DATE 29 FEB 1920",
            "1 EVEN In the United States, the Emergency Quota Act restricts the number of immigrants.\n2 TYPE Background\n2 DATE 21 MAY 1921",
            "1 EVEN Henry Ford publishes an article called THE INTERNATIONAL JEW: THE WORLD'S PROBLEM in the Dearborn Independent. Ford continues to publish anti-semitic articles for seven years. Copies of the newspapers are placed in Ford Auto Delearships. newspaper is sent\n2 TYPE Background\n2 DATE 22 MAY 1920",
            "1 EVEN Mein Kampf, Hitler's autobigraphical manifesto, is published. Hitler compliments Henry Ford by name.\n2 TYPE Background\n2 DATE 18 JULY 1925",
            "1 EVEN The United States stock market reaches its lowest point during the Great Depression. It was down 90% from its high.\n2 TYPE Background\n2 DATE 8 JULY 1932",
            "1 EVEN Heinrich Bruning becomes Chancellor of Germany. In response to the worldwide depression, he institutes a policy of austerity by tightening credit and reducing wages.\n2 TYPE Background\n2 DATE 30 MARCH 1930",
            "1 EVEN Heinrich Bruning, Chancellor Of German, announces his Cabinet's resignation. Hitler becomes chancellor eight months later.\n2 TYPE Background\n2 DATE 30 MAY 1932",
            "1 EVEN Hyperinflation occurs in Germany as a result of debt/reparations owed from World War I.\n2 TYPE Background\n2 DATE FROM 1921 TO 1923",
            "1 EVEN United States Detonates An Atomic Bomb Over Hiroshima, Japan.\n2 TYPE Background\n2 DATE 6 AUG 1945",
            "1 EVEN Japan anounces its surrender ending World War II.\n2 TYPE Background\n2 DATE FROM 15 AUG 1945",
            "1 EVEN Aoviet Union declares War on Japan.\n2 TYPE Background\n2 DATE 8 AUG 1945",
            "1 EVEN United States Detonates An Atomic Bomb Over Nagasaki, Japan.\n2 TYPE Background\n2 DATE 9 AUG 1945",
            "1 EVEN The Korean War begins when North Korea invades South Korea.\n2 TYPE Background\n2 DATE 25 JUNE 1950",
            "1 EVEN An armistice ends the fighting in the Korean War.\n2 TYPE Background\n2 DATE 27 JULY 1953",
            "1 EVEN Japan annexes Korea.\n2 TYPE Background\n2 DATE FROM 1910",
            "1 EVEN On the first night of Passover, Erev Pesach - Hebrew Calendar Nisan 14 (1st day of Pesach is Nisan 15), the Nazis enter the Warsaw Ghetto to deport the remaining Jews. In response, the uprising begins. Nazis proceed to burn the ghetto, block by block, murdering 13,000 Jews. It ended with the Nazis destroying the Great Synagogue Of Warsaw. The remaining 50,000 Jews were deported to concentration camps.\n2 TYPE Background\n2 FROM 19 APRIL 1943 TO 16 MAY 1943", 
            "1 EVEN 1936 Summer Olympics begins in Berlin, Germany. German Jewish athletes were barred.\n2 TYPE Background\n2 DATE 1 AUG 1936",
            "1 EVEN Reichstag Fire gives Hitler the opportunity to suspend civil liberties and the establishment of the Nazi Party as the only political party in Germany.\n2 TYPE Background\n2 DATE 27 FeB 1933",
            "1 EVEN Hitler holds a secret meeting in which he outlines Germany's plan to expand its territories by force. The meeting is summarized in the Hossbach Memorandum.\n2 TYPE Background\n2 DATE 5 NOV 1937",
            "1 EVEN Winston Churchill becomes Prime Minister of Britain. \n2 TYPE Background\n2 DATE 10 MAY 1940",
            "1 EVEN At the Wannsee Conference, Nazis finalized their Final Solution plans to murder all the Jews after their deportation. Adolf Eichmann, who was eventually tried and executed in Israel for murdering Jews via the systematic deportation of millions of Jews to the extermination camps, was at the meeting.\n2 TYPE Background\n2 DATE 20 JAN 1942",
            "1 EVEN Belgium Resistance attacks a train bound for Auschwitz and free 233 prisoners. It is the only mass escape from a Holocaust train. \n2 TYPE Background\n2 DATE 19 APR 1943",



            
            

            

            


            


            

            
          







            




            
                      
        ]);
     }
        
 };



<?php

declare(strict_types=1);

namespace Mistralys\X4\GameNotes;

use AppUtils\ClassHelper;
use AppUtils\FileHelper\FolderInfo;
use Mistralys\X4\Database\Blueprints\BlueprintDefs;
use Mistralys\X4\Database\Wares\WareDefs;

class BuildCommands
{
    public static function build() : void
    {
        self::buildModParts();
        self::buildInventory();
        self::buildBlueprints();
    }

    public static function buildBlueprints() : void
    {
        self::init();

        $blueprints = array();
        $count = 0;
        foreach(BlueprintDefs::getInstance()->getAll() as $blueprint) {
            $category = $blueprint->getCategory()->getID();
            if(!isset($blueprints[$category])) {
                $blueprints[$category] = array();
            }

            $count++;

            $blueprints[$category][] = sprintf(
                '    <blueprint ware="%1$s"/><!-- %2$s -->',
                $blueprint->getWareID(),
                $blueprint->getLabel()
            );
        }

        echo sprintf('Found %1$s blueprints.', $count) . PHP_EOL;

        ksort($blueprints);

        $xml = '';
        foreach($blueprints as $category => $wares) {
            if(empty($wares)) {
                continue;
            }

            $xml .= sprintf(
                '    <!-- Category: %1$s -->'.PHP_EOL.
                '%2$s'.PHP_EOL,
                htmlspecialchars(ucfirst($category)),
                implode(PHP_EOL, $wares)
            ).PHP_EOL;
        }

        file_put_contents(
            __DIR__.'/../../blueprint-ids.xml',
            '<blueprints>'.PHP_EOL.$xml.'</blueprints>'.PHP_EOL
        );
    }

    public static function buildModParts() : void
    {
        self::init();

        $modParts = array();
        foreach(WareDefs::getInstance()->getAll() as $ware) {
            if($ware->hasTag('equipmentmodpart')) {
                $modParts[] = sprintf(
                    '<ware ware="%1$s" amount="9999"/><!-- %2$s -->',
                    $ware->getWareID(),
                    $ware->getLabel()
                );
            }
        }

        echo sprintf('Found %1$s modparts.', count($modParts)) . PHP_EOL;
        file_put_contents(__DIR__.'/../../modparts.xml', implode(PHP_EOL, $modParts));
    }

    public static function buildInventory() : void
    {
        self::init();

        $upgradeWares = array(
            'inv_timewarp',
        );

        $excludeTags = array(
            'paintmod',
            'equipmentmodpart',
            'missiononly',
        );

        $upgradeTags = array(
            'equipment',
            'personalupgrade',
        );

        $items = array(
            'Personal Upgrades' => array(),
            'Craftables' => array(),
            'Seminars' => array(),
            'Tradeables' => array(),
            'Miscellaneous' => array(),
        );

        $count = 0;
        foreach(WareDefs::getInstance()->getAll() as $ware)
        {
            if(!$ware->hasTag('inventory')) {
                continue;
            }

            foreach($excludeTags as $tag) {
                if($ware->hasTag($tag)) {
                    continue 2; // Skip to the next ware
                }
            }

            foreach($excludeTags as $tag) {
                if($ware->hasTag($tag)) {
                    continue 2; // Skip to the next ware
                }
            }

            $isUpgrade = false;

            foreach($upgradeTags as $tag) {
                if($ware->hasTag($tag)) {
                    $isUpgrade = true;
                    break;
                }
            }

            if($isUpgrade && in_array($ware->getWareID(), $upgradeWares)) {
                $isUpgrade = true;
            }

            $category = 'Miscellaneous';
            if($isUpgrade) {
                $category = 'Personal Upgrades';
            } elseif($ware->hasTag('seminar')) {
                $category = 'Seminars';
            } elseif($ware->hasTag('crafting')) {
                $category = 'Craftables';
            } elseif ($ware->hasTag('tradeonly')) {
                $category = 'Tradeables';
            }

            $amount = '';
            if(!$isUpgrade) {
                $amount = ' amount="9999"';
            }

            $count++;

            $tag = sprintf(
                '<ware ware="%1$s"%2$s/><!-- %3$s -->',
                $ware->getWareID(),
                $amount,
                $ware->getLabel()
            );

            $items[$category][] = $tag;
        }

        echo sprintf('Found %1$s inventory items.', $count) . PHP_EOL;

        $content = '';
        foreach($items as $category => $wares) {
            if(empty($wares)) {
                continue;
            }

            $content .= sprintf(
                '<!-- %1$s -->'.PHP_EOL.
                '%2$s'.PHP_EOL,
                htmlspecialchars($category),
                implode(PHP_EOL, $wares)
            ).PHP_EOL;
        }

        file_put_contents(__DIR__.'/../../inventory-items.xml', $content);
    }

    private static bool $initialized = false;

    private static function init() : void
    {
        if (self::$initialized) {
            return;
        }

        self::$initialized = true;

        require_once __DIR__.'/../vendor/autoload.php';

        ClassHelper::setCacheFolder(FolderInfo::factory(__DIR__.'/../cache')->create());
    }
}

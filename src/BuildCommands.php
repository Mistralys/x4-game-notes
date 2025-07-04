<?php

declare(strict_types=1);

namespace Mistralys\X4\GameNotes;

use JetBrains\PhpStorm\Pure;
use Mistralys\X4\Database\Wares\WareDefs;

class BuildCommands
{
    public static function build()
    {
        self::buildModParts();
        self::buildInventory();
    }

    public static function buildModParts() : void
    {
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
        file_put_contents(__DIR__.'/../modparts.xml', implode(PHP_EOL, $modParts));
        echo implode(PHP_EOL, $modParts) . PHP_EOL;
    }

    public static function buildInventory() : void
    {
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

        file_put_contents(__DIR__.'/../inventory-items.xml', $content);
    }

    private static bool $initialized = false;

    private static function init() : void
    {
        if (self::$initialized) {
            return;
        }

        self::$initialized = true;

        require_once __DIR__.'/../vendor/autoload.php';
    }
}

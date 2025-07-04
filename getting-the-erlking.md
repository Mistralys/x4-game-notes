# Getting the Erlking battleship

This unique battleship can be found in one of the Windfall systems, right next
to a station called "Keepsake" with a trading station icon. If you approach it,
the station will warn you off.

> The game is hardwired to allow a single Erlking in the game. Even if you
have all the ship's blueprints, you can only build it once. When the sole
existing copy is destroyed, Boso Ta will make the Erlking power core
research available.

## The official way

The official way to get it is to board the existing one. However, as the lore
states, the ship is incomplete. The missing parts can be added at a shipyard,
but the blueprints must be found first. They are hidden in data vaults usually
found around the Windfall and Avarice systems.

There is no quest to find the blueprints, so the search can be either an
interesting scavenger hunt or a frustrating exercise, depending on how you feel
about such searches.

A lot of information and player experiences can be found here, for example:

https://forum.egosoft.com/viewtopic.php?t=449650

## The semi-unofficial way

As the data vault locations are randomized and can be pretty hard to find, it
is possible, without cheating outright, to find out their exact location, to
be able to complete the search ingame.

There is a `.bat` file that can extract the locations from a savegame:

https://forum.egosoft.com/viewtopic.php?p=5116566#p5116566

## The unofficial way

This requires you to have access to a shipyard.

1. Extract and open your savegame XML file.
2. Search for the `<blueprints>` tag.
3. Add the blueprint tags shown below.
4. Ingame, destroy the Erlking in Windfall.
5. Boso Ta will add the power core research project.
6. Build the ship at your shipyard.
7. If you lose the ship, you may rebuild it :)

Erlking blueprints XML:

```xml
<blueprint ware="engine_pir_xl_battleship_01_allround_01_mk1"/>
<blueprint ware="shield_pir_xl_battleship_01_standard_01_mk1"/>
<blueprint ware="ship_pir_xl_battleship_01_a"/>
<blueprint ware="turret_pir_l_battleship_01_laser_01_mk1"/>
<blueprint ware="turret_pir_m_battleship_01_gatling_02_mk1"/>
<blueprint ware="weapon_pir_xl_battleship_01_mk1"/>
```

> Adding all blueprints without destroying it works: You will see the
ship in the build menu, but it can't be built because the power core
research is missing. That's why the existing ship must be destroyed.
In my game, I did not even get a reputation hit for that.

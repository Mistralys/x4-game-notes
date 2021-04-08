# Keyboard shortcuts

## Ship

- Travel mode: `Shift + 1` 
- Scan mode: `Shift + 2` 
- Long scan mode: `Shift + 3` 
- Close menu: `Del`
- Active ship menu: `Enter`
- Afterburner: `Tab`
- Autopilot toggle: `SHIFT+A`
- Roll: `Q`, `E`
- Speed+: `X`, `Mouse wheel`
- Speed-: `Y`, `Mouse wheel`
- Stop ship: `Backspace`
- Mouse steering (toggle): `SHIFT+Space`
- Mouse steering  (manual): `Hold Left Mouse + Move`
- Undock: `SHIFT+D`
- Pick up items: `O` (tractor beam)
- Flight Assist: `CTRL+Space`
- Shoot: `Space`

## Targeting

- Target in front of ship: `T`  
  or
- Open the map, select item, press `T`

## Map

- Rotate: `Q`, `E`, `Hold Right Mouse + Move`
- Panning: `WASD` or `Hold Left Mouse + Move`
- Zoom: Numpad `+` and `-` or `Mouse Wheel`

# Mining

1) Ship menu, launch resource probe.
2) Check out nearby asteroids
3) Fly close to the selected asteroid
4) Scan mode
5) Ship Menu > Change turret behavior to mining

When asteroid is depleted:

Ship Menu > Ore collector drone > Change status to "Armed"

  > NOTE: It seems the ore collector drone is not always needed,
    since the ship's tractor beam (`O` key) works as well.

# Cheats

## Money

- Save your game and note the amount of money in your account
- Go to the samegame folder, usually in `Documents\Egosoft\X4\70814229\save`
- Extract the `.xml` file from the savegame `.gz` archive
- Open the XML file in a text reader
- Replace all occurrences of the amount in the file
- Delete the `.gz` file and leave the `.xml` file  
  or
- Replace the `.xml` file in the archive to save disk space

These are the texts to search for and replace:

```
money="xxxx"
<account id="[0x102]" amount="xxxx"/>
<stat id="money_player" value="xxxx"/>
```

Where `xxxx` is the amount of money. It's important to replace them all, otherwise
the change will not be applied correctly.

# Knowledgebase

## Long range scanning

Switch to scan mode with `Shift + 3`, then press `L` for a short while (secondary weapon button). Has to be timed right: if the key press is too short or too long, it will not work. If it works, a blue pulse will shoot out from the ship.

  > The pulse is not visible on the map, only from the ship's cockpit.
   
Items detected by the scan will display colored pulse hits in space.

- Yellow: Lockboxes
- Blue: Wrecks with contents
- Gray: Asteroids, empty wrecks, stations

## Ship stuck in something

I was stuck in a station once with the _Moreya_, and could not let an NPC pilot get it out, since it's a pilotless ship. This helped:

- Turn off flight assist
- Constantly push forward until you're free

NPC alternative:

- Teleport to another ship
- Let the NPC piloit wiggle the ship free

This works, because NPC pilots do not use flight assist.

  > It may also help to teleport to another system, since this will unload
  objects in space like asteroids.

## Gaining faction reputation

- Killing their enemies in their own space
- Running missions for them

### Killing enemies

You get +1 reputation for kills. Any of their enemies count (rival factions or Xenon), but also criminals:

- Approach a station closely
- Often little red criminal ships will appear
- Shoot the criminals 

  > Take care not to shoot the station.
   
### Missions

Approach their stations, and check if they have any missions to offer. Small repair missions are often 
available, and are also shown on map as small icons above the station when getting close.

  > Scanning stations for signals also works, but from experience those mostly give illegal missions
    that will not help reputation.

## Service crew

These are some known facts about crew skills:

- They can repair the ship.
- The more crew there is, the faster the repairs.
- Their skill determines how much they can repair (5 Star = 100%)
- They are useless on S sized ships (too slow).
- They also repair the turrets of capital ships.

## Marines

Marines on a ship can repel boarders, and make it possible to board enemy ships. 

I have not been seen the AI try to board any of my ships, so I believe 
they are not needed to defend ships when playing solo. However, they can
be useful to board ships or recover abandoned ships.

## Recovering / claiming abandoned ships:

- Take a ship with some marines on board
- Approach the abandoned ship
- Target it and right-click > "Claim"

A boarding drone will slowly approach the ship, breach it, and take it over.

  > Get close to the target ship, as the boarding drone is really slow.
  
  > In some cases, the target ship will take a little damage.

### The lazy way

Let one of your NPC controlled ships do it: 

- Open the map
- Select a ship with marines on board
- Right-click the abandoned ship
- Select "Claim"

Your ship will go there and launch a boarding drone automatically.


## Abbreviations

- PHQ: Player Headquarters Station

## Claiming sectors

- Destroy all existing admin centers (even allies)
- Create a plot
- Start with the admin center module (get BP from faction with +20 rep)
- Add at least docking module and defense modules
- No workforce is needed, if there are no production modules

## Station building

When building stations, one key factor is workforce. Having too many people is worse than not having enough. Example: if requiring 2000 workers, having 1800 is better than 2200.

- Use the [Station Calculator][] to simulate the build
- Make it as close to 100% workforce usage as possible
- Ideally, everything should work starting with ~10% workforce

### Finding markets

  > As a general rule, do not worry about the market too much, your goods will be bought wherever you build your station. 

Still, it can be beneficial to check if there are sectors that lack specific component factories. A good example is ship building parts: In sectors with a wharf or shipyard, check if there are factories for Hull Parts, Engine Parts and Shield Components. If not, you have guaranteed regular customers for matching factories.

In one of my games, when buying ships in Split territory, they often took long because they did not have enough hull parts. I was able to solve that issue myself by building a hull part factory in their shipyard sector. It cut down on build times substantially.

### Building presets

- [Split Engine Part Factory][] 
- [Split Hull Part Factory][]
- [Split Shield Component Factory][]
 
 
 
[Split Hull Part Factory]: http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_prod_hullparts_01,count:13;,$module-module_gen_prod_energycells_01,count:4;,$module-module_gen_prod_graphene_01,count:2;,$module-module_gen_prod_refinedmetals_01,count:7;,$module-module_spl_hab_l_01,count:7;,$module-module_spl_prod_cheltmeat_01,count:2;,$module-module_spl_prod_scruffinfruits_01,count:2;,$module-module_spl_prod_medicalsupplies_01,count:4;,$module-module_gen_prod_spices_01,count:1;,$module-module_gen_prod_water_01,count:2

[Split Engine Part Factory]: http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_prod_engineparts_01,count:12;,$module-module_gen_prod_energycells_01,count:4;,$module-module_gen_prod_antimattercells_01,count:4;,$module-module_gen_prod_refinedmetals_01,count:2;,$module-module_spl_hab_l_01,count:5;,$module-module_spl_prod_cheltmeat_01,count:2;,$module-module_spl_prod_scruffinfruits_01,count:2;,$module-module_spl_prod_medicalsupplies_01,count:3;,$module-module_gen_prod_spices_01,count:1;,$module-module_gen_prod_water_01,count:1

[Split Shield Component Factory]: http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_prod_shieldcomponents_01,count:12;,$module-module_gen_prod_energycells_01,count:4;,$module-module_gen_prod_quantumtubes_01,count:2;,$module-module_gen_prod_refinedmetals_01,count:1;,$module-module_spl_hab_l_01,count:7;,$module-module_spl_prod_cheltmeat_01,count:2;,$module-module_spl_prod_scruffinfruits_01,count:2;,$module-module_spl_prod_medicalsupplies_01,count:4;,$module-module_gen_prod_spices_01,count:1;,$module-module_gen_prod_water_01,count:2;,$module-module_gen_prod_plasmaconductors_01,count:5;,$module-module_gen_prod_superfluidcoolant_01,count:3;,$module-module_gen_prod_graphene_01,count:3

[Station Calculator]: http://www.x4-game.com/#/station-calculator

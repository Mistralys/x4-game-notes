# Keyboard shortcuts

## Ship

- Travel mode: `Shift + 1`
- Scan mode: `Shift + 2`
- Long scan mode: `Shift + 3` - Hold `L` to scan
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
- Go back to ship: `SHIFT+D` (while on station)
- Pause: Keyboard layout dependent; best to remap it.

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

# Online resources

- [Printable system maps](https://steamcommunity.com/sharedfiles/filedetails/?id=2420181460)

# Gameplay tips and howtos

## Minimize player presence

The game is built so the physics simulation system (collisions, inertia of ships, etc...) is enabled only in the system where the player is located. Doing this for all systems would not be feasible performance-wise. In practice, this means that the player has a massive impact on how things happen in a given system, solely by being there.

Take docking, for example: When the player is not present, ships will simply fly through the station's geometry to access the target docking port. When the player is present, all ships in the system will use the collision detection, so docking will take substantially longer. Combat is also heavily affected, switching from a pure numbers game (their total power vs your total power) to fully simulated projectile trajectories and ship movements.

In essence, being in a system has the potential to slow things down significantly, or even disrupt them. I don't usually think about it too much, but I do choose where I stay when I know I am not going to be moving around much, to keep my impact low. For example, in one game I set up my largest manufacturing empire in Grand Exchange where the HQ initially appears. There is so much activity there now, that teleporting into the system has become problematic (think of all the ships in the asteroid belts suddenly all doing collision checks).

I usually choose a nice spot in a safe system out of the way with minimal activity to teleport to when I'm not flying around in first person.

> Tip: An ideal system for example is _Heart of Acrimony - The Boneyard_ once the Split Vendetta mission has progressed a bit.

## Free ship mods

Installing mods using a workshop in an NPC station, costs money for each installation. However, using a workshop on a player owned station does not cost anything - except the required materials.

> This will also work even if the wharf or shipyard is not capable of actually building ships.

> Workshops are size-dependent, which means that for L and XL-sized ships, a shipyard's workshop must be used.

## Quick station building

The station builder has a handy feature hidden under the settings button (the gears icon): "Shuffle modules".

When building a new station, just drop all modules you wish to build, without connecting them. When all modules have been placed, click the shuffle button - it will automatically create connections between the modules. Each time you click on it, a new design is generated.

Drawbacks:

- All modules are shuffled. If you need them to be built in a specific order, this is useless.
- Connectors are taken from all your available blueprints, which can result in a wild mix. There is no option to use only argon connectors, for example.

# Cheats

## Savegame editing

Primer on editing, and lots of details:

https://forum.egosoft.com/viewtopic.php?t=350404

## Which editor for XML files?

The large XML files can be a challenge to open or edit, even on higher end machines.
Notepad++ is one often recommended, but personally it had trouble with my 1.2 GB save
files. What worked best for me is the commercial UltraEdit, especially when searching
or even to collapse XML tags.

## Savegame XML structure

https://www.reddit.com/r/X4Foundations/comments/thjbik/how_to_read_save_file/

## Editing player money

- Save your game and note the amount of money in your account.
- Go to the samegame folder, usually in `Documents\Egosoft\X4\70814229\save`.
- Extract the `.xml` file from the savegame `.gz` archive.
- Open the XML file in a text reader.
- Replace all occurrences of the amount in the file.
- Delete the `.gz` file and leave the `.xml` file.
  or
- Replace the `.xml` file in the archive to save disk space.

These are the texts to search for and replace:

```
money="xxxx"
]" amount="xxxx"/>  (to find <account id="[???]" amount="xxxx">)
<stat id="money_player" value="xxxx"/>
```

Where `xxxx` is the amount of money.

*It's important to replace them all*, otherwise
the change will not be applied correctly.

## Editing faction relations

Faction relations are defined by the following numerical ranges:

- Self: 1.0 to 1.0
- Member: 0.1 to 1.0
- Friend: 0.01 to 1.0
- Neutral: -0.01 to 0.01
- Enemy: -1.0 to -0.01
- Kill military: -1.0 to -0.1
- Kill: -1.0 to -0.32
- Nemesis: -1.0 to -1.0

Reputations from -0.1 to -0.31 result in fighting only the military. At -0.32 to
-1 they kill everything. This means that the AI factions that are "at war" at
-0.1 will already kill military ships on sight.

## Editing player reputation

Under the faction tag:

```
<faction id="argon">
```

Insert the following, if it does not exist:

```
<booster faction="player" relation="0.00999" time="3000.161"/>
```

This sets reputation to `+9`, just before the switch to `+10`, to trigger the faction's military license reward.

Example values:

- `0.001` +1
- `0.011` +11

## Editing blueprints

The following is a full list of blueprint macros / codes that I collected online, as well
as through my own savegames. They go below the `<blueprints>` tag in the file (there is
only one, so it's easy to find).

The full categorized list of blueprints can be found in the [blueprint-ids.md][] file, and
a copy & paste XML version in [blueprint-ids.xml][].

The really cool thing is that it is even possible to make the Astrid and the Erlking
buildable at player stations by adding their blueprints (for the Erlking, see [Getting the Erlking][]).

## Player inventory

NPCs have `<inventory>` tags just like the player, so the easiest
way to find the player's inventory is to search for the player
component. The inventory is nested in here.

Search for the following:

`class="player"`

### Modding parts

These are all known parts that are used for modding ships.

```xml
<ware ware="modpart_enginefuelinjector_t1" amount="9999"/>
<ware ware="modpart_enginefuelinjector_t2" amount="9999"/>
<ware ware="modpart_enginefuelinjector_t3" amount="9999"/>
<ware ware="modpart_extendedfuelcontainer" amount="9999"/>
<ware ware="modpart_highenergycatalyst" amount="9999"/>
<ware ware="modpart_nividiumcrystallite" amount="9999"/>
<ware ware="modpart_nividiumoxide" amount="9999"/>
<ware ware="modpart_shieldgeneratorcoil_t1" amount="9999"/>
<ware ware="modpart_shieldgeneratorcoil_t2" amount="9999"/>
<ware ware="modpart_shieldgeneratorcoil_t3" amount="9999"/>
<ware ware="modpart_shipnanoweave_t1" amount="9999"/>
<ware ware="modpart_shipnanoweave_t2" amount="9999"/>
<ware ware="modpart_shipnanoweave_t3" amount="9999"/>
<ware ware="modpart_tuningsoftware" amount="9999"/>
<ware ware="modpart_weaponchamber_t1" amount="9999"/>
<ware ware="modpart_weaponchamber_t2" amount="9999"/>
<ware ware="modpart_weaponchamber_t3" amount="9999"/>
```

### Inventory & crafting resources

These are other inventory items used for crafting, as well as the
objects the player can use, like the repair laser for the space suit.

```xml
<ware ware="weapon_gen_spacesuit_repairlaser_01_mk1"/>
<ware ware="software_scannerobjectmk3"/>
<ware ware="engine_gen_spacesuit_01_mk2"/>
<ware ware="weapon_gen_spacesuit_laser_01_mk1"/>
<ware ware="weapon_gen_spacesuit_demolition_01_mk1"/>
<ware ware="weapon_gen_spacesuit_laser_02_mk1"/>
<ware ware="inv_timewarp"/>

<ware ware="bomb_player_limpet_emp_01_mk1" amount="9999"/>
<ware ware="inv_advancedtargetingmodule" amount="9999"/>
<ware ware="inv_agidevice_01" amount="9999"/>
<ware ware="inv_agidevice_02" amount="9999"/>
<ware ware="inv_agidevice_03" amount="9999"/>
<ware ware="inv_algaescrubber" amount="9999"/>
<ware ware="inv_antimatter_injection_sensor" amount="9999"/>
<ware ware="inv_argnusteak" amount="9999"/>
<ware ware="inv_bandages" amount="9999"/>
<ware ware="inv_carbonfilter" amount="9999"/>
<ware ware="inv_crystalbit" amount="9999"/>
<ware ware="inv_crystal_01" amount="9999"/>
<ware ware="inv_crystal_02" amount="9999"/>
<ware ware="inv_crystal_03" amount="9999"/>
<ware ware="inv_damagedsingularityengine" amount="9999"/>
<ware ware="inv_decryptionmodule" amount="9999"/>
<ware ware="inv_finemeal" amount="9999"/>
<ware ware="inv_fluxcapacitor" amount="9999"/>
<ware ware="inv_hallucinogenics" amount="9999"/>
<ware ware="inv_herbicide" amount="9999"/>
<ware ware="inv_hydraulicpump" amount="9999"/>
<ware ware="inv_interfaceunit" amount="2696"/>
<ware ware="inv_interfaceunit" amount="9999"/>
<ware ware="inv_kyondevice_03" amount="9999"/>
<ware ware="inv_magneticmaterial" amount="9999"/>
<ware ware="inv_majaglit" amount="9999"/>
<ware ware="inv_microgimble" amount="9999"/>
<ware ware="inv_micromotor" amount="9999"/>
<ware ware="inv_mixedfruit" amount="9999"/>
<ware ware="inv_modulartrigger" amount="9999"/>
<ware ware="inv_needle" amount="9999"/>
<ware ware="inv_processing_panel_12G" amount="9999"/>
<ware ware="inv_processing_panel_19L" amount="9999"/>
<ware ware="inv_processing_panel_46B" amount="9999"/>
<ware ware="inv_processing_panel_7A" amount="9999"/>
<ware ware="inv_processing_panel_8X" amount="9999"/>
<ware ware="inv_programmablefieldarray" amount="9999"/>
<ware ware="inv_rapidsandfilter" amount="9999"/>
<ware ware="inv_rarespices" amount="9999"/>
<ware ware="inv_remotedetonator" amount="9999"/>
<ware ware="inv_salvagedelectronics" amount="9999"/>
<ware ware="inv_securecontainer" amount="9999"/>
<ware ware="inv_securitybypasssystem" amount="9999"/>
<ware ware="inv_securitydecryptionsystem" amount="9999"/>
<ware ware="inv_securityslicer" amount="9999"/>
<ware ware="inv_sedative" amount="9999"/>
<ware ware="inv_spaceflyeggs" amount="9999"/>
<ware ware="inv_unstablecrystal" amount="9999"/>

<ware ware="inv_seminar_management_0" amount="9999"/>
<ware ware="inv_seminar_management_1" amount="9999"/>
<ware ware="inv_seminar_management_2" amount="9999"/>
<ware ware="inv_seminar_piloting_0" amount="9999"/>
<ware ware="inv_seminar_piloting_1" amount="9999"/>
```

# Knowledgebase

## Long range scanning

Switch to scan mode with `Shift + 3`, then press `L` for a short while (secondary weapon button). Has to be timed right: if the key press is too short or too long, it will not work. If it works, a blue pulse will shoot out from the ship.

> The pulse is not visible on the map, only from the ship's cockpit.

Items detected by the scan will display colored pulse hits in space.

- Yellow: Lockboxes
- Blue: Wrecks with contents, data vaults
- Gray: Asteroids, empty wrecks, stations

## Khaa'k presence

The Khaa'k hives only spwn in a predefined set of sectors. This knowledge makes it a bit easier to handle them, as you can avoid them or set up defenses as necessary.

- Antigone Memorial
- Black Hole Sun V
- Company Regard
- Heretic's End
- Lasting Vengeance
- Matrix #451
- Open Market
- Pious Mists IV
- Silent Witness XII

More information is available in [Ram's excellent article](https://steamcommunity.com/sharedfiles/filedetails/?id=3463911140). 

## Teleportation

Needs to be researched with the help of Boso and the player HQ. Starting the game, it
is not possible to teleport anywhere, which can lead to funny situations if you
accidentally fnd yourself stuck on an NPC ship for example.

## Teleporting to stations

The easiest way is to buy cheap ships like a scout with minimum fitting, and to dock it
at any stations you wish to be able to teleport to. Then, provided the teleport technology
has been researched far enough, you can simply warp to these ships.

Personally I have a teleport ship at every faction representative's station so I can easily
go there whenever I need. I name them "X ARG" for example: "X" so the ship is listed at the
end, and "ARG" for the Argon faction representative.

> When an ally reaches 27 reputation, it becomes possible to teleport to any of their stations.

## Getting the Erlking battleship

This unique battleship can be found in one of the Windfall systems, right next
to a station called "Keepsake" with a trading station icon. If you approach it,
the station will warn you off.

> The game is hardwired to allow a single Erlking in the game. Even if you
  have all the ship's blueprints, you can only build it once. When the sole
  existing copy is destroyed, Boso Ta will make the Erlking power core
  research available.

### The official way

The official way to get it is to board the existing one. However, as the lore
states, the ship is incomplete. The missing parts can be added at a shipyard,
but the blueprints must be found first. They are hidden in data vaults usually
found around the Windfall and Avarice systems.

There is no quest to find the blueprints, so the search can be either an
interesting scavenger hunt or a frustrating exercise, depending on how you feel
about such searches.

A lot of information and player experiences can be found here, for example:

https://forum.egosoft.com/viewtopic.php?t=449650

### The semi-unofficial way

As the data vault locations are randomized and can be pretty hard to find, it
is possible, without cheating outright, to find out their exact location, to
be able to complete the search ingame.

There is a `.bat` file that can extract the locations from a savegame:

https://forum.egosoft.com/viewtopic.php?p=5116566#p5116566

### The unofficial way

This requires you to have access to a shipyard.

1. Extract and open your savegame XML file.
2. Search for the `<blueprints>` tag.
3. Add the blueprint tags shown below.
4. Ingame, simply destroy the Erlking in Windfall.
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

## Ship stuck in something

### Method 1: Let an NPC do it

- Teleport out of the sector
- Let the NPC pilot wiggle the ship free

> This works, because when the player is "off-grid", all
  laws of physics are suspended.

### Method 2: Wiggle wiggle

I was stuck in a station once with the _Moreya_, and since it's a pilotless ship,
I could not let an NPC pilot get it out. This helped:

- Turn off flight assist (this is key)
- Constantly push forward until you're free

## Gaining faction reputation

### Killing enemies

You get +1 reputation for kills. Any of their enemies count (rival factions or
Xenon), but also criminals:

- Approach a station closely
- Often little red criminal ships will appear
- Shoot the criminals

> Take care not to shoot the station.

### Missions

Approach their stations, and check if they have any missions to offer. Small
repair missions are often available, and are also shown on map as small icons
above the station when getting close.

> Scanning stations for signals also works, but from experience those mostly
  give illegal missions that will not help reputation.

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

> If you like immersion, adding a few marines (4-6) on bigger ships will make
  them appear on the bridge. A nice touch for capital ships for sure :)

## Recovering / claiming abandoned ships:

- Pilot a ship with at least 1 marine on board.
- Approach the abandoned ship.
- Target it and right-click > "Claim".

A boarding drone will slowly approach the ship, breach it, and take it over.

> Get close to the target ship, as the boarding drone is really slow.
  In some cases, the target ship will take a little damage (the crew
  of the ship sabotaging it, and/or the marine's breaching charges).

### The lazy way

Let one of your NPC controlled ships do it:

- Open the map.
- Select a ship with at least 1 marine on board.
- Make the ship fly and wait next to the target ship.
- Once there, right-click the abandoned ship.
- Select "Claim".

Your ship will launch a boarding drone automatically. Sadly the ship will
not automatically fly there, that's why you need the fly and wait command.

## Attacking stations

Station defenses pack a wallop, and can easily take down destroyers and
battleships with surprising ease. The key here is range, so you can hit a
station from outside its guns' range. A destroyer with some gun
modifications will do nicely, even with green level modifications.

> Tip: Open the information for the target station, and view its loadout.
  Watch out for L-sized turrets, those are the ones you need to worry
  about. From experience, if there are 9 or more, it's dangerous.

The biggest issue is that in my experience, using the AI to do a
synchronized fleet attack or simple attack command will get your ships
shot. The AI invariably gets too close to the station. Even if not at
first, the ships slowly get closer over time, often when changing positions
to shoot at another part of the station. Even if the guns can hit from 2x
the distance they are at, and this even if turrets and defense drones are
disarmed. Micromanaging this is almost impossible.

My personal, manual solution:

- Identify gun installations (defense disks and bridges).
- Manually position the ship above the target station.
- Take out all gun installations (it helps to know where they are).
- Once teethless, let your fleet destroy the remaining modules.

Even after killing all gun emplacements and defense modules, the station
will still have more than 80% hull left, which is what takes the most time
to whittle down.

> The AI rarely, if ever, attacks a station from above or below, from which
  position it's easier to hit gun emplacements: You can see them all, and hit
  everything without moving.

### Ship choices

From experience, these are the best ships for station bashing when playing _OOS_:

1. Asgard: High damage, least suicidal.
2. Syn: High damage, but pretty suicidal.
3. Phoenix / Odysseus: Passable, AI doesn't suicide so often.

Rattlesnakes are the worst. In my games, they just loved making flybys
through the center of the target station, where all guns can conveniently shoot
them at the same time :|

## Attacking K and I class Xenon ships

Key to killing these when flying a ship solo is speed, to keep out of the range
of their guns.

My personal favorite is the Rattlesnake, modded for better thrust (possible to fly
backwards faster too) and increased range on the main guns.

These mods will make it possible:

- Thrust mod.
- Main guns projectile lifetime mod.
- Large plasma turrets with projectile lifetime mode.
- Drag or mass mod.

If at all possible, attack the Xenon from behind, or from the side. They turn
very slowly, and will not be able to use their top speed to close the distance.
It makes them a lot easier to hit by the plasma turrets as well, whose projectiles
fly very slowly.

### Blind spots

If you are feeling adventurous, these ships can even be killed with an M class
ship. They have a blind spot right on top, so if you can get there avoiding their
fire, it is possible to take them down, a bit slowly, but in relative safety if you
manage the keep that position.

I have done this several times now in a modded Kurokami. I usually wait for the
ship to be otherwise engaged, so there is a bit less incoming fire while
approaching it.

## Abbreviations

- PHQ: Player Headquarters Station
- OOS: "Out Of System", moving the player outside their own ship's systems for easier navigation

## Defending, patrolling and policing sectors

### Ship choice: Rattlesnake

If possible, use Rattlesnake destroyers as sector defenders.

- Marauders often use Rattlesnakes themselves
- The other destroyers are too slow compared to Rattlesnakes
- Smaller ships will get destroyed too easily
- No need for whole fleets, single ships are enough
- Carriers are overkill, and fighters will get killed regardless

> I used some "Syn" destroyers for patrolling: they got shot down
  by Rattlesnake pirates, being way too slow.

## Claiming sectors

- Destroy all existing admin centers (even allies)
- Create a plot
- Start with the admin center module (get the blueprint from a faction with +20 rep)
- Add at least a docking module. Everything else is optional.
- No workforce is needed, if there are no production modules

> As long as the admin center is the first module built, the station will be
  considered a defense station, even if you turn it into a factory later.

## Locking down an enemy stargate

In one of my games, three entire sectors were overrun by Xenon, and a steady stream of ships was pouring forth from
the so le stargate that led there (Company Regard). To close it down, I placed a fleet of destroyers directly on the
gate exit:

1. Build about 10-12 destroyers
2. Use "Protect position" individually near the gate
3. Set the range to 14 km
4. Avoid the player being on grid in the system

This will catch everything except the scouts, which can't do any real damage. All the Xenon K and even Xenon I
ships go down with this setup, leaving enough time to build an invasion fleet.

### Gate defense stations

Building a defense station right on a stargate can replace the fleet of destroyers.

- Create a plot as close to the stargate as possible (won't allow right next to it).
- Increase the size of the created plot to include the stargate.
- Now it's possible to build right next to the stargate.
- Build a station with at least 10 defensive modules.
- If you intend to play on grid, make sure your defense modules point towards the gate (turn them to face the gate).
- To handle K and I class ships, more guns is better.
- Keep a fleet of frigates close to mop up any fast stragglers that make it through.

## Conquering enemy sectors

Basically, locking down the stargates (see above) to cut off supply lines, and then slowly
destroying all enemy stations (see "Attacking stations").

1. Lock down the exit stargate
2. Move a fleet to the entry stargate
3. Let the enemy fleets be mowed down by the fleet
4. Attack the stations

If there are several incoming stargates in the target system, do steps 1-3, then put
a fleet on both incoming stargates.

## Station building

When building stations, one key factor is workforce. Having too many people is
worse than not having enough. Example: if requiring 2000 workers, having 1800
is better than 2200.

- Use the [Station Calculator][] to simulate the build.
- Make it as close to 100% workforce usage as possible.
- Ideally, everything should be in the green(*) starting at ~10% workforce.

* Profit as well as all production modules, raw resources like ore excluded.

### The production trading station

#### Centralizing ware distribution

It actually makes sense to start with a trading station before you even start
building production stations, to handle raw resources like ore and gases.
The reason for this is simple: Miners assigned to a production station will
not sell the surplus anywhere, unlike trading ships that sell surplus food
for example. Once the storage is full, they will sit idle.

> Your miners will tell you that they found no buyers. I always wondered why
  they won't just sell to NPC stations. In fact, they have only a single
  buyer - their station manager.

The idea is to have your trading station handle all raw resource deliveries
to your production stations instead. This way the mining ships will not sit
idle, and you need less of them overall. Granted, ore trading ships are
required instead.

#### Building the trading station

A trading station is really simple to build:

- Multiple piers
- Multiple docks
- Storage modules for all types

> Do not add any production modules at all, it would confuse the station
  manager.

#### Trade ships setup

Since it is not only for trading processed wares, the station will need
a diverse set of trading ships and miners.

- Assign miners for all solids and liquids.
- Assign mineral traders.
- Assign liquid traders.
- Assign container traders.

The basic principle:

- Large mining ships to gather resources.
- Medium traders to distribute them.
- A few large traders for bigger material orders.

The medium traders will ony trade locally between your stations.
Once the production station's storages are topped up, they will
only have to transfer small amounts, so large traders would be
wasted. Only a few large ones will help with initial resource
orders when a new production station is built.

> Regarding piracy, since the medium trading ships will only
  trade between your stations in-system, they are a lot less
  exposed to piracy.

#### How many trade ships?

Not that easy to answer. It has always been more than I expected
to need in my experience. As a rule of thumb, I use this:

- 1x large miner per station per resource
- 6x medium traders per station per resource

> As an example, in my last playthrough, my HQ's terraforming
  trade station had 140 medium traders and 30 large miners
  assigned to it. This handled production stations for everything
  from raw resources, refined resources to processed wares.

The best is to observe what happens over time. A few guidelines:

- The trading station's ore storage is not filling up? You need
  more miners.
- A production station's ore storage is empty? If the trading
  station's ore storage is good, you need more ore trading ships.
- The Advanced Electronics storage is empty or very low? You
  are probably not producing enough of it.

#### Commodities setup

Since the trading station will only be used to distribute wares
between your own stations, you can go ahead and configure the
station for all wares you plan to have production stations for,
plus ores and basic resources like water and foodstuffs.

> Remember to restrict the buy and sell orders to your faction.

The buy offer should be set to the maximum price, and the sell
offer to the lowest price. This guarantees that your traders will
prefer the trading station for all wares.

> Adding all wares is actually a great way to see what wares you
  don't control yourself, as those storages won't fill up at all.
  In one playthrough, it helped me to notice that I had forgotten
  to build a Microchip production station for example.

#### Selling surplus

Once your trading station is running stable, you can try to make
wares that you have enough of available to all factions, by not
restricting the sell offer. The price can be automatic, since
you are still buying only from your faction. Any sales will make
a profit.

You have to keep an eye on these wares to avoid shortages in your
stations, but it's a great way to make some money passively.

### Production stations

### Building principles

#### Dependent stations

They rely on a trade station or NPC traders to provide all the
wares they need. They typically only include the workforce and
the target production module(s). The NPC stations are almost
all built this way.

- [+] Very simple to build.
- [+] Cheap.
- [-] Very susceptible to ware shortages.
- [-] A single ware shortage can stop production.

#### Independent stations  

They include the workforce, and the whole chain of productions
from food and intermediary products to the final product.

- [+] Impervious to market fluctuations.
- [+] Easy to extend.
- [+] Injects surplus back into the market.
- [-] Complexity of the builds (saving plans is your friend).
- [-] Expensive.
- [-] Requires a lot of ships.  
- [-] Idle miners once storage is full.

#### Hybrid stations  

Built like independent stations, but relying on a trading station
to provide all needed wares.

- [+] Best use of resources.
- [+] Resistant to market fluctuations.
- [+] Easier ship management.
- [+] Injects surplus back into the market.
- [-] Complexity of the builds.
- [-] Expensive.

#### Which type to use?

From experience, single stations or small clusters of stations
without a trading station to support them should be built to be
independent.

If a trading station is present though, the dependent version can
be used. Personally I prefer the hybrid variant, because it makes
the market stronger overall (through the surplus wares from their
variety of productions). They require a lot less micromanagement
once they are up and running.

### Finding markets

> As a general rule, do not worry about the market too much, your goods will
  be bought wherever you build your station.

Still, it can be beneficial to check if there are sectors that lack specific
component factories. A good example is ship building parts: In sectors with a
wharf or shipyard, check if there are factories for Hull Parts, Engine Parts
and Shield Components. If not, you have guaranteed regular customers for
matching factories.

To find out which products stations build, the easiest is to check out the
station's trade offers. Otherwise, fly over to the station and scan it to
identify the production modules that it uses.

[Station Calculator]: http://www.x4-game.com/#/station-calculator

[blueprint-ids.md]: https://github.com/Mistralys/x4-game-notes/blob/main/blueprint-ids.md
[blueprint-ids.xml]: https://raw.githubusercontent.com/Mistralys/x4-game-notes/main/blueprint-ids.xml
[Getting the Erlking]: #getting-the-erlking-battleship

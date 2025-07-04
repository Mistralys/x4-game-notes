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
- Match target speed: `SHIFT+X`
- Mouse steering (toggle): `SHIFT+Space`
- Mouse steering (manual): `Hold Left Mouse + Move`
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

> Match target speed: `SHIFT+X`

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

See [cheats-savegame-editing.md][] for a primer on how to edit savegames.

# Knowledgebase

## Long range scanning

Switch to scan mode with `Shift + 3`, then press `L` for a short while (secondary weapon button). Has to be timed right: if the key press is too short or too long, it will not work. If it works, a blue pulse will shoot out from the ship.

> The pulse is not visible on the map, only from the ship's cockpit.

Items detected by the scan will display colored pulse hits in space.

- Yellow: Lockboxes
- Blue: Wrecks with contents, data vaults
- Gray: Asteroids, empty wrecks, stations

## Khaa'k presence

The Khaa'k hives only spawn in a predefined set of sectors. This knowledge makes it a bit easier to handle them, as you can avoid them or set up defenses as necessary.

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

See [getting-the-erlking.md][] for a detailed guide on ways to get the Erlking battleship.

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

### From your spacesuit

- Approach the abandoned ship.
- Hop into your spacesuit.
- Enable scan mode with `SHIFT+2`.
- Find and approach the ship's spacesuit boarding hatch.
- There will be a signal leak next to the hatch somewhere.
- Scan the leak, and the ship is yours.
- Board and pilot the ship, or assign it a pilot.

### With marines on your own ship

- Pilot a ship with at least one marine on board.
- Approach the abandoned ship.
- Target it and right-click > "Claim".

A boarding drone will slowly approach the ship, breach it, and take it over.

> Get close to the target ship, as the boarding drone is really slow.
  In some cases, the target ship will take a little damage (the crew
  of the ship sabotaging it, and/or the marine's breaching charges).

### With marines on another of your ships 

Let one of your NPC controlled ships do it:

- Open the map.
- Select a ship with at least one marine on board.
- Tell the ship to follow the target ship.
- Once your ship is close, select it.
- Right-click the abandoned ship, select "Claim".

> There is no command to entirely automate the process. 
> The ship has to get close to the target first.

### Claiming Xenon ships

The Xenon will also occasionally abandon their ships. However, they cannot
be claimed with marines. If you send marines over, they will disappear and
the ship will still not belong to you.

You must claim them yourself from your spacesuit.

> I believe this is because Xenon ships already have an AI pilot on board.
> Checking the ship's information will show that the ship already has a
> pilot.

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

Please see [station-building.md][].

## Ship Production Chain

Please see [ship-production-chain.md][].



[blueprint-ids.xml]: /blueprint-ids.xml
[modparts.xml]: /modparts.xml
[inventory-items.xml]: /inventory-items.xml
[ship-production-chain.md]: /ship-production-chain.md
[cheats-savegame-editing.md]: /cheats-savegame-editing.md
[station-building.md]: /station-building.md
[getting-the-erlking.md]: /getting-the-erlking.md
[x4-core]: https://github.com/Mistralys/x4-core

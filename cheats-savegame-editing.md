# Cheats and savegame editing

## Where to find the savegames?

X4 saves games under `Documents\Egosoft\X4\70814229\save`.

The savegames are `.xml` files that are compressed in `.gz` files
by default, so you will need to extract them first. 

## After modifying savegames

- Delete the `.gz` file and leave the `.xml` file.
- _OR_
- Replace the `.xml` file in the archive to save disk space.

## Which editor for XML files?

The large XML files can be a challenge to open or edit, even on higher end machines.
Notepad++ is one often recommended, but personally it had trouble with my 1.2 GB save
files. What worked best for me is the commercial UltraEdit, especially when searching
or even to collapse XML tags.

## Editing player money

- Save your game and note the amount of money in your account.
- Replace all occurrences of the amount in the file.

These are the texts to search for and replace:

```
money="xxxx"
]" amount="xxxx"/>  (to find <account id="[???]" amount="xxxx">)
<stat id="money_player" value="xxxx"/>
```

Where `xxxx` is the amount of money.

*It's important to replace them all*, otherwise
the change will not be applied correctly.

> Background: What you are replacing are individual station / ship accounts.

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

This sets your reputation to `+9`, just before the switch to `+10`, to trigger the
faction's military license reward.

Example values:

- `0.001` +1
- `0.011` +11

## Editing blueprints

The following is a full list of blueprints that I extracted directly from the game
files using my [x4-core][] tool. They go below the `<blueprints>` tag in the XML
structure (there is only one, so it's straightforward to find).

See the file [blueprint-ids.xml][] for a full list of blueprints ready to copy and paste.

> The really cool thing is that it is even possible to make the Astrid and the Erlking
> buildable at player stations by adding their blueprints (for the Erlking, see [getting-the-erlking.md][]).

## Editing the player inventory

NPCs have `<inventory>` tags just like the player, so the easiest
way to find the player's inventory is to search for the player
component. The inventory is nested in here.

Search for the following:

`class="player"`

Once you find it, add any of the `<ware>` tags you want below
the `<inventory>` tag.

### Modding parts

These are all known parts that are used for modding ships:

[modparts.xml][]

### Items and crafting resources

These are other inventory items used for crafting, as well as the
objects the player can use, like the repair laser for the space suit.

[inventory-items.xml][]


## Online documentation

- Primer on editing, and lots of details: https://forum.egosoft.com/viewtopic.php?t=350404
- XML structure details: https://www.reddit.com/r/X4Foundations/comments/thjbik/how_to_read_save_file/
- Example savegame XML snippets: [savegame-xml folder](/savegame-xml)



[blueprint-ids.xml]: /blueprint-ids.xml
[modparts.xml]: /modparts.xml
[inventory-items.xml]: /inventory-items.xml
[ship-production-chain.md]: /ship-production-chain.md
[cheats-savegame-editing.md]: /cheats-savegame-editing.md
[station-building.md]: /station-building.md
[getting-the-erlking.md]: /getting-the-erlking.md
[x4-core]: https://github.com/Mistralys/x4-core

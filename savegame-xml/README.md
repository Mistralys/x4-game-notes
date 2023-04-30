# X4 Savegame XML structure

The savegame files are typically stored in _Documents > Egosoft > X4 > {Player ID} > save_.

They are `.gz` compressed files to keep the file size in check, as they can easily become
several gigabytes in size (their size increases over time as more objects and data is stored).

## Available example files

> These were extracted from a long running game made with all expansions, including the the 
  Kingdom's End expansion, which weighed ~1.2 GB. Some files have had their data cut down
  to keep them readable (especially the logs).

- [Global XML structure](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure.xml)
- [Station](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-station.xml)
- [Khaak Hive station](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-station-khaak-hive.xml)
- [Factions](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-factions.xml)
- [Event log](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-log.xml)
- [Message log](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-messages.xml)
- [Missions](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-missions.xml)
- [Savegame info](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-savegame-info.xml)
- [S-size Ship (transport)](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-ship-s-transport.xml)
- [Player statistics](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-statistics.xml)
- [Satellites](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-satellite.xml)
- [Economy log](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-economylog.xml)
- [Build storages](https://github.com/Mistralys/x4-game-notes/blob/main/savegame-xml/structure-build-storages.xml)

## Notable tag paths

Base path for all items in the galaxy:

``` 
savegame.universe.component[class="galaxy"].connections
```

- Clusters
  `{galaxy}.connection{+}.component[class="cluster"]{+}`
- Sectors
  `{cluster}.connections.connection{+}.component[class="sector"]`
- Regions
  `{cluster}.connections.connection{+}.component[class="region"]` 
  

### Path syntax legend

- `[attribute="value"]` Match items with a specific attribute value.
- `{+}` Multiple items possible to iterate over
- `{galaxy}` Placeholder: The base path to access galaxy data.
- `{cluster}` Placeholder: The path to a specific cluster.

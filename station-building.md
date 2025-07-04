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

### Selling surplus

#### A) Opening NPC sales

Once your trading station is running stable, you can try to make
wares that you have enough of available to all factions, by not
restricting the sell offer. The price can be automatic, since
you are still buying only from your faction. Any sales will make
a profit.

> You have to keep an eye on these wares to avoid shortages in your
> stations, but it's a great way to make some money passively.

#### B) The Surplus Trade Hub

This is the best way to safely sell only what you produce too much of.

- Build a second trading station right next to the first one
- Set the buy prices just a little below the main trade hub (only your faction)
- Set the sell price to automatic (all factions)

What this will do: When the storage for wares is full in the main trade 
hub, it will no longer buy those wares. The surplus trade hub, being right
next to the main hub, will then be used by your traders as the better 
alternative.

Additionally, because the surplus trade hub sells its wares at a higher 
price, your traders will not buy their wares from it.

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

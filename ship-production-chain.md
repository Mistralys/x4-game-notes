# Ship Production Chain

This details the chain of products required to build ships in X4: Foundations.
It assumes that you want to build up the whole production chain yourself, 
without relying on NPC production stations.

## 0. Structuring Your Station Plots

I found that the most efficient way to set up my station plots comes from the
core logistics: All production stations get their resources from the trade hub,
so the hub should ideally be equidistant from all production stations.

In essence, you can build in rings around the trade hub, ensuring that the 
shipping lanes do not overlap each other (not relevant when you are OOS, but 
if you are on-grid, mayhem ^^).

```
   P P P P 
 P         P
P     T     P
 P         P
   P P P P 
```

## 1. Refinery Station

This is the heart of your industry: It collects ores and gases, and produces all 
refined resources. It's very efficient to have all your miners assigned to a single 
refinery, because ore and gas miners will be able to prioritize which resources to 
mine, even mining several types at once.

### Required Storage

- Solid (Silicon, Ore) 
- Liquid (Hydrogen, Methane, Helium)
- Container (Refined resouces)

### Products

- Antimatter Cells (Hydrogen)
- Silicon Wafers (Silicon)
- Graphene (Methane)
- Superfluid Coolant (Helium)
- Refined Metals (Ore)

### Scaling up

At some point, the size of your refinery may become troublesome to keep expanding.
In this case, building a second refinery can be a good solution.

## 2. Tier 1 production

These wares are easy to produce, as they only require refined 
resources to produce.

### Engine Parts

- Requires: Antimatter Cells, Refined Metals

### Microchips

- Requires: Silicon Wafers

### Scanning Array

- Requires: Refined Metals, Silicon Wafers 

### Advanced Composites

- Requires: Graphene, Refined Metals

### Hull Parts

- Requires: Graphene, Refined Metals

### Quantum Tubes

- Requires: Graphene, Superfluid Coolant

### Plasma Conductors

- Requires: Graphene, Superfluid Coolant

### Smart Chips

- Requires: Silicon Wafers

## 3. Tier 2 production

These wares require two or more tier 1 wares to produce.

### Antimatter Converters

- Requires: Advanced Composites, Microchips 

### Advanced Electronics

- Requires: Microchips, Quantum Tubes

### Missile Components

- Requires: Advanced Composites, Hull Parts

### Weapon Components

- Requires: Hull Parts, Plasma Conductors

### Field Coils

- Requires: Quantum Tubes, Plasma Conductors

### Shield Components

- Requires: Plasma Conductors, Quantum Tubes

### Claytronics

- Requires: Hull Parts, Quantum Tubes, Antimatter Cells

### Turret Components

- Requires: Scanning Array, Quantum Tubes, Microchips

### Drone Components

- Requires: Microchips, Scanning Array, Hull Parts, Engine Parts


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

## Savegame editing

Primer on editing, and lots of details:

https://forum.egosoft.com/viewtopic.php?t=350404

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
]" amount="xxxx"/>  (to find <account id="[???]" amount="xxxx">)
<stat id="money_player" value="xxxx"/>
```

Where `xxxx` is the amount of money. 



It's important to replace them all, otherwise
the change will not be applied correctly.

## Faction relations

Faction relations are defined by the following numerical ranges:

- Self: 1.0 to 1.0
- Member: 0.1 to 1.0
- Friend: 0.01 to 1.0
- Neutral: -0.01 to 0.01
- Enemy: -1.0 to -0.01
- Kill military: -1.0 to -0.1
- Kill: -1.0 to -0.32
- Nemesis: -1.0 to -1.0

Reputations from -0.1 to -0.31 result in fighting only the military. At -0.32 to -1 they kill everything. This means that the AI factions that are "at war" at -0.1 will already kill military ships on sight.

## Player reputation

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

## Blueprints

These go below the `<blueprints>` tag in the file (there is only one, so it's easy to find).

### Common / General

#### Production

```xml
<blueprint ware="module_gen_prod_energycells_01"/>
<blueprint ware="module_gen_prod_advancedcomposites_01"/>
<blueprint ware="module_gen_prod_advancedelectronics_01"/>
<blueprint ware="module_gen_prod_antimattercells_01"/>
<blueprint ware="module_gen_prod_antimatterconverters_01"/>
<blueprint ware="module_gen_prod_claytronics_01"/>
<blueprint ware="module_gen_prod_dronecomponents_01"/>
<blueprint ware="module_gen_prod_engineparts_01"/>
<blueprint ware="module_gen_prod_fieldcoils_01"/>
<blueprint ware="module_gen_prod_graphene_01"/>
<blueprint ware="module_gen_prod_hullparts_01"/>
<blueprint ware="module_gen_prod_microchips_01"/>
<blueprint ware="module_gen_prod_missilecomponents_01"/>
<blueprint ware="module_gen_prod_plasmaconductors_01"/>
<blueprint ware="module_gen_prod_quantumtubes_01"/>
<blueprint ware="module_gen_prod_refinedmetals_01"/>
<blueprint ware="module_gen_prod_scanningarrays_01"/>
<blueprint ware="module_gen_prod_shieldcomponents_01"/>
<blueprint ware="module_gen_prod_siliconwafers_01"/>
<blueprint ware="module_gen_prod_smartchips_01"/>
<blueprint ware="module_gen_prod_spices_01"/>
<blueprint ware="module_gen_prod_superfluidcoolant_01"/>
<blueprint ware="module_gen_prod_turretcomponents_01"/>
<blueprint ware="module_gen_prod_water_01"/>
<blueprint ware="module_gen_prod_weaponcomponents_01"/>
```

#### Missiles

```xml
<blueprint ware="missile_cluster_heavy_mk1"/>
<blueprint ware="missile_cluster_light_mk1"/>
<blueprint ware="missile_dumbfire_heavy_mk1"/>
<blueprint ware="missile_dumbfire_heavy_mk2"/>
<blueprint ware="missile_dumbfire_light_mk1"/>
<blueprint ware="missile_dumbfire_light_mk2"/>
<blueprint ware="missile_emp_mk1"/>
<blueprint ware="missile_guided_heavy_mk1"/>
<blueprint ware="missile_guided_light_mk1"/>
<blueprint ware="missile_heatseeker_heavy_mk1"/>
<blueprint ware="missile_heatseeker_light_mk1"/>
<blueprint ware="missile_smart_heavy_mk1"/>
<blueprint ware="missile_smart_light_mk1"/>
<blueprint ware="missile_swarm_heavy_mk1"/>
<blueprint ware="missile_swarm_light_mk1"/>
<blueprint ware="missile_torpedo_heavy_mk1"/>
<blueprint ware="missile_torpedo_light_mk1"/>
```

#### Modifications

```xml
<blueprint ware="mod_engine_boostduration_01_mk1"/>
<blueprint ware="mod_engine_boostshielddrain_01_mk1"/>
<blueprint ware="mod_engine_boostthrust_01_mk1"/>
<blueprint ware="mod_engine_boostthrust_01_mk2"/>
<blueprint ware="mod_engine_boostthrust_01_mk3"/>
<blueprint ware="mod_engine_boostthrust_02_mk1"/>
<blueprint ware="mod_engine_boostthrust_02_mk2"/>
<blueprint ware="mod_engine_forwardthrust_01_mk1"/>
<blueprint ware="mod_engine_forwardthrust_01_mk2"/>
<blueprint ware="mod_engine_forwardthrust_01_mk3"/>
<blueprint ware="mod_engine_forwardthrust_02_mk1"/>
<blueprint ware="mod_engine_forwardthrust_02_mk2"/>
<blueprint ware="mod_engine_rotationthrust_01_mk1"/>
<blueprint ware="mod_engine_rotationthrust_01_mk3"/>
<blueprint ware="mod_engine_rotationthrust_02_mk1"/>
<blueprint ware="mod_engine_strafethrust_01_mk1"/>
<blueprint ware="mod_engine_strafethrust_02_mk1"/>
<blueprint ware="mod_engine_travelattacktime_01_mk1"/>
<blueprint ware="mod_engine_travelchargetime_01_mk1"/>
<blueprint ware="mod_engine_travelreleasetime_01_mk1"/>
<blueprint ware="mod_engine_travelstartthrust_01_mk1"/>
<blueprint ware="mod_engine_travelthrust_01_mk1"/>
<blueprint ware="mod_engine_travelthrust_01_mk2"/>
<blueprint ware="mod_engine_travelthrust_01_mk3"/>
<blueprint ware="mod_engine_travelthrust_02_mk1"/>
<blueprint ware="mod_engine_travelthrust_02_mk2"/>
<blueprint ware="mod_shield_capacity_01_mk1"/>
<blueprint ware="mod_shield_capacity_01_mk2"/>
<blueprint ware="mod_shield_capacity_01_mk3"/>
<blueprint ware="mod_shield_capacity_02_mk3"/>
<blueprint ware="mod_shield_rechargedelay_01_mk1"/>
<blueprint ware="mod_shield_rechargerate_01_mk1"/>
<blueprint ware="mod_shield_rechargerate_01_mk2"/>
<blueprint ware="mod_shield_rechargerate_01_mk3"/>
<blueprint ware="mod_ship_countermeasurecapacity_01_mk1"/>
<blueprint ware="mod_ship_deployablecapacity_01_mk1"/>
<blueprint ware="mod_ship_drag_01_mk1"/>
<blueprint ware="mod_ship_drag_01_mk2"/>
<blueprint ware="mod_ship_mass_01_mk1"/>
<blueprint ware="mod_ship_mass_01_mk2"/>
<blueprint ware="mod_ship_mass_01_mk3"/>
<blueprint ware="mod_ship_maxhull_01_mk1"/>
<blueprint ware="mod_ship_missilecapacity_01_mk1"/>
<blueprint ware="mod_ship_radarrange_01_mk1"/>
<blueprint ware="mod_ship_unitcapacity_01_mk1"/>
<blueprint ware="mod_weapon_beamlength_01_mk1"/>
<blueprint ware="mod_weapon_chargetime_01_mk1"/>
<blueprint ware="mod_weapon_cooling_01_mk1"/>
<blueprint ware="mod_weapon_cooling_01_mk2"/>
<blueprint ware="mod_weapon_cooling_02_mk1"/>
<blueprint ware="mod_weapon_cooling_02_mk2"/>
<blueprint ware="mod_weapon_cooling_03_mk1"/>
<blueprint ware="mod_weapon_cooling_03_mk2"/>
<blueprint ware="mod_weapon_cooling_04_mk2"/>
<blueprint ware="mod_weapon_cooling_05_mk2"/>
<blueprint ware="mod_weapon_damage_01_mk1"/>
<blueprint ware="mod_weapon_damage_01_mk2"/>
<blueprint ware="mod_weapon_damage_01_mk3"/>
<blueprint ware="mod_weapon_damage_02_mk1"/>
<blueprint ware="mod_weapon_damage_02_mk2"/>
<blueprint ware="mod_weapon_damage_02_mk3"/>
<blueprint ware="mod_weapon_damage_03_mk1"/>
<blueprint ware="mod_weapon_damage_03_mk2"/>
<blueprint ware="mod_weapon_damage_04_mk2"/>
<blueprint ware="mod_weapon_damage_05_mk2"/>
<blueprint ware="mod_weapon_lifetime_01_mk1"/>
<blueprint ware="mod_weapon_mining_01_mk1"/>
<blueprint ware="mod_weapon_mining_01_mk3"/>
<blueprint ware="mod_weapon_reload_01_mk1"/>
<blueprint ware="mod_weapon_rotationspeed_01_mk1"/>
<blueprint ware="mod_weapon_speed_01_mk1"/>
<blueprint ware="mod_weapon_speed_01_mk3"/>
<blueprint ware="mod_weapon_sticktime_01_mk1"/>
<blueprint ware="mod_weapon_sticktime_01_mk2"/>
<blueprint ware="mod_weapon_sticktime_02_mk2"/>
<blueprint ware="mod_weapon_sticktime_03_mk2"/>
```

### Argon

#### Modules

```xml
<blueprint ware="module_arg_dock_m_01"/>
<blueprint ware="module_arg_dock_m_01_hightech"/>
<blueprint ware="module_arg_dock_m_01_lowtech"/>
<blueprint ware="module_arg_dock_m_02"/>
<blueprint ware="module_arg_dock_m_02_hightech"/>
<blueprint ware="module_arg_dock_m_02_lowtech"/>
<blueprint ware="module_arg_conn_base_01"/>
<blueprint ware="module_arg_conn_base_02"/>
<blueprint ware="module_arg_conn_base_03"/>
<blueprint ware="module_arg_conn_cross_01"/>
<blueprint ware="module_arg_conn_vertical_01"/>
<blueprint ware="module_arg_conn_vertical_02"/>
<blueprint ware="module_arg_def_claim_01"/>
<blueprint ware="module_arg_def_disc_01"/>
<blueprint ware="module_arg_def_tube_01"/>
<blueprint ware="module_arg_hab_l_01"/>
<blueprint ware="module_arg_hab_m_01"/>
<blueprint ware="module_arg_hab_s_01"/>
<blueprint ware="module_arg_pier_l_01"/>
<blueprint ware="module_arg_pier_l_02"/>
<blueprint ware="module_arg_pier_l_03"/>
<blueprint ware="module_arg_prod_foodrations_01"/>
<blueprint ware="module_arg_prod_meat_01"/>
<blueprint ware="module_arg_prod_medicalsupplies_01"/>
<blueprint ware="module_arg_prod_spacefuel_01"/>
<blueprint ware="module_arg_prod_wheat_01"/>
<blueprint ware="module_arg_stor_container_l_01"/>
<blueprint ware="module_arg_stor_container_m_01"/>
<blueprint ware="module_arg_stor_container_s_01"/>
<blueprint ware="module_arg_stor_liquid_l_01"/>
<blueprint ware="module_arg_stor_liquid_m_01"/>
<blueprint ware="module_arg_stor_liquid_s_01"/>
<blueprint ware="module_arg_stor_solid_l_01"/>
<blueprint ware="module_arg_stor_solid_m_01"/>
<blueprint ware="module_arg_stor_solid_s_01"/>
```

#### Turrets

```xml
<blueprint ware="turret_arg_l_beam_01_mk1"/>
<blueprint ware="turret_arg_l_dumbfire_01_mk1"/>
<blueprint ware="turret_arg_l_guided_01_mk1"/>
<blueprint ware="turret_arg_l_laser_01_mk1"/>
<blueprint ware="turret_arg_l_mining_01_mk1"/>
<blueprint ware="turret_arg_l_plasma_01_mk1"/>
<blueprint ware="turret_arg_m_beam_01_mk1"/>
<blueprint ware="turret_arg_m_beam_02_mk1"/>
<blueprint ware="turret_arg_m_dumbfire_01_mk1"/>
<blueprint ware="turret_arg_m_dumbfire_02_mk1"/>
<blueprint ware="turret_arg_m_gatling_01_mk1"/>
<blueprint ware="turret_arg_m_gatling_02_mk1"/>
<blueprint ware="turret_arg_m_guided_01_mk1"/>
<blueprint ware="turret_arg_m_guided_02_mk1"/>
<blueprint ware="turret_arg_m_laser_01_mk1"/>
<blueprint ware="turret_arg_m_laser_02_mk1"/>
<blueprint ware="turret_arg_m_mining_01_mk1"/>
<blueprint ware="turret_arg_m_mining_02_mk1"/>
<blueprint ware="turret_arg_m_plasma_01_mk1"/>
<blueprint ware="turret_arg_m_plasma_02_mk1"/>
<blueprint ware="turret_arg_m_shotgun_01_mk1"/>
<blueprint ware="turret_arg_m_shotgun_02_mk1"/>
```

#### Shields

```xml
<blueprint ware="shield_arg_l_standard_01_mk1"/>
<blueprint ware="shield_arg_l_standard_01_mk2"/>
<blueprint ware="shield_arg_m_standard_01_mk1"/>
<blueprint ware="shield_arg_m_standard_01_mk2"/>
<blueprint ware="shield_arg_m_standard_02_mk1"/>
<blueprint ware="shield_arg_m_standard_02_mk2"/>
<blueprint ware="shield_arg_s_standard_01_mk1"/>
<blueprint ware="shield_arg_s_standard_01_mk2"/>
<blueprint ware="shield_arg_s_standard_01_mk3"/>
<blueprint ware="shield_arg_xl_standard_01_mk1"/>
```



### Paranid

#### Modules

```xml
<blueprint ware="module_par_pier_l_01"/>
<blueprint ware="module_par_stor_container_s_01"/>
<blueprint ware="module_par_conn_base_01"/>
<blueprint ware="module_par_conn_cross_01"/>
<blueprint ware="module_par_conn_vertical_01"/>
<blueprint ware="module_par_prod_sojabeans_01"/>
<blueprint ware="module_par_conn_base_02"/>
<blueprint ware="module_par_conn_base_03"/>
<blueprint ware="module_par_conn_cross_02"/>
<blueprint ware="module_par_conn_cross_03"/>
<blueprint ware="module_par_conn_vertical_02"/>
<blueprint ware="module_par_def_claim_01"/>
<blueprint ware="module_par_def_disc_01"/>n
<blueprint ware="module_par_def_tube_01"/>
<blueprint ware="module_par_hab_l_01"/>
<blueprint ware="module_par_hab_m_01"/>
<blueprint ware="module_par_hab_s_01"/>
<blueprint ware="module_par_pier_l_02"/>
<blueprint ware="module_par_pier_l_03"/>
<blueprint ware="module_par_prod_majadust_01"/>
<blueprint ware="module_par_prod_majasnails_01"/>
<blueprint ware="module_par_prod_medicalsupplies_01"/>
<blueprint ware="module_par_prod_sojahusk_01"/>
<blueprint ware="module_par_stor_container_l_01"/>
<blueprint ware="module_par_stor_container_m_01"/>
<blueprint ware="module_par_stor_liquid_l_01"/>
<blueprint ware="module_par_stor_liquid_s_01"/>
<blueprint ware="module_par_stor_liquid_m_01"/>
<blueprint ware="module_par_stor_solid_l_01"/>
<blueprint ware="module_par_stor_solid_s_01"/>
<blueprint ware="module_par_stor_solid_m_01"/>
```

#### Turrets

```xml
<blueprint ware="turret_par_l_beam_01_mk1"/>
<blueprint ware="turret_par_l_dumbfire_01_mk1"/>
<blueprint ware="turret_par_l_guided_01_mk1"/>
<blueprint ware="turret_par_l_laser_01_mk1"/>
<blueprint ware="turret_par_l_mining_01_mk1"/>
<blueprint ware="turret_par_l_plasma_01_mk1"/>
<blueprint ware="turret_par_m_beam_01_mk1"/>
<blueprint ware="turret_par_m_beam_02_mk1"/>
<blueprint ware="turret_par_m_dumbfire_01_mk1"/>
<blueprint ware="turret_par_m_dumbfire_02_mk1"/>
<blueprint ware="turret_par_m_gatling_01_mk1"/>
<blueprint ware="turret_par_m_gatling_02_mk1"/>
<blueprint ware="turret_par_m_guided_01_mk1"/>
<blueprint ware="turret_par_m_guided_02_mk1"/>
<blueprint ware="turret_par_m_laser_01_mk1"/>
<blueprint ware="turret_par_m_laser_02_mk1"/>
<blueprint ware="turret_par_m_mining_01_mk1"/>
<blueprint ware="turret_par_m_mining_02_mk1"/>
<blueprint ware="turret_par_m_plasma_01_mk1"/>
<blueprint ware="turret_par_m_plasma_02_mk1"/>
<blueprint ware="turret_par_m_shotgun_01_mk1"/>
<blueprint ware="turret_par_m_shotgun_02_mk1"/>
```

#### Shields

```xml 
<blueprint ware="shield_par_l_standard_01_mk1"/>
<blueprint ware="shield_par_l_standard_01_mk2"/>
<blueprint ware="shield_par_m_standard_01_mk1"/>
<blueprint ware="shield_par_m_standard_01_mk2"/>
<blueprint ware="shield_par_m_standard_02_mk1"/>
<blueprint ware="shield_par_m_standard_02_mk2"/>
<blueprint ware="shield_par_s_standard_01_mk1"/>
<blueprint ware="shield_par_s_standard_01_mk2"/>
<blueprint ware="shield_par_s_standard_01_mk3"/>
<blueprint ware="shield_par_xl_standard_01_mk1"/>
```

### Teladi

#### Modules

```xml
<blueprint ware="module_tel_conn_base_01"/>
<blueprint ware="module_tel_conn_base_02"/>
<blueprint ware="module_tel_conn_base_03"/>
<blueprint ware="module_tel_conn_cross_01"/>
<blueprint ware="module_tel_conn_vertical_01"/>
<blueprint ware="module_tel_conn_vertical_02"/>
<blueprint ware="module_tel_def_claim_01"/>
<blueprint ware="module_tel_def_disc_01"/>n
<blueprint ware="module_tel_def_tube_01"/>
<blueprint ware="module_tel_hab_l_01"/>
<blueprint ware="module_tel_hab_m_01"/>
<blueprint ware="module_tel_hab_s_01"/>
<blueprint ware="module_tel_pier_l_01"/>
<blueprint ware="module_tel_pier_l_02"/>
<blueprint ware="module_tel_pier_l_03"/>
<blueprint ware="module_tel_prod_advancedcomposites_01"/>
<blueprint ware="module_tel_prod_engineparts_01"/>
<blueprint ware="module_tel_prod_hullparts_01"/>
<blueprint ware="module_tel_prod_medicalsupplies_01"/>
<blueprint ware="module_tel_prod_nostropoil_01"/>
<blueprint ware="module_tel_prod_scanningarrays_01"/>
<blueprint ware="module_tel_prod_spaceweed_01"/>
<blueprint ware="module_tel_prod_sunriseflowers_01"/>
<blueprint ware="module_tel_prod_swampplant_01"/>
<blueprint ware="module_tel_prod_teladianium"/>
<blueprint ware="module_tel_stor_container_l_01"/>
<blueprint ware="module_tel_stor_container_s_01"/>
<blueprint ware="module_tel_stor_container_m_01"/>
<blueprint ware="module_tel_stor_liquid_l_01"/>
<blueprint ware="module_tel_stor_liquid_s_01"/>
<blueprint ware="module_tel_stor_liquid_m_01"/>
<blueprint ware="module_tel_stor_solid_l_01"/>
<blueprint ware="module_tel_stor_solid_s_01"/>
<blueprint ware="module_tel_stor_solid_m_01"/>
```

#### Engines

```xml
<blueprint ware="engine_tel_l_allround_01_mk1"/>
<blueprint ware="engine_tel_l_travel_01_mk1"/>
<blueprint ware="engine_tel_m_allround_01_mk1"/>
<blueprint ware="engine_tel_m_allround_01_mk2"/>
<blueprint ware="engine_tel_m_allround_01_mk3"/>
<blueprint ware="engine_tel_m_combat_01_mk1"/>
<blueprint ware="engine_tel_m_combat_01_mk2"/>
<blueprint ware="engine_tel_m_combat_01_mk3"/>
<blueprint ware="engine_tel_m_travel_01_mk1"/>
<blueprint ware="engine_tel_m_travel_01_mk2"/>
<blueprint ware="engine_tel_m_travel_01_mk3"/>
<blueprint ware="engine_tel_s_allround_01_mk1"/>
<blueprint ware="engine_tel_s_allround_01_mk2"/>
<blueprint ware="engine_tel_s_allround_01_mk3"/>
<blueprint ware="engine_tel_s_combat_01_mk1"/>
<blueprint ware="engine_tel_s_combat_01_mk2"/>
<blueprint ware="engine_tel_s_combat_01_mk3"/>
<blueprint ware="engine_tel_s_travel_01_mk1"/>
<blueprint ware="engine_tel_s_travel_01_mk2"/>
<blueprint ware="engine_tel_s_travel_01_mk3"/>
<blueprint ware="engine_tel_xl_allround_01_mk1"/>
<blueprint ware="engine_tel_xl_travel_01_mk1"/>
```

#### Shields

```xml
<blueprint ware="shield_tel_l_standard_01_mk1"/>
<blueprint ware="shield_tel_l_standard_01_mk2"/>
<blueprint ware="shield_tel_m_standard_01_mk1"/>
<blueprint ware="shield_tel_m_standard_01_mk2"/>
<blueprint ware="shield_tel_m_standard_02_mk1"/>
<blueprint ware="shield_tel_m_standard_02_mk2"/>
<blueprint ware="shield_tel_s_standard_01_mk1"/>
<blueprint ware="shield_tel_s_standard_01_mk2"/>
<blueprint ware="shield_tel_s_standard_01_mk3"/>
<blueprint ware="shield_tel_xl_standard_01_mk1"/>
```

#### Turrets

```xml
<blueprint ware="turret_tel_l_beam_01_mk1"/>
<blueprint ware="turret_tel_l_dumbfire_01_mk1"/>
<blueprint ware="turret_tel_l_guided_01_mk1"/>
<blueprint ware="turret_tel_l_laser_01_mk1"/>
<blueprint ware="turret_tel_l_mining_01_mk1"/>
<blueprint ware="turret_tel_l_plasma_01_mk1"/>
<blueprint ware="turret_tel_m_beam_01_mk1"/>
<blueprint ware="turret_tel_m_beam_02_mk1"/>
<blueprint ware="turret_tel_m_dumbfire_02_mk1"/>
<blueprint ware="turret_tel_m_gatling_01_mk1"/>
<blueprint ware="turret_tel_m_gatling_02_mk1"/>
<blueprint ware="turret_tel_m_guided_02_mk1"/>
<blueprint ware="turret_tel_m_laser_01_mk1"/>
<blueprint ware="turret_tel_m_laser_02_mk1"/>
<blueprint ware="turret_tel_m_mining_01_mk1"/>
<blueprint ware="turret_tel_m_mining_02_mk1"/>
<blueprint ware="turret_tel_m_plasma_01_mk1"/>
<blueprint ware="turret_tel_m_plasma_02_mk1"/>
<blueprint ware="turret_tel_m_shotgun_01_mk1"/>
<blueprint ware="turret_tel_m_shotgun_02_mk1"/>
```

#### Weapons

```xml
<blueprint ware="weapon_tel_l_destroyer_01_mk1"/>
<blueprint ware="weapon_tel_m_charge_01_mk1"/>
<blueprint ware="weapon_tel_m_charge_02_mk1"/>
<blueprint ware="weapon_tel_s_charge_01_mk1"/>
<blueprint ware="weapon_tel_s_charge_02_mk1"/>
```

## Player inventory

NPCs have `<inventory>` tags just like the player, so the easiest
way to find the player's inventory is to search for the player
component. The inventory is nested in here.

Search for the following:

`<component class="player"`

Alternatively, search for an item that only the player can have, 
for instance:

`weapon_gen_spacesuit_repairlaser_01_mk1`

### Modding parts

These are all known parts that are used for modding ships.

```xml
<ware ware="modpart_enginefuelinjector_t1" amount="999"/>
<ware ware="modpart_enginefuelinjector_t2" amount="999"/>
<ware ware="modpart_enginefuelinjector_t3" amount="999"/>
<ware ware="modpart_extendedfuelcontainer" amount="999"/>
<ware ware="modpart_highenergycatalyst" amount="999"/>
<ware ware="modpart_nividiumcrystallite" amount="999"/>
<ware ware="modpart_nividiumoxide" amount="999"/>
<ware ware="modpart_shieldgeneratorcoil_t1" amount="999"/>
<ware ware="modpart_shieldgeneratorcoil_t2" amount="999"/>
<ware ware="modpart_shieldgeneratorcoil_t3" amount="999"/>
<ware ware="modpart_shipnanoweave_t1" amount="999"/>
<ware ware="modpart_shipnanoweave_t2" amount="999"/>
<ware ware="modpart_shipnanoweave_t3" amount="999"/>
<ware ware="modpart_tuningsoftware" amount="999"/>
<ware ware="modpart_weaponchamber_t1" amount="999"/>
<ware ware="modpart_weaponchamber_t2" amount="999"/>
<ware ware="modpart_weaponchamber_t3" amount="999"/>
```

### Modding resources

These are additional resources that are used when modding ships.

```xml
<ware ware="inv_advancedtargetingmodule" amount="69"/>
<ware ware="inv_agidevice_01" amount="141"/>
<ware ware="inv_agidevice_02" amount="102"/>
<ware ware="inv_agidevice_03" amount="16"/>
<ware ware="inv_algaescrubber" amount="30"/>
<ware ware="inv_antimatter_injection_sensor" amount="4"/>
<ware ware="inv_argnusteak" amount="45"/>
<ware ware="inv_bandages" amount="25"/>
<ware ware="inv_carbonfilter" amount="29"/>
<ware ware="inv_charged_particle_regulator"/>
<ware ware="inv_crystal_01" amount="11"/>
<ware ware="inv_crystal_02" amount="2"/>
<ware ware="inv_crystal_03" amount="11"/>
<ware ware="inv_crystalbit" amount="19"/>
<ware ware="inv_damagedsingularityengine" amount="23"/>
<ware ware="inv_decryptionmodule" amount="114"/>
<ware ware="inv_encrypted_contract"/>
<ware ware="inv_finemeal" amount="3"/>
<ware ware="inv_firstaidkit"/>
<ware ware="inv_fluxcapacitor" amount="20"/>
<ware ware="inv_hallucinogenics" amount="8"/>
<ware ware="inv_herbicide" amount="4"/>
<ware ware="inv_hydraulicpump" amount="15"/>
<ware ware="inv_interfaceunit" amount="4176"/>
<ware ware="inv_kyondevice_03" amount="2"/>
<ware ware="inv_magneticmaterial" amount="123"/>
<ware ware="inv_majaglit" amount="3345"/>
<ware ware="inv_microgimble" amount="54"/>
<ware ware="inv_micromotor" amount="69"/>
<ware ware="inv_mixedfruit" amount="40"/>
<ware ware="inv_modulartrigger" amount="41"/>
<ware ware="inv_needle" amount="55"/>
<ware ware="inv_programmablefieldarray" amount="255"/>
<ware ware="inv_rapidsandfilter" amount="36"/>
<ware ware="inv_rarespices" amount="131"/>
<ware ware="inv_remotedetonator" amount="65"/>
<ware ware="inv_salvagedelectronics" amount="6"/>
<ware ware="inv_securecontainer" amount="95"/>
<ware ware="inv_securitybypasssystem" amount="25"/>
<ware ware="inv_securitydecryptionsystem" amount="133"/>
<ware ware="inv_securityslicer" amount="21"/>
<ware ware="inv_sedative" amount="25"/>
<ware ware="inv_seminar_management_0" amount="15"/>
<ware ware="inv_seminar_management_1" amount="9"/>
<ware ware="inv_seminar_management_2" amount="2"/>
<ware ware="inv_seminar_piloting_0" amount="32"/>
<ware ware="inv_seminar_piloting_1" amount="10"/>
<ware ware="inv_spaceflyeggs" amount="672"/>
<ware ware="inv_timewarp"/>
<ware ware="inv_unmarked_black_box"/>
<ware ware="inv_unstablecrystal" amount="351"/>
```

# Knowledgebase

## Long range scanning

Switch to scan mode with `Shift + 3`, then press `L` for a short while (secondary weapon button). Has to be timed right: if the key press is too short or too long, it will not work. If it works, a blue pulse will shoot out from the ship.

> The pulse is not visible on the map, only from the ship's cockpit.
   
Items detected by the scan will display colored pulse hits in space.

- Yellow: Lockboxes
- Blue: Wrecks with contents, data vaults
- Gray: Asteroids, empty wrecks, stations

## Ship stuck in something

### Method 1: Let an NPC do it

- Teleport out of the sector
- Let the NPC pilot wiggle the ship free

> This works, because when the player is "off-grid", all
  laws of physics are suspended.

### Method 2: Wiggle wiggle

I was stuck in a station once with the _Moreya_, and since it's a pilotless ship, I could not let an NPC pilot get it out. This helped:

- Turn off flight assist (this is key)
- Constantly push forward until you're free

## Gaining faction reputation

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

- Take a ship with at least 1 marine on board
- Approach the abandoned ship
- Target it and right-click > "Claim"

A boarding drone will slowly approach the ship, breach it, and take it over.

> Get close to the target ship, as the boarding drone is really slow.
  In some cases, the target ship will take a little damage (the crew
  of the ship sabotaging it).

### The lazy way

Let one of your NPC controlled ships do it: 

- Open the map
- Select a ship with at least 1 marine on board
- Right-click the abandoned ship
- Select "Claim"

Your ship will go there and launch a boarding drone automatically.

## Attacking stations

Station defenses pack a wallop, and can easily take down destroyers and battleships with surprising ease. The key here is range, so you can hit a station from outside of its guns' range. A destroyer with some gun modifications will do nicely, even with green level modifications.

The biggest issue is that in my experience, using the AI to do a synchronized fleet attack or simple attack command will get your ships shot. The AI invariably gets too close to the station. Even if not at first, the ships slowly get closer over time, often when changing positions to shoot at another part of the station. Even if the guns can hit from 2x the distance they are at, and this even if turrets and defense drones are disarmed. Micromanaging this is almost impossible.

My personal, manual solution:

- Identify gun installations (defense disks and bridges)
- Manually position the ship above the target station
- Take out all gun installations (it helps to know where they are)
- Once teethless, let your fleet destroy the remaining modules.

Even after killing all gun emplacements and defense modules, the station will still have more than 80% hull left, which is what takes the most time to whittle down.

> The AI rarely, if ever, attacks a station from above or below, from which position it's easier to hit gun emplacements:
  You can see them all, and hit everything without moving.

### Ship choices

From experience, these are the best ships for station bashing when playing OOS:

1. Asgard: High damage, least suicidal.
2. Syn: High damage, but pretty suicidal.
3. Phoenix / Odysseus: Passable, AI doesn't suicide so often.

Rattlesnakes are the worst. In my games, they just loved making flybys through the center of the target station,
where all guns can conventiently shoot them at the same time :|

## Attacking K and I class Xenon ships

Key to killing these when flying a ship solo is speed, to keep out of the range of their guns. 

My personal favorite is the Rattlesnake, modded for better thrust (possible to fly backwards faster too) and increased range on the main guns.

These mods will make it possible:

- Thrust mod.
- Main guns projectile lifetime mod.
- Large plasma turrets with projectile lifetime mode.
- Drag or mass mod.

If at all possible, attack the Xenon from behind, or from the side. They turn very slowly, and will not be able to use their top speed to close the distance. It makes them a lot easier to hit by the plasma turrets as well, whose projectiles fly very slowly.

## Abbreviations

- PHQ: Player Headquarters Station
- OOS: "Out Of System", moving the player outside of their own ship's systems for easier navigation

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

When building stations, one key factor is workforce. Having too many people is worse than not having enough. Example: if requiring 2000 workers, having 1800 is better than 2200.

- Use the [Station Calculator][] to simulate the build
- Make it as close to 100% workforce usage as possible
- Ideally, everything should be in the green* starting a ~10% workforce

*Profit as well as all production modules. Raw resources like ore excluded.

### Finding markets

> As a general rule, do not worry about the market too much, your goods will be bought wherever you build your station. 

Still, it can be beneficial to check if there are sectors that lack specific component factories. A good example is ship building parts: In sectors with a wharf or shipyard, check if there are factories for Hull Parts, Engine Parts and Shield Components. If not, you have guaranteed regular customers for matching factories. 

To find out which products stations build, the easiest is to check out the station's trade offers. Otherwise, fly over to the station and scan it to identify the production modules that it uses.

### Building presets

- [Terran Claytronics Factory][]
- [Split Engine Part Factory][] 
- [Split Hull Part Factory][]
- [Split Shield Component Factory][]
- [Argon Wharf][] _Workforce sustained, relies on externally built components_
- [Argon Weapon Components Factory][]
- [Argon Shipyard][] - _Workforce sustained, relies on externally built components_
- [Argon Smart Chip Factory][]
- [Argon Missile Components Factory][]
 
 
[Split Hull Part Factory]: http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_prod_hullparts_01,count:13;,$module-module_gen_prod_energycells_01,count:4;,$module-module_gen_prod_graphene_01,count:2;,$module-module_gen_prod_refinedmetals_01,count:7;,$module-module_spl_hab_l_01,count:7;,$module-module_spl_prod_cheltmeat_01,count:2;,$module-module_spl_prod_scruffinfruits_01,count:2;,$module-module_spl_prod_medicalsupplies_01,count:4;,$module-module_gen_prod_spices_01,count:1;,$module-module_gen_prod_water_01,count:2

[Split Engine Part Factory]: http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_prod_engineparts_01,count:12;,$module-module_gen_prod_energycells_01,count:4;,$module-module_gen_prod_antimattercells_01,count:4;,$module-module_gen_prod_refinedmetals_01,count:2;,$module-module_spl_hab_l_01,count:5;,$module-module_spl_prod_cheltmeat_01,count:2;,$module-module_spl_prod_scruffinfruits_01,count:2;,$module-module_spl_prod_medicalsupplies_01,count:3;,$module-module_gen_prod_spices_01,count:1;,$module-module_gen_prod_water_01,count:1

[Split Shield Component Factory]: http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_prod_shieldcomponents_01,count:12;,$module-module_gen_prod_energycells_01,count:4;,$module-module_gen_prod_quantumtubes_01,count:2;,$module-module_gen_prod_refinedmetals_01,count:1;,$module-module_spl_hab_l_01,count:7;,$module-module_spl_prod_cheltmeat_01,count:2;,$module-module_spl_prod_scruffinfruits_01,count:2;,$module-module_spl_prod_medicalsupplies_01,count:4;,$module-module_gen_prod_spices_01,count:1;,$module-module_gen_prod_water_01,count:2;,$module-module_gen_prod_plasmaconductors_01,count:5;,$module-module_gen_prod_superfluidcoolant_01,count:3;,$module-module_gen_prod_graphene_01,count:3

[Terran Claytronics Factory]: http://www.x4-game.com/#/station-calculator?l=@$module-module_ter_hab_m_01,count:1;,$module-module_ter_hab_l_01,count:14;,$module-module_gen_prod_antimattercells_01,count:1;,$module-module_gen_prod_claytronics_01,count:2;,$module-module_gen_prod_graphene_01,count:1;,$module-module_gen_prod_microchips_01,count:3;,$module-module_ter_prod_proteinpaste_01,count:2;,$module-module_gen_prod_quantumtubes_01,count:2;,$module-module_gen_prod_siliconwafers_01,count:3;,$module-module_gen_prod_superfluidcoolant_01,count:1;,$module-module_ter_prod_energycells_01,count:8;,$module-module_ter_prod_terranmre_01,count:4;,$module-module_ter_prod_medicalsupplies_01,count:6

[Argon Wharf]: http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_build_dockarea_m_01,count:1;,$module-module_gen_prod_hullparts_01,count:8;,$module-module_gen_prod_engineparts_01,count:6;,$module-module_gen_prod_antimatterconverters_01,count:2;,$module-module_gen_prod_fieldcoils_01,count:1;,$module-module_gen_prod_shieldcomponents_01,count:1;,$module-module_gen_prod_advancedelectronics_01,count:4;,$module-module_gen_prod_weaponcomponents_01,count:8;,$module-module_gen_prod_turretcomponents_01,count:1;,$module-module_gen_prod_energycells_01,count:6;,$module-module_gen_prod_advancedcomposites_01,count:1;,$module-module_gen_prod_plasmaconductors_01,count:4;,$module-module_gen_prod_scanningarrays_01,count:1;,$module-module_gen_prod_quantumtubes_01,count:2;,$module-module_gen_prod_microchips_01,count:3;,$module-module_gen_prod_superfluidcoolant_01,count:2;,$module-module_gen_prod_siliconwafers_01,count:3;,$module-module_gen_prod_refinedmetals_01,count:5;,$module-module_gen_prod_graphene_01,count:3;,$module-module_gen_prod_antimattercells_01,count:1;,$module-module_gen_prod_dronecomponents_01,count:1;,$module-module_gen_prod_smartchips_01,count:38;,$module-module_gen_prod_missilecomponents_01,count:15;,$module-module_arg_prod_foodrations_01,count:3;,$module-module_arg_prod_medicalsupplies_01,count:6;,$module-module_arg_prod_meat_01,count:1;,$module-module_arg_prod_wheat_01,count:1;,$module-module_gen_prod_spices_01,count:1;,$module-module_gen_prod_water_01,count:1;,$module-module_arg_hab_l_01,count:15;,$module-module_tel_pier_l_03,count:3;,$module-module_arg_dock_m_02_hightech,count:2;,$module-module_arg_stor_container_l_01,count:10;,$module-module_arg_stor_liquid_l_01,count:5;,$module-module_arg_stor_solid_l_01,count:5

[Argon Weapon Components Factory]: 
http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_prod_weaponcomponents_01,count:6;,$module-module_ter_prod_energycells_01,count:10;,$module-module_gen_prod_hullparts_01,count:2;,$module-module_gen_prod_graphene_01,count:3;,$module-module_gen_prod_refinedmetals_01,count:2;,$module-module_gen_prod_plasmaconductors_01,count:7;,$module-module_gen_prod_superfluidcoolant_01,count:3;,$module-module_arg_hab_l_01,count:6;,$module-module_arg_prod_foodrations_01,count:3;,$module-module_arg_prod_medicalsupplies_01,count:4;,$module-module_arg_prod_meat_01,count:1;,$module-module_gen_prod_spices_01,count:2;,$module-module_arg_prod_wheat_01,count:1;,$module-module_gen_prod_water_01,count:2;,$module-module_arg_hab_m_01,count:1


[Argon Shipyard]:
http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_build_l_01,count:3;,$module-module_arg_hab_l_01,count:3;,$module-module_arg_prod_foodrations_01,count:1;,$module-module_arg_prod_meat_01,count:1;,$module-module_gen_prod_spices_01,count:1;,$module-module_arg_prod_wheat_01,count:1;,$module-module_arg_prod_medicalsupplies_01,count:2;,$module-module_gen_prod_water_01,count:1;,$module-module_ter_prod_energycells_01,count:4

[Argon Smart Chip Factory]: http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_prod_smartchips_01,count:12;,$module-module_ter_prod_energycells_01,count:4;,$module-module_gen_prod_siliconwafers_01,count:1;,$module-module_arg_hab_l_01,count:2;,$module-module_arg_prod_foodrations_01,count:1;,$module-module_arg_prod_medicalsupplies_01,count:2;,$module-module_arg_prod_meat_01,count:1;,$module-module_gen_prod_spices_01,count:1;,$module-module_arg_prod_wheat_01,count:1;,$module-module_gen_prod_water_01,count:1


[Argon Missile Components Factory]: http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_prod_missilecomponents_01,count:8;,$module-module_gen_prod_advancedcomposites_01,count:1;,$module-module_gen_prod_energycells_01,count:2;,$module-module_gen_prod_hullparts_01,count:1;,$module-module_gen_prod_graphene_01,count:1;,$module-module_gen_prod_refinedmetals_01,count:1;,$module-module_arg_hab_l_01,count:2;,$module-module_arg_prod_foodrations_01,count:1;,$module-module_arg_prod_medicalsupplies_01,count:2;,$module-module_arg_prod_meat_01,count:1;,$module-module_gen_prod_spices_01,count:1;,$module-module_arg_prod_wheat_01,count:1;,$module-module_gen_prod_water_01,count:1

[Argon Weapon Component Factory]: http://www.x4-game.com/#/station-calculator?l=@$module-module_gen_prod_weaponcomponents_01,count:12;,$module-module_arg_hab_l_01,count:6;,$module-module_gen_prod_energycells_01,count:2;,$module-module_gen_prod_hullparts_01,count:1;,$module-module_gen_prod_plasmaconductors_01,count:5;,$module-module_arg_prod_foodrations_01,count:2;,$module-module_arg_prod_medicalsupplies_01,count:4;,$module-module_gen_prod_graphene_01,count:2;,$module-module_gen_prod_refinedmetals_01,count:1;,$module-module_gen_prod_superfluidcoolant_01,count:2;,$module-module_arg_prod_meat_01,count:1;,$module-module_gen_prod_spices_01,count:2;,$module-module_arg_prod_wheat_01,count:1;,$module-module_gen_prod_water_01,count:1

[Station Calculator]: http://www.x4-game.com/#/station-calculator

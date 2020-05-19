<?php
/**
 * Created by PhpStorm.
 * @author Alerinos
 * @github https://github.com/Alerinos
 * @example
    use M2\Bonus;
    $bonus = new Bonus(Bonus::APPLY_ATT_SPEED);
    $bonus->lang = 'en';
    echo $bonus->translation;
 *
 */

namespace M2;


class Bonus
{
    const APPLY_NONE = "APPLY_NONE";
    const APPLY_MAX_HP = "APPLY_MAX_HP";
    const APPLY_MAX_SP = "APPLY_MAX_SP";
    const APPLY_CON = "APPLY_CON";
    const APPLY_INT = "APPLY_INT";
    const APPLY_STR = "APPLY_STR";
    const APPLY_DEX = "APPLY_DEX";
    const APPLY_ATT_SPEED = "APPLY_ATT_SPEED";
    const APPLY_MOV_SPEED = "APPLY_MOV_SPEED";
    const APPLY_CAST_SPEED = "APPLY_CAST_SPEED";
    const APPLY_HP_REGEN = "APPLY_HP_REGEN";
    const APPLY_SP_REGEN = "APPLY_SP_REGEN";
    const APPLY_POISON_PCT = "APPLY_POISON_PCT";
    const APPLY_STUN_PCT = "APPLY_STUN_PCT";
    const APPLY_SLOW_PCT = "APPLY_SLOW_PCT";
    const APPLY_CRITICAL_PCT = "APPLY_CRITICAL_PCT";
    const APPLY_PENETRATE_PCT = "APPLY_PENETRATE_PCT";
    const APPLY_ATTBONUS_HUMAN = "APPLY_ATTBONUS_HUMAN";
    const APPLY_ATTBONUS_ANIMAL = "APPLY_ATTBONUS_ANIMAL";
    const APPLY_ATTBONUS_ORC = "APPLY_ATTBONUS_ORC";
    const APPLY_ATTBONUS_MILGYO = "APPLY_ATTBONUS_MILGYO";
    const APPLY_ATTBONUS_UNDEAD = "APPLY_ATTBONUS_UNDEAD";
    const APPLY_ATTBONUS_DEVIL = "APPLY_ATTBONUS_DEVIL";
    const APPLY_STEAL_HP = "APPLY_STEAL_HP";
    const APPLY_STEAL_SP = "APPLY_STEAL_SP";
    const APPLY_MANA_BURN_PCT = "APPLY_MANA_BURN_PCT";
    const APPLY_DAMAGE_SP_RECOVER = "APPLY_DAMAGE_SP_RECOVER";
    const APPLY_BLOCK = "APPLY_BLOCK";
    const APPLY_DODGE = "APPLY_DODGE";
    const APPLY_RESIST_SWORD = "APPLY_RESIST_SWORD";
    const APPLY_RESIST_TWOHAND = "APPLY_RESIST_TWOHAND";
    const APPLY_RESIST_DAGGER = "APPLY_RESIST_DAGGER";
    const APPLY_RESIST_BELL = "APPLY_RESIST_BELL";
    const APPLY_RESIST_FAN = "APPLY_RESIST_FAN";
    const APPLY_RESIST_BOW = "APPLY_RESIST_BOW";
    const APPLY_RESIST_FIRE = "APPLY_RESIST_FIRE";
    const APPLY_RESIST_ELEC = "APPLY_RESIST_ELEC";
    const APPLY_RESIST_MAGIC = "APPLY_RESIST_MAGIC";
    const APPLY_RESIST_WIND = "APPLY_RESIST_WIND";
    const APPLY_REFLECT_MELEE = "APPLY_REFLECT_MELEE";
    const APPLY_REFLECT_CURSE = "APPLY_REFLECT_CURSE";
    const APPLY_POISON_REDUCE = "APPLY_POISON_REDUCE";
    const APPLY_KILL_SP_RECOVER = "APPLY_KILL_SP_RECOVER";
    const APPLY_EXP_DOUBLE_BONUS = "APPLY_EXP_DOUBLE_BONUS";
    const APPLY_GOLD_DOUBLE_BONUS = "APPLY_GOLD_DOUBLE_BONUS";
    const APPLY_ITEM_DROP_BONUS = "APPLY_ITEM_DROP_BONUS";
    const APPLY_POTION_BONUS = "APPLY_POTION_BONUS";
    const APPLY_KILL_HP_RECOVER = "APPLY_KILL_HP_RECOVER";
    const APPLY_IMMUNE_STUN = "APPLY_IMMUNE_STUN";
    const APPLY_IMMUNE_SLOW = "APPLY_IMMUNE_SLOW";
    const APPLY_IMMUNE_FALL = "APPLY_IMMUNE_FALL";
    const APPLY_SKILL = "APPLY_SKILL";
    const APPLY_BOW_DISTANCE = "APPLY_BOW_DISTANCE";
    const APPLY_ATT_GRADE_BONUS = "APPLY_ATT_GRADE_BONUS";
    const APPLY_DEF_GRADE_BONUS = "APPLY_DEF_GRADE_BONUS";
    const APPLY_MAGIC_ATT_GRADE = "APPLY_MAGIC_ATT_GRADE";
    const APPLY_MAGIC_DEF_GRADE = "APPLY_MAGIC_DEF_GRADE";
    const APPLY_CURSE_PCT = "APPLY_CURSE_PCT";
    const APPLY_MAX_STAMINA = "APPLY_MAX_STAMINA";
    const APPLY_ATTBONUS_WARRIOR = "APPLY_ATTBONUS_WARRIOR";
    const APPLY_ATTBONUS_ASSASSIN = "APPLY_ATTBONUS_ASSASSIN";
    const APPLY_ATTBONUS_SURA = "APPLY_ATTBONUS_SURA";
    const APPLY_ATTBONUS_SHAMAN = "APPLY_ATTBONUS_SHAMAN";
    const APPLY_ATTBONUS_MONSTER = "APPLY_ATTBONUS_MONSTER";
    const APPLY_ATTBONUS_STONE = "APPLY_ATTBONUS_STONE";
    const APPLY_ATTBONUS_BOSS = "APPLY_ATTBONUS_BOSS";
    const APPLY_MALL_ATTBONUS = "APPLY_MALL_ATTBONUS";
    const APPLY_MALL_DEFBONUS = "APPLY_MALL_DEFBONUS";
    const APPLY_MALL_EXPBONUS = "APPLY_MALL_EXPBONUS";
    const APPLY_MALL_ITEMBONUS = "APPLY_MALL_ITEMBONUS";
    const APPLY_MALL_GOLDBONUS = "APPLY_MALL_GOLDBONUS";
    const APPLY_MAX_HP_PCT = "APPLY_MAX_HP_PCT";
    const APPLY_MAX_SP_PCT = "APPLY_MAX_SP_PCT";
    const APPLY_SKILL_DAMAGE_BONUS = "APPLY_SKILL_DAMAGE_BONUS";
    const APPLY_NORMAL_HIT_DAMAGE_BONUS = "APPLY_NORMAL_HIT_DAMAGE_BONUS";
    const APPLY_SKILL_DEFEND_BONUS = "APPLY_SKILL_DEFEND_BONUS";
    const APPLY_NORMAL_HIT_DEFEND_BONUS = "APPLY_NORMAL_HIT_DEFEND_BONUS";
    const APPLY_PC_BANG_EXP_BONUS = "APPLY_PC_BANG_EXP_BONUS";
    const APPLY_PC_BANG_DROP_BONUS = "APPLY_PC_BANG_DROP_BONUS";
    const APPLY_EXTRACT_HP_PCT = "APPLY_EXTRACT_HP_PCT";
    const APPLY_RESIST_WARRIOR = "APPLY_RESIST_WARRIOR";
    const APPLY_RESIST_ASSASSIN = "APPLY_RESIST_ASSASSIN";
    const APPLY_RESIST_SURA = "APPLY_RESIST_SURA";
    const APPLY_RESIST_SHAMAN = "APPLY_RESIST_SHAMAN";
    const APPLY_ENERGY = "APPLY_ENERGY";
    const APPLY_DEF_GRADE = "APPLY_DEF_GRADE";
    const APPLY_COSTUME_ATTR_BONUS = "APPLY_COSTUME_ATTR_BONUS";
    const APPLY_MAGIC_ATTBONUS_PER = "APPLY_MAGIC_ATTBONUS_PER";
    const APPLY_MELEE_MAGIC_ATTBONUS_PER = "APPLY_MELEE_MAGIC_ATTBONUS_PER";
    const APPLY_RESIST_ICE = "APPLY_RESIST_ICE";
    const APPLY_RESIST_EARTH = "APPLY_RESIST_EARTH";
    const APPLY_RESIST_DARK = "APPLY_RESIST_DARK";
    const APPLY_ANTI_CRITICAL_PCT = "APPLY_ANTI_CRITICAL_PCT";
    const APPLY_ANTI_PENETRATE_PCT = "APPLY_ANTI_PENETRATE_PCT";
    const APPLY_BLEEDING_REDUCE = "APPLY_BLEEDING_REDUCE";
    const APPLY_BLEEDING_PCT = "APPLY_BLEEDING_PCT";
    const APPLY_ATTBONUS_WOLFMAN = "APPLY_ATTBONUS_WOLFMAN";
    const APPLY_RESIST_WOLFMAN = "APPLY_RESIST_WOLFMAN";
    const APPLY_RESIST_CLAW = "APPLY_RESIST_CLAW";
    const APPLY_ACCEDRAIN_RATE = "APPLY_ACCEDRAIN_RATE";
    const APPLY_RESIST_MAGIC_REDUCTION = "APPLY_RESIST_MAGIC_REDUCTION";

    public $bonus = [
        [
            'id'        => 0,
            'name'      => 'APPLY_NONE',
            'lang'  => [
                'en'    => 'No bonus',
                'pl'    => 'Brak bonusu',
            ]
        ],
        [
            'id'        => 1,
            'name'      => 'APPLY_MAX_HP',
            'lang'  => [
                'en'    => 'Max HP',
                'pl'    => 'Maks PŻ',
            ]
        ],[
            'id'        => 2,
            'name'      => 'APPLY_MAX_SP',
            'lang'  => [
                'en'    => 'Max PE',
                'pl'    => 'Maks PE',
            ]
        ],[
            'id'        => 3,
            'name'      => 'APPLY_CON',
            'lang'  => [
                'en'    => 'Vitality',
                'pl'    => 'Witalność',
            ]
        ],[
            'id'        => 4,
            'name'      => 'APPLY_INT',
            'lang'  => [
                'en'    => 'Intelligence',
                'pl'    => 'Inteligencja',
            ]
        ],[
            'id'        => 5,
            'name'      => 'APPLY_STR',
            'lang'  => [
                'en'    => 'Strength',
                'pl'    => 'Siła',
            ]
        ],[
            'id'        => 6,
            'name'      => 'APPLY_DEX',
            'lang'  => [
                'en'    => 'Dexterity',
                'pl'    => 'Zręczność',
            ]
        ],[
            'id'        => 7,
            'name'      => 'APPLY_ATT_SPEED',
            'lang'  => [
                'en'    => 'Attack Speed',
                'pl'    => 'Szybkość ataku',
            ]
        ],[
            'id'        => 8,
            'name'      => 'APPLY_MOV_SPEED',
            'lang'  => [
                'en'    => 'Movement speed',
                'pl'    => 'Szybkość ruchu',
            ]
        ],[
            'id'        => 9,
            'name'      => 'APPLY_CAST_SPEED',
            'lang'  => [
                'en'    => 'Spell Speed',
                'pl'    => 'Szybkość zaklęcia',
            ]
        ],[
            'id'        => 10,
            'name'      => 'APPLY_HP_REGEN',
            'lang'  => [
                'en'    => 'HP regeneration',
                'pl'    => 'Regeneracja PŻ',
            ]
        ],[
            'id'        => 11,
            'name'      => 'APPLY_SP_REGEN',
            'lang'  => [
                'en'    => 'PE regeneration',
                'pl'    => 'Regeneracja PE',
            ]
        ],[
            'id'        => 12,
            'name'      => 'APPLY_POISON_PCT',
            'lang'  => [
                'en'    => 'Chance of poisoning',
                'pl'    => 'Szansa na otrucie',
            ]
        ],[
            'id'        => 13,
            'name'      => 'APPLY_STUN_PCT',
            'lang'  => [
                'en'    => 'Chance of fainting',
                'pl'    => 'Szansa na omdlenie',
            ]
        ],[
            'id'        => 14,
            'name'      => 'APPLY_SLOW_PCT',
            'lang'  => [
                'en'    => 'Chance to slow down',
                'pl'    => 'Szansa na spowolnienie',
            ]
        ],[
            'id'        => 15,
            'name'      => 'APPLY_CRITICAL_PCT',
            'lang'  => [
                'en'    => 'Chance for a critical blow',
                'pl'    => 'Szansa na cios krytyczny',
            ]
        ],[
            'id'        => 16,
            'name'      => 'APPLY_PENETRATE_PCT',
            'lang'  => [
                'en'    => 'Chance of a piercing blow',
                'pl'    => 'Szansa na cios przeszywający',
            ]
        ],[
            'id'        => 17,
            'name'      => 'APPLY_ATTBONUS_HUMAN',
            'lang'  => [
                'en'    => 'Strong against people',
                'pl'    => 'Silny przeciwko ludziom',
            ]
        ],[
            'id'        => 18,
            'name'      => 'APPLY_ATTBONUS_ANIMAL',
            'lang'  => [
                'en'    => 'Strong against animals',
                'pl'    => 'Silny przeciwko zwierzętom',
            ]
        ],[
            'id'        => 19,
            'name'      => 'APPLY_ATTBONUS_ORC',
            'lang'  => [
                'en'    => 'Strong against orcs',
                'pl'    => 'Silny przeciwko orkom',
            ]
        ],[
            'id'        => 20,
            'name'      => 'APPLY_ATTBONUS_MILGYO',
            'lang'  => [
                'en'    => 'Strong against mystics',
                'pl'    => 'Silny przeciwko mistykom',
            ]
        ],[
            'id'        => 21,
            'name'      => 'APPLY_ATTBONUS_UNDEAD',
            'lang'  => [
                'en'    => 'Strong against the undead',
                'pl'    => 'Silny przeciwko nieumarłym',
            ]
        ],[
            'id'        => 22,
            'name'      => 'APPLY_ATTBONUS_DEVIL',
            'lang'  => [
                'en'    => 'Strong against devils',
                'pl'    => 'Silny przeciwko diabłom',
            ]
        ],[
            'id'        => 23,
            'name'      => 'APPLY_STEAL_HP',
            'lang'  => [
                'en'    => 'Damage will be added to the HP',
                'pl'    => 'Obrażenia będą dodane do PŻ',
            ]
        ],[
            'id'        => 24,
            'name'      => 'APPLY_STEAL_SP',
            'lang'  => [
                'en'    => 'Damage will be added to the EP',
                'pl'    => 'Obrażenia będą dodane do PE',
            ]
        ],[
            'id'        => 25,
            'name'      => 'APPLY_MANA_BURN_PCT',
            'lang'  => [
                'en'    => 'Chance of stealing PE',
                'pl'    => 'Szansa na kradzież PE',
            ]
        ],[
            'id'        => 26,
            'name'      => 'APPLY_DAMAGE_SP_RECOVER',
            'lang'  => [
                'en'    => 'Chance to recover EP',
                'pl'    => 'Szansa na odzyskanie PE',
            ]
        ],[
            'id'        => 27,
            'name'      => 'APPLY_BLOCK',
            'lang'  => [
                'en'    => 'Chance to block punches',
                'pl'    => 'Szansa na blok ciosów',
            ]
        ],[
            'id'        => 28,
            'name'      => 'APPLY_DODGE',
            'lang'  => [
                'en'    => 'Chance to avoid arrows',
                'pl'    => 'Szansa na uniknięcie strzały',
            ]
        ],[
            'id'        => 29,
            'name'      => 'APPLY_RESIST_SWORD',
            'lang'  => [
                'en'    => 'Sword resistance',
                'pl'    => 'Odporność na miecze',
            ]
        ],[
            'id'        => 30,
            'name'      => 'APPLY_RESIST_TWOHAND',
            'lang'  => [
                'en'    => 'Resistance to two-handed weapon',
                'pl'    => 'Odporność na broń dwuręczną',
            ]
        ],[
            'id'        => 31,
            'name'      => 'APPLY_RESIST_DAGGER',
            'lang'  => [
                'en'    => 'Dagger resistance',
                'pl'    => 'Odporność na sztylety',
            ]
        ],[
            'id'        => 32,
            'name'      => 'APPLY_RESIST_BELL',
            'lang'  => [
                'en'    => 'Bell resistance',
                'pl'    => 'Odporność na dzwony',
            ]
        ],[
            'id'        => 33,
            'name'      => 'APPLY_RESIST_FAN',
            'lang'  => [
                'en'    => 'Fan resistance',
                'pl'    => 'Odpornosć na wachlarze',
            ]
        ],[
            'id'        => 34,
            'name'      => 'APPLY_RESIST_BOW',
            'lang'  => [
                'en'    => 'Arc resistance',
                'pl'    => 'Odporność na łuk',
            ]
        ],[
            'id'        => 35,
            'name'      => 'APPLY_RESIST_FIRE',
            'lang'  => [
                'en'    => 'Fire resistance',
                'pl'    => 'Odporność na ogień',
            ]
        ],[
            'id'        => 36,
            'name'      => 'APPLY_RESIST_ELEC',
            'lang'  => [
                'en'    => 'Lightning resistance',
                'pl'    => 'Odporność na błyskawice',
            ]
        ],[
            'id'        => 37,
            'name'      => 'APPLY_RESIST_MAGIC',
            'lang'  => [
                'en'    => 'Magic Resist',
                'pl'    => 'Odpornosć na magię',
            ]
        ],[
            'id'        => 38,
            'name'      => 'APPLY_RESIST_WIND',
            'lang'  => [
                'en'    => 'Wind resistance',
                'pl'    => 'Odporność na wiatr',
            ]
        ],[
            'id'        => 39,
            'name'      => 'APPLY_REFLECT_MELEE',
            'lang'  => [
                'en'    => 'Chance to hit back',
                'pl'    => 'Szansa na odbicie ciosu',
            ]
        ],[
            'id'        => 40,
            'name'      => 'APPLY_REFLECT_CURSE',
            'lang'  => [
                'en'    => 'Chance of curse reflection',
                'pl'    => 'Szansa na odbicie klątwy',
            ]
        ],[
            'id'        => 41,
            'name'      => 'APPLY_POISON_REDUCE',
            'lang'  => [
                'en'    => 'Poison Resistance',
                'pl'    => 'Odporność na trucizny',
            ]
        ],[
            'id'        => 42,
            'name'      => 'APPLY_KILL_SP_RECOVER',
            'lang'  => [
                'en'    => 'Chance to recover PE',
                'pl'    => 'Szansa na odzyskanie PE',
            ]
        ],[
            'id'        => 43,
            'name'      => 'APPLY_EXP_DOUBLE_BONUS',
            'lang'  => [
                'en'    => 'Chance of double the amount of experience',
                'pl'    => 'Szansa na podwójną ilość doświadczenia',
            ]
        ],[
            'id'        => 44,
            'name'      => 'APPLY_GOLD_DOUBLE_BONUS',
            'lang'  => [
                'en'    => 'Chance of double the amount of gold',
                'pl'    => 'Szansa na podwójną ilość złota',
            ]
        ],[
            'id'        => 45,
            'name'      => 'APPLY_ITEM_DROP_BONUS',
            'lang'  => [
                'en'    => 'Chance of double amount of items',
                'pl'    => 'Szansa na podwójną ilość przedmiotów',
            ]
        ],[
            'id'        => 46,
            'name'      => 'APPLY_POTION_BONUS',
            'lang'  => [
                'en'    => 'Increases the effect of potions',
                'pl'    => 'Zwiększa efekt mikstur',
            ]
        ],[
            'id'        => 47,
            'name'      => 'APPLY_KILL_HP_RECOVER',
            'lang'  => [
                'en'    => 'Chance to regain HP',
                'pl'    => 'Szansa na odzyskanie PŻ',
            ]
        ],[
            'id'        => 48,
            'name'      => 'APPLY_IMMUNE_STUN',
            'lang'  => [
                'en'    => 'Fainting resistance',
                'pl'    => 'Odporność na omdlenia',
            ]
        ],[
            'id'        => 49,
            'name'      => 'APPLY_IMMUNE_SLOW',
            'lang'  => [
                'en'    => 'Slow resistance',
                'pl'    => 'Odporność na spowolnienia',
            ]
        ],[
            'id'        => 50,
            'name'      => 'APPLY_IMMUNE_FALL',
            'lang'  => [
                'en'    => 'Invalid for falling',
                'pl'    => 'Nieważliwy na upadek',
            ]
        ],[
            'id'        => 51,
            'name'      => 'APPLY_SKILL',
            'lang'  => [
                'en'    => '',
                'pl'    => '',
            ]
        ],[
            'id'        => 52,
            'name'      => 'APPLY_BOW_DISTANCE',
            'lang'  => [
                'en'    => 'Arc range',
                'pl'    => 'Zasięg łuku',
            ]
        ],[
            'id'        => 53,
            'name'      => 'APPLY_ATT_GRADE_BONUS',
            'lang'  => [
                'en'    => 'Attack Value',
                'pl'    => 'Wartość ataku',
            ]
        ],[
            'id'        => 54,
            'name'      => 'APPLY_DEF_GRADE_BONUS',
            'lang'  => [
                'en'    => 'Defense',
                'pl'    => 'Obrona',
            ]
        ],[
            'id'        => 55,
            'name'      => 'APPLY_MAGIC_ATT_GRADE',
            'lang'  => [
                'en'    => 'Magic Attack Value',
                'pl'    => 'Wartość magicznego ataku',
            ]
        ],[
            'id'        => 56,
            'name'      => 'APPLY_MAGIC_DEF_GRADE',
            'lang'  => [
                'en'    => 'Magic attack resistance',
                'pl'    => 'Odporność na magiczny atak',
            ]
        ],[
            'id'        => 57,
            'name'      => 'APPLY_CURSE_PCT',
            'lang'  => [
                'en'    => 'Chance to cast a curse',
                'pl'    => 'Szansa na rzucenie klątwy',
            ]
        ],[
            'id'        => 58,
            'name'      => 'APPLY_MAX_STAMINA',
            'lang'  => [
                'en'    => 'Maximum durability',
                'pl'    => 'Maksymalna wytrzymałość',
            ]
        ],[
            'id'        => 59,
            'name'      => 'APPLY_ATTBONUS_WARRIOR',
            'lang'  => [
                'en'    => 'Strong against warriors',
                'pl'    => 'Silny przeciwko wojownikom',
            ]
        ],[
            'id'        => 60,
            'name'      => 'APPLY_ATTBONUS_ASSASSIN',
            'lang'  => [
                'en'    => 'Strong against the ninja',
                'pl'    => 'Silny przeciwko ninja',
            ]
        ],[
            'id'        => 61,
            'name'      => 'APPLY_ATTBONUS_SURA',
            'lang'  => [
                'en'    => 'Strong against sura',
                'pl'    => 'Silny przeciwko sura',
            ]
        ],[
            'id'        => 62,
            'name'      => 'APPLY_ATTBONUS_SHAMAN',
            'lang'  => [
                'en'    => 'Strong against the shaman',
                'pl'    => 'Silny przeciwko szaman',
            ]
        ],[
            'id'        => 63,
            'name'      => 'APPLY_ATTBONUS_MONSTER',
            'lang'  => [
                'en'    => 'Strong against monsters',
                'pl'    => 'Silny przeciwko potworom',
            ]
        ],[
            'id'        => 64,
            'name'      => 'APPLY_MALL_ATTBONUS',
            'lang'  => [
                'en'    => 'Attack Value in %',
                'pl'    => 'Wartość ataku w %',
            ]
        ],[
            'id'        => 65,
            'name'      => 'APPLY_MALL_DEFBONUS',
            'lang'  => [
                'en'    => 'Defense in %',
                'pl'    => 'Obrona w %',
            ]
        ],[
            'id'        => 66,
            'name'      => 'APPLY_MALL_EXPBONUS',
            'lang'  => [
                'en'    => 'Experience points in %',
                'pl'    => 'Punkty doświadczenia w %',
            ]
        ],[
            'id'        => 67,
            'name'      => 'APPLY_MALL_ITEMBONUS',
            'lang'  => [
                'en'    => 'Chance of getting items in%',
                'pl'    => 'Szansa na zdobycie przedmiotów w %',
            ]
        ],[
            'id'        => 68,
            'name'      => 'APPLY_MALL_GOLDBONUS',
            'lang'  => [
                'en'    => 'Increased chance of getting gold in %',
                'pl'    => 'Zwiększona szansa na zdobycie złota w %',
            ]
        ],[
            'id'        => 69,
            'name'      => 'APPLY_MAX_HP_PCT',
            'lang'  => [
                'en'    => 'Increase of max HP',
                'pl'    => 'Zwiększenie maks PŻ',
            ]
        ],[
            'id'        => 70,
            'name'      => 'APPLY_MAX_SP_PCT',
            'lang'  => [
                'en'    => 'Increase max PE',
                'pl'    => 'Zwiększenie maks PE',
            ]
        ],[
            'id'        => 71,
            'name'      => 'APPLY_SKILL_DAMAGE_BONUS',
            'lang'  => [
                'en'    => 'Damage skills',
                'pl'    => 'Obrażenia umiejętności',
            ]
        ],[
            'id'        => 72,
            'name'      => 'APPLY_NORMAL_HIT_DAMAGE_BONUS',
            'lang'  => [
                'en'    => 'Medium damage',
                'pl'    => 'Średnie obrażenia',
            ]
        ],[
            'id'        => 73,
            'name'      => 'APPLY_SKILL_DEFEND_BONUS',
            'lang'  => [
                'en'    => 'Resistance to damage skills',
                'pl'    => 'Odporność na obrażenia umiejętności',
            ]
        ],[
            'id'        => 74,
            'name'      => 'APPLY_NORMAL_HIT_DEFEND_BONUS',
            'lang'  => [
                'en'    => 'Resistance to injury',
                'pl'    => 'Odporność na obrażenia',
            ]
        ],[
            'id'        => 75,
            'name'      => 'APPLY_PC_BANG_EXP_BONUS',
            'lang'  => [
                'en'    => '',
                'pl'    => '',
            ]
        ],[
            'id'        => 76,
            'name'      => 'APPLY_PC_BANG_DROP_BONUS',
            'lang'  => [
                'en'    => '',
                'pl'    => '',
            ]
        ],[
            'id'        => 77,
            'name'      => 'APPLY_EXTRACT_HP_PCT',
            'lang'  => [
                'en'    => 'HP theft (BUGGED)',
                'pl'    => 'Kradzież HP (ZBUGOWANY)',
            ]
        ],[
            'id'        => 78,
            'name'      => 'APPLY_RESIST_WARRIOR',
            'lang'  => [
                'en'    => 'Warrior Resistance',
                'pl'    => 'Odporność na wojownika',
            ]
        ],[
            'id'        => 79,
            'name'      => 'APPLY_RESIST_ASSASSIN',
            'lang'  => [
                'en'    => 'Ninja Resistance',
                'pl'    => 'Odporność na ninje',
            ]
        ],[
            'id'        => 80,
            'name'      => 'APPLY_RESIST_SURA',
            'lang'  => [
                'en'    => 'Resistance to sure',
                'pl'    => 'Odporność na sure',
            ]
        ],[
            'id'        => 81,
            'name'      => 'APPLY_RESIST_SHAMAN',
            'lang'  => [
                'en'    => 'Shaman resistance',
                'pl'    => 'Odporność na szamana',
            ]
        ],[
            'id'        => 82,
            'name'      => 'APPLY_ENERGY',
            'lang'  => [
                'en'    => 'Energy',
                'pl'    => 'Energia',
            ]
        ],[
            'id'        => 83,
            'name'      => 'APPLY_DEF_GRADE',
            'lang'  => [
                'en'    => 'Defense',
                'pl'    => 'Obrona',
            ]
        ],[
            'id'        => 84,
            'name'      => 'APPLY_COSTUME_ATTR_BONUS',
            'lang'  => [
                'en'    => 'Bonus suit',
                'pl'    => 'Bonus kostiumu',
            ]
        ],[
            'id'        => 85,
            'name'      => 'APPLY_MAGIC_ATTBONUS_PER',
            'lang'  => [
                'en'    => 'Magic attack',
                'pl'    => 'Magiczny atak',
            ]
        ],[
            'id'        => 86,
            'name'      => 'APPLY_MELEE_MAGIC_ATTBONUS_PER',
            'lang'  => [
                'en'    => 'Magic short-range attack',
                'pl'    => 'Magiczny krótkodystansowy atak',
            ]
        ],[
            'id'        => 87,
            'name'      => 'APPLY_RESIST_ICE',
            'lang'  => [
                'en'    => 'Ice resistance',
                'pl'    => 'Odporność na lód',
            ]
        ],[
            'id'        => 88,
            'name'      => 'APPLY_RESIST_EARTH',
            'lang'  => [
                'en'    => 'Earth resistance',
                'pl'    => 'Odporność na ziemię',
            ]
        ],[
            'id'        => 89,
            'name'      => 'APPLY_RESIST_DARK',
            'lang'  => [
                'en'    => 'Darkness resistance',
                'pl'    => 'Odporność na mrok',
            ]
        ],[
            'id'        => 90,
            'name'      => 'APPLY_ANTI_CRITICAL_PCT',
            'lang'  => [
                'en'    => 'Critical hit resistance',
                'pl'    => 'Odporność na cios krytyczny',
            ]
        ],[
            'id'        => 91,
            'name'      => 'APPLY_ANTI_PENETRATE_PCT',
            'lang'  => [
                'en'    => 'Resistance to stabbing blow',
                'pl'    => 'Odporność na cios przeszywający',
            ]
        ],[
            'id'        => 92,
            'name'      => 'APPLY_BLEEDING_REDUCE',
            'lang'  => [
                'en'    => 'Resistance to a bleeding attack',
                'pl'    => 'Odporność na atak krwawienia',
            ]
        ],[
            'id'        => 93,
            'name'      => 'APPLY_BLEEDING_PCT',
            'lang'  => [
                'en'    => 'Attack of bleeding',
                'pl'    => 'Atak krwawienia',
            ]
        ],[
            'id'        => 94,
            'name'      => 'APPLY_ATTBONUS_WOLFMAN',
            'lang'  => [
                'en'    => 'Strong against lycans',
                'pl'    => 'Silny przeciwko likanom',
            ]
        ],[
            'id'        => 95,
            'name'      => 'APPLY_RESIST_WOLFMAN',
            'lang'  => [
                'en'    => 'Lycan resistance',
                'pl'    => 'Odporność na likana',
            ]
        ],[
            'id'        => 96,
            'name'      => 'APPLY_RESIST_CLAW',
            'lang'  => [
                'en'    => 'Claw Resistance',
                'pl'    => 'Odporność na szpony',
            ]
        ],[
            'id'        => 97,
            'name'      => 'APPLY_ACCEDRAIN_RATE',
            'lang'  => [
                'en'    => 'Absorption rate',
                'pl'    => 'Stopień absorpcji',
            ]
        ],[
            'id'        => 98,
            'name'      => 'APPLY_RESIST_MAGIC_REDUCTION',
            'lang'  => [
                'en'    => 'Antymagia',
                'pl'    => 'Antymagia',
            ]
        ],


        [
            'id'        => 118,
            'name'      => 'APPLY_MOUNT_SUMMON',
            'lang'  => [
                'en'    => 'Summon mount',
                'pl'    => 'Przywołanie wierzchowca',
            ]
        ],[
            'id'        => 120,
            'name'      => 'APPLY_VALUE_LEVEL',
            'lang'  => [
                'en'    => 'Level',
                'pl'    => 'Poziom',
            ]
        ],[
            'id'        => 121,
            'name'      => 'APPLY_VALUE_EXP',
            'lang'  => [
                'en'    => 'Experience',
                'pl'    => 'Doświadczenie',
            ]
        ],[
            'id'        => 122,
            'name'      => 'APPLY_RESIST_MONSTER',
            'lang'  => [
                'en'    => 'Resistance to monsters',
                'pl'    => 'Odporność na potwory',
            ]
        ],[
            'id'        => 123,
            'name'      => 'APPLY_ATTBONUS_STONE',
            'lang'  => [
                'en'    => 'Strong on metin',
                'pl'    => 'Silny na metiny',
            ]
        ],[
            'id'        => 124,
            'name'      => 'APPLY_ATTBONUS_BOSS',
            'lang'  => [
                'en'    => 'Strong on bosses',
                'pl'    => 'Silny na bosy',
            ]
        ],[
            'id'        => 125,
            'name'      => 'APPLY_HUMAN_RESIST',
            'lang'  => [
                'en'    => 'Resistance to human',
                'pl'    => 'Odporność na ludzi',
            ]
        ],[
            'id'        => 126,
            'name'      => 'APPLY_STATS',
            'lang'  => [
                'en'    => 'Increases points statistics',
                'pl'    => 'Zwiększa pkt. statystyk',   // Zwiększa pkt statystyk
            ]
        ],
    ];

    public string $lang = 'pl';

    public string $name;
    public int $id;
    public string $translation;

    public function __construct($name = null)
    {
//        $this->lang = 'en';       // Use if you have a translation system, eg $this->lang = Translation::getLang();
        $this->validation($name);
    }

    public function validation($name = null): void
    {
        if(is_numeric($name)){
            $this->search('id', $name);
        }elseif(is_string($name)){
            $name = strtoupper($name);

            if (strpos($name, "APPLY_") === FALSE) {
                $name = "APPLY_$name";
            }

            $this->search('name', $name);
        }
    }

    public function search(string $type, $name): void
    {
        $this->id = array_search($name, array_column($this->bonus, $type));
        $this->name = $this->bonus[$this->id]['name'];
        $this->translation = $this->bonus[$this->id]['lang'][$this->lang];
    }
}
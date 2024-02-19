<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HealthFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            $prefixes = ["Ab", "Aba", "Abaca", "Abare", "Abata", "Abel", "Abi", "Abira", "Abla", "Abo", "Abobo", "Abra", "Ac", "Acam", "Acan", "Acar", "Accu", "Ace", "Acebu", "Aceta", "Acetyl", "Aci", "Acitre", "Aclo", "Acri", "Acte", "Actem", "Acti", "Acto", "Acu", "Acy", "Acyc", "Ad", "Ada", "Adala", "Adapa", "Adce", "Adde", "Ade", "Adem", "Adeno", "Adi", "Ado", "Adre", "Adrena", "Adria", "Ady", "Adyno", "Aero", "Afa", "Afati", "Afi", "Afini", "Afli", "Aflu", "Afre", "Aga", "Agal", "Agalsi", "Age", "Agene", "Aggra", "Aggre", "Ala", "Alben", "Albenda", "Albu", "Albute", "Alca", "Alcaf", "Alclo", "Alda", "Aldac", "Alde", "Aldes", "Aldo", "Aldu", "Aldura", "Alem", "Alemtu", "Alfe", "Alfu", "Alglu", "Algluco", "Ali", "Alim", "Alis", "Alitre", "Alke", "Alle", "Allo", "Alo", "Alog", "Alose", "Alpha", "Alpra", "Alsu", "Alta", "Alto", "Alve", "Alvi", "Am", "Ama", "Aman", "Ambe", "Amci", "Ami", "Amio", "Amlo", "Amo", "Amoxi", "Amphe", "Ampheta", "Ampho", "Ampi", "Ampy", "Ana", "Andro", "Ane", "Angio", "Anta", "Anti", "Apexi", "Apixi", "Aplen", "Apre", "Apro", "Aqua", "Ara", "Arga", "Ari", "Arte", "Aspa", "Aspara", "Aspi", "Atomo", "Atra", "Atracu", "Augmen", "Auto", "Ava", "Aza", "Azela",
            "Bac", "Bacte", "Bacteri", "Bactro", "Bara", "Beclo", "Bela", "Benaze", "Bene", "Benefi", "Benza", "Benzo", "Beta", "Beti", "Bex", "Bio", "Boni", "Boos", "Brimo", "Buta", "Butor",
            "Cabo", "Cafe", "Caffe", "Caffei", "Calci", "Calciu", "Capo", "Capsa", "Carbi", "Cardi", "Cefo", "Cefta", "Cepho", "Cere", "Cetro", "Chlor", "Chorio", "Ciclo", "Cla", "Clari", "Cleo", "Clin", "Clinda", "Clini", "Clino", "Cog", "Cole", "Com", "Compa", "Cor", "Corda", "Corti", "Cri", "Cro", "Cuti", "Cyclo", "Cypro",
            "Dacti", "Danto", "Dap", "Dar", "Dasa", "Deci", "Declo", "Deme", "Desi", "Deslo", "Deso", "Dexa", "Dexlan", "Dexme", "Dextro", "Dia", "Diaze", "Diclo", "Dipro", "Divi", "Doc", "Docto", "Dorzo", "Doxi", "Drospi", "Dura", "Dyphy",
            "Ede", "Edro", "Effi", "Ehty", "Empi", "Ena", "Endo", "Entra", "Enza", "Epi", "Epine", "Epro", "Epzi", "Ergo", "Ero", "Estra", "Estro", "Etha", "Etho", "Eto", "Evo", "Exe", "Exo", "Exu",
            "Facto", "Fel", "Feno", "Fenta", "Feru", "Fexo", "Fibri", "Fina", "Flexe", "Flexi", "Floxu", "Flua", "Fluo", "Fluta", "Formo", "Fosino", "Frag",
            "Gado", "Galan", "Gamma", "Gani", "Gem", "Glua", "Gluco", "Grani", "Gyna", "Haemo", "Halci", "Halo", "Hecto", "Heli", "Hema", "Hepa", "Hexa", "Humu", "Hyalu", "Hydro", "Hydroxy",
            "Ibru", "Ibu", "Ico", "Imi", "Immu", "Infu", "Inso", "Insu", "Inter", "Interfe", "Inva", "Invi", "Ion", "Iso",
            "Kaly", "Kanu", "Keta", "Keto", "Kine", "Kino", "Kio",
            "Lac", "Laco", "Lactu", "Lanso", "Leva", "Levo", "Lexi", "Libra", "Lido", "Lio", "Lora", "Loraze", "Lova", "Love", "Lubi", "Lyso",
            "Macro", "Magne", "Mala", "Mar", "Meca", "Mechlo", "Mega", "Mege", "Meno", "Mepro", "Meta", "Metha", "Methi", "Metho", "Metro", "Micro", "Mino", "Mono", "Morphi", "Multi", "Myco",
            "Nafti", "Nalo", "Nasa", "Navel", "Nedo", "Neo", "Neu", "Neuro", "Neva", "Niso", "Nitro", "Nizo", "Nor", "Nova", "Novo", "Nutri", "Nutro",
            "Ocu", "Oflo", "Ola", "Olanza", "Olme", "Olo", "Olsa", "Ombi", "Ome", "Omni", "Opti", "Ora", "Oxa", "Oxan", "Oxy", "Oxyco", "Oxymo",
            "Pali", "Palo", "Pami", "Pan", "Pancre", "Panto", "Paro", "Pazo", "Pedia", "Pemi", "Peni", "Penta", "Pento", "Perco", "Phos", "Phyto", "Pilo", "Pito", "Pleri", "Podo", "Prali", "Pre", "Predni", "Prema", "Prepa", "Prepo", "Prima", "Pro", "Proge", "Propra", "Proto", "Pulmo", "Quini", "Quixi", "Rami", "Rane", "Rapa", "Rebe", "Refli", "Rego", "Relen", "Requi", "Reta", "Retro", "Rhino", "Riba", "Riva", "Roba", "Roma", "Romi", "Rosi", "Roxa", "Sacro", "Sanctu", "Sapro", "Save", "Secre", "Sele", "Sensi", "Sero", "Sevo", "Silo", "Silva", "Sodi", "Sola", "Soma", "Spec", "Spiro", "Spora", "Stela", "Sub", "Subo", "Suc", "Sulfa", "Suma", "Sym", "Symbi", "Symby", "Syn", "Synthe",
            "Tac", "Tacro", "Tamo", "Tamsu", "Taza", "Tazo", "Tema", "Temo", "Terbi", "Terco", "Tes", "Testo", "Teta", "Tetra", "Thali", "Theo", "Thera", "Thio", "Thyro", "Tia", "Timo", "Tinza", "Tole", "Topi", "Trac", "Trama", "Tran", "Trando", "Trans", "Travo", "Trazo", "Treti", "Tri", "Triam", "Trili",
            "Ultra", "Ultri", "Uni", "Uro",
            "Val", "Vari", "Ven", "Venta", "Vera", "Vibra", "Victo", "Viga", "Vitra", "Vitro", "Vivo",
            "Xala", "Xena", "Xylo",
            "Zan", "Zana", "Zaro", "Zeva", "Zico", "Zithro", "Zolpi", "Zoni", "Zy"];
            $suffixes = ["balamin", "bamol", "ban", "bax", "bazine", "begron", "bicin", "bide", "binol", "bisome", "bital", "bloc", "brate", "bucil", "bulin", "butrol", "byclor", "cadren", "caine", "cane", "celex", "cept", "cerol", "cetam", "cilin", "cin", "cine", "cion", "cline", "clotide", "clude", "cor", "cotrol", "criptine", "dafinil", "darone", "dase", "dazole", "deine", "dene", "denu", "deral", "derall", "derm", "dine", "diol", "dipine", "dizem", "docet", "docin", "domide", "dosyn", "dox", "dryl", "fase", "fen", "fenac", "fenib", "fenide", "feral", "fergen", "ferol", "feron", "fetan", "fine", "finil", "formin", "foxin", "franil", "fribrate", "gard", "gel", "gen", "gene", "gestin", "gestrel", "gine", "gomar", "jex", "keran", "kine", "kyn", "lac", "lamide", "lamin", "lan", "lapril", "lazal", "lazine", "lence", "lestid", "letine", "letra", "limus", "lin", "line", "linum", "lise", "lofen", "log", "loride", "lovir", "lozin", "luble", "mab", "madin", "mane", "mara", "max", "mectin", "menda", "mentin", "methate", "micin", "mid", "mide", "min", "mine", "minphen", "mulin", "mumab", "mune", "munex", "muran", "mycin", "nadryl", "nafine", "nalin", "nam", "namic", "nase", "natal", "nate", "navir", "nazol", "nazole", "nel", "nem", "nesin", "neva", "nevist", "nex", "nide", "nidine", "nil", "nine", "nitol", "nitor", "nium", "nized", "nogen", "noin", "none", "nonide", "nophen", "norphine", "nosine", "novate", "numa", "nuvia", "palene", "pan", "parin", "patch", "pen", "penem", "pentin", "pex", "philus", "phine", "pine", "pion", "piride", "pirin", "pirone", "pirox", "pitant", "pizole", "plan", "plex", "pogen", "porin", "poside", "prazole", "prex", "pril", "prin", "prine", "prodol", "profen", "prosate", "prosyn", "protin", "prox", "pryl", "pur", "rabine", "racil", "racin", "rall", "ramine", "ran", "ranon", "rase", "rate", "relin", "renol", "renone", "retin", "ride", "ridol", "rinex", "riva", "rix", "roban", "rodine", "rolac", "ronate", "rone", "rotec", "rotene", "rudin", "ruvax", "sate", "set", "setron", "side", "sin", "sine", "sirox", "sol", "soline", "somax", "sone", "sonide", "span", "sporine", "stadil", "star", "steride", "stin", "stone", "stral", "strel", "strin", "stryl", "sulin", "sumab", "syn", "sys", "tacept", "tadine", "taine", "talol", "tamine", "tana", "tane", "tant", "tanyl", "tasol", "tate", "taxime", "tecan", "telase", "tensin", "terol", "testryl", "thacin", "thasol", "thasone", "tide", "tinoin", "tisol", "tiza", "toin", "tone", "tonin", "tora", "torol", "tosine", "trace", "tracin", "trana", "triene", "trigine", "trim", "triptan", "trisin", "troban", "trol", "trope", "tropin", "vac", "vance", "varix", "vate", "vatol", "vax", "velam", "vene", "veset", "vice", "vid", "virase", "virenz", "virine", "vital", "vorin", "xacin", "xamine", "xane", "xapine", "xetine", "xime", "xitrol", "xolol", "xone", "zal", "zaprine", "zenil", "zepam", "zide", "zine", "zolam", "zole", "zolid", "zone", "zoxane", "zumab", "zyme"];

            return [
                'banded_food' => $this->faker->randomElement([
                    'Chocolate',
                    'Chips',
                    'Cookies',
                    'Soda',
                    'Candy',
                    'Biscuits',
                    'Dount',
                    'Juice'
                ]),
                'medicien'=>$this->faker->randomElement($prefixes)." ".$this->faker->randomElement($suffixes),
                'personal_comment'=>$this->faker->text(100),
                'child_id'=>5,
                'father_id'=>10,
            ];
    }
}
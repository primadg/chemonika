<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'root',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('root1234')
        ]);
        DB::table('roles')->insert([
            'name'=> 'admin',
            'guard_name'=>'web',
        ]);
        DB::table('model_has_roles')->insert([
            'model_type'=> 'App\Models\User',
            'role_id'=>'1',
            'model_id'=>'1',
        ]);
        DB::table('product_ukrs')->insert([
            'name' => "Лимона кислота",
            'group' => "Антиоксиданти",
            'field_of_usage' => "пиво-безалкогольная, кондитерская, хлебо-булочная, консервная",
            'Product_usage'=> "В косметичних препаратах використовується як консервант, розчинник, модіфікатор pH, відповідного pH кожи. Надає в'яжучий, очищающий та відбілюючий ефект шкірі. Вводиться в склад кремів, депіляторів, ополіскувачів для волос, кремів. Лимона кислота використовується як підкислювач в кормах. Володіє потужним антибактеріальною дією, має анті стресову дію, є каталізатором обміну речовин, синергісти антиоксидантів. Відповідає за активацію ферментів, поліпшує засвоюваність  кормів.",
            'Package' => "Мішки 25 кг",
            'img'=>'/img/images/product1.png',
            'Storage' => "Зберігати в сухому захищеному від світла місці",
            'Standart' => "Відповідає стандартам якості: ВР2009, USP32, FCC6, E330",
            'description' => "В харчовій промисловості лимона кислота (Е330) широко використовується в виробництві без-алкогольних напоїв, тому що має найбільш мякий та освіжаючий смак в порівнянні з іншими харчовими кислотами.
При виробництві кондитерських виробів використовується як ароматизатор та підкислювач. При виробництві хлібо-булочних виробів використовується як один з компонентів  розпушувача тіста. В олія-жировій промисловості лимона кислота значно зменшує вірогідність прогоркання жирыв, маргаринів та животного масла. При виробництві консервів, використовується як консервант.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Лимонная кислота",
            'group' => "Антиоксиданты",
            'img'=>'/img/images/product1.png',
            'pos_id'=>1,
            'Product_usage'=>"В косметических препаратах  применяется как консервант, разбавитель, модификатор pH, соответствующего pH кожи. Оказывает на кожу вяжущее, очищающее и отбеливающее действие. Вводится в состав очищающих кремов, депиляториев, ополаскивателей для волос, красок для волос, кремов от веснушек.
Лимонная кислота используется как подкислитель в кормах.  Обладает сильным антибактериальным действием, оказывает антистрессовое действие, является катализатором обмена веществ, синергистом антиоксидантов. Отвечает за активизацию ферментов, улучшает усвояемость кормов",
            'field_of_usage' => "пиво-безалкогольная, кондитерская, хлебо-булочная, консервная",
            'Package' => "Мешки 25 кг",
            'Storage' => "Хранить в сухом защищенном от света месте",
            'Standart' => "Відповідає стандартам якості: ВР2009, USP32, FCC6, E330",
            'description' => "В пищевой промышленности лимонная кислота (Е330)  широко применяется  в производстве безалкогольных напитков, поскольку обладает наиболее мягким и освежающим вкусом по сравнению с другими пищевыми кислотами.
В производстве кондитерских изделий применяется как ароматизатор и подкислитель. В производстве хлебобулочных изделий применяется как один из компонентов разрыхлителей теста. В масложировой промышленности лимонная кислота значительно снижает вероятность прогоркания жиров, маргаринов и животного масла. При производстве консервов используется, как консервант.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Citric acid",
            'group' => "Antioxidants",
            'img'=>'/img/images/product1.png',
            'pos_id'=>1,
            'Product_usage'=>" Widely used in cosmetics, since it acts as a preservative, diluent, a pH modifier corresponding to pH level of the skin.
Has an astringent, cleansing and whitening effect on the skin. It is included in the formula of cleansing creams, depilatories, hair rinses, hair dyes and freckle creams.
Citric acid is also used as feed acidifier. It has a strong antibacterial and anti-stress effects, acts as a metabolic catalyst and a synergist of antioxidants.
",
            'field_of_usage' => "beer, soft drinks, confectionary items, bakery, canned goods",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards: ВР2009, USP32, FCC6, E330",
            'description' => "Citric acid (E330) is widely used in the production of soft drinks, since it has the softest and most refreshing taste compared to other food acids in the food industry.
It is used as flavoring and acidifier in the production of confectionery items and added as one of the components of dough leavening agents in the production of bakery products. Citric acid significantly reduces the likelihood of rancidity of fats, margarines and animal oils in the oil and fats industry. It is also used as a preservative during the production of canned goods.
",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Цитрат натрію",
            'group' => "Стабілізатори",
            'field_of_usage' => "пиво-безалкогольна, консервна",
            'Product_usage'=> "Використовується в якості підсилювача харчових відчуттів при виробництві цитрусових газованих напоїв, при виробництві пива, енергетиків, соків та компотів. В якості регулятора рівня кислотності використовується в виробництві кисломолочних виробів, йогурта, мармелада, пастіли. Також використовується при стерилізації молока, консервів, сухого молока. Додається в емульговані рослинні та животні масла та жири.
                                       Також використовується в виробництві косметики та побутової хімії.",
            'Package' => "Мішки 25 кг",
            'img'=>'/img/images/product1.png',
            'Storage' => "Зберігати в сухому захищеному від світла місці",
            'Standart' => "Відповідає стандартам якості: ВР2009, USP32, FCC6, E331",
            'description' => "Цитрат натрію - це натрієва сіль лимонної кислоти, натуральна та безпечна харчова добавка. За своїми якостями - це регулятор кислотності, стабілізатор, емульгатов, емульгуюча сіль, синергісти антиоксидантів, фіксатор покраски.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Цитрат натрия",
            'group' => "Стабилизаторы",
            'img'=>'/img/images/product1.png',
            'pos_id'=>2,
            'Product_usage'=>"Применяют в качестве усилителя вкусовых ощущений при производстве цитрусовых газированных напитков, при производстве пива, энергетиков, соков и компотов. В качестве регулятора уровня кислотности применяется в производстве кисломолочных продуктов, йогурта, мармелада, пастилы. Также применяют при стерилизации молока, консервов, сухого молока. Добавляют в неэмульгированные растительные и животные масла и жиры.
                                      Также применяют в фармацевтике, производстве косметики и бытовой химии.",
            'field_of_usage' => "пиво-безалкогольная, консервная",
            'Package' => "Мешки 25 кг",
            'Storage' => "Хранить в сухом защищенном от света месте",
            'Standart' => "Соответствует стандартам качества: ВР2009, USP32, FCC6, E331",
            'description' => "Цитрат натрия – это натриевая соль лимонной кислоты, натуральная и безопасная пищевая добавка.
                                      По своим свойствам - это регулятор кислотности, стабилизатор, эмульгатор, эмульгирующая соль, синергист антиоксидантов, фиксатор окраски.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Sodium citrate",
            'group' => "Stabilizers",
            'img'=>'/img/images/product1.png',
            'pos_id'=>2,
            'Product_usage'=>"It is used as a taste enhancer in the production of carbonated citrus drinks, beer, energy drinks, juices and compotes; as an acidity level regulator throughout the production of fermented milk products, yoghurt, marmalade, pastilles. Also used for milk sterilization, canned food, milk powder. Added to non-emulsified vegetable and animal oils and fats. Applied in pharmaceuticals, cosmetics and household chemicals.",
            'field_of_usage' => "beer, soft drinks, canned goods",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards: ВР2009, USP32, FCC6, E331",
            'description' => "Sodium citrate –  is sodium salt of citric acid, a natural and safe food additive.
                                      It is an acidity regulator, stabilizer, emulsifier, emulsifying salt, synergist of antioxidants and color fixer.
",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Сорбіт (сорбітол)",
            'group' => "Підсолоджувачі",
            'field_of_usage' => "кондитерська, пиво-безалкогольна",
            'Product_usage'=> "Використовується в якості підсолоджувача і цукрозамінника в харчовій промисловості, при виробництві дієтичних продуктів та напоїв, жувальних гумок, кондитерських виробів, плодоовочевих консервів.
                                           Використовується при виробництві косметичних засобів, таких як прозорі гелі та шампуні, в якості згущувача. Як підсолоджувач при виробництві зубних паст, ополіскувач для полості рота. Входить в склад лаків для волосся, дезодорантів, бальзамів та інших косметичних засобів.
                                           Широко використовується в фармацевтиці при виробництві сиропів, аскорбинової кислоти, проносних засобів, мазей та іншого. Крім того, використовується в промисловій хімії.
",
            'Package' => "Мішки 25 кг",
            'img'=>'/img/images/product1.png',
            'Storage' => "Зберігати в сухому захищеному від світла місці",
            'Standart' => "Відповідає стандарту  FCCIV, Е420",
            'description' => "Сорбіт харчовий є натуральним цукрозамінником, емульгатором, комплексоутворювачем, стабілізатором кольору, вологоутримуюча та диспергуюча речовиною.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Сорбит (сорбитол)",
            'group' => "Подсластители",
            'img'=>'/img/images/product1.png',
            'pos_id'=>3,
            'Product_usage'=>"Применяется в качестве подсластителя и сахарозаменителя в пищевой промышленности, особенно, при производстве диетических продуктов и напитков, жевательных резинок, кондитерских изделий, плодоовощных консервов.
                                          Применяется при производстве косметических средств, таких, как прозрачные гели и шампуни,  как загуститель. Как подсластитель в производстве зубных паст, ополаскиватель для полости рта. Входит в состав лаков для волос, дезодорантов, бальзамов и других косметических средств.
                                          Широко применяется в фармацевтике, при производстве сиропов, аскорбиновой кислоты, слабительных средств, мазей и других.
                                          Кроме того, применяется в промышленной химии.",
            'field_of_usage' => "кондитерская,  пиво-безалкогольная",
            'Package' => "Мешки 25 кг",
            'Storage' => "Хранить в сухом защищенном от света месте",
            'Standart' => "Соответствует  стандарту FCCIV, Е420",
            'description' => "Сорбит пищевой является натуральным сахарозаменителем, эмульгатором, комплексообразователем, текстуратором, стабилизатором цвета, влагоудерживающим и диспергирующим веществом.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Sorbate (Sorbitol)",
            'group' => "Sweeteners",
            'img'=>'/img/images/product1.png',
            'pos_id'=>3,
            'Product_usage'=>"Used as a sweetener and sugar substitute in food industry, namely in production of dietary foods and drinks, chewing gum, confectionary goods, canned fruits and vegetables.
                                          Used as a thickener in the manufacturing of cosmetic products such as clear gels and shampoos. Also applied in the production of tooth paste and mouthwash as a sweetener. It is included in hair sprays, deodorants, balms and other cosmetics. Widely used in pharmaceuticals, production of syrups, ascorbic acid, laxatives, ointments and household chemicals.",
            'field_of_usage' => "confectionery items, beer, soft drinks",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards:  FCCIV, Е420",
            'description' => "Food-grade sorbate is a natural sweetener, emulsifier, complexing agent, texturizer, color stabilizer, water-retaining and dispersing substance.",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Глутамат натрію",
            'group' => "Підсолоджувачі",
            'field_of_usage' => "м'ясопереробна",
            'Product_usage'=> "Застосовується в якості підсилювача смаку та аромату в харчовій промисловості. Глутамат натрію сам майже без смаку і запаху, при цьому він загострює смакові якості птиці, м'яса, морських продуктів, грибів і певних овочів. Підсилює аромати, ослаблені в процесі переробки або при тривалому зберіганні. Широко застосовується при виробництві харчових концентратів: сухих супів, бульйонів, кубиків; при виробництві снеків; напівфабрикатів, продуктів швидкого приготування; соусів; консервів; в м'ясо- і рибопереробки, при виробництві приправ.",
            'Package' => "Мішки 25 кг",
            'img'=>'/img/images/product1.png',
            'Storage' => "Зберігати в сухому захищеному від світла місці",
            'Standart' => "Відповідає стандарту  FCCIV, Е420",
            'description' => "Глутамат натрію це білий кристалічний порошок зі слабозаметний солодко-солоним смаком, добре розчинний в рідини.
                                              - розчинність 74 г / 100 мл;
                                              - температура плавлення 165 ° C;
                                              - ефективність: стабільний в діапазоні pH 5 - 6,5. ",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Глутамат натрия",
            'group' => "Подсластители",
            'img'=>'/img/images/product1.png',
            'pos_id'=>4,
            'Product_usage'=>"Применяется в качестве усилителя вкуса и аромата в пищевой промышленности. Глутамат натрия сам почти без вкуса и запаха, при этом он обостряет вкусовые качества птицы, мяса, морских продуктов, грибов и определенных овощей. Усиливает ароматы, ослабленные в процессе переработки или при длительном хранении.  Широко применяется при производстве пищевых концентратов: сухих супов, бульонов, кубиков; при производстве снеков; полуфабрикатов, продуктов быстрого приготовления; соусов;  консервов; в мясо- и рыбопереработке, при производстве приправ.",
            'field_of_usage' => "мясоперерабатывающая",
            'Package' => "Мешки 25 кг",
            'Storage' => "Хранить в сухом защищенном от света месте",
            'Standart' => "Соответствует  стандарту FCCIV, Е420",
            'description' => "Глутамат натрия это белый кристаллический порошок со слабозаметным сладко-соленым вкусом, хорошо растворим в жидкости.
                                              - растворимость 74 г/100 мл;
                                              - температура плавления 165 °C;
                                              - эффективность: стабилен в диапазоне  pH 5 - 6,5.
",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Monosodium glutamate",
            'group' => "Sweeteners",
            'img'=>'/img/images/product1.png',
            'pos_id'=>4,
            'Product_usage'=>"It is widely applied as a flavor and aroma enhancer in the food industry. Although it is essentially flavorless and odorless, Monosodium glutamate increases the palatability of poultry, meat, seafood, mushrooms and certain vegetables. Enhances the aromas weakened by processing or long-term storage. It is widely used in the production of food concentrates: dry soup mixes, broths, bouillon cubes, snacks, intermediate and instant products, sauces, canned food. Used in meat and fish processing and the production of spices.",
            'field_of_usage' => "meat processing",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards:  FCCIV, Е420",
            'description' => "Monosodium glutamate is a white crystalline powder with slightly distinguishable sweet and salty taste that dissolves well in liquids;
                                              - Solubility 74 g/100 ml;
                                              - Melting temperature 165 °C;
                                              - Effectiveness: stable within pH range 5 - 6,5.
",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Ксантанова камідь",
            'group' => "Стабілізатори",
            'field_of_usage' => "виробництво соусів, желе",
            'Product_usage'=> "Ксантанова камідь використовується для стабілізації розчинів, підвищення еластичності та в'язкості. ЇЇ додають при виготовленні кремів, джемів, желе та інших соусів молочних продуктів (десертів, йогуртів, сирів), хлібо-булочних виробів. В м’ясопереробній галузі камідь використовують для утримання вологи в готовому харчовому продукті при виготовленні ковбасних виробів, фаршей, м’ясних консервів. При виробництві різнокольорового морозива її використовують для того, щоб різні кольори не змішувалися.
                                                   Зволожуючі та вологоутримуючі якості цієї речовини використовують в косметичній промисловості при виробництві гелей, кремів, лосьонів, масок, а також зубних паст та ополіскувачів ротової порожнини.
                                                   Крім харчової та косметичної промисловості, ксантанова камідь використовується в процесах видобутку нафти та газу.
                                                   Ксантанова камідь є нейтральним, гіпоалергеним продуктом, не заподіющим шкоду.",
            'Package' => "Мішки 25 кг",
            'img'=>'/img/images/product1.png',
            'Storage' => "Зберігати в сухому захищеному від світла місці",
            'Standart' => "Відповідає стандарту  FCCIV, Е420",
            'description' => "Ксантанова камідь відноситься до групи стабілізаторів. Виглядає як білий або сірий порошок без запаху, нейтрального смаку. Індекс в європейській кодифікації Е-415.
                                                  Ксантанова камідь - це полісахарид, виробляємий мікроорганізмами Xanthomonas Campestris.
                                                  Є гідрофільним коллоідом та використовується для загущення та стабилізації різноманітних розчинів в харчових виробництвах, емульсій, пен та суспензій. В інтервалі pH 2-12 ксантан характеризується високими значеннями вязкості та псевдопластичності. При взаємодії с іншими гідроколлоідами (каррагінан, гуарова комідь, камідь плодів рожкового дерева и конжакової (коньячної) камеді) проявляється сінергізм - ефект загущення вищий, ніж для кожного з загущувачів окремо.
                                                  Ксантанова камідь добре розчіняється як в холодній так і гарячій воді. Розчин стійкий до впливу температур в проміжку від -18°С до +120°С.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Ксантановая камедь",
            'group' => "Стабилизаторы",
            'img'=>'/img/images/product1.png',
            'pos_id'=>5,
            'Product_usage'=>"Ксантановая камедь применяется для стабилизации растворов, повышения эластичности и вязкости. Ее добавляют при изготовлении кремов, джемов, желе и всевозможных соусов, молочных продуктов (десертов, йогуртов, сыров), хлебобулочных изделий. В мясоперерабатывающей промышленности камедь используют для удержания влаги в готовом пищевом продукте при изготовлении колбасных изделий, фаршей, мясных консервов. При производстве многоцветного мороженого ее используют для того, чтобы разные цвета продукта не перемешивались.
                                                  Увлажняющие и влагоудерживающие свойства этого вещества используются в косметической промышленности при производстве гелей, кремов, лосьонов, масок, пенок, а также зубных паст и ополаскивателей для ротовой полости.
                                                  Помимо пищевой и косметической промышленности, ксантановая камедь применяется в процессах добычи нефти и газаю
                                                  Ксантановая камедь является нейтральным гипоаллергенным продуктом, не причиняющим вреда.",
            'field_of_usage' => "производство соусов, желе",
            'Package' => "Мешки 25 кг",
            'Storage' => "Хранить в сухом защищенном от света месте",
            'Standart' => "Соответствует  стандарту FCCIV, Е420",
            'description' => "Ксантановая камедь относится к группе стабилизаторов.  По внешнему виду представляет собой белый или серый порошок без запаха, нейтрального вкуса. Индекс в европейской кодификации Е-415..
                                                  Ксантановая камедь - это полисахарид, выделяемый микроорганизмами Xanthomonas Campestris. Является гидрофильным коллоидом и используется для загущения и стабилизации различных растворов в пищевых производствах, эмульсий, пен и суспензий. В диапазоне pH 2 – 12 ксантан характеризуется высокими значениями вязкости и псевдопластичности. При взаимодействии с другими гидроколлоидами (каррагинан, гуаровая камедь, камедь плодов рожкового дерева и конжаковая (коньячная) камедь) проявляет синергизм – эффект загущения выше, чем для каждого из загустителей по отдельности.
                                                  Ксантановая камедь хорошо растворима как в холодной, так и в теплой воде. Раствор устойчив к воздействию температур в диапазоне от -18°С до +120°С.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Xanthan gum",
            'group' => "Stabilizers",
            'img'=>'/img/images/product1.png',
            'pos_id'=>5,
            'Product_usage'=>"Xanthan gum is used to stabilize solutions, increase elasticity and viscosity. It is added during the manufacturing of creams, jams, jellies and all kinds of sauces, dairy products (desserts, yoghurts, cheeses), bakery goods. In the meat processing industry gum is used to retain moisture in sausages, minced meat and canned meat. It is also used to prevent colors from mixing in the production of multicolor ice cream.
                                                  The moisturizing and water-retaining properties of this substance serve well in the cosmetic industry. Specifically, in the production of gels, creams, lotions, masks, foams, as well as toothpaste and mouthwash.
                                                  Aside from the food and cosmetics industries, Xanthan gum is commonly used in oil and gas production processesю
                                                  Xanthan gum is a harmless neutral hypoallergenic product.",
            'field_of_usage' => "sauces, jelly",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards:  FCCIV, Е420",
            'description' => "Xanthan gum belongs to the stabilizers group. It is an odorless white or grey powder with a neutral taste. European codification index E-415.
                                                  Xanthan gum is a polysaccharide secreted by Xanthomonas Campestris microorganisms.
                                                  It is a hydrophilic colloid and is used to thicken and stabilize various solutions in food production, emulsions, foams and suspensions. Xanthan provides high values ​​of viscosity and pseudoplasticity in the pH range 2 - 12. When interacting with other hydrocolloids (carrageenan, guar gum, carob gum and konjac (cognac) gum) it exhibits synergy - the thickening effect becomes higher than for each of the thickeners separately.
                                                  Xanthan gum is well soluble in both cold and warm water. The solution is resistant to temperatures ranging from -18°C to 120°C.",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Сорбінова кислота",
            'group' => "Консервант",
            'field_of_usage' => "пиво-безалкогольна, кондитерська, хлібо-булочна, консервна",
            'Product_usage'=> "Використовуєстья для консервації и запобігання пліснявінню безалкогольних напоїв, плодово ягідних соків, кондитерських виробів (мармелад, джеми, варення, креми), а також зернистої ікри, сирів, напівкопчених ковбас.
                                                   При виробництві згущеного молока використовується для запобігання його затемнення (запобігає розвитку шоколадно-коричневой плесенью).
                                                   Сорбінова кислота входить в список сировини для стандартів та ТУ на таку продукцію як - молочні консерви, соки, соуси, майонези, маргарин, різноманітні сири, сухофрукти, оливки, варення та джеми, риба, безалкогольні напої, вина, яйцепродукти, начинки для пельменей, паштети, конфети і шоколад з начинням, хлібобулочні вироби.
                                                   Добавка Е 200 є одним з найбільш вивчених та разповсюджених консервантів в харчовій промисловості по причині безпечності для організму людини. Іншими сферами використання сорбінової кислоти стали табачна промисловість, косметологія (в якості консерванта), і виготовлення упаковочної тари для продуктів харчування.",
            'Package' => "Мішки 25 кг",
            'img'=>'/img/images/product1.png',
            'Storage' => "Зберігати в сухому захищеному від світла місці",
            'Standart' => "Відповідає стандарту  FCCIV, Е420",
            'description' => "Сорбінова кислота являє собою дрібні кристали без кольору та запаху, дуже незначно розчинні в воді, речовина не токсична і не є канцерогеном. В харчовій промисловості сорбінова кислота E 200 використовується в якості консерванта, мета якого збільшення терміну зберігання продуктів.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Сорбиновая кислота",
            'group' => "Консервант",
            'img'=>'/img/images/product1.png',
            'pos_id'=>6,
            'Product_usage'=>"Применяется с целью консервирования и предотвращения плесневения безалкогольных напитков, плодовоягодных соков, хлебопекарных, кондитерских изделий (мармелад, джемы, варенье, кремы), а также зернистой икры, сыров, полукопченых колбас.
                                                  При производстве сгущенного молока применяется для предотвращения его потемнения (препятствует развитию шоколадно-коричневой плесени).
                                                  Сорбиновая кислота входит в список сырья для ГОСТов и ТУ на такую продукцию как: молочные консервы, соки, соусы, майонезы, маргарин, различные сыры, сухофрукты, оливки, варенье и джемы, рыба, безалкогольные напитки, вина, яйцепродукты, начинки для пельменей, паштеты, конфеты и шоколад с начинками, хлебобулочные изделия.
                                                  Добавка Е200 является одним из самых хорошо изученных и распространенных консервантов в пищевой промышленности ввиду своей безопасности для организма человека.
                                                  Другими сферами применения Сорбиновой кислоты стали табачная промышленность, косметология (в качестве консерванта),  и изготовление упаковочной тары для продуктов питания.",
            'field_of_usage' => "пиво-безалкогольная, кондитерская, хлебо-булочная, консервная",
            'Package' => "Мешки 25 кг",
            'Storage' => "Хранить в сухом защищенном от света месте",
            'Standart' => "Соответствует  стандарту FCCIV, Е420",
            'description' => "Сорбиновая кислота представляет собой мелкие кристаллы без цвета и запаха, очень незначительно растворимые в воде, вещество нетоксично и не является канцерогеном.
                                                  В пищевой промышленности сорбиновая кислота E 200 применяется в качестве консерванта, с целью увеличить срок хранения продуктов.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Sorbic acid",
            'group' => "Preservative",
            'img'=>'/img/images/product1.png',
            'pos_id'=>6,
            'Product_usage'=>"Sorbic acid is used to preserve and prevent molds in soft drinks, fruit juices, bakery products, confectionery items (marmalade, jams, preserves, creams), as well as granular caviar, cheeses, semi-smoked sausages.
                                                  It is used to avoid the darkening during the production of condensed milk (prevents the development of chocolate brown mold).
                                                  Sorbic acid is included in a list of raw materials that are in conformance to GOST and TU standards for such products as canned milk products, juices, sauces, mayonnaise, margarine, various cheeses, dried fruits, olives, preserves and jams, fish, soft drinks, wines, egg-based products, dumplings fillings, pates, filled sweets, candy and chocolate, baked goods.
                                                  Admixture Е200 is one of the most well-studied and most commonly consumed preservatives due to its safety for human health.
                                                  Other applications for Sorbic acid include the tobacco industry, cosmetology (as a preservative), and manufacturing of food packaging.",
            'field_of_usage' => "beer, soft drinks, confectionery items, bakery products, canned goods",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards:  FCCIV, Е420",
            'description' => "Sorbic acid comes in small colorless and odorless crystals, slightly soluble in water, the substance is non-toxic and is not a carcinogen.
                                                  Sorbic acid E 200 is used in the food industry as a preservative in order to extend the shelf life of products.",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Сорбат калію",
            'group' => "Консервант",
            'field_of_usage' => "пиво-безалкогольна, кондитерська, консервна",
            'Product_usage'=> "Представляє собою білий порошок або гранули без запаху з нейтральнім смаком.  Один з найбільш популярних консервантів во всіх отраслях харчової промисловості внаслідок своєї безпечності. Добре розчиняєсться в воді, витримує термообробку, здатен швидко змішуватися з консістенцією продуктів і не впливає на їх смак.
                                                       Також використовуєсться в косметчній та фармацевтичній промисловості, використовується в якості підкислювача в кормах.
                                                       Володіє сильною антибактеріальною дією, має антистресову дію, є каталізатором обміну речовин, сінергістом антиоксидантів. Відповідає за активізацію ферментів, поліпшує засвоювання кормів.",
            'Package' => "Мішки 25 кг",
            'img'=>'/img/images/product1.png',
            'Storage' => "Зберігати в сухому захищеному від світла місці",
            'Standart' => "Відповідає вимогам стандартів якості: ВР2009, USP32, FCC6, E202",
            'description' => "Сорбат калію - це природний безпечний для здоров’я людини консервант, активно пригнічуючий дрожі, цвілеві гриби, аеробні бактерії, ферменти, там самим збільшуючи термін придатності продуктів.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Сорбат калия",
            'group' => "Консервант",
            'img'=>'/img/images/product1.png',
            'pos_id'=>7,
            'Product_usage'=>"Представляет собой белый порошок или гранулы без запаха с нейтральным вкусом. . Это один из наиболее популярных консервантов во всех отраслях пищевой промышленности вследствие своей безопасности. Хорошо растворим в воде, выдерживает термообработку, способен быстро смешиваться с консистенцией продуктов и не влияет на их вкус.
                                                      Также применяется в  косметической и фармацевтической промышленности, используется как подкислитель в кормах.  Обладает сильным антибактериальным действием, оказывает антистрессовое действие, является катализатором обмена веществ, синергистом антиоксидантов. Отвечает за активизацию ферментов, улучшает усвояемость кормов.",
            'field_of_usage' => "пиво-безалкогольная, кондитерская, консервная",
            'Package' => "Мешки 25 кг",
            'Storage' => "Хранить в сухом защищенном от света месте",
            'Standart' => "Соответствует стандартам качества: ВР2009, USP32, FCC6, E202",
            'description' => "Сорбат калия – это природный безопасный для здоровья человека консервант, активно угнетающий дрожжи, плесневые грибы, аэробные бактерии, ферменты, увеличивая тем самым срок годности продуктов.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Potassium sorbate",
            'group' => "Preservative",
            'img'=>'/img/images/product1.png',
            'pos_id'=>7,
            'Product_usage'=>"Odorless white powder or granules with a neutral taste. It is one of the most popular preservatives in all branches throughout the food industry because of how safe it is. It dissolves well in water, withstands heat treatment, quickly mixes with consistency of the products without altering their taste.
                                                      It is also widely applied in cosmetic and pharmaceutical industry, and used as feed acidifier. It has a strong antibacterial and anti-stress effects, acts as a metabolic catalyst and a synergist of antioxidants.
                                                      Responsible for the activation of enzymes, improves feed’s digestibility.",
            'field_of_usage' => "beer, soft drinks, confectionery items, canned goods",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards: ВР2009, USP32, FCC6, E202",
            'description' => "Potassium sorbate is a natural preservative that is safe for human health. It actively suppresses yeast, molds, aerobic bacteria, enzymes, thereby increasing the shelf life of products.",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Бензоат натрію",
            'group' => "Консервант",
            'field_of_usage' => "консервна",
            'Product_usage'=> "Використовується для консервування м'ясних та рибних виробів, маргарина, майонеза, кетчупа, плодово-ягідних продуктів, солодких газованих продуктів.
                                                           Як консервант використовується в косметичній та фармацевтичній промисловості. Використовується в медицині як відхаркуючий засіб, зазвичай в складі комбінованих препаратів.",
            'Package' => "Мішки 25 кг",
            'img'=>'/img/images/product1.png',
            'Storage' => "Зберігати в сухому захищеному від світла місці",
            'Standart' => "Відповідає вимогам стандартів якості: ВР2009, USP32, FCC6, E202",
            'description' => "Має потужну пригнічуючу дію на дріжджі та цвілеві гриби, пригнічує в клітинах активність ферментів, відповідальних за окислювально-відновлювальні реакції, а також ферментів, розщеплюючи жири та крахмал.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Бензоат натрия",
            'group' => "Консервант",
            'img'=>'/img/images/product1.png',
            'pos_id'=>8,
            'Product_usage'=>"Применяется для консервирования мясных и рыбных изделий, маргарина, майонеза, кетчупа, плодово-ягодных продуктов, сладких газированных напитков.
                                                          Как консервант используется в косметической и фармацевтической промышленности. Применяется в медицине как отхаркивающее средство, обычно в составе комбинированных препаратов.",
            'field_of_usage' => "консервная",
            'Package' => "Мешки 25 кг",
            'Storage' => "Хранить в сухом защищенном от света месте",
            'Standart' => "Соответствует стандартам качества: ВР2009, USP32, FCC6, E202",
            'description' => "Оказывает сильное угнетающее действие на дрожжи и плесневые грибы, подавляет в клетках активность ферментов, ответственных за окислительно-восстановительные реакции, а также ферментов, расщепляющих жиры и крахмал.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Sodium benzoate",
            'group' => "Preservative",
            'img'=>'/img/images/product1.png',
            'pos_id'=>8,
            'Product_usage'=>"It is used for canning meat and fish products, margarine, mayonnaise, ketchup, fruit and berry products, sweet carbonated drinks.
                                                          Used as a preservative in the cosmetic and pharmaceutical industries. It is used in medicine as an expectorant, usually in combination preparations.",
            'field_of_usage' => "canned goods",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards: ВР2009, USP32, FCC6, E202",
            'description' => "Sodium benzoate actively suppresses yeast, molds, aerobic bacteria, enzymes, actively suppress ferments in cells, responsible for redox reactions, as well as enzymes that break down fats and starch.",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Ізолят соєвого білка",
            'group' => "Протеїн",
            'field_of_usage' => "мясопереробна, молочна, спортивне харчування",
            'Product_usage'=> "Ізолят соєвого білку в більшому ступені використовують в харчовій промисловості в якості часткової заміни м'ясної сировини. Використовується в виробництві ковбасних виробів, консервів, мясних, рибних та молочних виробів, хлібобулочних, мучних і кондитерських виробів, супів, сухих напоїв, продуктів дієтичного та дитячого харчування, спортивного харчування.",
            'Package' => "Мішки 20 кг",
            'img'=>'/img/images/product1.png',
            'Storage' => "Зберігати в сухому захищеному від світла місці",
            'Standart' => "Відповідає вимогам стандартів якості: ВР2009, USP32, FCC6, E202",
            'description' => "Ізолят соєвого белка - очищений від вуглеводів, рослинної клітчатки і жира соєвий продукт, що містить не менше ніж 90% білку в сухій речовині. Йому властиві низька в’язкість, висока розчинність, хорошею жироемульсуючою здатністю и є одним з найфункціональніших продуктів соєвого белку на ринку.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Изолят соевого белка",
            'group' => "Протеин",
            'img'=>'/img/images/product1.png',
            'pos_id'=>9,
            'Product_usage'=>"Изолят соевого белка в большей степени применяют в пищевой промышленности в качестве частичной замены мясного сырья. Используется в производстве колбасных изделий, консервов, мясных, рыбных и молочных продуктов, хлебобулочных, мучных и кондитерских изделий, супов, сухих напитков, продуктов диетического и детского питания, спортивного питания.",
            'field_of_usage' => "мясоперерабатывающая, молочная, спортивное питание",
            'Package' => "Мешки 20 кг",
            'Storage' => "Хранить в сухом защищенном от света месте",
            'Standart' => "Соответствует стандартам качества: ВР2009, USP32, FCC6, E202",
            'description' => "Изолят соевого белка – очищенный от углеводов, растительной клетчатки и жира соевый продукт, содержащий не менее 90% белка в сухом веществе. Он обладает низкой вязкостью, высокой растворимостью, хорошей жироэмульгирующей способностью и является одним из самых функциональных продуктов соевого белка на рынке.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Soy Protein Isolate",
            'group' => "Protein",
            'img'=>'/img/images/product1.png',
            'pos_id'=>9,
            'Product_usage'=>"Soy protein isolate mainly used like part meat products substitution. Used in production of sausages, canned foods, meat, fish and milk products, bread products, soups, dry drinks, dietical and baby nutrition, sports nutrition.",
            'field_of_usage' => "meat and milk processing, sports nutrition",
            'Package' => "20 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards: ВР2009, USP32, FCC6, E202",
            'description' => "Soy protein isolate - is cleared from  used from carbohydrates and fats, soy product which contain not less than 90% protein. He has low viscosity, high solubility, good fat emulsifying ability and is one of most functional products on market.",
        ]);
    }
}

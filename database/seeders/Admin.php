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
            'name' => 'root',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('root1234')
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
        DB::table('model_has_roles')->insert([
            'model_type' => 'App\Models\User',
            'role_id' => '1',
            'model_id' => '1',
        ]);
        DB::table('product_ukrs')->insert([
            'name' => "Лимонна кислота",
            'group' => "Антиоксиданти",
            'field_of_usage' => "пивобезалкогольна, кондитерська, хлібобулочна, консервна",
            'Product_usage' => "В косметичних препаратах використовується як консервант, розчинник, модифікатор pH, відповідного pH шкіри. Відбілює та очищує шкіру. Вводиться в склад кремів, депіляторів, ополіскувачів для волосся, кремів. Лимона кислота використовується як підкислювач в кормах. Володіє потужним антибактеріальною дією, має анти стресову дію, є каталізатором обміну речовин, синергіст антиоксидантів. Відповідає за активацію ферментів, поліпшує засвоюваність кормів.",
            'Package' => "Мішки по 25 кг",
            'img' => '/img/images/product1.png',
            'Storage' => "Зберігати в сухому, захищеному від світла місці",
            'Standart' => "Відповідає стандартам якості: ВР2009, USP32, FCC6, E330",
            'description' => "В харчовій промисловості лимонна кислота (Е330) широко використовується в виробництві безалкогольних напоїв, тому що має найбільш м'який та освіжаючий смак, в порівнянні з іншими харчовими кислотами. При виробництві кондитерських виробів використовується як ароматизатор та підкислювач. При виробництві хлібобулочних виробів використовується як один з компонентів розпушувача тіста. В олійно-жировій промисловості лимона кислота значно зменшує вірогідність прогорання жирів, маргаринів та тваринного масла.При виробництві консервів, використовується як консервант.
"]);
        DB::table('product_rus')->insert([
            'name' => "Лимонная кислота",
            'group' => "Антиоксиданты",
            'img' => '/img/images/product1.png',
            'pos_id' => 1,
            'Product_usage' => "В косметических препаратах  применяется как консервант, разбавитель, модификатор pH, соответствующего pH кожи. Оказывает на кожу вяжущее, очищающее и отбеливающее действие. Вводится в состав очищающих кремов, депиляториев, ополаскивателей для волос, красок для волос, кремов от веснушек.
Лимонная кислота используется как подкислитель в кормах.  Обладает сильным антибактериальным действием, оказывает антистрессовое действие, является катализатором обмена веществ, синергистом антиоксидантов. Отвечает за активизацию ферментов, улучшает усвояемость кормов.",
            'field_of_usage' => "пивобезалкогольная, кондитерская, хлебобулочная, консервная",
            'Package' => "Мешки по 25 кг",
            'Storage' => "Хранить в сухом, защищенном от света месте",
            'Standart' => "Соответствует стандартам качества: ВР2009, USP32, FCC6, E330",
            'description' => "В пищевой промышленности лимонная кислота (Е330)  широко применяется  в производстве безалкогольных напитков, поскольку обладает наиболее мягким и освежающим вкусом по сравнению с другими пищевыми кислотами.
В производстве кондитерских изделий применяется как ароматизатор и подкислитель. В производстве хлебобулочных изделий применяется как один из компонентов разрыхлителей теста. В масложировой промышленности лимонная кислота значительно снижает вероятность прогоркания жиров, маргаринов и животного масла. При производстве консервов используется, как консервант.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Citric acid",
            'group' => "Antioxidants",
            'img' => '/img/images/product1.png',
            'pos_id' => 1,
            'Product_usage' => "Widely used in cosmetics, since it acts as a preservative, diluent, a pH modifier corresponding to pH level of the skin. Has an astringent, cleansing and whitening effect on the skin. It is included in the formula of cleansing creams, depilatories, hair rinses, hair dyes and freckle creams. Citric acid is also used as a feed acidifier. It has strong antibacterial and anti-stress effects, acts as a metabolic catalyst and a synergist of antioxidants.",
            'field_of_usage' => "beer, soft drinks, confectionery items, bakery, canned goods",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards: ВР2009, USP32, FCC6, E330",
            'description' => "Citric acid (E330) is widely used in the production of soft drinks, since it has the softest and most refreshing taste compared to other food acids in the food industry. It is used as flavoring and acidifier in the production of confectionery items, and added as one of the components of dough leavening agents in the production of bakery products. Citric acid significantly reduces the likelihood of rancidity of fats, margarine and animal oils in the oil and fats industry. It is also used as a preservative during the production of canned goods.",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Цитрат натрію",
            'group' => "Стабілізатори",
            'field_of_usage' => "пиво-безалкогольна, консервна",
            'Product_usage' => "Використовується як підсилювача харчових відчуттів при виробництві цитрусових газованих напоїв, при виробництві пива, енергетиків, соків та компотів. Як регулятор рівня кислотності використовується в виробництві кисломолочних виробів, йогурту, мармеладу, пастили. Також використовується при стерилізації молока, консервів, сухого молока. Додається в емульговані рослинні та тваринні масла та жири. Також використовується в виробництві косметики та побутової хімії.",
            'Package' => "Мішки по 25 кг",
            'img' => '/img/images/p/p2.png',
            'Storage' => "Зберігати в сухому, захищеному від світла місці",
            'Standart' => "Відповідає стандартам якості: ВР2009, USP32, FCC6, E331",
            'description' => "Цитрат натрію - це натрієва сіль лимонної кислоти, натуральна та безпечна харчова добавка. За своїми якостями - це регулятор кислотності, стабілізатор, емульгатор, емульгувальна  сіль, синергіст антиоксидантів, фіксатор фарбування.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Цитрат натрия",
            'group' => "Стабилизаторы",
            'img' => '/img/images/p/p2.png',
            'pos_id' => 2,
            'Product_usage' => "Применяют в качестве усилителя вкусовых ощущений при производстве цитрусовых газированных напитков, при производстве пива, энергетиков, соков и компотов. В качестве регулятора уровня кислотности применяется в производстве кисломолочных продуктов, йогурта, мармелада, пастилы. Также применяют при стерилизации молока, консервов, сухого молока. Добавляют в неэмульгированные растительные и животные масла и жиры.
                                      Также применяют в фармацевтике, производстве косметики и бытовой химии.",
            'field_of_usage' => "пивобезалкогольная, консервная",
            'Package' => "Мешки по 25 кг",
            'Storage' => "Хранить в сухом, защищенном от света месте",
            'Standart' => "Соответствует стандартам качества: ВР2009, USP32, FCC6, E331",
            'description' => "Цитрат натрия – это натриевая соль лимонной кислоты, натуральная и безопасная пищевая добавка.
                                      По своим свойствам - это регулятор кислотности, стабилизатор, эмульгатор, эмульгирующая соль, синергист антиоксидантов, фиксатор окраски.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Sodium citrate",
            'group' => "Stabilizers",
            'img' => '/img/images/p/p2.png',
            'pos_id' => 2,
            'Product_usage' => "It is used as a taste enhancer in the production of carbonated citrus drinks, beer, energy drinks, juices and compotes; as an acidity level regulator throughout the production of fermented milk products, yogurt, marmalade, pastilles. Also used for milk sterilization, canned food, and milk powder. Added to non-emulsified vegetable and animal oils and fats. Applied in pharmaceuticals, cosmetics and household chemicals.",
            'field_of_usage' => "beer, soft drinks, canned goods",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards: ВР2009, USP32, FCC6, E331",
            'description' => "Sodium citrate –  is the sodium salt of citric acid, a natural and safe food additive.
                                      It is an acidity regulator, stabilizer, emulsifier, emulsifying salt, synergist of antioxidants and color fixer.
",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Сорбіт (сорбітол)",
            'group' => "Підсолоджувачі",
            'field_of_usage' => "кондитерська, пиво-безалкогольна",
            'Product_usage' => "Використовується як підсолоджувач і цукрозамінника в харчовій промисловості, при виробництві дієтичних продуктів та напоїв, жувальних гумок, кондитерських виробів, плодоовочевих консервів. Використовується при виробництві косметичних засобів, таких як прозорі гелі та шампуні, як загущувач. Як підсолоджувач при виробництві зубних паст, ополіскувач для порожнини рота. Входить в склад лаків для волосся, дезодорантів, бальзамів та інших косметичних засобів. Широко використовується в фармацевтиці при виробництві сиропів, аскорбінової кислоти, проносних засобів, мазей та іншого. Крім того, використовується в промисловій хімії",
            'Package' => "Мішки по 25 кг",
            'img' => '/img/images/p/p3.png',
            'Storage' => "Зберігати в сухому, захищеному від світла місці",
            'Standart' => "Відповідає стандарту  FCCIV, Е420",
            'description' => "Сорбіт харчовий є натуральним цукрозамінником, емульгатором, комплексоутворювачем, стабілізатором кольору, утримувачем вологи та диспергувальною речовиною",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Сорбит (сорбитол)",
            'group' => "Подсластители",
            'img' => '/img/images/p/p3.png',
            'pos_id' => 3,
            'Product_usage' => "Применяется в качестве подсластителя и сахарозаменителя в пищевой промышленности, особенно, при производстве диетических продуктов и напитков, жевательных резинок, кондитерских изделий, плодоовощных консервов.
                                          Применяется при производстве косметических средств, таких как прозрачные гели и шампуни как загуститель. Как подсластитель в производстве зубных паст, ополаскиватель для полости рта. Входит в состав лаков для волос, дезодорантов, бальзамов и других косметических средств.
                                          Широко применяется в фармацевтике, при производстве сиропов, аскорбиновой кислоты, слабительных средств, мазей и других.
                                          Кроме того, применяется в промышленной химии.",
            'field_of_usage' => "кондитерская,  пивобезалкогольная",
            'Package' => "Мешки по 25 кг",
            'Storage' => "Хранить в сухом, защищенном от света месте",
            'Standart' => "Соответствует  стандарту FCCIV, Е420",
            'description' => "Сорбит пищевой является натуральным сахарозаменителем, эмульгатором, комплексообразованием, текстуратором, стабилизатором цвета, водоудерживающим и диспергирующим веществом.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Sorbate (Sorbitol)",
            'group' => "Sweeteners",
            'img' => '/img/images/p/p3.png',
            'pos_id' => 3,
            'Product_usage' => "Used as a sweetener and sugar substitute in the food industry, namely in production of dietary foods and drinks, chewing gum, confectionary goods, canned fruits and vegetables. Used as a thickener in the manufacturing of cosmetic products such as clear gels and shampoos. Also applied in the production of toothpaste and mouthwash as a sweetener. It is included in hair sprays, deodorants, balms and other cosmetics. Widely used in pharmaceuticals, production of syrups, ascorbic acid, laxatives, ointments and household chemicals.",
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
            'Product_usage' => "Застосовується як підсилювач смаку та аромату в харчовій промисловості. Глутамат натрію сам майже без смаку і запаху, при цьому він загострює смакові якості птиці, м'яса, морських продуктів, грибів і певних овочів. Підсилює аромати, ослаблені в процесі перероблення або при тривалому зберіганні. Широко застосовується при виробництві харчових концентратів: сухих супів, бульйонів, кубиків; при виробництві снеків; напівфабрикатів, продуктів швидкого приготування; соусів; консервів; в м'ясо- і рибопереробки, при виробництві приправ.",
            'Package' => "Мішки по 25 кг",
            'img' => '/img/images/p/p4.png',
            'Storage' => "Зберігати в сухому, захищеному від світла місці",
            'Standart' => "Відповідає стандарту  FCCIV, Е420",
            'description' => "Глутамат натрію це білий кристалічний порошок зі слабким солодко-солоним смаком, добре розчинний в рідини.
                                              - розчинність 74 г / 100 мл;
                                              - температура плавлення 165 ° C;
                                              - ефективність: стабільний в діапазоні pH 5 - 6,5. ",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Глутамат натрия",
            'group' => "Подсластители",
            'img' => '/img/images/p/p4.png',
            'pos_id' => 4,
            'Product_usage' => "Применяется в качестве усилителя вкуса и аромата в пищевой промышленности. Глутамат натрия сам почти без вкуса и запаха, при этом он обостряет вкусовые качества птицы, мяса, морских продуктов, грибов и определенных овощей. Усиливает ароматы, ослабленные в процессе переработки или при длительном хранении.  Широко применяется при производстве пищевых концентратов: сухих супов, бульонов, кубиков; при производстве снеков; полуфабрикатов, продуктов быстрого приготовления; соусов;  консервов; в мясо- и рыбопереработке, при производстве приправ.",
            'field_of_usage' => "мясоперерабатывающая",
            'Package' => "Мешки по 25 кг",
            'Storage' => "Хранить в сухом, защищенном от света месте",
            'Standart' => "Соответствует  стандарту FCCIV, Е420",
            'description' => "Глутамат натрия это белый кристаллический порошок со слабо заметным сладко-соленым вкусом, хорошо растворим в жидкости.
                                              - растворимость 74 г/100 мл;
                                              - температура плавления 165 °C;
                                              - эффективность: стабилен в диапазоне  pH 5 - 6,5.
",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Monosodium glutamate",
            'group' => "Sweeteners",
            'img' => '/img/images/p/p4.png',
            'pos_id' => 4,
            'Product_usage' => "It is widely applied as a flavor and aroma enhancer in the food industry. Although it is essentially flavorless and odorless, Monosodium glutamate increases the palatability of poultry, meat, seafood, mushrooms and certain vegetables. Enhances the aromas weakened by processing or long-term storage. It is widely used in the production of food concentrates: dry soup mixes, broths, bouillon cubes, snacks, intermediate and instant products, sauces, canned food. Used in meat and fish processing and the production of spices.",
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
            'name' => "Ксантанова камедь",
            'group' => "Стабілізатори",
            'field_of_usage' => "виробництво соусів, желе",
            'Product_usage' => "Ксантанова камедь належить до групи стабілізаторів. Виглядає як білий або сірий порошок без запаху, нейтрального смаку. Індекс в європейській кодифікації Е-415. Ксантанова камедь - це полісахарид, виготовлений завдяки мікроорганізмам Xanthomonas Campestris. Є гідрофільним колоїдом та використовується для загущення та стабілізації різноманітних розчинів в харчових виробництвах, емульсій, пен та суспензій. В інтервалі pH 2-12 ксантан характеризується високими значеннями в'язкості та псевдо-пластичності. При взаємодії с іншими гідроколоїдами (карагнан, гуарова камедь, камедь плодів ріжкового дерева і конжакової (коньячної) камеді) проявляється синергізм - ефект згущення вищий, ніж для кожного з згущувачів окремо. Ксантанова камедь добре розчиняється як в холодній, так і гарячій воді. Розчин стійкий до впливу температур в проміжку від -18°C до +120°C.",
            'Package' => "Мішки по 25 кг",
            'img' => '/img/images/p/p5.png',
            'Storage' => "Зберігати в сухому, захищеному від світла місці",
            'Standart' => "Відповідає стандарту  FCCIV, Е420",
            'description' => "Ксантанова камедь використовується для стабілізації розчинів, підвищення еластичності та в'язкості. ЇЇ додають при виготовленні кремів, джемів, желе та інших соусів молочних продуктів (десертів, йогуртів, сирів), хлібобулочних виробів. В м’ясопереробній галузі камедь використовують для утримання вологи в готовому харчовому продукті при виготовленні ковбасних виробів, фаршів, м’ясних консервів. При виробництві різнокольорового морозива її використовують для того, щоб різні кольори не змішувалися. Зволожувальні якості та здатність речовини утримувати вологу використовують в косметичній промисловості при виробництві гелію, кремів, лосьйонів, масок, а також зубних паст і ополіскувачів ротової порожнини. Крім харчової та косметичної промисловості, ксантанова камедь використовується в процесах видобутку нафти та газу. Ксантанова камедь є нейтральним, гіпоалергенним продуктом, який не є шкідливим.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Ксантановая камедь",
            'group' => "Стабилизаторы",
            'img' => '/img/images/p/p5.png',
            'pos_id' => 5,
            'Product_usage' => "Ксантановая камедь применяется для стабилизации растворов, повышения эластичности и вязкости. Ее добавляют при изготовлении кремов, джемов, желе и всевозможных соусов, молочных продуктов (десертов, йогуртов, сыров), хлебобулочных изделий. В мясоперерабатывающей промышленности камедь используют для удержания влаги в готовом пищевом продукте при изготовлении колбасных изделий, фаршей, мясных консервов. При производстве многоцветного мороженого ее используют для того, чтобы разные цвета продукта не перемешивались. Увлажняющие и водоудерживающие свойства этого вещества используются в косметической промышленности при производстве гелей, кремов, лосьонов, масок, пенок, а также зубных паст и ополаскивателей для ротовой полости. Помимо пищевой и косметической промышленности, ксантановая камедь применяется в процессах добычи нефти и газа. Ксантановая камедь - нейтральный, гипоаллергенный продуктом, не причиняющим вреда.",
            'field_of_usage' => "производство соусов, желе",
            'Package' => "Мешки по 25 кг",
            'Storage' => "Хранить в сухом, защищенном от света месте",
            'Standart' => "Соответствует  стандарту FCCIV, Е420",
            'description' => "Ксантановая камедь относится к группе стабилизаторов. По внешнему виду представляет собой белый или серый порошок без запаха, нейтрального вкуса. Индекс в европейской кодификации Е-415. Ксантановая камедь - это полисахарид, выделяемый микроорганизмами Xanthomonas Campestris. Является гидрофильным коллоидом и используется для загущения и стабилизации различных растворов в пищевых производствах, эмульсий, пен и суспензий. В диапазоне pH 2 – 12 ксантан характеризуется высокими значениями вязкости и псевдопластичности. При взаимодействии с другими гидроколлоидными (каррагинан, гуаровая камедь, камедь плодов рожкового дерева и конжаковая (коньячная) камедь) проявляет синергизм – эффект загущения выше, чем для каждого из загустителей по отдельности. Ксантановая камедь хорошо растворима как в холодной, так и в теплой воде. Раствор устойчив к воздействию температур в диапазоне от -18°С до +120°С.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Xanthan gum",
            'group' => "Stabilizers",
            'img' => '/img/images/p/p5.png',
            'pos_id' => 5,
            'Product_usage' => "Xanthan gum is used to stabilize solutions, increase elasticity and viscosity. It is added during the manufacturing of creams, jams, jellies and all kinds of sauces, dairy products (desserts, yogurts, cheeses) and bakery goods. In the meat processing industry, gum is used to retain moisture in sausages, minced meat and canned meat. It is also used to prevent colors from mixing in the production of multicolor ice cream. The moisturizing and water-retaining properties of this substance serve well in the cosmetic industry. Specifically, in the production of gels, creams, lotions, masks, foams, as well as toothpaste and mouthwash. Aside from the food and cosmetics industries, Xanthan gum is commonly used in oil and gas production processes Xanthan gum is a harmless neutral hypoallergenic product.",
            'field_of_usage' => "sauces, jelly",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards:  FCCIV, Е420",
            'description' => "Xanthan gum belongs to the stabilizers group. It is an odorless white or gray powder with a neutral taste. European codification index E-415.
                                                  Xanthan gum is a polysaccharide secreted by Xanthomonas Campestris microorganisms.
                                                  It is a hydrophilic colloid and is used to thicken and stabilize various solutions in food production, emulsions, foams and suspensions. Xanthan provides high values ​​of viscosity and pseudoplasticity in the pH range 2 - 12. When interacting with other hydrocolloids (carrageenan, guar gum, carob gum and konjac (cognac) gum) it exhibits synergy - the thickening effect becomes higher than for each of the thickeners separately.
                                                  Xanthan gum is well soluble in both cold and warm water. The solution is resistant to temperatures ranging from -18°C to 120°C.",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Сорбінова кислота",
            'group' => "Консервант",
            'field_of_usage' => "пиво-безалкогольна, кондитерська, хлібобулочна, консервна",
            'Product_usage' => "Використовується для консервації та запобігання пліснявінню безалкогольних напоїв, плодово-ягідних соків, кондитерських виробів (мармелад, джеми, варення, креми), а також зернистої ікри, сирів, напівкопчених ковбас. При виробництві згущеного молока використовується для запобігання його затемнення (запобігає розвитку шоколадно-коричневої плісняви). Сорбінова кислота входить в список сировини для стандартів та ТУ на таку продукцію як: молочні консерви, соки, соуси, майонези, маргарин, різноманітні сири, сухофрукти, оливки, варення та джеми, риба, безалкогольні напої, вина, яйце продукти, начинки для пельменів, паштети, цукерки та шоколад з начинкою, хлібобулочні вироби. Добавка Е200 є одним з найбільш вивчених та розповсюджених консервантів в харчовій промисловості по причині безпечності для організму людини. Іншими сферами використання сорбінової кислоти стали тютюнова промисловість, косметологія (як консервант) і виготовлення упаковочної тари для харчових продуктів.",
            'Package' => "Мішки по 25 кг",
            'img' => '/img/images/p/p6.png',
            'Storage' => "Зберігати в сухому, захищеному від світла місці",
            'Standart' => "Відповідає стандарту  FCCIV, Е420",
            'description' => "Сорбінова кислота являє собою дрібні кристали без кольору та запаху, дуже незначно розчинні в воді, речовина не токсична і не є канцерогеном. В харчовій промисловості сорбінова кислота E 200 використовуєтьсяяк консервант, мета якого збільшення терміну зберігання продуктів.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Сорбиновая кислота",
            'group' => "Консервант",
            'img' => '/img/images/p/p6.png',
            'pos_id' => 6,
            'Product_usage' => "Применяется с целью консервирования и предотвращения плесневения безалкогольных напитков, плодовоягодных соков, хлебопекарных, кондитерских изделий (мармелад, джемы, варенье, кремы), а также зернистой икры, сыров, полукопченых колбас.
                                                  При производстве сгущенного молока применяется для предотвращения его потемнения (препятствует развитию шоколадно-коричневой плесени).
                                                  Сорбиновая кислота входит в список сырья для ГОСТов и ТУ на такую продукцию как: молочные консервы, соки, соусы, майонезы, маргарин, различные сыры, сухофрукты, оливки, варенье и джемы, рыба, безалкогольные напитки, вина, яйцепродукты, начинки для пельменей, паштеты, конфеты и шоколад с начинками, хлебобулочные изделия.
                                                  Добавка Е200 является одним из самых хорошо изученных и распространенных консервантов в пищевой промышленности ввиду своей безопасности для организма человека.
                                                  Другими сферами применения Сорбиновой кислоты стали табачная промышленность, косметология (в качестве консерванта),  и изготовление упаковочной тары для продуктов питания.",
            'field_of_usage' => "пивобезалкогольная, кондитерская, хлебобулочная, консервная",
            'Package' => "Мешки по 25 кг",
            'Storage' => "Хранить в сухом, защищенном от света месте",
            'Standart' => "Соответствует  стандарту FCCIV, Е420",
            'description' => "Сорбиновая кислота представляет собой мелкие кристаллы без цвета и запаха, очень незначительно растворимые в воде, вещество нетоксично и не является канцерогеном.
                                                  В пищевой промышленности сорбиновая кислота E 200 применяется в качестве консерванта, с целью увеличить срок хранения продуктов.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Sorbic acid",
            'group' => "Preservative",
            'img' => '/img/images/p/p6.png',
            'pos_id' => 6,
            'Product_usage' => "Sorbic acid is used to preserve and prevent molds in soft drinks, fruit juices, bakery products, confectionery items (marmalade, jams, preserves, creams), as well as granular caviar, cheeses, semi-smoked sausages.
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
            'Product_usage' => "Являє собою білий порошок або гранули без запаху з нейтральним смаком. Один з найбільш популярних консервантів во всіх галузях харчової промисловості внаслідок своєї безпечності. Добре розчиняється в воді, витримує термообробку, здатний швидко змішуватися з консистенцією продуктів і не впливає на їх смак. Також використовується в косметичній та фармацевтичній промисловості, використовується як підкислювач в кормах. Володіє сильною антибактеріальною дією, має антистресову дію, є каталізатором обміну речовин, синергісти антиоксидантів. Відповідає за активацію ферментів, поліпшує засвоєння кормів.",
            'Package' => "Мішки по 25 кг",
            'img' => '/img/images/product1.png',
            'Storage' => "Зберігати в сухому, захищеному від світла місці",
            'Standart' => "Відповідає вимогам стандартів якості: ВР2009, USP32, FCC6, E202",
            'description' => "Сорбат калію - це природний безпечний для здоров’я людини консервант, який активно пригнічує дріжджі, цвілеві гриби, аеробні бактерії, ферменти, там самим збільшуючи термін придатності продуктів.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Сорбат калия",
            'group' => "Консервант",
            'img' => '/img/images/product1.png',
            'pos_id' => 7,
            'Product_usage' => "Представляет собой белый порошок или гранулы без запаха с нейтральным вкусом. Это один из наиболее популярных консервантов во всех отраслях пищевой промышленности вследствие своей безопасности. Хорошо растворим в воде, выдерживает термообработку, способен быстро смешиваться с консистенцией продуктов и не влияет на их вкус.
                                                      Также применяется в  косметической и фармацевтической промышленности, используется как подкислитель в кормах.  Обладает сильным антибактериальным действием, оказывает антистрессовое действие, является катализатором обмена веществ, синергистом антиоксидантов. Отвечает за активизацию ферментов, улучшает усвояемость кормов.",
            'field_of_usage' => "пивобезалкогольная, кондитерская, консервная",
            'Package' => "Мешки по 25 кг",
            'Storage' => "Хранить в сухом, защищенном от света месте",
            'Standart' => "Соответствует стандартам качества: ВР2009, USP32, FCC6, E202",
            'description' => "Сорбат калия – это природный безопасный для здоровья человека консервант, активно угнетающий дрожжи, плесневые грибы, аэробные бактерии, ферменты, увеличивая тем самым срок годности продуктов.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Potassium sorbate",
            'group' => "Preservative",
            'img' => '/img/images/product1.png',
            'pos_id' => 7,
            'Product_usage' => "Odorless white powder or granules with a neutral taste. It is one of the most popular preservatives in all branches throughout the food industry because of how safe it is. It dissolves well in water, withstands heat treatment, quickly mixes with the consistency of the products without altering their taste. Furthermore, it is also widely applied in the cosmetic and pharmaceutical industry, and used as feed acidifier. It has strong antibacterial and anti-stress effects, acts as a metabolic catalyst and a synergist of antioxidants. Responsible for the activation of enzymes, improves feed’s digestibility.",
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
            'Product_usage' => "Використовується для консервування м'ясних та рибних виробів, маргарину, майонезу, кетчупу, плодово-ягідних продуктів, солодких газованих продуктів. Як консервант використовується в косметичній та фармацевтичній промисловості. Використовується в медицині як відхаркувальний засіб, зазвичай в складі комбінованих препаратів.",
            'Package' => "Мішки по 25 кг",
            'img' => '/img/images/p/p8.png',
            'Storage' => "Зберігати в сухому, захищеному від світла місці",
            'Standart' => "Відповідає вимогам стандартів якості: ВР2009, USP32, FCC6, E202",
            'description' => "Має потужну дію, направлену на пригнічення дріжджів та цвілевих грибів, пригнічує в клітинах активність ферментів, відповідальних за окислювально-відновлювальні реакції, а також ферментів, розщеплюючи жири та крохмаль.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Бензоат натрия",
            'group' => "Консервант",
            'img' => '/img/images/p/p8.png',
            'pos_id' => 8,
            'Product_usage' => "Применяется для консервирования мясных и рыбных изделий, маргарина, майонеза, кетчупа, плодово-ягодных продуктов, сладких газированных напитков.
                                                          Как консервант используется в косметической и фармацевтической промышленности. Применяется в медицине как отхаркивающее средство, обычно в составе комбинированных препаратов.",
            'field_of_usage' => "консервная",
            'Package' => "Мешки по 25 кг",
            'Storage' => "Хранить в сухом, защищенном от света месте",
            'Standart' => "Соответствует стандартам качества: ВР2009, USP32, FCC6, E202",
            'description' => "Оказывает сильное угнетающее действие на дрожжи и плесневые грибы, подавляет в клетках активность ферментов, ответственных за окислительно-восстановительные реакции, а также ферментов, расщепляющих жиры и крахмал.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Sodium benzoate",
            'group' => "Preservative",
            'img' => '/img/images/p/p8.png',
            'pos_id' => 8,
            'Product_usage' => "It is used for canning meat and fish products, margarine, mayonnaise, ketchup, fruit and berry products and sweet carbonated drinks.
                                                          Used as a preservative in the cosmetic and pharmaceutical industries. It is used in medicine as an expectorant, usually in combination preparations.",
            'field_of_usage' => "canned goods",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards: ВР2009, USP32, FCC6, E202",
            'description' => "Sodium benzoate actively suppresses yeast, molds, aerobic bacteria, enzymes, actively suppresses ferments in cells, responsible for redox reactions, as well as enzymes that break down fats and starch.",
        ]);


        DB::table('product_ukrs')->insert([
            'name' => "Ізолят соєвого білка",
            'group' => "Протеїн",
            'field_of_usage' => "м'ясопереробна, молочна, спортивне харчування",
            'Product_usage' => "Ізолят соєвого білка в більшому ступені використовують в харчовій промисловості як часткова заміна м'ясної сировини. Використовується в виробництві ковбасних виробів, консервів, м'ясних, рибних та молочних виробів, хлібобулочних, мучних і кондитерських виробів, супів, сухих напоїв, продуктів дієтичного та дитячого харчування, спортивного харчування.",
            'Package' => "Мішки по 20 кг",
            'img' => '/img/images/p/p9.png',
            'Storage' => "Зберігати в сухому, захищеному від світла місці",
            'Standart' => "Відповідає вимогам стандартів якості: ВР2009, USP32, FCC6, E202",
            'description' => "Ізолят соєвого білка - очищений від вуглеводів, рослинної клітковини та жиру соєвий продукт, що містить не менше ніж 90% білку в сухій речовині. Йому властиві низька в’язкість, висока розчинність, хорошою жироемульгуючою здатністю та є одним з найфункціональніших продуктів соєвого білка на ринку.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Изолят соевого белка",
            'group' => "Протеин",
            'img' => '/img/images/p/p9.png',
            'pos_id' => 9,
            'Product_usage' => "Изолят соевого белка в большей степени применяют в пищевой промышленности в качестве частичной замены мясного сырья. Используется в производстве колбасных изделий, консервов, мясных, рыбных и молочных продуктов, хлебобулочных, мучных и кондитерских изделий, супов, сухих напитков, продуктов диетического и детского питания, спортивного питания.",
            'field_of_usage' => "мясоперерабатывающая, молочная, спортивное питание",
            'Package' => "Мешки по 20 кг",
            'Storage' => "Хранить в сухом, защищенном от света месте",
            'Standart' => "Соответствует стандартам качества: ВР2009, USP32, FCC6, E202",
            'description' => "Изолят соевого белка – очищенный от углеводов, растительной клетчатки и жира соевый продукт, содержащий не менее 90% белка в сухом веществе. Он обладает низкой вязкостью, высокой растворимостью, хорошей жиро эмульгирующей способностью и является одним из самых функциональных продуктов соевого белка на рынке.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Soy Protein Isolate",
            'group' => "Protein",
            'img' => '/img/images/p/p9.png',
            'pos_id' => 9,
            'Product_usage' => "Soy protein isolate is mainly used like part meat products substitution. Used in production of sausages, canned foods, meat, fish and milk products, bread products, soups, dry drinks, dietical and baby nutrition, sports nutrition.",
            'field_of_usage' => "meat and milk processing, sports nutrition",
            'Package' => "20 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards: ВР2009, USP32, FCC6, E202",
            'description' => "Soy protein isolate - is cleared from carbohydrates and fats, soy products which contain not less than 90% protein. He has low viscosity, high solubility, good fat emulsifying ability and is one of most functional products on the market.",
        ]);


/// Пшеничная клейковина


        DB::table('product_ukrs')->insert([
            'name' => "Пшенична клейковина (Глютен)",
            'group' => "протеїни",
            'field_of_usage' => "борошномельна, хлібопекарська, кондитерська, макаронна, м’ясна, виробництво напівфабрикатів (пельмені, равіолі, вареники)",
            'Product_usage' => "Борошномельне виробництво: для покращення якості борошна. Хлібопекарське виробництво: підвищує здатність до утримання газу, покращує формостійкість, підвищує вихід та термін зберігання готових виробів. Кондитерське виробництво: використовується для виробництва затяжного печива та галет при використанні борошна з низьким вмістом клейковини, також для листкового, бісквітного, пісочного та заварного тіста. Виробництво макаронних виробів: підвищує пружність, усуває липкість готових виробів. Виробництво напівфабрикатів: знижує розварювання виробів, підвищує еластичність тіста, знижує злипання виробів. М'ясне виробництво: використовується у приготуванні фаршів, забезпечує однорідну структуру фаршу та ковбасних виробів, підвищує вміст білку та покращує структуру й смакові якості виробів.",
            'Package' => "Мішки по 25 кг",
            'img' => '/img/images/p/p9.png',
            'Storage' => "Зберігати в сухому, захищеному від світла місці.",
            'Standart' => "Відповідає вимогам стандартів якості: ВР2009, USP32, FCC6, E202",
            'description' => "Пшенична клейковина - нерозчинний у воді білок рослинного походження, у процесі гідратації набрякає та утворює волокна. Функціональні властивості глютену полягають у високій (180-200%) абсорбційній здатності, утворенню стабільної пружно-еластичної структури та термостійкості при 85°C."]);
        DB::table('product_rus')->insert([
            'name' => "Пшеничная клейковина (Глютен)",
            'group' => "Протеин",
            'img' => '/img/images/p/p9.png',
            'pos_id' => 10,
            'Product_usage' => "Мукомольное производство: для улучшения качества муки. Хлебопекарное производство: увеличивает газоудерживающую способность, улучшает формоустойчивость,повышает выход и срок хранения готовых изделий. Кондитерское производство: используется для производства затяжного печенья и галет при использовании муки с пониженым содержанием клейковины, также для слоеного, бисквитного, песочного и заварного теста. Производство макаронных изделий: повышает упругость, устраняет липкость сваренных изделий. Производство полуфабрикатов: снижает развариваемость изделий, увеличивает эластичность теста, снижает слипаемость изделий. Мясное производство: используется в приготовлении фаршей, обеспечивает однородную структуру фарша и колбасных изделий, повышает содержание белка улучшает структуру и вкусовые качества изделий.",
            'field_of_usage' => "мукомольная, хлебопекарная, кондитерская, макаронная, мясная, производство полуфабрикатов (пельмени, равиоли, вареники)",
            'Package' => "Мешки по 25 кг",
            'Storage' => "Хранить в сухом, защищенном от света месте",
            'Standart' => "Соответствует стандартам качества: ВР2009, USP32, FCC6, E202",
            'description' => "Пшеничная клейковина – водонерастворимый белок растительного происхождения, в процессе гидратации набухает и образует волокна. Функциональные свойства глютена заключаются в высокой (180 - 200% ) абсорбционной способности, образовании стабильной упруго - эластичной структуры и термоустойчивости при 85°С.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Wheat gluten",
            'group' => "Protein",
            'img' => '/img/images/p/p9.png',
            'pos_id' => 10,
            'Product_usage' => "Production of flour: to improve the quality of flour. Production of bread: increases gas retaining power, improves shape stability, yield and shelf life of the produce. Confectionery: used for production of short dough cookies and plain biscuits if using flour with low gluten content, also for production of puff pastry, biscuit, shortcrust and choux pastry dough. Production of pasta: improves resilience, removes adhesiveness of ready pasta. Manufacturing of semi-ready products: prevents overcooking, improves dough elasticity, reduces adhesiveness of cooked products. Meat industry: used in production of forcemeat, ensures homogeneous structure of forcemeat and sausage products, improves protein content, structure and taste of the products.",
            'field_of_usage' => " Production of flour, bread, confectionary, pasta, meat,   semi-ready products (meat dumplings, ravioli, dumplings).",
            'Package' => "25 kg bags",
            'Storage' => "Store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards: ВР2009, USP32, FCC6, E202",
            'description' => "Wheat gluten is a plant protein which is insoluble in water. In the process of hydration, it creates fibers. Functional properties of gluten include high absorbing properties (180-200%), creation of stable viscoelastic structure and thermal stability at 85deg C.",
        ]);
        DB::table('contact_table_en')->insert([
            "id" => 1,
            "tel1" => "+38 (067) 686 92 91",
            "tel2" => "+38 (050) 332 66 44",
            "email1" => "akabanov@chemonika.com.ua",
            "email2" => "a.petrishcheva@chemonika.com.ua",
            "adrs" => "81a Yuri Ilyenko Str, Kyiv, Ukraine"
        ]);
        DB::table('contact_table_ukr')->insert([
            "id" => 1,
            "tel1" => "+38 (067) 686 92 91",
            "tel2" => "+38 (050) 332 66 44",
            "email1" => "akabanov@chemonika.com.ua",
            "email2" => "a.petrishcheva@chemonika.com.ua",
            "adrs" => "Україна, м. Київ, вул. Юрія Ильєнка 81а"
        ]);
        DB::table('contact_table_ru')->insert([
            "id" => 1,
            "tel1" => "+38 (067) 686 92 91",
            "tel2" => "+38 (050) 332 66 44",
            "email1" => "akabanov@chemonika.com.ua",
            "email2" => "a.petrishcheva@chemonika.com.ua",
            "adrs" => "Украина, Киев, ул. Юрия Ильенко 81а"
        ]);

        DB::table('partners')->insert([
            "id" => 1,
            "url" => "/img/photo/image.png",
            "pos_id" => 0,
        ]);
        DB::table('partners')->insert([
            "id" => 2,
            "url" => "/img/photo/image1.png",
            "pos_id" => 0,
        ]);
        DB::table('partners')->insert([
            "id" => 3,
            "url" => "/img/photo/image2.png",
            "pos_id" => 0,
        ]);
        DB::table('partners')->insert([
            "id" => 4,
            "url" => "/img/photo/image3.png",
            "pos_id" => 0,
        ]);
        DB::table('partners')->insert([
            "id" => 5,
            "url" => "/img/photo/image4.png",
            "pos_id" => 0,
        ]);
        DB::table('position_p')->insert([
            "id" => 1,
            "array" => '["1","2","3","4","5"]'
        ]);

        DB::table('groups_f')->insert([
            "id" => 1,
            "name" => 'Антиоксиданти',
            "lang" => "ukr"
        ]);
        DB::table('groups_f')->insert([
            "id" => 2,
            "name" => 'Підсолоджувачі',
            "lang" => "ukr"
        ]);
        DB::table('groups_f')->insert([
            "id" => 3,
            "name" => 'Стабілізатори',
            "lang" => "ukr"
        ]);
        DB::table('groups_f')->insert([
            "id" => 4,
            "name" => 'Консервант',
            "lang" => "ukr"
        ]);
        DB::table('groups_f')->insert([
            "id" => 5,
            "name" => 'Протеїн',
            "lang" => "ukr"
        ]);
        DB::table('groups_f')->insert([
            "id" => 6,
            "name" => 'Антиоксиданты',
            "lang" => "ru"
        ]);
        DB::table('groups_f')->insert([
            "id" => 7,
            "name" => 'Подсластители',
            "lang" => "ru"
        ]);
        DB::table('groups_f')->insert([
            "id" => 8,
            "name" => 'Стабилизаторы',
            "lang" => "ru"
        ]);
        DB::table('groups_f')->insert([
            "id" => 9,
            "name" => 'Консервант',
            "lang" => "ru"
        ]);
        DB::table('groups_f')->insert([
            "id" => 10,
            "name" => 'Протеин',
            "lang" => "ru"
        ]);
        DB::table('groups_f')->insert([
            "id" => 11,
            "name" => 'Antioxidants',
            "lang" => "en"
        ]);
        DB::table('groups_f')->insert([
            "id" => 12,
            "name" => 'Sweeteners',
            "lang" => "en"
        ]);
        DB::table('groups_f')->insert([
            "id" => 13,
            "name" => 'Stabilizers',
            "lang" => "en"
        ]);
        DB::table('groups_f')->insert([
            "id" => 14,
            "name" => 'Preservatives',
            "lang" => "en"
        ]);
        DB::table('groups_f')->insert([
            "id" => 15,
            "name" => 'Protein',
            "lang" => "en"
        ]);

        DB::table('field_of_usages')->insert([
            "id" => 1,
            "name" => 'Food',
            "lang" => "en"
        ]);
        DB::table('field_of_usages')->insert([
            "id" => 2,
            "name" => 'Пищевая',
            "lang" => "ru"
        ]);
        DB::table('field_of_usages')->insert([
            "id" => 3,
            "name" => 'Харчова',
            "lang" => "ukr"
        ]);
        DB::table('field_of_usages')->insert([
            "id" => 4,
            "name" => 'Косметична',
            "lang" => "ukr"
        ]);
        DB::table('field_of_usages')->insert([
            "id" => 5,
            "name" => 'Косметическая',
            "lang" => "ru"
        ]);
        DB::table('field_of_usages')->insert([
            "id" => 6,
            "name" => 'Cosmetic',
            "lang" => "en"
        ]);

    }

}

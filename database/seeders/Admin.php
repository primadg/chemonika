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
            'group' => "Антиоксиданты",
            'field_of_usage' => "пиво-безалкогольная, кондитерская, хлебо-булочная, консервная",
            'Product_usage'=> "В косметичних препаратах використовується як консервант, розчинник, модіфікатор pH, відповідного pH кожи. Надає в'яжучий, очищающий та відбілюючий ефект шкірі. Вводиться в склад кремів, депіляторів, ополіскувачів для волос, кремів. Лимона кислота використовується як підкислювач в кормах. Володіє потужним антибактеріальною дією, має анті стресову дію, є каталізатором обміну речовин, синергісти антиоксидантів. Відповідає за активацію ферментів, поліпшує засвоюваність  кормів.",
            'Package' => "мішки 25 кг",
            'img'=>'img',
            'Storage' => "зберігати в сухому захищеному від світла місці",
            'Standart' => "Відповідає стандартам якості: ВР2009, USP32, FCC6, E330.",
            'description' => "В харчовій промисловості лимона кислота (Е330) широко використовується в виробництві без-алкогольних напоїв, тому що має найбільш мякий та освіжаючий смак в порівнянні з іншими харчовими кислотами.
При виробництві кондитерських виробів використовується як ароматизатор та підкислювач. При виробництві хлібо-булочних виробів використовується як один з компонентів  розпушувача тіста. В олія-жировій промисловості лимона кислота значно зменшує вірогідність прогоркання жирыв, маргаринів та животного масла. При виробництві консервів, використовується як консервант.",
        ]);
        DB::table('product_rus')->insert([
            'name' => "Лимонная кислота",
            'group' => "Антиоксиданты",
            'img'=>'img',
            'pos_id'=>1,
            'Product_usage'=>"В косметических препаратах  применяется как консервант, разбавитель, модификатор pH, соответствующего pH кожи. Оказывает на кожу вяжущее, очищающее и отбеливающее действие. Вводится в состав очищающих кремов, депиляториев, ополаскивателей для волос, красок для волос, кремов от веснушек.
Лимонная кислота используется как подкислитель в кормах.  Обладает сильным антибактериальным действием, оказывает антистрессовое действие, является катализатором обмена веществ, синергистом антиоксидантов. Отвечает за активизацию ферментов, улучшает усвояемость кормов",
            'field_of_usage' => " пиво-безалкогольная, кондитерская, хлебо-булочная, консервная",
            'Package' => "мешки 25 кг",
            'Storage' => "Соответствует стандартам качества: ВР2009, USP32, FCC6, E330.",
            'Standart' => "Відповідає стандартам якості: ВР2009, USP32, FCC6, E330.",
            'description' => "В пищевой промышленности лимонная кислота (Е330)  широко применяется  в производстве безалкогольных напитков, поскольку обладает наиболее мягким и освежающим вкусом по сравнению с другими пищевыми кислотами.
В производстве кондитерских изделий применяется как ароматизатор и подкислитель. В производстве хлебобулочных изделий применяется как один из компонентов разрыхлителей теста. В масложировой промышленности лимонная кислота значительно снижает вероятность прогоркания жиров, маргаринов и животного масла. При производстве консервов используется, как консервант.",
        ]);
        DB::table('product_ens')->insert([
            'name' => "Citric acid",
            'group' => "antioxidants",
            'img'=>'img',
            'pos_id'=>1,
            'Product_usage'=>" Widely used in cosmetics, since it acts as a preservative, diluent, a pH modifier corresponding to pH level of the skin.
Has an astringent, cleansing and whitening effect on the skin. It is included in the formula of cleansing creams, depilatories, hair rinses, hair dyes and freckle creams.
Citric acid is also used as feed acidifier. It has a strong antibacterial and anti-stress effects, acts as a metabolic catalyst and a synergist of antioxidants.
",
            'field_of_usage' => "beer, soft drinks, confectionary items, bakery, canned goods",
            'Package' => "25 kg bags",
            'Storage' => "store in a dry place protected from direct sunlight",
            'Standart' => "Compliant with quality standards: ВР2009, USP32, FCC6, E330.",
            'description' => "Citric acid (E330) is widely used in the production of soft drinks, since it has the softest and most refreshing taste compared to other food acids in the food industry.
It is used as flavoring and acidifier in the production of confectionery items and added as one of the components of dough leavening agents in the production of bakery products. Citric acid significantly reduces the likelihood of rancidity of fats, margarines and animal oils in the oil and fats industry. It is also used as a preservative during the production of canned goods.
",
        ]);
    }
}

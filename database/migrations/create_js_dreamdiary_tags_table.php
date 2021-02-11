<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsDreamdiaryTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_dreamdiary_tags', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_dreamdiary_tags', function (Blueprint $table) {
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->integer('group_id')->unsigned();
        });

        \App\Models\js_dreamdiary_tags::insert(array(
            array(
                'name' => 'Совместный',
                'description' => 'Во сне присутствовал человек, который явно не является спрайтом или неоргаником',
                'group_id' => 1
            ),
            array(
                'name' => 'Неорганик',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Летун',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Ведьма',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Дриада',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Зулейка',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Винсенто',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Снифферы',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Страж сновидений',
                'description' => 'Преследует по всем локациям',
                'group_id' => 1
            ),
            array(
                'name' => 'Страж светимости',
                'description' => 'Охраняет точку светимости, преследует только в ее пределах',
                'group_id' => 1
            ),
            array(
                'name' => 'Союзник',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Умерший',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Незнакомец',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Мать',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Отец',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Сестра',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Брат',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Дочь',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Сын',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Дядя',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Тетя',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Племянник',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Племянница',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Одноклассник',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Одногруппник',
                'description' => '',
                'group_id' => 1
            ),
            array(
                'name' => 'Коллега',
                'description' => '',
                'group_id' => 1
            ),

            array(
                'name' => 'Неосознанный',
                'description' => 'Любой бред принимаешь за чистую монету',
                'group_id' => 2
            ),
            array(
                'name' => 'Сюжет об ОСе',
                'description' => '',
                'group_id' => 2
            ),
            array(
                'name' => 'Подсознательно осознанный',
                'description' => 'Подсознательно на протяжении всего сна знаешь, что спишь, но игнорируешь этот факт',
                'group_id' => 2
            ),
            array(
                'name' => 'Осознанный',
                'description' => 'Посередь сна понял, что спишь. Контроля над сном мало, стабильность плохая, в любой момент можно увлечься сюжетом',
                'group_id' => 2
            ),
            array(
                'name' => 'Контролируемый',
                'description' => 'Осуществлен прямой вход при засыпании, есть полный контроль над всеми элементами сна. Спрайты, местность, локация, собственное тело, голос, время дня и года, скорость течения времени, направление течения времени',
                'group_id' => 2
            ),

            array(
                'name' => 'Серый',
                'description' => 'Поверхностный сон, тона чаще серые, меньше спрайтов, меньше стабильность сна',
                'group_id' => 4
            ),
            array(
                'name' => 'Яркий',
                'description' => 'Сон в архетипичной локации, тона чаще яркие, больше спрайтов, возможно случайно встретить других сновидцев, немного хуже запоминается',
                'group_id' => 4
            ),
            array(
                'name' => 'Глубинный',
                'description' => 'Мир сна ощущается более реалистичным и стабильным, чем сам физический мир, крайне редко случается, крайне плохо запоминается',
                'group_id' => 4
            ),

            array(
                'name' => 'Сновиденный мир (Йесод)',
                'description' => '',
                'group_id' => 5
            ),
            array(
                'name' => 'Астрал',
                'description' => '',
                'group_id' => 5
            ),
            array(
                'name' => 'Нижний мир',
                'description' => '',
                'group_id' => 5
            ),
            array(
                'name' => 'Йондо',
                'description' => 'Черная пустыня и два города',
                'group_id' => 5
            ),
            array(
                'name' => 'Туле',
                'description' => 'Страна великанов с источником вечной жизни',
                'group_id' => 5
            ),
            array(
                'name' => 'Сиклис',
                'description' => 'Мир семи хив неоргаников',
                'group_id' => 5
            ),
            array(
                'name' => 'Каузальный мир (Нецах)',
                'description' => 'Мир причин и следствий',
                'group_id' => 5
            ),
            array(
                'name' => 'Ход',
                'description' => 'Мир света, огня, союзников и мудрости',
                'group_id' => 5
            ),
            array(
                'name' => 'Мир неоргаников',
                'description' => 'Просто некий неустановленный мир, принадлежащий неорганикам',
                'group_id' => 5
            ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('js_dreamdiary_record_tags', function (Blueprint $table) {
            $table->dropForeign('js_dreamdiary_record_tags_tag_id_foreign');
        });
        Schema::table('js_dreams_locations', function (Blueprint $table) {
            $table->dropForeign('js_dreams_locations_tag_id_foreign');
        });
        Schema::dropIfExists('js_dreamdiary_tags');
    }
}

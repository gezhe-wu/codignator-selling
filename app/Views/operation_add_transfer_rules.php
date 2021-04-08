<?php include_once 'head.php' ?>
<?php include_once 'header.php' ?>


<h3>Основна інформація по операціях</h3>
<p>Операціями називаються будь які фінансові переміщення, які здійснюються співробітниками компаніями
	Всі операції повинні вноситися до кінця дня в який вони були зроблені. На основі внесених операцій в кожного
	співробітника формується баланс кас в системі. Щовівторка баланс в системі на зборах звіряється з реальним балансом
	співробітника. Операції заповнюються тим співробітником, хто здійснює операцію або його керівником. Тобто,
	операції переміщення заповнюються тим, з чиєї каси зроблено переміщення, операції приходу - тим, хто отримує гроші,
	операції витрат - тим, хто здійснює витрату.</p>

<h3 class="text-center">Переміщення</h3>
<p>Переміщенням рахується переміщення грошей в межах компанії між співробітниками, наприклад, від директора РКМу, від КМ
	до оператора і т.д.</p>
<strong>Поля:</strong><br/>
<strong>З гаманця</strong> - каса з якої здійснюється переміщення, важливо вибрати правильну валюту.
Директору і фінансисту доступні також каси ТОВ і ФОП<br/>
<strong>Сума</strong> - сума операції<br/>
<strong>Валюта</strong> - валюта операції ( важливо, щоб співпадало з валютою каси, з якої здійснюється операція )<br/>
<strong>Співробітнику</strong> - співробітник, кому здійснюється переміщенняью При виборі валюти і співробітника правильний гаманець
вибирається автоматично<br/>
<strong>Гаманець</strong> - каса в яку здійснюється прихід, важливо вибрати правильну валюту.
Директору і фінансисту доступні також каси ТОВ і ФОП<br/>
<strong>Дата</strong> - дата здійснення операції. По замовчуванню відображається сьогоднішня дата<br/>
<strong>Проект</strong> - проект по якому проходить операція. В подальшому буде використовуватися для
формування план фактів по проектах. Необов'язкове поле<br/>
<strong>Заявка</strong> - операція витрати обов'язково повинна відноситися до якоїсь заявки. Це необіхдно, щоб були створені
заявки на всі витрати які здійснює співробітник і компанія в цілому, тому, що на основі заявок здійснюється фін.планування
в загальнмоу по компанії<br/>

<strong>Коментар</strong> - короткий опис операції для ідентифікації її в загальному списку<br/>

<strong>Відправити</strong> - при натисканні на відправлення зберігається операція і створюється операція додавання на склад,
якщо відмічено "закупка на склад"<br/>

<br/>

<?php include_once 'popup.php' ?>
<?php include_once 'footer.php' ?>

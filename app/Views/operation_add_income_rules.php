<?php include_once 'head.php' ?>
<?php include_once 'header.php' ?>


<h3>Основна інформація по операціях</h3>
<p>Операціями називаються будь які фінансові переміщення, які здійснюються співробітниками компаніями
	Всі операції повинні вноситися до кінця дня в який вони були зроблені. На основі внесених операцій в кожного
	співробітника формується баланс кас в системі. Щовівторка баланс в системі на зборах звіряється з реальним балансом
	співробітника. Операції заповнюються тим співробітником, хто здійснює операцію або його керівником. Тобто,
	операції переміщення заповнюються тим, з чиєї каси зроблено переміщення, операції приходу - тим, хто отримує гроші,
	операції витрат - тим, хто здійснює витрату.</p>

<h3 class="text-center">Прихід</h3>
<p>Приходом рахується отримання грошей від зовнішніх контрагентів.</p>
<strong>Поля:</strong><br/>
<strong>Контрагент</strong> - фізична чи юридична особа, якій здійснюється оплата. Потрібно вибрати контрагента зі списку.
Якщо в списку немає - натиснути на кнопку "додати контрагента" і він з'явиться в списку як вибраний. Пошук по контрагенту
здійснюється по ключових словах, які є в кожного контрагента, наприклад, це може бути ім'я, прізвище, ініціали,
ім'я російською мовою і т.д<br/>
<strong>Сума</strong> - сума операції<br/>
<strong>Валюта</strong> - валюта операції ( важливо, щоб співпадало з валютою каси, з якої здійснюється операція )<br/>
<strong>Гаманець</strong> - каса в яку здійснюється прихід, важливо вибрати правильну валюту.
Директору і фінансисту доступні також каси ТОВ і ФОП<br/>
<strong>Дата</strong> - дата здійснення операції. По замовчуванню відображається сьогоднішня дата<br/>
<strong>Проект</strong> - проект по якому проходить операція. В подальшому буде використовуватися для
формування план фактів по проектах. Необов'язкове поле<br/>
<strong>Стаття доходів</strong> - стаття доходів для даної операції. Статті доходів розділяються по блоках залежно
від продукту і департаменту, і потім це відображається в звіті про рух грошових коштів<br/>
<strong>Кредит</strong> - потрібно відмітити, якщо прихід є кредитом. Тоді він зберігається в списку кредитів<br/>
<strong>Процент, Валюта</strong> - якщо кредит є платним, тут можна відобразити тут суму і валюту процентів<br/>
<strong>Наступна дата
	виплати</strong>дата оплати процентів, яка є стартовою точкою для вирахування наступних періодів оплати<br/>

<strong>Коментар</strong> - короткий опис операції для ідентифікації її в загальному списку<br/>


<strong>Відправити</strong> - при натисканні на відправлення зберігається операція і створюється операція додавання на склад,
якщо відмічено "закупка на склад"<br/>

<br/>

<?php include_once 'popup.php' ?>
<?php include_once 'footer.php' ?>

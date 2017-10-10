<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('activate a trial as a user and get access to paid content');
$I->amOnPage('/');
//кликаю на название раздела "Журнал"
$I->click('Журнал', '.main-nav__item.__tr-bg');
$I->wait(3);
//вижу в хэдере раздел "Актуальная задача"
$I->see('Актуальная задача', '.responsive-menu__link');
//кликаю на название раздела в хэдере
$I->click('Актуальная задача', '.responsive-menu__item');
$I->wait(3);
//вижу на странице заголовок статьи
$I->see('8 правил исполнительного производства для взыскателя', '.news-card__wrapper');
//нажимаю на заголовок статьи
$I->click('8 правил исполнительного производства для взыскателя', '.news-card__wrapper');
$I->wait(3);
//убеждаюсь, что элемент присутствует на странице
$I->seeElement('.paid-content');
$I->click('.user-activity__link.js-modal-open');
$I->wait(3);
$I->fillField('#aemail', 'jannael86@gmail.com');
$I->fillField('#apass', '123456');
$I->click('Войти', '.authorization__form.auth-form');
$I->wait(3);
//нажимаю кнопку триала
$I->click('Активировать', '.personal-area__trial');
//жду поп-ап окно подтверждения активации
$I->wait(3);
$I->see('Пробный доступ активирован', '.modal-info.js-modal-content._active');
//закрываю окно подтверждения активации триала
$I->click('.modal._wide._white.modal_opened .modal__close.js-modal-close');
//жду, когда кнопка активации триала перестанет отображаться
$I->waitForElementNotVisible('.personal-area__trial-btn.js-activate-trial');
//проверяю, что отображается корректный тариф
$I->see('Пробный','.personal-area__tariff-type');
//кликаю на название раздела "Журнал"
$I->click('Журнал', '.main-nav__item.__tr-bg');
$I->wait(3);
//вижу в хэдере раздел "Актуальная задача"
$I->see('Актуальная задача', '.responsive-menu__link');
//кликаю на название раздела в хэдере
$I->click('Актуальная задача', '.responsive-menu__item');
$I->wait(5);
//вижу на странице заголовок статьи
$I->see('8 правил исполнительного производства для взыскателя', '.news-card__wrapper');
//нажимаю на заголовок статьи
$I->click('8 правил исполнительного производства для взыскателя', '.news-card__wrapper');
$I->wait(3);
//убеждаюсь, что элемент отсутствует на странице
$I->dontSeeElement('.paid-content');

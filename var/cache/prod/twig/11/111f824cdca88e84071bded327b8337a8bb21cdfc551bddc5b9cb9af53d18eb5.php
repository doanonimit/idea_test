<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__88bd31e539f97a8c8f11e4cc24dffd4fe233a058be5868077c1c9c1b7d03f9b4 */
class __TwigTemplate_0ed86395fdffd5b608b7109ddf862a612a5e6258b543d239d7d6bc4072722661 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Товары • a0439042.xsph.ru</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'ru';
    var lang_is_rtl = '0';
    var full_language_code = 'ru-ru';
    var full_cldr_language_code = 'ru-RU';
    var country_iso_code = 'RU';
    var _PS_VERSION_ = '1.7.6.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'В вашем магазине появился новый заказ.';
    var order_number_msg = 'Номер заказа: ';
    var total_msg = 'Всего: ';
    var from_msg = 'С: ';
    var see_order_msg = 'Смотреть заказ';
    var new_customer_msg = 'Новый клиент зарегистрировался в вашем магазине.';
    var customer_name_msg = 'Имя клиента: ';
    var new_msg = 'Новая сообщение было отправлено в ваш магазин.';
    var see_msg = 'Прочитать это сообщение';
    var token = 'e523a9d59d7a3c03e5e348cedd0ba9c8';
    var token_admin_orders = 'c96d85d3f1c9404b3363dd7693ccb618';
    var token_admin_customers = '5e0f878840efc322ebc719c313dc9c75';
    var token_admin_customer_threads = '5786de5eb3cbfb4c69dcafcd5b88d07c';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'dbf6940190f8c41326b42b9398cdf0e8';
    var choose_language_translate = 'Выберите язык';
    var default_language = '1';
    var admin_modules_link = '/admin645nrpqow/index.php/improve/modules/catalog/recommended?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM';
    var admin_notification_get_link = '/admin645nrpqow/index.php/common/notifications?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM';
    var admin_notification_push_link = '/admin645nrpqow/index.php/common/notifications/ack?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Успешно обновлено';
    var errorLogin = 'PrestaShop не может войти в систему Addons, пожалуйста, проверьте свои данные и интернет-соединение.';
    var search_product_msg = 'Искать товар';
  </script>

      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin645nrpqow/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin645nrpqow/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin645nrpqow\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin645nrpqow\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\";
var currency = {\"iso_code\":\"RUB\",\"sign\":\"\\u20bd\",\"name\":\"\\u0420\\u043e\\u0441\\u0441\\u0438\\u0439\\u0441\\u043a\\u0438\\u0439 \\u0440\\u0443\\u0431\\u043b\\u044c\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"currencyCode\":\"RUB\",\"currencySymbol\":\"\\u20bd\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/admin645nrpqow/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/admin645nrpqow/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/admin645nrpqow/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin645nrpqow/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminAjaxFaviconBO&amp;token=f457e7ac31c1418ec256ff7332da204d\";
</script>

<script>
            var admin_gamification_ajax_url = \"http:\\/\\/a0439042.xsph.ru\\/admin645nrpqow\\/index.php?controller=AdminGamification&token=8868b82571837c60a13ebe4baa4b77a0\";
            var current_id_tab = 10;
        </script>

";
        // line 177
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-ru adminproducts\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminDashboard&amp;token=7f763bbd128446f6f284667b0df00d86\"></a>
      <span id=\"shop_version\">1.7.6.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Быстрый доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminOrders&amp;token=c96d85d3f1c9404b3363dd7693ccb618\"
                 data-item=\"Заказы\"
      >Заказы</a>
          <a class=\"dropdown-item\"
         href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php/sell/catalog/categories/new?token=6a2c8bde10509db5db16370413815781\"
                 data-item=\"Новая категория\"
      >Новая категория</a>
          <a class=\"dropdown-item\"
         href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=fef751bc5d44d5d45332ba1d7aa281db\"
                 data-item=\"Новый купон\"
      >Новый купон</a>
          <a class=\"dropdown-item\"
         href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php/sell/catalog/products/new?token=6a2c8bde10509db5db16370413815781\"
                 data-item=\"Новый товар\"
      >Новый товар</a>
          <a class=\"dropdown-item\"
         href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=97856ee80e28cbb5778f759b85cfdfc5\"
                 data-item=\"Оценка каталога\"
      >Оценка каталога</a>
          <a class=\"dropdown-item\"
         href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php/improve/modules/manage?token=6a2c8bde10509db5db16370413815781\"
                 data-item=\"Установленные модули\"
      >Установленные модули</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"56\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/last?-QdDvM\"
        data-post-link=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminQuickAccesses&token=a7115808d95744f9867ac86dac29252e\"
        data-prompt-text=\"Задайте название ярлыка:\"
        data-link=\"Товары - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Добавить текущую страницу в Быстрый Доступ
      </a>
        <a class=\"dropdown-item\" href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminQuickAccesses&token=a7115808d95744f9867ac86dac29252e\">
      <i class=\"material-icons\">settings</i>
      Управление быстрым доступом
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin645nrpqow/index.php?controller=AdminSearch&amp;token=222a80ee626d962b15890ef8728eab4e\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Поиск (например, артикул, имя пользователя...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Везде
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Везде\" href=\"#\" data-value=\"0\" data-placeholder=\"Что вы ищете?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Везде</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Название товара, артикул, ссылка...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по имени\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, имя...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клиенты по имени</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клиенты по IP-адресу</a>
        <a class=\"dropdown-item\" data-item=\"Заказы\" href=\"#\" data-value=\"3\" data-placeholder=\"№ заказа\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Заказы</a>
        <a class=\"dropdown-item\" data-item=\"По счетам\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер накладной\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> По счетам</a>
        <a class=\"dropdown-item\" data-item=\"Корзины\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Корзины\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Корзины</a>
        <a class=\"dropdown-item\" data-item=\"Модули\" href=\"#\" data-value=\"7\" data-placeholder=\"Название модуля\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модули</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">Поиск</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://a0439042.xsph.ru/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Перейти в магазин
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Заказы<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Клиенты<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Сообщения<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Сейчас нет новых заказов :(<br>
              Как насчёт сезонных скидок?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет новых клиентов :(<br>
              Были ли вы активны в соцсетях в эти дни?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет сообщений.<br>
              Есть время на кое-что еще!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      c <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зарегистрировано <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/simkakoshka%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back John</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin645nrpqow/index.php/configure/advanced/employees/1/edit?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\">
      <i class=\"material-icons\">settings</i>
      Ваш профиль
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Тренировка</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Маркет PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminLogin&amp;logout=1&amp;token=f883c37c6e47f50560e6422c9d3cea5c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Выход</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin645nrpqow/index.php/configure/advanced/employees/toggle-navigation?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminDashboard&amp;token=7f763bbd128446f6f284667b0df00d86\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Пульт</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Продажа</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminOrders&amp;token=c96d85d3f1c9404b3363dd7693ccb618\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Заказы
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminOrders&amp;token=c96d85d3f1c9404b3363dd7693ccb618\" class=\"link\"> Заказы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin645nrpqow/index.php/sell/orders/invoices/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> По счетам
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminSlip&amp;token=e83a5de34754ec3364f71cfca6621195\" class=\"link\"> Платежные квитанции
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin645nrpqow/index.php/sell/orders/delivery-slips/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Транспортные накладные
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminCarts&amp;token=85d6fc77cfee2d9aae3fe3a3c6bb5599\" class=\"link\"> Корзины
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin645nrpqow/index.php/sell/catalog/products?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Каталог
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin645nrpqow/index.php/sell/catalog/products?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Товары
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/admin645nrpqow/index.php/sell/catalog/categories?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Категории
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminTracking&amp;token=f10d6c4886dda8431561cb7407963981\" class=\"link\"> Мониторинг
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminAttributesGroups&amp;token=fc3decbaa69910a958e84a08c47676d3\" class=\"link\"> Атрибуты и характеристики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/admin645nrpqow/index.php/sell/catalog/brands/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Бренды и Поставщики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminAttachments&amp;token=7d03c861c762aed85f7b19e1b181307f\" class=\"link\"> Файлы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminCartRules&amp;token=fef751bc5d44d5d45332ba1d7aa281db\" class=\"link\"> Скидки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin645nrpqow/index.php/sell/stocks/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/admin645nrpqow/index.php/sell/customers/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Клиенты
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/admin645nrpqow/index.php/sell/customers/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Клиенты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminAddresses&amp;token=ca3dee71165e8ebc199b52eb49985dbc\" class=\"link\"> Адреса
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminCustomerThreads&amp;token=5786de5eb3cbfb4c69dcafcd5b88d07c\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Клиентская служба
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminCustomerThreads&amp;token=5786de5eb3cbfb4c69dcafcd5b88d07c\" class=\"link\"> Клиентская служба
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminOrderMessage&amp;token=948b77d125369819abfe86c66ed1d11c\" class=\"link\"> Сообщения о заказах
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminReturn&amp;token=5c1495b7123e34a39cae483a9c1de98a\" class=\"link\"> Возвраты товаров
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminStats&amp;token=97856ee80e28cbb5778f759b85cfdfc5\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Статистика
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Улучшения</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin645nrpqow/index.php/improve/modules/manage?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Модули
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin645nrpqow/index.php/improve/modules/manage?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminPsMboModule&amp;token=38707e6c1cc96c7aff055a263e3c65d5\" class=\"link\"> Каталог модулей
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/admin645nrpqow/index.php/improve/design/themes/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Дизайн
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/admin645nrpqow/index.php/improve/design/themes/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Шаблон и логотип
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"135\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminPsMboTheme&amp;token=854f2da23f98b6c00c36d4e6465cf67c\" class=\"link\"> Каталог шаблонов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/admin645nrpqow/index.php/improve/design/mail_theme/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Email Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/admin645nrpqow/index.php/improve/design/cms-pages/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Страницы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin645nrpqow/index.php/improve/design/modules/positions/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Расположение блоков
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminImages&amp;token=6e89cc7122aeae984b6640071dff1bb4\" class=\"link\"> Настройки изображений
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin645nrpqow/index.php/modules/link-widget/list?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminCarriers&amp;token=bed9789f3cacc37d468d0d1b3f063247\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Доставка
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminCarriers&amp;token=bed9789f3cacc37d468d0d1b3f063247\" class=\"link\"> Перевозчики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin645nrpqow/index.php/improve/shipping/preferences?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin645nrpqow/index.php/improve/payment/payment_methods?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Оплата
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin645nrpqow/index.php/improve/payment/payment_methods?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Способы оплаты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin645nrpqow/index.php/improve/payment/preferences?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin645nrpqow/index.php/improve/international/localization/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Интернационализация
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin645nrpqow/index.php/improve/international/localization/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Локализация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminZones&amp;token=f82459894022b8fbe68316d9d3b67105\" class=\"link\"> География
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/admin645nrpqow/index.php/improve/international/taxes/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Налоги
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin645nrpqow/index.php/improve/international/translations/settings?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Переводы
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminEmarketing&amp;token=238115029e59ef68187ea7b2d54662f6\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Настроить</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin645nrpqow/index.php/configure/shop/preferences/preferences?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Параметры магазина
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin645nrpqow/index.php/configure/shop/preferences/preferences?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Общее
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin645nrpqow/index.php/configure/shop/order-preferences/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Настройки заказов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin645nrpqow/index.php/configure/shop/product-preferences/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Настройки товаров
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin645nrpqow/index.php/configure/shop/customer-preferences/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Настройки клиента
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/admin645nrpqow/index.php/configure/shop/contacts/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Контакты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin645nrpqow/index.php/configure/shop/seo-urls/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Трафик и SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminSearchConf&amp;token=19ecd6b61e69c0cda8add76308c837bb\" class=\"link\"> Поиск
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminGamification&amp;token=8868b82571837c60a13ebe4baa4b77a0\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin645nrpqow/index.php/configure/advanced/system-information/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Расширенные параметры
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin645nrpqow/index.php/configure/advanced/system-information/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Информация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin645nrpqow/index.php/configure/advanced/performance/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Производительность
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin645nrpqow/index.php/configure/advanced/administration/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Администрирование
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin645nrpqow/index.php/configure/advanced/emails/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/admin645nrpqow/index.php/configure/advanced/import/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Импорт
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/admin645nrpqow/index.php/configure/advanced/employees/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Сотрудники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/admin645nrpqow/index.php/configure/advanced/sql-requests/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> База данных
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin645nrpqow/index.php/configure/advanced/logs/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Журнал событий
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/admin645nrpqow/index.php/configure/advanced/webservice-keys/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" class=\"link\"> Веб службы
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Запуск магазина!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">36%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:35.714285714286%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Продолжить</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Остановить</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Каталог</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin645nrpqow/index.php/sell/catalog/products?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\" aria-current=\"page\">Товары</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Товары          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminPsMboModule&token=38707e6c1cc96c7aff055a263e3c65d5';
    var controller = 'AdminProducts';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin645nrpqow/index.php/sell/catalog/products/new?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\"                  title=\"Новый товар: CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Новый товар
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin645nrpqow/index.php/improve/modules/catalog?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\"                title=\"Рекомендуемые модули\"
                              >
                Рекомендуемые модули
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Помощь\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin645nrpqow/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fru%252Fdoc%252FAdminProducts%253Fversion%253D1.7.6.5%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\"
                   id=\"product_form_open_help\"
                >
                  Помощь
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
      
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Продолжить</button>
  <a class=\"onboarding-button-shut-down\">Пропустить этот урок</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(5, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">\\u0414\\u043e\\u0431\\u0440\\u043e \\u043f\\u043e\\u0436\\u0430\\u043b\\u043e\\u0432\\u0430\\u0442\\u044c!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>\\u041f\\u0440\\u0438\\u0432\\u0435\\u0442! \\u041c\\u0435\\u043d\\u044f \\u0437\\u043e\\u0432\\u0443\\u0442 \\u041f\\u0440\\u0435\\u0441\\u0442\\u043e\\u043d, \\u044f \\u043c\\u043e\\u0433\\u0443 \\u0432\\u0430\\u043c \\u0437\\u0434\\u0435\\u0441\\u044c \\u0432\\u0441\\u0451 \\u043f\\u043e\\u043a\\u0430\\u0437\\u0430\\u0442\\u044c.<\\/p>\\n    <p>\\u0412\\u0430\\u043c \\u0441\\u0442\\u043e\\u0438\\u0442 \\u043e\\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u0438\\u0442\\u044c\\u0441\\u044f \\u0441 \\u043d\\u0435\\u043a\\u043e\\u0442\\u043e\\u0440\\u044b\\u043c\\u0438 \\u043d\\u0435\\u043e\\u0431\\u0445\\u043e\\u0434\\u0438\\u043c\\u044b\\u043c\\u0438 \\u0448\\u0430\\u0433\\u0430\\u043c\\u0438 \\u0434\\u043b\\u044f \\u0437\\u0430\\u043f\\u0443\\u0441\\u043a\\u0430 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0430:\\n    \\u0421\\u043e\\u0437\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440, \\u043d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d, \\u043d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0443 \\u0438 \\u043f\\u043b\\u0430\\u0442\\u0435\\u0436\\u0438...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>\\u041f\\u0440\\u0438\\u0441\\u0442\\u0443\\u043f\\u0438\\u043c!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">\\u041f\\u043e\\u0437\\u0436\\u0435<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">\\u041f\\u0443\\u0441\\u043a<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/a0439042.xsph.ru\\/admin645nrpqow\\/index.php?controller=AdminDashboard&token=7f763bbd128446f6f284667b0df00d86\"}]},{\"title\":\"\\u0414\\u0430\\u0432\\u0430\\u0439\\u0442\\u0435 \\u0441\\u043e\\u0437\\u0434\\u0430\\u0434\\u0438\\u043c \\u0412\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440\",\"subtitle\":{\"1\":\"\\u0427\\u0442\\u043e \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u0441\\u043e\\u043e\\u0431\\u0449\\u0438\\u0442\\u044c \\u043e\\u0431 \\u044d\\u0442\\u043e\\u043c? \\u041f\\u043e\\u0434\\u0443\\u043c\\u0430\\u0439\\u0442\\u0435, \\u0447\\u0442\\u043e \\u0445\\u043e\\u0442\\u044f\\u0442 \\u0443\\u0437\\u043d\\u0430\\u0442\\u044c \\u0432\\u0430\\u0448\\u0438 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u044b.\",\"2\":\"\\u0414\\u043e\\u0431\\u0430\\u0432\\u044c\\u0442\\u0435 \\u044f\\u0441\\u043d\\u0443\\u044e \\u0438 \\u043f\\u0440\\u0438\\u0432\\u043b\\u0435\\u043a\\u0430\\u0442\\u0435\\u043b\\u044c\\u043d\\u0443\\u044e \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u044e. \\u041f\\u043e\\u0437\\u0436\\u0435 \\u0435\\u0451 \\u043c\\u043e\\u0436\\u043d\\u043e \\u0438\\u0441\\u043f\\u0440\\u0430\\u0432\\u0438\\u0442\\u044c :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0414\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u0442\\u043e\\u0432\\u0430\\u0440\\u0443 \\u0438\\u043d\\u0442\\u0435\\u0440\\u0435\\u0441\\u043d\\u043e\\u0435 \\u043d\\u0430\\u0437\\u0432\\u0430\\u043d\\u0438\\u0435.\",\"options\":[\"savepoint\"],\"page\":[\"\\/admin645nrpqow\\/index.php\\/sell\\/catalog\\/products\\/new?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\",\"admin645nrpqow\\/index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0417\\u0430\\u043f\\u043e\\u043b\\u043d\\u0438\\u0442\\u0435 \\u043d\\u0435\\u043e\\u0431\\u0445\\u043e\\u0434\\u0438\\u043c\\u0443\\u044e \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u044e \\u0432 \\u044d\\u0442\\u043e\\u0439 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0435. \\u0414\\u0440\\u0443\\u0433\\u0438\\u0435 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0438 \\u0434\\u043b\\u044f \\u0440\\u0430\\u0441\\u0448\\u0438\\u0440\\u0435\\u043d\\u043d\\u043e\\u0439 \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u0438.\",\"page\":\"admin645nrpqow\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0414\\u043e\\u0431\\u0430\\u0432\\u044c\\u0442\\u0435 \\u043e\\u0434\\u043d\\u043e \\u0438\\u043b\\u0438 \\u043d\\u0435\\u0441\\u043a\\u043e\\u043b\\u044c\\u043a\\u043e \\u0438\\u0437\\u043e\\u0431\\u0440\\u0430\\u0436\\u0435\\u043d\\u0438\\u0439, \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u0430\\u0448 \\u0442\\u043e\\u0432\\u0430\\u0440 \\u0432\\u044b\\u0433\\u043b\\u044f\\u0434\\u0435\\u043b \\u043f\\u0440\\u0438\\u0432\\u043b\\u0435\\u043a\\u0430\\u0442\\u0435\\u043b\\u044c\\u043d\\u043e!\",\"page\":\"admin645nrpqow\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u041a\\u0430\\u043a \\u0434\\u043e\\u0440\\u043e\\u0433\\u043e \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u043f\\u0440\\u043e\\u0434\\u0430\\u0432\\u0430\\u0442\\u044c?\",\"page\":\"admin645nrpqow\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"\\u0423\\u0445! \\u0412\\u044b \\u0442\\u043e\\u043b\\u044c\\u043a\\u043e \\u0447\\u0442\\u043e \\u0441\\u043e\\u0437\\u0434\\u0430\\u043b\\u0438 \\u0432\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440. \\u0417\\u0434\\u043e\\u0440\\u043e\\u0432\\u043e, \\u043d\\u0435 \\u0442\\u0430\\u043a \\u043b\\u0438?\",\"page\":\"admin645nrpqow\\/index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"\\u041f\\u0440\\u0438\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0443 \\u0438\\u043d\\u0434\\u0438\\u0432\\u0438\\u0434\\u0443\\u0430\\u043b\\u044c\\u043d\\u043e\\u0441\\u0442\\u044c\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u043f\\u043e-\\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u0434\\u043e\\u043b\\u0436\\u0435\\u043d \\u0432\\u044b\\u0433\\u043b\\u044f\\u0434\\u0435\\u0442\\u044c \\u0432\\u0430\\u0448 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d? \\u0427\\u0442\\u043e \\u0434\\u0435\\u043b\\u0430\\u0435\\u0442 \\u0435\\u0433\\u043e \\u043e\\u0441\\u043e\\u0431\\u0435\\u043d\\u043d\\u044b\\u043c?\",\"2\":\"\\u041d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d \\u0438\\u043b\\u0438 \\u0432\\u044b\\u0431\\u0435\\u0440\\u0438\\u0442\\u0435 \\u043d\\u0430\\u043b\\u0438\\u0443\\u0447\\u0448\\u0438\\u0439 \\u0432 \\u043d\\u0430\\u0448\\u0435\\u043c \\u043a\\u0430\\u0442\\u0430\\u043b\\u043e\\u0433\\u0435 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d\\u043e\\u0432.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0425\\u043e\\u0440\\u043e\\u0448\\u0430\\u044f \\u0438\\u0434\\u0435\\u044f - \\u043d\\u0430\\u0447\\u0430\\u0442\\u044c \\u0441 \\u0437\\u0430\\u0434\\u0430\\u043d\\u0438\\u044f \\u0432\\u0430\\u0448\\u0435\\u0433\\u043e \\u043b\\u043e\\u0433\\u043e\\u0442\\u0438\\u043f\\u0430!\",\"options\":[\"savepoint\"],\"page\":\"\\/admin645nrpqow\\/index.php\\/improve\\/design\\/themes\\/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\",\"selector\":\"#form_shop_logos_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0415\\u0441\\u043b\\u0438 \\u0432\\u0430\\u043c \\u043d\\u0443\\u0436\\u043d\\u043e \\u0447\\u0442\\u043e-\\u0442\\u043e \\u0434\\u0435\\u0439\\u0441\\u0442\\u0432\\u0438\\u0442\\u0435\\u043b\\u044c\\u043d\\u043e \\u043e\\u0441\\u043e\\u0431\\u0435\\u043d\\u043d\\u043e\\u0435, \\u043f\\u043e\\u0441\\u0435\\u0442\\u0438\\u0442\\u0435 \\u043d\\u0430\\u0448 \\u043a\\u0430\\u0442\\u0430\\u043b\\u043e\\u0433 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d\\u043e\\u0432!\",\"page\":\"\\/admin645nrpqow\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"\\u041f\\u043e\\u0434\\u0433\\u043e\\u0442\\u043e\\u0432\\u0438\\u0442\\u044c \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d \\u043a \\u043f\\u0440\\u0438\\u0435\\u043c\\u0443 \\u043f\\u043b\\u0430\\u0442\\u0435\\u0436\\u0435\\u0439\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u0432\\u0430\\u0448\\u0438 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u044b \\u0434\\u043e\\u043b\\u0436\\u043d\\u044b \\u0440\\u0430\\u0441\\u043f\\u043b\\u0430\\u0447\\u0438\\u0432\\u0430\\u0442\\u044c\\u0441\\u044f \\u0441 \\u0432\\u0430\\u043c\\u0438?\",\"2\":\"\\u0418\\u0434\\u0438\\u0442\\u0435 \\u0432 \\u043d\\u043e\\u0433\\u0443 \\u0441 \\u0440\\u044b\\u043d\\u043a\\u043e\\u043c: \\u043f\\u0440\\u0435\\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u044c\\u0442\\u0435 \\u0441\\u0430\\u043c\\u044b\\u0435 \\u043f\\u043e\\u043f\\u0443\\u043b\\u044f\\u0440\\u043d\\u044b\\u0435 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u043e\\u043f\\u043b\\u0430\\u0442\\u044b \\u0441\\u0432\\u043e\\u0438\\u043c \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0421\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u043e\\u043f\\u043b\\u0430\\u0442\\u044b, \\u0443\\u0436\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0443\\u043f\\u043d\\u044b\\u0435 \\u0432\\u0430\\u0448\\u0438\\u043c \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin645nrpqow\\/index.php\\/improve\\/payment\\/payment_methods?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0417\\u0434\\u0435\\u0441\\u044c \\u0432\\u044b \\u043c\\u043e\\u0436\\u0435\\u0442\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u0442\\u044c \\u0438 \\u0434\\u043e\\u0431\\u0430\\u0432\\u0438\\u0442\\u044c \\u0434\\u0440\\u0443\\u0433\\u0438\\u0435 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u043e\\u043f\\u043b\\u0430\\u0442\\u044b!\",\"page\":\"\\/admin645nrpqow\\/index.php\\/improve\\/payment\\/payment_methods?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"\\u041d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u043a\\u0430 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043b\\u044f\\u0442\\u044c \\u0432\\u0430\\u0448\\u0438 \\u0442\\u043e\\u0432\\u0430\\u0440\\u044b?\",\"2\":\"\\u0412\\u044b\\u0431\\u0435\\u0440\\u0438\\u0442\\u0435 \\u043d\\u0430\\u0438\\u0431\\u043e\\u043b\\u0435\\u0435 \\u0443\\u0434\\u043e\\u0431\\u043d\\u044b\\u0435 \\u0432\\u0430\\u0448\\u0438\\u043c \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u0438\\u043a! \\u0421\\u043e\\u0437\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0441\\u043e\\u0431\\u0441\\u0442\\u0432\\u0435\\u043d\\u043d\\u043e\\u0433\\u043e \\u043f\\u0435\\u0440\\u0435\\u0432\\u043e\\u0437\\u0447\\u0438\\u043a\\u0430 \\u0438\\u043b\\u0438 \\u0434\\u043e\\u0431\\u0430\\u0432\\u044c\\u0442\\u0435 \\u0433\\u043e\\u0442\\u043e\\u0432\\u044b\\u0435 \\u043c\\u043e\\u0434\\u0443\\u043b\\u0438.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0412\\u043e\\u0442 \\u0441\\u043f\\u0438\\u0441\\u043e\\u043a \\u0434\\u043e\\u0441\\u0442\\u0443\\u043f\\u043d\\u044b\\u0445 \\u0432 \\u0432\\u0430\\u0448\\u0435\\u043c \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0435 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u043e\\u0432 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/a0439042.xsph.ru\\/admin645nrpqow\\/index.php?controller=AdminCarriers&token=bed9789f3cacc37d468d0d1b3f063247\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0412\\u044b \\u043c\\u043e\\u0436\\u0435\\u0442\\u0435 \\u043f\\u0440\\u0435\\u0434\\u043b\\u043e\\u0436\\u0438\\u0442\\u044c \\u043d\\u0435\\u0441\\u043a\\u043e\\u043b\\u044c\\u043a\\u043e \\u0432\\u0430\\u0440\\u0438\\u0430\\u043d\\u0442\\u043e\\u0432 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438, \\u043d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0438\\u0432 \\u043d\\u0435\\u0441\\u043a\\u043e\\u043b\\u044c\\u043a\\u043e \\u043f\\u0435\\u0440\\u0435\\u0432\\u043e\\u0437\\u0447\\u0438\\u043a\\u043e\\u0432\",\"page\":\"http:\\/\\/a0439042.xsph.ru\\/admin645nrpqow\\/index.php?controller=AdminCarriers&token=bed9789f3cacc37d468d0d1b3f063247\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"\\u0423\\u043b\\u0443\\u0447\\u0448\\u0438\\u0442\\u0435 \\u0441\\u0432\\u043e\\u0439 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d \\u0441 \\u043f\\u043e\\u043c\\u043e\\u0449\\u044c\\u044e \\u043c\\u043e\\u0434\\u0443\\u043b\\u0435\\u0439\",\"subtitle\":{\"1\":\"\\u0414\\u043e\\u0431\\u0430\\u0432\\u043b\\u044f\\u0439\\u0442\\u0435 \\u043d\\u043e\\u0432\\u044b\\u0435 \\u0444\\u0443\\u043d\\u043a\\u0446\\u0438\\u0438 \\u0438 \\u0443\\u043f\\u0440\\u0430\\u0432\\u043b\\u044f\\u0439\\u0442\\u0435 \\u0441\\u0443\\u0449\\u0435\\u0441\\u0442\\u0432\\u0443\\u044e\\u0449\\u0438\\u043c\\u0438 \\u043f\\u043e\\u0441\\u0440\\u0435\\u0434\\u0441\\u0442\\u0432\\u043e\\u043c \\u043c\\u043e\\u0434\\u0443\\u043b\\u0435\\u0439.\",\"2\":\"\\u041d\\u0435\\u043a\\u043e\\u0442\\u043e\\u0440\\u044b\\u0435 \\u043c\\u043e\\u0434\\u0443\\u043b\\u0438 \\u0443\\u0436\\u0435 \\u043f\\u0440\\u0435\\u0434\\u0443\\u0441\\u0442\\u0430\\u043d\\u043e\\u0432\\u043b\\u0435\\u043d\\u044b, \\u043f\\u0440\\u043e\\u0447\\u0438\\u0435 \\u043c\\u043e\\u0433\\u0443\\u0442 \\u0431\\u044b\\u0442\\u044c \\u043f\\u043b\\u0430\\u0442\\u043d\\u044b\\u043c\\u0438 \\u0438\\u043b\\u0438 \\u0431\\u0435\\u0441\\u043f\\u043b\\u0430\\u0442\\u043d\\u044b\\u043c\\u0438 - \\u043f\\u043e\\u0441\\u043c\\u043e\\u0442\\u0440\\u0438\\u0442\\u0435 \\u043d\\u0430\\u0448\\u0443 \\u043a\\u043e\\u043b\\u043b\\u0435\\u043a\\u0446\\u0438\\u044e \\u0438 \\u0432\\u044b\\u0431\\u0435\\u0440\\u0438\\u0442\\u0435 \\u043f\\u043e\\u0434\\u0445\\u043e\\u0434\\u044f\\u0449\\u0438\\u0435!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u041e\\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u044c\\u0442\\u0435\\u0441\\u044c \\u0441 \\u043d\\u0430\\u0448\\u0435\\u0439 \\u043f\\u043e\\u0434\\u0431\\u043e\\u0440\\u043a\\u043e\\u0439 \\u043c\\u043e\\u0434\\u0443\\u043b\\u0435\\u0439 \\u043d\\u0430 \\u043f\\u0435\\u0440\\u0432\\u043e\\u0439 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0435, \\u0443\\u043f\\u0440\\u0430\\u0432\\u043b\\u0435\\u043d\\u0438\\u0435 \\u0438\\u043c\\u0438 \\u043d\\u0430 \\u0432\\u0442\\u043e\\u0440\\u043e\\u0439, \\u0443\\u0432\\u0435\\u0434\\u043e\\u043c\\u043b\\u0435\\u043d\\u0438\\u044f - \\u043d\\u0430 \\u0442\\u0440\\u0435\\u0442\\u044c\\u0435\\u0439.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin645nrpqow\\/index.php\\/improve\\/modules\\/catalog?_token=XW1slteWxmT0RAvDyawPNCmuzqSzh9LljdcsI-QdDvM\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u0412\\u0430\\u043c \\u0434\\u043e\\u0441\\u0442\\u0430\\u0442\\u043e\\u0447\\u043d\\u043e!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          \\u0412\\u044b \\u0443\\u0432\\u0438\\u0434\\u0435\\u043b\\u0438 \\u043c\\u0438\\u043d\\u0438\\u043c\\u0443\\u043c, \\u043d\\u043e \\u0437\\u0434\\u0435\\u0441\\u044c \\u0435\\u0441\\u0442\\u044c \\u0433\\u043e\\u0440\\u0430\\u0437\\u0434\\u043e \\u0431\\u043e\\u043b\\u044c\\u0448\\u0435 \\u0432\\u0435\\u0449\\u0435\\u0439 \\u0434\\u043b\\u044f \\u043e\\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u043b\\u0435\\u043d\\u0438\\u044f.<br \\/>\\n          \\u041d\\u0435\\u043a\\u043e\\u0442\\u043e\\u0440\\u044b\\u0435 \\u0440\\u0435\\u0441\\u0443\\u0440\\u0441\\u044b, \\u0434\\u043b\\u044f \\u043f\\u043e\\u043c\\u043e\\u0449\\u0438 \\u0432\\u0430\\u043c \\u0432 \\u0434\\u0430\\u043b\\u044c\\u043d\\u0435\\u0439\\u0448\\u0435\\u043c:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0420\\u0443\\u043a\\u043e\\u0432\\u043e\\u0434\\u0441\\u0442\\u0432\\u043e \\u043d\\u0430\\u0447\\u0438\\u043d\\u0430\\u044e\\u0449\\u0435\\u0433\\u043e<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0424\\u043e\\u0440\\u0443\\u043c<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0422\\u0440\\u0435\\u043d\\u0438\\u0440\\u043e\\u0432\\u043a\\u0430<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0412\\u0438\\u0434\\u0435\\u043e\\u0443\\u0440\\u043e\\u043a\\u0438<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">\\u042f \\u0433\\u043e\\u0442\\u043e\\u0432<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"admin645nrpqow\\/index.php\\/improve\\/modules\\/catalog\"}]}]}, 0, \"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminWelcome&token=46e5571ec615a2bb9cfc17d5c6129ffd\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Ау! Вы потерялись?</p>    <p>Для продолжения кликните здесь:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Продолжить</button>    </div>    <p>Если хотите совсем остановить урок, кликните здесь:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Выход из Приветственного урока</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Шаг <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Вперед</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1338
        $this->displayBlock('content_header', $context, $blocks);
        // line 1339
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1340
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1341
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1342
        echo "
             
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Рекомендованные Модули и Сервисы</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О, нет!</h1>
  <p class=\"mt-3\">
    Мобильная версия этой страницы еще не доступна.
  </p>
  <p class=\"mt-2\">
    Используйте настольный компьютер для просмотра этой страницы, пока она не адаптирована для мобильных устройств.
  </p>
  <p class=\"mt-2\">
    Спасибо.
  </p>
  <a href=\"http://a0439042.xsph.ru/admin645nrpqow/index.php?controller=AdminDashboard&amp;token=7f763bbd128446f6f284667b0df00d86\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RU&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ru/login?email=simkakoshka%40gmail.com&amp;firstname=John&amp;lastname=Doe&amp;website=http%3A%2F%2Fa0439042.xsph.ru%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin645nrpqow/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Подключите Ваш магазин к маркету PrestaShop для автоматического импорта приобретенных дополнений.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Нет учетной записи?</h4>
\t\t\t\t\t\t<p class='text-justify'>Откройте для себя мощь PrestaShop Addons! Исследуйте официальный PrestaShop-маркет.  В нем более 3500 инновационных модулей и шаблонов, оптимизирующих коэффициент конверсии, повышающих посещаемость, укрепляющих лояльность, повышающих вашу производительность</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Присоединиться к PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ru/forgot-your-password\">Я забыл пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ru/login?email=simkakoshka%40gmail.com&amp;firstname=John&amp;lastname=Doe&amp;website=http%3A%2F%2Fa0439042.xsph.ru%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСоздать учетную запись
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Войти
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1463
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 177
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1338
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1339
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1340
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1341
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1463
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__88bd31e539f97a8c8f11e4cc24dffd4fe233a058be5868077c1c9c1b7d03f9b4";
    }

    public function getDebugInfo()
    {
        return array (  1553 => 1463,  1548 => 1341,  1543 => 1340,  1538 => 1339,  1533 => 1338,  1524 => 177,  1516 => 1463,  1393 => 1342,  1390 => 1341,  1387 => 1340,  1384 => 1339,  1382 => 1338,  217 => 177,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__88bd31e539f97a8c8f11e4cc24dffd4fe233a058be5868077c1c9c1b7d03f9b4", "");
    }
}

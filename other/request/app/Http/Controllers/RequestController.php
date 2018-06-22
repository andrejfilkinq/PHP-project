<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{

    public function index() {
        return view('test');
    }

    public function work() {
//        $info = file_get_contents('http://127.0.0.1:8000/api/api');
//        echo $info;
//        
//        $start = microtime(true);
//        sleep(3);
//        $time = microtime(true) - $start;
//        printf('Скрипт выполнялся %.4F сек.', $time);
//
//
//
//        $start = microtime(true);
//
//        $info = file_get_contents('http://127.0.0.1:8090/api/api');
//        $i = 0;
//        while ($i < 3) {
//            sleep(3);
//            if ($start >= 3) {
//                $time = microtime(true) - $start;
//                echo $info.$time;
//                $i++;
//            }
//        }
        $info = file_get_contents('http://127.0.0.1:8090/api/api');

        function get_http_response_code($theURL) {
            $headers = get_headers($theURL);
            return substr($headers[0], 9, 3);
        }

        $i = 0;
        while ($i < 3) {
            $i++;
            sleep(3);
            switch (get_http_response_code('http://127.0.0.1:8090/api/api')) {
                case 100:
                    echo "100 Continue («продолжить»)";
                    break;
                case 101:
                    echo "101 Switching Protocols («переключение протоколов»)";
                    break;
                case 102:
                    echo "102 Processing («идёт обработка»)";
                    break;
                case 105:
                    echo "105 Name Not Resolved («не удается преобразовать DNS-адрес сервера»)";
                    break;
                case 200:
                    echo "200 OK («хорошо»)";
                    break;
                case 201:
                    echo "201 Created («создано»)";
                    break;
                case 202:
                    echo "202 Accepted («принято»)";
                    break;
                case 203:
                    echo "203 Non-Authoritative Information («информация не авторитетна»)";
                    break;
                case 204:
                    echo "204 No Content («нет содержимого»)";
                    break;
                case 205:
                    echo "205 Reset Content («сбросить содержимое»)";
                    break;
                case 206:
                    echo "206 Partial Content («частичное содержимое»)";
                    break;
                case 207:
                    echo "207 Multi-Status («многостатусный»)";
                    break;
                case 226:
                    echo "226 IM Used («использовано IM»)";
                    break;
                case 300:
                    echo "300 Multiple Choices («множество выборов»)";
                    break;
                case 301:
                    echo "301 Moved Permanently («перемещено навсегда»)";
                    break;
                case 302:
                    echo "302 Moved Temporarily («перемещено временно»)";
                    break;
                case 303:
                    echo "303 See Other (смотреть другое)";
                    break;
                case 304:
                    echo "304 Not Modified (не изменялось)";
                    break;
                case 305:
                    echo "305 Use Proxy («использовать прокси»)";
                    break;
                case 306:
                    echo "306 зарезервировано (код использовался только в ранних спецификациях)";
                    break;
                case 307:
                    echo "307 Temporary Redirect («временное перенаправление»)";
                    break;
                case 400:
                    echo "400 Bad Request («плохой, неверный запрос»)";
                    break;
                case 401:
                    echo "401 Unauthorized («неавторизован»)";
                    break;
                case 402:
                    echo "402 Payment Required («необходима оплата»)";
                    break;
                case 403:
                    echo "403 Forbidden («запрещено»)";
                    break;
                case 404:
                    echo "404 Not Found («не найдено»)";
                    break;
                case 405:
                    echo "405 Method Not Allowed («метод не поддерживается»)";
                    break;
                case 406:
                    echo "406 Not Acceptable («не приемлемо»)";
                    break;
                case 407:
                    echo "407 Proxy Authentication Required («необходима аутентификация прокси»)";
                    break;
                case 408:
                    echo "408 Request Timeout («истекло время ожидания»)";
                    break;
                case 409:
                    echo "409 Conflict («конфликт»)";
                    break;
                case 410:
                    echo "410 Gone («удалён»)";
                    break;
                case 411:
                    echo "411 Length Required («необходима длина»)";
                    break;
                case 412:
                    echo "412 Precondition Failed («условие ложно»)";
                    break;
                case 413:
                    echo "413 Request Entity Too Large («размер запроса слишком велик»)";
                    break;
                case 414:
                    echo "414 Request-URI Too Large («запрашиваемый URI слишком длинный»)";
                    break;
                case 415:
                    echo "415 Unsupported Media Type («неподдерживаемый тип данных»)";
                    break;
                case 416:
                    echo "416 Requested Range Not Satisfiable («запрашиваемый диапазон не достижим»)";
                    break;
                case 417:
                    echo "417 Expectation Failed («ожидаемое неприемлемо»)";
                    break;
                case 422:
                    echo "422 Unprocessable Entity («необрабатываемый экземпляр»)";
                    break;
                case 423:
                    echo "423 Locked («заблокировано»)";
                    break;
                case 424:
                    echo "424 Failed Dependency («невыполненная зависимость»)";
                    break;
                case 425:
                    echo "425 Unordered Collection («неупорядоченный набор»)";
                    break;
                case 426:
                    echo "426 Upgrade Required («необходимо обновление»)";
                    break;
                case 428:
                    echo "428 Precondition Required («необходимо предусловие»)";
                    break;
                case 429:
                    echo "429 Too Many Requests («слишком много запросов»)";
                    break;
                case 431:
                    echo "431 Request Header Fields Too Large («поля заголовка запроса слишком большие»)";
                    break;
                case 449:
                    echo "449 Retry With («повторить с»)";
                    break;
                case 451:
                    echo "451 Unavailable For Legal Reasons («недоступно по юридическим причинам»)";
                    break;
                case 456:
                    echo "456 Unrecoverable Error («некорректируемая ошибка»)";
                    break;
                case 499:
                    echo "499 Используется Nginx, когда клиент закрывает соединение до получения ответа";
                    break;
                case 500:
                    echo "500 Internal Server Error («внутренняя ошибка сервера»)";
                    break;
                case 501:
                    echo "501 Not Implemented («не реализовано»)";
                    break;
                case 502:
                    echo "502 Bad Gateway («плохой, ошибочный шлюз»)";
                    break;
                case 503:
                    echo "503 Service Unavailable («сервис недоступен»)";
                    break;
                case 504:
                    echo "504 Gateway Timeout («шлюз не отвечает»)";
                    break;
                case 505:
                    echo "505 HTTP Version Not Supported («версия HTTP не поддерживается»)";
                    break;
                case 506:
                    echo "506 Variant Also Negotiates («вариант тоже проводит согласование»)";
                    break;
                case 507:
                    echo "507 Insufficient Storage («переполнение хранилища»)";
                    break;
                case 508:
                    echo "508 Loop Detected («обнаружена петля»)";
                    break;
                case 509:
                    echo "509 Bandwidth Limit Exceeded («исчерпана пропускная ширина канала»)";
                    break;
                case 510:
                    echo "510 Not Extended («не расширено»)";
                    break;
                case 511:
                    echo "511 Network Authentication Required («требуется сетевая аутентификация»)";
                    break;
            }
        }
//        if (isset($info)) {
//            echo 'yes';
//        } else {
//            echo 'no';
//        }
//        echo $info;
//            sleep(1);
//            $time = microtime(true) - $start;
////            echo $time;
//
//            if ($time >= 3) {
//                echo 10.000131845474 * 6;
//                
//            }
//        printf('Скрипт выполнялся %.4F сек.', $time);
//        while (TRUE) {
//            $start = microtime(true);
//        }
//        $x = [1,2,3,4];
//        return response(1);
//        return view('run')->with('x', $x);
    }

}

<?php /** @noinspection PhpUnusedParameterInspection */

declare(strict_types=1);

namespace Astaroth\Anilibria;

/**
 * @author labile
 * @see https://github.com/anilibria/docs/blob/master/api_v2.md#restapi
 */
final class Method
{
    /**
     * Получить информацию о тайтле
     * @param ?int $id ID тайтла
     * @param ?string $code Код тайтла
     * @param ?int $torrent_id ID торрент файла
     * @param ?string $filter Список значений которые будут в ответе
     * @param ?string $remove Список значений которые будут удалены из ответа
     * @param ?string $include Список типов файлов которые будут возвращены в виде base64 строки
     * @param string $description_type Тип получаемого описания
     * @param string $playlist_type Формат получаемого списка серий, object или array
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-gettitle
     */
    public static function getTitle(
        int    $id = null,
        string $code = null,
        int    $torrent_id = null,
        string $filter = null,
        string $remove = null,
        string $include = null,
        string $description_type = "plain",
        string $playlist_type = "object",
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Получить информацию о нескольких тайтлах сразу
     * @param ?string $id_list Список ID тайтлов
     * @param ?string $code_list Список кодов тайтла
     * @param ?string $filter Список значений которые будут в ответе
     * @param ?string $remove Список значений которые будут удалены из ответа
     * @param ?string $include Список типов файлов которые будут возвращены в виде base64 строки
     * @param string $description_type Тип получаемого описания
     * @param string $playlist_type Формат получаемого списка серий, object или array
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-gettitles
     */
    public static function getTitles(
        string $id_list = null,
        string $code_list = null,
        string $filter = null,
        string $remove = null,
        string $include = null,
        string $description_type = "plaint",
        string $playlist_type = "object"
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Список тайтлов отсортированный по времени добавления нового релиза
     * @param ?string $filter Список значений которые будут в ответе
     * @param ?string $remove Список значений которые будут удалены из ответа
     * @param ?string $include Список типов файлов которые будут возвращены в виде base64 строки
     * @param int $limit Количество объектов в ответе
     * @param ?int $since Список тайтлов у которых время обновления больше указанного timestamp
     * @param string $description_type Тип получаемого описания
     * @param string $playlist_type Формат получаемого списка серий, object или array
     * @param ?int $after Удаляет первые n записей из выдачи
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getupdates
     */
    public static function getUpdates(
        string $filter = null,
        string $remove = null,
        string $include = null,
        int    $limit = 5,
        int    $since = null,
        string $description_type = "plain",
        string $playlist_type = "object",
        int    $after = null,
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Список тайтлов отсортированный по времени изменения
     * @param ?string $filter Список значений которые будут в ответе
     * @param ?string $remove Список значений которые будут удалены из ответа
     * @param ?string $include Список типов файлов которые будут возвращены в виде base64 строки
     * @param int $limit Количество объектов в ответе
     * @param ?int $since Список тайтлов у которых время обновления больше указанного timestamp
     * @param string $description_type Тип получаемого описания
     * @param ?int $after Удаляет первые n записей из выдачи
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getchanges
     */
    public static function getChanges(
        string $filter = null,
        string $remove = null,
        string $include = null,
        int    $limit = 5,
        int    $since = null,
        string $description_type = "plain",
        int    $after = null,
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Расписание выхода тайтлов, отсортированное по дням недели
     * @param ?string $filter Список значений которые будут в ответе
     * @param ?string $remove Список значений которые будут удалены из ответа
     * @param ?string $include Список типов файлов которые будут возвращены в виде base64 строки
     * @param ?string $days Список дней недели на которые нужно расписание
     * @param string $description_type Тип получаемого описания
     * @param string $playlist_type Формат получаемого списка серий, object или array
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getschedule
     */
    public static function getSchedule(
        string $filter = null,
        string $remove = null,
        string $include = null,
        string $days = null,
        string $description_type = "plain",
        string $playlist_type = "object",
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Возвращает случайный тайтл из базы
     * @param ?string $filter Список значений которые будут в ответе
     * @param ?string $remove Список значений которые будут удалены из ответа
     * @param ?string $include Список типов файлов которые будут возвращены в виде base64 строки
     * @param string $description_type Тип получаемого описания
     * @param string $playlist_type Формат получаемого списка серий, object или array
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getrandomtitle
     */
    public static function getRandomTitle(
        string $filter = null,
        string $remove = null,
        string $include = null,
        string $description_type = "plain",
        string $playlist_type = "object"
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Информация о вышедших роликах на наших YouTube каналах в хронологическом порядке
     * @param ?string $filter Список значений которые будут в ответе
     * @param ?string $remove Список значений которые будут удалены из ответа
     * @param int $limit Количество объектов в ответе
     * @param ?int $since Список видеороликов у которых время обновления больше указанного timestamp
     * @param ?int $after Удаляет первые n записей из выдачи
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getyoutube
     */
    public static function getYouTube(
        string $filter = null,
        string $remove = null,
        int    $limit = 5,
        int    $since = null,
        int    $after = null,
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Список обновлений тайтлов и роликов на наших YouTube каналах в хронологическом порядке
     * @param ?string $filter Список значений которые будут в ответе
     * @param ?string $remove Список значений которые будут удалены из ответа
     * @param ?string $include Список типов файлов которые будут возвращены в виде base64 строки
     * @param int $limit Количество объектов в ответе
     * @param ?int $since Список тайтлов у которых время обновления больше указанного timestamp
     * @param string $description_type Тип получаемого описания
     * @param string $playlist_type
     * @param ?int $after Удаляет первые n записей из выдачи
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getfeed
     */
    public static function getFeed(
        string $filter = null,
        string $remove = null,
        string $include = null,
        int    $limit = 5,
        int    $since = null,
        string $description_type = "plain",
        string $playlist_type = "object",
        int    $after = null,
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Возвращает список годов выхода доступных тайтлов по возрастанию
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getyears
     */
    public static function getYears(): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Возвращает список жанров доступных тайтлов по алфавиту
     * @param int $sorting_type Тип сортировки элементов
     * 0 - Сортировка по алфавиту
     * 1 - Сортировка по рейтингу
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getgenres
     */
    public static function getGenres(int $sorting_type = 0): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Список кеш серверов с которых можно брать данные
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getcachingnodes
     */
    public static function getCachingNodes(): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Возвращает список участников команды когда-либо существовавших на проекте.
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getteam
     */
    public static function getTeam(): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Возвращает список пользователей и их статистику на трекере.
     * @param ?string $users
     * @param ?string $filter
     * @param ?string $remove
     * @param int $limit
     * @param ?int $after
     * @param ?string $sort_by
     * @param ?int $order
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getseedstats
     */
    public static function getSeedStats(
        string $users = null,
        string $filter = null,
        string $remove = null,
        int    $limit = 5,
        int    $after = null,
        string $sort_by = null,
        int    $order = null,
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Возвращает список обновлений на сайте в одном из форматов RSS ленты
     * @param string $rss_type Предпочитаемый формат вывода
     * @param ?string $session Уникальный идентификатор сессии пользователя
     * @param int $limit Количество объектов в ответе
     * @param ?int $since Список тайтлов у которых время обновления больше указанного timestamp
     * @param ?int $after Удаляет первые n записей из выдачи
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getrss
     */
    public static function getRSS(
        string $rss_type = "rss",
        string $session = null,
        int    $limit = 10,
        int    $since = null,
        int    $after = null,
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Возвращает список найденных по фильтрам тайтлов
     * @param ?string $search Поиск по именам и описанию
     * @param ?string $year Список годов выхода
     * @param ?string $season_code Список сезонов
     * @param ?string $genres Список жанров
     * @param ?string $voice Список войсеров через запятую
     * @param ?string $translator Список переводчиков
     * @param ?string $editing Список сабберов
     * @param ?string $decor Список оформителей
     * @param ?string $timing Список таймеров
     * @param ?string $filter Список значений которые будут в ответе
     * @param ?string $remove Список значений которые будут удалены из ответа
     * @param ?string $include Список типов файлов которые будут возвращены в виде base64 строки
     * @param string $description_type Тип получаемого описания
     * @param string $playlist_type Формат получаемого списка серий, object или array
     * @param int $limit Количество объектов в ответе
     * @param ?int $after Удаляет первые n записей из выдачи
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-searchtitles
     */
    public static function searchTitles(
        string $search = null,
        string $year = null,
        string $season_code = null,
        string $genres = null,
        string $voice = null,
        string $translator = null,
        string $editing = null,
        string $decor = null,
        string $timing = null,
        string $filter = null,
        string $remove = null,
        string $include = null,
        string $description_type = "plain",
        string $playlist_type = "object",
        int    $limit = 5,
        int    $after = null,
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Поиск информации по продвинутым фильтрам с поддержкой сортировки
     * @param string $query Обязательный параметр Фильтр по которому будет идти выборка
     * @param ?string $filter Список значений которые будут в ответе
     * @param ?string $remove Список значений которые будут удалены из ответа
     * @param ?string $include Список типов файлов которые будут возвращены в виде base64 строки
     * @param string $description_type Тип получаемого описания
     * @param string $playlist_type Формат получаемого списка серий, object или array
     * @param int $limit Количество объектов в ответе,
     * @param ?int $after Удаляет первые n записей из выдачи
     * @param ?string $order_by Ключ по которому будет происходить сортировка результатов
     * @param int $sort_direction Направление сортировки. 0 - По возрастанию, 1 - По убыванию
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-advancedsearch
     */
    public static function advancedSearch(
        string $query,
        string $filter = null,
        string $remove = null,
        string $include = null,
        string $description_type = "plain",
        string $playlist_type = "object",
        int    $limit = 5,
        int    $after = null,
        string $order_by = null,
        int    $sort_direction = 0,
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Возвращает список избранных тайтлов пользователя
     * @param string $session
     * @param ?string $filter
     * @param ?string $remove
     * @param ?string $include
     * @param string $description_type
     * @param string $playlist_type
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-getfavorites
     */
    public static function getFavorites(
        string $session,
        string $filter = null,
        string $remove = null,
        string $include = null,
        string $description_type = "plain",
        string $playlist_type = "object"
    ): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param string $session
     * @param int $title_id
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-addfavorite
     * Добавить тайтл в список избранных
     */
    public static function addFavorite(string $session, int $title_id): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }

    /**
     * Удалить тайтл из списка избранных
     * @param string $session
     * @param int $title_id
     * @return array
     * @throws \Exception
     * @see https://github.com/anilibria/docs/blob/master/api_v2.md#-delfavorite
     */
    public function delFavorite(string $session, int $title_id): array
    {
        return Api::request(__FUNCTION__, get_defined_vars());
    }
}
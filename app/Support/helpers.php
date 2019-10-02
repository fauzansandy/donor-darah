<?php

if (! function_exists('message')) {
    function message($id = null, $replace = [], $locale = null, $autoCapitalize = true) {
        if (is_null($id)) {
            return app('translator');
        }
        foreach ($replace as $key => $value) {
            if ($key === 'attribute') {
                $replace[$key] = app('translator')->trans('validation.attributes.'.$value, [], $locale);
            }
        }
        $message = app('translator')->trans($id, $replace, $locale);
        if ($autoCapitalize) {
            return ucfirst($message);
        }
        return $message;
    }
}

if (! function_exists('message_choice')) {
    function message_choice($id, $number, array $replace = [], $locale = null)
    {
        return app('translator')->transChoice($id, $number, $replace, $locale);
    }
}

if ( ! function_exists('config_path'))
{
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}

if ( ! function_exists('getTable'))
{
    function getTable($Model)
    {
        return with(new $Model())->getTable();
    }
}

if ( ! function_exists('getPrefix'))
{
    function getPrefix($TableName = '')
    {
        return config('database.connections.mysql.prefix') . $TableName;
    }
}

if ( ! function_exists('QueryRoute'))
{
    function QueryRoute($request)
    {
        $QueryRoute = new \App\Support\QueryRoute($request);
        return $QueryRoute->get();
    }
}

if ( ! function_exists('now'))
{
    function now()
    {
        return \Carbon\Carbon::now();
    }
}

if ( ! function_exists('carbon_parse'))
{
    function carbon_parse($date)
    {
        return \Carbon\Carbon::parse($date);
    }
}

if ( ! function_exists('set_if_false'))
{
    function set_if_false($new, $old)
    {
        if ($new) {
            return $new == $old;
        }
        return true;
    }
}

if ( ! function_exists('is_updated'))
{
    function is_updated($changes, $thing)
    {
        return isset($changes[$thing]);
    }
}

if ( ! function_exists('getPayloadChanges'))
{
    function getPayloadChanges($payload)
    {
        if (isset($payload->all()['Changes'])) {
            return $payload->all()['Changes'];
        }
        return [];
    }
}

if ( ! function_exists('getDirty'))
{
    function getDirty($Model)
    {
        return $Model->getDirty();
    }
}

if ( ! function_exists('isModelChanged'))
{
    function isModelChanged($Model, $thing)
    {
        if (isset($Model->getDirty()[$thing])) {
            return true;
        }
        return false;
    }
}

if ( ! function_exists('___TableGetCurrentPage'))
{
    function ___TableGetCurrentPage($request, $TableKey)
    {
        $CurrentPage = (int)$request->input($TableKey.'-page');
        if (!$CurrentPage) {
            $CurrentPage = (int)1;
        } else {
            $CurrentPage = (int)$CurrentPage;
        }
        return $CurrentPage;
    }
}

if ( ! function_exists('___TablePaginate'))
{
    function ___TablePaginate($total, $limit, $now)
    {
        $paginationNumber = [];
        $adjacents = 2;
        $pages = $limit ? ceil($total / $limit) : 0;
        if ($pages) {
            if ($pages < 7 + ($adjacents * 2)) {
                for ($i = 1; $i <= $pages; $i++) {
                    $paginationNumber[] = [ 'page' => $i, 'name' => $i ];
                }
            } else if ($pages > 5 + ($adjacents * 2)) {
                if ($now < 1 + ($adjacents * 2)) {
                    for ($i = 1; $i < 4 + ($adjacents * 2); $i++) {
                        $paginationNumber[] = [ 'page' => $i, 'name' => $i ];
                    }
                    $paginationNumber[] = [ 'page' => 0, 'name' => '...' ];
                    $paginationNumber[] = [ 'page' => $pages, 'name' => $pages ];
                } else if($pages - ($adjacents * 2) > $now && $now > ($adjacents * 2)) {
                    $paginationNumber[] = [ 'page' => 1, 'name' => 1 ];
                    $paginationNumber[] = [ 'page' => 0, 'name' => '...' ];
                    for ($i = $now - $adjacents; $i <= $now + $adjacents ; $i++) {
                        $paginationNumber[] = [ 'page' => $i, 'name' => $i ];
                    }
                    $paginationNumber[] = [ 'page' => 0, 'name' => '...' ];
                    $paginationNumber[] = [ 'page' => $pages, 'name' => $pages ];
                } else {
                    $paginationNumber[] = [ 'page' => 1, 'name' => 1 ];
                    $paginationNumber[] = [ 'page' => 0, 'name' => '...' ];
                    for ($i = $pages - (2 + ($adjacents * 2)); $i <= $pages; $i++) {
                        $paginationNumber[] = [ 'page' => $i, 'name' => $i ];
                    }
                }
            }
        }
        return (object)[
            'pages' => $pages,
            'paginationNumber' => $paginationNumber
        ];
    }
}

if ( ! function_exists('___TableGetSkip'))
{
    function ___TableGetSkip($request, $TableKey, $take = 10)
    {
        $Skip = (int)$request->input($TableKey.'-page');
        if (!$Skip) {
            $Skip = (int)0;
        } else {
            $Skip = (int)$Skip * (int)$take - (int)$take;
        }
        return $Skip;
    }
}

if ( ! function_exists('UrlPrevious'))
{
    function UrlPrevious($urlBackup = null)
    {
        $referer = null;
        $host = null;
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referer = $_SERVER['HTTP_REFERER'];
        }
        if (isset($_SERVER['HTTP_HOST'])) {
            $host = $_SERVER['HTTP_HOST'];
        }
        if (!$referer && $urlBackup) {
            $referer = $urlBackup;
        }
        if ($referer === \URL::full()) {
            $referer = $urlBackup ? $urlBackup : url();
        }
        return $referer;
    }
}

if ( ! function_exists('MyAccount'))
{
    function MyAccount($urlBackup = null)
    {
        return Auth::user();
    }
}

if ( ! function_exists('FormSelect'))
{
    function FormSelect($Data, $toArray = false, $value = 'id', $label = 'name')
    {
        $options = $Data->map(function($item) use($value, $label) {
            return [ 'value' => $item->{$value}, 'label' => $item->{$label} ];
        });
        if ($toArray) {
            return $options->toArray();
        }
        return $options;
    }
}

// Browse Helper
if ( ! function_exists('BrowseData'))
{
    function BrowseData($Browse)
    {
        return $Browse->original['data'];
    }
}

// Satellite Helper
if ( ! function_exists('BrowseData'))
{
    function SatelliteClient()
    {
        return App\Support\Satellite\Client::class;
    }
}

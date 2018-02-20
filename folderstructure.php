<?php
    $folders = array(
        'www' => array(
            'public_html' => array(
                'admin' => array(
                    'styles',
                    'scripts',
                    'images',
                    'php'
                ),
                'client' => array(
                    'styles',
                    'scripts',
                    'images',
                    'php' => array(
                        'aaaaa',
                        'bbbbb'
                    )
                ),
                'server' => array(
                    'get',
                    'post',
                    'classes'
                )
            ),
            'logs' => array(
                'errors',
                'access',
                'memcached'
            )
        )
    );
    
    function showFolders($input) {
        $html = '';
        foreach($input as $key => $value) {
            $html .= is_array($value) ? "<li>$key<ul>".showFolders($value)."</ul></li>" : "<li>$value</li>";
        }
        return $html;
    }
?>
<!doctype html>
<html lang="sv"><head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Folder Structur</title>
</head><body>
    <ul><?=showFolders($folders);?></ul>
</body>
</html>
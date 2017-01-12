<?php
$base = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http' . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if(isset($_GET['url']))
{
    $url = $_GET['url'];
    $base = str_replace($url, "", $base);
}
else
{
    $url = 'home';
}
$url = rtrim($url, '/');
$url_arr = explode('/', $url);
$method = $_SERVER['REQUEST_METHOD'];
switch($url_arr[0])
{
    case 'home':
        $page = 'home';
        $title = 'Eco Campersia';
        break;
    case 'projects':
        if(isset($url_arr[1]))
        {
            $page = 'project';
            $title = 'Dokframe-project';
        }
        else
        {
            $page = 'projects';
            $title = 'Dokframe-projects';
        }
        break;
    case 'contact':
        $page = 'contact';
        $title = 'Dokframe-contact us';
        break;
    case 'about':
        $page = 'about';
        $title = 'Dokframe-about us';
        break;
        case 'service':
            $page = 'service';
            $title = 'Dokframe-service';
            break;
        case 'rules':
            $page = 'rules';
            $title = 'Dokframe-rules';
            break;
            case 'shop':
                $page = 'shop';
                $title = 'Dokframe-shop';
                break;
                case 'magazine':
                    $page = 'magazine';
                    $title = 'Dokframe-magazine';
                    break;
                    case 'tours':
                        $page = 'tours';
                        $title = 'Dokframe-tours';
                        break;
                        case 'career':
                            $page = 'career';
                            $title = 'Dokframe-career';
                            break;
}
switch ($method)
{
    case 'POST':
        require_once('pages/' . $page .'.php');
        break;
    case 'GET':
        require_once('pages/header.php');
        require_once('pages/' . $page .'.php');
        require_once('pages/footer.php');
        break;
}

<?php
declare(strict_types=1);

function goUrl(string $url)
{
    echo '<script type="text/javascript">location="';
    echo $url;
    echo '";</script>';
}

function getArticles() : array{
    return json_decode(file_get_contents('db/articles.json'), true);
}

function getArticlesList() : string{
    $articles = getArticles();
    $link = '';
    foreach ($articles as $article) {
        $link .= '<li class="nav-item"><a class="nav-link" href="index.php?id=' . $article['id']
            . '">' . $article['title'] . '</a></li>';
    }
    return $link;
}
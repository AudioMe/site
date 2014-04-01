<table class="table table-bordered">
    <tr class="error">
        <td class="text-error">Студий ожидает публикации:</td>
        <td><a class="btn btn-info" href="/admin/noPublicStudios"><?php if (isset($studios_all_no_public)) echo $studios_all_no_public; ?></a></td>
    </tr>
    <tr class="error">
        <td class="text-error">Статей ожидает публикации:</td>
        <td><a class="btn btn-info" href="/admin/noPublicArticles"><?php if (isset($articles_all_no_public)) echo $articles_all_no_public; ?></a></td>
    </tr>

</table>
<br/>
<table class="table table-bordered">
    <tr class="success">
        <td class="text-info">Опубликованных студий:</td>
        <td><a class="btn btn-info" href="/admin/studios"><?php if (isset($studios_all)) echo $studios_all; ?></a></td>
    </tr>
    <tr>
        <td class="text-info">Всего комментариев:</td>
        <td><a class="btn btn-info" href="/admin/comments"><?php if (isset($comments_all)) echo $comments_all; ?></a></td>
    </tr>
    <tr class="success">
        <td class="text-info">Всего новостей:</td>
        <td><a class="btn btn-info" href="/admin/news"><?php if (isset($news_all)) echo $news_all; ?></a></td>
    </tr>

    <tr>
        <td class="text-info">Комментариев новостей:</td>
        <td><a class="btn btn-info" href="/admin/commentsNews"><?php if (isset($comments_news)) echo $comments_news; ?></a></td>
    </tr>

    <tr class="success">
        <td class="text-info">Всего скидок:</td>
        <td><a class="btn btn-info" href="/admin/discounts"><?php if (isset($discounts_all)) echo $discounts_all; ?></a></td>
    </tr>

    <tr>
        <td class="text-info">Всего статей:</td>
        <td><a class="btn btn-info" href="/admin/articles"><?php if (isset($articles_all)) echo $articles_all; ?></a></td>
    </tr>
    <tr class="success">
        <td class="text-info">Комментариев статей:</td>
        <td><a class="btn btn-info" href="/admin/commentsArticles"><?php if (isset($comments_articles)) echo $comments_articles; ?></a></td>
    </tr>

    <tr>
        <td class="text-info">Количество обсуждений:</td>
        <td><a class="btn btn-info" href="/admin/conferences"><?php if (isset($conferences_all)) echo $conferences_all; ?></a></td>
    </tr>
    <tr class="success">
        <td class="text-info">Комментариев обсуждений:</td>
        <td><a class="btn btn-info" href="/admin/commentsConference"><?php if (isset($comments_conference)) echo $comments_conference; ?></a></td>
    </tr>

    <tr>
        <td class="text-info">Объявление о покупке/продаже:</td>
        <td><a class="btn btn-info" href="/admin/buys"><?php if (isset($buys_all)) echo $buys_all; ?></a></td>
    </tr>
    <tr class="success">
        <td class="text-info">Комментариев о покупке/продаже:</td>
        <td><a class="btn btn-info" href="/admin/commentsBuy"><?php if (isset($comments_buy)) echo $comments_buy; ?></a></td>
    </tr>
    <tr>
        <td class="text-info">Записей в чёрном списке:</td>
        <td><a class="btn btn-info" href="/admin/blacklists"><?php if (isset($blacklists_all)) echo $blacklists_all; ?></a></td>
    </tr>
</table>

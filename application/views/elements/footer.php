<!-- Yandex.Metrika counter -->
<div>
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22776895 = new Ya.Metrika({id:22776895,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/22776895" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</div>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript">
    jQuery('#open-login-popup').click(function () {
        jQuery('#form-login').toggle("hide");
        jQuery('#username').find('[name="username"]').focus();
    })
    jQuery('#x-button').click(function () {
        jQuery('#form-login').fadeOut();
    })
    jQuery('#search_studios').click(function () {
        if (!$('#search_form1').find('input[type=checkbox]:checked').length
            && 0 == $('#region_id').val()) {
            var opts = {
                width: 380,         
                    position: { at: "center center" }
            };    
            $('div.ui-dialog-content').dialog('close');
            $('#dialog').html('Пожалуйста, задайте параметры для поиска по audiome.ru')
                .attr('title','Не выбраны критерии поиска')
                .dialog(opts);
        }
        else {
            if (jQuery("#btn_search_hidden").length > 0) {
                jQuery('#btn_search_hidden').trigger('click');
            } else {
                document.location.href = "/search";
            }
        }
    });
    jQuery('#search_studios_root').click(function () {
        if (0 == $('#search_form1').find('input[type=checkbox]:checked').length) {
            var opts = {
                width: 380,         
                    position: { at: "center center" }
            };    
            $('#dialog').html('Пожалуйста, задайте параметры для поиска по audiome.ru')
                .attr('title','Не выбраны критерии поиска')
                .dialog(opts);
        }
        else {
            if (jQuery("#btn_search_hidden").length > 0) {
                jQuery('#btn_search_hidden').trigger('click');
            }
        }
    });


</script>
<div class="copyright">Все права защищены © 2014</div>
<ul class="menu_bottom">
    <li><a href="/feedback">Обратная связь</a></li>
    <li><a href="/contacts">Контакты</a></li>
    <li><a href="/about">О проекте</a></li>
</ul>
<div class="footer_contatct">По всем вопросам: <strong>ask@audiome.ru</strong></div>

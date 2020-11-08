<?php
include_once './modelo/Modelo.php';
include_once './logica/frontEnd.php';
$fe = new frontEnd();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php echo $fe->head() ?>
        <title>Foro</title>
    </head>

    <body>
        <header>
            <div class="container">
                <div class="row menu">
                    <div class="col-md-2">
                        <h1>Abarrotes</h1>
                    </div>
                    <div class="col-md-10">
                        <nav>
                            <?php echo $fe->menu(); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>




        <section class="foro">
            <div class="container" >
                <div class="row">
                    <div class="col-md-4">
                        <img src="http://www.falconmasters.com/wp-content/uploads/2017/10/Curso-de-Frontend.jpg">
                        <h2>Diseño Web Profesional Curso Completo</h2>
                        <p>Bienvenido al Curso de Diseño Web, el curso en el que aprenderás paso por paso y desde cero todo lo que necesitas para convertirte en un diseñador web.</p>
                        <p>FalconMasters Carlos Arturo</a></p>
                        <p>18 octubre, 2017</p>
                    </div>
                    <div class="col-md-4">
                        <img src="http://www.falconmasters.com/wp-content/uploads/2017/10/Curso-de-Bootstrap-4.jpg">
                        <h2>Diseño Web Profesional Curso Completo</h2>
                        <p>Bienvenido al Curso de Diseño Web, el curso en el que aprenderás paso por paso y desde cero todo lo que necesitas para convertirte en un diseñador web.</p>
                        <p>FalconMasters Carlos Arturo</a></p>
                        <p>18 octubre, 2017</p>
                    </div>
                    <div class="col-md-4">
                        <img src="http://www.falconmasters.com/wp-content/uploads/2016/01/curso-de-php-y-mysql.jpg">
                        <h2>Diseño Web Profesional Curso Completo</h2>
                        <p>Bienvenido al Curso de Diseño Web, el curso en el que aprenderás paso por paso y desde cero todo lo que necesitas para convertirte en un diseñador web.</p>
                        <p>FalconMasters Carlos Arturo</a></p>
                        <p>18 octubre, 2017</p>
                    </div>
                </div> 
                <div class="row">
                    <img src="http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1.jpg" class="attachment-homepage-thumb size-homepage-thumb wp-post-image" alt="Escribe CSS como un PRO, Curso Básico de SASS" srcset="http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1.jpg 880w, http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1-300x150.jpg 300w, http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1-768x384.jpg 768w" sizes="(max-width: 880px) 100vw, 880px"></div>
                    <h2>Escribe CSS como un PRO, Curso Básico de SASS</h2>
                    <p>Optimiza, Organiza y escribe tu código CSS como un profesional con SASS.</p>
                    
                    <p>FalconMasters Carlos Arturo</a></p>
                    <p>28 julio, 2015</p>
                    <div>
                            <li><a href="http://www.falconmasters.com/category/css/" rel="category tag">CSS</a></li>
                            <li><a href="http://www.falconmasters.com/category/cursos/" rel="category tag">Cursos</a></li>
                            <li><a href="http://www.falconmasters.com/category/recursos-herramientas/" rel="category tag">Recursos y Herramientas</a></li></ul></div>
                
                </div>




                <article class="post">
                    <div class="thumb"><a href="http://www.falconmasters.com/cursos/curso-basico-de-sass/"><img width="880" height="440" src="http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1.jpg" class="attachment-homepage-thumb size-homepage-thumb wp-post-image" alt="Escribe CSS como un PRO, Curso Básico de SASS" srcset="http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1.jpg 880w, http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1-300x150.jpg 300w, http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1-768x384.jpg 768w" sizes="(max-width: 880px) 100vw, 880px"></a></div>
                    <h2 class="title"><a href="http://www.falconmasters.com/cursos/curso-basico-de-sass/">Escribe CSS como un PRO, Curso Básico de SASS</a></h2>
                    <div class="extract"><p>Optimiza, Organiza y escribe tu código CSS como un profesional con SASS.</p>
                    </div>
                    <p class="autor"><a href="#">FalconMasters Carlos Arturo</a></p>
                    <p class="date">28 julio, 2015</p>
                    <div class="post_categories"><ul class="post-categories">
                            <li><a href="http://www.falconmasters.com/category/css/" rel="category tag">CSS</a></li>
                            <li><a href="http://www.falconmasters.com/category/cursos/" rel="category tag">Cursos</a></li>
                            <li><a href="http://www.falconmasters.com/category/recursos-herramientas/" rel="category tag">Recursos y Herramientas</a></li></ul></div>
                </article>


                <article class="post">
                    <div class="thumb"><a href="http://www.falconmasters.com/web-design/sitio-web-layout-flexbox/"><img width="880" height="440" src="http://www.falconmasters.com/wp-content/uploads/2015/06/Como-hacer-un-sitio-web-layout-responsive-con-Flexbox-CSS3.jpg" class="attachment-homepage-thumb size-homepage-thumb wp-post-image" alt="Como hacer un sitio web layout responsive con Flexbox CSS3" srcset="http://www.falconmasters.com/wp-content/uploads/2015/06/Como-hacer-un-sitio-web-layout-responsive-con-Flexbox-CSS3.jpg 880w, http://www.falconmasters.com/wp-content/uploads/2015/06/Como-hacer-un-sitio-web-layout-responsive-con-Flexbox-CSS3-300x150.jpg 300w, http://www.falconmasters.com/wp-content/uploads/2015/06/Como-hacer-un-sitio-web-layout-responsive-con-Flexbox-CSS3-150x75.jpg 150w" sizes="(max-width: 880px) 100vw, 880px"></a></div>
                    <h2 class="title"><a href="http://www.falconmasters.com/web-design/sitio-web-layout-flexbox/">Como hacer un sitio web / layout responsive con Flexbox CSS3</a></h2>
                    <div class="extract"><p>Aprende como crear sitios web flexibles y (responsive) adaptables a dispositivos móviles con flexbox CSS3</p>
                    </div>
                    <p class="autor"><a href="#">FalconMasters Carlos Arturo</a></p>
                    <p class="date">30 junio, 2015</p>
                    <div class="post_categories"><ul class="post-categories">
                            <li><a href="http://www.falconmasters.com/category/css/" rel="category tag">CSS</a></li>
                            <li><a href="http://www.falconmasters.com/category/web-design/" rel="category tag">Diseño Web</a></li></ul></div>
                </article>


                <section class="pagination"><div class="wp-pagenavi">
                        <span class="pages">Página 1 de 10</span><span class="current">1</span><a class="page larger" title="Página 2" href="http://www.falconmasters.com/page/2/">2</a><a class="page larger" title="Página 3" href="http://www.falconmasters.com/page/3/">3</a><a class="page larger" title="Página 4" href="http://www.falconmasters.com/page/4/">4</a><a class="page larger" title="Página 5" href="http://www.falconmasters.com/page/5/">5</a><span class="extend">...</span><a class="larger page" title="Página 10" href="http://www.falconmasters.com/page/10/">10</a><span class="extend">...</span><a class="nextpostslink" rel="next" href="http://www.falconmasters.com/page/2/">»</a><a class="last" href="http://www.falconmasters.com/page/10/">Última »</a>
                    </div></section>


              

        <aside>
            <div class="widget"><div class="us_wrapper us_fan_count_wrapper us_skin_default"><div class="us_fan_count rows-3 us_facebook us_rand_AaQCq us_facebook_fan_count tooltipstered" data-network="facebook"><a href="https://facebook.com/falconmasters" target="_blank" class="us_facebook_fan_count_link"><div class="us_fan_count_button"><div class="us_fan_count_icon_holder" style="font-size: 20px;"><i class="us-icon-facebook"></i></div><div class="us_fan_count_holder" style="font-size: 16px;">1</div><div class="us_fan_count_desc" style="font-size: 11.4286px;">Fans</div></div></a></div><div class="us_fan_count rows-3 us_twitter us_rand_RJhOl us_twitter_fan_count tooltipstered" data-network="twitter"><a href="https://twitter.com/FalconMasters" target="_blank" class="us_twitter_fan_count_link"><div class="us_fan_count_button"><div class="us_fan_count_icon_holder" style="font-size: 20px;"><i class="us-icon-twitter"></i></div><div class="us_fan_count_holder" style="font-size: 16px;">7.0k</div><div class="us_fan_count_desc" style="font-size: 11.4286px;">Seguidores</div></div></a></div><div class="us_fan_count rows-3 us_google us_rand_0KZHW us_google_fan_count tooltipstered" data-network="google"><a href="https://plus.google.com/113809802013314197544/" target="_blank" class="us_google_fan_count_link"><div class="us_fan_count_button"><div class="us_fan_count_icon_holder" style="font-size: 20px;"><i class="us-icon-google"></i></div><div class="us_fan_count_holder" style="font-size: 16px;">1.5k</div><div class="us_fan_count_desc" style="font-size: 11.4286px;">Seguidores</div></div></a></div><div class="us_fan_count rows-3 us_pinterest us_rand_iIK4a us_pinterest_fan_count" data-network="pinterest"><a href="http://www.pinterest.com/falconmasters" target="_blank" class="us_pinterest_fan_count_link"><div class="us_fan_count_button"><div class="us_fan_count_icon_holder" style="font-size: 20px;"><i class="us-icon-pinterest"></i></div><div class="us_fan_count_holder" style="font-size: 16px;">195</div><div class="us_fan_count_desc" style="font-size: 11.4286px;">Seguidores</div></div></a></div><div class="us_fan_count rows-3 us_youtube us_rand_q39N8 us_youtube_fan_count tooltipstered" data-network="youtube"><a href="https://www.youtube.com/user/falconmasters/" target="_blank" class="us_youtube_fan_count_link"><div class="us_fan_count_button"><div class="us_fan_count_icon_holder" style="font-size: 20px;"><i class="us-icon-youtube"></i></div><div class="us_fan_count_holder" style="font-size: 16px;">244.4k</div><div class="us_fan_count_desc" style="font-size: 11.4286px;">Suscriptores</div></div></a></div><div class="us_fan_count rows-3 us_mailchimp us_rand_bxGzi us_mailchimp_fan_count" data-network="mailchimp"><a href="http://eepurl.com/S9V3L" target="_blank" class="us_mailchimp_fan_count_link"><div class="us_fan_count_button"><div class="us_fan_count_icon_holder" style="font-size: 20px;"><i class="us-icon-mailchimp"></i></div><div class="us_fan_count_holder" style="font-size: 16px;">663</div><div class="us_fan_count_desc" style="font-size: 11.4286px;">Suscriptores</div></div></a></div></div></div><div class="widget"><h3> </h3>			<div class="textwidget"><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- FalconMasters Sidebar -->
                    <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-5188715446644740" data-ad-slot="1281185073"></ins>
                    <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                    </script></div>
            </div><div class="widget"><h3> </h3>			<div class="textwidget"><!-- MailChimp for WordPress v2.3.14 - https://wordpress.org/plugins/mailchimp-for-wp/ --><div id="mc4wp-form-1" class="form mc4wp-form"><form method="post"><div class="mail_sub">
                                <p>Suscríbete y sigue aprendiendo!</p>
                                <input required="required" placeholder="Escribe tu Correo Electrónico" name="EMAIL" type="email">

                                <button onclick="document.getElementById('mc4wp_form-1').submit()" class="button white"><span class="icon-mail"></span>Suscribirse</button>
                            </div>
                            <div style="position: absolute; left: -5000px;"><input type="text" name="_mc4wp_h_57400b0c8b4866b5efae6aa3ba73ec81" value="" tabindex="-1" autocomplete="off"></div><input type="hidden" name="_mc4wp_timestamp" value="1530843664"><input type="hidden" name="_mc4wp_form_id" value="0"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"><input type="hidden" name="_mc4wp_form_submit" value="1"><input type="hidden" name="_mc4wp_form_nonce" value="b83af4ebb2"></form></div><!-- / MailChimp for WordPress Plugin --></div>
            </div>
            <!-- WordPress Popular Posts Plugin [W] [daily] [views] [regular] -->

            <div class="widget">
                <h3>Top 5 Artículos mas populares</h3><!-- cached -->
                <ul class="wpp-list wpp-list-with-thumbnails">
                    <li>
                        <a href="http://www.falconmasters.com/tutoriales/como-hacer-un-menu-desplegable/" title="Como hacer un menú desplegable con HTML y CSS" target="_self"><img src="http://www.falconmasters.com/wp-content/uploads/wordpress-popular-posts/20-featured-280x146.jpg" width="280" height="146" alt="Como hacer un menú desplegable con HTML y CSS" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a>
                        <a href="http://www.falconmasters.com/tutoriales/como-hacer-un-menu-desplegable/" title="Como hacer un menú desplegable con HTML y CSS" class="wpp-post-title" target="_self">Como hacer un menú desplegable con HTML y CSS</a>
                    </li>
                    <li>
                        <a href="http://www.falconmasters.com/offtopic/como-utilizar-consola-de-windows/" title="Como utilizar la Consola de Windows (Comandos básicos CMD)" target="_self"><img src="http://www.falconmasters.com/wp-content/uploads/wordpress-popular-posts/507-featured-280x146.jpg" width="280" height="146" alt="Como utilizar la Consola de Windows (Comandos básicos CMD)" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a>
                        <a href="http://www.falconmasters.com/offtopic/como-utilizar-consola-de-windows/" title="Como utilizar la Consola de Windows (Comandos básicos CMD)" class="wpp-post-title" target="_self">Como utilizar la Consola de Windows (Comandos básicos CMD)</a>
                    </li>
                    <li>
                        <a href="http://www.falconmasters.com/web-design/menu-de-navegacion-responsive/" title="Como hacer un menú de navegación adaptable a dispositivos móviles (Responsive Design)" target="_self"><img src="http://www.falconmasters.com/wp-content/uploads/wordpress-popular-posts/463-featured-280x146.jpg" width="280" height="146" alt="Como hacer un menú de navegación adaptable a dispositivos móviles (Responsive Design)" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a>
                        <a href="http://www.falconmasters.com/web-design/menu-de-navegacion-responsive/" title="Como hacer un menú de navegación adaptable a dispositivos móviles (Responsive Design)" class="wpp-post-title" target="_self">Como hacer un menú de navegación adaptable a dispositivos móviles (Responsive Design)</a>
                    </li>
                    <li>
                        <a href="http://www.falconmasters.com/web-design/tutorial-menu-de-navegacion-fijo/" title="Tutorial como hacer un menú de navegación fijo en pantalla." target="_self"><img src="http://www.falconmasters.com/wp-content/uploads/wordpress-popular-posts/407-featured-280x146.jpg" width="280" height="146" alt="Tutorial como hacer un menú de navegación fijo en pantalla." class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a>
                        <a href="http://www.falconmasters.com/web-design/tutorial-menu-de-navegacion-fijo/" title="Tutorial como hacer un menú de navegación fijo en pantalla." class="wpp-post-title" target="_self">Tutorial como hacer un menú de navegación fijo en pantalla.</a>
                    </li>
                    <li>
                        <a href="http://www.falconmasters.com/tutoriales/barra-social-vertical-html-y-css3/" title="Como hacer una Barra Social (vertical y fija a pantalla) con HTML y CSS3" target="_self"><img src="http://www.falconmasters.com/wp-content/uploads/wordpress-popular-posts/598-featured-280x146.jpg" width="280" height="146" alt="Como hacer una Barra Social (vertical y fija a pantalla) con HTML y CSS3" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a>
                        <a href="http://www.falconmasters.com/tutoriales/barra-social-vertical-html-y-css3/" title="Como hacer una Barra Social (vertical y fija a pantalla) con HTML y CSS3" class="wpp-post-title" target="_self">Como hacer una Barra Social (vertical y fija a pantalla) con HTML y CSS3</a>
                    </li>
                </ul>

            </div>
        </aside>			

        <section class="cursos_list">
            <h3><hr class="left"><a href="http://www.falconmasters.com/category/cursos/"><span class="icon-rocket"></span>Aprende con nuestros cursos</a><hr class="right"></h3>


            <section class="curso">
                <div class="thumb"><a href="http://www.falconmasters.com/cursos/diseno-web/"><img width="880" height="440" src="http://www.falconmasters.com/wp-content/uploads/2017/10/Curso-de-Frontend.jpg" class="attachment-homepage-thumb size-homepage-thumb wp-post-image" alt="" srcset="http://www.falconmasters.com/wp-content/uploads/2017/10/Curso-de-Frontend.jpg 880w, http://www.falconmasters.com/wp-content/uploads/2017/10/Curso-de-Frontend-300x150.jpg 300w, http://www.falconmasters.com/wp-content/uploads/2017/10/Curso-de-Frontend-768x384.jpg 768w" sizes="(max-width: 880px) 100vw, 880px"></a></div>
                <h2 class="title">Diseño Web Profesional El Curso Completo, Practico y desde 0</h2>
                <p class="extract"></p><p>Bienvenido al Curso de Diseño Web, el curso en el que aprenderás paso por paso y desde cero todo lo que necesitas para convertirte en un diseñador web.</p>
                <p></p>
                <a href="http://www.falconmasters.com/cursos/diseno-web/" class="button"><span class="icon-list"></span>Inicia el curso</a>
            </section>


            <section class="curso">
                <div class="thumb"><a href="http://www.falconmasters.com/cursos/bootstrap4/"><img width="880" height="440" src="http://www.falconmasters.com/wp-content/uploads/2017/10/Curso-de-Bootstrap-4.jpg" class="attachment-homepage-thumb size-homepage-thumb wp-post-image" alt="" srcset="http://www.falconmasters.com/wp-content/uploads/2017/10/Curso-de-Bootstrap-4.jpg 880w, http://www.falconmasters.com/wp-content/uploads/2017/10/Curso-de-Bootstrap-4-300x150.jpg 300w, http://www.falconmasters.com/wp-content/uploads/2017/10/Curso-de-Bootstrap-4-768x384.jpg 768w" sizes="(max-width: 880px) 100vw, 880px"></a></div>
                <h2 class="title">Bootstrap 4: El Curso Completo, Práctico y Desde Cero</h2>
                <p class="extract"></p><p>Aprende Bootstrap 4, el framework de diseño web mas importante del mundo.</p>
                <p></p>
                <a href="http://www.falconmasters.com/cursos/bootstrap4/" class="button"><span class="icon-list"></span>Inicia el curso</a>
            </section>


            <section class="curso">
                <div class="thumb"><a href="http://www.falconmasters.com/cursos/nuevo-curso-de-php-y-mysql/"><img width="880" height="440" src="http://www.falconmasters.com/wp-content/uploads/2016/01/curso-de-php-y-mysql.jpg" class="attachment-homepage-thumb size-homepage-thumb wp-post-image" alt="PHP y MYSQL: El Curso Completo, Practico y Desde Cero" srcset="http://www.falconmasters.com/wp-content/uploads/2016/01/curso-de-php-y-mysql.jpg 880w, http://www.falconmasters.com/wp-content/uploads/2016/01/curso-de-php-y-mysql-300x150.jpg 300w" sizes="(max-width: 880px) 100vw, 880px"></a></div>
                <h2 class="title">PHP y MYSQL: El Curso Completo, Practico y Desde Cero</h2>
                <p class="extract"></p><p>Aprende a crear cualquier Aplicacion y Sitio Web!. Aprende PHP y MySQL.</p>
                <p></p>
                <a href="http://www.falconmasters.com/cursos/nuevo-curso-de-php-y-mysql/" class="button"><span class="icon-list"></span>Inicia el curso</a>
            </section>


            <section class="curso">
                <div class="thumb"><a href="http://www.falconmasters.com/cursos/curso-basico-de-sass/"><img width="880" height="440" src="http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1.jpg" class="attachment-homepage-thumb size-homepage-thumb wp-post-image" alt="Escribe CSS como un PRO, Curso Básico de SASS" srcset="http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1.jpg 880w, http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1-300x150.jpg 300w, http://www.falconmasters.com/wp-content/uploads/2015/07/Escribe-CSS-como-un-PRO-Curso-Básico-de-SASS-1-768x384.jpg 768w" sizes="(max-width: 880px) 100vw, 880px"></a></div>
                <h2 class="title">Escribe CSS como un PRO, Curso Básico de SASS</h2>
                <p class="extract"></p><p>Optimiza, Organiza y escribe tu código CSS como un profesional con SASS.</p>
                <p></p>
                <a href="http://www.falconmasters.com/cursos/curso-basico-de-sass/" class="button"><span class="icon-list"></span>Inicia el curso</a>
            </section>

        </section>
    </section>
</section>

<section>
    <p> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, provident, autem, placeat impedit dolor commodi ab officiis et neque maxime eveniet consequuntur nostrum animi beatae nulla sunt incidunt? Recusandae, quasi!</span>
        <span>Laudantium, magnam, nesciunt corporis autem alias ipsa expedita error saepe unde repellendus provident magni modi. Ullam, ex, corporis, magnam quas ipsum illum labore maiores deserunt aliquid necessitatibus nisi molestiae quam.</span>
        <span>Aliquid, hic, accusamus, ullam iure libero ratione autem pariatur excepturi consectetur culpa omnis placeat rerum dolorem odio itaque sit dignissimos quos natus ducimus sunt nobis facilis error praesentium obcaecati magnam?</span>
        <span>Ipsam, eos, ratione, sapiente natus animi hic in commodi at dignissimos dolorum mollitia ducimus quos assumenda labore harum illo consequatur! Accusamus, sint debitis iste ullam placeat quis et magni quo.</span>
        <span>Rerum, aut, officiis, quibusdam earum quam recusandae laudantium ducimus sequi sapiente dolorum similique doloremque esse harum. Officia, iste, ipsum doloremque minus labore quasi impedit dolor soluta laborum magni error consequatur!</span>
        <span>Quas, deserunt, ipsam rerum maxime modi provident quos natus minus quibusdam dignissimos voluptatum vel necessitatibus in eveniet commodi? Ducimus, itaque animi laboriosam id ad sed nulla natus possimus mollitia iste.</span>
        <span>Qui, velit, molestias ut delectus maxime quia aut iusto rerum laboriosam eligendi quam minus ad magni dolor esse iste officiis aperiam itaque et ex earum eius accusantium nihil amet perferendis.</span>
        <span>Odit, consequatur, cupiditate hic iste laboriosam id libero! Laborum, magnam magni nobis nam cumque iure iusto non veniam ipsam sint voluptate vero praesentium dolor harum nostrum. Voluptatum explicabo maiores dolores!</span> </p>
</section>



<footer class="footer">
    <div class="container">
        <div class="row">
            <?php echo $fe->footer() ?>
        </div>
    </div>
</footer>
</body>



</html>
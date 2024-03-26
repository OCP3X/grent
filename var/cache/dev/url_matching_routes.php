<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/documenti' => [[['_route' => 'app_documenti_index', '_controller' => 'App\\Controller\\DocumentiController::index'], null, ['GET' => 0], null, true, false, null]],
        '/documenti/new' => [[['_route' => 'app_documenti_new', '_controller' => 'App\\Controller\\DocumentiController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lavagna' => [[['_route' => 'app_lavagna_index', '_controller' => 'App\\Controller\\LavagnaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lavagna/new' => [[['_route' => 'app_lavagna_new', '_controller' => 'App\\Controller\\LavagnaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lavagna/lista/anomalia' => [[['_route' => 'app_lavagna_get_list_anomalia', '_controller' => 'App\\Controller\\LavagnaController::getListAnomalia'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lavagna/get/table' => [[['_route' => 'app_lavagna_get_table_for_find_anomalie', '_controller' => 'App\\Controller\\LavagnaController::getTableForFindAnomalie'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'officina_index', '_controller' => 'App\\Controller\\MainPage::index'], null, null, null, false, false, null]],
        '/upgrade_db' => [[['_route' => 'upgrade_db', '_controller' => 'App\\Controller\\MainPage::upgrade_dn'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'logout_app', '_controller' => 'App\\Controller\\MainPage::logout_app'], null, null, null, false, false, null],
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null],
        ],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/revisione' => [[['_route' => 'app_revisione_index', '_controller' => 'App\\Controller\\RevisioneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/revisione/new' => [[['_route' => 'app_revisione_new', '_controller' => 'App\\Controller\\RevisioneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/revisione/list/revisione' => [[['_route' => 'app_revisione_list', '_controller' => 'App\\Controller\\RevisioneController::findAnomalia'], null, ['GET' => 0], null, false, false, null]],
        '/revisione/notifica/revisione' => [[['_route' => 'app_revisione_notifica', '_controller' => 'App\\Controller\\RevisioneController::findnotifica'], null, ['GET' => 0], null, false, false, null]],
        '/righe' => [[['_route' => 'app_righe_index', '_controller' => 'App\\Controller\\RigheController::index'], null, ['GET' => 0], null, true, false, null]],
        '/righe/new' => [[['_route' => 'app_righe_new', '_controller' => 'App\\Controller\\RigheController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/start' => [[['_route' => 'app_start_index', '_controller' => 'App\\Controller\\StartController::index'], null, ['GET' => 0], null, true, false, null]],
        '/teste' => [[['_route' => 'app_teste_index', '_controller' => 'App\\Controller\\TesteController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/teste/new' => [[['_route' => 'app_teste_new', '_controller' => 'App\\Controller\\TesteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/veicoli' => [[['_route' => 'app_veicoli_index', '_controller' => 'App\\Controller\\VeicoliController::index'], null, ['GET' => 0], null, true, false, null]],
        '/veicoli/new' => [[['_route' => 'app_veicoli_new', '_controller' => 'App\\Controller\\VeicoliController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/veicoli/get/table' => [[['_route' => 'app_veicoli_get_table_for_find_veicolo', '_controller' => 'App\\Controller\\VeicoliController::getTableForFindVeicolo'], null, ['GET' => 0], null, false, false, null]],
        '/VeicoliInfo' => [[['_route' => 'app_VeicoliInfo_index', '_controller' => 'App\\Controller\\VeicoliInfoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/VeicoliInfo/list/VeicoliInfo' => [[['_route' => 'app_VeicoliInfo_list', '_controller' => 'App\\Controller\\VeicoliInfoController::findAnomalia'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/documenti/([^/]++)(?'
                    .'|(*:191)'
                    .'|/edit(*:204)'
                    .'|(*:212)'
                .')'
                .'|/lavagna/(?'
                    .'|([^/]++)(?'
                        .'|(*:244)'
                        .'|/(?'
                            .'|edit(*:260)'
                            .'|duplicate(*:277)'
                        .')'
                        .'|(*:286)'
                    .')'
                    .'|delete/([^/]++)(*:310)'
                    .'|veicoli/([^/]++)(*:334)'
                    .'|([^/]++)/veicoli/([^/]++)(*:367)'
                    .'|find/anomali(?'
                        .'|a/([^/]++)/([^/]++)/([^/]++)(*:418)'
                        .'|e/veicoli/([^/]++)(*:444)'
                    .')'
                .')'
                .'|/r(?'
                    .'|evisione/(?'
                        .'|([^/]++)(?'
                            .'|(*:482)'
                            .'|/edit(*:495)'
                            .'|(*:503)'
                        .')'
                        .'|aggiorna_edit(*:525)'
                    .')'
                    .'|ighe/(?'
                        .'|de(?'
                            .'|ttaglio/([^/]++)(?:/([^/]++))?(*:577)'
                            .'|lete/([^/]++)(*:598)'
                        .')'
                        .'|evadi_lavagna/([^/]++)/([^/]++)(*:638)'
                        .'|testa/([^/]++)(*:660)'
                        .'|add/anomalia/(?'
                            .'|([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:719)'
                            .'|lavagna/([^/]++)/([^/]++)(*:752)'
                        .')'
                        .'|get/anomalia/([^/]++)(*:782)'
                        .'|confirm/([^/]++)(*:806)'
                        .'|([^/]++)(?'
                            .'|(*:825)'
                            .'|/edit(*:838)'
                        .')'
                        .'|delete/([^/]++)/([^/]++)(*:871)'
                    .')'
                .')'
                .'|/teste/(?'
                    .'|dettaglio/([^/]++)(*:909)'
                    .'|list/documenti/([^/]++)(*:940)'
                    .'|upload/([^/]++)(*:963)'
                    .'|elimina/([^/]++)(*:987)'
                    .'|chiudi_doc/([^/]++)(*:1014)'
                    .'|apri_doc/([^/]++)(*:1040)'
                    .'|stampa_doc/([^/]++)(?:/([^/]++))?(*:1082)'
                    .'|([^/]++)(?'
                        .'|(*:1102)'
                        .'|/edit(*:1116)'
                    .')'
                    .'|update/record/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:1175)'
                    .'|delete/(?'
                        .'|([^/]++)(*:1202)'
                        .'|all/([^/]++)(*:1223)'
                    .')'
                    .'|confirm/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:1276)'
                .')'
                .'|/veicoli/(?'
                    .'|([^/]++)(?'
                        .'|(*:1309)'
                        .'|/edit(*:1323)'
                        .'|(*:1332)'
                    .')'
                    .'|find/(?'
                        .'|([^/]++)(*:1358)'
                        .'|all/([^/]++)/([^/]++)(*:1388)'
                    .')'
                .')'
                .'|/VeicoliInfo/(?'
                    .'|([^/]++)(*:1423)'
                    .'|delete/([^/]++)(*:1447)'
                    .'|aggiorna(*:1464)'
                    .'|stampa(?'
                        .'|/([^/]++)/([^/]++)(*:1500)'
                        .'|_veicolo_info/([^/]++)/([^/]++)(?:/([^/]++))?(*:1554)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'app_documenti_show', '_controller' => 'App\\Controller\\DocumentiController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'app_documenti_edit', '_controller' => 'App\\Controller\\DocumentiController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'app_documenti_delete', '_controller' => 'App\\Controller\\DocumentiController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        244 => [[['_route' => 'app_lavagna_show', '_controller' => 'App\\Controller\\LavagnaController::show'], ['idL'], ['GET' => 0], null, false, true, null]],
        260 => [[['_route' => 'app_lavagna_edit', '_controller' => 'App\\Controller\\LavagnaController::edit'], ['idL'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        277 => [[['_route' => 'app_lavagna_duplicate', '_controller' => 'App\\Controller\\LavagnaController::duplicate'], ['idL'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        286 => [[['_route' => 'app_lavagna_delete', '_controller' => 'App\\Controller\\LavagnaController::delete'], ['idL'], ['POST' => 0], null, false, true, null]],
        310 => [[['_route' => 'app_lavagna_delete_form_less', '_controller' => 'App\\Controller\\LavagnaController::deleteFormLess'], ['idL'], ['GET' => 0], null, false, true, null]],
        334 => [[['_route' => 'app_lavagna_get_veicoli', '_controller' => 'App\\Controller\\LavagnaController::getVeicoli'], ['descrizion'], ['GET' => 0], null, false, true, null]],
        367 => [[['_route' => 'app_lavagna_get_veicoli_for_edit', '_controller' => 'App\\Controller\\LavagnaController::getVeicoliForEdit'], ['idL', 'descrizion'], ['GET' => 0], null, false, true, null]],
        418 => [[['_route' => 'app_lavagna_find_anomalia', '_controller' => 'App\\Controller\\LavagnaController::findAnomalia'], ['anomalia', 'descrizione', 'targa'], ['GET' => 0], null, false, true, null]],
        444 => [[['_route' => 'app_lavagna_find_anomalia_by_id_veicoli', '_controller' => 'App\\Controller\\LavagnaController::findAnomaliaByIdVeicoli'], ['idVeicolo'], ['GET' => 0], null, true, true, null]],
        482 => [[['_route' => 'app_revisione_show', '_controller' => 'App\\Controller\\RevisioneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        495 => [[['_route' => 'app_revisione_edit', '_controller' => 'App\\Controller\\RevisioneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        503 => [[['_route' => 'app_revisione_delete', '_controller' => 'App\\Controller\\RevisioneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        525 => [[['_route' => 'app_revisione_aggiorna_edit', '_controller' => 'App\\Controller\\RevisioneController::aggiorna_edit'], [], ['POST' => 0], null, true, false, null]],
        577 => [[['_route' => 'riga_dettaglio', 'id_testa' => 0, '_controller' => 'App\\Controller\\RigheController::riga_dettaglio'], ['id_riga', 'id_testa'], null, null, false, true, null]],
        598 => [[['_route' => 'riga_delete', '_controller' => 'App\\Controller\\RigheController::riga_delete'], ['id_riga'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        638 => [[['_route' => 'righe_evadi_lavagna', '_controller' => 'App\\Controller\\RigheController::righe_evadi_lavagna'], ['id_testa', 'id_l'], ['GET' => 0], null, false, true, null]],
        660 => [[['_route' => 'righe_testa', '_controller' => 'App\\Controller\\RigheController::righe_testa'], ['id_testa'], ['GET' => 0], null, false, true, null]],
        719 => [[['_route' => 'app_righe_new_for_id_testa', '_controller' => 'App\\Controller\\RigheController::addAnomaia'], ['anomalia', 'descr_intervento', 'id_meccanico', 'id_t'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        752 => [[['_route' => 'app_add_righe_exist_anomalia_for_id_testa', '_controller' => 'App\\Controller\\RigheController::addExistingAnomaiaFromLavagna'], ['id_l', 'id_t'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        782 => [[['_route' => 'app_righe_get_for_id_testa', '_controller' => 'App\\Controller\\RigheController::getAnomaliaForTestaId'], ['id_t'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        806 => [[['_route' => 'app_righe_confirm_add', '_controller' => 'App\\Controller\\RigheController::confirmAdd'], ['id_teste'], ['GET' => 0], null, false, true, null]],
        825 => [[['_route' => 'app_righe_show', '_controller' => 'App\\Controller\\RigheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        838 => [[['_route' => 'app_righe_edit', '_controller' => 'App\\Controller\\RigheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        871 => [[['_route' => 'app_righe_delete_child', '_controller' => 'App\\Controller\\RigheController::deleteRigheForTestaId'], ['id_testa', 'id_testa_real'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        909 => [[['_route' => 'app_teste_dett', '_controller' => 'App\\Controller\\TesteController::app_teste_dett'], ['id_testa'], null, null, false, true, null]],
        940 => [[['_route' => 'app_list_documenti', '_controller' => 'App\\Controller\\TesteController::app_list_documenti'], ['id_veicolo'], ['GET' => 0], null, false, true, null]],
        963 => [[['_route' => 'app_upload_doc', '_controller' => 'App\\Controller\\TesteController::app_upload_doc'], ['id_veicolo'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        987 => [[['_route' => 'app_elimina_doc', '_controller' => 'App\\Controller\\TesteController::eliminafile'], ['idfile'], ['GET' => 0], null, false, true, null]],
        1014 => [[['_route' => 'app_chiudi_doc', '_controller' => 'App\\Controller\\TesteController::app_chiudi_doc'], ['id_testa'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1040 => [[['_route' => 'app_apri_doc', '_controller' => 'App\\Controller\\TesteController::app_apri_doc'], ['id_testa'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1082 => [[['_route' => 'app_stampa_doc', 'ok_pdf' => 1, '_controller' => 'App\\Controller\\TesteController::app_stampa_doc'], ['id_testa', 'ok_pdf'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1102 => [[['_route' => 'app_teste_show', '_controller' => 'App\\Controller\\TesteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1116 => [[['_route' => 'app_teste_edit', '_controller' => 'App\\Controller\\TesteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1175 => [[['_route' => 'app_teste_update', '_controller' => 'App\\Controller\\TesteController::update'], ['id_teste', 'id_veicolo', 'id_meccanico', 'tipo_doc'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1202 => [[['_route' => 'app_teste_delete_proc', '_controller' => 'App\\Controller\\TesteController::deleteProcess'], ['id_testa'], ['GET' => 0], null, false, true, null]],
        1223 => [[['_route' => 'app_teste_delete', '_controller' => 'App\\Controller\\TesteController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1276 => [[['_route' => 'app_teste_confirm_add', '_controller' => 'App\\Controller\\TesteController::confirmAdd'], ['id_teste', 'id_veicolo', 'id_meccanico', 'tipo_doc'], ['GET' => 0], null, false, true, null]],
        1309 => [[['_route' => 'app_veicoli_show', '_controller' => 'App\\Controller\\VeicoliController::show'], ['idVeicolo'], ['GET' => 0], null, false, true, null]],
        1323 => [[['_route' => 'app_veicoli_edit', '_controller' => 'App\\Controller\\VeicoliController::edit'], ['idVeicolo'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1332 => [[['_route' => 'app_veicoli_delete', '_controller' => 'App\\Controller\\VeicoliController::delete'], ['idVeicolo'], ['POST' => 0], null, false, true, null]],
        1358 => [[['_route' => 'app_veicoli_find_by_id', '_controller' => 'App\\Controller\\VeicoliController::findVeicoloById'], ['idveicolo'], ['GET' => 0], null, false, true, null]],
        1388 => [[['_route' => 'app_veicoli_find_by_descr_targa', '_controller' => 'App\\Controller\\VeicoliController::findVeicoloByDescrizioneAndTarga'], ['descrizione', 'targa'], ['GET' => 0], null, false, true, null]],
        1423 => [[['_route' => 'app_VeicoliInfo_delete', '_controller' => 'App\\Controller\\VeicoliInfoController::delete'], ['idL'], ['POST' => 0], null, false, true, null]],
        1447 => [[['_route' => 'app_VeicoliInfo_delete_form_less', '_controller' => 'App\\Controller\\VeicoliInfoController::deleteFormLess'], ['idL'], ['GET' => 0], null, false, true, null]],
        1464 => [[['_route' => 'app_VeicoliInfo_aggiorna', '_controller' => 'App\\Controller\\VeicoliInfoController::aggiorna'], [], ['POST' => 0], null, true, false, null]],
        1500 => [[['_route' => 'app_VeicoliInfo_stampa', '_controller' => 'App\\Controller\\VeicoliInfoController::stampa'], ['targa', 'data'], ['GET' => 0], null, false, true, null]],
        1554 => [
            [['_route' => 'app_stampa_doc_info', 'ok_pdf' => 1, '_controller' => 'App\\Controller\\VeicoliInfoController::app_stampa_doc'], ['id_l', 'targa', 'ok_pdf'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<!DOCTYPE html>
<html <?php language_attributes(); ?> id="pagina">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head() ?>
</head>

<body id="body" <?php body_class(); ?>>
    <div id="pade" class="site">
        <header>
            <div id="menu-desktop" class="container">
                <div class="options-header">
                    <div class="div-options d-flex">
                        <i class="icon bi-arrow-down-circle-fill"></i>
                        <a href="#conteudo" accesskey="1"><strong>Pular para conteúdo [1]</strong></a>
                    </div>
                    <div class="div-options">
                        <strong>Texto</strong>
                        <a onclick="tamanhoFont('sub')" href="#" class="sub-font" accesskey="-">A</a>
                        <a onclick="tamanhoFont('normal')" href="#" class="normal-font" accesskey="0">A</a>
                        <a onclick="tamanhoFont('soma')" href="#" class="soma-font" accesskey="+">A</a>
                    </div>
                    <div class="div-options d-flex">
                        <i class="icon bi bi-circle-half"></i>
                        <a href="#" onclick="contraste()" class="contraste" accesskey="2"><strong>Alto Contraste [2]</strong></a>
                    </div>
                    <div class="div-options d-flex">
                        <a href="#" class="PT" accesskey="2"><strong>PT</strong></a>
                        |
                        <a href="#" class="ES" accesskey="2"><strong>ES</strong></a>
                    </div>
                </div>
                <div class="menu-header">
                    <img id="logo" src="http://redpop.local/wp-content/uploads/2022/11/cropped-XVII-Congresso REDPOP-2023 RIO-DE-JANEIRO.png" alt="XVII Congresso REDPOP 2023 Rio de Janeiro">
                    <img id="logo-contraste" src="http://redpop.local/wp-content/uploads/2022/11/XVII-Congresso REDPOP-2023 RIO-DE-JANEIRO-Branco.png" alt="XVII Congresso REDPOP 2023 Rio de Janeiro">
                    <button onclick="button_menu('open');" class="check-button">
                        <div class="menu-icon">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </button>
                    <nav class="nav-menu">
                        <div class="container">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main_menu', // identificador do menu
                                    'depth' => 1 // limita submenus
                                )
                            )
                            ?>
                        </div>
                    </nav>
                </div>
            </div>




            <div id="menu-mobile">
                <button onclick="button_menu('close');" class="close-button"><i class="bi bi-x-circle"></i></button>
                <div class="menu-header-mobile">
                    <nav class="nav-menu-mobile">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main_menu', // identificador do menu
                                'depth' => 1 // limita submenus
                            )
                        )
                        ?>
                    </nav>
                </div>

                <div class="options-header-mobile">
                    <div class="div-options-mobile">
                        <strong>Texto</strong>
                        <a onclick="tamanhoFont('sub')" href="#" class="sub-font">A</a>
                        <a onclick="tamanhoFont('normal')" href="#" class="normal-font">A</a>
                        <a onclick="tamanhoFont('soma')" href="#" class="soma-font">A</a>
                    </div>
                    <div class="div-options-mobile d-flex">
                        <i class="icon bi bi-circle-half"></i>
                        <a onclick="contraste()" class="contraste"><strong>Alto Contraste</strong></a>
                    </div>
                </div>
            </div>
        </header>
        <?php
        if (!is_front_page()) {
        ?>
            <div class="title-pages">
                <?php echo get_the_title(); ?>
            </div>
        <?php
        }
        ?>
        <noscript>Essa página precisa de javascript para funcionar!</noscript>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt="">
            </a>
        </div>
        <nav class="header__nav pc">
            <ul class="flex__item">
                <li class="nav__list">
                    <a href="<?php echo get_category_link(2); ?>" class="nav__link">HTML</a>
                </li>
                <li class="nav__list">
                    <a href="<?php echo get_category_link(3); ?>" class="nav__link">CSS</a>
                </li>
                <li class="nav__list">
                    <a href="<?php echo get_category_link(4); ?>" class="nav__link">JavaScript</a>
                </li>
                <li class="nav__list">
                    <a href="<?php echo get_category_link(5); ?>" class="nav__link">PHP</a>
                </li>
                <li class="nav__list">
                    <a href="<?php echo get_category_link(6); ?>" class="nav__link">MySQL</a>
                </li>
            </ul>
        </nav>
    </header>
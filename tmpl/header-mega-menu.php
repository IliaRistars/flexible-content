<?php
if (get_field('header_menus', 'options')) : ?>
    <nav class="header__menu">
        <?php while (has_sub_field('header_menus', 'options')) : ?>
            <?php
            // Mega menu ------------------
            if (get_sub_field('mega_menu')) : ?>
                <ul class="header__menu--list">
                    <?php while (has_sub_field('mega_menu')) : ?>
                        <!-- ******************************************** -->
                        <?php
                        if (get_row_layout() == 'menu_item_without_dropdown') :
                            $link = get_sub_field('link');
                        ?>
                            <li class="header__menu--list--item">
                                <a href="<?php echo $link['url']; ?>">
                                    <?php echo $link['title']; ?>
                                </a>
                            </li>
                            <!-- ************************************* -->
                        <?php
                        elseif (get_row_layout() == 'menu_item_with_dropdown') :
                            $link = get_sub_field('link'); ?>
                            <li class="header__menu--list--item">
                                <a href="<?php echo $link['url']; ?>" class="has-dropdown">
                                    <?php echo $link['title']; ?>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <?php
                                // Dropdown ------------------
                                if (get_sub_field('dropdown_blocks')) : ?>
                                    <div class="dropdown">
                                        <?php while (has_sub_field('dropdown_blocks')) : ?>
                                            <?php
                                            // Box content
                                            if (get_row_layout() == 'text_block') :
                                                $content = get_sub_field('content');
                                                $linkMore = get_sub_field('link_more');
                                                $ctaBtn = get_sub_field('cta_btn');
                                            ?>
                                                <div class="dropdown__block">
                                                    <?php if ($content) :
                                                        echo $content;
                                                    ?>
                                                    <?php endif; ?>
                                                    <?php if ($linkMore) : ?>
                                                        <a href="<?php echo $linkMore['url']; ?>" class="dropdown__block--cta">
                                                            <?php echo $linkMore['title']; ?> <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if ($ctaBtn) : ?>
                                                        <div class="dropdown__cta">
                                                            <a href="<?php echo $ctaBtn['url']; ?>">
                                                                <?php echo $ctaBtn['title']; ?>
                                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7516 0.893698C15.8288 0.925721 15.9012 0.973142 15.964 1.03596C16.027 1.09895 16.0745 1.17155 16.1066 1.24905C16.1277 1.30009 16.1426 1.35437 16.1503 1.41095L16.1503 1.41158C16.1543 1.44091 16.1562 1.47046 16.1562 1.5V5.875C16.1562 6.23744 15.8624 6.53125 15.5 6.53125C15.1678 6.53125 14.8932 6.28437 14.8497 5.96405L14.8438 5.875V3.08433L7.21404 10.714C6.95776 10.9703 6.54224 10.9703 6.28596 10.714C6.05298 10.4811 6.0318 10.1165 6.22242 9.85956L6.28596 9.78596L13.9157 2.15625H11.125C10.7928 2.15625 10.5182 1.90937 10.4747 1.58905L10.4688 1.5C10.4688 1.16777 10.7156 0.893195 11.036 0.849741L11.125 0.84375H15.4999H15.5C15.5891 0.84375 15.6741 0.861515 15.7516 0.893698ZM7.625 3.46875C7.98744 3.46875 8.28125 3.76256 8.28125 4.125C8.28125 4.45723 8.03437 4.7318 7.71405 4.77526L7.625 4.78125H3.25C2.68369 4.78125 2.21791 5.21164 2.1619 5.76317L2.15625 5.875V13.75C2.15625 14.3163 2.58664 14.7821 3.13817 14.8381L3.25 14.8438H11.125C11.6913 14.8438 12.1571 14.4134 12.2131 13.8618L12.2188 13.75V9.375C12.2188 9.01256 12.5126 8.71875 12.875 8.71875C13.2072 8.71875 13.4818 8.96563 13.5253 9.28595L13.5312 9.375V13.75C13.5312 15.0297 12.5323 16.0761 11.2716 16.1519L11.125 16.1562H3.25C1.97028 16.1562 0.923896 15.1573 0.848141 13.8966L0.84375 13.75V5.875C0.84375 4.59528 1.84274 3.5489 3.10342 3.47314L3.25 3.46875H7.625Z" fill="#006272" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php
                                            // Sub menu
                                            elseif (get_row_layout() == 'sub_menu') : ?>
                                                <?php
                                                // Sub menu ------------------
                                                if (get_sub_field('sub_menu')) : ?>
                                                    <ul class="dropdown__menu">
                                                        <?php while (has_sub_field('sub_menu')) : ?>
                                                            <?php
                                                            // Box content
                                                            if (get_row_layout() == 'title_menu') :
                                                                $title = get_sub_field('title');
                                                            ?>
                                                                <h4>
                                                                    <?php echo $title; ?>
                                                                </h4>
                                                            <?php
                                                            // Item menu
                                                            elseif (get_row_layout() == 'sub_item_without_dropdown') :
                                                                $link = get_sub_field('link'); ?>
                                                                <li class="dropdown__menu--item">
                                                                    <a href="<?php echo $link['url']; ?>">
                                                                        <?php echo $link['title']; ?>
                                                                    </a>
                                                                </li>
                                                            <?php
                                                            // Item menu
                                                            elseif (get_row_layout() == 'sub_item_with_dropdown') :
                                                                $link = get_sub_field('link'); ?>
                                                                <li class="dropdown__menu--item">
                                                                    <a href="<?php echo $link['url']; ?>" class="has-dropdown">
                                                                        <?php echo $link['title']; ?>
                                                                        <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                    <?php
                                                                    // Dropdown ------------------
                                                                    if (get_sub_field('sub_sub_menu')) : ?>
                                                                        <ul class="dropdown__menu--innermenu">
                                                                            <?php while (has_sub_field('sub_sub_menu')) :
                                                                                $link = get_sub_field('link'); ?>
                                                                                <li class="dropdown__menu--innermenu--item">
                                                                                    <a href="<?php echo $link['url']; ?>">
                                                                                        <?php echo $link['title']; ?>
                                                                                    </a>
                                                                                </li>
                                                                            <?php endwhile; ?>
                                                                        </ul>
                                                                    <?php endif; ?>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endwhile; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                            <!-- *************************************** -->
                        <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            <?php endif;
            // end mega menu---------------
            ?>
            <!-- Right block header -->
            <?php
            // Header block buttons ------------------
            if (get_sub_field('block_button_menu')) : ?>
                <div class="header__menu--cta">
                    <?php while (has_sub_field('block_button_menu')) : ?>
                        <?php
                        if (get_row_layout() == 'button_dropdown') :
                            $name = get_sub_field('name');
                        ?>
                            <a href="<?php echo $name['url'] ?>" class="btn btn_trans portal_btn">
                                <span>
                                    <?php echo $name['title'] ?>
                                </span>
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <?php
                            // Menu ------------------
                            if (get_sub_field('menu')) : ?>
                                <ul class="portalMenu">
                                    <?php while (has_sub_field('menu')) :
                                        $link = get_sub_field('link'); ?>
                                        <li class="portalMenu__item">
                                            <a href="<?php echo $link['url'] ?>">
                                                <?php echo $link['title'] ?>
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7516 2.8937C17.8288 2.92572 17.9012 2.97314 17.964 3.03596C18.027 3.09895 18.0745 3.17155 18.1066 3.24905C18.1277 3.30009 18.1426 3.35437 18.1503 3.41095L18.1503 3.41158C18.1543 3.44091 18.1562 3.47046 18.1562 3.5V7.875C18.1562 8.23744 17.8624 8.53125 17.5 8.53125C17.1678 8.53125 16.8932 8.28437 16.8497 7.96405L16.8438 7.875V5.08433L9.21404 12.714C8.95776 12.9703 8.54224 12.9703 8.28596 12.714C8.05298 12.4811 8.0318 12.1165 8.22242 11.8596L8.28596 11.786L15.9157 4.15625H13.125C12.7928 4.15625 12.5182 3.90937 12.4747 3.58905L12.4688 3.5C12.4688 3.16777 12.7156 2.8932 13.036 2.84974L13.125 2.84375H17.4999H17.5C17.5891 2.84375 17.6741 2.86152 17.7516 2.8937ZM9.625 5.46875C9.98744 5.46875 10.2812 5.76256 10.2812 6.125C10.2812 6.45723 10.0344 6.7318 9.71405 6.77526L9.625 6.78125H5.25C4.68369 6.78125 4.21791 7.21164 4.1619 7.76317L4.15625 7.875V15.75C4.15625 16.3163 4.58664 16.7821 5.13817 16.8381L5.25 16.8438H13.125C13.6913 16.8438 14.1571 16.4134 14.2131 15.8618L14.2188 15.75V11.375C14.2188 11.0126 14.5126 10.7188 14.875 10.7188C15.2072 10.7188 15.4818 10.9656 15.5253 11.286L15.5312 11.375V15.75C15.5312 17.0297 14.5323 18.0761 13.2716 18.1519L13.125 18.1562H5.25C3.97028 18.1562 2.9239 17.1573 2.84814 15.8966L2.84375 15.75V7.875C2.84375 6.59528 3.84274 5.5489 5.10342 5.47314L5.25 5.46875H9.625Z" fill="white" />
                                                </svg>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        <?php elseif (get_row_layout() == 'button') :
                            $button = get_sub_field('button'); ?>
                            <a href="<?php echo $button['url'] ?>" class="btn">
                                <span><?php echo $button['title'] ?></span>
                            </a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <!-- End right block header -->
        <?php endwhile; ?>
    </nav>
<?php endif; ?>
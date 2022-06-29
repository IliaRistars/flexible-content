<section class="tableblock">
    <div class="tableblock__wrapper">
        <?php if (have_rows('table_header')) : ?>
            <div class="tableblock__thead">
                <?php while (have_rows('table_header')) : the_row();
                    $headerCell = get_sub_field('cell');
                ?>
                    <div class="tableblock__thead--th">
                        <span><?php echo esc_html($headerCell); ?></span>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <?php if (have_rows('table_rows')) : ?>
            <?php while (have_rows('table_rows')) : the_row();
                $rowCell = get_sub_field('cell');
            ?>
                <?php if (have_rows('row')) : ?>
                    <div class="tableblock__tr">
                        <?php while (have_rows('row')) : the_row();
                            $rowCell = get_sub_field('cell');
                            $rowCellTrMob = get_sub_field('cell_tr_mob');
                        ?>
                            <div class="tableblock__tr--td">
                                <?php if ($rowCellTrMob) : ?>
                                    <span class="tableblock__mbtr">
                                        <?php echo esc_html($rowCellTrMob); ?>
                                    </span>
                                <?php endif; ?>
                                <span>
                                    <?php echo esc_html($rowCell); ?>
                                </span>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
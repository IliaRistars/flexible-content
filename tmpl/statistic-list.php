<section class="statistics">
    <div class="container large">
        <?php if (have_rows('item')) : ?>
            <div class="statistics__wrapper">
                <?php while (have_rows('item')) : the_row();
                    $quantity = get_sub_field('quantity');
                    $name = get_sub_field('name');
                ?>
                    <div class="statistics__col">
                        <h1 class="big">
                            <?php echo $quantity; ?>
                        </h1>
                        <p>
                            <?php echo $name; ?>
                        </p>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
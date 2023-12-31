<div class="accordion accordion-work">
    <?php foreach ((carbon_get_theme_option('accordeon_work')) as $key) : ?>

        <div class="accordion__item accordion-work__item">
            <img class="accordion-work__img" src="<?php echo $key['accordeon_work_image']; ?>" alt="accordeon images">
            <div class="accordion-work__inner">
                <div class="accordion__header accordion-work__head">
                    <h3 class="accordion-work__title">
                        <div class="accordion-work__title-icons">
                            <svg width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 40A40 40 0 0 1 40 0v40H0Z" fill="#BBD1DC" />
                            </svg>
                        </div>
                        <?php echo $key['accordeon_work_title']; ?>
                    </h3>
                </div>
                <div class="accordion__content accordion-work__content">
                    <div style="min-height:0;">
                        <p class="accordion-work__text">
                            <?php echo $key['accordeon_work_text']; ?>
                        </p>
                        <?php if (!empty($key['accordeon_work_btn_show'])) : ?>
                            <a class="accordion-work__btn btn popup-link" href="#popup-form">
                                <?php echo $key['accordeon_work_btn']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="accordion-work__inner-icon">
                    <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#002E5D" clip-path="url(#a)">
                            <path d="M.363 7.151h15.274v1.697H.363z" />
                            <path d="M7.152 15.636V.362h1.697v15.274z" />
                        </g>
                        <defs>
                            <clipPath id="a">
                                <path fill="#fff" d="M0 0h16v16H0z" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>









































<!-- <div class="accordion">
    <div class="accordion__item">
        <div class="accordion__head">
            Head 1
        </div>
        <div class="accordion__content">
            <div style="min-height:0;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, vitae dolorem? Sequi vitae doloribus est nesciunt voluptas ab minima iure facere voluptatibus odio minus, molestiae rem maxime molestias culpa vel dolore odit, a fugiat aperiam, laborum numquam magnam quasi quo? Quod necessitatibus, tempore quaerat libero pariatur sapiente mollitia quae quas aperiam excepturi recusandae alias, praesentium ea voluptatem laudantium incidunt? Hic quasi voluptates itaque nisi voluptatibus ipsam unde eos nesciunt nostrum accusamus ullam, dolorum optio in modi ipsum asperiores nobis quaerat est animi quia repellendus architecto dolorem! Quos recusandae aliquid totam magni cumque explicabo minima. Corporis animi molestias minus excepturi accusantium.
            </div>
        </div>
    </div>
    <div class="accordion__item">
        <div class="accordion__head">
            Head 2
        </div>
        <div class="accordion__content">
            <div style="min-height:0;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, vitae dolorem? Sequi vitae doloribus est nesciunt voluptas ab minima iure facere voluptatibus odio minus, molestiae rem maxime molestias culpa vel dolore odit, a fugiat aperiam, laborum numquam magnam quasi quo? Quod necessitatibus, tempore quaerat libero pariatur sapiente mollitia quae quas aperiam excepturi recusandae alias, praesentium ea voluptatem laudantium incidunt? Hic quasi voluptates itaque nisi voluptatibus ipsam unde eos nesciunt nostrum accusamus ullam, dolorum optio in modi ipsum asperiores nobis quaerat est animi quia repellendus architecto dolorem! Quos recusandae aliquid totam magni cumque explicabo minima. Corporis animi molestias minus excepturi accusantium.
            </div>
        </div>
    </div>
</div> -->
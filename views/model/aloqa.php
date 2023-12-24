<?php global $config;?>

<!-- header-banner -->
<section class="header-banner container-fluid">
    <div class="container">
        <div class="top_title_header">
            <span>aloqa</span>
        </div>
        <div class="navbar_control">
            <a href="">Asosiy</a>
            <span></span>
            <a href="">aloqa</a>
        </div>
    </div>
</section>
<main>
    <section class="container-fluid">
        <div class="container aloqa_container">
            <div class="left">
                <form action="#" method="post">
                    <p>murojaat</p>
                    <input type="text" name="fish" id="inputA" placeholder="f.i.sh">
                    <input type="text" name="email" id="inputA" placeholder="email">
                    <input type="text" name="tel" id="inputA" placeholder="Telefon raqamingiz">
                    <input type="text" name="manzil" id="inputA" placeholder="yashash manzili">
                    <input type="text" name="sarlavha" id="inputA" placeholder="sarlavha">
                    <textarea name="" id="inputA" placeholder="murojat mazmuni"></textarea>
                    <div class="canvas">
                        <label for=""> kodni kiriting:</label>
                        <div class="canvas_chake">
                            <canvas id="canvas"></canvas>
                            <input type="text" name="canvas" class="canvasItemCheck" id="inputA">
                        </div>
                    </div>
                    <input type="text" readonly name="murojatYuborish"  id="murojatAdd" value="yuborish">
                </form>
            </div>
            <div class="right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.386780460049!2d71.78792107554776!3d40.37811955798911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb8580a7cc85f7%3A0x23350da476023dc4!2sPresidential%20School%20in%20Fergana!5e0!3m2!1sen!2s!4v1698061127945!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</main>
<script src="<?= $config['base']['url'].'web/'?>js/aloqa.js"></script>

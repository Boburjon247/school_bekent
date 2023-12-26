<?php global $config; ?>

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
                    <input type="text" required name="fish" id="inputA" placeholder="f.i.sh">
                    <input type="text" required name="email" id="inputA" placeholder="email: xxxx123@gmail.xx">
                    <input type="text" required name="tel" id="inputA" placeholder="Tel: xx xxx xx xx">
                    <input type="text" required name="manzil" id="inputA" placeholder="yashash manzili">
                    <input type="text" required name="sarlavha" id="inputA" placeholder="sarlavha">
                    <textarea name="title" required id="inputA" placeholder="murojat mazmuni"></textarea>
                    <div class="canvas">
                        <label for=""> kodni kiriting:</label>
                        <div class="canvas_chake">
                            <canvas id="canvas"></canvas>
                            <input type="text" required name="canvas" class="canvasItemCheck" id="inputA">
                        </div>
                    </div>
                    <input type="submit" readonly name="murojatYuborish" id="murojatAdd" value="yuborish">
                </form>
            </div>
            <div class="right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.386780460049!2d71.78792107554776!3d40.37811955798911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb8580a7cc85f7%3A0x23350da476023dc4!2sPresidential%20School%20in%20Fergana!5e0!3m2!1sen!2s!4v1698061127945!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</main>
<script src="<?= $config['base']['url'] . 'web/' ?>js/aloqa.js"></script>

<?php if (isset($_POST['murojatYuborish'])) : ?>

    <?php
    $fullName = trim(strip_tags($_POST['fish'])) ?? null;
    $email =    trim(strip_tags($_POST['email'])) ?? null;
    $tel =      trim(strip_tags($_POST['tel']))  ?? null;
    $manzil =   trim(strip_tags($_POST['manzil']))  ?? null;
    $sarlavha = trim(strip_tags($_POST['sarlavha']))  ?? null;
    $title =    trim(strip_tags($_POST['title']))  ?? null;

    function tekshirInput($namuna, $input)
    {
        if (preg_match($namuna, $input)) {

        } else {
            echo '<p>false</p>';
        }
    }
    //fulnameni tekshirish;
    //example : : : Boburjon Abdunazarov Bahromjon o'g'li && Boburjon Abdunazarov Bahromjonvich;
    tekshirInput("/^([a-z']{3,15})\s([a-z']{3,20})\s([a-z']{3,20})\s?([a-z']{0,10})$/i",$fullName);

    //emailni tekshirish;
    //example : : :abdunazarov247@gmail.com
    tekshirInput('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$email);

    //telfon nomer
    //example : : : 97 666 59 79;
    tekshirInput('/^[0-9]{2}\s[0-9]{3}\s[0-9]{2}\s[0-9]{2}$/',$tel);

    //manzil
    tekshirInput("/^([a-z'0-9\s]{4,100})$/i", $manzil);

    //sarlavha
    tekshirInput("/^[a-z'0-9\s]{4,80}$/i", $sarlavha);

    //title
    tekshirInput("/^[a-z'0-9\s]{4,300}$/i", $title);
    
    
    
    
    // echo '<pre>';
    // print_r($_POST['manzil']);
    // echo '</pre>';
    
    ?>


<?php else : ?>
    <?php echo 'hatolik'; ?>

<?php endif; ?>
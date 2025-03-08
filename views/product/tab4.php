<style>
    #questions {

        font-family: yekan;
    }

    #questions p {
        font-size: 14pt;
    }

    #questions_matn {

        height: 170px;
        width: 96%;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 13pt;
        padding: 10px;
    }

    .row {
        width: 100%;
        float: right;
    }

    .questions .questions_header {
        width: 100%;
        height: 45px;
        background: #57e3e0;
    }

    .questions .questions_content {
        width: 100%;
        background: #efefef;
        float: right;

    }

    .questions .questions_header i {

        display: block;
        float: right;
        background: url("public/images/slices.png") -284px -126px no-repeat;
        width: 20px;
        height: 20px;
        margin-top: 3px;
        margin-right: 11px;

    }

    .questions .questions_header .name {

        float: left;
        margin-top: 10px;
        margin-left: 10px;
        font-size: 12pt;
    }

    .questions .questions_header .date {

        float: left;
        margin-top: 10px;
        margin-left: 20px;
        font-size: 12pt;
    }

    #questions_continer {
        float: right;
        width: 98%;
    }

    #questions_continer p {
        font-size: 12pt;
        font-family: yekan;
        padding: 10px;
    }

    #questions .questions {
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .15);
        margin-bottom: 30px;
    }

    .answer {
        padding: 10px;
        margin-top: 44px;
        font-family: "IRANYekan,sans-serif";
        background: white;
        font-size: 12.5pt;
    }

</style>

<p>پرسش خود را مطرح نمایید</p>

<textarea id="questions_matn" placeholder="متن خود را بنویسید ..."></textarea>

<div class="row">
    <span class="" style="margin-top: 10px;margin-left: 24px;background: #3ab7c2;">ارسال نظر</span>
</div>


<p>پرسش خود را مطرح نمایید</p>
<div class="horizental_row"></div>

<div id="questions_continer" class="row">
    <?php
    $questions = $data[0];
    $answers = $data[1];

    foreach ($questions as $row) {
        ?>
        <div class="questions">
            <div class="questions_header">
                <i></i>

                <span style="font-size: 13.5pt;font-family: yekan; margin-top: 15px; margin-right: 4px;">
سوال
                    </span>

                <span class="date"><?= $row['tarikh']; ?></span>
                <span class="name">امیر حسین نودهی</span>

            </div>
            <div class="questions_content">
                <p>
                    <?= $row['matn']; ?>
                </p>
            </div>

            <div class="answer">
                <p>
                    پاسخ!
                </p>

                <?= $answers[$row['id']]['matn']; ?>

            </div>
        </div>

        <?php
    }
    ?>

</div>
</section>


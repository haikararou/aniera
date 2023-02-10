<?php
/**
 * Template Name: お問い合わせ
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper3">
            <div class="lead">
                <h2><svg aria-label="CONTACT" viewBox="0 0 370.7 49.3"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_contact"></use></svg></h2>
            </div>
        </div>
        <div class="wrapper4">
            <div class="conts">
                <h2>LINEでのお問い合わせ</h2>
                <div class="indent">
                    <div id="lineQR">
                        <div>
                            <figure>
                                <figcaption>販売に関するお問い合わせ</figcaption>
                                <img src="/wp-content/themes/aniera/common/img/contact/sale_qr.png" alt="販売QRコード">
                            </figure>
                        </div>
                        <div>
                            <figure>
                                <figcaption>買取に関するお問い合わせ</figcaption>
                                <img src="/wp-content/themes/aniera/common/img/contact/purchase_qr.png" alt="買取QRコード">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conts">
                <h2>お電話でのお問い合わせ</h2>
                <div class="indent">
                    <p><a href="tel:0263-87-3452">0263-87-3452</a><br>営業時間：10時〜17時</p>
                </div>
            </div>
            <div class="conts">
                <h2>お問い合わせフォーム</h2>

                <div class="indent">
                    <form method="post" novalidate="novalidate" data-status="init">
                    <dl class="contact_form">
                        <div>
                            <dt>お名前<span>必須</span></dt>
                            <dd><input type="text" name="your-name" value="" size="40" class="formTxt" /></dd>
                        </div>
                        <div>
                            <dt>メールアドレス<span>必須</span></dt>
                            <dd>
                                <input type="text" name="your-email" value="" size="40" class="formTxt" /></p>
                                <div>
                                    <p>パソコン・スマホのメールアドレスをご用意ください。<br>当店からのメールが届かない場合、迷惑メールフォルダに格納されているか、お客様の迷惑メール設定により除外されている場合がございます。その場合、迷惑メール設定解除をお願いします。</p>
                                    <p>■iCloudメールをお使いのお客様へ<br>【 @icloud.com 】【 @me.com 】のメールドメイン宛に当社からのメールが届かない事象が多発しております。<br>iCloud独自のスパム判定で自動的に拒否設定、または自動削除となってしまう可能性がございますので、その他のメールアドレスをお使いいただくか、【 @aniera.jp 】からのメールを受信できるよう設定をお願いいたします。</p>
                                </div>
                            </dd>
                        </div>
                        <div>
                            <dt>お問い合わせ内容<span>必須</span></dt>
                            <dd>
                                <select name="select-conts" class="formSelect extraction">
                                    <option value="事前査定(JAN)">事前査定(JAN)</option>
                                    <option value="事前査定(タイトル)">事前査定(タイトル)</option>
                                    <option value="ご質問">ご質問</option>
                                </select>
                                <div>
                                    <p>※事前査定をご希望のお客様は、下記のボックス内に、JANコード（バーコード番号）を入力してください。JANコードが分からない場合は事前査定の対象外となります。特典やグッズなどは本査定のみでの対応となりますので、予めご了承のほど、よろしくお願い致します。</p>
                                    <p>※JANコードが10個以上ある場合には、下記「追加」ボタンを押下し、ボックスを増やして下さい。</p>
                                    <p>例：4935228156726（Re:ゼロから始める異世界生活 3 [Blu-ray]のJANコード）</p>
                                </div>
                            </dd>
                        </div>
                        <div>
                            <dt>内容</dt>
                            <dd id="group-select">
                                <div id="group-select01">
                                    <div>
                                        <input type="text" name="your-name" value="" size="40" class="formTxt" />
                                        <input type="text" name="your-name" value="" size="40" class="formTxt" />
                                        <input type="text" name="your-name" value="" size="40" class="formTxt" />
                                        <input type="text" name="your-name" value="" size="40" class="formTxt" />
                                        <input type="text" name="your-name" value="" size="40" class="formTxt" />
                                    </div>
                                    <button type="button" class="submit_btnA" id="groupAdd01">追加</button>
                                </div>
                                <div id="group-select02">
                                    <div>
                                        <input type="text" name="your-name" value="" size="40" class="formTxt" />
                                        <input type="text" name="your-name" value="" size="40" class="formTxt" />
                                        <input type="text" name="your-name" value="" size="40" class="formTxt" />
                                        <input type="text" name="your-name" value="" size="40" class="formTxt" />
                                        <input type="text" name="your-name" value="" size="40" class="formTxt" />
                                    </div>
                                    <button type="button" class="submit_btnA" id="groupAdd02">追加</button>
                                </div>
                                <div id="group-select03">
                                    <textarea name="your-message" cols="40" rows="10" class="formTxt3" aria-invalid="false"></textarea>
                                </div>
                            </dd>
                        </div>
                    </dl>
                    <div class="Agree">
                        <?php
                            $page_id = 3;
                            $content = get_page($page_id);
                            echo $content -> post_content;
                        ?>
                    </div>
                    <div class="privacy_link"><input type="checkbox" id="scales" name="scales" > <label for="scales">プライバシーポリシーに同意の上送信するボタンをクリックしてください</label></div>

                    <p><input type="submit" value="送信" /></p>
                    </form>
                </div>

            </div>
            <div class="conts">
                <div class="indent">
                    <p>お問い合わせ・事前査定は常時受け付けておりますが、営業時間内のご対応、ご返信となります。ご了承ください。</p>
                    <p>定休日：土日祝日(その他臨時休業の場合有り)<br>営業時間：11時 ～ 17時30分</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>
<?php get_footer(); ?>

<style>
#group-select02 {display:none}
#group-select03 {display:none}
</style>
<script>
    $(".extraction").change(function() {
        var extraction_val = $(".extraction").val();
        if(extraction_val == "事前査定(JAN)") {
            $("#group-select01").slideDown();
            $("#group-select02").slideUp();
            $("#group-select03").slideUp();
        }else if(extraction_val == "事前査定(タイトル)") {
            $("#group-select01").slideUp();
            $("#group-select02").slideDown();
            $("#group-select03").slideUp();
        }else if(extraction_val == "ご質問") {
            $("#group-select01").slideUp();
            $("#group-select02").slideUp();
            $("#group-select03").slideDown();
        }
    });
    $(function() {
        $('button#groupAdd01').click(function(){
            var groupAdd01 = '' +
            '<input type="text" name="your-name" value="" size="40" class="formTxt" />' +
            '<input type="text" name="your-name" value="" size="40" class="formTxt" />' +
            '<input type="text" name="your-name" value="" size="40" class="formTxt" />' +
            '<input type="text" name="your-name" value="" size="40" class="formTxt" />' +
            '<input type="text" name="your-name" value="" size="40" class="formTxt" />';
            $(groupAdd01).appendTo($('#group-select01 > div'));
        });
    });
    $(function() {
        $('button#groupAdd02').click(function(){
            var groupAdd02 = '' +
            '<input type="text" name="your-name" value="" size="40" class="formTxt" />' +
            '<input type="text" name="your-name" value="" size="40" class="formTxt" />' +
            '<input type="text" name="your-name" value="" size="40" class="formTxt" />' +
            '<input type="text" name="your-name" value="" size="40" class="formTxt" />' +
            '<input type="text" name="your-name" value="" size="40" class="formTxt" />';
            $(groupAdd02).appendTo($('#group-select02 > div'));
        });
    });
</script>
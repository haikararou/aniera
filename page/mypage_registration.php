<?php
/**
 * Template Name: 新規会員登録
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead mypage_title">
                <h2>新規会員登録</h2>
            </div>
        </div>
        <div class="wrapper5">
            <div class="conts">
                <form>
                    <dl class="contact_form">
                        <div>
                            <dt>お名前<span>必須</span></dt>
                            <dd><input type="text" value="" size="40" class="formTxt2" placeholder="姓" /><input type="text" value="" size="40" class="formTxt2" placeholder="名" /></dd>
                        </div>
                        <div>
                            <dt>メールアドレス<span>必須</span></dt>
                            <dd><input type="text" value="" size="40" class="formTxt" placeholder="xxxx@xx.com" /></dd>
                        </div>
                        <div>
                            <dt>パスワード<span>必須</span></dt>
                            <dd>
                                <input type="text" value="" size="40" class="formTxt" placeholder="半角英数記号8〜32文字" />
                                <input type="text" value="" size="40" class="formTxt" placeholder="確認のためもう一度入力してください" />
                            </dd>
                        </div>
                        <div>
                            <dt>生年月日<span>必須</span></dt>
                            <dd>
                                <select name="生年月日-年" class="formSelect">
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                </select> 年 <br class="birth">
                                <select name="生年月日-月" class="formSelect">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select> 月 <br class="birth">
                                <select name="生年月日-日" class="formSelect">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select> 日 
                            </dd>
                        </div>
                        <div>
                            <dt class="non_form">性別<span>必須</span></dt>
                            <dd>
                                <input type="radio" id="male" name="sex" value="男性"><label for="male"> 男性</label>
                                <input type="radio" id="female" name="sex" value="女性"><label for="female"> 女性</label>
                            </dd>
                        </div>
                        <div>
                            <dt>住所<span>必須</span></dt>
                            <dd>
                                〒 <input type="text" value="" size="40" class="formTxt2" placeholder="例：5300001" /><br>
                                <select name="都道府県" class="prefectures formSelect">
                                    <option>都道府県を選択</option>
                                    <option value="北海道">北海道</option>
                                    <option value="青森">青森</option>
                                    <option value="秋田">秋田</option>
                                </select>
                                <input type="text" value="" size="40" class="formTxt" placeholder="市区町村名" />
                                <input type="text" value="" size="40" class="formTxt" placeholder="番地・ビル名" />
                            </dd>
                        </div>
                        <div>
                            <dt class="non_form">メールマガジン送付について<span>必須</span></dt>
                            <dd>
                                <input type="radio" id="entry_mailmaga_flg_0" name="entry[mailmaga_flg]" value="1"><label for="male"> 受け取る</label>
                                <input type="radio" id="entry_mailmaga_flg_1" name="entry[mailmaga_flg]" value="0"><label for="female"> 受け取らない</label>
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
                    <input type="submit" value="確認する" class="submit_btnA" />
                </form>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>


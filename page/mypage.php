<?php
/**
 * Template Name: マイページ
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead mypage_title">
                <h2>マイページ</h2>
            </div>
        </div>
        <div class="wrapper5">
            <div class="conts">
                <h2>お客様の注文履歴</h2>
                <p>受注番号をクリックすると詳細が表示されます</p>
                <p class="number">全○件中[ 1 - 10 ]件を表示しています </p>
                <table class="orderHistory">
                    <tr>
                        <th>受注番号</th>
                        <th>注文日</th>
                        <th>金額</th>
                    </tr>
                    <tr>
                        <td><a href="1861101">1861101</a></td>
                        <td>2021/8/23</td>
                        <td>1,735円</td>
                    </tr>
                    <tr>
                    <td><a href="1861101">1861101</a></td>
                        <td>2021/8/23</td>
                        <td>1,735円</td>
                    </tr>
                </table>
            </div>
            <div class="conts">
                <h2>マイアカウント</h2>
                <p>現在登録されている情報を表示しています。変更がある場合は、変更を入力後、「更新」ボタンをクリックしてください。</p>
                <form>
                    <dl class="contact_form">
                        <div>
                            <dt>お名前<span>必須</span></dt>
                            <dd><input type="text" value="" size="40" class="formTxt2" placeholder="小林" /><input type="text" value="" size="40" class="formTxt2" placeholder="諒" /></dd>
                        </div>
                        <div>
                            <dt>メールアドレス<span>必須</span></dt>
                            <dd><input type="text" value="" size="40" class="formTxt" placeholder="aaa@bbb.co.jp" /></dd>
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
                            <dt>性別<span>必須</span></dt>
                            <dd>
                                <input type="radio" id="male" name="sex" value="男性" checked><label for="male"> 男性</label>
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
                    </dl>
                    <input type="submit" value="更新する" class="submit_btnA" />
                </form>
            </div>
            <div class="conts">
                <h2>パスワードの変更</h2>
                <form>
                    <dl class="contact_form">
                        <div>
                            <dt>現在のパスワード<span>必須</span></dt>
                            <dd><input type="text" value="" size="40" class="formTxt" /></dd>
                        </div>
                        <div>
                            <dt>新パスワード<span>必須</span></dt>
                            <dd><input type="text" value="" size="40" class="formTxt" /></dd>
                        </div>
                        <div>
                            <dt>新パスワード（確認）<span>必須</span></dt>
                            <dd><input type="text" value="" size="40" class="formTxt" /></dd>
                        </div>
                    </dl>
                    <input type="submit" value="パスワードを再設定する" class="submit_btnA" />
                    <a href="" class="submit_btnC">ログアウトする</a>
                </form>
            </div>
            <div class="conts">
                <h2>退会する</h2>
                <p>退会すると全てのデータが削除されます</p>
                <input type="submit" value="退会する" class="submit_btnD" />
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>


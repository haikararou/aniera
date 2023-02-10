<?php
/**
 * Template Name: ご注文手続き
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead order-lead">
            <div class="lead mypage_title">
                <h2>ご注文手続き</h2>
            </div>
        </div>
        <div class="order wrapper3">
            <div class="wrapper6 orderL">
                <div class="conts">
                    <h2>注文情報</h2>
                    <div class="orderInfo">
                        <figure><img src="/wp-content/uploads/2021/07/ph_04.jpg"></figure>
                        <div class="orderInfo_txt">
                            <h2>TEE’21 SHIBUYA / 電音部</h2>
                            <p>Mサイズ</p>
                            <p>ブラック</p>
                            <div class="price_box">
                                <div class="delete"><a href="">削除</a></div>
                                <div class="spinner_area">
                                    <button class="minus">－</button>
                                    <input type="text" name="input01" value="0" readonly class="number">
                                    <button class="plus">＋</button>
                                </div>
                                <div class="price">1,735円</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="conts">
                    <h2>お届け先</h2>
                    <form>
                        <dl class="contact_form choices">
                            <div>
                                <dt>お届け先</dt>
                                <dd>
                                    <input type="radio" id="decision" name="addressee" value="登録されたご住所" onclick="hyoji2()" checked><label for="decision"> 登録されたご住所</label>
                                    <input type="radio" id="new" name="addressee" value="別のお届け先発送する" onclick="hihyoji2()"><label for="new"> 別のお届け先</label>
                                </dd>
                            </div>
                        </dl>
                        <div id="addressee_decision">
                            <p class="asterisk">※「登録されたご住所」を変更して注文した場合は、マイページの情報も更新されます。<br>今回のご注文のみ住所を変更したい場合は「別のお届け先」にチェックを入れてご住所を入力してください。</p>
                            <dl class="contact_form">
                                <div>
                                    <dt>お名前</dt>
                                    <dd><input type="text" value="小林諒" size="40" class="formTxt" /></dd>
                                </div>
                                <div>
                                    <dt>ふりがな</dt>
                                    <dd><input type="text" value="こばやしりょう" size="40" class="formTxt" /></dd>
                                </div>
                                <div>
                                    <dt>ご住所</dt>
                                    <dd>
                                    〒 <input type="text" value="5300001" size="40" class="formTxt2" /><br>
                                    <select name="都道府県" class="prefectures formSelect">
                                        <option>都道府県を選択</option>
                                        <option value="北海道">北海道</option>
                                        <option value="青森県">青森県</option>
                                        <option value="秋田県">秋田県</option>
                                        <option value="長野県" selected>長野県</option>
                                    </select>
                                    <input type="text" value="安曇野市" size="40" class="formTxt" />
                                    <input type="text" value="○○○○" size="40" class="formTxt" /></dd>
                                </div>
                                <div>
                                    <dt>電話番号</dt>
                                    <dd><input type="tel" value="09012345678" size="40" class="formTxt" /></dd>
                                </div>
                            </dl>
                        </div>
                        <div id="addressee_new">
                            <dl class="contact_form">
                                <div>
                                    <dt>お名前<span>必須</span></dt>
                                    <dd><input type="text" value="" size="40" class="formTxt" placeholder="小林諒" /></dd>
                                </div>
                                <div>
                                    <dt>ふりがな<span>必須</span></dt>
                                    <dd><input type="text" value="" size="40" class="formTxt" placeholder="こばやしりょう" /></dd>
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
                                    <dt>電話番号</dt>
                                    <dd><input type="tel" value="" size="40" class="formTxt" placeholder="09012345678" /></dd>
                                </div>
                            </dl>
                        </div>
                    </form>
                </div>
                <div class="conts">
                    <h2>お支払い方法</h2>
                    <form>
                        <dl class="contact_form choices">
                            <div>
                                <dt>お支払い方法</dt>
                                <dd>
                                    <input type="radio" id="male" name="sex" value="クレジットカード" onclick="hyoji()" checked><label for="male"> クレジットカード</label>
                                    <input type="radio" id="female" name="sex" value="アトディーネ" onclick="hihyoji()"><label for="female"> アトディーネ</label>
                                </dd>
                            </div>
                        </dl>
                        <dl class="contact_form" id="creditCard">
                            <div>
                                <dt>カード番号</dt>
                                <dd><input type="text" value="" size="40" class="formTxt" /></dd>
                            </div>
                            <div>
                                <dt>カード有効期限</dt>
                                <dd>
                                    <select name="カード有効期限-月" class="formSelect">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select> 月 <br class="birth">
                                    <select name="カード有効期限-年" class="formSelect">
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                    </select> 年
                                </dd>
                            </div>
                            <div>
                                <dt>セキュリティコード</dt>
                                <dd><input type="text" value="" size="40" class="formTxt2" /></dd>
                            </div>
                            <div>
                                <dt>支払い方法</dt>
                                <dd>
                                    <select name="支払い方法" class="formSelect">
                                        <option value="一括払い">一括払い</option>
                                    </select>
                                </dd>
                            </div>
                        </dl>
                        <div id="atodene">
                            <figure><img src="/wp-content/uploads/2021/09/atodene.png" alt=""></figure>
                            <p>ジャックス・ペイメント・ソリューションズ株式会社が提供する後払い決済サービスです。<br>
                            購入商品の到着を確認してから、コンビニエンスストア・金融機関で後払いできる安心・簡単な決済方法です。<br>
                            請求書は、商品とは別に郵送されますので、発行から14日以内にお支払ください。</p>
                            <p>アトディーネ決済手数料：324 円（税込）<br>ご利用限度額：<span>累計残高で54,000 円（税込）迄（他店舗含む）</span></p>
                            <p><span>お客様は上記バナーをクリックし「注意事項」及び「個人情報の取扱いについて」に記載の内容をご確認・ご承認の上、<br>
                            本サービスのお申し込みを行うものとします。<br>
                            ※ご承認いただけない場合は本サービスのお申し込みをいただけませんので、ご了承ください。</span></p>
                            <p>※以下の場合サービスをご利用いただけません。予めご了承ください。<br>
                            ・郵便局留め・運送会社営業所留め（営業所での引き取り）<br>
                            ・商品の転送<br>
                            ・コンビニ店頭での受け渡し<br>
                            ※ご本人様確認のため、ご連絡させて頂くことがございます。予めご了承ください。</p>
                        </div>
                    </form>
                </div>
                <div class="conts">
                    <h2>ポイント</h2>
                    <form>
                        <dl class="contact_form">
                            <div>
                                <dt>ポイントを利用する</dt>
                                <dd><div class="point_flex"><input type="text" value="" size="40" class="formTxt2" /> <input type="button" value="適用" class="submit_btnE" /></div><br>現在の所持ポイントは〇〇です</dd>
                            </div>
                        </dl>
                    </form>
                </div>
                <div class="conts">
                    <h2>お届け希望日</h2>
                    <form>
                        <dl class="contact_form">
                            <div>
                                <dt>希望日</dt>
                                <dd>
                                    お届け日 <select name="お届け日" class="formSelect deliveryDate">
                                        <option>指定なし</option>
                                        <option value="9月27日（月）">9月27日（月）</option>
                                        <option value="9月28日（月）">9月28日（火）</option>
                                        <option value="9月29日（月）">9月29日（水）</option>
                                    </select><br>
                                    お届け時間 <select name="お届け時間" class="formSelect">
                                        <option>指定なし</option>
                                        <option value="午前">午前</option>
                                        <option value="午後">午後</option>
                                    </select>
                                </dd>
                            </div>
                        </dl>
                    </form>
                </div>
            </div>
            <div class="orderR">
                <div class="orderR_box">
                    <dl class="orderR_dl01">
                        <div>
                            <dt>小計</dt>
                            <dd>￥5,000</dd>
                        </div>
                        <div>
                            <dt>利用ポイント</dt>
                            <dd>0pt</dd>
                        </div>
                        <div>
                            <dt>手数料</dt>
                            <dd>￥324</dd>
                        </div>
                        <div>
                            <dt>送料</dt>
                            <dd>￥5,324</dd>
                        </div>
                    </dl>
                    <div class="orderR_price">
                        <span>合計</span>￥5,000<span>税込</span>
                    </div>
                    <dl class="orderR_dl02">
                        <div>
                            <dt>加算ポイント</dt>
                            <dd>50pt</dd>
                        </div>
                    </dl>
                    <input type="submit" value="注文を確定する" class="submit_btnA" />
                    <a href="" class="submit_btnC">カートに戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>
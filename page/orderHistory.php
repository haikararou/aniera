<?php
/**
 * Template Name: 注文履歴詳細
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead mypage_title">
                <h2>注文履歴詳細</h2>
            </div>
        </div>
        <div class="wrapper5">
            <div class="conts">
                <h2>注文情報</h2>
                <table class="orderHistory">
                    <tr>
                        <th>受注番号</th>
                        <th>注文日</th>
                        <th>ご注文者指名</th>
                        <th>決済方法</th>
                    </tr>
                    <tr>
                        <td>1861101</td>
                        <td>2021年8月23日（月）</td>
                        <td>小林諒</td>
                        <td>銀行振込</td>
                    </tr>
                </table>
            </div>
            <div class="conts">
                <h2>お届け先・商品詳細情報</h2>
                <dl class="contact_form non_form">
                    <div>
                        <dt>お名前</dt>
                        <dd>小林諒</dd>
                    </div>
                    <div>
                        <dt>郵便番号</dt>
                        <dd>399-8102</dd>
                    </div>
                    <div>
                        <dt>ご住所</dt>
                        <dd>長野県安曇野市○○○○</dd>
                    </div>
                    <div>
                        <dt>電話番号</dt>
                        <dd>09012345678</dd>
                    </div>
                    <div>
                        <dt>備考</dt>
                        <dd>備考の内容がはいります</dd>
                    </div>
                    <div>
                        <dt>発送状態</dt>
                        <dd>未発送</dd>
                    </div>
                    <div>
                        <dt>お届け希望日</dt>
                        <dd>2021年8月30日（月）</dd>
                    </div>
                    <div>
                        <dt>お届け希望時間帯</dt>
                        <dd>18：00</dd>
                    </div>
                    <div>
                        <dt>配送会社</dt>
                        <dd>ヤマト運輸</dd>
                    </div>
                </dl>
            </div>
            <div class="conts">
                <table class="orderHistory">
                    <tr>
                        <th>型番</th>
                        <th>商品名</th>
                        <th>価格</th>
                        <th>数量</th>
                        <th>価格</th>
                    </tr>
                    <tr>
                        <td>XXXXXXXXXX</td>
                        <td>商品名がはいります</td>
                        <td>1,155円</td>
                        <td>1個</td>
                        <td>1,155円</td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <div>
                                <div>個別送料（税込）</div>
                                <div>580円</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <div>
                                <div>配送先合計</div>
                                <div>1,735円</div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="conts">
                <h2>商品総合計情報</h2>
                <table class="orderHistory">
                    <tr>
                        <td>
                            <div>
                                <div>商品合計（税込）</div>
                                <div>1,155円</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div>送料合計（税込）</div>
                                <div>580円</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div>決済手数料（税込）</div>
                                <div>0円</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div>合計</div>
                                <div>1,735円</div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="conts">
                <a href="" class="submit_btnC">戻る</a>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>


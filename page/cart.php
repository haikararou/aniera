<?php
/**
 * Template Name: カートに入っている商品
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead mypage_title">
                <h2>カートに入っている商品</h2>
            </div>
        </div>
        <div class="wrapper5">
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
                <input type="submit" value="ご購入の手続きへ" class="submit_btnA" />
                <a href="" class="submit_btnC">買い物を続ける</a>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>

<!-- <script>
$(function(){
	var number,total_numner;
	var max = 999; //合計最大数
	var $input = $('.spinner_area .number'); //カウントする箇所
	var $plus = $('.spinner_area .plus'); //アップボタン
	var $minus = $('.spinner_area .minus'); //ダウンボタン
	//合計カウント用関数
	function total() {
		total_numner = 0;
		$input.each(function(val) {
			val = Number($(this).val());
			total_numner += val;
		});
		return total_numner;
	}
	//ロード時
	$(window).on('load', function() {
		$input.each(function() {
			number = Number($(this).val());
			if (number == max) {
				$(this).next($plus).prop("disabled", true);
			} else if (number == 0) {
				$(this).prev($minus).prop("disabled", true);
			}
		});
		total();
		if (total_numner == max) {
			$plus.prop("disabled", true);
		} else {
			$plus.prop("disabled", false);
		}
	});
	//ダウンボタンクリック時
	$minus.on('click', function() {
		total();
		number = Number($(this).next($input).val());
		if (number > 0) {
			$(this).next($input).val(number - 1);
			if ((number - 1) == 0) {
			$(this).prop("disabled", true);
			}
			$(this).next().next($plus).prop("disabled", false);
		} else {
			$(this).prop("disabled", true);
		}
		total();
		if (total_numner < max) {
			$plus.prop("disabled", false);
		}
	});
	//アップボタンクリック時
	$plus.on('click', function() {
		number = Number($(this).prev($input).val());
		if (number < max) {
			$(this).prev($input).val(number + 1);
			if ((number + 1) == max) {
			$(this).prop("disabled", true);
			}
			$(this).prev().prev($minus).prop("disabled", false);
		} else {
			$(this).prop("disabled", true);
		}
		total();
		if (total_numner == max) {
			$plus.prop("disabled", true);
		} else {
			$plus.prop("disabled", false);
		}
	});
});
</script> -->


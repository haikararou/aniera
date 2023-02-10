           <div class="bottom-links">
						 <?php 
              if (get_previous_post()) { //前の記事があれば「前へ」のリンクを表示
                echo get_previous_post_link('%link', 'PREV');
              }else {
                echo '<span class="nolink">PREV</span>';
              }
             ?>
             <a href="<?php echo get_post_type_archive_link(get_current_post_type_slug()); ?>">TOP</a>
             <?php
              if (get_next_post()) { //次の記事があれば「次へ」のリンクを表示
                echo get_next_post_link('%link', 'NEXT');
               } else {
                echo '<span class="nolink">NEXT</span>';
              }
             ?>
            </div>
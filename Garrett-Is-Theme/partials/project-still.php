<?php 







$title = get_the_title();



$images = get_field('gallery');



$description = get_field('description');



?>











<? if( $images ): ?>



    <div id="slider" class="flexslider col-left" style="width:100%;">



        <ul class="slides">



            <? if ( $description ): ?>



                <li class="grid--box description">



                    <h4 style="float:left;"><? echo $title; ?></h4><i class="fa fa-arrows-h" style="float:right;font-size:2rem;"></i>



                    <hr style="clear:both;">



                    <p>{{the_content()}}</p>



                </li>



            <? endif ?>



            @foreach( $images as $image )



                <? $i = $i+1; $width = $image['width']; $height = $image['height']; $id = $image['id'];?>







                    <li class="grid--box" style="padding:25px 25px 0 25px;">



                        <a href="<? echo $image['url']; ?>"> <img src="<? echo $image['url']; ?>" alt="<? echo $image['alt']; ?>" style="max-height:65vh;"/>



                            <div class="meta--inner">



                                <h4><?php echo $image['title']; ?></h4>



                                <? $description = $image['description']; ?>



                                <? if ($description): ?><p style="font-weight:bold;"<? else: ?><p><? endif ?><?php echo $image['caption']; ?></p>



                                <p><?php echo $image['description']; ?></p>



                            </div>



                        </a>



                    </li>



                



            <?php endforeach; ?>



        </ul>



    </div>



<? endif; ?>
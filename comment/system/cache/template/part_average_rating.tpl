<div class="cmtx_average_rating_block"><div class="cmtx_average_rating <?php echo $average_rating_guest; ?>"><input type="radio" id="cmtx_avg_star_5" name="cmtx_rating" value="5" <?php echo $rating_5_checked; ?>><label for="cmtx_avg_star_5" title="<?php echo $this->variable->encodeDouble($lang_title_avg_rating_5); ?>"></label><input type="radio" id="cmtx_avg_star_4" name="cmtx_rating" value="4" <?php echo $rating_4_checked; ?>><label for="cmtx_avg_star_4" title="<?php echo $this->variable->encodeDouble($lang_title_avg_rating_4); ?>"></label><input type="radio" id="cmtx_avg_star_3" name="cmtx_rating" value="3" <?php echo $rating_3_checked; ?>><label for="cmtx_avg_star_3" title="<?php echo $this->variable->encodeDouble($lang_title_avg_rating_3); ?>"></label><input type="radio" id="cmtx_avg_star_2" name="cmtx_rating" value="2" <?php echo $rating_2_checked; ?>><label for="cmtx_avg_star_2" title="<?php echo $this->variable->encodeDouble($lang_title_avg_rating_2); ?>"></label><input type="radio" id="cmtx_avg_star_1" name="cmtx_rating" value="1" <?php echo $rating_1_checked; ?>><label for="cmtx_avg_star_1" title="<?php echo $this->variable->encodeDouble($lang_title_avg_rating_1); ?>"></label></div><?php if ($rich_snippets_enabled): ?><div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" style="line-height:0"><span class="cmtx_average_rating_stats"><span class="cmtx_average_rating_stat_rating" itemprop="ratingValue"><?php echo $average_rating; ?></span>/<span class="cmtx_average_rating_stat_maximum" itemprop="bestRating">5</span> (<span class="cmtx_average_rating_stat_number" itemprop="reviewCount"><?php echo $num_of_ratings; ?></span>)</span></div><?php foreach ($rich_snippets_properties as $rich_snippets_property): ?><meta itemprop="<?php echo $rich_snippets_property['name']; ?>" content="<?php echo $rich_snippets_property['value']; ?>"><?php endforeach; ?><?php else: ?><span class="cmtx_average_rating_stats"><span class="cmtx_average_rating_stat_rating"><?php echo $average_rating; ?></span>/<span class="cmtx_average_rating_stat_maximum">5</span> (<span class="cmtx_average_rating_stat_number"><?php echo $num_of_ratings; ?></span>)</span><?php endif; ?></div>
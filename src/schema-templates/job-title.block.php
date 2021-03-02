<?php // phpcs:ignore Internal.NoCodeFound ?>
{{block name="yoast/job-title" title="<?php esc_attr_e( 'Job title', 'wordpress-seo-premium' ); ?>" category="common" parent=[ "yoast/job-posting" ] supports={"multiple": false}}}
<div class={{class-name}}>
	{{variable-tag-rich-text name="title" tags=[ "h2", "h3", "h4", "h5", "h6", "strong" ] placeholder="<?php esc_attr_e( 'Enter job title', 'wordpress-seo-premium' ); ?>"}}
</div>

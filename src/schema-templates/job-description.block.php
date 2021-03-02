<?php // phpcs:ignore Internal.NoCodeFound ?>
{{block name="yoast/job-description" title="<?php esc_attr_e( 'Job description', 'wordpress-seo-premium' ); ?>" category="common" parent=[ "yoast/job-posting" ] supports={"multiple": false} }}
<div class={{class-name}}>
	{{rich-text name="description" tag="p" placeholder="<?php esc_attr_e( 'Enter a job description...', 'wordpress-seo-premium' ); ?>"}}
</div>

<!-- Check Authorize -->
<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('请不要直接加载该页面。谢谢！');
	if (post_password_required()){
		?> <p class="nopassword">受密码保护，请输入密码来查看评论。</p> <?php
		return;
	}
?>
<!-- Comment List -->
<?php if ( have_comments() ) : ?>
	<div id="comments" class="comment-title gdl-link-title gdl-title">
	<?php comments_number(__('发表评论','gdl_front_end'), __('1 条评论','gdl_front_end'), __('% 条评论','gdl_front_end') );?>
	</div>
	<ol class="comment-list">
		<?php wp_list_comments(array('callback' => 'get_comment_list')); ?>
	</ol>
	<!-- Comment Navigation -->
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<br>
		<div class="comments-navigation">
			<div class="previous"> <?php previous_comments_link('较早的评论'); ?> </div>
			<div class="next"> <?php next_comments_link('较新的评论'); ?> </div>
		</div>
	<?php endif; ?>
<?php endif; ?>
<!-- Comment Form -->
<?php 

	// Translator words
	global $gdl_admin_translator;
	if( $gdl_admin_translator == 'enable' ){
		$translator_leave_reply = get_option(THEME_SHORT_NAME.'_translator_leave_reply', '发表评论');
	}else{
		$translator_leave_reply = __('发表评论','gdl_front_end');
	}	

	$comment_form = array( 
		'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' => '<div class="comment-form-author">' .
						'<input id="author" name="author" type="text" value="' .
						esc_attr( $commenter['comment_author'] ) . '" size="30" tabindex="1" />' .
						'<label for="author">' . __( '姓名', 'gdl_front_end' ) . '</label> ' .
						( $req ? '<span class="required">*</span>' : '' ) .	
						'<div class="clear"></div>' .
						'</div><!-- #form-section-author .form-section -->',
			'email'  => '<div class="comment-form-email">' .
						'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" tabindex="2" />' .
						'<label for="email">' . __( '电子邮件', 'gdl_front_end' ) . '</label> ' .
						( $req ? '<span class="required">*</span>' : '' ) .
						'<div class="clear"></div>' .
						'</div><!-- #form-section-email .form-section -->',
			'url'    => '<div class="comment-form-url">' .
						'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" tabindex="3" />' .
						'<label for="url">' . __( '网址', 'gdl_front_end' ) . '</label>' .
						'<div class="clear"></div>' .
						'</div><!-- #form-section-url .form-section -->' ) ),
		'comment_field' => '<div class="comment-form-comment">' .
					'<textarea id="comment" name="comment" aria-required="true"></textarea>' .
					'</div><!-- #form-section-comment .form-section -->',
		'comment_notes_before' => '',
		'comment_notes_after' => '',
		'title_reply' => $translator_leave_reply,
	);
	comment_form($comment_form, $post->ID); 
	
/*
$defaults = array( 'fields' => apply_filters( 'comment_form_default_fields', array(
    'author' => '<p class="comment-form-author">' .
                '<label for="author">' . __( '姓名' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="author" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30" tabindex="1"' . $aria_req . ' />' .
                '</p><!-- #form-section-author .form-section -->',
    'email'  => '<p class="comment-form-email">' .
                '<label for="email">' . __( '电子邮件' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" tabindex="2"' . $aria_req . ' />' .
                '</p><!-- #form-section-email .form-section -->',
    'url'    => '<p class="comment-form-url">' .
                '<label for="url">' . __( '网址' ) . '</label>' .
                '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" tabindex="3" />' .
                '</p><!-- #form-section-url .form-section -->' ) ),
    'comment_field' => '<p class="comment-form-comment">' .
                '<label for="comment">' . __( '评论' ) . '</label>' .
                '<textarea id="comment" name="comment" cols="45" rows="8" tabindex="4" aria-required="true"></textarea>' .
                '</p><!-- #form-section-comment .form-section -->',
    'must_log_in' => '<p class="must-log-in">' .  sprintf( __( '您必需 <a href="%s">登陆</a> 后才能发表评论。' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
    'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( '目前登陆： <a href="%s">%s</a>. <a href="%s" title="登出">注销?</a></p>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ),
    'comment_notes_before' => '<p class="comment-notes">' . __( '您的电子邮件不会公开。' ) . ( $req ? __( ' 必需字段标记 <span class="required">*</span>' ) : '' ) . '</p>',
    'comment_notes_after' => '<dl class="form-allowed-tags"><dt>' . __( '您可以使用 <abbr title="超文本标记语言">HTML</abbr> 标签和属性:' ) . '</dt> <dd><code>' . allowed_tags() . '</code></dd></dl>',
    'id_form' => 'commentform',
    'id_submit' => 'submit',
    'title_reply' => __( '回复' ),
    'title_reply_to' => __( '回复 %s' ),
    'cancel_reply_link' => __( '取消回复' ),
    'label_submit' => __( '发表评论' ),
);

*/
?>